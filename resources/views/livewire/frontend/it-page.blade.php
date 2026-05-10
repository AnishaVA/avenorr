<div>
    <!-- HERO SECTION -->
<section class="pt-32 pb-20 bg-[#0a0a0a] border-b border-white/[0.03]">
    <div class="px-6 mx-auto text-center max-w-7xl">
        <h1 class="text-xs font-black tracking-[0.5em] text-gray-500 uppercase mb-4 ">The Academy</h1>
        <h2 class="mb-8 text-5xl font-bold tracking-tighter text-white md:text-7xl">
            Advanced <span class="text-gray-600">Internships.</span>
        </h2>
        <p class="max-w-2xl mx-auto text-lg leading-relaxed text-gray-400">
            Choose your path in the digital frontier. Our programs are designed by industry veterans to ensure you master the tools used in production environments today.
        </p>
    </div>
</section>

<!-- Detailed Program List -->
<section class="py-12 md:py-24 bg-[#0a0a0a]">
    <div class="px-6 mx-auto space-y-12 max-w-7xl">
        @php
            $it_programs = [
                [
                    'title' => 'Cyber Security',
                    'tag' => 'Security Operations',
                    'duration' => '3 - 6 Months',
                    'curriculum' => ['Ethical Hacking', 'Network Security', 'Vulnerability Assessment', 'Threat Intelligence'],
                    'tools' => 'Kali Linux, Metasploit, Nmap, Wireshark',
                    'level' => 'Intermediate to Advanced'
                ],
                [
                    'title' => 'Data Science',
                    'tag' => 'AI & Analytics',
                    'duration' => '6 Months',
                    'curriculum' => ['Statistical Analysis', 'Machine Learning', 'Big Data Visualization', 'Neural Networks'],
                    'tools' => 'Python, TensorFlow, Pandas, Scikit-learn',
                    'level' => 'Beginner to Advanced'
                ],
                [
                    'title' => 'Python Full Stack',
                    'tag' => 'Development',
                    'duration' => '4 Months',
                    'curriculum' => ['Advanced Python', 'Django/Flask Frameworks', 'REST API Design', 'Database Management'],
                    'tools' => 'PostgreSQL, Docker, Git, Redis',
                    'level' => 'Foundation to Professional'
                ]
            ];
        @endphp

        @foreach($it_programs as $program)
            <div class="group relative bg-[#121212] border border-white/5 rounded-[2.5rem] overflow-hidden hover:border-white/20 transition-all duration-500">
                <div class="p-8 md:p-12">
                    <div class="grid items-center gap-8 md:grid-cols-12">
                        
                        <!-- Info -->
                        <div class="md:col-span-5">
                            <span class="text-[10px] font-black tracking-widest text-white px-3 py-1 bg-white/5 rounded-full uppercase  mb-4 inline-block">
                                {{ $program['tag'] }}
                            </span>
                            <h3 class="mb-4 text-3xl font-bold text-white">{{ $program['title'] }}</h3>
                            <div class="flex items-center space-x-6 text-xs font-bold tracking-widest text-gray-500 uppercase">
                                <span>{{ $program['duration'] }}</span>
                                <span class="w-1 h-1 bg-gray-700 rounded-full"></span>
                                <span>{{ $program['level'] }}</span>
                            </div>
                        </div>

                        <!-- Curriculum Points -->
                        <div class="md:col-span-4">
                            <div class="text-[10px] font-black tracking-[0.2em] text-gray-600 uppercase mb-4">Core Curriculum</div>
                            <ul class="grid grid-cols-1 gap-2">
                                @foreach($program['curriculum'] as $item)
                                    <li class="flex items-center text-sm text-gray-400">
                                        <svg class="w-4 h-4 mr-2 text-white/20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M5 13l4 4L19 7"></path></svg>
                                        {{ $item }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        <!-- CTA & Tools -->
                        <div class="text-right md:col-span-3">
                            <div class="hidden mb-6 md:block">
                                <div class="text-[10px] font-black tracking-[0.2em] text-gray-600 uppercase mb-2">Primary Tools</div>
                                <p class="text-xs font-medium leading-relaxed text-gray-500">{{ $program['tools'] }}</p>
                            </div>
                            <button class="w-full md:w-auto px-10 py-4 bg-white text-black font-black tracking-widest text-[10px] uppercase rounded-xl hover:bg-gray-200 transition-all">
                                Apply Now
                            </button>
                        </div>

                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>

<!-- INQUIRY FORM -->
<section id="apply-section" class="py-12 md:py-24 bg-[#0a0a0a] relative">
    <div class="max-w-4xl px-6 mx-auto">
        <div class="p-4 md:p-12 rounded-[3rem] bg-gradient-to-br from-[#161617] to-[#0d0d0d] border border-white/5 relative overflow-hidden">
            <!-- Decorative Silver Glow -->
            <div class="absolute -bottom-20 -right-20 w-64 h-64 bg-white/[0.03] rounded-full blur-[100px]"></div>

            <div class="relative z-10 mb-12 text-center">
                <h3 class="mb-4 text-3xl font-bold text-white">Start Your Journey</h3>
                <p class="text-sm text-gray-500">Submit your details and our mentors will contact you for a profile review.</p>
            </div>

            <form action="#" class="relative z-10 grid grid-cols-1 gap-6 md:grid-cols-2">
                <input type="text" placeholder="FULL NAME" class="w-full px-6 py-4 text-xs font-bold tracking-widest text-white placeholder-gray-600 transition-all border bg-white/5 border-white/10 rounded-xl focus:border-white/30 focus:outline-none">
                
                <input type="email" placeholder="EMAIL ADDRESS" class="w-full px-6 py-4 text-xs font-bold tracking-widest text-white placeholder-gray-600 transition-all border bg-white/5 border-white/10 rounded-xl focus:border-white/30 focus:outline-none">
                
                <select class="w-full px-6 py-4 text-xs font-bold tracking-widest text-gray-400 transition-all border appearance-none bg-white/5 border-white/10 rounded-xl focus:border-white/30 focus:outline-none">
                    <option>SELECT PROGRAM</option>
                    <option>Cyber Security</option>
                    <option>Data Science</option>
                    <option>Python Development</option>
                </select>

                <input type="tel" placeholder="PHONE NUMBER" class="w-full px-6 py-4 text-xs font-bold tracking-widest text-white placeholder-gray-600 transition-all border bg-white/5 border-white/10 rounded-xl focus:border-white/30 focus:outline-none">

                <div class="md:col-span-2">
                    <textarea rows="4" placeholder="TELL US ABOUT YOUR GOALS" class="w-full px-6 py-4 text-xs font-bold tracking-widest text-white placeholder-gray-600 transition-all border bg-white/5 border-white/10 rounded-xl focus:border-white/30 focus:outline-none"></textarea>
                </div>

                <div class="md:col-span-2">
                    <button class="w-full py-5 bg-gradient-to-r from-gray-200 to-gray-500 text-black font-black tracking-[0.3em] uppercase rounded-xl hover:shadow-[0_0_30px_rgba(255,255,255,0.1)] transition-all">
                        Submit Application
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>


</div>
