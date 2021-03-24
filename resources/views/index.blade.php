@extends('layouts.app')

@section('content')
    
    <header class="w-full h-screen flex flex-col">
        <nav class="w-full pr-16 m-0 justify-center items-center flex flex-row">
            <button type="button" class="h-32 w-32 bg-gray-800 flex">
                <ul class="list-none m-auto flex flex-col">
                    <li class="h-1 w-6 bg-white"></li>
                    <li class="h-1 w-10 bg-white mt-2"></li>
                    <li class="h-1 w-6 bg-white mt-2"></li>
                </ul>
            </button>

            <a href="#" class="ml-16">
                <img src="{{ asset('./img/logo.svg') }}" alt="Grounded Logo" class="w-32">
            </a>

            <ul class="list-none sof400 text-sm ml-auto text-gray-800 flex flex-row">
                <li class="mr-6">
                    <a href="#">
                        Home
                    </a>
                </li>
                <li class="mr-6">
                    <a href="#">
                        Facility
                    </a>
                </li>
                <li class="mr-6">
                    <a href="#">
                        Event
                    </a>
                </li>
                <li class="mr-6">
                    <a href="#">
                        About
                    </a>
                </li>
                <li>
                    <a href="#" class="pt-4 pb-3.5 px-8 bg-primary  shadow-xl">
                        Book A Reservation
                    </a>
                </li>
            </ul>
        </nav>

        <section class="w-full h-full m-0 pr-16 flex flex-row">
            <div class="h-full w-32 flex flex-col flex-shrink-0 justify-center items-center">
                <div class="mx-auto">
                    <a href="mailto:hello@derickmasai.com" title="Send Derick an email -> hello@derickmasai.com" class="block mb-6 tt400 text-sm text-gray-800 transform rotate-180" style="writing-mode: vertical-rl;
                    text-orientation: mixed;">hello@grounded.com</a>
                    <a href="tel:+254 719 510 503" title="Call Derick" class="block tt400 text-sm text-gray-800 transform rotate-180" style="writing-mode: vertical-rl;
                    text-orientation: mixed;">+254 712 345 678</a>
                </div>
                <a class="mt-12 text-gray-400 transition duration-200 ease-in-out hover:text-gray-800" href="https://instagram.com" target="_blank">
                    <i class="fab fa-twitter"></i>
                </a>
                <a class="mt-6 text-gray-400 transition duration-200 ease-in-out hover:text-gray-800" href="https://twitter.com" target="_blank">
                    <i class="fab fa-instagram text-gray-400"></i>
                </a>
            </div>

            <div class="h-full w-full flex flex-row">
                <div class="h-full w-1/2 flex-shrink-0 flex relative">
                    <img class="absolute top-0 left-0 h-full w-full object-cover m-0 z-0" src="{{ asset('./img/man-drinking-coffee.jpg') }}" alt="">
                    <button class="bg-primary py-8 px-10 mt-auto ml-auto z-10">
                        <i class="fas fa-arrow-down text-white"></i>
                    </button>
                    <img src="{{ asset('./img/lines.svg') }}" class="h-40 w-40 absolute bottom-0 left-0 transform translate-y-1/2 z-20 opacity-25" />
                </div>

                <div class="p-16 justify-center flex flex-col">
                    <small class="tt300 text-lg italic mb-4">Workspace & Meals -</small>

                    <h1 class="block play900 text-6xl text-gray-800 animate__animated animate__fadeInDown">
                        In fresh, <br>
                        Health and <br>
                        Qualified
                    </h1>

                    <p class="tt400 text-lg mt-10">
                        Revolutionize the workspace. We offer coffee, food, drinks & desert based on the highest quality ingredients - and a place for you to do your best work. 
                    </p>
                </div>
            </div>
        </section>
    </header>

    <section class="my-1 ml-32 mr-16 pt-32 px-16 text-white bg-gray-800 items-center justify-center flex flex-row relative">
        <div class="flex flex-col items-center justify-center flex-shrink-0">
            <h2 class="play700 mx-auto text-5xl">
                Quality from seed <br> to cup
            </h2>
            <p class="tt300 text-md mt-10 mr-auto">
                A cup of coffee is one of the most important,<br> simple pleasure in life. 
            </p>
            <a href="#" class="mr-auto tt600 uppercase text-md mt-10 tracking-wide text-primary border-b-2 border-solid border-primary">
                Learn More
            </a>
        </div>

        <div class="w-1/4 absolute bottom-0 left-1/2 transform -translate-x-1/2 bg-white p-4 flex flex-col">
            <p class="tt500 text-gray-800">
                <i class="fas fa-quote-left"></i> Drinking coffee is one of the most global things you do each day. <i class="fas fa-quote-right"></i>
            </p>
        </div>

        <div class="ml-12 flex">
            <img src="{{ asset('img/cup-of-coffee.jpg') }}" alt="A cup of coffee" class="w-96 h-96 object-cover mr-auto">
        </div>
    </section>

    <section class="flex flex-col py-32 pr-32 pl-16">
        <div class="w-10/12 mx-auto justify-center flex flex-row">
            <h2 class="w-1/2 mx-auto play700 text-gray-800 text-5xl">
                Some of our <br> locations
            </h2>
            <p class="w-1/2 pl-8 tt400 text-lg mt-10">
                Have your pick of the most convenient one for your business and clients' needs.
            </p>
        </div>

        <div class="mt-16 grid grid-cols-4 gap-x-10">
            <div class="h-64 col-start-1 bg-gray-300 flex"></div>
            <div class="h-64 col-start-2 bg-gray-300 flex"></div>
            <div class="h-64 col-start-3 bg-gray-300 flex group transition ease-in duration-200">
                <div class="m-0 p-6 relative flex flex-col bg-gray-800 bg-opacity-50 opacity-0 group-hover:opacity-100 transition ease-in duration-200">
                    <h5 class="play700 text-white text-xl">
                        Balinese Grilled Chicken
                    </h5>
                </div>
            </div>
            <div class="h-64 col-start-4 bg-gray-300 flex"></div>
        </div>
    </section>

    <section class="w-full pl-16 pr-32 flex flex-row">
        <div class="w-1/2 relative flex flex-col">
            <div class="relative ml-auto z-10">
                <img class="h-104 object-cover" src="{{ asset('./img/office.jpg') }}" alt="">
                
                <img src="{{ asset('./img/lines.svg') }}" class="h-24 w-24 absolute bottom-0 left-0 transform translate-y-1/4 -translate-x-1/4 z-20 opacity-30" />
            </div>

            <div class="h-full w-3/4 absolute bottom-0 left-0 transform translate-y-1/2 bg-gray-800 z-0"></div>
        </div>

        <div class="w-1/2 px-12 justify-center flex flex-col">
            <h2 class="play700 text-gray-800 text-5xl mb-16">
                Revolutionize your workplace
            </h2>
            <p class="tt300 text-lg mb-16">
                Create a world where people work to make a life, not just living. A place we're redefining success measured by personal fulfillment, not just the bottom line.
            </p>
            <div class="grid grid-cols-3">
                <div class="flex flex-row items-center text-gray-800">
                    <h5 class="tt600 font-bold text-4xl mr-2 mt-2">14</h5>
                    <span class="tt400 font-semibold leading-tight my-auto">Meeting <br> Rooms</span>
                </div>
                <div class="flex flex-row items-center text-gray-800">
                    <h5 class="tt600 font-bold text-4xl mr-2 mt-2">6</h5>
                    <span class="tt400 font-semibold leading-tight my-auto">Event <br> Spaces</span>
                </div>
                <div class="flex flex-row items-center text-gray-800">
                    <h5 class="tt600 font-bold text-4xl mr-2 mt-2">9</h5>
                    <span class="tt400 font-semibold leading-tight my-auto">Creative <br> Studios</span>
                </div>
            </div>
            <a href="#" class="mr-auto tt600 uppercase text-md mt-10 tracking-wide text-primary border-b-2 border-solid border-primary">
                Check Availability
            </a>
        </div>
    </section>

    <section class="ml-16 mr-32 grid grid-cols-4 grid-rows-2 z-20 m-24 gap-6">
        <div class="h-48 col-start-1 row-start-1 flex">
            <img class="h-full w-full object-cover" src="{{ asset('./img/kitchen-area.jpg') }}" alt="Kitchen Area">
        </div>

        <div class="h-48 col-start-1 row-start-2 flex">
            <img class="h-full w-full object-cover" src="{{ asset('./img/man-laying-w-laptop.jpg') }}" alt="Man laying down with a laptop">
        </div>

        <div class="h-full col-start-2 row-start-1 row-end-3 flex">
            <img class="h-full w-full object-cover" src="{{ asset('./img/lady-standing-w-laptop.jpg') }}" alt="Lady in red dress standing with a laptop">
        </div>

        <div class="h-full col-start-3 col-end-5 row-start-1 row-end-3 flex relative">
            <img class="max-h-full w-full absolute top-0 left-0 object-cover" src="{{ asset('./img/man-cross-legged.jpg') }}" alt="Man sitting crosslegged on sofa working">

            {{-- Quick Quote --}}
            <div class="w-1/2 py-3 px-6 bg-gray-800 bg-opacity-90 mt-auto mx-auto transform translate-y-1/2 relative">
                <span class="absolute top-0 left-1/2 transform -translate-y-1/2 -translate-x-1/2 bg-white rounded-full p-3 flex">
                    <i class="fas fa-quote-left m-auto text-primary"></i>
                </span>
                <p class="mt-6 tt300 text-white text-center">
                    Here I can spend a long and comfortable time with these workplace facilities.
                </p>
            </div>
        </div>
    </section>

    <section class="w-4/5 mx-auto mt-20 flex flex-col">
        <h2 class="mx-auto play700 text-gray-800 text-4xl">
            Who uses grounded?
        </h2>

        <div class="mt-12 grid grid-cols-4 gap-x-8">
            <div class="h-10 w-32 bg-gray-300"></div>
            <div class="h-10 w-32 bg-gray-300"></div>
            <div class="h-10 w-32 bg-gray-300"></div>
            <div class="h-10 w-32 bg-gray-300"></div>
        </div>

        <div class="mt-12 grid grid-cols-5 gap-8">
            <div class="bg-gray-800 text-white py-16 pb-8 px-12 col-start-1 col-end-4 relative flex flex-col">
                <span class="bg-primary py-3 px-4  rounded-full text-gray-800 absolute top-0 left-10 transform -translate-y-1/2">
                    <i class="fas fa-quote-left"></i>
                </span>

                <p class="tt300 text-lg">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam rem quasi optio quaerat maxime dolore dignissimos tempora voluptatibus eius quis sit explicabo unde accusantium hic porro ad, eos tenetur neque beatae harum. Nostrum, recusandae minus.</p>
                <div class="mt-8 flex flex-row">
                    <div class="h-12 w-12 bg-red-200 rounded-full"></div>
                    <div class="ml-4 flex flex-col">
                        <h5 class="play500">John Doe</h5>
                        <small class="mt-1 tt300 text-sm">CEO - Beeskeep</small>
                    </div>
                </div>
            </div>

            <div class="bg-gray-800 text-white py-16 pb-8 px-12 col-start-4 col-end-6 relative flex flex-col">
                <span class="bg-primary py-3 px-4  rounded-full text-gray-800 absolute top-0 left-10 transform -translate-y-1/2">
                    <i class="fas fa-quote-left"></i>
                </span>

                <p class="tt300 text-md">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam rem quasi optio quaerat maxime dolore dignissimos tempora voluptatibus eius quis sit explicabo unde accusantium hic porro ad, eos tenetur neque beatae harum.</p>
                <div class="mt-8 flex flex-row">
                    <div class="h-12 w-12 bg-red-200 rounded-full"></div>
                    <div class="ml-4 flex flex-col">
                        <h5 class="play500">John Doe</h5>
                        <small class="mt-1 tt300 text-sm">CEO - Beeskeep</small>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="w-4/5 pb-12 mx-auto mt-32 grid grid-cols-2">
        <div class="flex flex-col items-start">
            <div class="w-32">
                <img src="{{ asset('./img/logo.svg') }}" alt="">
            </div>
            <p class="mt-10 tt400 text-gray-800">
                We offer coffee, food, drinks & dessert based on the highest quality ingredients - and a place for your best workspaces and meetings.
            </p>
        </div>

        <div class="flex flex-col items-end">
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
            <span class="mt-auto tt400 text-sm">
                &copy; Designed by <a href="https://dribbble.com/kemonn" target="_blank" class="border-b border-solid border-gray-800">Kemonn</a> & developed with <i class="mx-1 fas fa-heart animate__animated animate__heartBeat animate__infinite infinite text-xs"></i> by <a href="https://derickmasai.com" target="_blank" class="border-b border-solid border-gray-800">Derick Masai</a>. All rights reserved.
            </span>
        </div>
    </footer>
@endsection