@extends('layout.sidebarlayout')

@section('other')
<div class="container">
    <div class="row">
        <h1 class="t-4">Create Team</h1>
    </div>
    <div class="row">
        <div class="card dashboard-card">
            <div class="card-body">
                <div class="row">
                    <form method="POST" action="{{ route('create-team') }}" class="">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label t-4">Name </label>
                            <input class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn t-1 bg-4 btn-md mt-2">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection