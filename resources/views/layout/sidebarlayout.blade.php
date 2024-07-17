@extends('layout.mainlayout')

@section('content')
<div class="d-flex">
    <div class="sidebar ">
        <div>
            <h4 class="t-1 text-center"> {{ Str::ucfirst($role) }} </h4>
        </div>
        <ul class="list-unstyled px-4">
            @if ($role === 'admin')
            <li class="t-1 py-1">
                <form method="GET" action="{{ route('ad-manage-account') }}" class="">
                    @csrf
                    <button type="submit" class="btn t-1">Manage Account</button>
                </form>
            </li>
            @elseif ($role === 'manager')
            <li class="t-1 py-2">
                <form method="GET" action="{{ route('man-projects') }}" class="">
                    @csrf
                    <button type="submit" class="btn t-1">Manage Projects</button>
                </form>
            </li>
            <li class="t-1 py-2">
                <form method="GET" action="{{ route('man-tasks') }}" class="">
                    @csrf
                    <button type="submit" class="btn t-1">Manage Tasks</button>
                </form>
            </li>
            <li class="t-1 py-2">
                <form method="GET" action="{{ route('man-clients') }}" class="">
                    @csrf
                    <button type="submit" class="btn t-1">Manage Clients</button>
                </form>
            </li>
            @elseif ($role === 'developer')
            <li class="t-1 py-1">
                <form method="GET" action="{{ route('dev-modify-info') }}" class="">
                    @csrf
                    <button type="submit" class="btn t-1">Modify Info</button>
                </form>
            </li>
            <li class="t-1 py-1">
                <form method="GET" action="{{ route('dev-tasks') }}" class="">
                    @csrf
                    <button type="submit" class="btn t-1">Tasks</button>
                </form>
            </li>
            {{-- <li class="t-1 py-1">
                <form method="GET" action="{{ route('dev-team') }}" class="">
                    @csrf
                    <button type="submit" class="btn t-1">Team</button>
                </form>
            </li> --}}
            <li class="t-1 py-1">
                <form method="GET" action="{{ route('dev-chat') }}" class="">
                    @csrf
                    <button type="submit" class="btn t-1">Notes</button>
                </form>
            </li>
            @else
            <li class="t-1 py-1">
                <form method="GET" action="{{ route('cl-request-project') }}" class="">
                    @csrf
                    <button type="submit" class="btn t-1">Request Project</button>
                </form>
            </li>
            <li class="t-1 py-1">
                <form method="GET" action="{{ route('cl-view-project') }}" class="">
                    @csrf
                    <button type="submit" class="btn t-1">View Project</button>
                </form>
            </li>
            @endif
            <li class="t-1 py-1">
                <form method="POST" action="{{ route('logout') }}" class="">
                    @csrf
                    <button type="submit" class="btn t-1">Logout</button>
                </form>
            </li>
        </ul>
    </div>
    <div class="container">
        @yield('other')
    </div>
</div>
@endsection