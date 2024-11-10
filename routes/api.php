<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\UserController;
// use App\Http\Controllers\AgentNewController;
use App\Http\Controllers\API\AgentNewController;




/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('us',function(){
return "hello";
});

Route::get('users',[UserController::class,'index'])->name('users.index');
Route::post('users',[UserController::class,'store'])->name('users.store');

Route::post('login', [UserController::class, 'login'])->name('users.login');
Route::delete('users/{id}', [UserController::class, 'destroy'])->name('users.destroy');
Route::get('users/{id}', [UserController::class, 'show'])->name('users.show');
Route::put('users/{id}', [UserController::class, 'update'])->name('users.update');

// for getting all data
Route::get('customers',[UserController::class,'customers'])->name('customer.index');
Route::get('tasks',[UserController::class,'tasks'])->name('task.index');
Route::get('employees',[UserController::class,'employees'])->name('employees.index');


// for single data 
Route::get('customers/{id}', [UserController::class, 'getCustomer'])->name('customers.show');
Route::get('tasks/{id}', [UserController::class, 'getTask'])->name('tasks.show');
Route::get('employees/{id}', [UserController::class, 'getEmployee'])->name('employees.show');

Route::get('AgentNew/getPolicy/{id}', [AgentNewController::class, 'getPolicy'])->name('AgentNew.getPolicy');
Route::get('AgentNew/test', [AgentNewController::class, 'test'])->name('AgentNew.test');
