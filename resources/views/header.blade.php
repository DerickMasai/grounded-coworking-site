<header class="w-full h-screen flex flex-col">
    <nav class="w-full pr-16 m-0 justify-center items-center flex flex-row">
        <div class="h-32 w-32 bg-gray-800 flex">
            <ul class="list-none m-auto flex flex-row">
                <li class="h-6 w-2 mt-auto bg-white"></li>
                <li class="h-10 w-2 mt-auto mx-0.5 bg-white"></li>
                <li class="h-6 w-2 mt-auto bg-white"></li>
            </ul>
        </div>

        <a href="{{ route('landing') }}" class="ml-16">
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
                <a href="#" class="pt-4 pb-3.5 px-8 text-white bg-primary shadow-xl">
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

                <h1 class="block play900 text-6xl text-gray-800 animate__animated animate__fadeInDown" style="line-height: 4rem">
                    Redefine the <br>
                    traditional office
                     space
                </h1>

                <p class="tt400 text-lg mt-10">
                    Revolutionize the workspace. We offer coffee, food, drinks & desert based on the highest quality ingredients - and a place for you to do your best work. 
                </p>
            </div>
        </div>
    </section>
</header>