{{-- qui andranno tutte le card dei comics --}}

@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <main>
        <section class="bg-my-dark">
            <div class="container py-5">
                <div class="d-flex flex-wrap align-items-center justify-content-center py-3 ">
                    {{-- comics card --}}
                    @foreach ($comics as $comic)
                        <div class="ms-4 pb-4">
                            <div class="card-wrapper">
                                <div class="img-card-wrapper">
                                    <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                                </div>
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
        </section>
    </main>
@endsection
