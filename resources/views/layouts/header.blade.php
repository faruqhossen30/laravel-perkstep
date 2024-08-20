

<section class="bg-gray-100 sticky top-0 z-50">

    <div class="container mx-auto  py-2">
        <nav class="bg-gray-100 border-gray-200 rounded-lg ">
            <div class=" mx-auto flex flex-wrap items-center justify-between px-3">
                <a href="{{ route('homepage') }}" class="flex items-center space-x-3  rtl:space-x-reverse">
                    <img src="{{ asset('img/perkspep.png') }}" alt="" class="h-12">
                </a>
                <div class="flex md:order-2">
                    <button type="button" data-collapse-toggle="navbar-search" aria-controls="navbar-search" aria-expanded="false"
                        class="md:hidden text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5 me-1">

                    </button>
                    <a class="group py-2 px-5 hidden md:inline-flex justify-center items-center gap-x-1 text-start bg-[#01C778] border border-[#01C778] text-white ext-sm font-medium rounded-full shadow-sm align-middle hover:bg-[#01C778] focus:outline-none focus:bg-[#01C778]"
                        href="{{route('meeting.page')}}">
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
                            <a href="{{ route('homepage') }}" class="hover:text-gray-800 text-gray-800 " aria-current="page">Home</a>
                        </li>


                        <li>
                            <a href="{{route('portfolio.page')}}" class="text-gray-800  hover:border-b-2  ">Portfolio</a>
                        </li>
                        <li>
                            <a href="{{route('service.page')}}" class="text-gray-800  hover:border-b-2  ">Service</a>
                        </li>


                    </ul>
                </div>
            </div>
        </nav>
    </div>
</section>
