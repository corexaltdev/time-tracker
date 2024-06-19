@extends('layout.sidebarlayout')

@section('other')
<div class="container">
    <div class="row">
        <h1 class="t-4">Create Task</h1>
    </div>
    <div class="row">
        <div class="card dashboard-card">
            <div class="card-body">
                <div class="row">
                    <form method="POST" action="{{ route('create-task', ['id'=> $id]) }}" class="">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label t-4">Task Name </label>
                            <input class="form-control" id="name" name="name" required></input>
                        </div>
                        <div class="mb-3">
                            <label class="form-label t-4">Description </label>
                            <input class="form-control" id="description" name="description" required></input>
                        </div>
                        <div class="mb-3">
                            <button class="btn t-2 bg-4 btn-lg" type="submit">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection