@extends('layouts.app')

@section('title')
    <title>Index</title>
@endsection

@section('content')
<h1 class="text-center my-5">TODOS PAGE</h1>
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                Todos
            </div>
        </div>
        <ul class="list-group list-group-flush">
            @foreach($todos as $todo)
                <li class="list-group-item">
                    {{ $todo->name }}
                    <a href=/{{ $todo->id }} class="btn btn-primary btn-sm float-right">View</a>
                </li>
            @endforeach
        </ul>
    </div>
</div>  
@endsection