@extends('layouts.app')

@section('content')
    <!----------hero section start------->
    @include('herosection')
    <!----------hero section End--------->

    <!----------client---------------------->
    @include('client')
    <!----------client---------------------->

    <!---------- Our services  ------------->
    @include('service')
    <!---------- Our services  ------------->

    <!----------- About Us----------------->
    @include('about')
    <!----------- About Us----------------->

    <!-----------why chose us-------------->
    @include('whychoseus')
    <!-----------why chose us-------------->

    <!----------client review-------------->
    @include('review')
    <!----------client review-------------->

    <!-----------mission------------------->
    @include('mission')
    <!-----------mission------------------->

    <!----------Faq ----------------------->
    @include('faq')
    <!----------Faq ----------------------->

    <!----------------our services---------->
    @include('ourservices')
    <!----------------our services---------->

    <!-------------work with us------------->
    @include('workwithus')
    <!-------------work with us------------->
@endsection


@push('styles')
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
@endpush


@push('scripts')
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            // Feature Slider
            $('#featureOwlSlider').owlCarousel({
                loop: true,
                margin: 10,
                nav: false,
                dots: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 6
                    }
                }
            })
            // Servie Slider
            $('#servicesslider').owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                dots: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 3
                    }
                }
            })
            // Testmonial Slider
            $('#clientreview').owlCarousel({
                loop: true,
                margin: 10,
                nav: false,
                dots: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 3
                    }
                }
            })

            // Blog Slider
            $('#ourservice').owlCarousel({
                loop: true,
                margin: 10,
                nav: false,
                dots: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 3
                    }
                }
            })
        });
    </script>
@endpush
