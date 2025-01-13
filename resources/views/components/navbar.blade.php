<div class="z-0">
    <div class="flex gap-8 justify-end xl:gap-8 bg-white shadow">
        <button class="hamburger md:hidden flex flex-col gap-1.5 pt-6 ">
                <span class="block w-6 h-0.5 bg-secondary"></span>
                <span class="block w-6 h-0.5 bg-secondary"></span>
                <span class="block w-6 h-0.5 bg-secondary"></span>
        </button>
        <div class="pt-4 w-40 xl:pt-7 xl:w-[240px]">
            <div class="relative flex items-center">
              

            </div>
        </div>
        <div class="flex gap-4 py-6 pr-6 xl:gap-7 xl:py-8 xl:pr-10">
            <svg class="xl:w-7 xl:h-7" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#5F7D8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
            <svg class="xl:w-7 xl:h-7" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#5F7D8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 17H2a3 3 0 0 0 3-3V9a7 7 0 0 1 14 0v5a3 3 0 0 0 3 3zm-8.27 4a2 2 0 0 1-3.46 0"></path></svg>

            {{-- kepala botak --}}
            <div class="relative ml-3">
                <div>
                    <button type="button" class="relative flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                        <span class="absolute -inset-1.5"></span>
                        <span class="sr-only">Open user menu</span>
                        <img class="size-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                    </button>
                </div>
            
                <div class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black/5 focus:outline-none hidden" id="user-menu" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                    
                    <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" class="d-none">
                        @csrf
                        <button type="button" onclick="submitLogout()" class="block px-4 py-2 text-sm text-gray-700 {{ request()->is('logout') ? 'text-white' : 'text-secondary' }}">                         
                            Logout
                        </button>
                    </form>
                </div>
            </div>
            
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

<script>
    document.getElementById('user-menu-button').addEventListener('click', function() {
    const menu = document.getElementById('user-menu');
    menu.classList.toggle('hidden');
});
</script>