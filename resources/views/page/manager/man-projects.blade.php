@extends('layout.sidebarlayout')

@section('other')
<div class="container">
    <div class="row">
        <div class="col-4">
            <h1 class="t-4">Projects</h1>
        </div>
    </div>
    <div class="row">
        <div class="card dashboard-card">
            <div class="card-body">
                <div class="row">
                    <table class="table">
                        <thead>
                            <tr>
                              <th scope="col">Project</th>
                              <th scope="col">Description</th>
                              <th scope="col">Status</th>
                              <th scope="col">Feedback</th>
                              <th scope="col">Project Status</th>
                              <th scope="col">Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                                <td>Project A</td>
                                <td>Developer</td>
                                <td> 
                                    <div class="progress" style="height: 20px;">
                                        <div class="progress-bar" role="progressbar" style="width: 50%;" ></div>
                                    </div>
                                </td>
                                <td>Feed</td>
                                <td>Pending</td>
                                <td>
                                    <button class="btn t-1 bg-4 btn-md mt-2">Update</button>
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