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
                    <div class="mb-3">
                        <label class="form-label t-4">Username </label>
                        <input class="form-control"></input>
                    </div>
                    <div class="mb-3">
                        <label class="form-label t-4">Account Type </label>
                        <select class="form-select form-select-sm">
                            <option selected>Client</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label t-4">Email </label>
                        <input type="email" class="form-control"></input>
                    </div>
                    <div class="mb-3">
                        <label class="form-label t-4">Password </label>
                        <input type="password" class="form-control"></input>
                    </div>
                    <div class="mb-3">
                        <label class="form-label t-4">Confirm Password </label>
                        <input type="password" class="form-control"></input>
                    </div>
                    <div class="mb-3">
                        <button class="btn t-2 bg-4 btn-lg">Edit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection