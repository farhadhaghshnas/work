@extends('layouts.app')
@section('title')
    افزودن رسید جدید
@endsection
@section('content')
<h1 class="text-center">رسید جدید</h1>
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
                رسید جدید
            </div>
            <form action="/store-works" method="POST">
            @csrf
            <div class="form-group">
                <input type="text" class="form-control" placeholder="اسم" name="name">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="شماره کارت" name="card_num">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="مبلغ" name="price">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="تاریخ" name="date">
            </div>
            <div class="form-group text-center">
                <button type="submit" class="btn btn-success">ثبت</button>
            </div>
            </form>
        </div>
    </div>
</div>

@endsection
