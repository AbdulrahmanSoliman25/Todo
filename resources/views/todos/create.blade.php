@extends('layout.app')
@section('title')
Create New Todo
@endsection

@section('content')

    <h1 class="text-center my-5">Create New Todo</h1>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-defult">
                <div class="card-header">Create New Todo</div>
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
                    <form action="store" method="POST">
                        @csrf
                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="Name" name="name">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="description" name="description" id="desc" cols="5" rows="5"></textarea>
                        </div>
                        <div class="form-group text-center">
                            <button  type="submit" class="btn btn-success" >Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection