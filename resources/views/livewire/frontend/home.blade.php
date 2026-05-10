<div>
   <!-- HERO SECTION -->
   <section class="relative min-h-screen pt-20 overflow-hidden bg-[#0a0a0a] flex items-center">
        <!-- Background Decorative Glows -->
        <div class="absolute top-0 left-0 w-full h-full">
            <div class="absolute top-1/4 -left-20 w-96 h-96 bg-white/[0.02] rounded-full blur-[120px]"></div>
            <div class="absolute bottom-1/4 -right-20 w-96 h-96 bg-gray-500/[0.05] rounded-full blur-[120px]"></div>
        </div>

        <div class="relative z-10 px-6 mx-auto max-w-7xl">
            <div class="grid items-center gap-12 md:grid-cols-2">
                <!-- Left: Content -->
                <div class="text-center md:text-left">
                    <div class="inline-block px-4 py-1 mb-6 border rounded-full border-white/10 bg-white/5">
                        <span class="text-[10px] font-bold tracking-[0.3em] text-gray-300 uppercase ">Code the Future</span>
                    </div>
                    
                    <h1 class="mb-6 text-5xl font-black tracking-tighter text-white md:text-7xl lg:text-8xl">
                        AVENORR<br>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-gray-200 via-gray-400 to-gray-600">INFOTECH</span>
                    </h1>

                    <p class="max-w-lg mb-10 text-lg leading-relaxed text-gray-400 md:text-xl">
                        Advanced IT Training, Internships & Placement Solutions designed to bridge the gap between learning and industry excellence.
                    </p>

                    <div class="flex flex-col items-center space-y-4 sm:flex-row sm:space-y-0 sm:space-x-6 md:justify-start">
                        <button class="w-full sm:w-auto px-10 py-4 bg-white text-black font-black tracking-widest text-xs uppercase rounded-full hover:bg-gray-200 transition-all shadow-[0_0_30px_rgba(255,255,255,0.15)]">
                            Register Now
                        </button>
                        <button class="w-full px-10 py-4 text-xs font-black tracking-widest text-white uppercase transition-all border rounded-full sm:w-auto border-white/10 hover:bg-white/5">
                            View Programs
                        </button>
                    </div>
                </div>

                <!-- Right: Professional Image with Glass Effect -->
                <div class="relative hidden md:block">
                    <div class="relative z-10 overflow-hidden border shadow-2xl rounded-3xl border-white/10">
                        <!-- Replace with your professional IT image -->
                        <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&q=80&w=1000" 
                            alt="Professional IT Mentorship" 
                            class="object-cover w-full h-[600px] grayscale hover:grayscale-0 transition-all duration-700">
                        
                        <!-- Floating Overlay Card -->
                        <div class="absolute p-6 border bottom-6 left-6 right-6 backdrop-blur-xl bg-black/40 border-white/10 rounded-2xl">
                            <div class="flex items-center space-x-4">
                                <div class="flex -space-x-2">
                                    <img 
                                        src="https://randomuser.me/api/portraits/women/44.jpg" 
                                        alt="User"
                                        class="w-8 h-8 rounded-full border-2 border-[#0a0a0a] object-cover"
                                    >

                                    <img 
                                        src="https://randomuser.me/api/portraits/men/32.jpg" 
                                        alt="User"
                                        class="w-8 h-8 rounded-full border-2 border-[#0a0a0a] object-cover"
                                    >

                                    <img 
                                        src="https://randomuser.me/api/portraits/women/68.jpg" 
                                        alt="User"
                                        class="w-8 h-8 rounded-full border-2 border-[#0a0a0a] object-cover"
                                    >
                                </div>
                                <p class="text-[10px] font-bold tracking-widest text-white uppercase">500+ Students Placed</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- WHY CHOOSE US -->
    <section class="py-12 md:py-24 bg-[#0a0a0a] overflow-hidden">
        <div class="px-6 mx-auto max-w-7xl">
            <!-- Section Header -->
            <div class="max-w-2xl mb-20">
                <h2 class="text-xs font-bold tracking-[0.4em] text-gray-500 uppercase mb-4 ">Industry-Focused</h2>
                <h3 class="text-4xl font-bold tracking-tight text-white md:text-5xl">
                    Real-World Mentorship + <br>
                    <span class="text-gray-500">Production-Ready Projects.</span>
                </h3>
            </div>

            <!-- Why Choose Us Grid -->
            <div class="grid gap-6 md:grid-cols-4">
                @php
                    $features = [
                        ['title' => 'Dedicated Mentors', 'desc' => '1-on-1 guidance from working professionals.'],
                        ['title' => 'Real-time Projects', 'desc' => 'Work on live commercial applications.'],
                        ['title' => 'Placement Support', 'desc' => 'Direct connections to our corporate partners.'],
                        ['title' => 'Industry Exposure', 'desc' => 'Learn the tools used by top tech companies.']
                    ];
                @endphp

                @foreach($features as $feature)
                    <div class="group p-8 rounded-3xl bg-[#121212] border border-white/5 hover:border-white/20 transition-all duration-500">
                        <div class="flex items-center justify-center w-12 h-12 mb-8 transition-transform rounded-2xl bg-gradient-to-br from-gray-200 to-gray-500 group-hover:scale-110">
                            <svg class="w-6 h-6 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                        </div>
                        <h4 class="mb-3 text-lg font-bold text-white">{{ $feature['title'] }}</h4>
                        <p class="text-sm leading-relaxed text-gray-500">{{ $feature['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- program section -->
    <section class="py-12 md:py-24 bg-[#0a0a0a] relative overflow-hidden">
        <div class="relative z-10 px-6 mx-auto max-w-7xl">
            <!-- Section Header -->
            <div class="flex flex-col justify-between gap-6 mb-16 md:flex-row md:items-end">
                <div class="max-w-2xl">
                    <h2 class="text-xs font-black tracking-[0.4em] text-gray-500 uppercase mb-4 ">Professional Growth</h2>
                    <h3 class="text-4xl font-bold tracking-tight text-white md:text-6xl">Internship <span class="text-gray-600">Programs</span></h3>
                </div>
                <a href="/it-programs" class="text-[10px] font-bold tracking-[0.3em] text-white uppercase border-b border-white/20 pb-2 hover:border-white transition-all">View All Courses</a>
            </div>

            <!-- Cards Grid -->
            <div class="grid gap-8 md:grid-cols-3">
                @php
                    $programs = [
                        [
                            'name' => 'Cyber Security',
                            'desc' => 'Master ethical hacking, network security, and threat intelligence with hands-on labs.',
                            'duration' => '3 / 6 Months',
                            'tools' => 'Kali Linux, Wireshark, Metasploit',
                            'icon' => 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.040A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z'
                        ],
                        [
                            'name' => 'Data Science',
                            'desc' => 'Extract insights from data using statistical analysis, machine learning, and visualization.',
                            'duration' => '6 Months',
                            'tools' => 'Python, Pandas, TensorFlow',
                            'icon' => 'M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z'
                        ],
                        [
                            'name' => 'Python Development',
                            'desc' => 'Build scalable back-end applications and automation scripts using modern Python frameworks.',
                            'duration' => '3 Months',
                            'tools' => 'Django, Flask, PostgreSQL',
                            'icon' => 'M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4'
                        ]
                    ];
                @endphp

                @foreach($programs as $program)
                    <div class="group relative p-8 rounded-[2rem] bg-[#121212] border border-white/5 hover:border-white/20 transition-all duration-500 overflow-hidden">
                        <!-- Subtle Glow on Hover -->
                        <div class="absolute -top-24 -right-24 w-48 h-48 bg-white/[0.03] rounded-full blur-3xl group-hover:bg-white/[0.07] transition-all"></div>
                        
                        <div class="relative z-10">
                            <div class="flex items-start justify-between mb-8">
                                <div class="p-4 transition-all duration-500 border rounded-2xl bg-white/5 border-white/10 group-hover:bg-white group-hover:text-black">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $program['icon'] }}"></path></svg>
                                </div>
                                <span class="text-[10px] font-bold tracking-widest text-gray-500 uppercase">{{ $program['duration'] }}</span>
                            </div>

                            <h4 class="mb-4 text-2xl font-bold text-white">{{ $program['name'] }}</h4>
                            <p class="mb-8 text-sm leading-relaxed text-gray-500">{{ $program['desc'] }}</p>
                            
                            <div class="mb-8 space-y-4">
                                <div class="text-[10px] font-black tracking-widest text-white uppercase ">Tech Stack</div>
                                <p class="text-xs font-medium tracking-wide text-gray-400">{{ $program['tools'] }}</p>
                            </div>

                            <button class="w-full py-4 rounded-xl border border-white/10 text-white text-[11px] font-bold tracking-[0.2em] uppercase hover:bg-white hover:text-black transition-all duration-300">
                                Apply for Internship
                            </button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- SERVICE SECTION -->
    <section class="py-12 md:py-24 bg-[#0a0a0a] overflow-hidden">
        <div class="px-6 mx-auto max-w-7xl">
            <div class="grid gap-12 md:grid-cols-2">
                <!-- Service 1 -->
                <div class="group p-10 rounded-[2.5rem] bg-gradient-to-br from-[#161617] to-[#0a0a0a] border border-white/5 flex flex-col justify-between min-h-[400px]">
                    <div>
                        <h4 class="text-[10px] font-black tracking-[0.5em] text-gray-500 uppercase mb-6">Strategy & Growth</h4>
                        <h3 class="mb-6 text-4xl font-bold text-white">Digital Marketing</h3>
                        <p class="max-w-sm leading-relaxed text-gray-500">Elevate your online presence through data-driven SEO, high-converting social campaigns, and strategic ad management.</p>
                    </div>
                    <div class="flex items-center mt-8 space-x-4">
                        <span class="px-4 py-2 rounded-full bg-white/5 border border-white/10 text-[9px] font-bold text-gray-300 uppercase tracking-widest">SEO</span>
                        <span class="px-4 py-2 rounded-full bg-white/5 border border-white/10 text-[9px] font-bold text-gray-300 uppercase tracking-widest">Ads</span>
                        <span class="px-4 py-2 rounded-full bg-white/5 border border-white/10 text-[9px] font-bold text-gray-300 uppercase tracking-widest">Social</span>
                    </div>
                </div>

                <!-- Service 2 -->
                <div class="group p-10 rounded-[2.5rem] bg-gradient-to-br from-[#161617] to-[#0a0a0a] border border-white/5 flex flex-col justify-between min-h-[400px]">
                    <div>
                        <h4 class="text-[10px] font-black tracking-[0.5em] text-gray-500 uppercase mb-6">Identity & Vision</h4>
                        <h3 class="mb-6 text-4xl font-bold text-white">Branding Services</h3>
                        <p class="max-w-sm leading-relaxed text-gray-500">Creating iconic brand identities. From professional logo design to complete brand guidelines and creative assets.</p>
                    </div>
                    <div class="flex items-center mt-8 space-x-4">
                        <span class="px-4 py-2 rounded-full bg-white/5 border border-white/10 text-[9px] font-bold text-gray-300 uppercase tracking-widest">Logos</span>
                        <span class="px-4 py-2 rounded-full bg-white/5 border border-white/10 text-[9px] font-bold text-gray-300 uppercase tracking-widest">Identity</span>
                        <span class="px-4 py-2 rounded-full bg-white/5 border border-white/10 text-[9px] font-bold text-gray-300 uppercase tracking-widest">Creatives</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PLACEMENT SECTION -->
    <section class="py-12 md:py-24 bg-[#0a0a0a] overflow-hidden">
        <div class="px-6 mx-auto max-w-7xl">
            <!-- Section Header -->
            <div class="max-w-3xl mb-16">
                <h2 class="text-xs font-black tracking-[0.4em] text-gray-500 uppercase mb-4 ">Career Excellence</h2>
                <h3 class="text-4xl font-bold tracking-tight text-white md:text-6xl">Global <span class="text-gray-600">Placement</span> Network</h3>
            </div>

            <div class="grid gap-8 md:grid-cols-2">
                <!-- Corporate Placements -->
                <div class="relative group overflow-hidden rounded-[2.5rem] bg-[#121212] border border-white/5 p-10 transition-all duration-500 hover:border-white/20">
                    <div class="relative z-10">
                        <div class="flex items-center justify-center mb-8 text-white transition-all border w-14 h-14 rounded-2xl bg-white/5 border-white/10 group-hover:bg-white group-hover:text-black">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                        </div>
                        <h4 class="mb-4 text-3xl font-bold text-white">Corporate Hiring</h4>
                        <p class="mb-8 leading-relaxed text-gray-500">Connecting skilled developers, data scientists, and analysts with top-tier IT firms and multinational corporations.</p>
                        
                        <ul class="mb-10 space-y-3">
                            <li class="flex items-center text-xs font-bold tracking-widest text-gray-300 uppercase"><span class="w-1.5 h-1.5 rounded-full bg-white mr-3"></span> Software Engineers</li>
                            <li class="flex items-center text-xs font-bold tracking-widest text-gray-300 uppercase"><span class="w-1.5 h-1.5 rounded-full bg-white mr-3"></span> Non-IT Support Roles</li>
                        </ul>

                        <button class="px-8 py-3 rounded-full bg-white text-black text-[10px] font-black tracking-[0.2em] uppercase hover:bg-gray-200 transition-all">Register as Candidate</button>
                    </div>
                </div>

                <!-- Hospital Placements -->
                <div class="relative group overflow-hidden rounded-[2.5rem] bg-[#121212] border border-white/5 p-10 transition-all duration-500 hover:border-white/20">
                    <div class="relative z-10">
                        <div class="flex items-center justify-center mb-8 text-white transition-all border w-14 h-14 rounded-2xl bg-white/5 border-white/10 group-hover:bg-white group-hover:text-black">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path></svg>
                        </div>
                        <h4 class="mb-4 text-3xl font-bold text-white">Hospital Hiring</h4>
                        <p class="mb-8 leading-relaxed text-gray-500">Bridging the gap between premier healthcare institutions and medical professionals, including doctors and nurses.</p>
                        
                        <ul class="mb-10 space-y-3">
                            <li class="flex items-center text-xs font-bold tracking-widest text-gray-300 uppercase"><span class="w-1.5 h-1.5 rounded-full bg-white mr-3"></span> Specialist Doctors</li>
                            <li class="flex items-center text-xs font-bold tracking-widest text-gray-300 uppercase"><span class="w-1.5 h-1.5 rounded-full bg-white mr-3"></span> Healthcare Professionals</li>
                        </ul>

                        <button class="px-8 py-3 rounded-full border border-white/10 text-white text-[10px] font-black tracking-[0.2em] uppercase hover:bg-white/5 transition-all">Explore Vacancies</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- TESTIMONIAL -->
    <section class="pt-12 pb-24 md:py-24 bg-[#0a0a0a] border-t border-white/[0.03] overflow-hidden">
    <div class="px-6 mx-auto max-w-7xl">
        <div class="mb-20 text-center">
            <h2 class="text-xs font-black tracking-[0.5em] text-gray-500 uppercase mb-4">Success Stories</h2>
            <h3 class="text-4xl font-bold text-white">Hear from our <span class="text-gray-600">Alumni</span></h3>
        </div>

        <!-- Swiper Container -->
        <div class="pb-12 swiper testimonialSwiper !overflow-visible ">
            <div class="swiper-wrapper">
                @php
                    $testimonials = [
                        ['name' => 'Arjun Sharma', 'role' => 'Software Engineer', 'company' => 'Tech Global Solutions', 'text' => 'The mentorship was a game-changer. I transitioned from a student to a professional in 4 months. The projects are real-world ready.'],
                        ['name' => 'Dr. Sneha Kapoor', 'role' => 'Medical Officer', 'company' => 'City General Hospital', 'text' => 'Avenorr’s healthcare placement wing is exceptional. They understood my specialty and found a role that perfectly matched my expertise.'],
                        ['name' => 'Rahul Verma', 'role' => 'Data Scientist', 'company' => 'DataMind AI', 'text' => 'Working on live Python projects gave me the confidence to face technical interviews at top-tier firms. Highly recommended for AI aspirants.'],
                        ['name' => 'Priya Nair', 'role' => 'Cyber Analyst', 'company' => 'SecureNet Systems', 'text' => 'The focus on Kali Linux and threat intelligence was intense and rewarding. I felt industry-ready from day one of my placement.'],
                        ['name' => 'Dr. Kevin Thomas', 'role' => 'Senior Surgeon', 'company' => 'Apollo Healthcare', 'text' => 'Their professional approach to medical staffing is refreshing. They handle the logistics while you focus on your clinical career.'],
                        ['name' => 'Meera Joshi', 'role' => 'Digital Strategist', 'company' => 'Vivid Branding Agency', 'text' => 'The branding services and internship helped me understand the agency side of IT. It’s more than just training; it’s career building.'],
                    ];
                @endphp

                @foreach($testimonials as $t)
                <div class="h-auto swiper-slide">
                    <div class="relative p-10 h-full rounded-[2.5rem] bg-gradient-to-b from-[#121212] to-[#0a0a0a] border border-white/5 text-center flex flex-col justify-between">
                        <div class="absolute z-50 flex items-center justify-center w-10 h-10 font-serif text-3xl text-white -translate-x-1/2 rounded-full top-4 left-1/2">“</div>
                        
                        <p class="mb-8 text-sm italic leading-relaxed text-gray-400">
                            "{{ $t['text'] }}"
                        </p>

                        <div class="flex flex-col items-center">
                            <div class="flex items-center justify-center mb-4 overflow-hidden border rounded-full w-14 h-14 bg-white/5 border-white/10 grayscale">
                               <img 
                                        src="https://randomuser.me/api/portraits/women/44.jpg" 
                                        alt="User"
                                        class=""
                                    >
                                </div>
                            <h5 class="text-[10px] font-black tracking-widest text-white uppercase">{{ $t['name'] }}</h5>
                            <p class="text-gray-600 text-[9px] font-bold tracking-widest uppercase mt-1">Placed at {{ $t['company'] }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            
            <!-- Pagination -->
            <div class="swiper-pagination !-bottom-12"></div>
        </div>
    </div>
</section>

<style>
    .swiper-pagination-bullet { background: rgba(255,255,255,0.2) !important; }
    .swiper-pagination-bullet-active { background: #fff !important; }
    .swiper-slide { height: auto !important; } /* Ensures cards are same height */
</style>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        new Swiper('.testimonialSwiper', {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            autoplay: {
                delay: 4000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            breakpoints: {
                640: { slidesPerView: 2 },
                1024: { slidesPerView: 3 },
            },
        });
    });
</script>

</div>