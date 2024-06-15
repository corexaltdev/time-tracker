@extends('layout.sidebarlayout')

@section('other')
<div class="container">
    <div class="row">
        <h1 class="t-4">Feedback</h1>
    </div>
    <div class="row">
        <div class="card dashboard-card">
            <div class="card-body">
                <form method="POST" action="{{ route('update-feedback', ['id' => $id]) }}">
                    @csrf
                    @method('PATCH')
                    <div class="row">
                        <div class="mb-3">
                            <label for="feedback" class="form-label t-4">Feedback </label>
                            <input type="text" id="feedback" name="feedback" class="form-control">
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn t-2 bg-4 btn-lg">Update Feedback</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection