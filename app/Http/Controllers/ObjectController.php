<?php

namespace App\Http\Controllers;

use App\Models\cr;
use App\Models\Img;
use App\Models\Objects;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ObjectController extends Controller
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
    public function show(cr $cr)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(cr $cr)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, cr $cr)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(cr $cr)
    {
        //
    }
    public function AddObject(Request $request){
        $request->validate([
            'title'=>['required','regex:/[А-Яа-я -]/u'],
            'address'=>['required'],
            'square'=>['required','regex:/[0-9 ,.-]/u'],
            'img'=>['required'],
            'year'=>['required'],
            'description'=>['required','regex:/[А-Яа-я -]/u'],
        ],[
            'title.required'=>'Обязательное поле!',
            'title.regex'=>'Только кириллица пробел и тире!',
            'address.required'=>'Обязательное поле!',
            'square.required'=>'Обязательное поле!',
            'square.regex'=>'Только цифры от 0 до 9 ,.-',
            'img.required'=>'Обязательное поле!',
            'year.required'=>'Обязательное поле!',
            'description.required'=>'Обязательное поле!',
            'description.regex'=>'Только кириллица пробел и тире!'

        ]);
        $object=new Objects();
        $object->title=$request->title;
        $object->address=$request->address;
        $object->type=$request->type;
        $object->square=$request->square;
        $object->year=$request->year;
        $object->description=$request->description;
        $object->save();
        if ($request->file('img')){
            foreach ($request->file('img') as $img){
                $path_img=$img->store('/public/img');
                $i=new Img();
                $i->img='/storage/'.$path_img. ' ';
                $i->objects_id=$object->id;
                $i->save();
            }
        }
        return redirect()->route('Objects');
    }
    public function DelObject(Objects $object){
        $object->delete();
        return redirect()->route('Objects');
    }
    public function EditObject(Request $request, Objects $object){
        $request->validate([
            'title'=>['required','regex:/[А-Яа-я -]/u'],
            'address'=>['required'],
            'square'=>['required','regex:/[0-9 ,.-]/u'],
            'img'=>['required'],
            'year'=>['required'],
            'description'=>['required','regex:/[А-Яа-я -]/u'],
        ],[
            'title.required'=>'Обязательное поле!',
            'title.regex'=>'Только кириллица пробел и тире!',
            'address.required'=>'Обязательное поле!',
            'square.required'=>'Обязательное поле!',
            'square.regex'=>'Только цифры от 0 до 9 ,.-',
            'img.required'=>'Обязательное поле!',
            'year.required'=>'Обязательное поле!',
            'description.required'=>'Обязательное поле!',
            'description.regex'=>'Только кириллица пробел и тире!'

        ]);
        $object->title=$request->title;
        $object->address=$request->address;
        $object->type=$request->type;
        $object->square=$request->square;
        $object->year=$request->year;
        $object->description=$request->description;
        $object->update();
        $old=count( Img::query()->where('objects_id',$object->id)->get());
        $i=0;
        while ($i<$old){
            $img=Img::query()->where('objects_id',$object->id)->first();
            $img->delete();
            $i++;
        }
        if ($request->file('img')){
            foreach ($request->file('img') as $img){
                $path_img=$img->store('/public/img');
                $i=new Img();
                $i->img='/storage/'.$path_img. ' ';
                $i->objects_id=$object->id;
                $i->save();
            }
        }
        return redirect()->route('Objects');
    }

}
