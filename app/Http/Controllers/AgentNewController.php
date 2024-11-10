<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AgentNew;
use App\Models\AgentTask;
use App\Models\PolicyChange;
use App\Models\PolicyNew;
use App\Models\GeneralLead;
use App\Models\LeadHistory;
use App\Models\AgentTODOList;
use App\Models\PaymentPolicy;
use App\Models\User;
use Hash;



use Illuminate\Support\Facades\Log;



class AgentNewController extends Controller
{
    public function index()
    {
        $data = AgentNew::all(); 

        return view('agent_new.index' ,compact('data'));   
    }


    public function PolicyChangeHistory1()
    {
        $data = PolicyChange::all(); 

       //  return "nice";

        return view('policy_new.change', compact('data'));
       }

    // $data = AgentTask::with('agentNew')->get();

    public function task()
    {
        // $data = AgentTODOList::all();
        // $data = AgentTODOList::where('done', 0)->get();
        $data = AgentTODOList::whereNull('done')
        ->orWhere('done', 0)
        ->get();

        
        return view('agent_new.agent_task' ,compact('data'));   
    }

    
    public function taskHistory()
    {
        $data = AgentTODOList::where('done', 1)->get();
        
        return view('agent_new.taskHistory' ,compact('data'));   
    }

    public function updateTask(Request $request, $id)
    {
        $task = AgentTODOList::findOrFail($id);
    
        // Only update fields if they are present in the request
        if ($request->has('done')) {
            $task->done = $request->input('done');
            
            // Update done time if 'Done' field is set to "Done"
            if ($request->input('done') == 'Done') {
                $task->done_time = now();
            }
        }
    
        if ($request->has('doc_save')) {
            $task->doc_save = $request->input('doc_save');
        }
    
        if ($request->has('proof_upload')) {
            $task->proof_upload = $request->input('proof_upload');
        }
    
        if ($request->has('picture_upload')) {
            $task->picture_upload = $request->input('picture_upload');
        }
    
        if ($request->has('notes')) {
            $task->notes = $request->input('notes');
        }
    
        $task->save();
    
        return response()->json(['success' => true, 'done_time' => $task->done_time]);
    }
    


    public function create()
    {
        
        $policy = PolicyNew::all();

        return view('agent_new.create', compact('policy'));   
     }

     
     public function add()
     {
         
         $policy = PolicyNew::all();
         $user = User::role('client')->get();
 
         return view('agent_new.createNew', compact('policy','user'));   
      }

      public function getPolicy($id)
      {
          try {
              // Find the policy by ID
              $policy2 = PolicyNew::find($id);
                
              // If the policy exists, return it as JSON
              if ($policy2) {
                  return response()->json([
                      'status' => 'success',
                      'policy2' => $policy2
                  ]);
              } else {
                  Log::error('Policy not found for ID: ' . $id);  // Log if policy not found
                  return response()->json([
                      'status' => 'error',
                      'message' => 'Policy not found.'
                  ], 404);
              }
          } catch (\Exception $e) {
              Log::error('Error fetching policy: ' . $e->getMessage());  // Log error details
              return response()->json([
                  'status' => 'error',
                  'message' => 'An error occurred while fetching the policy data.'
              ], 500);  // Return 500 Internal Server Error
          }
      }


     public function store(Request $request)
     {
        //  dd($request->all());
         // Validate the incoming request data
         $request->validate([
             'name_agent' => 'nullable|string|max:255',
             'medium_of_contact' => 'nullable|string|max:255',
             'contact_name' => 'nullable|string|max:255',
             'contact_number' => 'nullable|string|max:255',
             'reason_for_contact' => 'nullable|string|max:255',
             'office_hours_address' => 'nullable|string|max:255',
             'lien_holder_confirmation' => 'nullable|string|max:255',
             'premium_due_info' => 'nullable|string|max:255',
             'quote' => 'nullable|string|max:255',
             'collect_rating_info' => 'nullable|string|max:255',
             'add_new_policy' => 'nullable|string|max:255',
             'make_payment' => 'nullable|string|max:255',
             'policy_change' => 'nullable|string|max:255',
             'schedule_appointment' => 'nullable|string|max:255',
             'appointment_date' => 'nullable|date',
             'appointment_time' => 'nullable|date_format:H:i',
             'office' => 'nullable|string|max:255',
             'call' => 'nullable|string|max:255',
             'notes' => 'nullable|string',
            //  'ToDo' => 'nullable|string',

             
         ]);
     
         // Create a new AgentNew record using the validated data
         $agentNew =  AgentNew::create($request->all());

           // Check if ToDo is set to 1
            if ($request->input('ToDo') == '1') {
                // Add values to the agent_task table
                AgentTask::create([
                    'agent_new_id' => $agentNew->id, // foreign key to agent_new table
                    'name_agent' => $request->input('name_agent'),
                    'task_date' => $request->input('appointment_date'),
                    'task_time' => $request->input('appointment_time'),
                ]);
            }
     
         // Redirect to a specific route with a success message
         return redirect()->route('AgentNew.create')->with('message', 'Agent record created successfully.');
     }

     public function storeNew(Request $request)
     {
        // dd($request->all());
         // Validate common fields
         $validatedData = $request->validate([
             'medium_of_contact' => 'required|string', // Must be one of the radio values
             'LastName' => 'nullable|string|max:255',
             'FirstName' => 'nullable|string|max:255',
             'Phone' => 'nullable|string|max:15',
             'agentName' => 'nullable|string|max:255',
             'rateNow' => 'nullable', // Checkbox - Boolean values
             'rateLater' => 'nullable', // Checkbox - Boolean values
             'dlNumber_lead' => 'nullable|string|max:20',
             'dob_lead' => 'nullable|date',
             'options' => 'required|string' // Ensure the options field is provided
         ]);
     
         if ($request->options === 'New Lead') {
             // Create a new LeadHistory record
             LeadHistory::create([
                 'medium_of_contact' => $validatedData['medium_of_contact'],
                 'last_name' => $validatedData['LastName'] ?? null,
                 'first_name' => $validatedData['FirstName'] ?? null,
                 'phone' => $validatedData['Phone'] ?? null,
                 'agent_name' => $validatedData['agentName'] ?? null,
                 'rate_now' => $request->has('rateNow') ? true : false, // Set to true if 'Rate Now' is checked
                 'rate_later' => $request->has('rateLater') ? true : false, // Set to true if 'Rate Later' is checked
                 'dl_number' => $validatedData['dlNumber_lead'] ?? null,
                 'dob' => $validatedData['dob_lead'] ?? null,
             ]);

             GeneralLead::create([
                'agent_name' => $validatedData['agentName'],
                'contact_medium' => $validatedData['medium_of_contact'],
                'last_name' => $validatedData['LastName'] ?? null,
                'first_name' => $validatedData['FirstName'] ?? null,
                'contact_number' => $validatedData['Phone'] ?? null,
                // 'question' => $validatedGeneralData['question_gneral'],
                'question' => 'New Lead',

                // 'notes' => $validatedGeneralData['notes_gneral'] ?? null,
            ]);
     
             return redirect()->back()->with('message', 'New Lead created successfully!');
         }
     
         if ($request->options === 'General Question') {
             // Validate additional fields for General Question
             $validatedGeneralData = $request->validate([
                'medium_of_contact' => 'required|string', // Must be one of the radio values
                'LastName' => 'nullable|string|max:255',
                'FirstName' => 'nullable|string|max:255',
                'Phone' => 'nullable|string|max:15',
                'agentName' => 'nullable|string|max:255',
                 'contact_number_gneral' => 'nullable|string|max:15',
                //  'question_gneral' => 'required|string|max:1000',
                 'notes_gneral' => 'nullable|string|max:1000',
             ]);
     
             // Create a new GeneralLead record
             GeneralLead::create([
                 'agent_name' => $validatedGeneralData['agentName'],
                 'contact_medium' => $validatedGeneralData['medium_of_contact'],
                 'last_name' => $validatedGeneralData['LastName'] ?? null,
                 'first_name' => $validatedGeneralData['FirstName'] ?? null,
                 'contact_number' => $validatedGeneralData['Phone'] ?? null,
                //  'question' => $validatedGeneralData['question_gneral'],
                'question' => 'General Question',

                 'notes' => $validatedGeneralData['notes_gneral'] ?? null,
             ]);
     
             return redirect()->back()->with('message', 'General Question created successfully!');
         }
         
         

        if ($request->options === 'Add New Policy') {


            $validatedData3 = $request->validate([
                'autopay' => 'nullable|string',
                'activeBox' => 'nullable|string',
                // 'type_of_customer' => 'nullable|string',

                'user_id' => 'nullable|string',

                'new_customer' => 'nullable|string',
                'rewrite' => 'nullable|string',
                'renew' => 'nullable|string',
                'first_name' => 'required|string|max:255',
                'middle_name1' => 'nullable|string|max:255',
                'last_name' => 'required|string|max:255',
                'preferred_name' => 'nullable|string|max:255',

                'email' => 'required|email|unique:users,email',
                'phone22' => 'nullable|string|max:255',  // Updated field in the request
                'dob' => 'nullable|date',
                'ssn' => 'nullable|string|max:255',
                'zip' => 'nullable|string|max:255',

                'type_of_id' => 'nullable|string|max:255',
                'dl_id' => 'nullable|string|max:255',
                'carrier' => 'nullable|string|max:255',
                'policy_number' => 'nullable|string|max:255',

                'type_of_policy' => 'nullable|string|max:255',
                'insured_items' => 'nullable|string|max:255',
                'insured_drivers' => 'nullable|string|max:255',
                'excluded_drivers' => 'nullable|string|max:255',
                'lien' => 'nullable|string|max:255',
                'effective_date' => 'nullable|date',
                'expiration_date' => 'nullable|date',
                'term_months' => 'nullable|integer',

                'due_date' => 'nullable|date',
                'amount_due' => 'nullable|string|max:255',

                'base_premium' => 'nullable|string|max:255',
                'state_fee_mvca' => 'nullable|string|max:255',
                'policy_fee' => 'nullable|string|max:255',
                'roadside_assistance_fee' => 'nullable|string|max:255',
                'sr22' => 'nullable|string|max:255',
                'other_fee' => 'nullable|string|max:255',
                'total_premium' => 'nullable|string|max:255',
                'annual_premium' => 'nullable|string|max:255',

                'paid_today' => 'nullable|string|max:255',
                'amount_paid_cc' => 'nullable|string|max:255',
                'amount_paid_cash' => 'nullable|string|max:255',
                'direct_pay' => 'nullable|string|max:255',
                'name_on_card' => 'nullable|string|max:255',
                'debit_card' => 'nullable|string|max:255',
                'credit_card_name' => 'nullable|string|max:255',

                'number_1st_4' => 'nullable|string|max:255',
                'number_2nd_4' => 'nullable|string|max:255',
                'number_3rd_4' => 'nullable|string|max:255',
                'number_4th_4' => 'nullable|string|max:255',
   
                'expiration_1' => 'nullable|string|max:255',
                'expiration_2' => 'nullable|string|max:255',
                'billing_zip' => 'nullable|string|max:255',
                'cvc' => 'nullable|string|max:255',
                'notes' => 'nullable|string',
            ]);

            $validatedData3['phone'] = $validatedData3['phone22'] ?? null;
            unset($validatedData3['phone22']);
            $validatedData3['middle_name'] = $validatedData3['middle_name1'] ?? null;
            unset($validatedData3['middle_name1']);

            $validatedData3['type_of_customer'] = $request->customerOptions;


            // user code start
            // Check if 'clientRegister' is set to "Create Client User"
            if ($request->has('clientRegister') && $request->clientRegister === "Create Client User") {
                $password = $request->last_name . '12345'; 
                $user = User::create([ 
                    'name' => trim("{$request->first_name} {$request->middle_name1} {$request->last_name}"),
                    'email' => $request->email,
                    'type' => 'client',
                    'password' => Hash::make($password),
                ]);

                // Assign the role and set user_id in $validatedData3
                $user->assignRole('client');
                $validatedData3['user_id'] = $user->id;
            }
            // user code end

            // Create a new PolicyNew instance and fill it with the validated data
            $policyNew = PolicyNew::create($validatedData3);


            // user code end

            GeneralLead::create([
                'agent_name' =>$request->agentName,
                'contact_medium' =>$request->medium_of_contact,
                'last_name' => $request->LastName, 
                'first_name' => $request->FirstName,
                'contact_number' => $request->Phone, 
               //  'question' => $validatedGeneralData['question_gneral'],
               'question' => 'New Policy Created',

                'notes' => $request->notes_gneral,
            ]);

            PaymentPolicy::create([

                'agent' => $request->agentName,
                'first_name' =>  $request->FirstName,
                'last_name' =>  $request->LastName,

                'carrier' =>  $request->carrier,
                'policy_number' =>  $request->policy_number,
                'amount_paid_cc' =>  $request->amount_paid_cc,
                'amount_paid_cash' =>  $request->amount_paid_cash,
                'payment_for' =>  $request->payment_for,
                'notes' => $request->notes,
                'payment_for' => $request->customerOptions,
                'policy_id' => $policyNew->id,
                'policy_number' => $request->policy_number,
                
            ]);


            if ($request->has('addToDoList')) {



                AgentTODOList::create([
                    'medium_of_contact' => $request->medium_of_contact,
                    // 'medium_of_contact' => 'New Policy Created',

                    // 'done' => $request->done,
                    'done' => 0,

                    'done_time' => now()->format('H:i:s'), // Current time
                    'done_date' => now()->format('Y-m-d'), // Current date
                    'reason_of_contact' => 'New Policy Created',
                    'first_name' =>  $request->FirstName,
                    'last_name' =>  $request->LastName,


                    'agent' => $request->agentName,
                    'contact_name' => $request->preferred_name,
                    'contact_number' => $request->Phone,
                    
                    'office_hours_address' => $request->office_hours_address,
                    'lien_holder_confirmation' => $request->lien_holder_confirmation,
                    'premium_due_info' => $request->premium_due_info,
                    'quote' => $request->quote,
                    'collect_rating_info' => $request->collect_rating_info,
                    // 'add_new_policy' => $request->add_new_policy,
                    // 'add_new_policy' => 1, // make button
    
                    // 'make_payment' => $request->make_payment, // make button
    
                    // 'policy_change' => $request->policy_change, make button
    
                    // 'appointment_date' => $request->appointment_date,
                    // 'appointment_time' => $request->appointment_time,
                    // 'office' => $request->office,
                    // 'call' => $request->call,
    
                    'notes' => $request->toDoListNotes,
                    'doc_save' => $request->docsave,
                    'proof_upload' => $request->proofUpload,
                    'picture_upload' => $request->pictureUpload,
                ]);

            }

            

            return redirect()->back()->with('message', 'Policy created successfully!');

        }

        if ($request->options === 'Existing Client') {

          

            if ($request->actionType === 'makePayment') {
                
                $validated4 = $request->validate([
                    'policy_id' => 'required|exists:policy_new,id',

                    'agentName' => 'nullable|string|max:255',
                    'first_name2' => 'nullable|string|max:255',
                    'last_name2' => 'nullable|string|max:255',
                    'carrier2' => 'nullable|string|max:255',
                    'amount_due2' => 'nullable|string|max:255',
                    'due_date2' => 'nullable|date',
                    'new_amount_due2' => 'nullable|string|max:255',
                    'new_due_date2' => 'nullable|date',
                    'amount_paid_cc2' => 'nullable|string|max:255',
                    'amount_paid_cash2' => 'nullable|string|max:255',
                    'direct_pay2' => 'nullable|string|max:255',
                    'name_on_card2' => 'nullable|string|max:255',
                    'debit_card2' => 'nullable|string|max:255',
                    'number_1st_42' => 'nullable|string|max:4',
                    'number_2nd_42' => 'nullable|string|max:4',
                    'number_3rd_42' => 'nullable|string|max:4',
                    'number_4th_42' => 'nullable|string|max:4',
                    'expiration_12' => 'nullable|string|max:2',
                    'expiration_22' => 'nullable|string|max:4',
                    'billing_zip2' => 'nullable|string|max:255',
                    'cvc2' => 'nullable|string|max:255',
                    'notes2' => 'nullable|string',
                ], 
                    [
                        'policy_id.required' => 'For payment and change in policy, you must select a policy first.',
                        'policy_id.exists' => 'The selected policy is invalid. Please select a valid policy.',
                    ]
            
                );
                
                // Adjust the validated data to remove the "2" from field names and match the original database column names
                $validatedData4 = [
                    'policy_id' => $validated4['policy_id'],
                    'person' => $validated4['agentName'] ?? null,
                    'first_name' => $validated4['first_name2'] ?? null,
                    'last_name' => $validated4['last_name2'] ?? null,
                    'carrier' => $validated4['carrier2'] ?? null,
                    'amount_due' => $validated4['amount_due2'] ?? null,
                    'due_date' => $validated4['due_date2'] ?? null,
                    'new_amount_due' => $validated4['new_amount_due2'] ?? null,
                    'new_due_date' => $validated4['new_due_date2'] ?? null,
                    'amount_paid_cc' => $validated4['amount_paid_cc2'] ?? null,
                    'amount_paid_cash' => $validated4['amount_paid_cash2'] ?? null,
                    'direct_pay' => $validated4['direct_pay2'] ?? null,
                    'name_on_card' => $validated4['name_on_card2'] ?? null,
                    'debit_card' => $validated4['debit_card2'] ?? null,
                    'number_1st_4' => $validated4['number_1st_42'] ?? null,
                    'number_2nd_4' => $validated4['number_2nd_42'] ?? null,
                    'number_3rd_4' => $validated4['number_3rd_42'] ?? null,
                    'number_4th_4' => $validated4['number_4th_42'] ?? null,
                    'expiration_1' => $validated4['expiration_12'] ?? null,
                    'expiration_2' => $validated4['expiration_22'] ?? null,
                    'billing_zip' => $validated4['billing_zip2'] ?? null,
                    'cvc' => $validated4['cvc2'] ?? null,
                    'notes' => $validated4['notes2'] ?? null,
                    

                    'payment_for' => $request->type_of_customer,
                    'policy_number' => $request->policy_number2,

                    
                ];
                
                // Create a new payment record in the PaymentPolicy table
                PaymentPolicy::create($validatedData4);
                
        
                // Find the related policy using policy_id
                $policy = PolicyNew::find($request->policy_id);
        
                // If the policy is found, update the amount_due and due_date with the new values

                if ($policy) {
                    $policy->update([
                        'amount_due' => $request->amount_due2,
                        'due_date' => $request->due_date2,
                        'name_on_card' => $request->name_on_card2,
                        'debit_card' => $request->debit_card2,
                        'number_1st_4' => $request->number_1st_42,
                        'number_2nd_4' => $request->number_2nd_42,
                        'number_3rd_4' => $request->number_3rd_42,
                        'number_4th_4' => $request->number_4th_42,
                        'expiration_1' => $request->expiration_12,
                        'expiration_2' => $request->expiration_2,
                        'billing_zip' => $request->billing_zip2,
                        'cvc' => $request->cvc2,
                        // 'notes' => $request->notes2,
        
                        'person' => $request->person2,
                        'first_name' => $request->first_name2,
                        'last_name' => $request->last_name2,
                        'carrier' => $request->carrier2,
        
                        'amount_paid_cc' => $request->amount_paid_cc2,
                        'amount_paid_cash' => $request->amount_paid_cash2 ,
                        'direct_pay' => $request->direct_pay2,
                    ]);
                }


                GeneralLead::create([
                    'agent_name' =>$request->agentName,
                    'contact_medium' =>$request->medium_of_contact,
                    'last_name' => $request->last_name2, 
                    'first_name' => $request->first_name2,
                    'contact_number' => $request->phoneValue, 
                   //  'question' => $validatedGeneralData['question_gneral'],
                   'question' => $request->type_of_customer,
    
                    // 'notes' => $request->notes2,
                ]);
            }


            if ($request->actionType === 'makeChange') {


                if ($request->has('addToDoList2')) {

                    AgentTODOList::create([
                        'medium_of_contact' => $request->medium_of_contact,
                        // 'medium_of_contact' => 'New Policy Created',
    
                        // 'done' => $request->done,
                        'reason_of_contact' => $request->type_of_customer,

                        
                        'done' => 0,
    
                        'done_time' => now()->format('H:i:s'), // Current time
                        'done_date' => now()->format('Y-m-d'), // Current date
                        // 'reason_of_contact' => 'New Policy Created',
                        'first_name' =>  $request->first_name3,
                        'last_name' =>  $request->last_name3,
    
    
                        'agent' => $request->agentName,
                        'contact_name' => $request->preferred_name3,
                        'contact_number' => $request->phone3,
                        
                        'office_hours_address' => $request->office_hours_address3,
                        'lien_holder_confirmation' => $request->lien_holder_confirmation3,
                        'premium_due_info' => $request->premium_due_info3,
                        'quote' => $request->quote3,
                        'collect_rating_info' => $request->collect_rating_info3,
                        'notes' => $request->toDoListNotes3,
                        'doc_save' => $request->docsave3,
                        'proof_upload' => $request->proofUpload3,
                        'picture_upload' => $request->pictureUpload3,
                    ]);
    
                }

                $policyNew = PolicyNew::find($request->policy_id);

                if ($policyNew) {
                    $policyNew->update([
                        'amount_due' => $request->amount_due3,
                        'due_date' => $request->due_date3,

                        'name_on_card' => $request->name_on_card3,
                        'debit_card' => $request->debit_card3,
                        'number_1st_4' => $request->number_1st_43,
                        'number_2nd_4' => $request->number_2nd_43,
                        'number_3rd_4' => $request->number_3rd_43,
                        'number_4th_4' => $request->number_4th_43,
                        'expiration_1' => $request->expiration_13,
                        'expiration_2' => $request->expiration_23,
                        'billing_zip' => $request->billing_zip3,
                        'cvc' => $request->cvc3,
                        'notes' => $request->notes3,
        
                        'person' => $request->person3,
                        'first_name' => $request->first_name3,
                        'last_name' => $request->last_name3,
                        'carrier' => $request->carrier3,
        
                        'amount_paid_cc' => $request->amount_paid_cc3,
                        'amount_paid_cash' => $request->amount_paid_cash3 ,
                        'direct_pay' => $request->direct_pay3,


                        'person' =>  $request->agentName,
                        'payment_for' => $request->type_of_customer,
                        'policy_number' => $request->policy_number3,

                        // new new
                        'autopay' => $request->autopay3,
                        'activeBox' => $request->activeBox3,
                        'new_customer' => $request->new_customer3,
                        'rewrite' => $request->rewrite3,
                        'renew' => $request->renew3,
                        'middle_name' => $request->middle_name13,
                        'preferred_name' => $request->preferred_name3,
                        'email' => $request->email3,
                        'phone' => $request->phoneValue3,
                        'dob' => $request->dob3,
                        'ssn' => $request->ssn3,
                        'zip' => $request->zip3,
                        'type_of_policy' => $request->type_of_policy3,

                        'insured_items' => $request->insuredItems3,
                        'insured_drivers' => $request->insuredDrivers3,
                        'excluded_drivers' => $request->excludedDrivers3,
                        'lien' => $request->lien3,

                        'effective_date' => $request->effective_date3,
                        'expiration_date' => $request->expiration_date3,
                        'term_months' => $request->term_months3,

                        'base_premium' => $request->base_premium3,
                        'state_fee_mvca' => $request->state_fee_mvca3,
                        'policy_fee' => $request->policy_fee3,
                        'roadside_assistance_fee' => $request->roadside_assistance_fee3,
                        'sr22' => $request->sr223,
                        'other_fee' => $request->other_fee3,
                        'total_premium' => $request->total_premium3,
                        'annual_premium' => $request->annual_premium3,

                        'paid_today' => $request->paid_today3,
                        'name_on_card' => $request->name_on_card3,
                        'debit_card' => $request->debit_card3,
                        'credit_card_name' => $request->credit_card_name3,
                        'expiration_1' => $request->expiration_13,
                        'expiration_2' => $request->expiration_23,

                    ]);
                }


                GeneralLead::create([
                    'agent_name' =>$request->agentName,
                    'contact_medium' =>$request->medium_of_contact,
                    'last_name' => $request->last_name3, 
                    'first_name' => $request->first_name3,
                    'contact_number' => $request->phoneValue, 
                   //  'question' => $validatedGeneralData['question_gneral'],
                   'question' => $request->type_of_customer,
    
                    // 'notes' => $request->notes2,
                ]);

                PaymentPolicy::create([
                    'policy_id' => $request->policy_id,
                    'person' => $request->agentName ?? null,
                    'first_name' => $request->first_name3 ?? null,
                    'last_name' => $request->last_name3 ?? null,
                    'carrier' => $request->carrier3 ?? null,
                    'amount_due' => $request->amount_due3 ?? null,
                    'due_date' => $request->due_date3 ?? null,
                    'new_amount_due' => $request->new_amount_due3 ?? null,
                    'new_due_date' => $request->new_due_date3 ?? null,
                    'amount_paid_cc' => $request->amount_paid_cc3 ?? null,
                    'amount_paid_cash' => $request->amount_paid_cash3 ?? null,
                    'direct_pay' => $request->direct_pay3 ?? null,
                    'name_on_card' => $request->name_on_card3 ?? null,
                    'debit_card' => $request->debit_card3 ?? null,
                    'number_1st_4' => $request->number_1st_43 ?? null,
                    'number_2nd_4' => $request->number_2nd_43 ?? null,
                    'number_3rd_4' => $request->number_3rd_43 ?? null,
                    'number_4th_4' => $request->number_4th_43 ?? null,
                    'expiration_1' => $request->expiration_13 ?? null,
                    'expiration_2' => $request->expiration_23 ?? null,
                    'billing_zip' => $request->billing_zip3 ?? null,
                    'cvc' => $request->cvc3 ?? null,
                    'notes' => $request->notes3 ?? null,
                
                    'payment_for' => $request->type_of_customer,
                    'policy_number' => $request->policy_number3,
                ]);
                
                
                // Create a new payment record in the PaymentPolicy table
                // PaymentPolicy::create($validatedData4);


                    $validated4 = $request->validate([
                        'policy_id' => 'required|exists:policy_new,id',
                    ], 
                        [
                            'policy_id.required' => 'For payment and change in policy, you must select a policy first.',
                            'policy_id.exists' => 'The selected policy is invalid. Please select a valid policy.',
                        ]
                
                    );

                    // Create a new PolicyChange record using the validated data
                    PolicyChange::create([
                        'policy_id' => $request->policy_id,
                        'person' => $request->agentName,
                        'first_name' => $request->first_name3,
                        'last_name' => $request->last_name3,
                        'carrier' => $request->carrier3,
                        'policy_number' => $request->policy_number3,
                        'driver_action' => $request->driver_action,
                        'driver_name' => $request->driver_name,
                        'dl' => $request->dl,
                        'vehicle_option' => $request->vehicle_option,
                        'vin' => $request->vin,
                        'year' => $request->year,
                        'make' => $request->make,
                        'model' => $request->model,
                        'change_option' => $request->change_option,
                        'effective_date' => $request->effective_date3,
                        'annual_premium' => $request->annual_premium3,
                        'new_phone_number' => $request->new_phone_number,
                        'new_email' => $request->new_email,
                        'new_address' => $request->new_address,
                        'notes' => $request->notes3,
                        'AutoPayBox' => $request->AutoPayBox,

                        
                    ]);

            }

            return redirect()->back()->with('message', 'Policy Update successfully!');

        }
        
     
         // If no matching option is found
         return redirect()->back()->withErrors('Invalid option selected.');
     }
     
}
