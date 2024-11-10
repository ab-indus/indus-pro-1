<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Customer;
use App\Models\Notes;
use App\Models\Employee;



use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return User::all();
    }

    public function customers()
    {
        return Customer::all();
    }

    public function tasks()
    {
        return Notes::all();
    }

    public function employees()
    {
        return Employee::all();
    }
    // single record show

    public function getCustomer($id)
{
    $customer = Customer::find($id);

    if (!$customer) {
        return response()->json(['error' => 'Customer not found'], 404);
    }

    return response()->json(['customer' => $customer]);
}

public function getTask($id)
{
    $task = Notes::find($id);

    if (!$task) {
        return response()->json(['error' => 'Task not found'], 404);
    }

    return response()->json(['task' => $task]);
}

public function getEmployee($id)
{
    $employee = Employee::find($id);

    if (!$employee) {
        return response()->json(['error' => 'Employee not found'], 404);
    }

    return response()->json(['employee' => $employee]);
}



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = User::create($request->all());
        return response()->json($user, 201);

    }


    // login api
    public function login(Request $request)
{
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        $user = Auth::user();
        // Optionally, you can generate an API token (e.g., using Laravel Passport) and return it in the response.
        $token = $user->createToken('AppName')->accessToken;
        return response()->json(['user' => $user, 'token' => $token]);
    }

    return response()->json(['error' => 'Unauthorized'], 401);
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
    
        if (!$user) {
            return response()->json(['error' => 'User not found'], 404);
        }
    
        return response()->json(['user' => $user]);
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
        $user = User::find($id);
    
        if (!$user) {
            return response()->json(['error' => 'User not found'], 404);
        }
    
        $user->update($request->all());
    
        return response()->json(['user' => $user, 'message' => 'User updated successfully']);
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   public function destroy($id)
{
    $user = User::find($id);

    if (!$user) {
        return response()->json(['error' => 'User not found'], 404);
    }

    $user->delete();

    return response()->json(['message' => 'User deleted successfully']);
}

}
