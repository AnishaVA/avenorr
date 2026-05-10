<nav x-data="{ atTop: true, mobileMenu: false }" 
    @scroll.window="atTop = (window.pageYOffset > 10 ? false : true)"
    :class="atTop ? 'bg-transparent py-6' : 'bg-[#121212]/90 backdrop-blur-xl border-b border-white/5 py-4'"
    class="fixed z-50 w-full transition-all duration-500">
    <div class="px-6 mx-auto max-w-8xl">
        <div class="flex items-center justify-between">
            <!-- Logo -->
            <a href="{{ route('home') }}" class="w-40">
                <img src="{{ asset('images/logo.png') }}" alt="Avenorr" class="">
            </a>

            <!-- Desktop Menu -->
            <div class="items-center hidden space-x-10 md:flex">
               <div class="items-center hidden space-x-10 md:flex">
                    <div class="flex space-x-8 text-[11px] font-bold tracking-[0.25em]">
                        
                        <!-- Home -->
                        <a href="{{ route('home') }}" 
                        class="relative py-2 transition-all duration-300 group {{ request()->routeIs('home') ? 'text-white' : 'text-gray-400 hover:text-white' }}">
                            HOME
                            <span class="absolute bottom-0 left-0 h-[1px] bg-gradient-to-r from-gray-300 to-transparent transition-all duration-500 {{ request()->routeIs('home') ? 'w-full' : 'w-0 group-hover:w-full' }}"></span>
                        </a>

                        <!-- IT Programs -->
                        <a href="{{ route('it') }}" 
                        class="relative py-2 transition-all duration-300 group {{ request()->routeIs('it') ? 'text-white' : 'text-gray-400 hover:text-white' }}">
                            IT PROGRAMS
                            <span class="absolute bottom-0 left-0 h-[1px] bg-gradient-to-r from-gray-300 to-transparent transition-all duration-500 {{ request()->routeIs('it') ? 'w-full' : 'w-0 group-hover:w-full' }}"></span>
                        </a>

                        <!-- Placements -->
                        <a href="{{ route('placement') }}" 
                        class="relative py-2 transition-all duration-300 group {{ request()->routeIs('placement') ? 'text-white' : 'text-gray-400 hover:text-white' }}">
                            PLACEMENTS
                            <span class="absolute bottom-0 left-0 h-[1px] bg-gradient-to-r from-gray-300 to-transparent transition-all duration-500 {{ request()->routeIs('placement') ? 'w-full' : 'w-0 group-hover:w-full' }}"></span>
                        </a>

                        <!-- About -->
                        <a href="{{ route('about') }}" 
                        class="relative py-2 transition-all duration-300 group {{ request()->routeIs('about') ? 'text-white' : 'text-gray-400 hover:text-white' }}">
                            ABOUT
                            <span class="absolute bottom-0 left-0 h-[1px] bg-gradient-to-r from-gray-300 to-transparent transition-all duration-500 {{ request()->routeIs('about') ? 'w-full' : 'w-0 group-hover:w-full' }}"></span>
                        </a>

                        <!-- Contact -->
                        <a href="{{ route('contact') }}" 
                        class="relative py-2 transition-all duration-300 group {{ request()->routeIs('contact') ? 'text-white' : 'text-gray-400 hover:text-white' }}">
                            CONTACT
                            <span class="absolute bottom-0 left-0 h-[1px] bg-gradient-to-r from-gray-300 to-transparent transition-all duration-500 {{ request()->routeIs('contact') ? 'w-full' : 'w-0 group-hover:w-full' }}"></span>
                        </a>

                    </div>
                </div>
                
                <div class="h-4 w-[1px] bg-white/10 mx-2"></div>

                <!-- Premium CTA -->
                <div class="flex items-center space-x-6">
                    <button class="text-xs font-bold tracking-widest text-gray-400 transition hover:text-white">LOGIN</button>
                    <button class="px-7 py-2.5 bg-gradient-to-br from-gray-100 via-gray-300 to-gray-400 text-black text-[11px] font-black tracking-widest rounded-full shadow-[0_0_20px_rgba(255,255,255,0.1)] hover:shadow-[0_0_25px_rgba(255,255,255,0.2)] transition-all duration-300 uppercase">
                        Register
                    </button>
                </div>
            </div>

            <!-- Mobile Toggle -->
            <button @click="mobileMenu = !mobileMenu" class="text-gray-400 md:hidden">
                <svg x-show="!mobileMenu" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path></svg>
                <svg x-show="mobileMenu" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
            </button>
        </div>
    </div>

    <!-- Mobile Menu Drawer -->
    <div x-show="mobileMenu" x-transition class="absolute top-full left-0 w-full bg-[#121212] border-b border-white/5 md:hidden">
        <div class="flex flex-col p-6 space-y-4 text-xs font-bold tracking-widest text-gray-400">
            <a href="{{ route('home') }}" class="hover:text-white">HOME</a>
            <a href="{{ route('it') }}" class="hover:text-white">IT PROGRAMS</a>
            <a href="{{ route('placement') }}" class="hover:text-white">PLACEMENTS</a>
            <a href="{{ route('about') }}" class="hover:text-white">ABOUT</a>
            <a href="{{ route('contact') }}" class="hover:text-white">CONTACT</a>
            <hr class="border-white/5">
            <button class="w-full py-3 text-black bg-gray-200 rounded">REGISTER NOW</button>
        </div>
    </div>
</nav>