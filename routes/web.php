<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\BackendController;

Route::get('/',[FrontendController::class,'index'])->name('index');
Route::post('add-information',[FrontendController::class,'addInformation'])->name('add-information');
Route::get('contact-page',[FrontendController::class,'contactPage'])->name('contact-page');
Route::post('contact-add',[FrontendController::class,'contactAdd'])->name('contact-add');
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
    Route::get('/',[BackendController::class,'index'])->name('admin.index');
    Route::get('admin.inquery',[BackendController::class,'Inquerys'])->name('admin.inquery');
    Route::get('admin.contact',[BackendController::class,'Contacts'])->name('admin.contact');
    Route::get('admin.projects',[BackendController::class,'Projects'])->name('admin.projects');
    Route::post('admin.project-form',[BackendController::class,'projectSubmit'])->name('admin.project-form');

});
