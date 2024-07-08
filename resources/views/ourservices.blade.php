
@php
    use App\Models\Blog;
    $blogs = Blog::get();
@endphp
<section class="bg-gray-100 py-24">
    <div class="container mx-auto">
        <h6 class="text-center uppercase text-[#01C778] font-bold">our blog</h6>
        <h2 class="text-center text-5xl  font-semibold leading-[56px]">How SEO London Services <br> Can Work for you</h2>
        <div id="ourservice" class="owl-carousel owl-theme grid grid-cols-12 gap-6 py-10">
            @foreach (  $blogs as   $blog)
            <div class="col-span-4">
                <div class="bg-white hover:bg-[#01C778] p-6 border rounded-lg space-y-6 group">
                    <div class="">
                        <img src="{{ asset('storage/'.$blog->thumbnail) }}" alt="" srcset="">
                    </div>
                    <div class="">
                        <ul class="flex items-center space-y-1 text-gray-800 list-disc list-inside dark:text-gray-800 space-x-3">
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
    </div>
</section>
