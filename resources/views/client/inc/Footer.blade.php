 <!-- ==================== Start Footer ==================== -->

 <footer class="sub-bg radius-30 mt-30 main-footer">
     <img class="footer-graphics" src="{{ asset('client/assets/imgs/patterns/footer graphics1.webp') }}"
         alt=" Footer graphics">
     <div class="container pb-40 pt-40 ontop">
         <div class="d-flex justify-content-center mb-30">
             <div class="logo icon-img-120">
                 <img src="{{ asset('client/assets/imgs/think-digital-logo.png') }}" alt="logo">
             </div>
         </div>
         <div
             class="info-comp d-flex align-items-center justify-content-center pt-40 pb-40 bord-thin-bottom bord-thin-top">
             <div class="mr-30">
                 <span class="icon main-color mr-10 ti-email cursor-pointer"
                     style=" transform: translateY(2px) !important;"></span>
                 <a href="mailto:contact@thinkdigitalindia.in"><span class="text">contact@thinkdigitalindia.in
                     </span></a>
             </div>
             <div class="mr-30">
                 <span class="icon main-color mr-10 ti-mobile cursor-pointer"></span>
                 <a href="https://wa.me/918411854268"></a><span class="text">+91 8411854268 </span>
             </div>
             <div class="location">
                 <span class="icon main-color mr-10  ti-location-pin" style="margin-top: -22px;"></span>
                 <span class="text">A4, Rahalkar Chambers, Opp.Smart Bazar, College Road,
                     Nashik, Mahrashtra 422005 </span>
             </div>
         </div>

         <div class="row sub-footer mt-40 pt-25 pb-25  copy-glass radius-30 padding-rl-30">
             <div class="col-lg-4 footer-link col-md-6 md-mb15">
                 <ul class="rest d-flex align-items-center">
                     <li class="cursor-pointer">
                         <a href="https://www.facebook.com/thinkdigitalindia.in" target="_blank">
                             <i class="fab fa-facebook-f"></i>
                         </a>
                     </li>
                     <li class="cursor-pointer ml-30">
                         <a href="https://www.youtube.com/@ThinkDigitalIndiaa" target="_blank">
                             <i class="fab fa-youtube"></i>
                         </a>
                     </li>
                     <li class="cursor-pointer ml-30">
                         <a href="https://www.linkedin.com/company/thinkdigitalindia-in/" target="_blank">
                             <i class="fab fa-linkedin-in"></i>
                         </a>
                     </li>
                     <li class="cursor-pointer ml-30">
                         <a href="https://www.instagram.com/thinkdigitalindia.in/" target="_blank">
                             <i class="fab fa-instagram"></i>
                         </a>
                     </li>
                     <li class="cursor-pointer ml-30">
                         <a href="https://x.com/thinkdigitalnsk" target="_blank">
                             <i class="fab fa-x-twitter"></i>
                         </a>
                     </li>
                 </ul>
             </div>
             <div class="col-lg-4 order-md-3">
                 <div class="text-center">
                     <p class="fz-13">Copyright © 2016-2024 All Rights Reserved <span class="flag-gradient">#Proudly
                             Indian</span>
                     </p>
                 </div>
             </div>
             <div class="col-lg-4 col-md-6 md-mb15 order-md-2">
                 <div class="links d-flex justify-content-end">
                     <ul class="rest d-flex align-items-center">
                         <li>
                             <a href="{{ route('portfolio') }}">Portfolio</a>
                         </li>
                         <li class="ml-20">
                             <a href="{{ route('career') }}">Careers</a>
                         </li>
                         <li class="ml-20">
                             <a href="{{ route('about') }}">About</a>
                         </li>
                     </ul>
                 </div>
             </div>
         </div>

     </div>

 </footer>

 <!-- ==================== End Footer ==================== -->
