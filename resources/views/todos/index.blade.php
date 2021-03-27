@extends('layout.app')
@section('title')
Todos List
@endsection

@section('content')
<body>
    <div class="container">

    <h1 class="text-center my-5">Todos</h1>

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="cart cart-defult">
                    <div class="card-header">
                        Todos
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            @foreach($todos as $todo)
                            <li class="list-group-item " >
                            {{$todo->name}}
                            @if(!$todo->completed)
                            <a href="todo/{{$todo->id}}/complete" style="color:azure" class="btn btn-warning btn-sm float-right">complete</a>
                            @endif
                            <a href="todo/{{$todo->id}}" class="btn btn-primary btn-sm float-right mr-2">view</a>
                            </li>
                            @endforeach 
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>

    @endsection
    