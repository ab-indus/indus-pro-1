<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PolicyNew;
use App\Models\PaymentPolicy;



class PaymentNewController extends Controller
{
    public function create()
    {
        $data = PolicyNew::all(); 

        return view('payment_new.create', compact('data'));   
     }

     
     public function PaymentHistory(Request $request)
     {
        //  $data = PaymentPolicy::all(); 
        $data = PaymentPolicy::orderBy('created_at', 'desc')->get();
         
 
         return view('payment_new.index', compact('data'));   
      }
   

     
     public function createNew($id)
     {
         // Try to find the policy by ID
         $data = PolicyNew::find($id);
     
         // If policy not found, handle the error (e.g., return an error view or a redirect)
         if (!$data) {
             return redirect()->back()->withErrors(['message' => 'Policy not found']);
             // Alternatively, return a 404 error
             // abort(404, 'Policy not found');
         }
     
         // If policy is found, pass the data to the view
         return view('payment_new.createNew', compact('data'));
     }

     
     public function StorePayment(Request $request)
    {
        // Validate the incoming request data
        $validated = $request->validate([
            'policy_id' => 'required|exists:policy_new,id',
            'person' => 'nullable|string|max:255',
            'first_name' => 'nullable|string|max:255',
            'last_name' => 'nullable|string|max:255',
            'carrier' => 'nullable|string|max:255',
            'amount_due' => 'nullable|string|max:255',
            'due_date' => 'nullable|date',
            'new_amount_due' => 'nullable|string|max:255',
            'new_due_date' => 'nullable|date',
            'amount_paid_cc' => 'nullable|string|max:255',
            'amount_paid_cash' => 'nullable|string|max:255',
            'direct_pay' => 'nullable|string|max:255',
            'name_on_card' => 'nullable|string|max:255',
            'debit_card' => 'nullable|string|max:255',
            'number_1st_4' => 'nullable|string|max:4',
            'number_2nd_4' => 'nullable|string|max:4',
            'number_3rd_4' => 'nullable|string|max:4',
            'number_4th_4' => 'nullable|string|max:4',
            'expiration_1' => 'nullable|string|max:2',
            'expiration_2' => 'nullable|string|max:4',
            'billing_zip' => 'nullable|string|max:255',
            'cvc' => 'nullable|string|max:255',
            'notes' => 'nullable|string',
        ]);

        // Create a new payment record in the PaymentPolicy table
        PaymentPolicy::create($validated);

        // Find the related policy using policy_id
        $policy = PolicyNew::find($request->policy_id);

        // If the policy is found, update the amount_due and due_date with the new values
        if ($policy) {
            $policy->update([
                'amount_due' => $request->new_amount_due,
                'due_date' => $request->new_due_date,
                'name_on_card' => $request->name_on_card,
                'debit_card' => $request->debit_card,
                'number_1st_4' => $request->number_1st_4,
                'number_2nd_4' => $request->number_2nd_4,
                'number_3rd_4' => $request->number_3rd_4,
                'number_4th_4' => $request->number_4th_4,
                'expiration_1' => $request->expiration_1,
                'expiration_2' => $request->expiration_2,
                'billing_zip' => $request->billing_zip,
                'cvc' => $request->cvc,
                'notes' => $request->notes,

                'person' => $request->person,
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'carrier' => $request->carrier,

                'amount_paid_cc' => $request->amount_paid_cc,
                'amount_paid_cash' => $request->amount_paid_cash ,
                'direct_pay' => $request->direct_pay,
            ]);
        }

        // Redirect to the Policy index page with a success message
        return redirect()->route('PolicyNew.index')->with('message', 'Payment and policy update successful.');
    }


     public function select()
     {
         $data = PolicyNew::all(); 
 
         return view('payment_new.select', compact('data'));   
      }
    
      public function selectPost(Request $request)
      {
          // Get the selected policy ID from the request
          $policyId = $request->input('policy');
      
          // Check if a policy with this ID exists
          $policy = PolicyNew::find($policyId);
      
          if ($policy) {
              // If the policy exists, redirect to the 'createNew' route with the selected policy ID
              return redirect()->route('PaymentNew.createNew', ['id' => $policy->id]);
          } else {
              // If the policy does not exist, return back with an error message
              return redirect()->back()->withErrors(['message' => 'Policy not found, please select a valid policy.']);
          }
      }
      

     public function getPolicyDetails($id) {
        $policy = PolicyNew::find($id);
    
        if ($policy) {
            return response()->json([
                'credit_card_name' => $policy->credit_card_name,
                'cvc' => $policy->cvc,
            ]);
        } else {
            return response()->json(['error' => 'Policy not found'], 401);
        }
    }
    
    
}
