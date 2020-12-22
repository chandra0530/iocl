<header class="clearfix header" data-spy="affix" data-offset-top="60">
            <!-- Header Top Start -->
           
            
            <!-- /.header-top -->
            <!-- /Header Top End -->

            <div id="menu-area">
                <div class="menu-area">
                    <div class="container">
                        <div class="row">
                        <div class="col-lg-4 col-sm-4"></div>
                            <div class="col-lg-4 col-sm-4">
                                <div class="logo">
                                    <a href="#home">
                                        <img src="{{ asset('assets/images/logo.jpg')}}" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-4">
                                <div class="menu-search">
                                    <nav class="main-menu">
                                    <ul style="display: flex;">
                                    <li ><a href="{{ route('home') }}">Parivaar</a></li>
                        <!-- <li class="{{ Request::is('news')? 'active-item' : ''  }}"><a href="{{ route('news') }}">News</a></li>
                        <li class="{{ Request::is('events')? 'active-item' : ''  }}"><a href="{{ route('events') }}">Happenings</a></li> -->
                        <li class="{{ Request::is('compititions')? 'active-item' : ''  }}"><a href="{{ route('compititions') }}">Competitions</a></li>
                        <!-- <li class="{{ Request::is('announcements')? 'active-item' : ''  }}"><a href="{{ route('announcements') }}">ANNOUCEMENT</a></li>
                        <li class="{{ Request::is('gallery')? 'active-item' : ''  }}"><a href="{{ route('user.gallery') }}">GALLERY</a></li> -->
                        <li ><a href="/ushare">UShare</a></li>

                        <!-- <li class="{{ Request::is('contact')? 'active-item' : ''  }}"><a href="{{ route('contact') }}">Contact</a></li> -->
                        <li>
                                                <a>{{Auth::user()->name}}</a>
                                                <ul class="dropdown-menus">
                                                <li><a href="/profile">Profile</a></li>
                                                <li><a href="/logout">Logout</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </nav>
                                    
                                </div> <!-- /.menu-search -->
                            </div>
                        </div> <!-- /.row -->
                    </div> <!-- /.container -->
                </div> <!-- /.menu-area -->

                <!-- Mobile Menu -->
                <div id="mobile-nav-wrap" class="clearfix">
                    <div class="container">
                        <div class="mobile-logo">
                            <a href="/">
                                <img src="{{ asset('assets/images/final-logo.jpg')}}" style="width:200px;"  alt="Logo">
                            </a>
                        </div>
                        <div class="toggle-inner"></div>
                    </div>
                </div>
                <div class="mobile-menu-inner">
                    <div class="mobile-in-logo">
                        <div class="mob-inner-logo">
                            <a href="/">
                               <img src="{{ asset('assets/images/final-logo.jpg')}}" style="width:200px;" alt="Logo">
                            </a>
                        </div>
                        <div class="close-menu">
                            <i class="fa fa-times"></i>
                        </div>
                    </div>
                    <nav id="accordian">
                        <ul class="slide-menu">
                        <li ><a href="/">Parivaar</a></li>
                        <!-- <li><a href="/news">News</a></li>
                        <li><a href="/events">Events</a></li>
                         -->
                         <li><a href="/compotitions">COMPETITIONS</a></li>
                         <li ><a href="/ushare">UShare</a></li>
                        <!-- <li><a href="/gallery">GALLERY</a></li>

                        <li><a href="/contact">Contact</a></li> -->
                        <li >
	                            <a href="#" class="dropdown-here">{{Auth::user()->name}}</a>
	                            <ul class="submenuItems">
                                <li><a href="/profile">Profile</a></li>
                                                <li><a href="/logout">Logout</a></li>
	                            </ul>
	                        </li>
                        </ul>
                    </nav>
                   
                    <div class="top-left smallest visible-xs">
                        <ul>
                            <!-- <li><a href="#"><span><i class="fa fa-paper-plane"></i>Location:</span> Iocl parival </a></li>
                            <li><a href="#"><span><i class="fa fa-phone"></i>Phone:</span> iocl parivar</a></li> -->
                        </ul>
                    </div> <!-- /.top-left -->
                </div>
                <!-- Mobile Menu -->
            </div> <!-- /#menu-area -->
        </header> <!-- /.header -->
