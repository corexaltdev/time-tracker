@extends('layout.sidebarlayout')

@section('other')
<div class="container">
    <div class="row">
        <h1 class="t-4">Update Tasks</h1>
    </div>
    <div class="row">
        <div class="card dashboard-card">
            <div class="card-body">
                <div class="row">
                    <div class="mb-3">
                        <h3>Task</h3>
                        <h5>Add New Page</h5>
                    </div>
                    <div class="mb-3">
                        <h3>Description</h3>
                        <h5>New Page</h5>
                    </div>
                    <div class="mb-3">
                        <h3>Status</h3>
                        <h5>
                            <div class="progress" style="height: 20px;">
                                <div class="progress-bar" role="progressbar" style="width: 50%;" ></div>
                            </div>
                        </h5>
                    </div>
                    <div class="mb-3">
                        <h3>Update Status Percentage (%)</h3>
                        <input  type="number" class="form-control" value="50"></input>
                    </div>
                    <div class="mb-3">
                        <button class="btn t-1 bg-4 btn-lg">Update</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection