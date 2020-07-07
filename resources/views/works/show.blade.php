@extends('layouts.app')
@section('title')
زسید تراکنش
@endsection
@section('content')


    <h1 class="text-center my-5">
        {{$work->name}}
    </h1>
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card card-default">
                <div class="card-header text-right">
                    رسید تراکنش
                </div>
                <div class="card-body text-right">
                    شماره کارت :  {{$work->card_num}}
                    <br>
                    مبلغ پرداختی:  {{$work->price}}
                    <br>
                    تاریخ:     {{$work->date}}
                </div>
                <a href="/works/{{$work->id}}/edit" class="btn btn-warning">ویرایش</a>
                <a href="/works/{{$work->id}}/delete" class="btn btn-danger">حذف</a>

            </div>

        </div>
    </div>
@endsection
