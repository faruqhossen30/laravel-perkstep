@php
    use App\Models\Faq;
    $faqs = Faq::all();
@endphp
<section>
    <div class="container mx-auto py-6 space-y-3 lg:py-24 lg:px-12 xl:px-24 2xl:px-24">
        <div class="space-y-6 lg:py-10">
            <h2 class="text-center text-2xl sm:text-3xl md:text-4xl 2xl:text-5xl font-bold text-gray-800">
                Our General Questions & Answers
            </h2>
        </div>
        <div class="grid grid-cols-12 lg:gap-12">
            <div class="col-span-12 lg:col-span-6">
                <div class="hs-accordion-group space-y-3">
                    @foreach ($faqs as $key=>$faq)
                        <div class="hs-accordion bg-[#F2FBF8] border-green-500 border rounded-xl"
                            id="hs-active-bordered-heading-{{ $faq->id }}">
                            <button
                                class="hs-accordion-toggle inline-flex justify-between items-center gap-x-3 w-full font-bold text-start text-gray-800 text-[20px] py-4 px-5 hover:text-gray-500 disabled:opacity-50 disabled:pointer-events-none"
                                aria-expanded="false" aria-controls="hs-basic-active-bordered-collapse-{{ $faq->id }}">
                                {{ $faq->question }}
                                <svg class="hs-accordion-active:hidden block size-3.5"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14"></path>
                                    <path d="M12 5v14"></path>
                                </svg>
                                <svg class="hs-accordion-active:block hidden size-3.5"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14"></path>
                                </svg>
                            </button>
                            <div id="hs-basic-active-bordered-collapse-{{ $faq->id }}"
                                class="hs-accordion-content  @if ($key != 1) hidden @endif w-full overflow-hidden transition-[height] duration-300"
                                role="region" aria-labelledby="hs-active-bordered-heading-{{ $faq->id }}">
                                <div class="pb-4 px-5">
                                    <p class="text-gray-900  ">
                                        {{ $faq->answer }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-span-6 hidden lg:block 2xl:block">
                <div>
                    <img src="{{ asset('img/faqimage.png') }}" alt="FAQ Image" />
                </div>
            </div>
        </div>
    </div>
</section>
