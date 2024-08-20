@extends('layouts.app')

@section('content')
    <section class="bg-gray-50">
        <!-- Card Blog -->
        <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto bg-gray-50">


            <form action="" method="get">
                <!-- Title -->
                <div class="max-w-2xl mx-auto text-center mb-10 lg:mb-14">
                    <h2 class="text-2xl font-bold md:text-4xl md:leading-tight">Services</h2>
                    <p class="mt-1 text-gray-600 ">Stay in the know with insights from industry experts.</p>


                </div>
                <!-- End Title -->
                <div class=" bg-white flex justify-between px-3  my-6">
                    <div class=" p-6 flex  space-x-2">
                        <label class="block text-sm font-medium mb-2 ">
                            Category</label>
                        <select name="category_id" onchange="this.form.submit()"
                            class="py-1 px-2 block border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                            <option>Select </option>
                            @foreach ($categories as $cat)
                                <option value="{{ $cat->id }}" @if (isset($_GET['category_id']) && $_GET['category_id'] == $cat->id) selected @endif>
                                    {{ $cat->name }}</option>
                            @endforeach
                        </select>
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
                                <option value="asc" @if (isset($_GET['orderby']) && $_GET['orderby'] == 'asc') selected @endif>Latest</option>
                                <option value="desc" @if (isset($_GET['orderby']) && $_GET['orderby'] == 'desc') selected @endif>Oldest</option>
                            </select>
                        </div>
                    </div>
                </div>



                <!-- Grid -->
                <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach ($services as $service)
                        <!-- Card -->
                        <a href="{{ route('single.service.page', $service->slug) }}"
                            class="group flex flex-col focus:outline-none hover:shadow-2xl h-full bg-white border border-gray-200 shadow-sm rounded-xl"
                            href="#">
                            <div class="relative pt-[50%] sm:pt-[70%] rounded-t-xl overflow-hidden">
                                <img class="size-full absolute top-0 start-0 object-cover group-hover:scale-105 group-focus:scale-105 transition-transform duration-500 ease-in-out rounded-t-xl"
                                    src="{{ asset('storage/' . $service->thumbnail) }}" alt="Blog Image">
                            </div>
                            <div class="mt-7 px-6 space-y-3">
                                <h3 class="text-xl font-semibold text-gray-800 group-hover:text-gray-600 ">
                                    {{ $service->title }}
                                </h3>
                                <p class=" text-gray-800 ">
                                    {!! $service->description !!}
                                </p>
                            </div>
                        </a>
                        <!-- End Card -->
                    @endforeach
                </div>
                <!-- End Grid -->
                <div class="py-4">
                    {{ $services->links() }}
                </div>

            </form>
        </div>
        <!-- End Card Blog -->
    </section>
@endsection
