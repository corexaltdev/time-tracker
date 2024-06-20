@extends('layout.sidebarlayout')

@section('other')
<div class="container">
    <div class="row">
        <h1 class="t-4">Update Tasks</h1>
    </div>
    <div class="row">
        <div class="card dashboard-card">
            <div class="card-body">
                <form method="POST" action="{{ route('dev-update-progress', ['id' => $id]) }}">
                    @csrf
                    @method('PATCH')
                    <div class="row">
                        <div class="mb-3">
                            <h3>Task</h3>
                            <h5>{{ $task->name }}</h5>
                        </div>
                        <div class="mb-3">
                            <h3>Description</h3>
                            <h5>{{ $task->description }}</h5>
                        </div>
                        <div class="mb-3">
                            <h3>Update Status Percentage (%)</h3>
                            <input  type="number" class="form-control" value={{ $task->progress }} id='progress' name='progress'></input>
                        </div>
                        <div class="mb-3">
                            <h3>Update Duration (Minutes)</h3>
                            <input  type="number" class="form-control" value={{ $task->duration }} id='duration' name='duration'></input>
                        </div>
                        <div class="mb-3">
                            <button class="btn t-1 bg-4 btn-lg" type="submit">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection