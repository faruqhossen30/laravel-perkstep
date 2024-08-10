
@extends('layouts.app')

@section('content')
<!-- Card Blog -->
<div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto bg-gray-100">


    <form action="" method="get">
    <!-- Title -->
    <div class="max-w-2xl mx-auto text-center mb-10 lg:mb-14">
      <h2 class="text-2xl font-bold md:text-4xl md:leading-tight">Portfolios</h2>
      <p class="mt-1 text-gray-600 ">Stay in the know with insights from industry experts.</p>


    </div>
    <!-- End Title -->
    <div class=" bg-white flex justify-between px-3  my-6">
        <div class=" p-6 flex  space-x-2">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                class="w-4 h-4 text-gray-800 ">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0ZM3.75 12h.007v.008H3.75V12Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm-.375 5.25h.007v.008H3.75v-.008Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
            </svg>

            <svg class="w-4 h-4 text-gray-800 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9.143 4H4.857A.857.857 0 0 0 4 4.857v4.286c0 .473.384.857.857.857h4.286A.857.857 0 0 0 10 9.143V4.857A.857.857 0 0 0 9.143 4Zm10 0h-4.286a.857.857 0 0 0-.857.857v4.286c0 .473.384.857.857.857h4.286A.857.857 0 0 0 20 9.143V4.857A.857.857 0 0 0 19.143 4Zm-10 10H4.857a.857.857 0 0 0-.857.857v4.286c0 .473.384.857.857.857h4.286a.857.857 0 0 0 .857-.857v-4.286A.857.857 0 0 0 9.143 14Zm10 0h-4.286a.857.857 0 0 0-.857.857v4.286c0 .473.384.857.857.857h4.286a.857.857 0 0 0 .857-.857v-4.286a.857.857 0 0 0-.857-.857Z" />
            </svg>

            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                class="w-4 h-4 text-gray-800  bi bi-grid-3x3-gap" viewBox="0 0 16 16">
                <path
                    d="M4 2v2H2V2zm1 12v-2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1m0-5V7a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1m0-5V2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1m5 10v-2a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1m0-5V7a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1m0-5V2a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1M9 2v2H7V2zm5 0v2h-2V2zM4 7v2H2V7zm5 0v2H7V7zm5 0h-2v2h2zM4 12v2H2v-2zm5 0v2H7v-2zm5 0v2h-2v-2zM12 1a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zm-1 6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1zm1 4a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-2a1 1 0 0 0-1-1z" />
            </svg>

        </div>

        <div class=" flex space-x-2 py-3 ">
            <div class="flex items-center space-x-1">
                <label for="">Order:</label>
                <select name="per_page" onchange="this.form.submit()"
                    class="py-1 px-4 pe-9 block w-full border-gray-200 rounded-lg text-xs focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none ">
                    <option value="">Show:</option>
                    <option value="10" @if (isset($_GET['per_page']) && $_GET['per_page'] == '10') selected @endif>10</option>
                    <option value="20" @if (isset($_GET['per_page']) && $_GET['per_page'] == '20') selected @endif>20</option>
                    <option value="30" @if (isset($_GET['per_page']) && $_GET['per_page'] == '30') selected @endif>30</option>
                </select>
            </div>
            <div class="flex items-center space-x-1">
                <label for="">Order:</label>
                <select name="orderby" onchange="this.form.submit()"
                    class="py-1 px-4 pe-9 block w-full border-gray-200 rounded-lg text-xs focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none ">
                    <option value="">Sort by:</option>
                    <option value="asc" @if (isset($_GET['orderby'])  && $_GET['orderby']=='asc') selected @endif>Latest</option>
                    <option value="desc" @if (isset($_GET['orderby'])  && $_GET['orderby']=='desc') selected @endif>Oldest</option>
                </select>
            </div>
        </div>
    </div>



    <!-- Grid -->
    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($portfilios as $portfilio)
        <!-- Card -->
        <a href="{{route('portfolio.single',$portfilio->slug)}}" class="group flex flex-col focus:outline-none hover:shadow-2xl h-full bg-white border border-gray-200 shadow-sm rounded-xl" href="#">
          <div class="relative pt-[50%] sm:pt-[70%] rounded-t-xl overflow-hidden">
            <img class="size-full absolute top-0 start-0 object-cover group-hover:scale-105 group-focus:scale-105 transition-transform duration-500 ease-in-out rounded-t-xl" src="{{ asset('storage/'.$portfilio->thumbnail) }}" alt="Blog Image">
          </div>
          <div class="mt-7 px-6 space-y-3">
            <h3 class="text-xl font-semibold text-gray-800 group-hover:text-gray-600 ">
           {{$portfilio->title}}
            </h3>
            <p class=" text-gray-800 ">
             {!! $portfilio->description!!}
            </p>
          </div>
        </a>
        <!-- End Card -->
        @endforeach
    </div>
    <!-- End Grid -->
    <div class="py-4">
        {{ $portfilios->links() }}
    </div>

</form>
  </div>
  <!-- End Card Blog -->
@endsection
