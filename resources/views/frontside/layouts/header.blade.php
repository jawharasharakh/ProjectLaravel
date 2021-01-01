<div class="loader_bg">
    <div class="loader"><img src="images/loading.gif" alt="#" /></div>
</div>
<!-- end loader -->
<!-- header -->
<header>
    <!-- header inner -->
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                    <div class="full">
                        <div class="center-desk">
                            <div class="logo"> <a href="index.html"><img src="images/logo.jpg" alt="#"></a> </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                    <div class="menu-area">
                        <div class="limit-box">
                            <nav class="main-menu">
                                <ul class="menu-area-main">
                                <li class="active"> <a href="{{route('frontside.home')}}">Home</a> </li>
                                    <li> <a href="{{route('frontside.aboutus')}}">About us</a> </li>
                                    <li> <a href="{{route('frontside.meet')}}"> Meet me</a> </li>
                                    <li> <a href="{{route('frontside.whatwedo')}}"> What we do</a> </li>
                                    <li> <a href="{{route('frontside.contact')}}">Contact us</a> </li>
                                    <li> <a href="{{route('frontside.contact')}}">Sing</a> </li>
                                    @guest
                                    <li class="nav-item"> 
                                      <a class="nav-Link" href= "{{route('login')}}">login<span
                                         class="sr-only">(current)</span></a> </li> 
                                    @endguest
                                   
                                    @auth
                                    <li class="nav-item"> 
                                        <a class="nav-Link" href= "{{route('dashboard..homeDash')}}">dashboard<span
                                           class="sr-only">(current)</span></a> </li> 
                                           
                                           <li class="nav-item"> 
                                            <a class="nav-Link" href= "{{route('logout')}}">logout<span
                                               class="sr-only">(current)</span></a> </li>
                                    @endauth
                                    <li class="mean-last"> <a href="#"><img src="images/search_icon.png" alt="#" /></a> </li>
                                    <li class="mean-last"> <a href="#"><img src="images/top-icon.png" alt="#" /></a> </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end header inner -->
</header>