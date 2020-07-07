<?php

namespace App\Http\Controllers;
use App\work;
use Illuminate\Http\Request;

use function PHPSTORM_META\map;

class WorksController extends Controller
{
    public function index(){

        return view('works.index')->with('works',work::all());

    }

    public function show($workid){
        $work=work::find($workid);
        return view('works.show')->with('work',$work);
    }

    public function create(){
        return view('works.create');
    }

    public function store(){
        $this->validate(request(),[
            'name'=>'required|min:6|max:40',
            'card_num'=>'required|min:16|max:16',
            'price'=>'required',
            'date'=>'required|min:8|max:8',
        ]);
        $data = request()->all();
        $work = new work();
        $work->name = $data['name'];
        $work->card_num = $data['card_num'];
        $work->price = $data['price'];
        $work->date = $data['date'];
        $work->save();
        session()->flash('success','رسید با موفقیت ایجاد شد');
        return redirect('/works');

    }

    public function edit($workid){
        $work = work::find($workid);
        return view('works.edit')->with('work',$work);
    }

    public function update($workid){
        $this->validate(request(),[
            'name'=>'required|min:6|max:40',
            'card_num'=>'required|min:16|max:16',
            'price'=>'required',
            'date'=>'required|min:8|max:8',
        ]);
        $data = request()->all();
        $work=work::find($workid);
        $work->name=$data['name'];
        $work->card_num=$data['card_num'];
        $work->price=$data['price'];
        $work->date=$data['date'];
        $work->save();
        session()->flash('update','رسید با موفقیت ویرایش شد');

        return redirect('/works');

    }

    public function destroy($workid){
        $work = work::find($workid);
        $work->delete();
        session()->flash('delete','رسید با موفقیت حذف شد');

        return redirect('works');
    }
}
