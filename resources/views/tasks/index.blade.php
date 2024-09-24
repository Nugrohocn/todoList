@extends('layout.app')

@section('content')

<br>
<p class="fw-bold">Masukkan Kegiatan Anda</p>

<form action="{{ route('tasks.store') }}" method="POST" class="mb-4">
    @csrf
    <div class="input-group mb-3">
        <input type="text" class="form-control col-1" placeholder="Task..." aria-label="Task" name="title" required>
        <button class="btn btn-success col-2 type="submit" id="button-addon2">Add</button>
    </div>
    
</form>

<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Task</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($tasks as $task)
        <tr>
            <td>{{ $task->title }}</td>
            <td>
                <form action="{{ route('tasks.update', $task->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('PATCH')
                    <input type="hidden" name="is_completed" value="1">
                    <button class="btn btn-primary" type="submit">{{ $task->is_completed ? 'Undo' : 'Complete' }}</button>
                </form>
                <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
