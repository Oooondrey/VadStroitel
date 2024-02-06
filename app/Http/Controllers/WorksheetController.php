<?php

namespace App\Http\Controllers;

use App\Models\Worksheet;
use Illuminate\Http\Request;

class WorksheetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Worksheet $worksheet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Worksheet $worksheet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Worksheet $worksheet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Worksheet $worksheet)
    {
        //
    }
    public function AddWorksheet(Request $request){
        $request->validate([
            'fio'=>['required','regex:/[А-Яа-я -]/u'],
            'phone'=>['required','regex:/[0-9 ]/u','max:11','min:11'],
            'email'=>['required','unique:users','email:frc'],
            'rules'=>['required'],
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
            'rules.required'=>'Подвердите действие!'
        ]);
        $worksheet=new Worksheet();
        $worksheet->fio=$request->fio;
        $worksheet->phone=$request->phone;
        $worksheet->email=$request->email;
        $worksheet->vacancy_id=$request->vacancy;
        $worksheet->save();
        return redirect()->route('Vacancy')->with('success','Заявка успешно отправлена.');
    }
    public function DelWorksheet(Worksheet $worksheet){
        $worksheet->delete();
        return redirect()->route('WorksheetList');
    }
}
