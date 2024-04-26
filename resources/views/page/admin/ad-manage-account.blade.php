@extends('layout.sidebarlayout')

@section('other')
<div class="container">
    <div class="row">
        <div class="col-4">
            <h1 class="t-4">Manage Accounts</h1>
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
                              <th scope="col">Username</th>
                              <th scope="col">Account Type</th>
                              <th scope="col">Email</th>
                              <th scope="col">Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                                <td>testDev</td>
                                <td>Developer</td>
                                <td>developer@gmail.com</td>
                                <td>
                                    <button class="btn t-1 bg-4 btn-md mt-2">Edit</button>
                                    <button class="btn t-1 bg-4 btn-md mt-2">Delete</button>
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