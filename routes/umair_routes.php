
<?php

use Illuminate\Support\Facades\Route;


// use controllers and models here
use App\Http\Controllers\ObamacareController;
use App\Http\Controllers\MedicareController;
use App\Http\Controllers\InsuranceController;
use App\Http\Controllers\TeamManageController;
use App\Http\Controllers\SeoController;
use App\Http\Controllers\ProjectManage;
use App\Http\Controllers\TimeSheetController;
use App\Http\Controllers\MemberPay;
use App\Http\Controllers\PolicyNewController;
use App\Http\Controllers\AgentNewController;
use App\Http\Controllers\PaymentNewController;
use App\Http\Controllers\ClientPortalController;




Route::get('Client/Portal/Form', [ClientPortalController::class, 'MainForm'])->name('ClientPortal.MainForm');
Route::get('Client/Portal/Form/{id}', [ClientPortalController::class, 'PolicyManage'])->name('ClientPortal.PolicyManage');

Route::post('Client/Portal/Form', [ClientPortalController::class, 'MainFormStore'])->name('ClientPortal.MainFormStore');

Route::get('Client/Change/Request', [ClientPortalController::class, 'ChangeRequest'])->name('ClientPortal.ChangeRequest');
Route::post('Client/Change/History/update/{id}', [ClientPortalController::class, 'updateChangeStatus'])->name('ClientPortal.updateChangeStatus');
Route::post('Client/Change/Request/update/Note/{id}', [ClientPortalController::class, 'updateChangeNote'])->name('ClientPortal.updateChangeNote');

Route::get('Client/Change/History', [ClientPortalController::class, 'ChangeHistory'])->name('ClientPortal.ChangeHistory');

Route::get('Client/Pay/Request', [ClientPortalController::class, 'PayRequest'])->name('ClientPortal.PayRequest');
Route::put('Client/Pay/UpdateStatus/{id}', [ClientPortalController::class, 'updateStatus'])->name('ClientPortal.updateStatus');
Route::get('Client/Pay/History', [ClientPortalController::class, 'PayHistory'])->name('ClientPortal.PayHistory');


Route::get('Client/Register', [ClientPortalController::class, 'ClientRegister'])->name('ClientPortal.ClientRegister');
Route::post('Client/Register/Store', [ClientPortalController::class, 'ClientRegisterStore'])->name('ClientPortal.ClientRegisterStore');




Route::get('Policy/change', [PolicyNewController::class, 'PolicyChange'])->name('PolicyNew.PolicyChange');
Route::get('Policy/change/{id}', [PolicyNewController::class, 'PolicyChangeID'])->name('PolicyNew.PolicyChangeID');
Route::post('Policy/change/{id}', [PolicyNewController::class, 'PolicyChangeStore'])->name('PolicyNew.PolicyChangeStore');

Route::get('Policy/History/New', [AgentNewController::class, 'PolicyChangeHistory1'])->name('PolicyNew1.History');
Route::get('Policy/Dashboard', [PolicyNewController::class, 'PolicyDashboard'])->name('PolicyNew.PolicyDashboard');
Route::get('Policy/Reminders', [PolicyNewController::class, 'PolicyReminders'])->name('PolicyNew.PolicyReminders');

Route::get('Policy/Export', [PolicyNewController::class, 'export'])->name('PolicyNew.export');
Route::post('Policy/Import', [PolicyNewController::class, 'import'])->name('PolicyNew.import');



Route::get('Policy/new', [PolicyNewController::class, 'index'])->name('PolicyNew.index');
Route::get('Policy/Database', [PolicyNewController::class, 'Databse'])->name('PolicyNew.Databse');
Route::get('Policy/View/{id}', [PolicyNewController::class, 'View'])->name('PolicyNew.View');

Route::get('Policy/Client/', [PolicyNewController::class, 'ClientPolicy'])->name('PolicyNew.ClientPolicy');


Route::get('Policy/new/create', [PolicyNewController::class, 'create'])->name('PolicyNew.create');
Route::post('Policy/new/create', [PolicyNewController::class, 'store'])->name('PolicyNew.store');
Route::get('Lead/history', [PolicyNewController::class, 'log'])->name('PolicyNew.history');
Route::get('Lead/history/Sheet', [PolicyNewController::class, 'historySheet'])->name('PolicyNew.historySheet');

Route::post('Lead/task/update/{id}', [PolicyNewController::class, 'updateLead'])->name('PolicyNew.updateLead');
Route::get('Lead/Solid/', [PolicyNewController::class, 'LeadSolid'])->name('PolicyNew.LeadSolid');
Route::get('Lead/Prospects/', [PolicyNewController::class, 'LeadProspects'])->name('PolicyNew.LeadProspects');




Route::get('Agent/new', [AgentNewController::class, 'index'])->name('AgentNew.index');
Route::get('Agent/new/create', [AgentNewController::class, 'create'])->name('AgentNew.create');
Route::get('Agent/new/add', [AgentNewController::class, 'add'])->name('AgentNew.add');
Route::post('Agent/new/add', [AgentNewController::class, 'storeNew'])->name('AgentNew.storeNew');
// Route::get('AgentNew/getPolicy/{id}', [AgentNewController::class, 'getPolicy'])->name('AgentNew.getPolicy');


Route::post('Agent/new/create', [AgentNewController::class, 'store'])->name('AgentNew.store');
Route::get('Agent/task', [AgentNewController::class, 'task'])->name('AgentNew.task');
Route::post('Agent/task/update/{id}', [AgentNewController::class, 'updateTask'])->name('AgentNew.updateTask');
Route::get('Agent/task/History', [AgentNewController::class, 'taskHistory'])->name('AgentNew.tataskHistorysk');


Route::get('Payment/new', [PaymentNewController::class, 'create'])->name('PaymentNew.create');
Route::get('/get-policy-details/{id}', [PaymentNewController::class, 'getPolicyDetails'])->name('PaymentNew.getPolicyDetails');
// Route::get('Payment/select', [PaymentNewController::class, 'select'])->name('PaymentNew.select');
Route::get('Payment/new/{id}', [PaymentNewController::class, 'createNew'])->name('PaymentNew.createNew');
Route::post('Payment/new/{id}', [PaymentNewController::class, 'StorePayment'])->name('PaymentNew.StorePayment');
Route::get('Payments/History', [PaymentNewController::class, 'PaymentHistory'])->name('PaymentNew.History');


Route::post('Payment/select', [PaymentNewController::class, 'selectPost'])->name('PaymentNew.selectPost');





// routes here

Route::get('Obamacare/first', [ObamacareController::class, 'obama1'])->name('obama1.create');
Route::get('Obamacare/income', [ObamacareController::class, 'obamaIncome'])->name('obamaIncome.create');
Route::get('Obamacare/additional', [ObamacareController::class, 'obamaAdditional'])->name('obamaAdditional.create');
Route::get('Obamacare/Agreements', [ObamacareController::class, 'obamaAgreements'])->name('obamaAgreements.create');


Route::get('medicare/first', [MedicareController::class, 'medicare1'])->name('medicare1.create');

Route::get('insurance/Brokerage', [InsuranceController::class, 'Brokerage'])->name('Brokerage.create');
Route::get('insurance/Life', [InsuranceController::class, 'Life'])->name('Life.create');
Route::get('insurance/FullApplication', [InsuranceController::class, 'FullApplication'])->name('FullApplication.create');
Route::get('insurance/FullApplication/2', [InsuranceController::class, 'FullApplication2'])->name('FullApplication2.create');
Route::get('insurance/Express', [InsuranceController::class, 'Express'])->name('Express.create');
Route::get('insurance/Accum', [InsuranceController::class, 'Accum'])->name('Accum.create');
Route::get('insurance/Accum_application', [InsuranceController::class, 'Accum_application'])->name('Accum_application.create');
Route::get('insurance/Children', [InsuranceController::class, 'Children'])->name('Children.create');
Route::get('insurance/Living', [InsuranceController::class, 'Living'])->name('Living.create');
Route::get('insurance/Icome', [InsuranceController::class, 'Icome'])->name('Icome.create');

Route::get('Team/Member', [TeamManageController::class, 'Member'])->name('Member.create');

Route::get('Seo/Website', [SeoController::class, 'Seo'])->name('Seo.create');

Route::get('Project/Add', [ProjectManage::class, 'Add'])->name('Project.create');
Route::post('Project/Store', [ProjectManage::class, 'StoreProject'])->name('Project.store');
Route::delete('Project/Delete/{id}', [ProjectManage::class, 'ProjectDelete'])->name('Project.Delete');


Route::get('Project/Edit/{id}', [ProjectManage::class, 'EditProject'])->name('Project.edit');
Route::post('Project/Update/{id}', [ProjectManage::class, 'UpdateProject'])->name('Project.update');

Route::get('MemberError', function () {
    return view('MemberError');
})->name('MemberError');

// Route::get('getMemberSkills', [AddTeamMember::class, 'getMemberSkills2']);
Route::get('getMemberSkills2', [AddTeamMember::class, 'getMemberSkills2'])->name('getMemberSkills2');




Route::get('Project', [ProjectManage::class, 'Projects'])->name('Projects.show');
Route::get('Project/task/tracking', [ProjectManage::class, 'Tracking'])->name('Tracking.show');
Route::get('Project/page/{id}', [ProjectManage::class, 'ProjectsPage'])->name('ProjectsPage.show');
Route::get('Project/all/task/{id}', [ProjectManage::class, 'ProjectAllTask'])->name('ProjectsPage.ProjectAllTask');


//* new management
Route::get('task/sheet/{id}', [ProjectManage::class, 'TaskSheet'])->name('TaskSheet.show');
Route::get('task/distribution/', [ProjectManage::class, 'Distribution'])->name('Distribution.show');
Route::get('task/sheet-history/{id}', [ProjectManage::class, 'TaskHistory'])->name('TaskHistory.show');
// task history done // Ali start
Route::get('task/history/', [ProjectManage::class, 'TaskHistorys'])->name('TaskHistorys');
// task history done // Ali end

Route::get('Task/View/{id}', [ProjectManage::class, 'TaskView'])->name('Task.View');


Route::get('Project/task/add/', [ProjectManage::class, 'Task'])->name('Task.create');
Route::post('Project/task/add/', [ProjectManage::class, 'TaskStore'])->name('Task.Store');
Route::get('Project/task/edit/{id}', [ProjectManage::class, 'TaskEdit'])->name('Task.Edit');
Route::post('Project/task/update/{id}', [ProjectManage::class, 'TaskUpdate'])->name('Task.Update');


Route::delete('Project/task/delete/{id}', [ProjectManage::class, 'TaskDelete'])->name('Task.Delete');
Route::get('get-task-details/{taskId}', [ProjectManage::class, 'TaskDetails'])->name('Task.Details');

Route::get('Team-Member/Time-Sheet/{id}', [TimeSheetController::class, 'TimeSheet'])->name('TimeSheet.Show');
Route::get('Team-Member/Time-Sheet2/{id}', [TimeSheetController::class, 'TimeSheet2'])->name('TimeSheet.Show2');

Route::get('Team-Member/Time-Sheet/Add/{id}', [TimeSheetController::class, 'TimeSheetAdd'])->name('TimeSheetAdd.Create');
Route::post('Team-Member/Time-Sheet/Store/{id}', [TimeSheetController::class, 'TimeSheetStore'])->name('TimeSheetStore.Create');
Route::delete('Team-Member/Time-Sheet/Delete/{id}', [TimeSheetController::class, 'TimeSheetDelete'])->name('TimeSheetAdd.Delete');
// ali Edit Update start
Route::get('Team-Member/Time-Sheet/Edit/{id}', [TimeSheetController::class, 'TimeSheetEdit'])->name('TimeSheet.Edit');
Route::get('Team-Member/Master-Time-Sheet', [TimeSheetController::class, 'MasterTimeSheet'])->name('MasterTimeSheet');
Route::post('Team-Member/Time-Sheet/Update/{id}', [TimeSheetController::class, 'TimeSheetUpdate'])->name('TimeSheet.Update');

// ali Edit Update end

Route::get('Team-Member/Pay-Sheet/{id}', [MemberPay::class, 'MembersPay'])->name('MemberPay.create');
Route::get('Team-Member/Pay-Sheet2/{id}', [MemberPay::class, 'MembersPay2'])->name('MemberPay.create2');

Route::get('Team-Member/Master-Pay', [MemberPay::class, 'MasterPay'])->name('MasterPay.create');
Route::post('/pay-run', [PayRunController::class, 'store'])->name('pay-run.store');
Route::delete('pay-Delete/{id}', [PayRunController::class, 'destroy'])->name('pay-run.destroy');


?>