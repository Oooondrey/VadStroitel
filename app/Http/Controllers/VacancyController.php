<?php

namespace App\Http\Controllers;

use App\Models\Vacancy;
use Illuminate\Http\Request;

class VacancyController extends Controller
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
    public function show(Vacancy $vacancy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vacancy $vacancy)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Vacancy $vacancy)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vacancy $vacancy)
    {
        //
    }
    public function AddVacancy(Request $request){
        $request->validate([
            'title'=>['required','regex:/[А-Яа-я -]/u'],
            'education'=>['required','regex:/[А-Яа-я -]/u'],
            'pay'=>['required','regex:/[0-9 -]/u'],
            'requirements'=>['required','regex:/[А-Яа-я -]/u'],
            'dutys'=>['required','regex:/[А-Яа-я -]/u'],

        ],[
            'title.required'=>'Обязательное поле!',
            'title.regex'=>'Только кириллица пробел и тире!',
            'education.required'=>'Обязательное поле!',
            'education.regex'=>'Только кириллица пробел и тире!',
            'pay.required'=>'Обязательное поле!',
            'pay.regex'=>'Только кириллица пробел и тире!',
            'requirements.required'=>'Обязательное поле!',
            'requirements.regex'=>'Только кириллица пробел и тире!',
            'dutys.required'=>'Обязательное поле!',
            'dutys.regex'=>'Только кириллица пробел и тире!'

        ]);
        $vacancy=new Vacancy();
        $vacancy->title=$request->title;
        $vacancy->education=$request->education;
        $vacancy->pay=$request->pay;
        $vacancy->requirements=$request->requirements;
        $vacancy->dutys=$request->dutys;
        $vacancy->save();
        return redirect()->route('Vacancy');

    }
    public function DelVacancy(Vacancy $vacancy){
        $vacancy->delete();
        return redirect()->route('Vacancy');
    }
    public function EditVacancy(Vacancy $vacancy, Request $request){
        $request->validate([
            'title'=>['required','regex:/[А-Яа-я -]/u'],
            'education'=>['required','regex:/[А-Яа-я -]/u'],
            'pay'=>['required','regex:/[0-9 -]/u'],
            'requirements'=>['required','regex:/[А-Яа-я -]/u'],
            'dutys'=>['required','regex:/[А-Яа-я -]/u'],

        ],[
            'title.required'=>'Обязательное поле!',
            'title.regex'=>'Только кириллица пробел и тире!',
            'education.required'=>'Обязательное поле!',
            'education.regex'=>'Только кириллица пробел и тире!',
            'pay.required'=>'Обязательное поле!',
            'pay.regex'=>'Только кириллица пробел и тире!',
            'requirements.required'=>'Обязательное поле!',
            'requirements.regex'=>'Только кириллица пробел и тире!',
            'dutys.required'=>'Обязательное поле!',
            'dutys.regex'=>'Только кириллица пробел и тире!'

        ]);
        $vacancy->title=$request->title;
        $vacancy->education=$request->education;
        $vacancy->pay=$request->pay;
        $vacancy->requirements=$request->requirements;
        $vacancy->dutys=$request->dutys;
        $vacancy->update();
        return redirect()->route('Vacancy');
    }
}
