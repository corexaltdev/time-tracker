@extends('layout.sidebarlayout')

@section('other')
<div class="container">
    <div class="row">
        <div class="col-4">
            <h1 class="t-4">Team</h1>
        </div>
        <div class="col-1">
            <form method="GET" action="{{ route('dev-team-create') }}" >
                @csrf
                <button type="submit" class="btn t-2 bg-4 btn-md mt-2">Create</button>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="card dashboard-card">
            <div class="card-body">
                <div class="row">
                    <table class="table">
                        <thead>
                            <tr>
                              <th scope="col">Team</th>
                              <th scope="col">Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($teams as $t)
                            <tr>
                                <td>{{$t->name}}</td>
                                <td>
                                    <form method="POST" action="{{ route('join-team', ['id'=> $t->id]) }}" class="">
                                        @csrf
                                        <button type="submit" class="btn t-1 bg-4 btn-md mt-2">Join</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                          </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection