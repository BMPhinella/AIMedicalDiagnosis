<header>
    <div  class="headerwrapper" style="background-color:#3399ff">
        <div class="header-left">
            <a  href="/logout" class="fa fa-lock pr-3" style="color:white; font-size:20px" > Logout</a>
            <div class="pull-right">
                <a href="#" class="menu-collapse">
                    <i class="fa fa-bars"></i>
                </a>
            </div>
        </div><!-- header-left -->
        <div  class="header-right">
            <div class="pull-right">
                <div class="media-body">
                    <h4 style="color:white" class="media-heading">You're logged in as {{ auth()->user()->name }}</h4>
                </div>
            </div><!-- media -->
        </div><!-- pull-right -->
    </div><!-- header-right -->
</header>