@php
    use App\Models\Review;
    $reviews = Review::get();
@endphp


<section>
    <div class="container mx-auto">
        <div class="py-24 space-y-6">
            {{-- <h6 class="text-center uppercase font-bold text-[#01C778]">Clients review</h6> --}}
            <h2 class="text-center text-5xl text-gray-800 font-bold">Read Our Respectable <br> Client Reviews </h2>
            <div id="clientreview" class="owl-carousel owl-theme grid grid-cols-12 gap-6 ">
                @foreach ($reviews as $review)
                    <div class="col-span-4  group ">
                        <div class=" text-center ">

                            <img src="{{ asset('storage/' . $review->thumbnail) }}"
                                class=" max-w-20 min-h-20 max-h-20  rounded-full" alt="">

                            <div
                                class=" mt-2 mx-5 text-center w-0 h-0 border-[25px]  border-transparent  group-hover:border-b-[#01C778] border-b-[#F8F8F8] border-t-0 ">
                            </div>
                        </div>
                        <div class="group bg-[#F8F8F8] p-6 rounded group-hover:bg-[#01C778] group-hover:text-white">

                            <div class="flex group-hover:text-white filter-white ">
                                <img src="{{ asset('img/Vectorcoma.png') }}" class="text-white max-w-6" srcset="">
                                <img src="{{ asset('img/Vectorcoma.png') }}" class="text-white max-w-6" srcset="">
                            </div>
                            <div class="flex text-yellow-400 py-6">
                                @for ($i = 1; $i <= $review->rating; $i++)
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="size-6">
                                        <path fill-rule="evenodd"
                                            d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                @endfor
                            </div>
                            <div class="text-lg ">

                                <p class=" font-normal  leading-[26px]">{!! $review->review !!}</p>
                            </div>

                            <div class="py-6">
                                <h4 class="text-[22px] text-gray-800 font-bold">{{ $review->name }}</h4>
                                <h6 class=" text-sm">{{ $review->designation }}</h6>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>

    </div>
</section>


{{-- @push('styles')
    <style>
        .filter-white {
            filter: brightness(0) invert(1);
        }
    </style>
@endpush --}}
