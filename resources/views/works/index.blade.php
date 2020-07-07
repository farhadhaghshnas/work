@extends('layouts.app')
@section('title')
پرداختی ها
@endsection
@section('content')

    <h1 class="text-center my-5"> فعالیت ها</h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default dir="rtl"">
                <div class="card-header bg-secondary text-white text-right">
                    کارها
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        @foreach ($works as $work)

                            <li class="list-group-item text-right">
                                {{$work->name}}
                            <a href="/works/{{$work->id}}" class="btn btn-primary btn-sm float-left">مشاهده</a>
                            </li>

                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection

