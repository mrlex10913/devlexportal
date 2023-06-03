<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Source+Sans+Pro:wght@400;600;700&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body class="font-nunito dark">
    <div class="h-[50vh] lg:h-screen bg-gradient-to-t from-indigo-300 dark:from-slate-800 dark:to-slate-900 relative overflow-hidden">
        <nav class="w-full fixed top-0  bg-white z-10 dark:bg-slate-900">
            <div class="container mx-auto py-5 flex items-center justify-between">
               <div class="flex items-center">
                    <span class="text-2xl font-bold text-indigo-900 dark:text-white">DevLex.</span>
                </div>
                <ul class="hidden md:flex space-x-10 text-gray-600 dark:text-gray-100 font-bold text-sm uppercase">
                    <li class="hover:text-gray-500">
                        <a href="#">Homepage</a>
                    </li>
                    <li class="hover:text-gray-500">
                        <a href="#about">About me</a>
                    </li>
                    <li class="hover:text-gray-500">
                        <a href="#services">Services</a>
                    </li>
                    <li class="hover:text-gray-500">
                        <a href="#works">Works</a>
                    </li>
                    <li class="hover:text-gray-500">
                        <a href="#contact">Contact</a>
                    </li>
                </ul>
                <img src="{{url('img/moon.png')}}" class="hidden md:block w-5 cursor-pointer" alt="">
                <div id="hamburger" class="space-y-1 md:hidden cursor-pointer z-20">
                    <div class="w-6 h-1 bg-black"></div>
                    <div class="w-6 h-1 bg-black"></div>
                    <div class="w-6 h-1 bg-black"></div>
                </div>
                <ul id="menu" class="hidden bg-indigo-900 absolute left-0 top-0 w-full p-10 rounded-b-3xl space-y-10 text-white text-center">
                    <li>
                        <a id="hLink" href="#">Homepage</a>
                    </li>
                    <li>
                        <a id="hLink" href="#about">About me</a>
                    </li>
                    <li>
                        <a id="hLink" href="#services">Services</a>
                    </li>
                    <li>
                        <a id="hLink" href="#works">Works</a>
                    </li>
                    <li>
                        <a id="hLink" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
        {{-- intro content --}}
        {{-- image --}}
        <img class="absolute bottom-0 right-0 lg:left-0 mx-auto h-5/6 object-cover" src="{{url('img/lex.png')}}" alt="">
        {{-- circle --}}
        <div class="hidden lg:block absolute -bottom-1/4 right-0 left-0 mx-auto w-big h-big bg-indigo-900 rounded-full -z-10"></div>
        {{-- animated text --}}
        <div class="absolute top-1/3 left-5 text-xl sm:lef-10 sm:text-4xl md:left-1/4 md:text-6xl lg:left-5 xl:left-48 xl:text-7xl font-bold">
            <span class="text-gray-600">Freelance</span>
            <p id="text" class="text-red-500"></p>
        </div>
        {{-- text --}}
        <div class="hidden lg:flex flex-col gap-5 rounded-md shadow-xl absolute top-0 bottom-0 m-auto right-10 bg-white dark:bg-slate-900 dark:shadow-slate-800 p-6 h-fit w-1/3">
            <h1 class="text-4xl font-bold text-indigo-900">Hi, I'm Lex</h1>
            <p class="text-gray-400">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic, enim! Blanditiis et laborum aliquid tempora itaque nam temporibus adipisci excepturi cumque consequuntur. Commodi placeat doloribus, deleniti officiis quos ut dolorum.
            Natus odit animi ullam voluptas fuga neque ut incidunt adipisci sapiente qui ipsa ad culpa, vitae, illum doloremque nobis consectetur! Fugiat, facilis suscipit fuga velit corrupti libero nostrum non facere.
            Nemo eligendi explicabo quis iure dolor. Ipsa tempora incidunt voluptatibus voluptatum dolores illo quaerat rerum? Sint iure repellendus commodi consequatur quisquam placeat asperiores architecto ad a ratione, laboriosam, voluptas maxime?</p>
            <a class="bg-indigo-600 text-white text-xl px-3 py-2 rounded-md font-semibold w-fit" href="">Hire Me</a>
        </div>
    </div>
      {{-- about --}}
        <div id="about" class="px-10 dark:bg-slate-900">
            {{-- left --}}
            <div class="container py-40 flex flex-col-reverse lg:flex-row items-center mx-auto gap-20">
                <div class="relative">
                    <img class="h-1/4 absolute top-0 left-0 -z-10" src="{{url('img/dots.png')}}" alt="">
                    <div class="h-full rounded-full overflow-hidden">
                        <img src="{{url('img/graduationPortrait.jpg')}}" alt="">
                    </div>
                </div>
             {{-- right --}}
                <div class="my-auto flex flex-col gap-3">
                      <h1 class="text-indigo-600 font-bold">ABOUT ME</h1>
                       <h1 class="text-3xl font-medium">Better Design</h1>
                        <h1 class="text-3xl font-medium">Better Experience</h1>
                        <p class="text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora dolorum temporibus laborum quisquam ipsum, dicta assumenda voluptas mollitia quaerat explicabo!
                        </p>
                        <h2 class="text-gray-500 font-medium">HTML</h2>
                        <div class="w-full bg-gray-200 h-1.5 rounded-md">
                            <div class="w-full bg-indigo-600 h-1.5 rounded-md"></div>
                        </div>
                        <h2 class="text-gray-500 font-medium">Javascript</h2>
                        <div class="w-full bg-gray-200 h-1.5 rounded-md">
                            <div class="w-1/2 bg-indigo-600 h-1.5 rounded-md"></div>
                        </div>
                        <h2 class="text-gray-500 font-medium">React</h2>
                        <div class="w-1/3 bg-gray-200 h-1.5 rounded-md">
                            <div class="w-full bg-indigo-600 h-1.5 rounded-md"></div>
                        </div>
                </div>
            </div>
        </div>
        {{-- services --}}
        <div id="services" class="dark:bg-slate-900">
            <div class="container mx-auto">
                {{-- top --}}
                <div class="flex flex-col gap-3 items-center">
                    <h1 class="text-indigo-600 font-bold">SERVICES</h1>
                    <h1 class="text-3xl">What do I offer?</h1>
                    <p class="w-1/2 text-center text-gray-500">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur minima animi temporibus exercitationem velit? Hic, iure ipsam totam ratione corporis perferendis quibusdam animi dolorum molestiae minus, quasi labore, repudiandae sunt?</p>
                </div>
                {{-- bottom --}}
                <div class="p-5 sm:p-0 flex flex-wrap justify-between">
                    {{-- card --}}
                    <div class="w-full md:w-4/12 shadow-xl my-3 md:my-10 rounded-lg p-5 flex flex-col gap-3">
                        <img class="w-10" src="{{url('img/icon.png')}}" alt="">
                        <h1 class="font-medium tex-lg">UX / UI Design</h1>
                        <p class="text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, architecto?</p>
                        <a class="text-indigo-600 font-semibold text-sm" href="">Read More</a>
                    </div>
                    <div class="w-full md:w-4/12 shadow-xl my-3 md:my-10 rounded-lg p-5 flex flex-col gap-3">
                        <img class="w-10" src="{{url('img/icon.png')}}" alt="">
                        <h1 class="font-medium tex-lg">UX / UI Design</h1>
                        <p class="text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, architecto?</p>
                        <a class="text-indigo-600 font-semibold text-sm" href="">Read More</a>
                    </div>
                    <div class="w-full md:w-4/12 shadow-xl my-3 md:my-10 rounded-lg p-5 flex flex-col gap-3">
                        <img class="w-10" src="{{url('img/icon.png')}}" alt="">
                        <h1 class="font-medium tex-lg">UX / UI Design</h1>
                        <p class="text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, architecto?</p>
                        <a class="text-indigo-600 font-semibold text-sm" href="">Read More</a>
                    </div>
                    <div class="w-full md:w-4/12 shadow-xl my-3 md:my-10 rounded-lg p-5 flex flex-col gap-3">
                        <img class="w-10" src="{{url('img/icon.png')}}" alt="">
                        <h1 class="font-medium tex-lg">UX / UI Design</h1>
                        <p class="text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, architecto?</p>
                        <a class="text-indigo-600 font-semibold text-sm" href="">Read More</a>
                    </div>
                    <div class="w-full md:w-4/12 shadow-xl my-3 md:my-10 rounded-lg p-5 flex flex-col gap-3">
                        <img class="w-10" src="{{url('img/icon.png')}}" alt="">
                        <h1 class="font-medium tex-lg">UX / UI Design</h1>
                        <p class="text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, architecto?</p>
                        <a class="text-indigo-600 font-semibold text-sm" href="">Read More</a>
                    </div>
                    <div class="w-full md:w-4/12 shadow-xl my-3 md:my-10 rounded-lg p-5 flex flex-col gap-3">
                        <img class="w-10" src="{{url('img/icon.png')}}" alt="">
                        <h1 class="font-medium tex-lg">UX / UI Design</h1>
                        <p class="text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, architecto?</p>
                        <a class="text-indigo-600 font-semibold text-sm" href="">Read More</a>
                    </div>
                </div>
            </div>
        </div>

        {{-- Works --}}
        <div id="works" class="py-40 dark:bg-slate-900">
            <div class="container mx-auto">
                {{-- top --}}
                <div class="flex flex-col gap-3 items-center">
                    <h1 class="text-indigo-600 font-bold">PORTFOLIO</h1>
                    <h1 class="text-3xl">Works & Projects</h1>
                    <p class="w-1/2 text-center text-gray-500">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur minima animi temporibus exercitationem velit? Hic, iure ipsam totam ratione corporis perferendis quibusdam animi dolorum molestiae minus, quasi labore, repudiandae sunt?</p>
                </div>
                {{-- bottom --}}
                <div class="p-5 sm:p-0 flex flex-wrap justify-between">
                    {{-- card --}}
                    <div class="w-full md:w-5/12 lg:w-1/5 shadow-xl my-3 md:my-10 rounded-lg m-1 gap-3">
                        <img src="{{url('img/item.png')}}" alt="">
                    </div>
                    <div class="w-full md:w-5/12 lg:w-1/5 shadow-xl my-3 md:my-10 rounded-lg m-1 gap-3">
                        <img src="{{url('img/item.png')}}" alt="">
                    </div>
                    <div class="w-full md:w-5/12 lg:w-1/5 shadow-xl my-3 md:my-10 rounded-lg m-1 gap-3">
                        <img src="{{url('img/item.png')}}" alt="">
                    </div>
                    <div class="w-full md:w-5/12 lg:w-1/5 shadow-xl my-3 md:my-10 rounded-lg m-1 gap-3">
                        <img src="{{url('img/item.png')}}" alt="">
                    </div>
                    <div class="w-full md:w-5/12 lg:w-1/5 shadow-xl my-3 md:my-10 rounded-lg m-1 gap-3">
                        <img src="{{url('img/item.png')}}" alt="">
                    </div>
                    <div class="w-full md:w-5/12 lg:w-1/5 shadow-xl my-3 md:my-10 rounded-lg m-1 gap-3">
                        <img src="{{url('img/item.png')}}" alt="">
                    </div>
                     <div class="w-full md:w-5/12 lg:w-1/5 shadow-xl my-3 md:my-10 rounded-lg m-1 gap-3">
                        <img src="{{url('img/item.png')}}" alt="">
                    </div>
                     <div class="w-full md:w-5/12 lg:w-1/5 shadow-xl my-3 md:my-10 rounded-lg m-1 gap-3">
                        <img src="{{url('img/item.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
        {{-- contact --}}
        <div id="contact" class="dark:bg-slate-900">
            <div class="container mx-auto">
                {{-- top --}}
                  <div class="flex flex-col gap-3 items-center">
                    <h1 class="text-indigo-600 font-bold">CONTACT</h1>
                    <h1 class="text-3xl">Have a Questions?</h1>
                    <p class="w-1/2 text-center text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, fugiat!</p>
                </div>
                {{-- bottom --}}
                <form action="" class="mt-5 p-8 flex flex-col gap-5 items-center">
                    <input class="p-2 w-full md:w-1/2 ring-1 ring-indigo-300 roudned-sm" type="text" placeholder="Name Surname" name="" id="">
                    <input class="p-2 w-full md:w-1/2 ring-1 ring-indigo-300 roudned-sm" type="email" placeholder="Email" name="" id="">
                    <textarea class="p-2 w-full md:w-1/2 ring-1 ring-indigo-300 roudned-sm"  name="" id="" cols="30" rows="10" placeholder="Message..."></textarea>
                    <button class="w-1/2 bg-indigo-600 text-white font-medium px-3 py-2 rounded-md cursor-pointer">Submit</button>
                </form>
            </div>
        </div>
        {{-- footer --}}
        <nav class="w-full bg-gray-800">
            <div class="container mx-auto py-5 flex items-center justify-between">
               <div class="flex items-center">
                    <span class="text-2xl font-bold text-white">DevLex.</span>
                </div>
                <span class="hidden md:block font-medium text-white">&copy; Portwind. Design with ♥ by Lex Lopez </span>
             
               <div class="flex gap-2">
                <img class="w-4 cursor-pointer" src="{{url('img/facebook.png')}}" alt="">
                 <img class="w-4 cursor-pointer" src="{{url('img/instagram.png')}}" alt="">
                  <img class="w-4 cursor-pointer" src="{{url('img/twitter.png')}}" alt="">
                   <img class="w-4 cursor-pointer" src="{{url('img/linkedin.png')}}" alt="">
               </div>
            </div>
        </nav>
    <script src="{{url('js/app.js')}}"></script>
    <script src="{{url('js/autotyping.js')}}"></script>
</body>
</html>