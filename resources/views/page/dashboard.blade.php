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
                        <form method="GET" action="{{ route('ad-manage-account') }}" class="btn card bg-1">
                            @csrf
                            <button type="submit" class="card-body btn">Manage Account</button>
                        </form>
                    </div>
                    @elseif ($role === 'manager')
                    <div class="col-3">
                        <form method="GET" action="{{ route('man-projects') }}" class="btn card bg-1">
                            @csrf
                            <button type="submit" class="card-body btn">Manage Projects</button>
                        </form>
                    </div>
                    <div class="col-3">
                        <form method="GET" action="{{ route('man-tasks') }}" class="btn card bg-1">
                            @csrf
                            <button type="submit" class="card-body btn">Manage Tasks</button>
                        </form>
                    </div>
                    <div class="col-3">
                        <form method="GET" action="{{ route('man-clients') }}" class="btn card bg-1">
                            @csrf
                            <button type="submit" class="card-body btn">Manage Clients</button>
                        </form>
                    </div>
                    @elseif ($role === 'developer')
                    <div class="col-3">
                        <form method="GET" action="{{ route('dev-modify-info') }}" class="btn card bg-1">
                            @csrf
                            <button type="submit" class="card-body btn">Modify Info</button>
                        </form>
                    </div>
                    <div class="col-3">
                        <form method="GET" action="{{ route('dev-tasks') }}" class="btn card bg-1">
                            @csrf
                            <button type="submit" class="card-body btn">Tasks</button>
                        </form>
                    </div>
                    <div class="col-3">
                        <div class="btn card bg-1">
                            <div class="card-body">
                                <h5 class="t-4"> Chat </h5>
                            </div>
                        </div>
                    </div>
                    @else
                    <div class="col-3">
                        <form method="GET" action="{{ route('cl-request-project') }}" class="btn card bg-1">
                            @csrf
                            <button type="submit" class="card-body btn">Request Project</button>
                        </form>
                    </div>
                    <div class="col-3">
                        <form method="GET" action="{{ route('cl-view-project') }}" class="btn card bg-1">
                            @csrf
                            <button type="submit" class="card-body btn">View Project</button>
                        </form>
                    </div>
                    @endif
                    <div class="col-3">
                        <form method="POST" action="{{ route('logout') }}" class="btn card bg-1">
                            @csrf
                            <button type="submit" class="card-body btn">Logout</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection