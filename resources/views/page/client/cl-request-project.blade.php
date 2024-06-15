@extends('layout.sidebarlayout')

@section('other')
<div class="container">
    <div class="row">
        <h1 class="t-4">Request Project</h1>
    </div>
    <div class="row">
        <div class="card dashboard-card">
            <div class="card-body">
                <div class="row">
                    <div class="mb-3">
                        <label class="form-label t-4">Name </label>
                        <input class="form-control"></input>
                    </div>
                    <div class="mb-3">
                        <label class="form-label t-4">Description </label>
                        <input class="form-control"></input>
                    </div>
                    <div class="mb-3">
                        <button class="btn t-2 bg-4 btn-lg">Request</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection