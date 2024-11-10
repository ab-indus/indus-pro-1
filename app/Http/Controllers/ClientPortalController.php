<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ChangeRequest;

use App\Models\User;
use Spatie\Permission\Models\Role;
use DB;
use Hash;
use Illuminate\Support\Arr;
use App\Models\ClientUser;
use App\Models\PolicyNew;

use App\Models\ClientChangeHistory;
use App\Models\ClientPay;
use Illuminate\Support\Facades\Auth;



class ClientPortalController extends Controller
{
    public function MainForm()
    {

        // $policy = PolicyNew::all();
        $policy = PolicyNew::where('user_id', Auth::id())->get();

 
        return view('clientPortal.mainForm' , compact('policy'));     
    }
    
    public function PolicyManage($id)
    {
        // $policy = PolicyNew::all();
        // $policy = PolicyNew::where('user_id', Auth::id())->get();
        $data = PolicyNew::findOrFail($id);

        return view('clientPortal.PolicyManage' , compact('data','id'));     
    }


    
    public function PayRequest()
    {
        $data = ClientPay::all()->map(function ($item) {
            $item->status = $item->status ?? 'Pending';
            return $item;
        });

        return view('clientPortal.payRequest',compact('data'));     
    }

    
    public function PayHistory()
    {
        $data = ClientPay::where('status', 'Complete')->get(); 

        return view('clientPortal.payHistory',compact('data'));     
    }

    public function updateStatus(Request $request, $id)
    {
        $pay = ClientPay::findOrFail($id);
    
        // Update the status
        $pay->status = $request->status;
        $pay->save();
    
        // If the status is set to 'Complete', create a log entry in leadHistory
        if ($request->status === 'Complete') {
            DB::table('general_lead')->insert([
                'contact_medium' => 'Client Portal',
                'last_name' => $pay->last_name,
                'first_name' => $pay->first_name,
                'contact_number' => $pay->phone,
                'agent_name' => 'Client',
                'question' => 'Client Direct Payment',

          
                'created_at' => now(),
                'updated_at' => now(),
            ]);

              // Insert a record in payment_policy
            DB::table('payment_policy')->insert([
                'policy_id' => $id, // Assuming this is the same as the ClientPay ID; adjust if needed
                'person' => $pay->preferred_name ?? ($pay->first_name . ' ' . $pay->last_name),
                'first_name' => $pay->first_name,
                'last_name' => $pay->last_name,
                'carrier' => $pay->carrier,
                'amount_due' => $pay->amount_due,
                'due_date' => $pay->due_date,
                'new_amount_due' => null, // Set if there's a new amount due
                'new_due_date' => null, // Set if there's a new due date
                'amount_paid_cc' => $pay->amount_paid_cc,
                'amount_paid_cash' => $pay->amount_paid_cash,
                'direct_pay' => $pay->direct_pay,
                'name_on_card' => $pay->name_on_card,
                'debit_card' => $pay->debit_card,
                'number_1st_4' => $pay->number_1st_4,
                'number_2nd_4' => $pay->number_2nd_4,
                'number_3rd_4' => $pay->number_3rd_4,
                'number_4th_4' => $pay->number_4th_4,
                'expiration_1' => $pay->expiration_1,
                'expiration_2' => $pay->expiration_2,
                'billing_zip' => $pay->billing_zip,
                'cvc' => $pay->cvc,
                'notes' => 'Client Direct Payment',
                'created_at' => now(),
                'updated_at' => now(),
            ]);


        }
    
        return redirect()->route('ClientPortal.PayRequest')->with('success', 'Status updated successfully.');
    }
    

    
    public function ChangeRequest()
    {
        $data = ChangeRequest::all(); 

        return view('clientPortal.change',compact('data'));     
    }

    public function ChangeHistory()
    {
        // $data = ClientChangeHistory::all(); 
        // $data = ChangeRequest::all(); 
        $data = ChangeRequest::whereIn('completed', ['Done', 'Quoted / No Change'])->get();

        

        return view('clientPortal.changeHistory',compact('data'));     
    }

    public function updateChangeNote(Request $request, $id)
    {
        // Validate the input
        $request->validate([
            'agent_notes' => 'nullable|string',
        ]);

        // Find the change request entry by ID
        $changeRequest = ChangeRequest::findOrFail($id);
        $changeRequest->agent_notes = $request->agent_notes;
        $changeRequest->save();

        return response()->json(['success' => true]);
    }


    public function updateChangeStatus(Request $request, $id)
    {
        $changeRequest = ChangeRequest::findOrFail($id);
    
        // Update the 'completed' field and set done_time if status is 'Done'
        $changeRequest->completed = $request->completed;
        $changeRequest->done_time = $request->completed === 'Done' ? now() : null;
        $changeRequest->agent = Auth::user()->name;
        $changeRequest->save();
    
        // If completed is true, create a new entry in clientChangeHistory
        if ($request->completed) {
            ClientChangeHistory::create([
                'carrier' => $changeRequest->carrier,
                'policy_number' => $changeRequest->policy_number,
                'type_of_policy' => $changeRequest->type_of_policy,
                'driver_action' => $changeRequest->driver_action,
                'driver_name' => $changeRequest->driver_name,
                'dl' => $changeRequest->dl,
                'vehicle_option' => $changeRequest->vehicle_option,
                'vin' => $changeRequest->vin,
                'year' => $changeRequest->year,
                'make' => $changeRequest->make,
                'model' => $changeRequest->model,
                'change_option' => $changeRequest->change_option,
                'new_phone_number' => $changeRequest->new_phone_number,
                'new_email' => $changeRequest->new_email,
                'new_address' => $changeRequest->new_address,
                'agent' => $changeRequest->agent,
                'first_name' => $changeRequest->first_name,
                'last_name' => $changeRequest->last_name,
                'phone' => $changeRequest->phone,
                'auto_pay' => $changeRequest->auto_pay,
                'coverage' => $changeRequest->coverage,
                'lien_option' => $changeRequest->lien_option,
                'notes' => $changeRequest->notes,
                'agent_notes' => $changeRequest->agent_notes,
                'completed' => $changeRequest->completed,
                'done_time' => $changeRequest->done_time,
                // 'policy_id' => $changeRequest->policy_id // if policy_id exists in change_requests
            ]);
        }
    
        return response()->json(['success' => true]);
    }


    // register code 
    public function ClientRegister()
    {
        $roles = Role::pluck('name','name')->all();
        // $policy = PolicyNew::all();
        $policy = PolicyNew::whereNull('user_id')->get();


        return view('clientPortal.register',compact('roles','policy'));
    }
    
    public function ClientRegisterStore(Request $request)
    {
        // Validate the request
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|same:password_confirmation',
            'roles' => 'required'
        ]);

        // Split the full name into first and last name
        $nameParts = explode(' ', $request->input('name'), 2);
        $firstName = $nameParts[0];
        $lastName = $nameParts[1] ?? null; // Set as null if no last name provided

        // Prepare user data and hash the password
        $input = $request->only('email', 'password');
        $input['name'] = $request->input('name');
        $input['type'] = $request->input('type');
        $input['password'] = Hash::make($input['password']);

        // Create the User entry
        $user = User::create($input);
        $user->assignRole($request->input('roles'));

        // Create the ClientUser entry using the newly created user's ID
        ClientUser::create([
            'first_name' => $firstName,
            'last_name' => $lastName,
            'email' => $request->input('email'),
            'user_id' => $user->id,
            'policy_count' => 0 // Initialize policy count as 0 or default value
        ]);

         // Update the policy's user_id field if a policy was selected
            if ($request->has('policy_id')) {
                $policyIds = $request->input('policy_id');
                PolicyNew::whereIn('id', $policyIds)->update(['user_id' => $user->id]);
            }

        return redirect()->route('users.index')
                        ->with('message', 'Client User created successfully');
    }
   

    public function MainFormStore(Request $request)
    {
        // dd($request->all());

          // Check if "options" is "Make Payment"
        if ($request->input('options') === 'Make Payment') {
            // Create a new ClientPay record
            $clientPay = ClientPay::create([
                'user_id' => auth()->id(),
                'policy_id' => $request->input('policy_id'),

                
                'last_name' => $request->input('last_name2'),
                'first_name' => $request->input('first_name2'),
                'middle_name' => $request->input('middle_name2'),
                'preferred_name' => $request->input('preferred_name2'),
                'carrier' => $request->input('carrier2'),
                'policy_number' => $request->input('policy_number2'),
                'type_of_policy' => $request->input('type_of_policy2'),
                'due_date' => $request->input('due_date2'),
                'amount_due' => $request->input('amount_due2'),
                'amount_paid_cc' => $request->input('amount_paid_cc2'),
                'amount_paid_cash' => $request->input('amount_paid_cash2'),
                'direct_pay' => $request->input('direct_pay2'),
                'name_on_card' => $request->input('name_on_card2'),
                'debit_card' => $request->input('debit_card2'),
                'number_1st_4' => $request->input('number_1st_42'),
                'number_2nd_4' => $request->input('number_2nd_42'),
                'number_3rd_4' => $request->input('number_3rd_42'),
                'number_4th_4' => $request->input('number_4th_42'),
                'expiration_1' => $request->input('expiration_12'),
                'expiration_2' => $request->input('expiration_22'),
                'billing_zip' => $request->input('billing_zip2'),
                'cvc' => $request->input('cvc2'),
                'email' => $request->input('email'),
                'phone' => $request->input('phone22'),
                'dob' => $request->input('dob'),
                'ssn' => $request->input('ssn'),
                'zip' => $request->input('zip'),
                'type_of_id' => $request->input('type_of_id'),
                'dl_id' => $request->input('dl_id'),
                'insured_items' => $request->input('insured_items'),
                'insured_drivers' => $request->input('insured_drivers'),
                'excluded_drivers' => $request->input('excluded_drivers'),
                'lien' => $request->input('lien'),
                'effective_date' => $request->input('effective_date'),
                'expiration_date' => $request->input('expiration_date'),
                'term_months' => $request->input('term_months'),
                'base_premium' => $request->input('base_premium'),
                'state_fee_mvca' => $request->input('state_fee_mvca'),
                'policy_fee' => $request->input('policy_fee'),
                'roadside_assistance_fee' => $request->input('roadside_assistance_fee'),
                'sr22' => $request->input('sr22'),
                'other_fee' => $request->input('other_fee'),
                'total_premium' => $request->input('total_premium'),
                'annual_premium' => $request->input('annual_premium'),
                'status' => 'Pending',
            ]);

            // return response()->json(['success' => true, 'data' => $clientPay]);
            return redirect()->route('ClientPortal.MainForm')->with('message', 'Data Sent Successfully');

        }

        if ($request->input('options') === 'Request Change') {

                    // Validate the request
                    $validatedData = $request->validate([
                        'carrier3' => 'nullable|string|max:255',
                        'policy_number3' => 'nullable|string|max:255',
                        'type_of_policy3' => 'nullable|string|max:255',
                        'driver_action' => 'nullable|string|max:255',
                        'driver_name3' => 'nullable|string|max:255',
                        'dl3' => 'nullable|string|max:255',
                        'vehicle_option' => 'nullable|string|max:255',
                        'vin3' => 'nullable|string|max:255',
                        'year3' => 'nullable|string|max:255',
                        'make3' => 'nullable|string|max:255',
                        'model3' => 'nullable|string|max:255',
                        'change_option' => 'nullable|string|max:255',
                        'new_phone_number3' => 'nullable|string|max:255',
                        'new_email3' => 'nullable|email|max:255',
                        'new_address3' => 'nullable|string|max:255',
                        'completed' => 'nullable|string|max:255',

                        
                    ]);
                
                    // Store the validated data in the ChangeRequest model
                    ChangeRequest::create([
                        'policy_id' => $request->input('policy_id'),

                        'carrier' => $validatedData['carrier3'],
                        'policy_number' => $validatedData['policy_number3'],
                        'type_of_policy' => $validatedData['type_of_policy3'],
                        'driver_action' => $validatedData['driver_action'],
                        'driver_name' => $validatedData['driver_name3'],
                        'dl' => $validatedData['dl3'],
                        'vehicle_option' => $validatedData['vehicle_option'],
                        'vin' => $validatedData['vin3'],
                        'year' => $validatedData['year3'],
                        'make' => $validatedData['make3'],
                        'model' => $validatedData['model3'],
                        'change_option' => $validatedData['change_option'],
                        'new_phone_number' => $validatedData['new_phone_number3'],
                        'new_email' => $validatedData['new_email3'],
                        'new_address' => $validatedData['new_address3'],
                        'completed' => $validatedData['completed'],

                        
                    ]);
                
                    // Redirect back with a success message
                    return redirect()->route('ClientPortal.MainForm')->with('message', 'Data Sent Successfully');
        }


    }
    
}
