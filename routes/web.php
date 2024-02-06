<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
/** Функционал гостя **/

Route::get('/',[\App\Http\Controllers\PageController::class,'Welcome'])->name('Welcome');
Route::get('/Objects',[\App\Http\Controllers\PageController::class,'Objects'])->name('Objects');
Route::get('/Vacancy',[\App\Http\Controllers\PageController::class,'Vacancy'])->name('Vacancy');
Route::get('/About_company',[\App\Http\Controllers\PageController::class,'About_company'])->name('About_company');
Route::get('/Contacts',[\App\Http\Controllers\PageController::class,'Contacts'])->name('Contacts');
Route::get('/Policy',[\App\Http\Controllers\PageController::class,'Policy'])->name('Policy');
Route::post('/Vacancy/worksheet/add',[\App\Http\Controllers\WorksheetController::class,'AddWorksheet'])->name('AddWorksheet');
Route::get('/object/moreinfo/{object}',[\App\Http\Controllers\PageController::class,'MoreInfo'])->name('MoreInfo');
Route::get('/consent_to_data_processing',[\App\Http\Controllers\PageController::class,'Processing'])->name('Processing');

/** Функционал сотрудника **/

Route::get('/Authorizate',[\App\Http\Controllers\PageController::class,'AuthPage'])->name('AuthPage');
Route::post('/Authorizate/AuthUser',[\App\Http\Controllers\UserController::class,'AuthUser'])->name('AuthUser');

Route::group(['middleware'=>'user','prefix'=>'user'],function(){
    Route::get('/files',[\App\Http\Controllers\PageController::class,'FilesPage'])->name('FilesPage');
    Route::post('/files/add',[\App\Http\Controllers\FileController::class,'AddFile'])->name('AddFile');
    Route::delete('/files/file/delete/{file}',[\App\Http\Controllers\FileController::class,'DelFile'])->name('DelFile');
    Route::get('/files/sendfilepage/{file}',[\App\Http\Controllers\PageController::class,'SendFilePage'])->name('SendFilePage');
    Route::post('/files/sendfilepage/file/send/{file}',[\App\Http\Controllers\FileController::class,'SendFile'])->name('SendFile');
    Route::get('/admin/exit',[\App\Http\Controllers\UserController::class,'Exit'])->name('Exit');
});

/** Функционал администратора **/

Route::get('/Administrator',[\App\Http\Controllers\PageController::class,'login'])->name('login');
Route::post('/Adminlogin',[\App\Http\Controllers\UserController::class,'AdminLogin'])->name('AdminLogin');
Route::group(['middleware'=>['auth','admin'],'prefix'=>'admin'],function(){

    Route::get('/admin/userlist',[\App\Http\Controllers\PageController::class,'Userlist'])->name('Userlist');
    Route::post('/admin/userlist/add/user',[\App\Http\Controllers\UserController::class,'AddUser'])->name('AddUser');
    Route::get('/admin/userlist/edituser/{user}',[\App\Http\Controllers\PageController::class,'EditUserPage'])->name('EditUserPage');
    Route::put('/admin/userlist/esituser/edit/{user}',[\App\Http\Controllers\UserController::class,'EditUser'])->name('EditUser');
    Route::delete('/admin/user/deldete/{user}',[\App\Http\Controllers\UserController::class,'DelUser'])->name('DelUser');


    Route::get('/admin/vacancypage',[\App\Http\Controllers\PageController::class,'AddVacancyPage'])->name('AddVacancyPage');
    Route::post('/admin/vacancy/add',[\App\Http\Controllers\VacancyController::class,'AddVacancy'])->name('AddVacancy');
    Route::delete('/admin/vacancy/delete/{vacancy}',[\App\Http\Controllers\VacancyController::class,'DelVacancy'])->name('DelVacancy');
    Route::get('/admin/vacancy/editpage/{vacancy}',[\App\Http\Controllers\PageController::class,'EditVacancyPage'])->name('EditVacancyPage');
    Route::put('/admin/vacancy/editpage/edit/{vacancy}',[\App\Http\Controllers\VacancyController::class,'EditVacancy'])->name('EditVacancy');

    Route::get('/admin/add_object',[\App\Http\Controllers\PageController::class,'AddObjectPage'])->name('AddObjectPage');
    Route::post('/admin/objects/add',[\App\Http\Controllers\ObjectController::class,'AddObject'])->name('AddObject');
    Route::delete('/admin/object/deldete/{object}',[\App\Http\Controllers\ObjectController::class,'DelObject'])->name('DelObject');

    Route::get('/admin/objecteditpage/{object}',[\App\Http\Controllers\PageController::class,'ObjectEditPage'])->name('ObjectEditPage');
    Route::put('/admin/object/edit/{object}',[\App\Http\Controllers\ObjectController::class,'EditObject'])->name('EditObject');

    Route::get('/admin/workshitlist',[\App\Http\Controllers\PageController::class,'WorksheetList'])->name('WorksheetList');
    Route::delete('/admin/vacancy/worksheetlist/worksheet/delete/{worksheet}',[\App\Http\Controllers\WorksheetController::class,'DelWorksheet'])->name('DelWorksheet');

});
