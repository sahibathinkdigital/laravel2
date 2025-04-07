   <!-- ==================== Start Navbar ==================== -->

   <nav class="navbar navbar-expand-lg bord blur">
       <div class="container">

           <!-- Logo -->
           <a class="logo icon-img-100" href="/">
               <img src="{{ asset('client/assets/imgs/think-digital-logo.webp') }}" alt="logo">
           </a>

           <!-- navbar links -->
           <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
               <ul class="navbar-nav">
                   <li class="nav-item ">

                       <a class="nav-link " href="{{ route('home') }}" role="button" aria-haspopup="true"
                           aria-expanded="false"><span class="rolling-text">Home</span></a>
                   </li>
                   <li class="nav-item ">

                       <a class="nav-link " href="{{ route('about') }}" role="button" aria-haspopup="true"
                           aria-expanded="false"><span class="rolling-text">About Us</span></a>

                   </li>
                   <li class="nav-item">

                       <a class="nav-link " href="{{ route('services') }}" role="button" aria-haspopup="true"
                           aria-expanded="false"><span class="rolling-text">Services</span></a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link" href="{{ route('portfolio') }}"><span
                               class="rolling-text">Portfolio</span></a>
                   </li>
                   <li class="nav-item ">
                       <a class="nav-link " href="{{ route('blog') }}" role="button" aria-haspopup="true"
                           aria-expanded="false"><span class="rolling-text">Blog</span></a>
                   </li>
               </ul>
           </div>
           <div class="contact-nav">
               <h4><a class="nav-link " href="{{ route('contact') }}">Contact Us</a></h4>
           </div>
           <div class="topnav">
               <div class="menu-icon cursor-pointer">
                   <span class="icon ti-align-right"></span>
               </div>
           </div>
       </div>
   </nav>

   <div class="hamenu">
       <div class="logo icon-img-100">
           <img src="{{ asset('client/assets/imgs/think-digital-logo.webp') }}" alt="logo">
       </div>
       <div class="close-menu cursor-pointer ti-close"></div>
       <div class="container">
           <div class="row">
               <div class="col-lg-2">
                   <div class="menu-text">
                       <div class="text">
                           <h2>Menu</h2>
                       </div>
                   </div>
               </div>
               <div class="col-lg-7">
                   <div class="menu-links">
                       <ul class="main-menu rest">
                           <li>
                               <div class="o-hidden">
                                   <a href="{{ route('home') }}" class="link"><span class="fill-text"
                                           data-text="Home">Home</span></a>
                               </div>
                           </li>
                           <li>
                               <div class="o-hidden">
                                   <a href="{{ route('about') }}" class="link"><span class="fill-text"
                                           data-text="About Us">About Us</span></a>
                               </div>
                           </li>
                           <li>
                               <div class="o-hidden">
                                   <a href="{{ route('services') }}" class="link"><span class="fill-text"
                                           data-text="Services">Services</span></a>
                               </div>
                           </li>
                           <li>
                               <div class="o-hidden">
                                   <a href="{{ route('portfolio') }}" class="link"><span class="fill-text"
                                           data-text="Portfolio">Portfolio</span></a>
                               </div>
                           </li>
                           <li>
                               <div class="o-hidden">
                                   <a href="{{ route('blog') }}" class="link"><span class="fill-text"
                                           data-text="Blog">Blog</span></a>
                               </div>
                           </li>
                           <li>
                               <div class="o-hidden">
                                   <a href="{{ route('contact') }}" class="link"><span class="fill-text"
                                           data-text="Contact Us">Contact Us</span></a>
                               </div>
                           </li>
                       </ul>
                   </div>
               </div>

           </div>
       </div>
   </div>

   <!-- ==================== End Navbar ==================== -->
