<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>@yield('title')</title>
</head>
<body >
    <div dir="rtl">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">منو</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link " href="/new-works">رسید جدید‍ <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item active">
                <a class="nav-link " href="/works"> رسیدها <span class="sr-only">(current)</span></a>
              </li>

        </div>
      </nav>
    </div>
      <div class="container">
@if(session()->has('success'))
<div class="alert alert-success text-right" dir="rtl">
    {{session()->get('success')}}
</div>
@endif
@if(session()->has('update'))
<div class="alert alert-success text-right" dir="rtl">
    {{session()->get('update')}}
</div>
@endif
@if(session()->has('delete'))
<div class="alert alert-warning text-right" dir="rtl">
    {{session()->get('delete')}}
</div>
@endif


@yield('content')
    </div>
</body>
</html>
