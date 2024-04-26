@extends('layout.sidebarlayout')

@section('other')
<div class="container">
    <div class="row">
        <h1 class="t-4">Update Projects</h1>
    </div>
    <div class="row">
        <div class="card dashboard-card">
            <div class="card-body">
                <div class="row">
                    <div class="mb-3">
                        <h3>Project Name</h3>
                        <h5>Project A</h5>
                    </div>
                    <div class="mb-3">
                        <h3>Project Status</h3>
                        <h5>
                            <div class="progress" style="height: 20px;">
                                <div class="progress-bar" role="progressbar" style="width: 50%;" ></div>
                            </div>
                        </h5>
                    </div>
                    <div class="mb-3">
                        <button class="btn t-1 bg-4 btn-lg">Update</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection