@extends('layout.sidebarlayout')

@section('other')
<div class="container">
    <div class="row">
        <div class="col-2">
            <h1 class="t-4">Tasks</h1>
        </div>
        <div class="col-1">
            <form method="GET" action="{{ route('man-create-task') }}" class="">
                @csrf
                <button type="submit" class="btn t-1 bg-4 btn-md mt-2">Create</button>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="card dashboard-card">
            <div class="card-body">
                <div class="row mb-2">
                    <select class="form-select form-select-sm bg-2">
                        <option selected>Select Project</option>
                        <option>Project A</option>
                    </select>
                </div>
                <div class="row bg-2">
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
                            <tr>
                                <td>Add New Page</td>
                                <td>blablablablab</td>
                                <td> 
                                    <div class="progress" style="height: 20px;">
                                        <div class="progress-bar" role="progressbar" style="width: 50%;" ></div>
                                    </div>
                                </td>
                                <td>Feed</td>
                                <td>
                                    <form method="GET" action="{{ route('man-edit-task') }}" class="">
                                        @csrf
                                        <button type="submit" class="btn t-1 bg-4 btn-md mt-2">Edit Task</button>
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