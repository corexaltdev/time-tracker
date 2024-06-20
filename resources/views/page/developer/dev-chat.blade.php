@extends('layout.sidebarlayout')

@section('other')
<div class="container">
    <div class="row">
        <div class="col-4">
            <h1 class="t-4">Tasks</h1>
        </div>
    </div>
    <div class="row">
        <div class="card dashboard-card">
            <div class="card-body">
                <div class="row mb-2">
                    <select class="form-select bg-2" name="chat_id" id="chatSelect">
                        @foreach($devs as $d)
                            <option value="{{ $d->id }}">{{ $d->username}}</option>
                        @endforeach
                    </select>
                    <form method="GET" id="chat" action="{{ route('dev-message', ['id'=> ':chatId']) }}" class="" style="display:inline;">
                        @csrf
                        <button type="submit" class="btn t-1 bg-4 btn-sm mt-1">Open Messages</button>
                    </form>
                </div>
                <div class="row mb-1">
                    <form method="POST" id="send" action="{{ route('send-msg', ['id'=> ':chatId']) }}" class="" style="display:inline;">
                        @csrf
                        <input class="form-control" id="content" name="content" required>
                        <button type="submit" class="btn t-1 bg-4 btn-sm mt-1">Send Message</button>
                    </form>
                </div>
                @foreach($msg as $m)
                @if($m->user_id_1 == $id)
                <div class="row bg-1">
                    <h5 class="t-3">{{$m->content}}</h5>
                </div>
                @else
                <div class="row bg-2">
                    <h5 class="t-4">{{$m->content}}</h5>
                </div>
                @endif
                @endforeach
            </div>
        </div>
    </div>
    <script>
        document.getElementById('chat').addEventListener('submit', function(event) {
            var chatId = document.getElementById('chatSelect').value;
            var actionUrl = "{{ route('dev-message', ['id' => ':chatId']) }}".replace(':chatId', chatId);
            this.action = actionUrl;
        });
        document.getElementById('send').addEventListener('submit', function(event) {
            var chatId = document.getElementById('chatSelect').value;
            var actionUrl = "{{ route('send-msg', ['id' => ':chatId']) }}".replace(':chatId', chatId);
            this.action = actionUrl;
        });
    </script>
</div>
@endsection