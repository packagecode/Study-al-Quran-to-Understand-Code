<style media="screen">
    .active {
        background: #55b4d4;
        border-radius: 5px;
    }

    .active a {
        color: #fffdfd !important;
    }
</style>
<section class="menu cid-qQlFclCbNQ" once="menu" id="menu2-0">
    <nav
        class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm bg-color transparent">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="http://studyalqurantounderstand.org/">
                        <img src="{{asset('assets/images/logo-150x125.png')}}" alt="Mobirise" title=""
                             style="height: 6rem;">
                    </a>
                </span>

            </div>
        </div>
		 <div id="google_translate_element" style="margin-top: 6px;"></div>

                    <script type="text/javascript">
                                                function googleTranslateElementInit() {
                                                    new google.translate.TranslateElement({pageLanguage: 'en', layout:
                                                                google.translate.TranslateElement.InlineLayout.SIMPLE},
                                                            'google_translate_element');
                                                }
                    </script>

                    <script type="text/javascript" 
                    src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script></div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true">
                <li class="nav-item  @if (\Request::is('/')) active @endif">
                    <a class="nav-link link text-black display-4" href="{{url('/')}}">HOME</a>
                </li>
                <li class="nav-item @if (\Request::is('about.html')) active @endif">
                    <a class="nav-link link text-black display-4" href="{{route('about')}}">ABOUT US</a>
                </li>
                {{-- <!--<li class="nav-item dropdown">-->
                 <!--    <a class="nav-link link dropdown-toggle text-black display-4" href="page1.html" data-toggle="dropdown-submenu" aria-expanded="false">-->
                 <!--        ABOUT US</a><div class="dropdown-menu"><a class="dropdown-item text-black display-4" href="page1.html">Goals &amp; Misson</a><a class="dropdown-item text-black display-4" href="page1.html">Our Services</a><a class="dropdown-item text-black display-4" href="page1.html">Our Team</a></div>-->
                 <!--</li>-->--}}
                <li class="nav-item @if (\Request::is('publication.html')) active @endif"><a
                        class="nav-link link text-black display-4" href="{{route('publication')}}">PUBLICATIONS</a>
                </li>
                <li class="nav-item @if (\Request::is('gallery.html')) active @endif"><a
                        class="nav-link link text-black display-4"
                        href="{{route('gallery')}}">GALLERY</a></li>
                <li class="nav-item @if (\Request::is('contact.html')) active @endif"><a
                        class="nav-link link text-black display-4" href="{{route('contact')}}">CONTACT
                        US</a></li>
                        <li class="nav-item @if (\Request::is('user/registration/create')) active @endif"><a
                        class="nav-link link text-black display-4" href="{{route('registration.create')}}">REGISTRATION
                        </a></li>
                <li class="nav-item @if (\Request::is('important_link.html')) active @endif"><a
                        class="nav-link link text-black display-4" href="{{route('important.link')}}">IMPORTANT LINK</a></li>
                @if($liveVideoCount > 0)
                    <li class="nav-item @if (\Request::is('liveclass.html')) active @endif"
                        style="background-color: #f70404 !important"><a class="nav-link link text-black  display-4"
                                                                        href="{{route('liveclass')}}">Live</a>
                    </li>
                @endif
            </ul>

        </div>
    </nav>
</section>
