<style>
    .navbar{
        border-radius: 0 !important;
        background-color: lightblue;
        /*background-image: url("../Media/Images/navbarimg.jpg");*/
        border-color: transparent;
        width: 100%;
        position: fixed;
        overflow: hidden;
        z-index: 1;
        top: 0;
        left: 0;
    }
    #navbar_link{
        font-style: inherit;
        color: midnightblue;
    }
</style>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-left" id="navbar_link">
                <li><a href="{{ URL::asset('admin_home') }}"  class="smooth-scroll" id="navbar_link"><b>J O B  P O R T A L - A D M I N</b></a></li>
                <li><a href="{{ URL::asset('#') }}"  class="smooth-scroll" id="navbar_link"><b>News Feeds</b></a></li>
                <li><a href="{{ URL::asset('job') }}"  class="smooth-scroll" id="navbar_link"><b>Search Job Seekers</b></a></li>
                <li><a href="{{ URL::asset('settings') }}"  class="smooth-scroll" id="navbar_link"><b>Setings</b></a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{ URL::asset('#') }}" id="navbar_link" ><b>{{Auth::user()->username}}</b></a></li>
                <li><a href="{{ URL::asset('logout') }}" id="navbar_link" ><span class="glyphicon glyphicon-log-in"> </span> <b>Logout</b></a></li>
            </ul>

        </div>
    </div>
</nav>
