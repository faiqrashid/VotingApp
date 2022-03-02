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
            <svg  class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
        </div>
    </div>
  </div> <!--- end filters--->
  <div class="ideas-container space-y-6 my-6">
        <div class="idea-container flex bg-white roundedd-xl ">
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
                    <button class="w-20 bg-gray-200 border border-gray-200 transition duration-150 ease-in  hover:border-gray-400 uppercase font-bold text-xxs rounded-xl px-4 py-3" >Vote</button>
                </div>
            </div>
            <div class="flex px-2 py-6">
                <a href="#">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar" class="w-14 h-14 rounded-xl">
                </a>
            </div>
        </div> <!-- end idea container -->
  </div> <!-- end ideas container -->
</x-app-layout>
