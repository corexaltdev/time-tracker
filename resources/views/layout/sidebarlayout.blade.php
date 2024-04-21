@extends('layout.mainlayout')

@section('content')
<div class="d-flex">
    <div class="sidebar ">
        <div>
            <h3 class="t-1 text-center"> Username </h3>
            <h4 class="t-1 text-center"> Role </h4>
        </div>
        <ul class="list-unstyled px-4">
            <li class="t-1 py-2"><a>Modify Info</a></li>
            <li class="t-1 py-2"><a>Task</a></li>
            <li class="t-1 py-2"><a>Chat</a></li>
            <li class="t-1 py-2"><a>Logout</a></li>
        </ul>
    </div>
    <div class="container">
        @yield('other')
    </div>
</div>
@endsection