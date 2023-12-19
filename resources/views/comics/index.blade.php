{{-- qui andranno tutte le card dei comics --}}

@extends('layouts.app')

@section('title', 'Comics')

@php
  $dcMerch = config("comics.merchArr");
@endphp
@section('content')
    <main class="position-relative">
        {{-- jumbotron --}}
        <div class="container-fluid top-main">
        </div>
        <div class="title-wrapper p-2 px-3 position-absolute ">
            <h4 class="font-my-light">
                CURRENT SERIES
            </h4>
        </div>
        <section class="bg-my-dark">
            {{-- comics card --}}
            <div class="container py-5">
                <div class="d-flex flex-wrap align-items-center justify-content-center py-3 ">
                    @foreach ($comics as $key=>$comic)
                        <div class="ms-4 pb-4">
                            <div class="card-wrapper">
                                <a href="{{route('comics.show', $key)}}">
                                    <div class="img-card-wrapper">
                                        <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                                    </div>
                                </a>
                                <div>
                                    <p class="font-my-light text-center pt-3">
                                        {{$comic['series']}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            {{-- merchandise --}}
            <div class="bg-my-light-blue">
                <div class="container py-5">
                    <ul class="d-flex flex-wrap justify-content-evenly align-items-center align-content-center">
                        @foreach ($dcMerch as $item)
                            <li v-for="(el) in mainImgArr" class="me-4 py-4">
                                <a href="#" class="d-flex align-items-center justify-content-center">
                                    <div class="img-wrapper">
                                        <img src="{{$item['picture']}}" alt="{{$item['info']}}">
                                    </div>
                                    <h3 class="font-my-light fs-6 ms-3">{{$item['title']}}</h3>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </section>
    </main>
@endsection
