@if (count($errors))
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger">{{ $error }}</div>
    @endforeach
@endif
@if (Session::has('success'))
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
