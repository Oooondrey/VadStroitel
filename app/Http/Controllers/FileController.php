<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FileController extends Controller
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
    public function show(File $file)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(File $file)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, File $file)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(File $file)
    {
        //
    }
    public function AddFile(Request $request){
        $request->validate([
            'title'=>['required'],
            'file'=>['required'],

        ],[
            'title.required'=>'Обязательное поле!',
            'file.required'=>'Обязательное поле!',
        ]);
        $file=new File();
        $file->user_id=Auth::user()->id;
        $file->title=$request->title;
        $path_file="";
        if ($request->file('file')){
            $path_file=$request->file('file')->store('/public/file');
        }
        $file->file='/storage/'.$path_file;
        $file->save();
        return redirect()->route('FilesPage');
    }
    public function SendFile(Request $request, File $file){
        $newFile=new File();
        $newFile->user_id=$request->user;
        $newFile->title=$file->title;

        $newFile->file=$file->file;
        $newFile->save();
        return redirect()->route('FilesPage')->with('success','Файл успешно отправлен!');
    }
    public function DelFile(File $file){
        $file->delete();
        return redirect()->route('FilesPage');
    }
}
