@extends('layouts.app')
@section('content')
<section class="bg-gray-100 py-24">
    <div class="container mx-auto">


        <form action="" method="get">

        <h6 class="text-center uppercase text-[#01C778] font-bold">our blog</h6>
        <h2 class="text-center text-5xl  font-semibold leading-[56px]">How SEO London Services <br> Can Work for you</h2>
        <div class=" bg-white flex justify-between px-3 mb-3 mt-6 ">
            <div class=" p-6 flex  space-x-2">
                {{-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                    class="w-4 h-4 text-gray-800 ">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0ZM3.75 12h.007v.008H3.75V12Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm-.375 5.25h.007v.008H3.75v-.008Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                </svg>

                <svg class="w-4 h-4 text-gray-800 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9.143 4H4.857A.857.857 0 0 0 4 4.857v4.286c0 .473.384.857.857.857h4.286A.857.857 0 0 0 10 9.143V4.857A.857.857 0 0 0 9.143 4Zm10 0h-4.286a.857.857 0 0 0-.857.857v4.286c0 .473.384.857.857.857h4.286A.857.857 0 0 0 20 9.143V4.857A.857.857 0 0 0 19.143 4Zm-10 10H4.857a.857.857 0 0 0-.857.857v4.286c0 .473.384.857.857.857h4.286a.857.857 0 0 0 .857-.857v-4.286A.857.857 0 0 0 9.143 14Zm10 0h-4.286a.857.857 0 0 0-.857.857v4.286c0 .473.384.857.857.857h4.286a.857.857 0 0 0 .857-.857v-4.286a.857.857 0 0 0-.857-.857Z" />
                </svg> --}}

                <label  class="block text-sm font-medium mb-2 ">
                    Category</label>
                <select  name="category_id" onchange="this.form.submit()"
                    class="  py-1 px-2  block  border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                   >
                    <option>Select Categories</option>
                    @foreach ($categories as $cat)
                        <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                    @endforeach
                </select>

            </div>

            <div class=" flex space-x-2  ">
                <div class="flex items-center space-x-1">
                    <label for="">Order:</label>
                    <select name="per_page" onchange="this.form.submit()"
                        class="py-1 px-4 pe-9 block w-full border-gray-200 rounded-lg text-xs focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                        <option value="">Show:</option>
                        <option value="10" @if (isset($_GET['per_page']) && $_GET['per_page'] == '10') selected @endif>10</option>
                        <option value="20" @if (isset($_GET['per_page']) && $_GET['per_page'] == '20') selected @endif>20</option>
                        <option value="30" @if (isset($_GET['per_page']) && $_GET['per_page'] == '30') selected @endif>30</option>
                    </select>
                </div>
                <div class="flex items-center space-x-1">
                    <label for="">Order:</label>
                    <select name="orderby" onchange="this.form.submit()"
                        class="py-1 px-4 pe-9 block w-full border-gray-200 rounded-lg text-xs focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                        <option value="">Sort by:</option>
                        <option value="asc">Latest</option>
                        <option value="desc">Oldest</option>
                    </select>
                </div>
                {{-- <div class="flex items-center space-x-1">
                    <label for="">Sort:</label>
                    <select name="sortby" onchange="this.form.submit()"
                        class="py-1 px-4 pe-9 block w-full border-gray-200 rounded-lg text-xs focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                        <option value="">Price:</option>
                        <option value="asc">Low to Hith</option>
                        <option value="desc">High to low</option>
                    </select>
                </div> --}}
            </div>
        </div>
        <div id="ourservice" class="owl-carousel owl-theme grid grid-cols-12 gap-3 pb-10">
            @foreach (  $blogs as   $blog)
            <div class="col-span-4" >
                <div class="bg-white hover:bg-[#01C778] p-6 border rounded-lg space-y-6 group  h-[450px]">
                    <div class="">
                        <img src="{{ asset('storage/'.$blog->thumbnail) }}" class="max-h-48 min-h-48  max-w-[360px] min-w-[360px]"  alt="" srcset="">
                    </div>
                    <div class="">
                        <ul class="flex items-center space-y-1 text-gray-800 list-disc list-inside  space-x-3">
                            <p class="text-[17.5px] font-medium  group-hover:text-white">By Admin</p>
                            <li class="text-[17px] group-hover:text-white">
                                6 min read
                            </li>
                        </ul>
                        <h3 class="text-[22px] font-bold group-hover:text-white">{{$blog->title}}</h3>
                    </div>
                    <div class="">
                        <a href="{{route('blog.page',$blog->slug)}}" class=" space-x-2">
                            <div class="flex items-center group-hover:text-[#01C778] underline underline-offset-[8px] hover:underline-white">
                                <p class="text-lg font-semibold group-hover:text-white">Read More</p>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                    class="size-4 group-hover:text-white">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                                </svg>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="py-4">
            {{ $blogs->links() }}
        </div>
    </form>
    </div>
</section>

@endsection


