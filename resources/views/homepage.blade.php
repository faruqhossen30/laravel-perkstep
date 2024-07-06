@extends('layouts.app')

@section('content')
    <!---header section start-------->


    <div class="container mx-auto py-3">
        <nav class="bg-gray-100 border-gray-200 rounded-lg ">
            <div class="container mx-auto flex flex-wrap items-center justify-between p-4">
                <a href="{{ route('homepage') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <img src="{{ asset('img/perkspep.png') }}" alt="" class="h-12">
                </a>
                <div class="flex md:order-2">
                    <button type="button" data-collapse-toggle="navbar-search" aria-controls="navbar-search" aria-expanded="false"
                        class="md:hidden text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5 me-1">

                    </button>
                    <a class="group py-2 px-5 hidden md:inline-flex justify-center items-center gap-x-1 text-start bg-[#01C778] border border-[#01C778] text-white ext-sm font-medium rounded-full shadow-sm align-middle hover:bg-[#01C778] focus:outline-none focus:bg-[#01C778]"
                        href="../pro/pricing.html">
                        Book a Meeting

                    </a>
                    <button data-collapse-toggle="navbar-search" type="button"
                        class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                        aria-controls="navbar-search" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                        </svg>
                    </button>
                </div>
                <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-search">

                    <ul
                        class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg  md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0    dark:border-gray-700">
                        <li>
                            <a href="{{ route('homepage') }}" class="hover:text-brand text-brand " aria-current="page">Home</a>
                        </li>
                        <li>
                            <a href="#aboutussection" class="text-gray-800  hover:border-b-2 ">Home</a>
                        </li>
                        <li>
                            <a href="#benifitessection" class="text-gray-800  hover:border-b-2 ">About</a>
                        </li>


                        <li>
                            <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                                class="flex items-center justify-between w-full py-2 px-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-gray-400 dark:hover:text-white dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">Portfolio
                                <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg></button>
                            <!-- Dropdown menu -->
                            <div id="dropdownNavbar" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownLargeButton">
                                    <li>
                                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                                class="flex items-center justify-between w-full py-2 px-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-gray-400 dark:hover:text-white dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">Services
                                <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg></button>
                            <!-- Dropdown menu -->
                            <div id="dropdownNavbar" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownLargeButton">
                                    <li>
                                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="#contactsection" class="text-gray-800  hover:border-b-2  ">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <!---header section end-------->


    <!----------hero section start------->

    <section>
        <div class="container mx-auto bg-green-800">
            <div class="flex justify-center py-12 ">
                <p class="border border-dashed border-green-500 border-bold  rounded-full p-3 text-white   font-light px-8">👋 Hey there! Were Perkstep</p>

            </div>
            <h1 class="text-center text-white  text-7xl font-bold "><span class="text-[#01C778] ">Home Care SEO</span> - More Traffic, <br> More Leads & More Sales</h1>

            <p class="text-center text-white py-6 ">We are best health  homecare SEO agency in London and specializes in solving health and home care SEO challenges to <br> boost your
                online visibility, attract more customers, and drive business growth.</p>


            <div class="flex justify-center pt-2 pb-72">
                <a class=" inline-flex justify-center items-center  bg-[#01C778] text-white rounded-full py-3  space-x-1 px-4" href="#">
                    <span>Get Started Now</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                </a>
            </div>
        </div>
    </section>
    <!----------hero section End--------->


    <section>
        <div class="container mx-auto">
            <div class="flex justify-center -mt-48 ">
                <img src="{{ asset('img/Rectangle 5.png') }}" width="900px" height="646px" srcset="">
            </div>

            <p class="text-center text-[#01C778] font-semibold py-8">Worked with 100+ clients around the world including</p>
        </div>
    </section>

    <section>
        <div class="container mx-auto">
            <div class="flex space-x-3 py-10">
                <img src="{{ asset('img/Group 115.png') }}" alt="" srcset="">
                <img src="{{ asset('img/Group 115.png') }}" alt="" srcset="">
                <img src="{{ asset('img/Group 115.png') }}" alt="" srcset="">
                <img src="{{ asset('img/Group 115.png') }}" alt="" srcset="">
                <img src="{{ asset('img/Group 115.png') }}" alt="" srcset="">
                <img src="{{ asset('img/Group 115.png') }}" alt="" srcset="">
            </div>
        </div>
    </section>


    <section class="bg-gray-100">
        <div class="container mx-auto  p-6">
            <p class="text-[#01C778]  font-semibold  uppercase py-5">our services</p>
            <h2 class="text-4xl font-semibold">How SEO London Services <br> Can Work for you</h2>
            <div class="flex  space-x-4 py-6">

                <div class="bg-gray-50 p-4 space-y-4 rounded-lg hover:bg-white group">

                    <div class=" bg-[#FFF6EB]  p-5   inline-flex items-center justify-center rounded-full">
                        <img src="{{ asset('img/Vector.png') }}" class="" alt="" srcset="">
                    </div>

                    <h3 class="text-2xl font-semibold">Local SEO</h3>

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
                </div>
            </div>

        </div>
    </section>

    <section>
        <div class="container mx-auto">
            <div class="grid grid-cols-12 py-24">
                <div class="col-span-6">
                    <div class="">
                        <img src="{{ asset('img/Group 965.png') }}" alt="" srcset="">
                    </div>
                </div>
                <div class="col-span-6">
                    <div class="py-6">
                        <div class=" space-y-6">
                            <h5 class=" uppercase text-[#01C778] font-bold">About US</h5>
                            <h2 class="text-5xl font-bold">Feel Your Success with Our homecare SEO Company in London</h2>
                            <p class="text-base font-normal ">Multiple factors contribute to successful online search results. PerkStep ensures your homecare agency ranks prominently
                                in local listings and map searches,
                                making it easier to find you on Google and Bing.</p>
                            <p class="text-base font-normal">Our London-based SEO team implements powerful strategies to keep you ahead of the local competition. Furthermore, our
                                comprehensive social media strategy
                                fosters brand awareness and engagement, attracting potential clients and keeping your business thriving.</p>
                            <a href="#" class="inline-flex  items-center rounded-full text-white px-4 py-3 bg-[#01C778] ">
                                <p>Learn More</p>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                                </svg>

                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="bg-[#102830]">
        <div class="container mx-auto">
            <div class="grid grid-cols-12 py-24 gap-28">
                <div class="col-span-6">
                    <div class=" space-y-6">
                        <h6 class=" uppercase text-[#01C778] font-bold">Why Chose US</h6>
                        <h3 class="text-5xl text-white font-bold">#No1 Home care SEO agency in London.</h3>
                        <p class="text-base font-normal text-white">At PerkStep, we specialize in SEO, local SEO, PPC, digital PR, link building, and social media marketing
                            exclusively for the homecare industry. Our relentless focus on keywords, content, PR, outreach, and ever-evolving algorithms ensures success for our
                            clients’ businesses.</p>
                        <p class="text-base font-normal text-white">Our talented London-based team brings enthusiasm and deep SEO expertise to the table. We’re committed to continuous
                            learning, allowing us to implement the latest strategies for our clients. We adhere to global standards across organic and paid marketing initiatives.
                            PerkStep prioritizes client ROI and delivers tangible</p>

                        <a href="#" class="inline-flex  items-center rounded-full text-white px-8 py-3 bg-[#01C778] ">
                            <p>Learn More</p>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                            </svg>

                        </a>
                    </div>
                </div>
                <div class="col-span-6">
                    <div class="">
                        <img src="{{ asset('img/whychose.png') }}" alt="" srcset="">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section>
        <div class="container mx-auto">
            <div class="py-24 space-y-6">
                <h6 class="text-center uppercase font-bold text-[#01C778]">Clients review</h6>
                <h2 class="text-center text-5xl font-bold">Read Our Respectable <br> Client Reviews </h2>
                <div class="grid grid-cols-12 gap-6">
                    <div class="col-span-4 space-y-6 ">
                        <img src="{{ asset('img/Rectangle 352.png') }}" alt="">
                        <div class=" space-y-6 bg-gray-100 p-6 rounded hover:bg-[#01C778] hover:text-white">

                            <div class="flex hover:text-white">
                                <img src="{{ asset('img/Vectorcoma.png') }}" class="text-white" alt="" srcset="">
                                <img src="{{ asset('img/Vectorcoma.png') }}" class="text-white" alt="" srcset="">
                            </div>
                            <div class="flex text-yellow-400">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                                    <path fill-rule="evenodd"
                                        d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                        clip-rule="evenodd" />
                                </svg>

                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                                    <path fill-rule="evenodd"
                                        d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                        clip-rule="evenodd" />
                                </svg>

                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                                    <path fill-rule="evenodd"
                                        d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                        clip-rule="evenodd" />
                                </svg>

                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                                    <path fill-rule="evenodd"
                                        d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                        clip-rule="evenodd" />
                                </svg>

                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                                    <path fill-rule="evenodd"
                                        d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                        clip-rule="evenodd" />
                                </svg>

                            </div>
                            <p class=" font-normal text-base  leading-[26px]">"Daily is the tool every SaaS founder has been waiting for. It allows SaaS companies to grow without
                                dilu. Lorem for our the ipsum dolor sit amet consectetur inside the adipiscing elit ipsum dolor sipsum. ”</p>

                            <div class="">
                                <h4 class="text-[22px] font-bold">Orlando Diggs</h4>
                                <h6 class=" text-sm">Marketing, Layers</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-4 space-y-6 ">
                        <img src="{{ asset('img/Rectangle 352.png') }}" alt="">
                        <div class=" space-y-6 bg-gray-100 p-6 rounded hover:bg-[#01C778] hover:text-white">

                            <div class="flex hover:text-white">
                                <img src="{{ asset('img/Vectorcoma.png') }}" class="text-white" alt="" srcset="">
                                <img src="{{ asset('img/Vectorcoma.png') }}" class="text-white" alt="" srcset="">
                            </div>
                            <div class="flex text-yellow-400">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                                    <path fill-rule="evenodd"
                                        d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                        clip-rule="evenodd" />
                                </svg>

                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                                    <path fill-rule="evenodd"
                                        d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                        clip-rule="evenodd" />
                                </svg>

                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                                    <path fill-rule="evenodd"
                                        d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                        clip-rule="evenodd" />
                                </svg>

                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                                    <path fill-rule="evenodd"
                                        d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                        clip-rule="evenodd" />
                                </svg>

                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                                    <path fill-rule="evenodd"
                                        d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                        clip-rule="evenodd" />
                                </svg>

                            </div>
                            <p class=" font-normal text-base  leading-[26px]">"Daily is the tool every SaaS founder has been waiting for. It allows SaaS companies to grow without
                                dilu. Lorem for our the ipsum dolor sit amet consectetur inside the adipiscing elit ipsum dolor sipsum. ”</p>

                            <div class="">
                                <h4 class="text-[22px] font-bold">Orlando Diggs</h4>
                                <h6 class=" text-sm">Marketing, Layers</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-4 space-y-6 ">
                        <img src="{{ asset('img/Rectangle 352.png') }}" alt="">
                        <div class=" space-y-6 bg-gray-100 p-6 rounded hover:bg-[#01C778] hover:text-white">

                            <div class="flex hover:text-white">
                                <img src="{{ asset('img/Vectorcoma.png') }}" class="text-white" alt="" srcset="">
                                <img src="{{ asset('img/Vectorcoma.png') }}" class="text-white" alt="" srcset="">
                            </div>
                            <div class="flex text-yellow-400">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                                    <path fill-rule="evenodd"
                                        d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                        clip-rule="evenodd" />
                                </svg>

                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                                    <path fill-rule="evenodd"
                                        d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                        clip-rule="evenodd" />
                                </svg>

                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                                    <path fill-rule="evenodd"
                                        d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                        clip-rule="evenodd" />
                                </svg>

                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                                    <path fill-rule="evenodd"
                                        d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                        clip-rule="evenodd" />
                                </svg>

                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                                    <path fill-rule="evenodd"
                                        d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                        clip-rule="evenodd" />
                                </svg>

                            </div>
                            <p class=" font-normal text-base  leading-[26px]">"Daily is the tool every SaaS founder has been waiting for. It allows SaaS companies to grow without
                                dilu. Lorem for our the ipsum dolor sit amet consectetur inside the adipiscing elit ipsum dolor sipsum. ”</p>

                            <div class="">
                                <h4 class="text-[22px] font-bold">Orlando Diggs</h4>
                                <h6 class=" text-sm">Marketing, Layers</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <section class="bg-gray-100 rounded-lg">
        <div class="container mx-auto py-24">
            <div class="grid grid-cols-12">
                <div class="col-span-6">
                    <div class="">
                        <img src="{{ asset('img/our mission.png') }}" alt="">
                    </div>
                </div>
                <div class="col-span-6 py-10">
                    <div class=" space-y-6">
                        <h6 class="uppercase text-[#01C778] font-bold">Our Mission</h6>
                        <h1 class="text-5xl  font-bold">Feel Your Success with Our homecare SEO Company in London</h1>
                        <p class="text-base font-normal font- leading-[26x]">Multiple factors contribute to successful online search results. PerkStep ensures your homecare agency
                            ranks prominently in local listings and map searches, making it easier to find you on Google and Bing.</p>
                        <p class="text-base font-normal leading-[26x]">Our London-based SEO team implements powerful strategies to keep you ahead of the local competition.
                            Furthermore, our comprehensive social media strategy fosters brand awareness and engagement, attracting potential clients and keeping your business
                            thriving.</p>

                        <a href="#" class="inline-flex  items-center rounded-full text-white px-4 py-3 bg-[#01C778] ">
                            <p>Learn More</p>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                            </svg>

                        </a>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container  mx-auto py-24">
            <div class=" space-y-6 py-10">

                <h6 class="text-center uppercase text-[#01C778] font-bold ">Read FAQS</h6>
                <h2 class=" text-center text-5xl  font-semibold">Our General Questions <br>Answers</h2>
            </div>
            <div class="grid grid-cols-12 gap-12">
                <div class="col-span-6">

                    {{-- <div class="hs-accordion-group">
                        <div class="hs-accordion hs-accordion-active:bg-gray-100 rounded-xl p-6 dark:hs-accordion-active:bg-white/10 active"
                            id="hs-basic-with-title-and-arrow-stretched-heading-one">
                            <button class="hs-accordion-toggle group pb-3 inline-flex items-center justify-between gap-x-3 w-full md:text-lg font-semibold text-start text-gray-800 rounded-lg transition hover:text-gray-500 dark:text-neutral-200 dark:hover:text-neutral-400"
                                aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-one">
                                Can I cancel at anytime?
                                <svg class="hs-accordion-active:hidden block flex-shrink-0 size-5 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="m6 9 6 6 6-6" />
                                </svg>
                                <svg class="hs-accordion-active:block hidden flex-shrink-0 size-5 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="m18 15-6-6-6 6" />
                                </svg>
                            </button>
                            <div id="hs-basic-with-title-and-arrow-stretched-collapse-one" class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
                                aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-one">
                                <p class="text-gray-800 dark:text-neutral-200">
                                    Yes, you can cancel anytime no questions are asked while you cancel but we would highly appreciate if you will give us some feedback.
                                </p>
                            </div>
                        </div>



                    </div> --}}

                    <div id="accordion-collapse" data-accordion="collapse">

                        <div class="bg-[#F2FBF8] border-2 rounded-lg border-green-500 p-4 space-y-4">

                            <h6 id="accordion-collapse-heading-1">

                                <button class="flex justify-between text-[20px] font-bold w-full">
                                    <span>What is your security policy ?</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                                        <path fill-rule="evenodd" d="M4.25 12a.75.75 0 0 1 .75-.75h14a.75.75 0 0 1 0 1.5H5a.75.75 0 0 1-.75-.75Z" clip-rule="evenodd" />
                                    </svg>
                                </button>


                            </h6>
                            <p>Safety is our top priority. We ensure qualified instructors oversee all activities, maintain small group sizes for personalized attention hosting plans
                                for sanitation.</p>
                        </div>
                    </div>




                    <div id="accordion-collapse" data-accordion="collapse">
                        <h2 id="accordion-collapse-heading-1">
                            <button type="button"
                                class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                                data-accordion-target="#accordion-collapse-body-1" aria-expanded="true" aria-controls="accordion-collapse-body-1">
                                <span>What is Flowbite?</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-collapse-body-1" class="hidden" aria-labelledby="accordion-collapse-heading-1">
                            <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                                <p class="mb-2 text-gray-500 dark:text-gray-400">Flowbite is an open-source library of interactive components built on top of Tailwind CSS including
                                    buttons, dropdowns, modals, navbars, and more.</p>
                                <p class="text-gray-500 dark:text-gray-400">Check out this guide to learn how to <a href="/docs/getting-started/introduction/"
                                        class="text-blue-600 dark:text-blue-500 hover:underline">get started</a> and start developing websites even faster with components on top of
                                    Tailwind CSS.</p>
                            </div>
                        </div>



                    </div>

                </div>
                <div class="col-span-6">
                    <div class="">
                        <img src="{{ asset('img/faqimage.png') }}" alt="" srcset="">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="bg-gray-100 py-24">
        <div class="container mx-auto">
            <h6 class="text-center uppercase text-[#01C778] font-bold">our services</h6>
            <h2 class="text-center text-5xl  font-semibold leading-[56px]">How SEO London Services <br> Can Work for you</h2>
            <div class="grid grid-cols-12 gap-6 py-10">
                <div class="col-span-4">
                    <div class="bg-white hover:bg-[#01C778] p-6 border rounded-lg space-y-6 group">
                        <div class="">
                            <img src="{{ asset('img/services.png') }}" alt="" srcset="">
                        </div>
                        <div class="">
                            <ul class="flex items-center space-y-1 text-gray-800 list-disc list-inside dark:text-gray-800 space-x-3">
                                <p class="text-[17.5px] font-medium  group-hover:text-white">By Admin</p>
                                <li class="text-[17px] group-hover:text-white">
                                    6 min read
                                </li>
                            </ul>
                            <h3 class="text-[22px] font-bold group-hover:text-white">Optimize Google Map SEO For Your Home Care Service</h3>
                        </div>
                        <div class="">
                            <a href="#" class=" space-x-2">
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
                <div class="col-span-4">
                    <div class="bg-white hover:bg-[#01C778] p-6 border rounded-lg space-y-6 group">
                        <div class="">
                            <img src="{{ asset('img/services.png') }}" alt="" srcset="">
                        </div>
                        <div class="">
                            <ul class="flex items-center space-y-1 text-gray-800 list-disc list-inside dark:text-gray-800 space-x-3">
                                <p class="text-[17.5px] font-medium  group-hover:text-white">By Admin</p>
                                <li class="text-[17px] group-hover:text-white">
                                    6 min read
                                </li>
                            </ul>
                            <h3 class="text-[22px] font-bold group-hover:text-white">Optimize Google Map SEO For Your Home Care Service</h3>
                        </div>
                        <div class="">
                            <a href="#" class=" space-x-2">
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
                <div class="col-span-4">
                    <div class="bg-white hover:bg-[#01C778] p-6 border rounded-lg space-y-6 group">
                        <div class="">
                            <img src="{{ asset('img/services.png') }}" alt="" srcset="">
                        </div>
                        <div class="">
                            <ul class="flex items-center space-y-1 text-gray-800 list-disc list-inside dark:text-gray-800 space-x-3">
                                <p class="text-[17.5px] font-medium  group-hover:text-white">By Admin</p>
                                <li class="text-[17px] group-hover:text-white">
                                    6 min read
                                </li>
                            </ul>
                            <h3 class="text-[22px] font-bold group-hover:text-white">Optimize Google Map SEO For Your Home Care Service</h3>
                        </div>
                        <div class="">
                            <a href="#" class=" space-x-2">
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
            </div>
        </div>
    </section>


    <section>
        <div class="container mx-auto">
            <div class="py-24">
                <h6 class="text-center uppercase text-[#01C778] font-bold">Work with us</h6>
                <h2 class="text-center text-5xl  font-semibold leading-[56px]">Have a project in mind? <br>
                    Let’s get to work</h2>

                <div class="flex justify-center py-10">

                    <a href="#" class="inline-flex items-center justify-center bg-[#01C778] text-white font-semibold px-6 py-3 rounded-full space-x-3">
                        <p>Contact Us Now</p>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4 group-hover:text-white">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-[#0F291F]">
        <div class="border-b border-green-700">
            <div class="container mx-auto grid grid-cols-12 divide-x  divide-green-700  ">

                <div class="col-span-4 ">
                    <div class="flex items-center space-x-6 py-6 ">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class=" h-20 w-20 rounded-full text-[#01C778] bg-[#0C4931] p-6">
                            <path fill-rule="evenodd"
                                d="m11.54 22.351.07.04.028.016a.76.76 0 0 0 .723 0l.028-.015.071-.041a16.975 16.975 0 0 0 1.144-.742 19.58 19.58 0 0 0 2.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 0 0-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 0 0 2.682 2.282 16.975 16.975 0 0 0 1.145.742ZM12 13.5a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"
                                clip-rule="evenodd" />
                        </svg>
                        <div class="">
                            <p class="text-white">Location</p>
                            <span class="text-white text-xl font-bold"> 292 Archer Rd, London UK</span>
                        </div>
                    </div>
                </div>

                <div class="col-span-4 ">
                    <div class="flex items-center space-x-6 py-6 px-6 ">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class=" h-20 w-20 rounded-full text-[#01C778] bg-[#0C4931] p-6">
                            <path fill-rule="evenodd"
                                d="m11.54 22.351.07.04.028.016a.76.76 0 0 0 .723 0l.028-.015.071-.041a16.975 16.975 0 0 0 1.144-.742 19.58 19.58 0 0 0 2.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 0 0-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 0 0 2.682 2.282 16.975 16.975 0 0 0 1.145.742ZM12 13.5a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"
                                clip-rule="evenodd" />
                        </svg>
                        <div class="">
                            <p class="text-white">Location</p>
                            <span class="text-white text-xl font-bold"> 292 Archer Rd, London UK</span>
                        </div>
                    </div>
                </div>

                <div class="col-span-4 ">
                    <div class="flex items-center space-x-6 py-6  px-6">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class=" h-20 w-20 rounded-full text-[#01C778] bg-[#0C4931] p-6">
                            <path fill-rule="evenodd"
                                d="m11.54 22.351.07.04.028.016a.76.76 0 0 0 .723 0l.028-.015.071-.041a16.975 16.975 0 0 0 1.144-.742 19.58 19.58 0 0 0 2.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 0 0-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 0 0 2.682 2.282 16.975 16.975 0 0 0 1.145.742ZM12 13.5a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"
                                clip-rule="evenodd" />
                        </svg>
                        <div class="">
                            <p class="text-white">Location</p>
                            <span class="text-white text-xl font-bold"> 292 Archer Rd, London UK</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="border-b border-green-800">

            <div class="container mx-auto py-5 ">
                <div class="grid grid-cols-12">
                    <div class="col-span-4  space-y-6">
                        <div class="bg-white inline-block p-3 rounded">
                            <img src="{{ asset('img/perkspep.png') }}" alt="">
                        </div>
                        <p class="text-white">
                            Welcome to PerkStep, your London-based SEO agency specializing in helping home care services shine online.
                        </p>
                        <div class="flex items-center space-x-4">
                            <svg class="w-14 h-14 p-4 hover:bg-[#01c778] border rounded-full text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M13.135 6H15V3h-1.865a4.147 4.147 0 0 0-4.142 4.142V9H7v3h2v9.938h3V12h2.021l.592-3H12V6.591A.6.6 0 0 1 12.592 6h.543Z"
                                    clip-rule="evenodd" />
                            </svg>
                            <svg class="w-14 h-14 p-4 hover:bg-[#01c778] border rounded-full text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M13.795 10.533 20.68 2h-3.073l-5.255 6.517L7.69 2H1l7.806 10.91L1.47 22h3.074l5.705-7.07L15.31 22H22l-8.205-11.467Zm-2.38 2.95L9.97 11.464 4.36 3.627h2.31l4.528 6.317 1.443 2.02 6.018 8.409h-2.31l-4.934-6.89Z" />
                            </svg>

                            <svg class="w-14 h-14 p-4 hover:bg-[#01c778] border rounded-full text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd"
                                    d="M12.51 8.796v1.697a3.738 3.738 0 0 1 3.288-1.684c3.455 0 4.202 2.16 4.202 4.97V19.5h-3.2v-5.072c0-1.21-.244-2.766-2.128-2.766-1.827 0-2.139 1.317-2.139 2.676V19.5h-3.19V8.796h3.168ZM7.2 6.106a1.61 1.61 0 0 1-.988 1.483 1.595 1.595 0 0 1-1.743-.348A1.607 1.607 0 0 1 5.6 4.5a1.601 1.601 0 0 1 1.6 1.606Z"
                                    clip-rule="evenodd" />
                                <path d="M7.2 8.809H4V19.5h3.2V8.809Z" />
                            </svg>
                            <svg class="w-14 h-14 p-4 hover:bg-[#01c778] border rounded-full text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd"
                                    d="M21.7 8.037a4.26 4.26 0 0 0-.789-1.964 2.84 2.84 0 0 0-1.984-.839c-2.767-.2-6.926-.2-6.926-.2s-4.157 0-6.928.2a2.836 2.836 0 0 0-1.983.839 4.225 4.225 0 0 0-.79 1.965 30.146 30.146 0 0 0-.2 3.206v1.5a30.12 30.12 0 0 0 .2 3.206c.094.712.364 1.39.784 1.972.604.536 1.38.837 2.187.848 1.583.151 6.731.2 6.731.2s4.161 0 6.928-.2a2.844 2.844 0 0 0 1.985-.84 4.27 4.27 0 0 0 .787-1.965 30.12 30.12 0 0 0 .2-3.206v-1.516a30.672 30.672 0 0 0-.202-3.206Zm-11.692 6.554v-5.62l5.4 2.819-5.4 2.801Z"
                                    clip-rule="evenodd" />
                            </svg>

                        </div>
                    </div>
                    <div class="col-span-2">
                        <h4 class="text-2xl text-white pb-3">Services</h4>
                        <div class="flex items-center  space-x-3 hover:text-green-500 group ">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-6 w-6 ">
                                <path fill-rule="evenodd" d="M16.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 0 1 1.06-1.06l7.5 7.5Z"
                                    clip-rule="evenodd" />
                            </svg>
                            <p class="text-base text-white group-hover:text-green-500 font-medium">Local SEO</p>
                        </div>
                        <div class="flex items-center  space-x-3 hover:text-green-500 group ">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-6 w-6 ">
                                <path fill-rule="evenodd" d="M16.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 0 1 1.06-1.06l7.5 7.5Z"
                                    clip-rule="evenodd" />
                            </svg>
                            <p class="text-base text-white group-hover:text-green-500 font-medium">Paid Ads</p>
                        </div>
                        <div class="flex items-center  space-x-3 hover:text-green-500 group ">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-6 w-6 ">
                                <path fill-rule="evenodd" d="M16.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 0 1 1.06-1.06l7.5 7.5Z"
                                    clip-rule="evenodd" />
                            </svg>
                            <p class="text-base text-white group-hover:text-green-500 font-medium">Social Media</p>
                        </div>
                        <div class="flex items-center  space-x-3 hover:text-green-500 group ">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-6 w-6 ">
                                <path fill-rule="evenodd" d="M16.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 0 1 1.06-1.06l7.5 7.5Z"
                                    clip-rule="evenodd" />
                            </svg>
                            <p class="text-base text-white group-hover:text-green-500 font-medium">Backlink</p>
                        </div>
                        <div class="flex items-center  space-x-3 hover:text-green-500 group ">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-6 w-6 ">
                                <path fill-rule="evenodd" d="M16.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 0 1 1.06-1.06l7.5 7.5Z"
                                    clip-rule="evenodd" />
                            </svg>
                            <p class="text-base text-white group-hover:text-green-500 font-medium">Website Design</p>
                        </div>
                        <div class="flex items-center  space-x-3 hover:text-green-500 group ">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-6 w-6 ">
                                <path fill-rule="evenodd" d="M16.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 0 1 1.06-1.06l7.5 7.5Z"
                                    clip-rule="evenodd" />
                            </svg>
                            <p class="text-base text-white group-hover:text-green-500 font-medium">Destinstions</p>
                        </div>
                    </div>
                    <div class="col-span-2">
                        <h4 class="text-2xl text-white pb-3">Resources</h4>
                        <div class="flex items-center  space-x-3 hover:text-green-500 group ">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-6 w-6 ">
                                <path fill-rule="evenodd" d="M16.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 0 1 1.06-1.06l7.5 7.5Z"
                                    clip-rule="evenodd" />
                            </svg>
                            <p class="text-base text-white group-hover:text-green-500 font-medium">Articles</p>
                        </div>
                        <div class="flex items-center  space-x-3 hover:text-green-500 group ">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-6 w-6 ">
                                <path fill-rule="evenodd" d="M16.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 0 1 1.06-1.06l7.5 7.5Z"
                                    clip-rule="evenodd" />
                            </svg>
                            <p class="text-base text-white group-hover:text-green-500 font-medium">About us</p>
                        </div>
                        <div class="flex items-center  space-x-3 hover:text-green-500 group ">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-6 w-6 ">
                                <path fill-rule="evenodd" d="M16.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 0 1 1.06-1.06l7.5 7.5Z"
                                    clip-rule="evenodd" />
                            </svg>
                            <p class="text-base text-white group-hover:text-green-500 font-medium">Contact</p>
                        </div>
                        <div class="flex items-center  space-x-3 hover:text-green-500 group ">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-6 w-6 ">
                                <path fill-rule="evenodd" d="M16.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 0 1 1.06-1.06l7.5 7.5Z"
                                    clip-rule="evenodd" />
                            </svg>
                            <p class="text-base text-white group-hover:text-green-500 font-medium">Sitemap</p>
                        </div>
                        <div class="flex items-center  space-x-3 hover:text-green-500 group ">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-6 w-6 ">
                                <path fill-rule="evenodd" d="M16.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 0 1 1.06-1.06l7.5 7.5Z"
                                    clip-rule="evenodd" />
                            </svg>
                            <p class="text-base text-white group-hover:text-green-500 font-medium">Portfolio</p>
                        </div>

                    </div>

                    <div class="col-span-4">
                        <div class=" space-y-6">
                            <h3 class="font-semibold text-xl text-white">Subscribe To Our
                                Newsletter</h3>
                            <input type="email" id="email"
                                class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5   dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="name@flowbite.com" required />
                            <div class="flex justify-center bg-green-400 text-white border rounded  ">

                                <button type="submit" class="px-3  py-2 block">Subscribe Now</button>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>

        <div class="container mx-auto">
            <div class="flex justify-between text-white p-6">
                <div class="">
                    <p>All Rights Reserved © 2024 <span>Perkstep</span></p>
                </div>
                <div class="flex space-x-4 px-3 ">

                    <p class="px-4">Privacy</p>|<p class="px-4">Cookies</p> | <p>Terms & Conditions</p>
                </div>
            </div>
        </div>
    </footer>
@endsection
