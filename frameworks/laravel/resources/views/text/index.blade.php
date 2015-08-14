@extends('app')
@section('content')
    <div class="wrap">
        <h1>Texts</h1>
        <div class="container">
            @foreach ($texts as $text)
                <div class="mdl-card mdl-shadow--2dp demo-card-wide element">
                    <div class="mdl-card__title">
                        <h2 class="mdl-card__title-text">{{ $text->title }}></h2>
                    </div>
                    <div class="mdl-card__supporting-text">
                        {{ $text->content }}
                    </div>
                    <div class="mdl-card__menu">
                        <button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
                            <i class="material-icons">share</i>
                        </button>
                    </div>
                </div>
            @endforeach
        </div>

        {!! $texts->render() !!}
    </div>
@endsection