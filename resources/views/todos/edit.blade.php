@extends('layout.app')
@section('title')
Update Todo
@endsection

@section('content')

    <h1 class="text-center my-5">Update Todo</h1>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-defult">
                <div class="card-header">Update Todo</div>
                <div class="card-body">
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul class="list-group" >
                                @foreach($errors->all() as $error)
                                <li class="list-group-item" >
                                    {{$error}}
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="update" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{$todo->id}}" >
                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="Name" name="name" value="{{$todo->name}}">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="description" name="description" id="desc" cols="5" rows="5">{{$todo->description}}</textarea>
                        </div>
                        <div class="form-group text-center">
                            <button  type="submit" class="btn btn-success" >Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>







@endsection