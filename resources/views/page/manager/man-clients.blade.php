@extends('layout.sidebarlayout')

@section('other')
<div class="container">
    <div class="row">
        <div class="col-4">
            <h1 class="t-4">Clients</h1>
        </div>
        <div class="col-1">
            <button class="btn t-2 bg-4 btn-md mt-2">Create</button>
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
                              <th scope="col">Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                                <td>testDev</td>
                                <td>developer@gmail.com</td>
                                <td>
                                    <button class="btn t-1 bg-4 btn-md mt-2">Edit</button>
                                    <button class="btn t-1 bg-4 btn-md mt-2">Suspend</button>
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