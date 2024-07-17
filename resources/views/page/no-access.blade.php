@extends('layout.mainlayout')

@section('content')
<div class="container w-50 mt-5">
    <div class="card">
        <div class="card-body bg-4">
            <div class="mb-3">
                <h1 class="t-2 text-center"> No Access </h1>
            </div>
            <div class="mb-3">
                <h4 class="t-2 text-center"> Please Return to previous page </h4>
            </div>
            <div class="mb-3">
                <h4 class="t-2 text-center"> 
                    <form method="POST" action="{{ route('logout') }}" class="">
                        @csrf
                        <button type="submit" class="btn t-1">Logout</button>
                    </form>
                </h4>
            </div>
        </div>
    </div>
</div>
@endsection