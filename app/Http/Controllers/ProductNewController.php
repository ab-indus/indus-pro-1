<?php

namespace App\Http\Controllers;

use App\Models\ProductNew;
use App\Models\AgencyComission;
use App\Models\DownlineComission;
use Illuminate\Http\Request;

class ProductNewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = ProductNew::orderBy('id','DESC')->get()->all();
        return view('products.index',compact('data'));   
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Product = ProductNew::create([
            'display_name' =>$request->display_name,
            'state' =>$request->state,
            'carrier' =>$request->carrier,
            'product_name' =>$request->product_name,
            'agent_type' =>$request->agent_type,
            'agency' =>$request->agency,
            'in_house_agent' =>$request->in_house_agent,
            'downline' =>$request->downline,
            'referral' =>$request->referral,
            'agent_level' =>$request->agent_level,
            'line_of_business' =>$request->line_of_business,
            'notes' =>$request->notes,

          ]); 

          $Product->save();

             $DownlineComission = DownlineComission::create([
            'type_of_payout' => $request->input('type_of_payout'),
            'percentage' => $request->input('percentage'),
            'flat_free' => $request->input('flat_free'),
            'initial_commission' => $request->input('initial_commission'),
            'renewal_commission_difference' => $request->input('renewal_commission_difference'),
            'add_additional_RN_commission' => $request->input('add_additional_RN_commission'),
            'RN_commission' => $request->input('RN_commission'),
            'notes' => $request->input('notes'),
      
            'product_id' => $Product->id,
        ]);

        $AgencyComission = AgencyComission::create([
            'type_of_payout' => $request->input('type_of_payout'),
            'percentage' => $request->input('percentage'),
            'flat_free' => $request->input('flat_free'),
            'initial_commission' => $request->input('initial_commission'),
            'company_fee' => $request->input('company_fee'),
            'renewal_commission_difference' => $request->input('renewal_commission_difference'),
            'add_additional_RN_commission' =>  $request->input('add_additional_RN_commission'),
            'RN_commission' =>  $request->input('RN_commission'),
            'notes' =>  $request->input('notes'),
            'product_id' => $Product->id,
        ]);

        return redirect()->route('products.index')
        ->with('message','Product created successfully !!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = ProductNew::find($id);
        return view('products.view',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = ProductNew::find($id);
        return view('products.edit',compact('product'));
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
        $product = ProductNew::find($id)->update([
            'display_name' =>$request->display_name,
            'state' =>$request->state,
            'carrier' =>$request->carrier,
            'product_name' =>$request->product_name,
            'agent_type' =>$request->agent_type,
            'agency' =>$request->agency,
            'in_house_agent' =>$request->in_house_agent,
            'downline' =>$request->downline,
            'referral' =>$request->referral,
            'agent_level' =>$request->agent_level,
            'line_of_business' =>$request->line_of_business,
            'notes' =>$request->notes,

          ]);

             $DownlineComission = DownlineComission::where('product_id',$id)->update([
            'type_of_payout' => $request->input('type_of_payout'),
            'percentage' => $request->input('percentage'),
            'flat_free' => $request->input('flat_free'),
            'initial_commission' => $request->input('initial_commission'),
            'renewal_commission_difference' => $request->input('renewal_commission_difference'),
            'add_additional_RN_commission' => $request->input('add_additional_RN_commission'),
            'RN_commission' => $request->input('RN_commission'),
            'notes' => $request->input('notes'),
        ]);

        $AgencyComission = AgencyComission::where('product_id',$id)->update([
            'type_of_payout' => $request->input('type_of_payout'),
            'percentage' => $request->input('percentage'),
            'flat_free' => $request->input('flat_free'),
            'initial_commission' => $request->input('initial_commission'),
            'company_fee' => $request->input('company_fee'),
            'renewal_commission_difference' => $request->input('renewal_commission_difference'),
            'add_additional_RN_commission' =>  $request->input('add_additional_RN_commission'),
            'RN_commission' =>  $request->input('RN_commission'),
            'notes' =>  $request->input('notes'),
        ]);

        return redirect()->route('products.index')
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
        $product = ProductNew::find($id)->delete();
        return redirect()->route('products.index')
                        ->with('message','Product Deleted successfully !!');
    }
}
