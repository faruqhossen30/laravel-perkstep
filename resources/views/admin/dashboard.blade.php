@php
    use App\Models\Service;
    use App\Models\Portfolio;
    use App\Models\Review;

    $portfolio = Portfolio::get();
    $services = Service::get();
    $review = Review::get();
@endphp

@extends('admin.layouts.app')
@section('breadcrumb')
    <x-breadcrumb />
@endsection
@section('content')
    <div class="grid sm:grid-cols-2 lg:grid-cols-3 items-center gap-2 md:gap-6">
        <a href="#">
            <x-dashboard.dahsbordcard title="Portfilios" data="{{count( $portfolio)}}" />
        </a>
        <a href="#">
            <x-dashboard.dahsbordcard title="Services" data="{{count( $services)}}" />
        </a>
        <a href="#">
            <x-dashboard.dahsbordcard title="Reviews" data="{{count( $review)}}" />
        </a>
    </div>
@endsection
