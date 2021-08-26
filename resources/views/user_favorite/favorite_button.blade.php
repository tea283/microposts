@if (Auth::id() != $microposts->id)
    @if (Auth::user()->is_favorite($microposts))
        {{-- アンフォローボタンのフォーム --}}
        {!! Form::open(['route' => ['user.unfavorite', $microposts], 'method' => 'delete']) !!}
            {!! Form::submit('unfavorite', ['class' => "btn btn-danger btn-block"]) !!}
        {!! Form::close() !!}
    @else
        {{-- フォローボタンのフォーム --}}
        {!! Form::open(['route' => ['user.favorite', $microposts]]) !!}
            {!! Form::submit('favorite', ['class' => "btn btn-primary btn-block"]) !!}
        {!! Form::close() !!}
    @endif
@endif