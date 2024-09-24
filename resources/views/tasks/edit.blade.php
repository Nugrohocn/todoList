@extends('layout.app')

@section('content')
    <h1>Edit Task</h1>
    
    <form action="{{ route('tasks.update', $task->id) }}" method="POST">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="title">Task Title</label>
            <input type="text" name="title" id="title" value="{{ $task->title }}" class="form-control" required>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
