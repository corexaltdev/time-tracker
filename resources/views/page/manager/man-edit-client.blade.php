@extends('layout.sidebarlayout')

@section('other')
<div class="container">
    <div class="row">
        <h1 class="t-4">Edit Client</h1>
    </div>
    <div class="row">
        <div class="card dashboard-card">
            <div class="card-body">
                <div class="row">
                    <form method="POST" action="{{ route('edit-cl', $user->id) }}" class="">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label class="form-label t-4">Username </label>
                            <input class="form-control" id="name" name="name" value="{{ $user->username }}" required></input>
                        </div>
                        <div class="mb-3">
                            <label class="form-label t-4">Account Type </label>
                            <select class="form-select form-select-sm" id="role" name="role" required>
                                <option value="client" selected>Client</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label t-4">Email </label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" required></input>
                        </div>
                        <div class="mb-3">
                            <label class="form-label t-4">Password </label>
                            <input type="password" class="form-control" id="password" name="password"></input>
                        </div>
                        <div class="mb-3">
                            <button class="btn t-2 bg-4 btn-lg" type="submit">Edit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection