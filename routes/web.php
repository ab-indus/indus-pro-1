<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AgencyController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CarrierController;
use App\Http\Controllers\CustomPaymentController;
use App\Http\Controllers\CustomPolicyController;
use App\Http\Controllers\PayController;
use App\Http\Controllers\CustomerDocumentController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\LienController;
use App\Http\Controllers\PayHistoryController;
use App\Http\Controllers\Customer\CustomerUpdateController;
use App\Http\Controllers\CutomerStoreController;
use App\Http\Controllers\EmployeeWorkController;
use App\Http\Controllers\CustomerImportController;
use App\Http\Controllers\AccountingController;
use App\Http\Controllers\AccountsController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\TaxesController;
use App\Http\Controllers\ProductNewController;




use App\Http\Controllers\QuoteController;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\QuotesVechileController;
use App\Http\Controllers\PersonalVehiclesController;

// Ali controller work start
use App\Http\Controllers\PersonalVehicles;
use App\Http\Controllers\CommercialVehicle;
use App\Http\Controllers\CommercialTrailer;
use App\Http\Controllers\IndividualTaxFormController;
use App\Http\Controllers\BusinessRegistrationformsController;
// Ali controller work end




use App\Models\Notes;
use App\Models\CustomPayment;
use App\Models\Customer;
use App\Models\PolicyNew;
use Illuminate\Support\Facades\Auth;



// umair routes
include "umair_routes.php";
include "ali_routes.php";



// ali
Route::get('Quote/PersonalVehicles/Auto', [PersonalVehicles::class, 'Auto'])->name('Quote.create');
Route::get('Quote/PersonalVehicles/Auto/part/2', [PersonalVehicles::class, 'AutoPartTwo'])->name('Quote.create');
Route::get('Quote/PersonalVehicles/Auto/part/3', [PersonalVehicles::class, 'AutoPartThree'])->name('Quote.create');

// Boss New Same Form change dropdown to text fields 
Route::get('Quote/PersonalVehicles/Boat/part/1', [PersonalVehicles::class, 'BoatPartOne'])->name('BoatPartOne.index');
Route::get('Quote/PersonalVehicles/TravelTrailer/part/1', [PersonalVehicles::class, 'TravelTrailerPartOne'])->name('TravelTrailerPartOne.index');
Route::get('Quote/PersonalVehicles/MotorHome/part/1', [PersonalVehicles::class, 'MotorHomePartOne'])->name('MotorHomePartOne.index');
Route::get('Quote/PersonalVehicles/MotorCycle/part/1', [PersonalVehicles::class, 'MotorCyclePartOne'])->name('MotorCyclePartOne.index');
Route::get('Quote/PersonalVehicles/Auto/part/1', [PersonalVehicles::class, 'AutoPartOne'])->name('AutoPartOne.index');

// 29/Jan/2024 => AgricultureTruck start
Route::get('Quote/CommercialVehicle/AgricultureTruck/part/1', [CommercialVehicle::class, 'AgricultureTruck'])->name('AgricultureTruck.index');
Route::get('Quote/CommercialVehicle/BoomTruck/part/1', [CommercialVehicle::class, 'BoomTruck'])->name('BoomTruck.index');
Route::get('Quote/CommercialVehicle/BoxTruck/part/1', [CommercialVehicle::class, 'BoxTruck'])->name('BoxTruck.index');
Route::get('Quote/CommercialVehicle/BucketTruck/part/1', [CommercialVehicle::class, 'BucketTruck'])->name('BucketTruck.index');
Route::get('Quote/CommercialVehicle/Bus/part/1', [CommercialVehicle::class, 'Bus'])->name('Bus.index');
Route::get('Quote/CommercialVehicle/CarLuxury/part/1', [CommercialVehicle::class, 'CarLuxury'])->name('CarLuxury.index');
Route::get('Quote/CommercialVehicle/CarPassenger/part/1', [CommercialVehicle::class, 'CarPassenger'])->name('CarPassenger.index');
Route::get('Quote/CommercialVehicle/CarSports/part/1', [CommercialVehicle::class, 'CarSports'])->name('CarSports.index');
Route::get('Quote/CommercialVehicle/CarCarrierRollback/part/1', [CommercialVehicle::class, 'CarCarrierRollback'])->name('CarCarrierRollback.index');
Route::get('Quote/CommercialVehicle/CargoVan/part/1', [CommercialVehicle::class, 'CargoVan'])->name('CargoVan.index');
Route::get('Quote/CommercialVehicle/CateringLunchTruck/part/1', [CommercialVehicle::class, 'CateringLunchTruck'])->name('CateringLunchTruck.index');
Route::get('Quote/CommercialVehicle/CementMixer/part/1', [CommercialVehicle::class, 'CementMixer'])->name('CementMixer.index');
Route::get('Quote/CommercialVehicle/DeliveryStepVan/part/1', [CommercialVehicle::class, 'DeliveryStepVan'])->name('DeliveryStepVan.index');
Route::get('Quote/CommercialVehicle/DumpTruck/part/1', [CommercialVehicle::class, 'DumpTruck'])->name('DumpTruck.index');
Route::get('Quote/CommercialVehicle/FlatbedTruck/part/1', [CommercialVehicle::class, 'FlatbedTruck'])->name('FlatbedTruck.index');
Route::get('Quote/CommercialVehicle/GarbageTruck/part/1', [CommercialVehicle::class, 'GarbageTruck'])->name('GarbageTruck.index'); 
Route::get('Quote/CommercialVehicle/GarbageTruckFrontLoader/part/1', [CommercialVehicle::class, 'GarbageTruckFrontLoader'])->name('GarbageTruckFrontLoader.index');
Route::get('Quote/CommercialVehicle/GarbageTruckRoll-On/part/1', [CommercialVehicle::class, 'GarbageTruckRollOn'])->name('GarbageTruckRollOn.index');
Route::get('Quote/CommercialVehicle/Hearse/part/1', [CommercialVehicle::class, 'Hearse'])->name('Hearse.index');
Route::get('Quote/CommercialVehicle/IceCreamTruck/part/1', [CommercialVehicle::class, 'IceCreamTruck'])->name('IceCreamTruck.index');
Route::get('Quote/CommercialVehicle/Limousine/part/1', [CommercialVehicle::class, 'Limousine'])->name('Limousine.index');
Route::get('Quote/CommercialVehicle/LuxurySUV/part/1', [CommercialVehicle::class, 'LuxurySUV'])->name('LuxurySUV.index');
Route::get('Quote/CommercialVehicle/MiniVan/part/1', [CommercialVehicle::class, 'MiniVan'])->name('MiniVan.index');
Route::get('Quote/CommercialVehicle/MotorHome/part/1', [CommercialVehicle::class, 'MotorHome'])->name('MotorHome.index');
Route::get('Quote/CommercialVehicle/PassengerVan/part/1', [CommercialVehicle::class, 'PassengerVan'])->name('PassengerVan.index');
// today
Route::get('Quote/CommercialVehicle/PickupTruck/part/1', [CommercialVehicle::class, 'PickupTruck'])->name('PickupTruck.index');
Route::get('Quote/CommercialVehicle/PumpTruckCement/part/1', [CommercialVehicle::class, 'PumpTruckCement'])->name('PumpTruckCement.index');
Route::get('Quote/CommercialVehicle/RefrigeratedBoxTruck/part/1', [CommercialVehicle::class, 'RefrigeratedBoxTruck'])->name('RefrigeratedBoxTruck.index');
Route::get('Quote/CommercialVehicle/SportUtilityVehicle/part/1', [CommercialVehicle::class, 'SportUtilityVehicle'])->name('SportUtilityVehicle.index');
Route::get('Quote/CommercialVehicle/StakeBodyTruck/part/1', [CommercialVehicle::class, 'StakeBodyTruck'])->name('StakeBodyTruck.index');
Route::get('Quote/CommercialVehicle/StreetSweeper/part/1', [CommercialVehicle::class, 'StreetSweeper'])->name('StreetSweeper.index');
Route::get('Quote/CommercialVehicle/TankTruck/part/1', [CommercialVehicle::class, 'TankTruck'])->name('TankTruck.index');
Route::get('Quote/CommercialVehicle/TowTruckWrecker/part/1', [CommercialVehicle::class, 'TowTruckWrecker'])->name('TowTruckWrecker.index');
Route::get('Quote/CommercialVehicle/TruckTractor/part/1', [CommercialVehicle::class, 'TruckTractor'])->name('TruckTractor.index');

Route::get('Quote/CommercialTrailer/AutoHauler/part/1', [CommercialTrailer::class, 'AutoHauler'])->name('AutoHauler.index');
Route::get('Quote/CommercialTrailer/BottomDump/part/1', [CommercialTrailer::class, 'BottomDump'])->name('BottomDump.index');
Route::get('Quote/CommercialTrailer/BulkCommodity/part/1', [CommercialTrailer::class, 'BulkCommodity'])->name('BulkCommodity.index');
Route::get('Quote/CommercialTrailer/ConcessionTrailer/part/1', [CommercialTrailer::class, 'ConcessionTrailer'])->name('ConcessionTrailer.index');
Route::get('Quote/CommercialTrailer/DryFreightTrailer/part/1', [CommercialTrailer::class, 'DryFreightTrailer'])->name('DryFreightTrailer.index');
Route::get('Quote/CommercialTrailer/DumpBodyTrailer/part/1', [CommercialTrailer::class, 'DumpBodyTrailer'])->name('DumpBodyTrailer.index');
Route::get('Quote/CommercialTrailer/FlatbedTrailer/part/1', [CommercialTrailer::class, 'FlatbedTrailer'])->name('FlatbedTrailer.index');
Route::get('Quote/CommercialTrailer/GooseneckTrailer/part/1', [CommercialTrailer::class, 'GooseneckTrailer'])->name('GooseneckTrailer.index');
Route::get('Quote/CommercialTrailer/HorseTrailer/part/1', [CommercialTrailer::class, 'HorseTrailer'])->name('HorseTrailer.index');
Route::get('Quote/CommercialTrailer/LivestockTrailer/part/1', [CommercialTrailer::class, 'LivestockTrailer'])->name('LivestockTrailer.index');
Route::get('Quote/CommercialTrailer/LoggingTrailer/part/1', [CommercialTrailer::class, 'LoggingTrailer'])->name('LoggingTrailer.index');
Route::get('Quote/CommercialTrailer/LowBoyTrailer/part/1', [CommercialTrailer::class, 'LowBoyTrailer'])->name('LowBoyTrailer.index');
Route::get('Quote/CommercialTrailer/PoleTrailer/part/1', [CommercialTrailer::class, 'PoleTrailer'])->name('PoleTrailer.index');
Route::get('Quote/CommercialTrailer/RefrigeratedDryFreight/part/1', [CommercialTrailer::class, 'RefrigeratedDryFreight'])->name('RefrigeratedDryFreight.index');
Route::get('Quote/CommercialTrailer/TankTrailer/part/1', [CommercialTrailer::class, 'TankTrailer'])->name('TankTrailer.index');
Route::get('Quote/CommercialTrailer/TiltTrailer/part/1', [CommercialTrailer::class, 'TiltTrailer'])->name('TiltTrailer.index');
Route::get('Quote/CommercialTrailer/TravelTrailer/part/1', [CommercialTrailer::class, 'TravelTrailer'])->name('TravelTrailer.index');
Route::get('Quote/CommercialTrailer/UtilityTrailer/part/1', [CommercialTrailer::class, 'UtilityTrailer'])->name('UtilityTrailer.index');
Route::get('Quote/CommercialTrailer/WedgeTrailer/part/1', [CommercialTrailer::class, 'WedgeTrailer'])->name('WedgeTrailer.index');
// 29/Jan/2024 => AgricultureTruck end
Route::get('Quote/IndividualTaxForm/FBRTaxFilerInformation', [IndividualTaxFormController::class, 'FBRTaxFilerInformation'])->name('FBRTaxFilerInformation.index');
Route::get('Quote/BusinessRegistrationforms/SoleProprietor ', [BusinessRegistrationformsController::class, 'SoleProprietor'])->name('SoleProprietor.index');
Route::get('Quote/BusinessRegistrationforms/Partnership ', [BusinessRegistrationformsController::class, 'Partnership'])->name('Partnership.index');
Route::get('Quote/BusinessRegistrationforms/AOP ', [BusinessRegistrationformsController::class, 'AOP'])->name('AOP.index');
Route::get('Quote/BusinessRegistrationforms/SECP ', [BusinessRegistrationformsController::class, 'SECP'])->name('SECP.index');



// ali end

Route::get('Quote/', [QuoteController::class, 'Quote'])->name('Quote.create');
Route::post('Quote/', [QuoteController::class, 'QuoteStore'])->name('Quote.store');

Route::get('Quote/2', [QuoteController::class, 'Quote2'])->name('Quote2.create');

Route::get('Quote/Motor/3', [QuoteController::class, 'Motor3'])->name('Motor.3');

Route::get('Quote/Boat/3', [QuoteController::class, 'Boat3'])->name('Boat.3');

Route::get('Quote/Auto/3', [QuoteController::class, 'Auto3'])->name('Auto.3');

Route::get('Quote/Travel/3', [QuoteController::class, 'Travel3'])->name('Travel.3');

// for new design on old cms
Route::get('Quotes/', [QuoteController::class, 'Quotes'])->name('Quotes.create');
Route::get('Quotes/2', [QuoteController::class, 'Quotes2'])->name('Quotes2.create');
Route::get('Quotes/commercial/3', [QuoteController::class, 'Quotes3'])->name('Quotes3.create');
Route::get('Quotes/individual/3', [QuoteController::class, 'Quotes3Indi'])->name('Quotes3Indi.create');

// lead
Route::get('Lead/', [LeadController::class, 'Lead'])->name('Lead.create');
Route::post('Lead/', [LeadController::class, 'LeadStore'])->name('Lead.store');
Route::get('Lead/family/2', [LeadController::class, 'LeadFamily2'])->name('LeadFamily2.create');
Route::get('Lead/business/2', [LeadController::class, 'LeadBusiness2'])->name('LeadBusiness2.create');
Route::get('Lead/both/2', [LeadController::class, 'LeadBoth2'])->name('LeadBoth2.create');



Route::get('Quotes/Commercial/Vehicle/3', [QuoteController::class, 'CommercialVehicle3'])->name('CommercialVehicle.3');
Route::get('Quotes/Commercial/Trailer/3', [QuoteController::class, 'CommercialTrailer3'])->name('CommercialTrailer.3');


// new quotes routes
Route::get('Leads/', [QuoteController::class, 'quotesSelect'])->name('Quotes.select');

// new end


Route::get('Quote/Vehicle/2', [QuoteController::class, 'Vehicle2'])->name('Vehicle.2');
Route::get('Quote/Vehicle/3', [QuoteController::class, 'Vehicle3'])->name('Vehicle.3');
Route::get('Quote/Vehicle/4', [QuoteController::class, 'Vehicle4'])->name('Vehicle.4');
Route::get('Quote/Commercial/Vehicle/2', [QuoteController::class, 'CommercialVehicle2'])->name('CommercialVehicle.2');
// Route::get('Quote/Commercial/Vehicle/3', [QuoteController::class, 'CommercialVehicle3'])->name('CommercialVehicle.3');

Route::get('Quote/Commercial/Trailer/2', [QuoteController::class, 'CommercialTrailer2'])->name('CommercialTrailer.3');

Route::get('Quote/Boat/2', [QuoteController::class, 'Boat2'])->name('Boat.2');
Route::get('Quote/Boat/3', [QuoteController::class, 'Boat3'])->name('Boat.3');

Route::get('Quote/Motor/2', [QuoteController::class, 'Motor2'])->name('Motor.2');

Route::get('Quote/Travel/2', [QuoteController::class, 'Travel2'])->name('Travel.2');
// Route::get('Quote/Travel/3', [QuoteController::class, 'Travel3'])->name('Travel.3');





//! vehicle qoutes routes here

Route::get('Vehicle/quotes/1', [QuotesVechileController::class, 'step1'])->name('Vehicle.step1');
Route::get('Vehicle/quotes/2', [QuotesVechileController::class, 'step2'])->name('Vehicle.step2');
Route::get('Vehicle/quotes/3', [QuotesVechileController::class, 'step3'])->name('Vehicle.step3');
Route::get('Vehicle/quotes/4', [QuotesVechileController::class, 'step4'])->name('Vehicle.step4');

Route::get('Vehicle/personal/1', [QuotesVechileController::class, 'part1'])->name('Vehicle.part1');
Route::get('Vehicle/personal/4', [QuotesVechileController::class, 'part4'])->name('Vehicle.part4');

// sab k alag alag 
Route::get('Vehicle/personal/Auto/1', [QuotesVechileController::class, 'Auto1'])->name('Auto.part1');
Route::get('Vehicle/personal/Auto/2', [QuotesVechileController::class, 'Auto2'])->name('Auto.part2');

Route::get('Vehicle/personal/Boat/1', [QuotesVechileController::class, 'Boat1'])->name('Boat.part1');
Route::get('Vehicle/personal/Boat/2', [QuotesVechileController::class, 'Boat2'])->name('Boat.part2');

Route::get('Vehicle/personal/Motorcycle/1', [QuotesVechileController::class, 'Motorcycle1'])->name('Motorcycle.part1');
Route::get('Vehicle/personal/Motorcycle/2', [QuotesVechileController::class, 'Motorcycle2'])->name('Motorcycle.part2');

Route::get('Vehicle/personal/Motor/1', [QuotesVechileController::class, 'Motor1'])->name('Motor.part1');
Route::get('Vehicle/personal/Motor/2', [QuotesVechileController::class, 'Motor2'])->name('Motor.part2');

Route::get('Vehicle/personal/Travel/1', [QuotesVechileController::class, 'Travel1'])->name('Travel.part1');
Route::get('Vehicle/personal/Travel/2', [QuotesVechileController::class, 'Travel2'])->name('Travel.part2');

// alag alag end

//! vehicle qoutes routes end here

//* ali routes

Route::get('Quote/PersonalVehicles/Auto', [PersonalVehiclesController::class, 'Auto'])->name('Quote.create');
Route::get('Quote/PersonalVehicles/Auto/part/2', [PersonalVehiclesController::class, 'AutoPartTwo'])->name('Quote.create');
Route::get('Quote/PersonalVehicles/Auto/part/3', [PersonalVehiclesController::class, 'AutoPartThree'])->name('Quote.create');

// Boss New Same Form change dropdown to text fields 
Route::get('Quote/PersonalVehicles/Boat/part/1', [PersonalVehiclesController::class, 'BoatPartOne'])->name('BoatPartOne.index');
Route::get('Quote/PersonalVehicles/TravelTrailer/part/1', [PersonalVehiclesController::class, 'TravelTrailerPartOne'])->name('TravelTrailerPartOne.index');
Route::get('Quote/PersonalVehicles/MotorHome/part/1', [PersonalVehiclesController::class, 'MotorHomePartOne'])->name('MotorHomePartOne.index');
Route::get('Quote/PersonalVehicles/MotorCycle/part/1', [PersonalVehiclesController::class, 'MotorCyclePartOne'])->name('MotorCyclePartOne.index'); // error
Route::get('Quote/PersonalVehicles/Auto/part/1', [PersonalVehiclesController::class, 'AutoPartOne'])->name('AutoPartOne.index');

//* ali routes end 

Route::get('/', function () {
    return view('auth.login');
});
// Route::get('/dashboard', function () {
//     return view('dashboard');

Route::get('/dashboard', function () {
    // $totalCustomers = Customer::count(); 
    // $totalToDoTasks = Notes::where('todo_list', true)->count();
    // $totalRemainders = Notes::where('remainder', true)->count();


    
    // $remainders = Notes::where('remainder', true)
    // ->where('status', '!=', 'Complete')
    // ->orderByDesc('created_at')
    // ->get();


    // $taskList = Customer::leftJoin('notes', 'customers.email', '=', 'notes.customer_email')
    // ->select('customers.cus_id', 'customers.account_name', 'customers.email')
    // ->selectRaw('COUNT(DISTINCT CASE WHEN notes.todo_list = 1 THEN notes.id ELSE NULL END) as total_todo')
    // ->selectRaw('SUM(notes.remainder) as total_remainders')
    // ->groupBy('customers.cus_id', 'customers.account_name', 'customers.email')
    // ->havingRaw('total_todo > 0 OR total_remainders > 0')
    // ->get();

    // return view('dashboard', compact('totalCustomers', 'totalToDoTasks', 'totalRemainders','taskList', 'remainders',));

    $data = PolicyNew::where('user_id', Auth::id())->get();

    return view('blank' , compact('data'));
}


)->middleware(['auth', 'verified'])->name('dashboard');
Route::resource('roles', RoleController::class);
Route::resource('permissions', PermissionController::class);
Route::resource('users', UserController::class);
// Route::group(['middleware' => ['permission:SuperAdmin']], function () {
// //Roles Moved
// });
Route::group(['middleware' => ['permission:agency']], function () {
    Route::resource('agency', AgencyController::class);
});
Route::group(['middleware' => ['permission:customer']], function () {
    Route::resource('customer', CustomerController::class);

    Route::resource('customer-import', CustomerImportController::class);
    // Route::get('customer-import',[CustomerUpdateController::class,'customerEdit'])->name('customerUC.edit');


    Route::get('customer-edit/{id}',[CustomerUpdateController::class,'customerEdit'])->name('customerUC.edit');
    Route::post('customer-update/{id}',[CustomerUpdateController::class,'customerUpdate'])->name('customerUC.update');

    Route::get('driver-detail-edit/{id}',[CustomerUpdateController::class,'driverDetailEdit'])->name('driverDetail.edit');
    Route::post('driver-detail-update/{id}',[CustomerUpdateController::class,'driverDetailUpdate'])->name('driverDetail.update');
    Route::get('driver-detail-create/{id}',[CutomerStoreController::class,'driverDetailCreate'])->name('driverDetail.create');
    Route::post('driver-detail-store/{id}',[CutomerStoreController::class,'driverDetailStore'])->name('driverDetail.store');

    Route::get('customer-lien-create/{id}',[CutomerStoreController::class,'customerLienCreate'])->name('customerLien.create');
    Route::post('customer-lien-store/{id}',[CutomerStoreController::class,'customerLienStore'])->name('customerLien.store');

    Route::get('customer-lien-edit/{id}',[CustomerUpdateController::class,'customerLienEdit'])->name('customerLien.edit');
    Route::post('customer-lien-update/{id}',[CustomerUpdateController::class,'customerLienUpdate'])->name('customerLien.update');

    Route::get('customer-insured-edit/{id}',[CustomerUpdateController::class,'customerInsuredEdit'])->name('customerInsured.edit');
    Route::post('customer-insured-update/{id}',[CustomerUpdateController::class,'customerInsuredUpdate'])->name('customerInsured.update');



    Route::get('customer-premium-edit/{id}',[CustomerUpdateController::class,'customerPremiumEdit'])->name('customerPremium.edit');
    Route::post('customer-premium-update/{id}',[CustomerUpdateController::class,'customerPremiumUpdate'])->name('customerPremium.update');

    Route::get('date-amount-edit/{id}',[CustomerUpdateController::class,'dateAmountEdit'])->name('dateAmount.edit');
    Route::post('date-amount-update/{id}',[CustomerUpdateController::class,'dateAmountUpdate'])->name('dateAmount.update');


    Route::get('payment-detail-edit/{id}',[CustomerUpdateController::class,'paymentDetailEdit'])->name('paymentDetail.edit');
    Route::post('payment-detail-update/{id}',[CustomerUpdateController::class,'paymentDetailUpdate'])->name('paymentDetail.update');

    Route::get('physical-address-edit/{id}',[CustomerUpdateController::class,'physicalAddressEdit'])->name('physicalAddess.edit');
    Route::post('physical-address-update/{id}',[CustomerUpdateController::class,'physicalAddressUpdate'])->name('physicalAddess.update');

    Route::get('mailing-address-edit/{id}',[CustomerUpdateController::class,'mailingAddressEdit'])->name('mailingAddess.edit');
    Route::post('mailing-address-update/{id}',[CustomerUpdateController::class,'mailingAddressUpdate'])->name('mailingAddess.update');

    Route::get('work-business-address-edit/{id}',[CustomerUpdateController::class,'workBusinessAddressEdit'])->name('workBusinessAddess.edit');
    Route::post('work-business-address-update/{id}',[CustomerUpdateController::class,'workBusinessAddressUpdate'])->name('workBusinessAddess.update');

  

});
Route::group(['middleware' => ['permission:vendor']], function () {
    Route::resource('vendor', VendorController::class);
});
Route::group(['middleware' => ['permission:agent']], function () {
    Route::resource('agent', AgentController::class);
});

Route::group(['middleware' => ['permission:product']], function () {
    Route::resource('product', ProductController::class);
});

Route::group(['middleware' => ['permission:products']], function () {
    Route::resource('products', ProductNewController::class);
});

Route::group(['middleware' => ['permission:carrier']], function () {
    Route::resource('carrier', CarrierController::class);
    Route::get('carrier-product/{id}', [CarrierController::class, 'product_edit'])->name('carrier-product.edit');
    Route::get('carrier-product/{id}/create', [CarrierController::class, 'product_create'])->name('carrier-product.create');
    Route::post('carrier-product/{id}/store', [CarrierController::class, 'product_store'])->name('carrier-product.store');

    Route::put('carrier-product/{id}', [CarrierController::class, 'product_update'])->name('carrier-product.update');
    Route::delete('carrier-product/{id}', [CarrierController::class, 'product_destroy'])->name('carrier-product.destroy');

    // Route::get('/get-policy-details/{policyNumber}', 'CarrierController@getPolicyDetails');
    Route::get('/get-policy-details/{policyNumber}', [CarrierController::class, 'getPolicyDetails'])->name('get-policy-details');


});
//Permissions Moved

Route::group(['middleware' => ['permission:employee']], function () {
   Route::resource('employee', EmployeeController::class);
   Route::resource('employee_work', EmployeeWorkController::class);
});



Route::resource('payment', CustomPaymentController::class);
// payment search

Route::get('payment', [CustomPaymentController::class, 'index'])->name('payment.index');



//Seeting this route requires index functionality
// un comment this later
Route::resource('policy', CustomPolicyController::class);
Route::resource('pay', PayController::class);


//TODO: add this route to the resource controller
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');






require __DIR__.'/auth.php';
// // Route::get('/policy', function () {
// //     return view('policy.create');
// // });
// Route::get('/employee', function () {
//     return view('employee.create');
// });
Route::get('/view', function () {
    return view('agents.view');
});

Route::get('record', function () {
    return view('record.index');
});

Route::get('record/create', function () {
    return view('record.create');
});

Route::get('record/create', function () {
    return view('record.create');
});

Route::get('excel', function () {
    return view('excel');
});
Route::get('excel/customer', function () {
    $customers = Customer::orderBy('cus_id', 'DESC');

    return view('exports.customer',compact('customers'));
});

Route::get('user-export', [UserController::class, 'export'])->name('user-export');
Route::get('customer-export', [CustomerController::class, 'export'])->name('customer-export');

Route::post('import-user', [UserController::class, 'excel'])->name('import-user');

Route::get('import-customer', function () {
    return view('excel');
});
Route::post('import-customer', [CustomerController::class, 'import'])->name('import-customer');



// Route::get('import/customer', function () {
//     return view('customer.customer-files.create');
// });

// Route::get('/import/customer', 'CustomerImportController@showImportForm')->name('import.customer.form');



Route::get('record/todo', [CustomPolicyController::class, 'todo']);
Route::get('todo/create', [CustomPolicyController::class, 'todo_create']);
Route::get('record/remainder', [CustomPolicyController::class, 'remainder']);
Route::get('reminder/create', [CustomPolicyController::class, 'reminder_create']);

Route::get('document/{id}', [CustomPaymentController::class, 'document']);



// With these lines:
// Route::get('policy/todo', [CustomPolicyController::class, 'todo'])->name('policy.todo');
// Route::get('policy/remainder', [CustomPolicyController::class, 'remainder'])->name('policy.remainder');


// Create a new customer document
// Route::post('/customer-documents', 'CustomerDocumentController@store');

// View a customer document

// Route::get('/customer-documents/{document}', 'CustomerDocumentController@show');
// Route::put('/customer-documents/{document}', 'CustomerDocumentController@update');
// Route::delete('/customer-documents/{document}', 'CustomerDocumentController@destroy');

// Show customer documents and upload new documents for a specific customer
// Route::get('/customer-documents/{customerId}', 'CustomerDocumentController@index')->name('customer-documents.index');
Route::get('customer-documents/{customerId}', [CustomerDocumentController::class, 'index'])->name('customer-documents.index');
Route::post('customer-documents/{customerId}', [CustomerDocumentController::class, 'store'])->name('customer-documents.store');
Route::delete('customer-documents/{customerId}/{documentId}', [CustomerDocumentController::class, 'destroy'])->name('customer-documents.destroy');



// Route::get('driver/create', function () {
//     return view('driver.create');
// });

// Route::post('/customer-documents/{customerId}', 'CustomerDocumentController@store')->name('customer-documents.store');

Route::resource('taxes', TaxesController::class);
Route::get('individual', [TaxesController::class, 'individual'])->name('taxes.individual');
Route::get('Self-Employment', [TaxesController::class, 'Employment'])->name('taxes.Employment');
Route::get('income-Adjustments', [TaxesController::class, 'Adjustments'])->name('income.Adjustments');
Route::get('Individual-return', [TaxesController::class, 'IndividualReturn'])->name('Individual.return');









Route::resource('drivers', DriverController::class);
Route::resource('liens', LienController::class);
Route::resource('accounting', AccountingController::class);
Route::resource('accounts', AccountsController::class);

Route::get('summary', [AccountingController::class, 'summary'])->name('summary');
Route::get('summary/filter', [AccountingController::class, 'filterSummary'])->name('summary.filter');
Route::get('balance', [AccountingController::class, 'balanceSheet'])->name('balanceSheet');

Route::get('profit', [AccountingController::class, 'profit'])->name('profit');
Route::get('cash/flow', [AccountingController::class, 'cashFlow'])->name('cashFlow');



Route::get('income', [AccountingController::class, 'income'])->name('income');
Route::get('expense', [AccountingController::class, 'expense'])->name('expense');


// new customer crud
Route::get('new/customer', [CustomerController::class, 'newcustomer'])->name('customer-new');
Route::post('customer/new', [CustomerController::class, 'newStore'])->name('new-store');
Route::get('customer/new/{id}', [CustomerController::class, 'newShow'])->name('new-show');

Route::put('customer/new/{id}', [CustomerController::class, 'newUpdate'])->name('new-update');
Route::put('customer/property/{id}', [CustomerController::class, 'propertyUpdate'])->name('property-update');
Route::put('customer/address/{id}', [CustomerController::class, 'addressUpdate'])->name('address-update');
Route::put('customer/vechile/{id}', [CustomerController::class, 'vechileUpdate'])->name('vechile-update');
Route::put('customer/driver/{id}', [CustomerController::class, 'driverUpdate'])->name('driver-update');
Route::put('customer/product/{id}', [CustomerController::class, 'productUpdate'])->name('product-update');


Route::get('notes/add/{id}', [CustomerController::class, 'notesAdd'])->name('notes-add');
Route::post('notes/add', [CustomerController::class, 'notesStore'])->name('notes-store');
Route::get('customer/notes/{id}', [CustomerController::class, 'notesEdit'])->name('notes-edit');
Route::put('customer/notes/{id}', [CustomerController::class, 'notesUpdate'])->name('notes-update');

Route::get('customer/reminder/{id}', [CustomerController::class, 'reminderEdit'])->name('reminder-edit');
Route::put('customer/reminder/{id}', [CustomerController::class, 'reminderUpdate'])->name('reminder-update');
Route::get('reminder/add/{id}', [CustomerController::class, 'reminderAdd'])->name('reminder-add');
Route::post('reminder/add', [CustomerController::class, 'reminderStore'])->name('reminder-store');

Route::get('record/add/{id}', [CustomerController::class, 'recordAdd'])->name('record-add');
Route::post('record/add', [CustomerController::class, 'recordStore'])->name('record-store');
Route::get('customer/record/{id}', [CustomerController::class, 'recordEdit'])->name('record-edit');
Route::put('customer/record/{id}', [CustomerController::class, 'recordUpdate'])->name('record-update');


Route::resource('transaction', TransactionController::class);







//* pay history routes 

// Route::resource('pay-history', PayHistoryController::class);
Route::get('pay-history/{customerId}', [PayHistoryController::class, 'index'])->name('pay-history.index');
Route::get('pay-history/add/{customerId}', [PayHistoryController::class, 'create'])->name('pay-history.create');
Route::post('pay-history/add/{customerId}', [PayHistoryController::class, 'store'])->name('pay-history.store');
// Route::delete('pay-history/{customerId}', [PayHistoryController::class, 'destroy'])->name('pay-history.destroy');
Route::delete('pay-history/{id}', [PayHistoryController::class, 'destroy'])->name('pay-history.destroy');