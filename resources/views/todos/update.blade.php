@extends('layouts.app')

@section('title')
    <title>Edit Todo</title>
@endsection

@section('content')
    <h1 class="text-center my-5">Edit Todo</h1>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit todo</div>
            </div>

            <div class="card-body">
                @if($errors->any())
                <div class="alert alert-danger">
                    <ul class="list-group">
                        @foreach($errors->all() as $error)
                            <li class="list-group-item">
                                {{ $error }}
                            </li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <form action="/{{ $todo->id }}/update-todo" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Name" name="name" value="{{ $todo->name }}">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" placeholder="Description" name="description">{{ $todo->description }}</textarea>
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-success">
                            Submit
                        </button>
                    </div>
                </form>
            </div>


        </div>
    </div>
@endsection