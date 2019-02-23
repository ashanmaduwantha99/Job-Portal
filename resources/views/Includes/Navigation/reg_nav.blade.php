<style>
    .navbar{
        border-radius: 0 !important;
        background-color: ghostwhite;
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
                <li><a href="{{ URL::asset('#') }}"  class="smooth-scroll" id="navbar_link">J o b  P o r t a l</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#" id="navbar_link" >{{$username}}</a></li>
                <li><a href="{{ URL::asset('logout_reg_user') }}" id="navbar_link" ><span class="glyphicon glyphicon-log-out"> </span> Logout</a></li>
            </ul>

        </div>
    </div>
</nav>
