@php
    use App\Models\Setting\WebsiteSetting;
    $site = WebsiteSetting::first();
@endphp

<footer class="bg-[#0F291F]">
    <div class="border-b border-gray-700">
        <div class="container mx-auto grid grid-cols-12 divide-x  divide-gray-700  ">

            <div class="col-span-4 ">
                <div class="flex items-center space-x-6 py-6 ">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                        class=" h-12 w-12  rounded-full text-[#01C778] bg-[#0C4931] p-3">
                        3
                        <path fill-rule="evenodd"
                            d="m11.54 22.351.07.04.028.016a.76.76 0 0 0 .723 0l.028-.015.071-.041a16.975 16.975 0 0 0 1.144-.742 19.58 19.58 0 0 0 2.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 0 0-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 0 0 2.682 2.282 16.975 16.975 0 0 0 1.145.742ZM12 13.5a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"
                            clip-rule="evenodd" />
                    </svg>
                    <div class="">
                        <p class="text-white">Location</p>
                        <span class="text-white text-xl font-bold"> {{ $site->address }}</span>
                    </div>
                </div>
            </div>

            <div class="col-span-4 ">
                <div class="flex items-center space-x-6 py-6 px-6 ">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="h-12 w-12  rounded-full text-[#01C778] bg-[#0C4931] p-3">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                    </svg>

                    <div class="">
                        <p class="text-white">Email</p>
                        <span class="text-white text-xl font-bold">{{ $site->email }} </span>
                    </div>
                </div>
            </div>

            <div class="col-span-4 ">
                <div class="flex items-center space-x-6 py-6  px-6">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="h-12 w-12  rounded-full text-[#01C778] bg-[#0C4931] p-3">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M14.25 9.75v-4.5m0 4.5h4.5m-4.5 0 6-6m-3 18c-8.284 0-15-6.716-15-15V4.5A2.25 2.25 0 0 1 4.5 2.25h1.372c.516 0 .966.351 1.091.852l1.106 4.423c.11.44-.054.902-.417 1.173l-1.293.97a1.062 1.062 0 0 0-.38 1.21 12.035 12.035 0 0 0 7.143 7.143c.441.162.928-.004 1.21-.38l.97-1.293a1.125 1.125 0 0 1 1.173-.417l4.423 1.106c.5.125.852.575.852 1.091V19.5a2.25 2.25 0 0 1-2.25 2.25h-2.25Z" />
                    </svg>

                    <div class="">
                        <p class="text-white">Phone</p>
                        <span class="text-white text-xl font-bold">{{ $site->contact_no }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="border-b  border-gray-700">

        <div class="container mx-auto py-5 ">
            <div class="grid grid-cols-12   py-16">
                <div class="col-span-3  space-y-6 ">
                    <div class="bg-white inline-block p-3 rounded">
                        <img src="{{ asset('storage/' . $site->logo) }}" class="h-12  w-48" alt="">
                    </div>
                    <p class="text-white ">
                        Welcome to PerkStep, your London-based SEO agency specializing in helping home care services
                        shine online.
                    </p>
                    <div class="flex items-center space-x-4">

                        <a href="{{ $site->facebook_link }}">
                            <svg class="w-14 h-14 p-4 hover:bg-[#01c778] border rounded-full text-gray-800 dark:text-white"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd"
                                    d="M13.135 6H15V3h-1.865a4.147 4.147 0 0 0-4.142 4.142V9H7v3h2v9.938h3V12h2.021l.592-3H12V6.591A.6.6 0 0 1 12.592 6h.543Z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>

                        <a href="{{ $site->x_link }}">
                            <svg class="w-14 h-14 p-4 hover:bg-[#01c778] border rounded-full text-gray-800 dark:text-white"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M13.795 10.533 20.68 2h-3.073l-5.255 6.517L7.69 2H1l7.806 10.91L1.47 22h3.074l5.705-7.07L15.31 22H22l-8.205-11.467Zm-2.38 2.95L9.97 11.464 4.36 3.627h2.31l4.528 6.317 1.443 2.02 6.018 8.409h-2.31l-4.934-6.89Z" />
                            </svg>
                        </a>

                        <a href="{{ $site->linkedin_link }}">

                            <svg class="w-14 h-14 p-4 hover:bg-[#01c778] border rounded-full text-gray-800 dark:text-white"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd"
                                    d="M12.51 8.796v1.697a3.738 3.738 0 0 1 3.288-1.684c3.455 0 4.202 2.16 4.202 4.97V19.5h-3.2v-5.072c0-1.21-.244-2.766-2.128-2.766-1.827 0-2.139 1.317-2.139 2.676V19.5h-3.19V8.796h3.168ZM7.2 6.106a1.61 1.61 0 0 1-.988 1.483 1.595 1.595 0 0 1-1.743-.348A1.607 1.607 0 0 1 5.6 4.5a1.601 1.601 0 0 1 1.6 1.606Z"
                                    clip-rule="evenodd" />
                                <path d="M7.2 8.809H4V19.5h3.2V8.809Z" />
                            </svg>
                        </a>
                        <a href="{{ $site->youtube_link }}">

                            <svg class="w-14 h-14 p-4 hover:bg-[#01c778] border rounded-full text-gray-800 dark:text-white"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd"
                                    d="M21.7 8.037a4.26 4.26 0 0 0-.789-1.964 2.84 2.84 0 0 0-1.984-.839c-2.767-.2-6.926-.2-6.926-.2s-4.157 0-6.928.2a2.836 2.836 0 0 0-1.983.839 4.225 4.225 0 0 0-.79 1.965 30.146 30.146 0 0 0-.2 3.206v1.5a30.12 30.12 0 0 0 .2 3.206c.094.712.364 1.39.784 1.972.604.536 1.38.837 2.187.848 1.583.151 6.731.2 6.731.2s4.161 0 6.928-.2a2.844 2.844 0 0 0 1.985-.84 4.27 4.27 0 0 0 .787-1.965 30.12 30.12 0 0 0 .2-3.206v-1.516a30.672 30.672 0 0 0-.202-3.206Zm-11.692 6.554v-5.62l5.4 2.819-5.4 2.801Z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>

                    </div>
                </div>
                <div class="col-span-3 space-y-12">
                    <h4 class="text-2xl text-white pb-3">Services</h4>

                    <a href="{{ route('portfolio.page') }}"target="_blank" class=" space-y-3">
                    <div class="flex items-center  space-x-3 hover:text-green-500 group ">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="h-4 w-4 ">
                                <path fill-rule="evenodd"
                                    d="M16.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 0 1 1.06-1.06l7.5 7.5Z"
                                    clip-rule="evenodd" />
                            </svg>
                            <p class="text-base text-white group-hover:text-green-500 font-medium">Protfolio</p>
                        </div>
                    </a>

                    <a href="{{ route('contact.page') }}"target="_blank" class=" space-y-3">
                    <div class="flex items-center  space-x-3 hover:text-green-500 group ">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="h-4 w-4 ">
                                <path fill-rule="evenodd"
                                    d="M16.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 0 1 1.06-1.06l7.5 7.5Z"
                                    clip-rule="evenodd" />
                            </svg>
                            <p class="text-base text-white group-hover:text-green-500 font-medium">Contact</p>
                        </div>
                    </a>
                    <a href="{{ route('service.page') }}"target="_blank" class=" space-y-3">
                    <div class="flex items-center  space-x-3 hover:text-green-500 group ">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="h-4 w-4 ">
                                <path fill-rule="evenodd"
                                    d="M16.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 0 1 1.06-1.06l7.5 7.5Z"
                                    clip-rule="evenodd" />
                            </svg>
                            <p class="text-base text-white group-hover:text-green-500 font-medium">Services</p>
                        </div>
                    </a>

                </div>
                <div class="col-span-3 space-y-6">
                    <h4 class="text-2xl text-white pb-3">Resources</h4>

                    <a href="{{ route('portfolio.page') }}"target="_blank" class=" space-y-3">
                        <div class="flex items-center  space-x-3 hover:text-green-500 group ">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="h-4 w-4 ">
                                    <path fill-rule="evenodd"
                                        d="M16.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 0 1 1.06-1.06l7.5 7.5Z"
                                        clip-rule="evenodd" />
                                </svg>
                                <p class="text-base text-white group-hover:text-green-500 font-medium">Protfolio</p>
                            </div>
                        </a>

                        <a href="{{ route('contact.page') }}"target="_blank" class=" space-y-3">
                        <div class="flex items-center  space-x-3 hover:text-green-500 group ">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="h-4 w-4 ">
                                    <path fill-rule="evenodd"
                                        d="M16.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 0 1 1.06-1.06l7.5 7.5Z"
                                        clip-rule="evenodd" />
                                </svg>
                                <p class="text-base text-white group-hover:text-green-500 font-medium">Contact</p>
                            </div>
                        </a>
                        <a href="{{ route('service.page') }}"target="_blank" class=" space-y-3">
                        <div class="flex items-center  space-x-3 hover:text-green-500 group ">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="h-4 w-4 ">
                                    <path fill-rule="evenodd"
                                        d="M16.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 0 1 1.06-1.06l7.5 7.5Z"
                                        clip-rule="evenodd" />
                                </svg>
                                <p class="text-base text-white group-hover:text-green-500 font-medium">Services</p>
                            </div>
                        </a>


                </div>

                <div class="col-span-3">
                    <div class=" space-y-6">
                        <h3 class="font-semibold text-xl text-white">Subscribe To Our <br>
                            Newsletter</h3>
                        <input type="email" id="email"
                            class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5   dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Email Address" required />
                        <div class="flex justify-center bg-green-400 text-white border rounded  ">

                            <button type="submit" class="px-3  font-bold py-2 block">Subscribe Now</button>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>

    <div class="container mx-auto">
        <div class="flex justify-between text-white p-3">
            <div class="">
                <p class="text-xs">All Rights Reserved © {{ date('Y') }} <span
                        class="text-sm font-semibold">Perkstep</span></p>
            </div>
            <div class="flex space-x-4 px-3 ">

                <p class="px-4">Privacy</p>|<p class="px-4">Cookies</p> | <p>Terms & Conditions</p>
            </div>
        </div>
    </div>
</footer>
