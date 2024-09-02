@extends('layouts.app')
@section('title')
    Perkstep | Portfolio
@endsection
@section('content')
    <section class="bg-gray-50 py-10">
        <div class="container space-y-5">
            @foreach ($portfolios as $portfolio)
                <div class="border shadow hover:border-green-300 rounded hover:shadow-xl p-5 text-center max-w-5xl mx-auto space-y-5">
                    <h3 class="text-4xl">{{$portfolio->title}}</h3>
                    {!! $portfolio->description!!}
                    <img src="{{ asset('storage/' . $portfolio->thumbnail) }}" class="w-full" alt="">
                </div>
            @endforeach

        </div>
    </section>
@endsection
