@extends('layout.sidebarlayout')

@section('other')
<div class="container">
    <div class="row">
        <div class="col-2">
            <h1 class="t-4">Tasks</h1>
        </div>
    </div>
    <div class="row">
        <div class="card dashboard-card">
            <div class="card-body">
                <div class="row mb-2">
                    <select class="form-select bg-2" name="project_id" id="projectSelect">
                        @foreach($projects as $p)
                            <option value="{{ $p->id }}">{{ $p-> name}}</option>
                        @endforeach
                    </select>
                    <form method="GET" id="disp" action="{{ route('man-display-tasks', ['id'=> ':projectId']) }}" class="" style="display:inline;">
                        @csrf
                        <button type="submit" class="btn t-1 bg-4 btn-sm mt-1">Display Task</button>
                    </form>
                    <form method="GET" id="crt" action="{{ route('man-create-task', ['id'=> ':projectId']) }}" class="" style="display:inline;">
                        @csrf
                        <button type="submit" class="btn t-1 bg-4 btn-sm mt-1">Create Task</button>
                    </form>
                </div>
                <div class="row bg-2">
                    <table class="table">
                        <thead>
                            <tr>
                              <th scope="col">Task</th>
                              <th scope="col">Description</th>
                              <th scope="col">Progress (%)</th>
                              <th scope="col">Duration (Minutes)</th>
                              <th scope="col">Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($tasks as $t)
                            <tr>
                                <td>{{ $t->name}}</td>
                                <td>{{ $t->description}}</td>
                                <td>{{ $t->progress }}</td>
                                {{-- <td> 
                                    <div class="progress" style="height: 20px;">
                                        <div class="progress-bar" role="progressbar" style="width: 50%;" ></div>
                                    </div>
                                </td> --}}
                                <td>{{ $t->duration}}</td>
                                <td>
                                    <form method="GET" action="{{ route('man-edit-task', ['id'=> $t->id]) }}" class="">
                                        @csrf
                                        <button type="submit" class="btn t-1 bg-4 btn-md mt-2">Edit Task</button>
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
    <script>
        document.getElementById('disp').addEventListener('submit', function(event) {
            var projectId = document.getElementById('projectSelect').value;
            var actionUrl = "{{ route('man-display-tasks', ['id' => ':projectId']) }}".replace(':projectId', projectId);
            this.action = actionUrl;
        });
        document.getElementById('crt').addEventListener('submit', function(event) {
            var projectId = document.getElementById('projectSelect').value;
            var actionUrl = "{{ route('man-create-task', ['id' => ':projectId']) }}".replace(':projectId', projectId);
            this.action = actionUrl;
        });
    </script>
</div>
@endsection