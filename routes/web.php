<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('non', 'HomeController@non')->name('non');

//Route For any Page for => admin
Route::group(['middleware' => 'admin'], function () 
{
    //for Profile
    Route::get('/profile/{id}/edit', 'ProfileController@index')->name('profile');
    Route::put('/profile/{id}', 'ProfileController@update')->name('profile_update');

    //begin
    Route::get('/admin', 'Admincontroller@index')->name('admin');
    // Route::get('/admin', function () {return view('admin.home'); })->name('admin');

     // for the  MaintenanceWorkers
    Route::resource("Workers","MaintenanceWorkersController");
    //for any thing for Staff
    Route::resource("Staff","StaffController");
    // for Office
    Route::resource("Office","OfficeController");
    //for Notice Type
    Route::resource("Notice_type","Notice_typeController");
    //for Notice Type
    Route::resource("Sector_type","SectorController");
   

    //end

    // index_2 =>for show the staffs by office
    Route::get('/index_staff/{Office}', 'OfficeController@index_2')->name('Office.index_2');
    // index_2 =>for show the sector by counter ****
    Route::get('/sector_type/{Sector}', 'SectorController@index_2')->name('sector.index_2');

     // index_2 =>for show the notices by Types
     Route::get('/Notice_type/{Notice_type}', 'Notice_typeController@index_2')->name('Notice_type.index_2');

     // destroy =>for delete the destroy_notice by Types
     Route::delete('/notice/{delete}', 'Notice_typeController@destroy_notice')->name('Notice_type.destroy_notice');
    
    // ********************************************************************************//
    // ********************************************************************************//
    // ************** Reports ************ ********************************************//
    // ********************************************************************************//
    // ********************************************************************************//
    Route::get('report/staffs', 'ReportsController@Staffs')->name('report_staffs');
    Route::get('report/staffs/{type}', 'ReportsController@Staffs2')->name('report_staffs2');

    Route::get('report/saintenance', 'ReportsController@Maintenance')->name('report_maintenance');
    Route::get('report/saintenance/{type}', 'ReportsController@Maintenance2')->name('report_maintenance2');

    Route::get('report/offices', 'ReportsController@Offices')->name('report_offices');
    Route::get('report/offices/{type}', 'ReportsController@Offices2')->name('report_offices2');

    Route::get('report/counters', 'ReportsController@Counters')->name('report_counters');
    Route::get('report/counters/{type}', 'ReportsController@Counters2')->name('report_counters2');

    Route::get('report/notices', 'ReportsController@Notices')->name('report_notices');
    Route::get('report/notices/{type}', 'ReportsController@Notices2')->name('report_notices2');
    
    Route::get('report/invoices', 'ReportsController@Invoices')->name('report_invoices');
    Route::get('report/invoices{type}', 'ReportsController@Invoices2')->name('report_invoices2');
    // ********************************************************************************//
    // ********************************************************************************//
    // ************** Reports ************ ********************************************//
    // ********************************************************************************//
    // ********************************************************************************//
     
     
});

//Route For any Page for => user
Route::group(['middleware' => 'user'], function () 
{
    //for Profile
    Route::get('/profile_user/{id}/edit', 'ProfileController@index_user')->name('profile_user');
    Route::put('/profile_user/{id}', 'ProfileController@update_user')->name('profile_update_user');

    //begin
    Route::get('/user', function () {
        return view('user.userHome');
    })->name('user');
   
    // for the  Counters
    Route::resource("Counters","CountersController");
    
    Route::resource('Electricitys', 'ElectricitysController', ['except' => 'create']);
    Route::get('Electricitys/create/{id}', ['as' => 'Electricitys.create', 'uses' => 'ElectricitysController@create']);
    
    Route::resource("Invoices","InvoicesController", ['except' => 'index']);
    Route::get('Invoices/index/{id}', ['as' => 'Invoices.index', 'uses' => 'InvoicesController@index']);
   
    Route::resource("Notices","NoticesController");
    //Route::get('Notices/store/{id}', ['as' => 'Notices.store', 'uses' => 'NoticesController@store']);





    //end 
});