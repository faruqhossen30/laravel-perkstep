@php
    use App\Models\Portfolio;
    $portfolios = portfolio::get();
@endphp

@extends('layouts.app')

@section('OG')
    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@">
    <meta name="twitter:creator" content="@">
    <meta name="twitter:title" content="Monodeep Samanata Blogs | All Latest Contribution of Monodeep ">
    <meta name="twitter:description"
        content="Stay updated with Monodeep Samanta's blog, featuring insights and tips from an experienced  UI/UX designer.">
    <meta name="twitter:image" content="{{ asset('logo.jpg') }}">

    <!-- Facebook -->
    <meta property="og:url" content="{{ route('homepage') }}">
    <meta property="og:title" content="{{ $portfolio->title }}">
    <meta property="og:description" content="{{ $portfolio->description }}">
    <meta property="og:type" content="website">
    <meta property="og:image" content="{{ asset('storage/' . $portfolio->thumbnail) }}">
    <meta property="og:image:type" content="image/png">

@endsection

@section('content')

<div class="container mb-10">
    {{-- <div>
        <h2 class="text-4xl">{{$portfolio->title}}</h2>
    </div> --}}
    <div class="space-y-10">
        @foreach ($portfolio->sections as $section)
            <div class="text-center max-w-5xl mx-auto space-y-5">
                <h3 class="text-4xl">{{$section->title}}</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim quasi rerum deserunt assumenda odio odit ratione rem tempora possimus quam necessitatibus quas, nihil, cum nemo ab consequatur fugit? Itaque saepe voluptas perspiciatis obcaecati amet aperiam tempora, natus fugiat ut, culpa provident quae non ullam commodi! Qui a amet quisquam tempore.</p>
                <img src="{{asset('storage/'.$section->thumbnail)}}" class="w-full" alt="">
            </div>
        @endforeach
    </div>
</div>


@endsection


