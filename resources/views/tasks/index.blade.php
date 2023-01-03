@extends('layouts.master')

@section('content')
    <div class="container">
     <h2 class="my-3">My Tasks  <a class="btn btn-primary btn-sm" href="{{ route('tasks.create') }}">+Create Task</a></h2>
     <div class="row">
        @foreach ($tasks as $task)
        <div class="col-md-4">
            <div class="shadow p-3">
              <h4>{{ $task->title }}</h4>
              <p>{!! $task->description!!}</p>
              <p>
                <img src="" alt="" width="100">
              </p>
              @include('tasks.partials.status',['task'=>$task])
              <div>
                <a href="{{ route('tasks.edit',$task->id) }}" class="btn btn-success btn-sm">Edit</a>
                <a href="{{ route('tasks.destroy',$task->id) }}" class="btn btn-danger btn-sm">Delete</a>
              </div>
            </div>
        </div>
            
        @endforeach
     </div>
    </div>
@endsection