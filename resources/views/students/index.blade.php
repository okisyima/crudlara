@extends('layout.main')

@section('title','index students')

@section('container')
    
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-4">Hello, dari table students *yesmigrate !</h1>

            <a href="/students/create" class="btn btn-primary mb-2">Add Students</a>

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <ul class="list-group">
            @foreach ($students as $stu)
                
            <li class="list-group-item d-flex justify-content-between align-items-center">

                    {{$stu->nama}}

            <a href="/students/{{$stu->id}}" class="badge badge-info">detail</a>
            </li>
            @endforeach
            </ul>

        </div>
    </div>
</div>

@endsection