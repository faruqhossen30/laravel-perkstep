@php
    use App\Models\Faq;
    $faqs = Faq::all();
@endphp
<section>
    <div class="container  mx-auto py-24 lg:px-12 xl:px-24 2xl:px-24">
        <div class=" space-y-6 py-10">

            {{-- <h6 class="text-center uppercase text-[#01C778] font-bold ">Read FAQS</h6> --}}
            <h2 class=" text-center text-3xl sm:text-3xl md:text-4xl 2xl:text-5xl 2xl:font-bold text-gray-800  font-semibold">Our General Questions <br>Answers</h2>
        </div>
        <div class="grid grid-cols-12 lg:gap-12">
            <div class="col-span-12 sm:col-span-12 md:col-span-12 lg:col-span-6 space-y-3">
                <div id="accordion-collapse" data-accordion="collapse" data-active-classes=" bg-transparent"  class="space-y-4" >
                    @foreach ($faqs as $key => $faq)
                        <div class="bg-[#F2FBF8] border rounded-lg border-green-500 p-4 space-y-4">
                            <h6 id="accordion-collapse-heading-{{ $faq->id }}" >
                                <button type="button" class="flex justify-between text-[20px] font-bold w-full"
                                    data-accordion-target="#accordion-collapse-body-{{ $faq->id }}" aria-expanded="true"
                                    aria-controls="accordion-collapse-body-{{ $faq->id }}">
                                    <span>{{ $faq->question }}</span>
                                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                                    </svg>
                                </button>
                            </h6>
                            <p id="accordion-collapse-body-{{ $faq->id }}" class="@if ($key != 2) hidden  @endif"
                                aria-labelledby="accordion-collapse-heading-{{ $faq->id }}">{{ $faq->answer }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-span-6 hidden lg:block xl:block 2xl-block">
                <div class="">
                    <img src="{{ asset('img/faqimage.png') }}" alt="" srcset="">
                </div>
            </div>
        </div>
    </div>
</section>


