<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\BackendController;

Route::get('/',[FrontendController::class,'index'])->name('index');
Route::post('add-information',[FrontendController::class,'addInformation'])->name('add-information');
Route::get('contact-page',[FrontendController::class,'contactPage'])->name('contact-page');
Route::post('contact-add',[FrontendController::class,'contactAdd'])->name('contact-add');
Route::post('booking-add',[FrontendController::class,'bookingAdd'])->name('booking-add');
Route::get('about-page',[FrontendController::class,'aboutPage'])->name('about-page');
Route::get('emi-alculator-page',[FrontendController::class,'emiCal'])->name('emi-alculator-page');
Route::get('application-page',[FrontendController::class,'applicationForm'])->name('application-page');
Route::post('application-form',[FrontendController::class,'applicationAddForm'])->name('application-form');
Route::get('details-view/{id}',[FrontendController::class,'detailsView'])->name('details-view');
Route::get('ongoing-page',[FrontendController::class,'ongoingPage'])->name('ongoing-page');
Route::get('complete-page',[FrontendController::class,'completePage'])->name('complete-page');
Route::get('upcoming-page',[FrontendController::class,'upcomingPage'])->name('upcoming-page');

Route::group(['prefix' => 'admin'], function()
{

    Route::get('/',[BackendController::class,'login'])->name('admin.login');
    Route::post('login-page',[BackendController::class,'loginPage'])->name('admin.login-page');
    Route::get('dashboard',[BackendController::class,'index'])->name('admin.dashboard');
    Route::get('admin.inquery',[BackendController::class,'Inquerys'])->name('admin.inquery');
    Route::get('admin.contact',[BackendController::class,'Contacts'])->name('admin.contact');
    Route::get('admin.projects',[BackendController::class,'Projects'])->name('admin.projects');
    Route::post('admin.project-form',[BackendController::class,'projectSubmit'])->name('admin.project-form');
    Route::post('admin.project-edit',[BackendController::class,'projectEdit'])->name('admin.project-edit');
    Route::get('application',[BackendController::class,'application'])->name('admin.application');
    Route::get('booking',[BackendController::class,'booking'])->name('admin.booking');
    Route::get('view-project/{type}',[BackendController::class,'viewOngoingProject'])->name('admin.view-project');
    Route::get('edit-project/{type}',[BackendController::class,'editPoject'])->name('admin.edit-project');
    Route::get('delete-project/{id}',[BackendController::class,'deleteProject'])->name('admin.delete-project');
    

});
