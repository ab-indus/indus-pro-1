<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
// use App\Models\AgencyComission;
// use App\Models\DownlineComission;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Product::orderBy('id','DESC')->get();
        return view('product.index',compact('data'));   
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $url = route('product.store');
        $moreFieldFalse = true;
        $method = 'POST';
        $btnText = "Add";
        return view('product.create',compact('url','moreFieldFalse','method','btnText'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $rules = [
        //     'vin_num.*' => 'required', // Validate each name field in the array
        //     'policy_num.*' => 'required', // Validate each email field and check for uniqueness
        //     // Add more validation rules for other fields as needed
        // ];
    
        // // Define custom validation messages
        // $messages = [
        //     'vin_num.*.required' => 'The vin number field is required.',
        //     'policy_num.*.required' => 'The policy number field is required.',
        //     // Add more custom messages for other fields as needed
        // ];
    
        // // Perform validation
        // $validator = Validator::make($request->all(), $rules, $messages);
    
        // if ($validator->fails()) {
        //     return redirect()
        //         ->back()
        //         ->withErrors($validator)
        //         ->withInput();
        // }
        // $request->validate([
        //     "ins_com" => "required",
        //     "policy_num" => "required",
        //     "year" => "required",
        //     "make" => "required", 
        //     "model" => "required",
        //     "vin_num" => "required",
        //     "effective_date" => "required",
        //     "exp_date" => "required",
        //     "next_amount_due" => "required",
        //     "due_date" => "required",
        // ]);
        // foreach ($request->input("vin_num") as $value) {
        //     Product::create([
        //         'vin_num' => $value
        //     ]);
        // }

        $ins_com = $request->ins_com;
        $policy_num = $request->policy_num;
        $year = $request->year;
        $make = $request->make;
        $model = $request->model;
        $vin_num = $request->vin_num;
        $effective_date = $request->effective_date;
        $exp_date = $request->exp_date;
        $next_amount_due = $request->next_amount_due;
        $due_date = $request->due_date;
            for ($i = 0; $i < count($vin_num) ; $i++) { 
                $dataSave = [
                        "ins_company" => $ins_com[$i],
                        "policy_num" => $policy_num[$i],
                        "year" => $year[$i],
                        "make" =>  $make[$i],
                        "model" => $model[$i],
                        "vin_num" => $vin_num[$i],
                        "effective_date" => $effective_date[$i],
                        "exp_date" => $exp_date[$i],
                        "next_amount_due" => $next_amount_due[$i],
                        "due_date" => $due_date[$i],
                ];
                Product::create($dataSave);
            }
        // if ($request->has("add_vehicle") && is_array($request->input("add_vehicle"))) {
        //     // foreach ($request->input('add_vehicle') as $value) {
        //         // Product::create([
        //             $multiValue = implode(", ", $request->input("add_vehicle"));
        //         // ]);
        //     // };   
        // }else{
        //     echo "add vehicle is not an array...!";
        // }
        // print_r($request->input("add_vehicle"));
        // exit();
        // $multiValues = $request->input("add_vehicle[]");

        // foreach ($request->inputs as $key => $value) {
        //     Product::create($value);
        // }
            // foreach ($request->all() as $key => $request) {
            //     Product::create([
            //         "ins_company" => $request->input("ins_com"),
            //         "policy_num" => $request->input("policy_num"),
            //         "year" => $request->input("year"),
            //         "make" => $request->input("make"), 
            //         "model" => $request->input("model"),
            //         "vin_num" => $request->input("vin_num"),
            //         "effective_date" => $request->input("effective_date"),
            //         "exp_date" => $request->input("exp_date"),
            //         "next_amount_due" => $request->input("next_amount_due"),
            //         "due_date" => $request->input("due_date")
            //     ]);
            // }

        // $product = Product::create([
        //     "ins_company" => $request->input("ins_com"),
        //     "policy_num" => $request->input("policy_num"),
        //     "year" => $request->input("year"),
        //     "make" => $request->input("make"), 
        //     "model" => $request->input("model"),
        //     "vin_num" => $request->input("vin_num"),
        //     "effective_date" => $request->input("effective_date"),
        //     "exp_date" => $request->input("exp_date"),
        //     "next_amount_due" => $request->input("next_amount_due"),
        //     "due_date" => $request->input("due_date"),
        // ]);

        return redirect()->back()->with('message','Product added successfully !!');

        // $Product = Product::create([
        //     'display_name' =>$request->display_name,
        //     'state' =>$request->state,
        //     'carrier' =>$request->carrier,
        //     'product_name' =>$request->product_name,
        //     'agent_type' =>$request->agent_type,
        //     'agency' =>$request->agency,
        //     'in_house_agent' =>$request->in_house_agent,
        //     'downline' =>$request->downline,
        //     'referral' =>$request->referral,
        //     'agent_level' =>$request->agent_level,
        //     'line_of_business' =>$request->line_of_business,
        //     'notes' =>$request->notes,
        //   ]); 
        //   $Product->save();
        //      $DownlineComission = DownlineComission::create([
        //     'type_of_payout' => $request->input('type_of_payout'),
        //     'percentage' => $request->input('percentage'),
        //     'flat_free' => $request->input('flat_free'),
        //     'initial_commission' => $request->input('initial_commission'),
        //     'renewal_commission_difference' => $request->input('renewal_commission_difference'),
        //     'add_additional_RN_commission' => $request->input('add_additional_RN_commission'),
        //     'RN_commission' => $request->input('RN_commission'),
        //     'notes' => $request->input('notes'),
      
        //     'product_id' => $Product->id,
        // ]);
        // $AgencyComission = AgencyComission::create([
        //     'type_of_payout' => $request->input('type_of_payout'),
        //     'percentage' => $request->input('percentage'),
        //     'flat_free' => $request->input('flat_free'),
        //     'initial_commission' => $request->input('initial_commission'),
        //     'company_fee' => $request->input('company_fee'),
        //     'renewal_commission_difference' => $request->input('renewal_commission_difference'),
        //     'add_additional_RN_commission' =>  $request->input('add_additional_RN_commission'),
        //     'RN_commission' =>  $request->input('RN_commission'),
        //     'notes' =>  $request->input('notes'),
        //     'product_id' => $Product->id,
        // ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $url = route('product.edit',$id);
        $product = Product::find($id);
        return view('product.view',compact('product','url'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $url = 'product' . "/" . $id;
        $method = 'PUT';
        $btnText = "Update";
        // $httpMethod = request()->method();
        $moreFieldFalse = false;
        return view('product.create',compact('product','url','moreFieldFalse','method','btnText'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $ins_com = $request->ins_com;
        $policy_num = $request->policy_num;
        $year = $request->year;
        $make = $request->make;
        $model = $request->model;
        $vin_num = $request->vin_num;
        $effective_date = $request->effective_date;
        $exp_date = $request->exp_date;
        $next_amount_due = $request->next_amount_due;
        $due_date = $request->due_date;
            for ($i = 0; $i < count($vin_num) ; $i++) { 
                $updateData = [
                        "ins_company" => $ins_com[$i],
                        "policy_num" => $policy_num[$i],
                        "year" => $year[$i],
                        "make" =>  $make[$i],
                        "model" => $model[$i],
                        "vin_num" => $vin_num[$i],
                        "effective_date" => $effective_date[$i],
                        "exp_date" => $exp_date[$i],
                        "next_amount_due" => $next_amount_due[$i],
                        "due_date" => $due_date[$i],
                ];
            }
                Product::where('id',$id)->update($updateData);
        // Product::where('id',$id)->update([
        //         "ins_company" => $request->ins_com,
        //         "policy_num" => $request->policy_num,
        //         "year" => $request->year,
        //         "make" =>  $request->make,
        //         "model" => $request->model,
        //         "vin_num" => $request->vin_num,
        //         "effective_date" => $request->effective_date,
        //         "exp_date" => $request->exp_date,
        //         "next_amount_due" => $request->next_amount_due,
        //         "due_date" => $request->due_date,
        // ]);
        // $product = Product::find($id)->update([
        //     'display_name' =>$request->display_name,
        //     'state' =>$request->state,
        //     'carrier' =>$request->carrier,
        //     'product_name' =>$request->product_name,
        //     'agent_type' =>$request->agent_type,
        //     'agency' =>$request->agency,
        //     'in_house_agent' =>$request->in_house_agent,
        //     'downline' =>$request->downline,
        //     'referral' =>$request->referral,
        //     'agent_level' =>$request->agent_level,
        //     'line_of_business' =>$request->line_of_business,
        //     'notes' =>$request->notes,

        //   ]);
        //      $DownlineComission = DownlineComission::where('product_id',$id)->update([
        //     'type_of_payout' => $request->input('type_of_payout'),
        //     'percentage' => $request->input('percentage'),
        //     'flat_free' => $request->input('flat_free'),
        //     'initial_commission' => $request->input('initial_commission'),
        //     'renewal_commission_difference' => $request->input('renewal_commission_difference'),
        //     'add_additional_RN_commission' => $request->input('add_additional_RN_commission'),
        //     'RN_commission' => $request->input('RN_commission'),
        //     'notes' => $request->input('notes'),
        // ]);
        // $AgencyComission = AgencyComission::where('product_id',$id)->update([
        //     'type_of_payout' => $request->input('type_of_payout'),
        //     'percentage' => $request->input('percentage'),
        //     'flat_free' => $request->input('flat_free'),
        //     'initial_commission' => $request->input('initial_commission'),
        //     'company_fee' => $request->input('company_fee'),
        //     'renewal_commission_difference' => $request->input('renewal_commission_difference'),
        //     'add_additional_RN_commission' =>  $request->input('add_additional_RN_commission'),
        //     'RN_commission' =>  $request->input('RN_commission'),
        //     'notes' =>  $request->input('notes'),
        // ]);
        return redirect()
        ->route('product.index')
        ->with('message','Product Updated successfully !!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id)->delete();
        return redirect()->route('product.index')
                        ->with('message','Product Deleted successfully !!');
    }
}