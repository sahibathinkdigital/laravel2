@extends('client.layout.client-layout')
{{-- meta tags --}}
@section('meta')
    @if ($seo)
        <!-- Meta Tags for SEO -->
        <meta name="description" content="{{ $seo->desc }}">
        <link rel="canonical" href="{{ url()->current() }}">
        <!-- Open Graph Tags for Social Media Sharing -->
        <meta property="og:title" content="{{ $seo->title }}">
        <meta property="og:description" content="{{ $seo->desc }}">
        <meta property="og:image" content="{{ asset($seo->image) }}">
        <meta property="og:url" content="{{ url()->current() }}">
        <!-- Twitter Card Tags -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="{{ $seo->title }}">
        <meta name="twitter:description" content="{{ $seo->desc }}">
        <meta name="twitter:image" content="{{ asset($seo->image) }}">
        <!-- Keywords Meta Tag (Optional) -->
        <meta name="keywords" content="{{ $seo->keywords }}">
        <!-- Structured Data for SEO -->
        <script type="application/ld+json">
   {
       "@context": "http://schema.org",
       "@type": "WebPage",
       "name": "{{ $seo->title }}",
       "description": "{{ $seo->desc }}"
   }
   </script>
    @else
    @endif
@endsection
{{-- meta tags --}}
@section('title')
    About Us
@endsection
@section('content')
    <header class="page-header" style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px);">
        <div class="container"
            style="translate: none; rotate: none; scale: none; opacity: 1; transform: translate(0px, 0px);">
            <div class="text-center">
                <h1>About Us</h1>
            </div>
        </div>
    </header>
    <!-- ============================= Start intro ============================== -->
    <section class="aboutus-page page-intro ">
        <div class="container-fluid rest group-img">
            <div class="img fit-img team-img">
                <img src="{{ asset('client/assets/imgs/background/team.webp') }}" alt="Team Image">
                <div class="team-member-dots">
                    <!-- Example team member dot -->
                    <div class="team-member-dot" data-member="member1"></div>
                    <div class="team-member-dot" data-member="member2"></div>
                    <div class="team-member-dot" data-member="member3"></div>
                    <div class="team-member-dot" data-member="member4"></div>
                    <div class="team-member-dot" data-member="member5"></div>
                    <div class="team-member-dot" data-member="member6"></div>
                    <div class="team-member-dot" data-member="member7"></div>
                    <div class="team-member-dot" data-member="member8"></div>
                    <div class="team-member-dot" data-member="member9"></div>
                </div>
            </div>
        </div>
        {{-- <div class="container-fluid rest group-img">
            <div class="img fit-img team-img">
                <img src="{{ asset('client/assets/imgs/background/team.webp') }}" alt="Team Image">
                <div class="team-member-dots">
                    <!-- Example team member dot -->
                    <div class="team-member-dot" data-member="member1"></div>
                    <div class="team-member-dot" data-member="member2"></div>
                    <div class="team-member-dot" data-member="member3"></div>
                    <div class="team-member-dot" data-member="member4"></div>
                    <div class="team-member-dot" data-member="member5"></div>
                    <div class="team-member-dot" data-member="member6"></div>
                    <div class="team-member-dot" data-member="member7"></div>
                    <div class="team-member-dot" data-member="member8"></div>
                    <div class="team-member-dot" data-member="member9"></div>
                    <!-- Add more dots as needed -->
                </div>
            </div>
        </div> --}}
        <div class="container">
            <div class="sec-head mb-40 about-desk">
                <h6 class="sub-title main-color mb-25 mt-20">Think Digital: Designing Your Digital Future</h6>
                <div class="bord pt-25 d-slideup wow animated aboutus-title bord-thin-top d-flex align-items-center">
                    <h5 class="fw-300">We're a collective of creative minds obsessed with crafting
                        strategic online marketing solutions. We're a one-stop shop for business owners looking to scale up,
                        build
                        a brand
                        community, and boost revenue. We're a dynamic team of passionate web designers, developers, graphic
                        designers, video editors and marketing strategists who collaborate to create impactful online
                        experiences. We're your partner in achieving your digital goals.
                    </h5>
                </div>
            </div>
            <div class="sec-head mb-40 about-mob">
                <div class="bord pt-25 d-slideup wow animated aboutus-title bord-thin-top d-flex align-items-center">
                    <p>We're a collective of creative minds obsessed with crafting
                        strategic online marketing solutions. We're a one-stop shop for business owners looking to scale up,
                        build brand community, and boost revenue. We're a dynamic team of passionate web designers,
                        developers, graphic designers, video editors and marketing strategists who collaborate to create
                        impactful online
                        experiences. We're your partner in achieving your digital goals.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- ======================== Start price ============================= -->
    <section class="price-hr pb-40">
        <div class="container">
            <div class="col">
                <div class="col-lg-12 valign">
                    <div class="cont md-mb50">
                        <div>
                            <h6 class="sub-title main-color mb-15 wow fadeIn">Over 500+ Clients</h6>
                            <h3 class="d-slideup wow ">
                                <span class="sideup-text">
                                    <span class="up-text ">Economical Pricing.</span>
                                </span>
                                <span class="sideup-text">
                                    <span class="up-text">Easy Scaling.</span>
                                </span>
                            </h3>
                            <div class="text mt-20 about-desk">
                                <h5 class="fw-300">At Think Digital, we're your one-stop shop for all things digital! We
                                    offer a wide range
                                    of services to help you build a strong online presence, from stunning website design and
                                    development to captivating social media marketing and user-friendly app creation.
                                    Whether you need help with search engine optimization (SEO) to get found online or
                                    eye-catching visuals to tell your brand story, our team of experts is here to bring your
                                    vision to life. Let's create something amazing together!
                                </h5>
                            </div>
                            <div class="text mt-20 about-mob">
                                <p>At Think Digital, we're your one-stop shop for all things digital! We
                                    offer a wide range
                                    of services to help you build a strong online presence, from stunning website design and
                                    development to captivating social media marketing and user-friendly app creation.
                                    Whether you need help with search engine optimization (SEO) to get found online or
                                    eye-catching visuals to tell your brand story, our team of experts is here to bring your
                                    vision to life. Let's create something amazing together!
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ============================== End price ============================= -->
    <!-- ============================ Start intro ============================= -->
    <section class="page-intro-cerv ">
        <div class="container">
            <div class="row ">
                <div class="col-lg-8 bord-thin-right rest">
                    <div class="row justify-content-end rest">
                        <div class="col-md-5 rest">
                            <div class="cont">
                                <div class="mb-40">
                                    <h2 class="fz-100 numb-font">1.</h2>
                                </div>
                                <h4>Our Mission</h4>
                                <div class="text mt-30">
                                    <p>To deliver best web design and digital marketing services through creativity,
                                        technical expertise, and a customer-centric approach.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 rest">
                            <div class="img fit-img bord-thin-left">
                                <img src="{{ asset('client/assets/imgs/background/ourmission.webp') }}" alt="Our Mission">
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-end bord-thin-top rest">
                        <div class="col-md-5 rest">
                            <div class="img fit-img">
                                <img src="{{ asset('client/assets/imgs/background/ourvision.webp') }}" alt="Our Vision">
                            </div>
                        </div>
                        <div class="col-md-5 rest">
                            <div class="cont bord-thin-left">
                                <div class="mb-40">
                                    <h2 class="fz-100 numb-font">2.</h2>
                                </div>
                                <h4>Our Vision</h4>
                                <div class="text mt-30">
                                    <p>To empower businesses by crafting innovative digital experiences that drive growth
                                        and success.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 rest">
                    <div class="bord-thin-top mt-100 position-re">
                        <div class="row">
                            <div class="col-md-11">
                                <div class="cont">
                                    <div class="mb-40">
                                        <h2 class="fz-100 numb-font">3.</h2>
                                    </div>
                                    <h4>Who We Are</h4>
                                    <div class="text mt-30 text-justify">
                                        <p class="">At Think Digital, we are a dynamic team of passionate
                                            individuals committed to
                                            delivering best web design and digital marketing services. Our collective
                                            experience in the industry ensures that we bring expertise, creativity, and a
                                            customer-centric approach to every project. Our team consists of talented web
                                            designers, skilled front end and back end developers, and digital marketing
                                            strategists who work collaboratively to create impactful online experiences for
                                            our clients. We pride ourselves on understanding our clients’ unique needs and
                                            translating them into effective digital solutions that drive results.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-dots bg-img" data-background="assets/imgs/patterns/dots.png"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ============================ End intro ============================= -->
    <!-- =========================Start Team Images=========================== -->
    <section class="team  each-team">
        <div class="container">
            <div class="sec-head ">
                <h2 class="sub-title fw-600 main-color mb-25">Our Team</h2>
                <div class="pt-25 bord-thin-top d-flex align-items-center">
                </div>
            </div>
            <div class="row">
                @foreach ($team as $teams)
                <div class="col-lg-4">
                    <div class="item md-mb50">
                        <div class="img team_img">
                            <img src="{{ asset( $teams->image_path) }}" alt="">
                            <div class="info relative">
                                <div class="team_links">
                                    <a
                                        href="{{$teams->linkedin_link}}">
                                        <i class='bx bxl-linkedin' style='color:#ffffff'></i>
                                    </a>
                                    <a href="{{$teams->social_link}}">
                                        <i class='bx bx-link' style='color:#ffffff'></i>
                                    </a>
                                </div>
                                <span class="fz-14">{{$teams->designation}}</span>
                                <h6 class="fz-18">{{$teams->name}}</h6>
                            </div>
                        </div>

                    </div>
                </div>
                @endforeach
                
            </div>
        </div>
    </section>
    <!-- ==================== End Team ==================== -->
@endsection

@section('script')
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const teamMembers = {
                member1: {
                    name: "Rupesh Sutar",
                    role: "Front End Developer",
                    linkedin: "https://www.linkedin.com/in/rupeshsutarofficial/",
                    portfolio: "https://rupeshsutarofficial.github.io/rupeshsutarportfolio/"
                },
                member2: {
                    name: "Nikhil Pande",
                    role: "Founder & CEO",
                    linkedin: "https://www.linkedin.com/in/mrnikhilpande?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app",
                    portfolio: "https://nikhilpande.in/"
                },
                member3: {
                    name: "Harsshika S",
                    role: "Web Developer",
                    linkedin: "https://www.linkedin.com/in/harshika-s-840858244/",
                    portfolio: "#"
                },
                member4: {
                    name: "Drushti Halolli",
                    role: "Digital Marketer",
                    linkedin: "https://www.linkedin.com/in/drushti-halolli-5ab367169/",
                    portfolio: "#"
                },
                member5: {
                    name: "Nazneen Tamboli",
                    role: "Human Resources",
                    linkedin: "https://www.linkedin.com/in/nazneen-tamboli-7786882b8/",
                    portfolio: "#"
                },
                member6: {
                    name: "Praharsh Raghavan",
                    role: "Video Editor",
                    linkedin: "https://www.linkedin.com/in/praharsh-raghavan-b4b785247/",
                    portfolio: "https://www.behance.net/gallery/202144777/Graphic-Design-Portfolio-(Praharsh)"
                },
                member7: {
                    name: "Shubham Sonawane",
                    role: "Backend Developer",
                    linkedin: "https://www.linkedin.com/in/shubham-sonawane-4a7341251/",
                    portfolio: "https://shubham-sonawane.netlify.app/"
                },
                member8: {
                    name: "Jinesh Gangwal",
                    role: "Digital Marketer",
                    linkedin: "https://www.linkedin.com/in/jinesh-gangwal-235302279/",
                    portfolio: "https://jineshportfolio.netlify.app/"
                },
                member9: {
                    name: "Pradnya Dhum",
                    role: "Graphic Designer",
                    linkedin: "https://www.linkedin.com/in/pradnya-dhum-09a224303?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app",
                    portfolio: "#"
                },
                // Add more team members as needed
            };

            const tooltip = document.createElement('div');
            tooltip.className = 'team-member-tooltip';
            document.body.appendChild(tooltip);

            let currentDot = null;

            const showTooltip = (e, memberKey) => {
                const member = teamMembers[memberKey];
                if (member) {
                    tooltip.innerHTML = `
                <div class="info relative" style="text-align: center;">
            <span class="fz-12 role">${member.role}</span>
            <h6 class="fz-18 name">${member.name}</h6>
            <div class="team_links">
                <a href="${member.linkedin}" target="_blank" class="linkedin" style="
                    position: absolute;
                    width: 40px;
                    height: 40px;
                    line-height: 40px;
                    text-align: center;
                    border: 2px solid rgba(255, 255, 255, 0.1);
                    border-radius: 50%;
                    top: 13px;
                    left: -52px;
                    transition: all 0.3s ease;
                " onmouseover="this.style.backgroundColor='#0090ff'; this.style.borderColor='#0090ff'; this.style.color='#111';" onmouseout="this.style.backgroundColor=''; this.style.borderColor='rgba(255, 255, 255, 0.1)'; this.style.color='';">
                    <i class='bx bxl-linkedin'></i>
                </a>
                <a href="${member.portfolio}" target="_blank" class="portfolio" style="
                    position: absolute;
                    width: 40px;
                    height: 40px;
                    line-height: 40px;
                    text-align: center;
                    border: 2px solid rgba(255, 255, 255, 0.1);
                    border-radius: 50%;
                    top: 13px;
                    right: -62px;
                    transition: all 0.3s ease;
                " onmouseover="this.style.backgroundColor='#0090ff'; this.style.borderColor='#0090ff'; this.style.color='#111';" onmouseout="this.style.backgroundColor=''; this.style.borderColor='rgba(255, 255, 255, 0.1)'; this.style.color='';">
                    <i class='bx bx-link'></i>
                </a>
            </div>
        </div>
            `;
                    tooltip.style.display = 'block';
                    tooltip.style.top = `${e.pageY + 10}px`;
                    tooltip.style.left = `${e.pageX + 10}px`;
                }
            };

            document.querySelectorAll('.team-member-dot').forEach(dot => {
                dot.addEventListener('mouseenter', (e) => {
                    if (!currentDot) {
                        const memberKey = e.target.dataset.member;
                        showTooltip(e, memberKey);
                    }
                });

                dot.addEventListener('mouseleave', () => {
                    if (!currentDot) {
                        tooltip.style.display = 'none';
                    }
                });

                dot.addEventListener('mousemove', (e) => {
                    if (!currentDot) {
                        tooltip.style.top = `${e.pageY + 10}px`;
                        tooltip.style.left = `${e.pageX + 10}px`;
                    }
                });

                dot.addEventListener('click', (e) => {
                    if (currentDot === dot) {
                        currentDot = null;
                        tooltip.style.display = 'none';
                    } else {
                        currentDot = dot;
                        const memberKey = e.target.dataset.member;
                        showTooltip(e, memberKey);
                    }
                });
            });

            window.addEventListener('click', (e) => {
                if (currentDot && !e.target.classList.contains('team-member-dot')) {
                    currentDot = null;
                    tooltip.style.display = 'none';
                }
            });
        });
    </script>
@endsection
