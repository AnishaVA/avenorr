 <footer class="bg-[#0a0a0a] pt-12 md:pt-24 pb-8 border-t border-white/[0.03] relative overflow-hidden">
        <!-- Subtle Background Glow -->
        <div class="absolute top-0 right-0 w-full h-[500px] bg-white/[0.02] rounded-full blur-[120px] -mr-64 -mt-64"></div>

        <div class="relative z-10 px-6 mx-auto max-w-8xl">
            <div class="grid grid-cols-1 gap-16 mb-20 md:grid-cols-12">
                <!-- Brand Column -->
                <div class="md:col-span-4">
                    <div class="mb-8">
                        <a href="{{ route('home') }}" class="w-20">
                            <img src="{{ asset('images/logo.png') }}" alt="Avenorr" class="w-40">
                        </a>
                        <p class="mt-4 text-xs font-bold tracking-[0.2em] text-gray-500 uppercase">Code the Future</p>
                    </div>
                    <p class="max-w-xs text-sm leading-relaxed text-gray-500">
                        Redefining IT career paths through premium training and strategic placements. We bridge the gap between education and industry excellence.
                    </p>
                </div>

                <!-- Links -->
                <div class="md:col-span-2">
                    <h4 class="text-white text-[10px] font-black tracking-[0.3em] uppercase mb-8">Expertise</h4>
                    <ul class="space-y-4 text-[13px] font-medium text-gray-500">
                        <li><a href="#" class="transition-colors hover:text-silver-300">Cyber Security</a></li>
                        <li><a href="#" class="transition-colors hover:text-silver-300">Data Science</a></li>
                        <li><a href="#" class="transition-colors hover:text-silver-300">Python Dev</a></li>
                    </ul>
                </div>

                <div class="md:col-span-2">
                    <h4 class="text-white text-[10px] font-black tracking-[0.3em] uppercase mb-8">Solutions</h4>
                    <ul class="space-y-4 text-[13px] font-medium text-gray-500">
                        <li><a href="#" class="transition-colors hover:text-silver-300">IT Placements</a></li>
                        <li><a href="#" class="transition-colors hover:text-silver-300">Hospital Hiring</a></li>
                        <li><a href="#" class="transition-colors hover:text-silver-300">Branding</a></li>
                    </ul>
                </div>

                <!-- Contact -->
                <div class="md:col-span-4">
                    <h4 class="text-white text-[10px] font-black tracking-[0.3em] uppercase mb-8">Get In Touch</h4>
                    <div class="space-y-4">
                        <p class="flex items-center text-sm text-gray-500">
                            <span class="w-8 h-[1px] bg-white/10 mr-4"></span>
                            hello@avenorr.com
                        </p>
                        <p class="flex items-center text-sm text-gray-500">
                            <span class="w-8 h-[1px] bg-white/10 mr-4"></span>
                            +91 98765 43210
                        </p>
                        <div class="flex pt-4 space-x-4">
                            <a href="#" class="flex items-center justify-center w-10 h-10 text-white transition-all border rounded-full border-white/5 hover:bg-white/5">
                                Fb.
                            </a>
                            <a href="#" class="flex items-center justify-center w-10 h-10 text-white transition-all border rounded-full border-white/5 hover:bg-white/5">
                                Ig.
                            </a>
                            <a href="#" class="flex items-center justify-center w-10 h-10 text-white transition-all border rounded-full border-white/5 hover:bg-white/5">
                                Tw.
                            </a>
                            <a href="#" class="flex items-center justify-center w-10 h-10 text-white transition-all border rounded-full border-white/5 hover:bg-white/5">
                                in.
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pt-6 border-t border-white/[0.05] flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
                <p class="text-[9px] tracking-[0.4em] text-gray-600 uppercase">© 2026 Avenorr InfoTech Private Limited</p>
                <div class="flex space-x-8 text-[9px] tracking-[0.4em] text-gray-600 uppercase">
                    <a href="#" class="transition hover:text-gray-400">Privacy</a>
                    <a href="#" class="transition hover:text-gray-400">Terms</a>
                </div>
            </div>
        </div>
    </footer>