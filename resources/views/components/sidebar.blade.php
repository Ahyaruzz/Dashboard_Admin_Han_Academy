<div class="bg-white text-white w-auto h-full fixed xl:block top-0 hidden shadow">
    <div class="mt-6 ml-7 flex gap-3 mr-14">
        <img class="" src="{{ asset('img/logo.png') }}" alt="Logo"/>
        <p class="text-black font-bold py-3 text-xl">HAN ACADEMY</p>
    </div>
    <div class="mt-14">
        <ul>
            <li class="mx-10 flex gap-5 pl-7 rounded-xl {{ request()->is('/') ? 'bg-primary' : '' }}">
                <a class="font-bold text-base flex items-center gap-5 w-full h-full {{ request()->is('/') ? 'text-white' : 'text-secondary' }}" href="/">
                    <svg class="my-5 {{ request()->is('/') ? 'fill-white' : 'fill-secondary' }} " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20"><path d="M12.5812 2.68627C12.2335 2.43791 11.7664 2.43791 11.4187 2.68627L1.9187 9.47198L3.08118 11.0994L11.9999 4.7289L20.9187 11.0994L22.0812 9.47198L12.5812 2.68627ZM19.5812 12.6863L12.5812 7.68627C12.2335 7.43791 11.7664 7.43791 11.4187 7.68627L4.4187 12.6863C4.15591 12.874 3.99994 13.177 3.99994 13.5V20C3.99994 20.5523 4.44765 21 4.99994 21H18.9999C19.5522 21 19.9999 20.5523 19.9999 20V13.5C19.9999 13.177 19.844 12.874 19.5812 12.6863Z"></path></svg>
                    Home
                </a>
            </li>
            <li class="mt-8 mx-10 pl-7 rounded-xl {{ request()->is('anggota') ? 'bg-primary' : '' }}">
                <a class="font-bold text-base w-full h-full flex gap-5 items-center {{ request()->is('anggota') ? 'text-white' : 'text-secondary' }}" href="/anggota">
                    <svg class="my-5 {{ request()->is('anggota') ? 'fill-white' : 'fill-secondary' }}" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" ><path d="M2 22C2 17.5817 5.58172 14 10 14C14.4183 14 18 17.5817 18 22H2ZM10 13C6.685 13 4 10.315 4 7C4 3.685 6.685 1 10 1C13.315 1 16 3.685 16 7C16 10.315 13.315 13 10 13ZM17.3628 15.2332C20.4482 16.0217 22.7679 18.7235 22.9836 22H20C20 19.3902 19.0002 17.0139 17.3628 15.2332ZM15.3401 12.9569C16.9728 11.4922 18 9.36607 18 7C18 5.58266 17.6314 4.25141 16.9849 3.09687C19.2753 3.55397 21 5.57465 21 8C21 10.7625 18.7625 13 16 13C15.7763 13 15.556 12.9853 15.3401 12.9569Z"></path></svg>
                    Anggota
                </a>
            </li>
            <li class="mt-8 mx-10 pl-7 rounded-xl {{ request()->is('pencatatan') ? 'bg-primary' : '' }}">
                <a class="font-bold text-base w-full h-full gap-5 flex items-center {{ request()->is('pencatatan') ? 'text-white' : 'text-secondary' }}" href="/pencatatan">
                    <svg class="my-5 {{ request()->is('pencatatan') ? 'fill-white' : 'fill-secondary' }}" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" ><path d="M20 2C20.5523 2 21 2.44772 21 3V6.757L12.0012 15.7562L11.995 19.995L16.2414 20.0012L21 15.242V21C21 21.5523 20.5523 22 20 22H4C3.44772 22 3 21.5523 3 21V3C3 2.44772 3.44772 2 4 2H20ZM21.7782 8.80761L23.1924 10.2218L15.4142 18L13.9979 17.9979L14 16.5858L21.7782 8.80761ZM12 12H7V14H12V12ZM15 8H7V10H15V8Z"></path></svg>
                    Pencatatan
                </a>
            </li>
            <li class="mt-8 mx-10 pl-7 rounded-xl {{ request()->is('kelas') ? 'bg-primary' : '' }}">
                <a class="font-bold text-base w-full h-full flex items-center gap-5 {{ request()->is('kelas') ? 'text-white' : 'text-secondary' }}" href="/kelas">
                    <svg class="my-5 {{ request()->is('kelas') ? 'fill-white' : 'fill-secondary' }}" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" ><path d="M20 22H6.5C4.567 22 3 20.433 3 18.5V5C3 3.34315 4.34315 2 6 2H20C20.5523 2 21 2.44772 21 3V21C21 21.5523 20.5523 22 20 22ZM19 20V17H6.5C5.67157 17 5 17.6716 5 18.5C5 19.3284 5.67157 20 6.5 20H19ZM10 4V12L13.5 10L17 12V4H10Z"></path></svg>
                    Kelas
                </a>
            </li>
        </ul>
    </div>
</div>