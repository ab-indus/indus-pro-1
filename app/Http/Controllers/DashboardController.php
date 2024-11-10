<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\CustomPayment;
use App\Models\Notes;


class DashboardController extends Controller
{
   
//     public function welcome()
//     {
//         return view ('welcome');

//    }

   public function welcome()
{
    $totalCustomers = CustomPayment::count(); // Assuming you have a 'Customer' model and table
    $totalToDoTasks = Notes::where('todo_list', true)->count();
    $totalRemainders = Notes::where('remainder', true)->count();

    return view('welcome', compact('totalCustomers', 'totalToDoTasks', 'totalRemainders'));
}
}
