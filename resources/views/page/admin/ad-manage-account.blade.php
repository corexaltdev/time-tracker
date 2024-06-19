@extends('layout.sidebarlayout')

@section('other')
<div class="container">
    <script>
        function confirmDelete(event, formId) {
            event.preventDefault();
            if (confirm('Are you sure you want to delete this user?')) {
                document.getElementById(formId).submit();
            }
        }
    </script>
    <div class="row">
        <div class="col-4">
            <h1 class="t-4">Manage Accounts</h1>
        </div>
        <div class="col-1">
            <form method="GET" action="{{ route('ad-create-account') }}" >
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
                              <th scope="col">Username</th>
                              <th scope="col">Account Type</th>
                              <th scope="col">Email</th>
                              <th scope="col">Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($users as $u)
                            <tr>
                                <td>{{$u->username}}</td>
                                <td>{{$u->role}}</td>
                                <td>{{$u->email}}</td>
                                <td style="display: inline-block;">
                                    <form method="GET" action="{{ route('ad-edit-account', ['id'=> $u->id]) }}" style="display:inline;">
                                        @csrf
                                        <button type="submit" class="btn t-1 bg-4 btn-md mt-2">Edit</button>
                                    </form>
                                    <form id="delete-form-{{ $u->id }}" method="POST" action="{{ route('del-acc', ['id'=> $u->id]) }}" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn t-1 bg-4 btn-md mt-2" onclick="confirmDelete(event, 'delete-form-{{ $u->id }}')">Delete</button>
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