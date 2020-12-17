
        <header class="clearfix header" data-spy="affix" data-offset-top="60">
            <!-- Header Top Start -->
           
            
            <!-- /.header-top -->
            <!-- /Header Top End -->

            <div id="menu-area">
                <div class="menu-area">
                    <div class="container">
                        <div class="row">
                        <div class="col-lg-4 col-sm-4">
                        </div>
                            <div class="col-lg-4 col-sm-4">
                                <div class="logo" style="text-align: center;">
                                    <a href="#home">
                                        <img src="{{ asset('assets/images/logo.jpg')}}"  alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-4">
                                <div class="menu-search">
                                    <nav class="main-menu">
                                    <ul>
                                            <!-- <li class="active-item"><a href="#main-slider">Home</a></li> -->
                                            <!-- <li><a href="#news_section">News</a></li>
                                            <li><a href="#our_events">Happenings</a></li> -->
                                            <!-- <li><a href="#compititions">competitions (Live)</a></li> -->
                                            <!-- <li><a href="#announcements">ANNOUCEMENT</a></li>
                                            <li><a href="#gallery">GALLERY</a></li> -->
                                            <!-- <li><a href="#gallery">Ushare</a></li>

                                            <li><a href="#contact_us">Contact</a></li> -->
                                            
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
                                <img src="{{ asset('assets/images/final-logo.jpg')}}" style="width:200px;" alt="Logo">
                            </a>
                        </div>
                        <div class="toggle-inner"></div>
                    </div>
                </div>
                <div class="mobile-menu-inner">
                    <div class="mobile-in-logo">
                        <div class="mob-inner-logo">
                            <a href="/">
                               <img src="{{ asset('assets/images/IndianOil-Parivaar-Logo.png')}}" style="width:200px;" alt="Logo">
                            </a>
                        </div>
                        <div class="close-menu">
                            <i class="fa fa-times"></i>
                        </div>
                    </div>
                    <nav id="accordian">
	                    <ul class="slide-menu">
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
        @include('user.partials.message')