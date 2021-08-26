
    @if (Auth::user()->is_favorite($micropost->id))
        {{-- ボタンのフォーム --}}
        {!! Form::open(['route' => ['favorite.unfavorite', $micropost->id],'method' => 'delete']) !!}
            {!! Form::submit('Unfavorite', ['class' => "btn btn-danger btn-block"]) !!}
        {!! Form::close() !!}
    @else
        {{-- アンボタンのフォーム --}}
        {!! Form::open(['route' => ['favorite.favorite', $micropost->id]]) !!}
            {!! Form::submit('Favorite', ['class' => "btn btn-primary btn-block"]) !!}
        {!! Form::close() !!}
    @endif
