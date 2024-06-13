@extends('layout.mainlayout')

@section('content')
<div class="d-flex">
    <div class="sidebar ">
        <div>
            <h3 class="t-1 text-center"> Username </h3>
            <h4 class="t-1 text-center"> {{ Str::ucfirst($role) }} </h4>
        </div>
        <ul class="list-unstyled px-4">
            @if ($role === 'admin')
            <li class="t-1 py-2"><a>Manage Accounts</a></li>
            <li class="t-1 py-2"><a>Logout</a></li>
            @elseif ($role === 'manager')
            <li class="t-1 py-2"><a>Manage Projects</a></li>
            <li class="t-1 py-2"><a>Manage Tasks</a></li>
            <li class="t-1 py-2"><a>Manage Clients</a></li>
            <li class="t-1 py-2"><a>Logout</a></li>
            @elseif ($role === 'developer')
            <li class="t-1 py-2"><a>Modify Info</a></li>
            <li class="t-1 py-2"><a>Task</a></li>
            <li class="t-1 py-2"><a>Chat</a></li>
            <li class="t-1 py-2"><a>Logout</a></li>
            @else
            <li class="t-1 py-2"><a>Request Project</a></li>
            <li class="t-1 py-2"><a>View Project</a></li>
            <li class="t-1 py-2"><a>Logout</a></li>
            @endif
        </ul>
    </div>
    <div class="container">
        @yield('other')
    </div>
</div>
@endsection