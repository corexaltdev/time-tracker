@extends('layout.mainlayout')

@section('content')
<div class="container w-50 mt-5">
    <div class="card">
        <div class="card-body bg-4">
            <div class="mb-3">
                <h1 class="t-2 text-center"> Login </h1>
            </div>
            <div class="mb-3">
                <label class="form-label t-2">Email </label>
                <input type="email" class="form-control t-4"></input>
            </div>
            <div class="mb-3">
                <label class="form-label t-2">Password </label>
                <input type="password" class="form-control t-4"></input>
            </div>
            <div class="mb-3 text-center">
                <button class="btn t-4 bg-2 btn-lg">Sign In</button>
            </div>
        </div>
    </div>
</div>
@endsection