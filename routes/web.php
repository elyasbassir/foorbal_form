<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\User;
Use Alert;
Route::get('/', function () {
    return view('register');
});

Route::get('/show_user/registered', function () {
    $data = User::all();
    return view('registered',compact('data'));
});


Route::POST('/register',function (Request $request){
    $request->validate([
        'name_lastname'=>'required',
        'father_name'=>'required',
        'father_job'=>'required',
        'code_meli'=>'required',
        'birth_day'=>'required|date',
        'knowledge'=>'required',
        'knowledge_location'=>'required',
        'phone'=>'digits:11'
    ]);
    $save = new User();
    $save->name_lastname = $request->name_lastname;
    $save->father_name = $request->father_name;
    $save->father_job = $request->father_job;
    $save->code_meli = $request->code_meli;
    $save->birth_day = $request->birth_day;
    $save->knowledge = $request->knowledge;
    $save->knowledge_location = $request->knowledge_location;
    $save->phone = $request->phone;
    $save->save();
    Alert::success('ثبت نام با موفقیت انجام شد', 'منتظر تماس کارشناسان ما باشید.');
    return redirect()->back();
})->name('register');
