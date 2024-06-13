@extends('layout.sidebarlayout')

@section('other')
<div class="container">
    <div class="row">
        <h1 class="t-4">Dashboard</h1>
    </div>
    <div class="row">
        <h3 class="t-3">{{ Str::ucfirst($role) }} Functionalities</h3>
    </div>
    <div class="row">
        <div class="card bg-4 dashboard-card">
            <div class="card-body">
                <div class="row">
                    @if ($role === 'admin')
                    <div class="col-3">
                        <div class="btn card bg-1">
                            <div class="card-body">
                                <h5 class="t-4"> Manage Accounts </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="btn card bg-1">
                            <div class="card-body">
                                <h5 class="t-4"> Logout </h5>
                            </div>
                        </div>
                    </div>
                    @elseif ($role === 'manager')
                    <div class="col-3">
                        <div class="btn card bg-1">
                            <div class="card-body">
                                <h5 class="t-4"> Manage Projects </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="btn card bg-1">
                            <div class="card-body">
                                <h5 class="t-4"> Manage Tasks </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="btn card bg-1">
                            <div class="card-body">
                                <h5 class="t-4"> Manage Clients </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="btn card bg-1">
                            <div class="card-body">
                                <h5 class="t-4"> Logout </h5>
                            </div>
                        </div>
                    </div>
                    @elseif ($role === 'developer')
                    <div class="col-3">
                        <div class="btn card bg-1">
                            <div class="card-body">
                                <h5 class="t-4"> Modify Info </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="btn card bg-1">
                            <div class="card-body">
                                <h5 class="t-4"> Chat </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="btn card bg-1">
                            <div class="card-body">
                                <h5 class="t-4"> Tasks </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="btn card bg-1">
                            <div class="card-body">
                                <h5 class="t-4"> Logout </h5>
                            </div>
                        </div>
                    </div>
                    @else
                    <div class="col-3">
                        <div class="btn card bg-1">
                            <div class="card-body">
                                <h5 class="t-4"> Request Project </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="btn card bg-1">
                            <div class="card-body">
                                <h5 class="t-4"> View Project </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="btn card bg-1">
                            <div class="card-body">
                                <h5 class="t-4"> Logout </h5>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection