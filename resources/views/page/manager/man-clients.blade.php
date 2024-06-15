@extends('layout.sidebarlayout')

@section('other')
<div class="container">
    <div class="row">
        <div class="col-2">
            <h1 class="t-4">Clients</h1>
        </div>
        <div class="col-1">
            <form method="GET" action="{{ route('man-create-client') }}" class="">
                @csrf
                <button type="submit" class="btn t-1 bg-4 btn-md mt-2">Create</button>
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
                              <th scope="col">Clients</th>
                              <th scope="col">Email</th>
                              <th scope="col">Status</th>
                              <th scope="col">Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                                <td>testDev</td>
                                <td>developer@gmail.com</td>
                                <td>Available</td>
                                <td style="display: inline-block;">
                                    <form method="GET" action="{{ route('man-edit-client') }}" style="display:inline;">
                                        @csrf
                                        <button type="submit" class="btn t-1 bg-4 btn-md mt-2">Edit</button>
                                    </form>
                                    <form method="GET" style="display:inline;">
                                        @csrf
                                        <button type="submit" class="btn t-1 bg-4 btn-md mt-2">Suspend</button>
                                    </form>
                                </td>
                            </tr>
                          </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection