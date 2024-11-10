<?php

// use controllers and models here
use App\Http\Controllers\QuotesVechileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommercialVehicle;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\AddTeamMember;
use App\Http\Controllers\MasterPaySheet;
// use App\Http\Controllers\InsuranceCutomer2;



// routes here

Route::get('Obamacare/1', [QuotesVechileController::class, 'obama1'])->name('obama1.create');
Route::get('Quote/CommercialVehicle/GarbageTruckRollOn/part/1', [CommercialVehicle::class, 'GarbageTruckRollOn'])->name('GarbageTruckRollOn.index');

// employee start
Route::get('HR/Employee', [EmployeeController::class, 'Employee'])->name('Employee.index');
Route::post('HR/Employee', [EmployeeController::class, 'EmployeeSubmit']);
Route::get('HR/EmployeeTwo', [EmployeeController::class, 'EmployeeTwo'])->name('Employee.index');
Route::delete('employee_two/{id}', [EmployeeController::class,'destroy_two'])->name('employee_two.destroy');
// employee end

// AddTeamMember 
Route::get('AddTeamMember/create', [AddTeamMember::class, 'AddTeamMember'])->name('AddTeamMember.index');
Route::post('AddTeamMember', [AddTeamMember::class, 'AddTeamMemberPost']);
Route::get('AddTeamMember/view', [AddTeamMember::class, 'AddTeamMemberView'])->name('AddTeamMemberView.index');
Route::get('ViewTeamMember/{id}', [AddTeamMember::class, 'ViewTeamMember']);
Route::delete('DeleteTeamMember/{id}', [AddTeamMember::class, 'DeleteTeamMember']);
Route::get('EditTeamMember/{id}', [AddTeamMember::class, 'EditTeamMember']);
Route::post('UpdateTeamMember/{id}', [AddTeamMember::class, 'UpdateTeamMember']);





// Master Pay Sheet
Route::get('MasterPaySheet', [MasterPaySheet::class, 'MasterPaySheet']);
// Task History Done
// Route::get('Task-History-done', [AddTeamMember::class, 'TaskHistoryDone'])->name('TaskHistoryDone');

// Aisha customer 2
Route::get('Insurance-cutomer2-View', [InsuranceCutomer2::class, 'InsuranceCutomer2View'])->name('InsuranceCutomer2View');
Route::get('Insurance-cutomer2', [InsuranceCutomer2::class, 'InsuranceCutomer2'])->name('InsuranceCutomer2');
Route::post('Insurance-cutomer2', [InsuranceCutomer2::class, 'InsuranceCutomer2Post'])->name('InsuranceCutomer2Post');
Route::get('Insurance-cutomer2-Search', [InsuranceCutomer2::class, 'InsuranceCutomer2Search'])->name('InsuranceCutomer2Search');
// Edit Update Delete
Route::get('insurance_customer/edit/{id}', [InsuranceCutomer2::class, 'edit'])->name('insurance_customer.edit');
Route::put('insurance_customer/update/{id}', [InsuranceCutomer2::class, 'update'])->name('insurance_customer.update');
Route::delete('insurance_customer/{id}', [InsuranceCutomer2::class, 'destroy'])->name('insurance_customer.destroy');

//  Add Customer 22 kiran 
Route::get('Insurance-cutomer-View', [InsuranceCutomer2::class, 'InsuranceCutomerView'])->name('InsuranceCutomerView');
Route::post('Insurance-cutomer', [InsuranceCutomer2::class, 'InsuranceCutomer']);
Route::get('Insurance-cutomer-Search', [InsuranceCutomer2::class, 'InsuranceCutomerSearch'])->name('InsuranceCutomerView');
Route::get('Insurance-cutomer-Search', [InsuranceCutomer2::class, 'InsuranceCutomerSearch'])->name('InsuranceCutomerSearch');
Route::delete('InsuranceCustomer/{id}', [InsuranceCutomer2::class, 'destroyCustomer'])->name('InsuranceCustomer.Destroy');
Route::get('InsuranceCustomer/edit/{id}', [InsuranceCutomer2::class, 'InsuranceCustomerEdit'])->name('InsuranceCustomer.edit');
Route::put('InsuranceCustomer/update/{id}', [InsuranceCutomer2::class, 'InsuranceCustomerUpdate'])->name('InsuranceCustomer.update');



?>