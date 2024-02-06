<?php

namespace App\Http\Controllers;

use App\Models\Added_users;
use App\Models\File;
use App\Models\Img;
use App\Models\Objects;
use App\Models\User;
use App\Models\Vacancy;
use App\Models\Worksheet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function Welcome(){
        $objects=Objects::query()->orderByDesc('created_at')->limit(3)->get();
        $imgs=Img::all();
        return view('welcome',['objects'=>$objects,'imgs'=>$imgs]);
    }
    public function Objects(){
        $objects=Objects::all();
        $imgs=Img::all();
        return view('guest.objects',['objects'=>$objects,'imgs'=>$imgs]);
    }
    public function Vacancy(){
        $vacancies=Vacancy::all();
        return view('guest.vacancy',['vacancies'=>$vacancies]);
    }
    public function About_company(){
        return view('guest.about_company');
    }
    public function Contacts(){
        return view('guest.contacts');
    }
    public function Policy(){
        return view('guest.policy');
    }
    public function AuthPage(){
        return view('user.authpage');
    }
    public function login(){
        return view('admin.adminauthpage');
    }
    public function Userlist(){
        $vacancies=Vacancy::all();
        $users=User::query()->where('role','=',0)->get();
        return view('admin.userlist',['vacancies'=>$vacancies,'users'=>$users]);
    }
    public function AddVacancyPage(){
        return view('admin.add_vacancy');
    }
    public function AddObjectPage(){
        return view('admin.add_object');
    }
    public function ObjectEditPage(Objects $object){
        return view('admin.edit_object',['object'=>$object]);
    }
    public function MoreInfo(Objects $object){
        $imgs=Img::query()->where('objects_id',$object->id)->get();
        return view('guest.object_moreinfo',['object'=>$object,'imgs'=>$imgs]);
    }
    public function EditUserPage(User $user){
        $vacancies=Vacancy::all();
        return view('admin.edit_user',['user'=>$user,'vacancies'=>$vacancies]);
    }
    public function WorksheetList(){
        $worksheets=Worksheet::all();
        return view('admin.whorsheet_list',['worksheets'=>$worksheets]);
    }
    public function FilesPage(){
        $files=File::query()->where('user_id',Auth::user()->id)->get();
        return view('user.files',['files'=>$files]);
    }
    public function SendFilePage(File $file){
        $users=User::all();
        return view('user.sendfilepage',['file'=>$file,'users'=>$users]);
    }
    public function EditVacancyPage(Vacancy $vacancy){
        return view('admin.vacancy_editpage',['vacancy'=>$vacancy]);
    }
    public function Processing(){
        return view('guest.consent_to_data_processing');
    }

}
