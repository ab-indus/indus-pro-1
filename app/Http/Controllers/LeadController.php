<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LeadController extends Controller
{
    public function Lead(){
        return view('quotes/Lead.1');
    }
    
    public function LeadStore(Request $request)
    {
        $quoteFor = $request->input('quoteFor');

        switch ($quoteFor) {
            case 'Yourself or Family':
                return view('quotes/Lead.family2');
            case 'Business':
                return view('quotes/Lead.business2');
            case 'Both':
                return view('quotes/Lead.both2');
            default:
                // Handle unexpected quoteFor values gracefully
                abort(400, 'Invalid quoteFor value provided.');
        }
    }
}
