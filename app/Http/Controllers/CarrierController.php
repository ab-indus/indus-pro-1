<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\CarrierInfo;
use App\Models\CarrierProducts;
use App\Models\CarrierNotes; // Import the CarrierNotes model
use App\Models\CarrierContract; // Import the CarrierContract model
use App\Models\CarrierContacts; // Import the CarrierContacts model
use App\Models\CarrierPolicies; // Import the CarrierPolicies model
use App\Models\PaymentDetail;


class CarrierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = CarrierInfo::orderBy('id','DESC')->get()->all();
        return view('carrier.index',compact('data'));     
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = PaymentDetail::all();
        return view('carrier.create', compact('data'));
    }

    // for updating policy value 
    public function getPolicyDetails($policyNumber)
{
    $policyDetails = PaymentDetail::where('policy_num', $policyNumber)->first();

    return response()->json($policyDetails);
}


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validation code here if needed
        //   dd($request);

        

    
        // Create a new CarrierInfo instance and save it
        $carrierInfo = CarrierInfo::create([
            'display_name' => $request->input('display_name'),
            'type' => $request->input('type'),
            'agent_code' => $request->input('agent_code'),
            'agent_url' => $request->input('agent_url'),
            'user_id' => $request->input('user_id'),
            'password' => $request->input('password'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'fax' => $request->input('fax'),
            'main_email' => $request->input('main_email'),
            'eo_date' => $request->input('eo_date'),
            // Set other Carrier Info fields here
        ]);

        // Handle Carrier Notes
        $CarrierNotesData = [
            'note_content' => $request->input('note_content'),
            'carrier_info_id' =>  $carrierInfo->id
           
  
        ];
        CarrierNotes::create($CarrierNotesData);
    

     
    

        // Handle file upload
        if ($request->hasFile('contract_content')) {
            $file = $request->file('contract_content');
            $fileName = time() . '_' . $file->getClientOriginalName();
            // $filePath = $file->storeAs('public/contracts', $fileName); 
            $filePath= $file->store('contracts', ['disk' => 'public']);
            // 'contracts' is the storage folder where the file will be saved

            // Create a new CarrierContract instance and set the foreign key and file path
            $contract = new CarrierContract();
            $contract->contract_content = $filePath;
            $contract->carrier_info_id = $carrierInfo->id;
            $contract->save();
        }


   // Handle Policy
        $CarrierPoliciesData = [
            'status' => $request->input('status'),
            'policy_number' => $request->input('policy_number'),
            'policy_type' => $request->input('policy_type'),
            'policy_term' => $request->input('policy_term'),
            'base_premium' => $request->input('base_premium1'),
            'total_premium' => $request->input('total_premium'),
            'date_due' => $request->input('date_due'),
            'amount_due' => $request->input('amount_due'),
            'date_paid' => $request->input('date_paid'),
            'Amount_paid' => $request->input('Amount_paid'),
            'commission_due' => $request->input('commission_due'),
            'new_amount_due' => $request->input('new_amount_due'),
            'new_due_date' => $request->input('new_due_date'),
  
            'carrier_info_id' =>  $carrierInfo->id
        ];
        CarrierPolicies::create($CarrierPoliciesData);

        // contact info 

         // Handle Carrier Contact (with all fields)
     $CarrierContactData = [
    'contact_name' => $request->input('contact_name'),
    'contact_email' => $request->input('contact_email'),
    'marketing_email' => $request->input('marketing_email'),
    'marketing_phone' => $request->input('marketing_phone'),
    'underwriting_phone' => $request->input('underwriting_phone'),
    'underwriting_email' => $request->input('underwriting_email'),
    'customer_phone' => $request->input('customer_phone'),
    'customer_email' => $request->input('customer_email'),
    'agent_phone' => $request->input('agent_phone'),
    'agent_email' => $request->input('agent_email'),
    'claims_phone' => $request->input('claims_phone'),
    'claims_email' => $request->input('claims_email'),
    'accounting_phone' => $request->input('accounting_phone'),
    'accounting_email' => $request->input('accounting_email'),
    // Add other fields as needed
    'carrier_info_id' => $carrierInfo->id
     ];
      CarrierContacts::create($CarrierContactData);

//product 

  //Handle Carrier Products 0
  $CarrierProductsData = [
    'carrier_info_id' => $carrierInfo->id,
    'product_name' => $request->input('product_name'),
    'base_premium' => $request->input('base_premium'),
    'crime_fee' => $request->input('crime_fee'),
    'policy_fee' => $request->input('policy_fee'),
    'late_fee' => $request->input('late_fee'),
    'reinstatement_fee' => $request->input('reinstatement_fee'),
    'Installment_fee' => $request->input('Installment_fee'),
    'credit_fee' => $request->input('credit_fee'),
    'misc_fee' => $request->input('misc_fee'),
    'other_fee' => $request->input('other_fee'),
    'total_premium' => $request->input('total_premium'),
    'comission' => $request->input('comission'),
    'business_comission' => $request->input('business_comission'),
    'renewal_comission' => $request->input('renewal_comission'),
    // Add other Carrier Products fields as needed
];
CarrierProducts::create($CarrierProductsData);

$carrierProductsDataArray = [];

// Assuming the maximum number of products is 16, you can adjust this as needed
$maxProducts = 10;

for ($i = 0; $i < $maxProducts; $i++) {
    $fieldNamePrefix = "productCard-$i";

    // Check if the product data for the current index exists
    if ($request->has("product_name$fieldNamePrefix")) {
        $carrierProductsDataArray[] = [
            'carrier_info_id' => $carrierInfo->id,
            'product_name' => $request->input("product_name$fieldNamePrefix"),
            'base_premium' => $request->input("base_premium$fieldNamePrefix"),
            'crime_fee' => $request->input("crime_fee$fieldNamePrefix"),
            'policy_fee' => $request->input("policy_fee$fieldNamePrefix"),
            'late_fee' => $request->input("late_fee$fieldNamePrefix"),
            'reinstatement_fee' => $request->input("reinstatement_fee$fieldNamePrefix"),
            'Installment_fee' => $request->input("Installment_fee$fieldNamePrefix"),
            'credit_fee' => $request->input("credit_fee$fieldNamePrefix"),
            'misc_fee' => $request->input("misc_fee$fieldNamePrefix"),
            'other_fee' => $request->input("other_fee$fieldNamePrefix"),
            'total_premium' => $request->input("total_premium$fieldNamePrefix"),
            'comission' => $request->input("comission$fieldNamePrefix"),
            'business_comission' => $request->input("business_comission$fieldNamePrefix"),
            'renewal_comission' => $request->input("renewal_comission$fieldNamePrefix"),
            // Add other Carrier Products fields as needed
        ];
    }
}

// Bulk insert the CarrierProducts data
CarrierProducts::insert($carrierProductsDataArray);





      
    
        // Redirect to a success page or return a response
        return redirect()->route('carrier.create')->with('message', 'Carrier Info and associated data added successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $carrier = CarrierInfo::find($id);
        $carrierContacts = CarrierContacts::where('carrier_info_id', $id)->get();
        $CarrierProducts = CarrierProducts::where('carrier_info_id', $id)->get();
        $CarrierPolicies = CarrierPolicies::where('carrier_info_id', $id)->get();
        $CarrierContract = CarrierContract::where('carrier_info_id', $id)->get();
        $CarrierNotes = CarrierNotes::where('carrier_info_id', $id)->get();


        
        return view('carrier.view', compact('carrier', 'carrierContacts','CarrierProducts','CarrierPolicies','CarrierContract','CarrierNotes'));
    }
    
    
    public function product_edit($id)
    {
        $data = CarrierProducts::find($id);
        return view('carrier.product_edit',compact('data'));
    }

    public function product_destroy($id)
{
    // Find the carrier product by ID
    $carrierProduct = CarrierProducts::find($id);

    if (!$carrierProduct) {
        // Handle the case where the product is not found
        return redirect()->back()->with('error', 'Product not found.');
    }

    // Delete the carrier product
    $carrierProduct->delete();

    // Redirect back to the carrier product list with a success message
    return redirect()->route('carrier.show', $carrierProduct->carrier_info_id)->with('success', 'Product deleted successfully');
}

    
    public function product_update(Request $request, $id)
    {
        // Validate the incoming request data
        
        $validatedData = $request->validate([
            'product_name' => 'required|string|max:255',
            'base_premium' => 'nullable|numeric',
            'crime_fee' => 'nullable|numeric',
            'policy_fee' => 'nullable|numeric',
            'late_fee' => 'nullable|numeric',
            'reinstatement_fee' => 'nullable|numeric',
            'Installment_fee' => 'nullable|numeric',
            'credit_fee' => 'nullable|numeric',
            'misc_fee' => 'nullable|numeric',
            'other_fee' => 'nullable|numeric',
            'total_premium' => 'nullable|numeric',
            'comission' => 'nullable|numeric',
            'business_comission' => 'nullable|numeric',
            'renewal_comission' => 'nullable|numeric',
            // Add more validation rules for additional fields as needed
        ]);
    
        // Find the carrier product by ID
        $carrierProduct = CarrierProducts::find($id);
    
        // Check if the carrier product exists
        if (!$carrierProduct) {
            return redirect()->back()->with('error', 'Product not found');
        }
    
        // Update the carrier product's fields with the validated data
        $carrierProduct->update($validatedData);
    
         // Redirect to the 'carrier.show' route with 'carrier_info_id' as the parameter
         return redirect()->route('carrier.show', ['carrier' => $carrierProduct->carrier_info_id])->with('message', 'Product updated successfully');

    }
    

    
    
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $carrier = CarrierInfo::find($id);
        $carrierContacts = CarrierContacts::where('carrier_info_id', $id)->get();
        $CarrierPolicies = CarrierPolicies::where('carrier_info_id', $id)->get();
        $CarrierContract = CarrierContract::where('carrier_info_id', $id)->get();
        $CarrierNotes = CarrierNotes::where('carrier_info_id', $id)->get();
        return view('carrier.edit',compact('carrier', 'carrierContacts','CarrierPolicies','CarrierContract','CarrierNotes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    // Update 

    public function update(Request $request, $id)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'display_name' => 'required|string|max:255',
            'type' => 'required|in:Carrier,MGA,Agency',
            'agent_code' => 'nullable|string|max:255',
            'agent_url' => 'nullable|url',
            'user_id' => 'nullable|string|max:255',
            'password' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
            'phone' => 'nullable|string|max:255',
            'fax' => 'nullable|string|max:255',
            'main_email' => 'nullable|email|max:255',
            'eo_date' => 'nullable|date',
            // Add other validation rules for carrier_info fields here

            // Contact Info
            'contact_name' => 'required|string|max:255',
            'contact_email' => 'nullable|email|max:255',
            'marketing_email' => 'nullable|email|max:255',
            'marketing_phone' => 'nullable|string|max:255',
            'underwriting_phone' => 'nullable|string|max:255',
            'underwriting_email' => 'nullable|email|max:255',
            'customer_phone' => 'nullable|string|max:255',
            'customer_email' => 'nullable|email|max:255',
            'agent_phone' => 'nullable|string|max:255',
            'agent_email' => 'nullable|email|max:255',
            'claims_phone' => 'nullable|string|max:255',
            'claims_email' => 'nullable|email|max:255',
            'accounting_phone' => 'nullable|string|max:255',
            'accounting_email' => 'nullable|email|max:255',
            // Add other validation rules for carrier_contacts fields here

            // Policies
            'status' => 'required|in:Active,Inactive',
            'policy_number' => 'nullable|string|max:255',
            'policy_type' => 'nullable|string|max:255',
            'policy_term' => 'nullable|string|max:255',
            'base_premium' => 'nullable|numeric',
            'total_premium' => 'nullable|numeric',
            'date_due' => 'nullable|date',
            'amount_due' => 'nullable|numeric',
            'date_paid' => 'nullable|date',
            'Amount_paid' => 'nullable|numeric',
            'commission_due' => 'nullable|date',
            'new_amount_due' => 'nullable|date',
            'new_due_date' => 'nullable|date',
            // Add other validation rules for carrier_policies fields here

            'note_content' => 'nullable',
            'contract_content' => 'required|file|mimes:pdf,doc,docx,png,jpeg', 

        ]);

        // Find the carrier by ID
        $carrier = CarrierInfo::findOrFail($id);

        // Update the carrier info
        $carrier->update([
            'display_name' => $validatedData['display_name'],
            'type' => $validatedData['type'],
            'agent_code' => $validatedData['agent_code'],
            'agent_url' => $validatedData['agent_url'],
            'user_id' => $validatedData['user_id'],
            'password' => $validatedData['password'],
            'email' => $validatedData['email'],
            'phone' => $validatedData['phone'],
            'fax' => $validatedData['fax'],
            'main_email' => $validatedData['main_email'],
            'eo_date' => $validatedData['eo_date'],
            // Update other carrier_info fields here
        ]);

        // Find the carrier contact by carrier_info_id
        $carrierContact = CarrierContacts::where('carrier_info_id', $carrier->id)->firstOrFail();

        // Update the carrier contact info
        $carrierContact->update([
            'contact_name' => $validatedData['contact_name'],
            'contact_email' => $validatedData['contact_email'],
            'marketing_email' => $validatedData['marketing_email'],
            'marketing_phone' => $validatedData['marketing_phone'],
            'underwriting_phone' => $validatedData['underwriting_phone'],
            'underwriting_email' => $validatedData['underwriting_email'],
            'customer_phone' => $validatedData['customer_phone'],
            'customer_email' => $validatedData['customer_email'],
            'agent_phone' => $validatedData['agent_phone'],
            'agent_email' => $validatedData['agent_email'],
            'claims_phone' => $validatedData['claims_phone'],
            'claims_email' => $validatedData['claims_email'],
            'accounting_phone' => $validatedData['accounting_phone'],
            'accounting_email' => $validatedData['accounting_email'],
            // Update other carrier_contacts fields here
        ]);

        // Find the carrier policy by carrier_info_id
        $carrierPolicy = CarrierPolicies::where('carrier_info_id', $carrier->id)->firstOrFail();

        // Update the carrier policy info
        $carrierPolicy->update([
            'status' => $validatedData['status'],
            'policy_number' => $validatedData['policy_number'],
            'policy_type' => $validatedData['policy_type'],
            'policy_term' => $validatedData['policy_term'],
            'base_premium' => $validatedData['base_premium'],
            'total_premium' => $validatedData['total_premium'],
            'date_due' => $validatedData['date_due'],
            'amount_due' => $validatedData['amount_due'],
            'date_paid' => $validatedData['date_paid'],
            'amount_paid' => $validatedData['Amount_paid'],
            'commission_due' => $validatedData['commission_due'],
            'new_amount_due' => $validatedData['new_amount_due'],
            'new_due_date' => $validatedData['new_due_date'],
            // Update other carrier_policies fields here
        ]);

          // Find the carrier notes by carrier_info_id
          $carrierNotes = CarrierNotes::where('carrier_info_id', $carrier->id)->firstOrFail();

          $carrierNotes->update([
            'note_content' => $validatedData['note_content'],
            
        ]);

        $carrierContract = CarrierContract::where('carrier_info_id', $carrier->id)->firstOrFail();

        // Handle file upload
        if ($request->hasFile('contract_content')) {
            $file = $request->file('contract_content');
            $fileName = $file->getClientOriginalName(); // Get the original file name
    
            // Store the file in the storage directory
            // $filePath = $file->storeAs('contracts', $fileName, 'public');
            $filePath= $file->store('contracts', ['disk' => 'public']);

    
            // Update the contract content in the database
            $carrierContract->update(['contract_content' => $filePath]);
        }

        // Redirect back to the carrier details page with a success message
        return redirect()->route('carrier.show', $carrier->id)->with('message', 'Carrier information updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $carrier = CarrierInfo::find($id)->delete();
        return redirect()->route('carrier.index')
                        ->with('message','Carrier Deleted successfully !!');
    }


    // product create 

    public function product_create($id)
    {
        // Find the carrier by ID
        $carrier = CarrierInfo::findOrFail($id);

        return view('carrier.product_create', compact('carrier'));
    }

    // product store 

    public function product_store(Request $request, $id)
    {
         
        // Validate the incoming request data
        $validatedData = $request->validate([
            'product_name' => 'required|string|max:255',
            'base_premium' => 'required|numeric',
            'crime_fee' => 'required|numeric',
            'policy_fee' => 'required|numeric',
            'late_fee' => 'required|numeric',
            'reinstatement_fee' => 'required|numeric',
            'Installment_fee' => 'required|numeric',
            'credit_fee' => 'required|numeric',
            'misc_fee' => 'required|numeric',
            'other_fee' => 'required|numeric',
            'total_premium' => 'required|numeric',
            'business_comission' => 'required|numeric',
            'renewal_comission' => 'required|numeric',
            // Add other validation rules for product fields here
        ]);

        // dd($validatedData);
    
        // Find the carrier by ID
        $carrier = CarrierInfo::findOrFail($id);
    
        // dd($carrier);
        // Create a new CarrierProduct instance and set the foreign key
        $product = new CarrierProducts($validatedData);
        $product->carrier_info_id = $carrier->id; // Set the foreign key
        $product->save();
    
        // dd($product);
        // Redirect back to the carrier details page with a success message
        return redirect()
            ->route('carrier.show', $carrier->id)
            ->with('message', 'Product created successfully.');
            
    }
    

}




