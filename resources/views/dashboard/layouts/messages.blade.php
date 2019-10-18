<div>
    @if($message = Session::get('success'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>
    @elseif ($message = Session::get('error'))
    <div class="alert alert-warning alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>
    @endif

    @if ( isset($errors) && count($errors) > 0)
    <div class="alert alert-danger alert-block">
        <button type="button" class="close" data-dismiss="alert">X</button>
        <ul>
            @foreach($errors->all() as $error)
            <li>
                <strong> {{$error}} </strong>
            </li>
            @endforeach
        </ul>
    </div>
    @endif
</div>