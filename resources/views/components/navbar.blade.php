<div class="z-0">
    <div class="flex gap-8 justify-end xl:gap-8 bg-white shadow">
        <button class="hamburger md:hidden flex flex-col gap-1.5 pt-6 ">
                <span class="block w-6 h-0.5 bg-secondary"></span>
                <span class="block w-6 h-0.5 bg-secondary"></span>
                <span class="block w-6 h-0.5 bg-secondary"></span>
        </button>
        <div class="pt-4 w-40 xl:pt-7 xl:w-[240px]">
            <div class="relative flex items-center">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="absolute w-5 h-5 top-2.5 left-2.5 text-slate-600">
                <path fill-rule="evenodd" d="M10.5 3.75a6.75 6.75 0 1 0 0 13.5 6.75 6.75 0 0 0 0-13.5ZM2.25 10.5a8.25 8.25 0 1 1 14.59 5.28l4.69 4.69a.75.75 0 1 1-1.06 1.06l-4.69-4.69A8.25 8.25 0 0 1 2.25 10.5Z" clip-rule="evenodd" />
              </svg>
              <input class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md pl-10 pr-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow" placeholder="Search" />
            </div>
        </div>
        <div class="flex gap-4 py-6 pr-6 xl:gap-7 xl:py-8 xl:pr-10">
            <svg class="xl:w-7 xl:h-7" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#5F7D8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
            <svg class="xl:w-7 xl:h-7" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#5F7D8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 17H2a3 3 0 0 0 3-3V9a7 7 0 0 1 14 0v5a3 3 0 0 0 3 3zm-8.27 4a2 2 0 0 1-3.46 0"></path></svg>
            <svg class="xl:w-7 xl:h-7" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#5F7D8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5.52 19c.64-2.2 1.84-3 3.22-3h6.52c1.38 0 2.58.8 3.22 3"/><circle cx="12" cy="10" r="3"/><circle cx="12" cy="12" r="10"/></svg>    
        </div>
   </div>
   <!--header -->
   <div class="mt-6 ml-6 xl:ml-80 xl:absolute xl:top-0 xl:items-center xl:gap-4">
        <div class="flex gap-3">
            <p class="text-secondary text-xs xl:text-sm ">Dashboard</p>
            <p class="text-xs xl:text-sm">/</p>
            <p class="text-xs xl:text-sm">{{ $home }}
        </div>
        <p class="mt-2 text-sm xl:text-base font-semibold">{{ $slot }}</p>
    </div>
</div>