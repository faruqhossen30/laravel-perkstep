@php
    use App\Models\Service;
    $services = Service::get();
@endphp

<section class="bg-gray-100">
    <div class="container mx-auto ">

        <h2 class="text-3xl sm:text-4xl sm:px-12 md:px-28 2xl:text-5xl 2xl:font-bold font-bold text-black text-center font-manrope  leading-8  lg:py-16 py-6">How SEO London Services Can Work for you</h2>

        {{-- <div id="servicesslider" class="flex  owl-carousel owl-theme space-x-4 py-6">
                <div class="grid grid-cols-12">
                @foreach ($services as $service)
                <div class="bg-gray-50 p-4 space-y-4 rounded-lg hover:bg-white group">
                        <div class="col-span-12">

                        <div class=" bg-[#01C77814]  p-2   inline-flex items-center justify-center rounded-full">
                            <img src="{{ asset('storage/' . $service->thumbnail) }}" class="h-16 w-16" alt=""
                                srcset="">
                        </div>

                        <h3 class="text-2xl font-semibold">{{ $service->title }}</h3>

                        <div class="text-xl">
                            <p class=""> {!! $service->description !!}</p>
                        </div>

                        <a href="{{ route('service.page', $service->id) }}"
                            class="flex items-center px-2 group-hover:text-[#01C778]">
                            <p>Learn More</p>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-4">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                            </svg>

                        </a>
                    </div>
                </div>
                @endforeach


            </div>
        </div> --}}

        <div id="servicesslider"  class=" owl-carousel owl-theme grid grid-cols-12 sm:px-6 md:px-0 lg:px-6 xl:px-20 lg:gap-6">
            @foreach ($services as $service)
            <div  class="  sm:col-span-12 md:col-span-6   py-10">

                <div class="bg-white space-y-4 rounded-xl  py-12 px-6 shadow-xl">

                    <div class="">
                        <div class=" bg-[#01C77814] hover:bg-[#01C778]   inline-flex items-center justify-center rounded-full">
                            <img src="{{ asset('storage/' . $service->thumbnail) }}" class="h-20 w-20 p-1" alt="" srcset="">
                        </div>
                    </div>

                    <h3 class="text-3xl font-bold font-manrope leading-[40px]">{{ $service->title }}</h3>

                    <div class="text-base  font-medium font-manrope">
                        <p class=""> {!! $service->description !!}</p>
                    </div>

                    <a href="{{ route('service.page', $service->id) }}"
                        class="flex items-center group">
                        <p class="group-hover:text-[#01C778] font-medium font-manrope">Learn More</p>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="size-4 group-hover:text-[#01C778]">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                        </svg>

                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
