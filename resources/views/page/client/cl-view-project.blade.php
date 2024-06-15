@extends('layout.sidebarlayout')

@section('other')
<div class="container">
    <div class="row">
        <div class="col-4">
            <h1 class="t-4">View Project</h1>
        </div>
    </div>
    <div class="row">
        <div class="card dashboard-card">
            <div class="card-body">
                <div class="row">
                    <table class="table">
                        <thead>
                            <tr>
                              <th scope="col">Task</th>
                              <th scope="col">Description</th>
                              <th scope="col">Status</th>
                              <th scope="col">Feedback</th>
                              <th scope="col">Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($projects as $p)
                            <tr>
                                <td>{{$p->name}}</td>
                                <td>{{$p->description}}</td>
                                <td> 
                                    {{$p->status}}
                                </td>
                                <td>{{$p->feedback}}</td>
                                <td>
                                    <form method="GET" action="{{ route('cl-feedback', ['id'=> $p->id]) }}" class="">
                                        @csrf
                                        <button type="submit" class="btn t-1 bg-4 btn-md mt-2">Feedback</button>
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