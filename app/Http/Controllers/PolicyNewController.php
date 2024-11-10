<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PolicyNew;
use App\Models\PolicyChange;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\GeneralLead;
use App\Models\LeadHistory;
use Illuminate\Support\Facades\Auth;

use App\Exports\PolicyNewExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\PolicyNewImport;

class PolicyNewController extends Controller
{

    public function export()
    {
        return Excel::download(new PolicyNewExport, 'policy_data.xlsx');
    }

    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xlsx,csv',
        ]);

        Excel::import(new PolicyNewImport, $request->file('file'));

        return redirect()->back()->with('message', 'Policies imported successfully!');
    }
    
    public function index(Request $request)
    {
        $query = PolicyNew::query();
    
        if ($request->has('search_value') && $request->search_value != '') {
            $searchField = $request->input('search_field', 'last_name'); // Default to 'first_name'
            $searchValue = $request->search_value;
    
            $query->where($searchField, 'like', '%' . $searchValue . '%');
        }
    
        $data = $query->get();
    
        return view('policy_new.index', compact('data'));
    }

    public function Databse(Request $request)
    {
        $data = PolicyNew::all();
    
        return view('policy_new.policyDatabase', compact('data'));
    }
    
    public function View($id)
    {
        $data = PolicyNew::find($id);
    
        return view('policy_new.view', compact('data'));
    }

    
    public function ClientPolicy()
    {
        $data = PolicyNew::where('user_id', Auth::id())->get();

        return view('policy_new.clientPolicy', compact('data'));
    }
    
    public function log(Request $request)
    {
        // $data = GeneralLead::all();
        $data = GeneralLead::orderBy('created_at', 'desc')->get();
    
        return view('policy_new.leadHistory', compact('data'));
    }
    
    public function historySheet(Request $request)
    {
        // $data = LeadHistory::all();
        // $data = LeadHistory::orderBy('created_at', 'desc')->get();
        $data = LeadHistory::whereNull('status')
        ->orWhere('status', 'Pending Quote')
        ->orderBy('created_at', 'desc')
        ->get();

        return view('policy_new.LeadHistoryReal', compact('data'));
    }

    public function LeadSolid(Request $request)
    {
        // $data = LeadHistory::orderBy('created_at', 'desc')->get();
        $data = LeadHistory::where('status', 'Policy Sold')->orderBy('created_at', 'desc')->get();


        return view('policy_new.LeadSolid', compact('data'));
    }

    public function LeadProspects(Request $request)
    {
        // $data = LeadHistory::orderBy('created_at', 'desc')->get();
        $data = LeadHistory::where('status', 'Future Prospects')->orderBy('created_at', 'desc')->get();


        return view('policy_new.LeadProspects', compact('data'));
    }

    public function updateLead(Request $request, $id)
    {
        $lead = LeadHistory::findOrFail($id);

        // Update fields based on AJAX input
        $field = $request->input('field');
        $value = $request->input('value');

        // Handle checkbox fields for boolean values
        if (in_array($field, ['need_additional_info', 'received_info', 'gave_quote'])) {
            $lead->$field = $value === 'true' ? 1 : 0;
        } else {
            $lead->$field = $value;
        }

        $lead->save();

        return response()->json(['success' => true]);
    }


    public function PolicyReminders()
    {
        $data = PolicyNew::all();
        $dueTomorrow = PolicyNew::where('due_date', Carbon::tomorrow())->get();
        $ExpireTomorrow = PolicyNew::where('expiration_date', Carbon::tomorrow())->get();

        // $UpcomingAutoPay = PolicyNew::where('autopay', 'on')
        // ->whereBetween('due_date', [Carbon::today(), Carbon::today()->addDays(7)])
        // ->get();

        $UpcomingAutoPay = PolicyNew::where('autopay', 'on')
        ->where('due_date', Carbon::today()->addWeek()) // 1 week from today
        ->get();

        $BirthdayToday = PolicyNew::whereMonth('dob', Carbon::today()->month)
        ->whereDay('dob', Carbon::today()->day)
        ->get();



        return view('policy_new.reminder', compact('data', 'dueTomorrow', 
        'ExpireTomorrow', 'UpcomingAutoPay', 'BirthdayToday'));
    }

    public function PolicyChange()
    {
       //  $data = PolicyNew::all(); 

        return view('policy_new.policyChange');   
     }
     
  
      public function PolicyChangeID($id)
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
         return view('policy_new.policyChangeNew', compact('data'));
     }

     
    //  public function PolicyChangeHistory1()
    //  {
    //      $data = PolicyChange::all(); 
 
    //     //  return "nice";
 
    //      return view('policy_new.change', compact('data'));
    //     }

    
    public function PolicyDashboard()
    {
        // Total policies and premiums
        $totalPolicies1 = PolicyNew::count();
        $totalPremium1 = PolicyNew::sum('total_premium');

        $totalPolicies =  $totalPolicies1 ;
        $totalPremium = $totalPremium1 ;

        
        // total premium monthly
        $monthlyPremiums = PolicyNew::select(
            DB::raw('SUM(total_premium) as total_premium'),
            DB::raw('DATE_FORMAT(created_at, "%Y-%m") as month')
        )
        ->where('created_at', '>=', Carbon::now()->subMonths(11)) // last 12 months including current
        ->groupBy('month')
        ->orderBy('month')
        ->get();
        
        $months1 = [];
        $premiums1 = [];
        
        foreach ($monthlyPremiums as $premium) {
            $months1[] = $premium->month; // X axis (time)
            $premiums[] = $premium->total_premium; // Y axis (total premium)
        }
        
        // end

        // polices month

        $startMonth = Carbon::now()->startOfMonth()->subMonths(11);
        $endMonth = Carbon::now()->endOfMonth();
    
        // Get policy count grouped by month
        $monthlyPolicies = PolicyNew::select(
            DB::raw('COUNT(id) as total_policies'),
            DB::raw('DATE_FORMAT(created_at, "%Y-%m") as month')
        )
        ->whereBetween('created_at', [$startMonth, $endMonth])
        ->groupBy('month')
        ->orderBy('month')
        ->get();
    
        // Initialize an array to hold 12 months data
        $months = [];
        $policies = [];
        
        for ($i = 0; $i < 12; $i++) {
            $month = $startMonth->copy()->addMonths($i)->format('Y-m');
            $months[] = $month;
            $monthlyData = $monthlyPolicies->firstWhere('month', $month);
            $policies[] = $monthlyData ? $monthlyData->total_policies : 0; // Set to 0 if no data for the month
        }
        // policies end




        
        // Specific policy types and premiums
        $autoPersonalPolicies = PolicyNew::where('type_of_policy', 'Auto Personal')->count();
        $autoPersonalPremium = PolicyNew::where('type_of_policy', 'Auto Personal')->sum('total_premium');
        
        $autoCommercialPolicies = PolicyNew::where('type_of_policy', 'Auto Commercial')->count();
        $autoCommercialPremium = PolicyNew::where('type_of_policy', 'Auto Commercial')->sum('total_premium');
    
        $otherCommercialPolicies = PolicyNew::where('type_of_policy', 'Other Commercial')->count();
        $otherCommercialPremium = PolicyNew::where('type_of_policy', 'Other Commercial')->sum('total_premium');
        
        $motorcyclePolicies = PolicyNew::where('type_of_policy', 'Motorcycles')->count();
        $motorcyclePremium = PolicyNew::where('type_of_policy', 'Motorcycles')->sum('total_premium');
    
        $homePolicies = PolicyNew::where('type_of_policy', 'Home')->count();
        $homePremium = PolicyNew::where('type_of_policy', 'Home')->sum('total_premium');
    
        $rentersPolicies = PolicyNew::where('type_of_policy', 'Renters')->count();
        $rentersPremium = PolicyNew::where('type_of_policy', 'Renters')->sum('total_premium');
    
        $lifePolicies = PolicyNew::where('type_of_policy', 'Life')->count();
        $lifePremium = PolicyNew::where('type_of_policy', 'Life')->sum('total_premium');
    
        $medicarePolicies = PolicyNew::where('type_of_policy', 'Medicare')->count();
        $medicarePremium = PolicyNew::where('type_of_policy', 'Medicare')->sum('total_premium');
    
        $acaPolicies = PolicyNew::where('type_of_policy', 'ACA')->count();
        $acaPremium = PolicyNew::where('type_of_policy', 'ACA')->sum('total_premium');
    
        $otherPolicies = PolicyNew::where('type_of_policy', 'Others')->count();
        $otherPremium = PolicyNew::where('type_of_policy', 'Others')->sum('total_premium');
    
        return view('policy_new.dashboard', compact(
            'totalPolicies', 'totalPremium', 'autoPersonalPolicies', 'autoPersonalPremium',
            'autoCommercialPolicies', 'autoCommercialPremium', 'otherCommercialPolicies', 'otherCommercialPremium',
            'motorcyclePolicies', 'motorcyclePremium', 'homePolicies', 'homePremium',
            'rentersPolicies', 'rentersPremium', 'lifePolicies', 'lifePremium', 
            'medicarePolicies', 'medicarePremium', 'acaPolicies', 'acaPremium',
            'otherPolicies', 'otherPremium' , 'totalPolicies1', 'totalPremium1',
            'months1', 'premiums', 'months', 'policies'
        ));
    }
    
     
     public function PolicyChangeStore(Request $request)
    {
        // dd($request->all());
           // Validate the input fields
        $validated = $request->validate([
            'policy_id' => 'required|exists:policy_new,id',
            'person' => 'required|string|max:255',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'carrier' => 'nullable|string|max:255',
            'policy_number' => 'nullable|string|max:255',
            'driver_action' => 'nullable|string|max:255',
            'driver_name' => 'nullable|string|max:255',
            'dl' => 'nullable|string|max:255',
            'vehicle_option' => 'nullable|string|max:255',
            'vin' => 'nullable|string|max:255',
            'year' => 'nullable|date',
            'make' => 'nullable|integer',
            'model' => 'nullable|string|max:255',
            'change_option' => 'nullable|string|max:255',
            'effective_date' => 'nullable|date',
            'annual_premium' => 'nullable|string|max:255',
            'new_phone_number' => 'nullable|string|max:255',
            'new_email' => 'nullable|email|max:255',
            'new_address' => 'nullable|string|max:255',
            'notes' => 'nullable|string',
        ]);

        // Create a new PolicyChange record using the validated data
        PolicyChange::create([
            'policy_id' => $request->policy_id,
            'person' => $request->person,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'carrier' => $request->carrier,
            'policy_number' => $request->policy_number,
            'driver_action' => $request->driver_action,
            'driver_name' => $request->driver_name,
            'dl' => $request->dl,
            'vehicle_option' => $request->vehicle_option,
            'vin' => $request->vin,
            'year' => $request->year,
            'make' => $request->make,
            'model' => $request->model,
            'change_option' => $request->change_option,
            'effective_date' => $request->effective_date,
            'annual_premium' => $request->annual_premium,
            'new_phone_number' => $request->new_phone_number,
            'new_email' => $request->new_email,
            'new_address' => $request->new_address,
            'notes' => $request->notes,
        ]);
    
        // PolicyChange::create($validated);
    
        return redirect()->route('PolicyNew.index')->with('message', 'Policy change saved successfully.');

    }
    
    

    public function create()
    {
        return view('policy_new.create');   
     }
     
     public function store(Request $request)
     {
          // dd($request->all());
         // Validate the incoming request data
         $validatedData = $request->validate([
             'autopay' => 'nullable|string',
             'new_customer' => 'nullable|string',
             'rewrite' => 'nullable|string',
             'renew' => 'nullable|string',
             'first_name' => 'required|string|max:255',
             'middle_name' => 'nullable|string|max:255',
             'last_name' => 'required|string|max:255',
             'preferred_name' => 'nullable|string|max:255',
             'email' => 'required|email|max:255',
             'phone' => 'nullable|string|max:255',
             'dob' => 'nullable|date',
             'ssn' => 'nullable|string|max:255',
             'zip' => 'nullable|string|max:255',
             'type_of_id' => 'nullable|string|max:255',
             'dl_id' => 'nullable|string|max:255',
             'carrier' => 'nullable|string|max:255',
             'policy_number' => 'nullable|string|max:255',
             'type_of_policy' => 'nullable|string|max:255',
             'insured_items' => 'nullable|string|max:255',
             'insured_drivers' => 'nullable|string|max:255',
             'excluded_drivers' => 'nullable|string|max:255',
             'lien' => 'nullable|string|max:255',
             'effective_date' => 'nullable|date',
             'expiration_date' => 'nullable|date',
             'term_months' => 'nullable|integer',
             'due_date' => 'nullable|date',
             'amount_due' => 'nullable|string|max:255',
             'base_premium' => 'nullable|string|max:255',
             'state_fee_mvca' => 'nullable|string|max:255',
             'policy_fee' => 'nullable|string|max:255',
             'roadside_assistance_fee' => 'nullable|string|max:255',
             'sr22' => 'nullable|string|max:255',
             'other_fee' => 'nullable|string|max:255',
             'total_premium' => 'nullable|string|max:255',
             'annual_premium' => 'nullable|string|max:255',
             'paid_today' => 'nullable|string|max:255',
             'amount_paid_cc' => 'nullable|string|max:255',
             'amount_paid_cash' => 'nullable|string|max:255',
             'direct_pay' => 'nullable|string|max:255',
             'name_on_card' => 'nullable|string|max:255',
             'debit_card' => 'nullable|string|max:255',
             'credit_card_name' => 'nullable|string|max:255',
             'number_1st_4' => 'nullable|string|max:255',
             'number_2nd_4' => 'nullable|string|max:255',
             'number_3rd_4' => 'nullable|string|max:255',
             'number_4th_4' => 'nullable|string|max:255',

             'expiration_1' => 'nullable|string|max:255',
             'expiration_2' => 'nullable|string|max:255',
             'billing_zip' => 'nullable|string|max:255',
             'cvc' => 'nullable|string|max:255',
             'notes' => 'nullable|string',
         ]);
     
         // Create a new PolicyNew instance and fill it with the validated data
         $policyNew = PolicyNew::create($validatedData);
     
         // Redirect or return a response, e.g., redirecting to a page or showing a success message
         return redirect()->route('PolicyNew.create')->with('message', 'Policy created successfully.');
     }
}
