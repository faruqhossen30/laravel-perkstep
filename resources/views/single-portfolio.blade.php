@extends('layouts.app')

@section('content')

  <!-- Start grid -->
  <section class="py-2">
    <div class=" max-w-[1100px] mx-auto">
        <div class="grid grid-cols-12 gap-y-10 lg:gap-10">
            <div class="col-span-12 lg:col-span-12">
                <div class=" rounded-md  ">
                    <div class="relative">
                        <img src="{{asset('storage/'.$portfolio->thumbnail)}}" alt="" class="rounded-md img-cover w-full h-96 mb-7">
                        <div class="absolute z-20 -bottom-7 left-7">
                            <img src="{{asset('storage/'.$portfolio->thumbnail)}}" alt="" class="rounded-md img-fluid h-16 w-16">
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="grid grid-cols-12">
                            <div class="col-span-12 lg:col-span-8">
                                <div class="relative">
                                    <h5 class="mb-1 text-gray-900 font-bold text-4xl">{{$portfolio->title}}</h5>
                                </div>
                            </div>
                        </div>


                        <div class="mt-5 prose-xl">
                            <h5 class="mb-3 text-gray-900  font-semibold text-xl">Description</h5>
                            <div>
                                <p class="mb-0 text-gray-500 ">{!! $portfolio->description!!}</p>
                            </div>
                        </div>


                        <div class="mt-4">
                            <h5 class="mb-3 text-gray-900  font-semibold text-xl">Tags</h5>
                            <span class="px-2 py-1 text-black border  rounded text-11 group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500">PHP</span>
                            <span class="px-2 py-1 text-black border  rounded text-11 group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500">JS</span>
                            <span class="px-2 py-1 text-black border  rounded text-11 group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500">Marketing</span>
                            <span class="px-2 py-1 text-black border  rounded text-11 group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500">REACT</span>
                            <span class="px-2 py-1 text-black border  rounded text-11 group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 ">PHOTOSHOP</span>
                        </div>

                        <div class="pt-3 mt-4">
                            <ul class="flex flex-wrap items-center gap-3 mb-0">
                                <li class="mt-1 font-bold text-lg ">
                                    Share this job:
                                </li>
                                <li class="mt-1">
                                    <a href="https://www.facebook.com/sharer/sharer.php?u="
                                        class="px-3 py-1 text-xs font-medium text-center inline-flex items-center text-white bg-blue-700 rounded-lg hover:bg-blue-800  focus:outline-none  ">
                                        <svg class="w-4 h-4 text-white " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" fill="currentColor" viewBox="0 0 24 24">
                                            <path fill-rule="evenodd"
                                                d="M13.135 6H15V3h-1.865a4.147 4.147 0 0 0-4.142 4.142V9H7v3h2v9.938h3V12h2.021l.592-3H12V6.591A.6.6 0 0 1 12.592 6h.543Z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        facebook
                                    </a>
                                    <a href="https://twitter.com/intent/tweet?url="
                                        class="px-3  py-1  space-x-2 text-xs font-medium text-center inline-flex items-center text-white bg-[#1DA1F2] rounded-lg hover:bg-blue-800  focus:outline-none   ">
                                        <svg class="w-4 h-4 text-white   mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" fill="currentColor" viewBox="0 0 24 24">
                                            <path fill-rule="evenodd"
                                                d="M22 5.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.343 8.343 0 0 1-2.605.981A4.13 4.13 0 0 0 15.85 4a4.068 4.068 0 0 0-4.1 4.038c0 .31.035.618.105.919A11.705 11.705 0 0 1 3.4 4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 6.1 13.635a4.192 4.192 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 2 18.184 11.732 11.732 0 0 0 8.291 20 11.502 11.502 0 0 0 19.964 8.5c0-.177 0-.349-.012-.523A8.143 8.143 0 0 0 22 5.892Z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        twitter
                                    </a>
                                    <a href="https://www.linkedin.com/shareArticle?mini=true&url="
                                        class="px-3  py-1  space-x-2 text-xs font-medium text-center inline-flex items-center text-white bg-[#E4405F] rounded-lg hover:bg-blue-800  focus:outline-none   d ">
                                        <svg class="w-4 h-4 text-white mr-1 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" fill="none" viewBox="0 0 24 24">
                                            <path fill="currentColor" fill-rule="evenodd"
                                                d="M3 8a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v8a5 5 0 0 1-5 5H8a5 5 0 0 1-5-5V8Zm5-3a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V8a3 3 0 0 0-3-3H8Zm7.597 2.214a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2h-.01a1 1 0 0 1-1-1ZM12 9a3 3 0 1 0 0 6 3 3 0 0 0 0-6Zm-5 3a5 5 0 1 1 10 0 5 5 0 0 1-10 0Z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        instagram
                                    </a>
                                    <a href="https://www.linkedin.com/shareArticle?mini=true&url="
                                        class="px-3  py-1  space-x-2 text-xs font-medium text-center inline-flex items-center text-white bg-[#0A66C2] rounded-lg hover:bg-blue-800  focus:outline-none    ">
                                        <svg class="w-4 h-4 text-white " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" fill="currentColor" viewBox="0 0 24 24">
                                            <path fill-rule="evenodd"
                                                d="M12.51 8.796v1.697a3.738 3.738 0 0 1 3.288-1.684c3.455 0 4.202 2.16 4.202 4.97V19.5h-3.2v-5.072c0-1.21-.244-2.766-2.128-2.766-1.827 0-2.139 1.317-2.139 2.676V19.5h-3.19V8.796h3.168ZM7.2 6.106a1.61 1.61 0 0 1-.988 1.483 1.595 1.595 0 0 1-1.743-.348A1.607 1.607 0 0 1 5.6 4.5a1.601 1.601 0 0 1 1.6 1.606Z"
                                                clip-rule="evenodd" />
                                            <path d="M7.2 8.809H4V19.5h3.2V8.809Z" />
                                        </svg>
                                        linkedin
                                    </a>
                                    <a href="https://api.whatsapp.com/send?text="
                                        class="px-3  py-1  space-x-2 text-xs font-medium text-center inline-flex items-center text-white bg-green-400 rounded-lg hover:bg-blue-800  focus:outline-none   ">
                                        <svg class="w-4 h-4 text-white mr-1 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" fill="currentColor" viewBox="0 0 24 24">
                                            <path fill-rule="evenodd"
                                                d="M21.7 8.037a4.26 4.26 0 0 0-.789-1.964 2.84 2.84 0 0 0-1.984-.839c-2.767-.2-6.926-.2-6.926-.2s-4.157 0-6.928.2a2.836 2.836 0 0 0-1.983.839 4.225 4.225 0 0 0-.79 1.965 30.146 30.146 0 0 0-.2 3.206v1.5a30.12 30.12 0 0 0 .2 3.206c.094.712.364 1.39.784 1.972.604.536 1.38.837 2.187.848 1.583.151 6.731.2 6.731.2s4.161 0 6.928-.2a2.844 2.844 0 0 0 1.985-.84 4.27 4.27 0 0 0 .787-1.965 30.12 30.12 0 0 0 .2-3.206v-1.516a30.672 30.672 0 0 0-.202-3.206Zm-11.692 6.554v-5.62l5.4 2.819-5.4 2.801Z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        Whatsup
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>
</section>
<!-- End grid -->


@endsection


