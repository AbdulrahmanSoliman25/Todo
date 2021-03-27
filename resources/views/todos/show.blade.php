@extends('layout.app')
@section('title')
Single Todo ::{{$todo->name}}
@endsection
@section('content')
<body>
        <h1 class="text-center my-3">{{$todo->name}} </h1>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card card-defult">
                        <div class="card-header">
                            Details
                        </div>
                        
                        <div class="card-body">
                        {{$todo->description}} 
                        </div>
                    </div>
                    <a href="edit/{{$todo->id}}" class="btn btn-info my-2">Edit</a>
                    <a href="delete/{{$todo->id}}" class="btn btn-danger my-2">Delete</a>
                </div>
            </div>
</body>
@endsection