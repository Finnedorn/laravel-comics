{{-- qui è dove verrano riportati i dettagli del comic --}}
@extends('layouts.app')

@section('title', 'Comic details')

@section('content')
    <main>
        <div>
            <div class="img-card-wrapper">
                <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
            </div>
            <div>
                <p class="font-my-light text-center pt-3">
                    {{$comic['series']}}
                </p>
            </div>
        </div>
    </main>
@endsection
