@extends('layouts.app')
@section('title')
    ویرایش رسید
@endsection
@section('content')
<h1 class="text-center">ویرایش</h1>
@if ($errors->any())
<div class="alert alert-danger">
    <ul class="list-group">
        @foreach ($errors->all() as $error)
            <li class="list-group-item text-right text-light bg-danger" dir="rtl">
                {{$error}} *
            </li>
        @endforeach
    </ul>
</div>

@endif
<hr>
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card card-default">
            <div class="card-header">
                ویرایش
            </div>
            <form action="/works/{{$work->id}}/update-works" method="POST">
            @csrf
            <div class="form-group">
            <input type="text" class="form-control" placeholder="اسم" name="name" value="{{$work->name}}">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="شماره کارت" name="card_num"value="{{$work->card_num}}">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="مبلغ" name="price" value="{{$work->price}}"">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="تاریخ" name="date" value="{{$work->date}}"">
            </div>
            <div class="form-group text-center">
                <button type="submit" class="btn btn-success">اعمال تغییرات</button>
            </div>
            </form>
        </div>
    </div>
</div>

@endsection
