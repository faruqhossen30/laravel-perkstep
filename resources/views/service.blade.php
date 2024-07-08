
@php
    use App\Models\service;
    $services = Service::all();
@endphp

<section class="bg-gray-100">
    <div class="container mx-auto  p-6">
        <p class="text-[#01C778] text-sm  font-semibold  uppercase py-5">our services</p>
        <h2 class="text-[44px] font-semibold">How SEO London Services <br> Can Work for you</h2>
        <div id="servicesslider" class="flex  owl-carousel owl-theme space-x-4 py-6">


            @foreach ($services as $service )

            <div class="bg-gray-50 p-4 space-y-4 rounded-lg hover:bg-white group">

                <div class=" bg-[#FFF6EB]  p-5   inline-flex items-center justify-center rounded-full">
                    <img src="{{ asset('storage/'.$service->thumbnail) }}" class="h-8 w-8" alt="" srcset="">
                </div>

                <h3 class="text-2xl font-semibold">{{$service->title}}</h3>

                <div class="">
                    <p>   <?php echo substr($service->description, 0, 200); ?></p>
                </div>

                <a href="#" class="flex items-center px-2 group-hover:text-[#01C778]">
                    <p>Learn More</p>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>

                </a>
            </div>
            @endforeach

            {{-- <div class="bg-gray-50 p-4 space-y-4 rounded-lg hover:bg-white group">

                <div class=" bg-[#FFF6EB]  p-5   inline-flex items-center justify-center rounded-full">
                    <img src="{{ asset('img/Vector.png') }}" class="" alt="" srcset="">
                </div>

                <h3 class="text-2xl font-semibold">Manage Referral</h3>

                <div class="">
                    <p>e help home healthcare agencies thrive online through local SEO services. This includes optimizing their Google My Business profile, developing a local
                        content strategy, and securing top ranking in local search results (the local pack).</p>
                </div>

                <a href="#" class="flex items-center px-2 group-hover:text-[#01C778]">
                    <p>Learn More</p>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>

                </a>
            </div>

            <div class="bg-gray-50 p-4 space-y-4 rounded-lg hover:bg-white group">

                <div class=" bg-[#FFF6EB]  p-5   inline-flex items-center justify-center rounded-full">
                    <img src="{{ asset('img/Vector.png') }}" class="" alt="" srcset="">
                </div>

                <h3 class="text-2xl font-semibold">Sales Automation</h3>

                <div class="">
                    <p>e help home healthcare agencies thrive online through local SEO services. This includes optimizing their Google My Business profile, developing a local
                        content strategy, and securing top ranking in local search results (the local pack).</p>
                </div>

                <a href="#" class="flex items-center px-2 group-hover:text-[#01C778]">
                    <p>Learn More</p>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>

                </a>
            </div> --}}
        </div>

    </div>
</section>
