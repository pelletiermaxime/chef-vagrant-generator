@if (Session::has('error'))
    <ul class="alert alert-danger">
        @foreach (Session::get('error')->all() as $message)
            <li>{{$message}}</li>
        @endforeach
    </ul>
@elseif (Session::has('success'))
    <div class="alert alert-success">
        {{ Session::get('success') }}
    </div>
@elseif (Session::has('fail'))
    <div class="alert alert-danger">
        {{ Session::get('fail') }}
    </div>
@endif
@if (Session::has('warning'))
    <div class="alert alert-warning">
        {{ Session::get('warning') }}
    </div>
@endif
