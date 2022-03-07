<x-app-layout>
    <div class="filters flex space-x-6">
        <div class="w-1/3">
            <select name="category" id="category" class="w-full rounded-xl border-none px-4 py-2">
                <option value="Category1">Category1</option>
                <option value="Category2">Category2</option>
                <option value="Category3">Category3</option>
            </select>
        </div>
        <div class="w-1/3">
            <select name="otherfilters" id="otherfilters" class="w-full rounded-xl border-none px-4 py-2">
                <option value="Filter1">Filter1</option>
                <option value="Filter2">Filter2</option>
                <option value="Filter3">Filter3</option>
            </select>
        </div>
        <div class="w-2/3 relative">
            <input type="search" placeholder="Find an idea" class="w-full rounded-xl  bg-white border-none placeholder-gray-900 px-4 py-2 pl-8 ">
            <div class="absolute top-0 flex items-center h-full ml-2">
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </div>
        </div>
    </div>
    <!--- end filters--->
    <div class="ideas-container space-y-6 my-6">
        <div class="idea-container flex bg-white roundedd-xl hover:shadow-card transition duration-150 ease-in cursor-pointer ">
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">
                        12
                    </div>
                    <div class="text-gray-500">
                        Votes
                    </div>
                </div>
                <div class="mt-8">
                    <button class="w-20 bg-gray-200 border border-gray-200 transition duration-150 ease-in  hover:border-gray-400 uppercase font-bold text-xxs rounded-xl px-4 py-3">Vote</button>
                </div>
            </div>
            <div class="flex px-2 py-6">
                <a href="#" class="flex-none">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar" class="w-14 h-14 rounded-xl">
                </a>
                <div class="mx-4">
                    <h4 class="text-x font-semibold">
                        <a href="#" class="hover:underline">A random tite goes here</a>

                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora dolorem iure nostrum inventore fugit odit ea? Natus reiciendis sequi, rerum, facilis dolor ad temporibus omnis ipsam ut voluptatum dolore, nam quis quos animi tempore cum alias inventore a corporis soluta! Nostrum accusantium saepe ratione sint molestias error, perspiciatis molestiae accusamus, eos similique dolorum. Numquam, natus, consequatur aperiam totam libero officia amet modi fugiat placeat pariatur eveniet sunt, consectetur quibusdam dicta. Facere cum, eius ducimus incidunt nisi corporis a consequuntur dolores necessitatibus illo optio eaque harum quos, similique nihil voluptatibus. Rem exercitationem voluptate hic nulla dolores laudantium provident quis aspernatur iste.
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div>10 hours ago</div>
                            <div>&bull;</div>
                            <div>Category</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">3 Comments</div>

                        </div>
                        <div class="flex items-center sapce-x-2">
                            <div class="text-xxs bg-gray-200 font-bold uppercase py-2 px-4 leading-none w-28 h-7 rounded-full text-center ">
                                Open
                            </div>
                            <button class="relative bg-gray-100 hover:bg-gray-200 h-7 rounded-full transition duration-150 ease-in px-2 ml-2">
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                </svg>
                                <ul class="absolute w-44 font-semibold bg-white rounded-xl py-3 text-left ml-3 shadow-dailog">
                                    <li><a href="#" class="hover:bg-gray-100 transition duration-150 ease-in block px-5 py-3">Mark as Spam</a></li>
                                    <li><a href="#" class="hover:bg-gray-100 transition duration-150 ease-in block px-5 py-3">Delete Post</a></li>
                                </ul>
                            </button>

                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end idea container -->
        <div class="idea-container flex bg-white roundedd-xl hover:shadow-card transition duration-150 ease-in cursor-pointer ">
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl text-blue">
                        66
                    </div>
                    <div class="text-gray-500">
                        Votes
                    </div>
                </div>
                <div class="mt-8">
                    <button class="w-20 bg-blue border border-gray-200 border-dashed transition duration-150 ease-in  hover:border-gray-400 uppercase font-bold text-xxs rounded-xl px-4 py-3">Voted</button>
                </div>
            </div>
            <div class="flex px-2 py-6">
                <a href="#" class="flex-none">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar" class="w-14 h-14 rounded-xl">
                </a>
                <div class="mx-4">
                    <h4 class="text-x font-semibold">
                        <a href="#" class="hover:underline">Another random tite goes here</a>

                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3 tracking-widest capitalize">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora dolorem iure nostrum inventore fugit odit ea? Natus reiciendis sequi, rerum, facilis dolor ad temporibus omnis ipsam ut voluptatum dolore, nam quis quos animi tempore cum alias inventore a corporis soluta! Nostrum accusantium saepe ratione sint molestias error, perspiciatis molestiae accusamus, eos similique dolorum. Numquam, natus, consequatur aperiam totam libero officia amet modi fugiat placeat pariatur eveniet sunt, consectetur quibusdam dicta. Facere cum, eius ducimus incidunt nisi corporis a consequuntur dolores necessitatibus illo optio eaque harum quos, similique nihil voluptatibus. Rem exercitationem voluptate hic nulla dolores laudantium provident quis aspernatur iste.
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div>10 hours ago</div>
                            <div>&bull;</div>
                            <div>Category</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">101 Comments</div>

                        </div>
                        <div class="flex items-center sapce-x-2">
                            <div class="text-xxs bg-yellow font-bold uppercase py-2 px-4 leading-none w-28 h-7 rounded-full text-center ">
                                In progress
                            </div>
                            <button class="relative bg-gray-100 hover:bg-gray-200 h-7 rounded-full transition duration-150 ease-in px-2 ml-2">
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                </svg>
                                <ul class="absolute w-44 font-semibold bg-white rounded-xl py-3 text-left ml-3 shadow-dailog">
                                    <li><a href="#" class="hover:bg-gray-100 transition duration-150 ease-in block px-5 py-3">Mark as Spam</a></li>
                                    <li><a href="#" class="hover:bg-gray-100 transition duration-150 ease-in block px-5 py-3">Delete Post</a></li>
                                </ul>
                            </button>

                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end idea container -->
        <div class="idea-container flex bg-white roundedd-xl hover:shadow-card transition duration-150 ease-in cursor-pointer ">
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">
                        12
                    </div>
                    <div class="text-gray-500">
                        Votes
                    </div>
                </div>
                <div class="mt-8">
                    <button class="w-20 bg-gray-200 border border-gray-200 transition duration-150 ease-in  hover:border-gray-400 uppercase font-bold text-xxs rounded-xl px-4 py-3">Vote</button>
                </div>
            </div>
            <div class="flex px-2 py-6">
                <a href="#" class="flex-none">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar" class="w-14 h-14 rounded-xl">
                </a>
                <div class="mx-4">
                    <h4 class="text-x font-semibold">
                        <a href="#" class="hover:underline">Yet another random tite goes here</a>

                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora dolorem iure nostrum inventore fugit odit ea? Natus reiciendis sequi, rerum, facilis dolor ad temporibus omnis ipsam ut voluptatum dolore, nam quis quos animi tempore cum alias inventore a corporis soluta! Nostrum accusantium saepe ratione sint molestias error, perspiciatis molestiae accusamus, eos similique dolorum. Numquam, natus, consequatur aperiam totam libero officia amet modi fugiat placeat pariatur eveniet sunt, consectetur quibusdam dicta. Facere cum, eius ducimus incidunt nisi corporis a consequuntur dolores necessitatibus illo optio eaque harum quos, similique nihil voluptatibus. Rem exercitationem voluptate hic nulla dolores laudantium provident quis aspernatur iste.
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div>10 hours ago</div>
                            <div>&bull;</div>
                            <div>Category</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">10 Comments</div>

                        </div>
                        <div class="flex items-center sapce-x-2">
                            <div class="text-xxs bg-gray-200 font-bold uppercase py-2 px-4 leading-none w-28 h-7 rounded-full text-center ">
                                Open
                            </div>
                            <button class="relative bg-gray-100 hover:bg-gray-200 h-7 rounded-full transition duration-150 ease-in px-2 ml-2">
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                </svg>
                                <ul class="absolute w-44 font-semibold bg-white rounded-xl py-3 text-left ml-3 shadow-dailog">
                                    <li><a href="#" class="hover:bg-gray-100 transition duration-150 ease-in block px-5 py-3">Mark as Spam</a></li>
                                    <li><a href="#" class="hover:bg-gray-100 transition duration-150 ease-in block px-5 py-3">Delete Post</a></li>
                                </ul>
                            </button>

                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end idea container -->
        <label class="text-gray-700 text-sm font-bold select-none" for="full_name">
            Full Name
        </label>
        <input id="full_name" placeholder="Enter your full name" class="mt-2 shadow border rounded-lg w-4/6 px-3 py-2 text-gray-700 focus:shadow-outline focus:bg-blue placeholder-indigo-600">
        <button class="mt-2 px-3 py-2 bg-green text-blue-100 rounded-full">
            GO
        </button>
    </div> <!-- end ideas container -->
    <div class="h-screen flex flex-wrap">
        <div class="flex w-1/3 h-1/3">
            <div class="bg-teal-100 m-2 w-full flex focus:font-bold justify-center items-center">A</div>
        </div>
        <div class="flex w-1/3 h-1/3">
            <div class="bg-teal-400 m-2 w-full flex justify-center items-center">B</div>
        </div>
        <div class="flex w-1/3 h-1/3">
            <div class="bg-teal-400 m-2 w-full flex justify-center items-center">C</div>
        </div>
        <div class="flex w-1/3 h-1/3">
            <div class="bg-teal-400 m-2 w-full flex justify-center items-center">D</div>
        </div>
        <div class="flex w-1/3 h-1/3">
            <div class="bg-orange-500 m-2 w-full flex justify-center items-center rotate-45 opacity-50">E</div>
        </div>
        <div class="flex w-1/3 h-1/3">
            <div class="bg-teal-400 m-2 w-full flex justify-center items-center">F</div>
        </div>
        <div class="flex w-1/3 h-1/3">
            <div class="bg-teal-400 m-2 w-full flex justify-center items-center">G</div>
        </div>
        <div class="flex w-1/3 h-1/3">
            <div class="bg-teal-400 m-2 w-full flex justify-center items-center">H</div>
        </div>
        <div class="flex w-1/3 h-1/3">
            <div class="bg-teal-400 m-2 w-full flex justify-center items-center">I</div>
        </div>
    </div>
    <!-- this is card in tailwindcss -->
    <div class="w-full flex flex-col break-words bg-green shadow-lg rounded overflow-hidden">
        <div class="text-gray-700 bg-gray-background text-xl px-6 py-4 mb-0">
            The title of the card here</div>
        <div class="w-full px-6 py-4 flex justify-between items-center border-t border-gray-200">
            <div class="bg-orange-600 text-xxs uppercase px-2 py-1 rounded-xl border border-gray-200 text-gray-200 font-semibold">
                new arrival
            </div>
            <div class="text-sm font-semibold text-white">May 14, 1988</div>
        </div>
        <div class="w-full px-6 py-4 justify border-t border-gray-200">
            <div class="flex-1">
                <p class="border rounded-lg p-4 bg-gray-200">Here is a short comment about this employee.</p>
            </div>
        </div>
        <div class="rounded-b px-6 py-4 bg-gray-200">
            <div class="uppercase text-xs text-gray-600 font-bold">
                Employee
            </div>
            <div class="flex items-center pt-3">
                <div class="bg-blue-700 w-12 h-12 rounded-full uppercase border-dashed bg-white font-bold flex items-center justify-center text-xs text-gray-700">
                    VG
                </div>
                <div class="ml-4">
                    <p class="font-bold">Victor Gonzalez</p>
                    <p class="text-sm text-gray-700 mt-1">Instructor</p>
                </div>
            </div>
        </div>
    </div>

    <header class="bg-indigo-700 w-full flex justify-center border-l-4 border-b-4 border-pink-500 px-4 py-3">
        <div class="max-w-4xl w-full">
            <div class="flex items-center justify-between text-pink-400">

                
                <button type=" button" class="block text-gray-500 hover:text-gray-400 focus:text-white focus:outline-none sm:hidden">
                </button>
            </div>
            <div class=" my-4">
                <h1 class="text-2xl text-indigo-100">Want to learn Tailwind CSS?</h1>
                <p class="text-sm text-indigo-200">Tailwind is the fastest growing utility-first
                    CSS framework. Let's learn it step by step.</p>
                <div class="relative mt-4 flex justify-between">
                    <div class="">
                        <a href="#enrollnow" class="bg-pink-500text-indigo-100 font-bold mt-2 px-4 py-2 rounded-full text-xs uppercase">
                            Enroll Now</a>
                    </div>
                    <div class="absolute right-0 bg-white rounded-full flex justify-center items-center  border-4 border-pink-500">
                        <img class="w-16 h-16 rounded-full" src="https://source.unsplash.com/300x300/?face&crop=face&v=1" />
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main class="mt-16 w-full flex flex-col items-center">
        <div class="max-w-4xl mx-4 ">

            <h2 class="pb-1 font-bold text-xl text-indigo-700 border-b border-indigo-200">How It Works</h2>
            <p class="text-sm mt-4 text-gray-600">Tailwind is designed for rapid development of
                modern applications. At its core, it is a robust mobile-first design system built
                with developer experience in mind. After using Tailwind CSS, you will find it
                difficult to go back to use anything else. Learn all about it in this all-inclusive
                course.</p>
            <h2 class="mt-8 pb-1 font-bold text-xl text-indigo-700 border-b border-indigo-200">Advantages</h2>
            <div class="flex flex-col sm:flex-row sm:-mx-2">
                <div class="mt-4 sm:w-1/3">
                    <div class="bg-white p-8 h-full border-b-4 border-pink-500 rounded-lg flex flex-col items-center sm:mx-2 sm:p-3 md:p-8">
                        <div class="bg-gray-200 text-indigo-700 w-16  rounded-full">
                            <img class="rounded-full" src="https://source.unsplash.com/300x300/?face&crop=face&v=1" />
                        </div>
                        <div class=" mt-4 font-bold">No Custom CSS
                        </div>
                        <div class="mt-2 text-sm text-gray-600 text-center">Tailwind's advanced class extraction will leave your
                            project free of custom CSS.</div>
                    </div>
                </div>
                <div class="mt-4 sm:w-1/3">
                    <div class="bg-white p-8 h-full border-b-4 border-pink-500 rounded-lg flex flex-col items-center sm:mx-2 sm:p-3 md:p-8">
                        <div class="bg-gray-200 text-indigo-700 w-16 rounded-full">
                            <img class="rounded-full" src="https://source.unsplash.com/300x300/?face&crop=face&v=1" />
                        </div>
                        <div class=" mt-4 font-bold text-center">Developer Experience
                        </div>
                        <div class="mt-2 text-sm text-gray-600 text-center">Tailwind is designed with your happiness in mind.
                            The ease of performing changes is refreshing.</div>
                    </div>
                </div>
                <div class="mt-4 sm:w-1/3">
                    <div class="bg-white p-8 border-b-4 border-pink-500 rounded-lg flex flex-col items-center sm:mx-2 sm:p-3 md:p-8">
                        <div class="bg-gray-200 text-indigo-700 w-16 rounded-full">
                            <img class="rounded-full" src="https://source.unsplash.com/300x300/?face&crop=face&v=1" />
                        </div>
                        <div class=" mt-4 font-bold">Mobile Friendly
                        </div>
                        <div class="mt-2 text-sm text-gray-600 text-center">Modern applications demand mobile-friendly &
                            Tailwind's responsive modifiers make it easy.</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-gray-800 py-12 mt-12 w-full flex flex-col items-center border-t-2 border-black">
            <h2 class="pb-1 font-bold text-xl text-gray-400">
                Sign up to download the free PDF</h2>
            <form id="enrollnow" class="max-w-xl w-full text-gray-200 mt-4 px-8 md:px-0" action="#" method="get" autocomplete="of">
                <div class=" flex flex-col md:flex-row md:-mx-2">
                    <label for="first_name" class="sr-only">First name</label>
                    <input class="bg-gray-700 mt-4 md:mx-2 border border-gray-600 rounded-lg py-2 px-4 block w-full md:w-1/2" type="text" placeholder="First name" id="first_name">
                    <label for="last_name" class="sr-only">Last name</label>
                    <input class="bg-gray-700 mt-4 md:mx-2 border border-gray-600 rounded-lg py-2 px-4 block w-full md:w-1/2" type="text" placeholder="Last name" id="last_name">
                </div>
                <div class="flex flex-col md:flex-row md:-mx-2">
                    <label for="email" class="sr-only">Your email</label>
                    <input class="bg-gray-700 mt-4 md:mx-2 border border-gray-600 rounded-lg py-2 px-4 block w-full md:w-1/2" type="email" placeholder="john@email.com" id="email">
                    <label for="title" class="sr-only">Title</label>
                    <input class="bg-gray-700 mt-4 md:mx-2 border border-gray-600 rounded-lg py-2 px-4 block w-full md:w-1/2" type="text" placeholder="Your title" id="title">
                </div>
                <div class="flex flex-col md:flex-row md:-mx-2">
                    <button class="bg-pink-900 text-sm mt-4 md:mx-2 rounded-lg py-2 px-4 block w-full">Create account</button>
                </div>
            </form>
        </div>
    </main>
    <footer class="w-full bg-gray-800 pb-8 text-center text-s font-light text-gray-600">
        <p>Copyright &copy; 2022 Code Reactor &reg;</p>
    </footer>


</x-app-layout>