<div class="app-header header-shadow">
    <div class="app-header__logo">

            <img src="{{asset('images/version/garden-logo.png')}}" class="app-header__logo" alt="logo"/>

{{--        <div class="header__pane ml-auto">--}}
{{--            <div>--}}
{{--                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">--}}
{{--                            <span class="hamburger-box">--}}
{{--                                <span class="hamburger-inner"></span>--}}
{{--                            </span>--}}
{{--                </button>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
                <span>
                    <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
    </div>
    <div class="app-header__content">
        <div class="app-header-left">
{{--            <div class="search-wrapper">--}}
{{--                <div class="input-holder">--}}
{{--                    <input type="text" class="search-input" placeholder="Type to search">--}}
{{--                    <button class="search-icon"><span></span></button>--}}
{{--                </div>--}}
{{--                <button class="close"></button>--}}
{{--            </div>--}}
            <ul class="header-menu nav">
{{--                <li class="nav-item">--}}
{{--                    <a href="javascript:void(0);" class="nav-link">--}}
{{--                        <i class="nav-link-icon fa fa-database"> </i>--}}
{{--                        LOGOUT--}}
{{--                    </a>--}}
{{--                </li>--}}

            </ul>

            <a href="{{route('logout')}}" class="nav-link">
                LOGOUT
            </a>
            <a href="{{route('home')}}" class="nav-link">
                RETURN TO FORESTTIME
            </a>
        </div>
        <div class="app-header-right">
            <div class="header-btn-lg pr-0">
                <div class="widget-content p-0">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left">
                            <div class="btn-group">
                                <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                    <img width="42" class="rounded-circle" src="{{asset("images/profilePhotos/".$admin->photo)}}" alt="">
                                    <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                </a>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                    <a href="{{route('users.show',$admin->id)}}" tabindex="0" class="dropdown-item">User Account</a>

                                </div>
                            </div>
                        </div>
                        <div class="widget-content-left  ml-3 header-user-info">
                            <div class="widget-heading">
                                {{$admin->first_name . " " . $admin->last_name}}
                            </div>
                            <div class="widget-subheading">
                                Administrator
                            </div>
                        </div>
                        <div class="widget-content-right header-user-info ml-3">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
