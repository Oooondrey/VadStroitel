<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function AdminLogin(Request $request){
        $validation=\Illuminate\Support\Facades\Validator::make($request->all(),[
            'login'=>['required'],
            'password'=>['required'],
        ],[
            'login.required'=>'Обязательное поле!',
            'password.required'=>'Обязательное поле!'
        ]);
        if ($validation->fails()){
            return response()->json($validation->errors(),400);
        }
        $user=User::query()
            ->where('login',$request->login)
            ->where('password',md5($request->password))
            ->first();
        if ($user){
            Auth::login($user);
            return redirect()->route('Welcome');
        }
        else{
            return response()->json('Неверный логин или пароль',403);
        }
    }
    public function Exit(User $user){
        Auth::logout($user);
        return redirect()->route('Welcome');
    }
    public function AddUser(Request $request){
        $request->validate([
            'fio'=>['required','regex:/[А-Яа-я -]/u'],
            'phone'=>['required','regex:/[0-9 ]/u','max:11','min:11'],
            'email'=>['required','unique:users','email:frc'],
            'password'=>['required','regex:/[0-9 A-Za-z !@#$%^&*()_+-=]/u','min:6'],
        ],[
            'fio.required'=>'Обязательное поле!',
            'fio.regex'=>'Только кириллица пробел и тире!',
            'phone.required'=>'Обязательное поле!',
            'phone.regex'=>'Только цифры от 0 до 9',
            'email.required'=>'Обязательное поле!',
            'email.unique'=>'Адрес почты уже используется!',
            'email.frc'=>'Неверный формат!',
            'phone.min'=>'Минимум 11 символов!',
            'phone.max'=>'Максимум 11 символов!',
            'password.required'=>'Обязательное поле!',
            'password.regex'=>'Обязательные символы: "0-9 A-Za-z !@#$%^&*()_+-="',
            'password.min'=>'Минимум 6 символов!',
        ]);
        $user=new User();
        $user->fio=$request->fio;
        $user->phone=$request->phone;
        $user->email=$request->email;
        $user->password=md5($request->password);
        $user->vacancy_id=$request->vacancy_id;
        $user->save();
        return redirect()->route('Userlist');
    }
    public function AuthUser(Request $request){
        $validation=\Illuminate\Support\Facades\Validator::make($request->all(),[
            'email'=>['required'],
            'password'=>['required'],
        ],[
            'email.required'=>'Обязательное поле!',
            'password.required'=>'Обязательное поле!'
        ]);
        if ($validation->fails()){
            return response()->json($validation->errors(),400);
        }
        $user=User::query()
            ->where('email',$request->email)
            ->where('password',md5($request->password))
            ->first();

        if ($user){
            Auth::login($user);
            return  redirect()->route('Welcome');
        }
        else{
            return response()->json('Неверный адрес почты или пароль',403);
        }
    }
    public function DelUser(User $user){
        $user->delete();
        return redirect()->route('Userlist');
    }
    public function EditUser(User $user, Request $request){
        $request->validate([
            'fio'=>['required','regex:/[А-Яа-я -]/u'],
            'phone'=>['required','regex:/[0-9 ]/u','max:11','min:11'],
            'email'=>['required','email:frc'],
            'password'=>['required','regex:/[0-9 A-Za-z !@#$%^&*()_+-=]/u','min:6'],
        ],[
            'fio.required'=>'Обязательное поле!',
            'fio.regex'=>'Только кириллица пробел и тире!',
            'phone.required'=>'Обязательное поле!',
            'phone.regex'=>'Только цифры от 0 до 9',
            'email.required'=>'Обязательное поле!',
            'email.frc'=>'Неверный формат!',
            'phone.min'=>'Минимум 11 символов!',
            'phone.max'=>'Максимум 11 символов!',
            'password.required'=>'Обязательное поле!',
            'password.regex'=>'Обязательные символы: "0-9 A-Za-z !@#$%^&*()_+-="',
            'password.min'=>'Минимум 6 символов!',
        ]);
        $user->fio=$request->fio;
        $user->phone=$request->phone;
        $user->email=$request->email;
        $user->password=md5($request->password);
        $user->vacancy_id=$request->vacancy_id;
        $user->update();
        return redirect()->route('Userlist');
    }
}
