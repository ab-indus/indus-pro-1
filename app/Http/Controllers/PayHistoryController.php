<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PayHistory;



class PayHistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($customerId)
    {
        // Fetch documents for the specified customer
        $pay = PayHistory::where('customer_id', $customerId)->get();

        return view('pay-history.index', compact('pay', 'customerId'));
        // return view('pay-history.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($customerId)
    {
            return view('pay-history.create', compact('customerId'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request,$customerId )
    // {
    //     $pay = PayHistory::create($request->all());
    //     return redirect()->route('pay-history/add/{{$customerId}}')->with('message', 'Record added successfully !!');
    // }

    public function store(Request $request, $customerId)
{
    // Validate the incoming request data based on your requirements
    $validatedData = $request->validate([
        'heading' => 'required|string',
        'total_fee' => 'required|integer',
        'paid_amount' => 'nullable|integer',
        'fee_remain' => 'nullable|integer',
        'pay_date' => 'nullable|date',
        'next_pay' => 'nullable|date',
    ]);

    // Create a new payment history record
    $paymentHistory = new PayHistory([
        'heading' => $validatedData['heading'],
        'total_fee' => $validatedData['total_fee'],
        'paid_amount' => $validatedData['paid_amount'],
        'fee_remain' => $validatedData['fee_remain'],
        'pay_date' => $validatedData['pay_date'],
        'next_pay' => $validatedData['next_pay'],
        'customer_id' => $customerId, // Assign the customer_id from the URL parameter
    ]);

    // Save the payment history record to the database
    $paymentHistory->save();

    // Redirect back to the create page with a success message
    return redirect()->route('pay-history.index', ['customerId' => $customerId])->with('message', 'Record added successfully !!');
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    // public function destroy($id)
    // {
    //     //
    // }

    public function destroy($id)
{
    // Find the payment history record by its ID
    $paymentHistory = PayHistory::find($id);

    // Check if the record exists
    if (!$paymentHistory) {
        return redirect()->route('pay-history.index')->with('error', 'Record not found.');
    }

    // Delete the record
    $paymentHistory->delete();

    // Redirect back to the index page with a success message
    return back()->with('success', 'Record deleted successfully.');
}


}
