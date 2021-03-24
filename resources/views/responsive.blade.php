{{-- Locations --}}
<section class="w-full flex flex-col py-32 lg:pr-32 lg:pl-16">
    <div class="md:w-4/5 md:mx-auto  justify-center flex flex-col lg:flex-row">
        <h2 class="text-center lg:text-left lg:w-1/2 mx-auto play700 text-gray-800 text-5xl">
            Some of our <br class="hidden lg:block"> locations
        </h2>
        <p class="text-center lg:text-left lg:w-1/2 lg:pl-8 tt400 text-lg mt-10">
            Have your pick of the most convenient one for your business and customers' needs.
        </p>
    </div>

    <div class="mt-16 md:w-4/5 md:mx-auto lg:w-full grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 grid-rows-4 md:grid-rows-2 lg:grid-rows-1 gap-y-10 gap-x-10 lg:gap-y-0">
        <div class="mx-auto w-1/2 md:w-full md:h-64 col-start-1 flex group transition ease-in duration-200 relative">
            <img class="h-full w-full object-cover absolute top-0 left-0" src="{{ asset('./img/office-1.jpg') }}" alt="">

            <div class="h-full w-full m-0 p-6 relative flex flex-col bg-gray-800 bg-opacity-75 opacity-0 group-hover:opacity-100 transition ease-in duration-200">
                <h5 class="play700 text-white text-xl">
                    Kilimani
                </h5>
                <button type="button" class="py-6 px-8 absolute bottom-0 right-0 bg-white">
                    <i data-feather="arrow-right" class="text-gray-800 animate__animated animate__fadeOutRight animate__infinite infinite"></i>
                </button>
            </div>
        </div>

        <div class="mx-auto w-1/2 md:w-full h-64 md:h-64 row-start md:col-start-2 flex group transition ease-in duration-200 relative">
            <img class="h-full w-full object-cover absolute top-0 left-0" src="{{ asset('./img/office-2.jpg') }}" alt="">

            <div class="h-full w-full m-0 p-6 relative flex flex-col bg-gray-800 bg-opacity-75 opacity-0 group-hover:opacity-100 transition ease-in duration-200">
                <h5 class="play700 text-white text-xl">
                    Nairobi West
                </h5>
                <button type="button" class="py-6 px-8 absolute bottom-0 right-0 bg-white">
                    <i data-feather="arrow-right" class="text-gray-800 animate__animated animate__fadeOutRight animate__infinite infinite"></i>
                </button>
            </div>
        </div>

        <div class="mx-auto w-1/2 md:w-full h-64  md:h-64 lg:col-start-3 flex group transition ease-in duration-200 relative">
            <img class="h-full w-full object-cover absolute top-0 left-0" src="{{ asset('./img/office-3.jpg') }}" alt="">

            <div class="h-full w-full m-0 p-6 relative flex flex-col bg-gray-800 bg-opacity-75 opacity-0 group-hover:opacity-100 transition ease-in duration-200">
                <h5 class="play700 text-white text-xl">
                    Westlands
                </h5>
                <button type="button" class="py-6 px-8 absolute bottom-0 right-0 bg-white">
                    <i data-feather="arrow-right" class="text-gray-800 animate__animated animate__fadeOutRight animate__infinite infinite"></i>
                </button>
            </div>
        </div>

        <div class="mx-auto w-1/2 md:w-full h-64  md:h-64 lg:col-start-4 flex group transition ease-in duration-200 relative">
            <img class="h-full w-full object-cover absolute top-0 left-0" src="{{ asset('./img/office-4.jpg') }}" alt="">

            <div class="h-full w-full m-0 p-6 relative flex flex-col bg-gray-800 bg-opacity-75 opacity-0 group-hover:opacity-100 transition ease-in duration-200">
                <h5 class="play700 text-white text-xl">
                    Lavington
                </h5>
                <button type="button" class="py-6 px-8 absolute bottom-0 right-0 bg-white">
                    <i data-feather="arrow-right" class="text-gray-800 animate__animated animate__fadeOutRight animate__infinite infinite"></i>
                </button>
            </div>
        </div>
    </div>
</section>

{{-- Masonry --}}
<section class="w-4/5 mx-auto md:w-auto md:ml-16 md:mr-32 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 grid-rows-4 lg:grid-rows-2 z-20 my-24 gap-6">
    <div class="h-48 col-start-1 row-start-1 row-end-2 lg:row-start-1 flex relative">
        <img class="absolute top-0 left-0 h-full w-full object-cover" src="{{ asset('./img/kitchen-area.jpg') }}" alt="Kitchen Area">
    </div>

    <div class="h-48 col-start-1 row-start-2 row-end-3 lg:row-start-2 flex">
        <img class="h-full w-full object-cover" src="{{ asset('./img/man-laying-w-laptop.jpg') }}" alt="Man laying down with a laptop">
    </div>

    <div class="h-48 md:h-full col-start-1 md:col-start-2 row-start-3 row-end-4 md:row-start-1 md:row-end-3 lg:row-start-1 lg:row-end-3 flex">
        <img class="h-full w-full object-cover" src="{{ asset('./img/lady-standing-w-laptop.jpg') }}" alt="Lady in red dress standing with a laptop">
    </div>

    <div class="h-48 md:h-full col-start-1 md:col-start-1 md:col-end-3 lg:col-start-3 lg:col-end-5 row-start-4 row-end-5 md:row-start-3 md:row-end-5 lg:row-start-1 lg:row-end-3 flex relative">
        <img class="max-h-full w-full absolute top-0 left-0 object-cover" src="{{ asset('./img/man-cross-legged.jpg') }}" alt="Man sitting crosslegged on sofa working">

        <div class="w-1/2 py-3 px-6 bg-gray-800 bg-opacity-90 mt-auto mx-auto transform translate-y-1/2 relative hidden md:flex flex-col">
            <span class="absolute top-0 left-1/2 transform -translate-y-1/2 -translate-x-1/2 bg-white rounded-full p-3 flex">
                <i class="fas fa-quote-left m-auto text-primary"></i>
            </span>
            <p class="mt-6 tt300 text-white text-center">
                Here I can spend a long and comfortable time with these workplace facilities.
            </p>
        </div>
    </div>
</section>

{{-- Testimonials --}}
<section class="w-4/5 mx-auto mt-20 flex flex-col">
    <h2 class="text-center mx-auto play700 text-gray-800 text-4xl">
        Who uses grounded?
    </h2>

    <div class="mx-auto md:mx-0 mt-12 grid grid-cols-2 md:grid-cols-4 gap-6 md:gap-x-10 lg:md:gap-x-20">
        <div class="h-10 w-32 bg-gray-300"></div>
        <div class="h-10 w-32 bg-gray-300"></div>
        <div class="h-10 w-32 bg-gray-300"></div>
        <div class="h-10 w-32 bg-gray-300"></div>
    </div>

    <div class="mt-12 grid grid-cols-5 lg:gap-8">
        <div class="w-full lg:w-auto bg-gray-800 text-white py-16 pb-8 px-12 col-start-1 col-end-6 lg:col-end-4 relative flex flex-col">
            <span class="bg-primary py-3 px-4  rounded-full text-gray-800 absolute top-0 left-10 transform -translate-y-1/2">
                <i class="fas fa-quote-left"></i>
            </span>

            <p class="tt300 text-lg">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam rem quasi optio quaerat maxime dolore dignissimos tempora voluptatibus eius quis sit explicabo unde accusantium hic porro ad, eos tenetur neque beatae harum. Nostrum, recusandae minus.</p>
            <div class="mt-8 flex flex-row">
                <div class="h-12 w-12 bg-primary rounded-full"></div>
                <div class="ml-4 flex flex-col">
                    <h5 class="play500">John Doe</h5>
                    <small class="mt-1 tt300 text-sm">CEO - Beeskeep</small>
                </div>
            </div>
        </div>

        <div class="hidden lg:flex bg-gray-800 text-white py-16 pb-8 px-12 col-start-4 col-end-6 relative flex-col">
            <span class="bg-primary py-3 px-4  rounded-full text-gray-800 absolute top-0 left-10 transform -translate-y-1/2">
                <i class="fas fa-quote-left"></i>
            </span>

            <p class="tt300 text-md">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam rem quasi optio quaerat maxime dolore dignissimos tempora voluptatibus eius quis sit explicabo unde accusantium hic porro ad, eos tenetur neque beatae harum.</p>
            <div class="mt-8 flex flex-row">
                <div class="h-12 w-12 bg-primary rounded-full"></div>
                <div class="ml-4 flex flex-col">
                    <h5 class="play500">John Doe</h5>
                    <small class="mt-1 tt300 text-sm">CEO - Beeskeep</small>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Footer --}}
<footer class="w-4/5 pb-12 mx-auto mt-32 grid grid-cols-1 lg:grid-cols-2">
    <div class="flex flex-col items-center lg:items-start">
        <div class="w-32">
            <img class="opacity-75" src="{{ asset('./img/logo.svg') }}" alt="">
        </div>
        <p class="mt-6 lg:mt-10 tt400 text-gray-800 text-center lg:text-left">
            We offer coffee, food, drinks & dessert based on the highest quality ingredients - and a place for your best workspaces and meetings.
        </p>
    </div>

    <div class="mt-10 lg:mt-0 flex flex-col items-center lg:items-end">
        <div class="flex flex-row">
            <a href="https://github.com/derickmasai" target="_blank" class="mr-4">
                <i class="fab fa-github"></i>
            </a>
            <a href="https://linkedin.com/in/derickmasai" target="_blank" class="mr-4">
                <i class="fab fa-linkedin"></i>
            </a>
            <a href="https://derickmasai.com" target="_blank" class="mr-4">
                <i class="fas fa-code"></i>
            </a>
            <a href="mailto:hello@derickmasai.com" target="_blank" class="mr-4">
                <i class="fas fa-at"></i>
            </a>
            <a href="tel:+254 719 510 503" target="_blank" class="">
                <i class="fas fa-phone-volume"></i>
            </a>
        </div>
        <span class="mt-6 lg:mt-auto tt400 text-sm text-center lg:text-left">
            &copy; Designed by <a href="https://dribbble.com/kemonn" target="_blank" class="border-b border-solid border-gray-800">Kemonn</a> & developed with <i class="mx-1 fas fa-heart animate__animated animate__heartBeat animate__infinite infinite text-xs"></i> by <a href="https://derickmasai.com" target="_blank" class="border-b border-solid border-gray-800">Derick Masai</a>. All rights reserved.
        </span>
    </div>
</footer>