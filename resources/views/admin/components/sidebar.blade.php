

<div class="app-sidebar sidebar-shadow">
    <div class="app-header__logo">
        <img src="{{asset('images/version/garden-logo.png')}}"  class="logo-src"  alt="logo"/>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                </button>
            </div>
        </div>
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
    </div>    <div class="scrollbar-sidebar ps ps--active-y">
        <div class="app-sidebar__inner">
            <ul class="vertical-nav-menu metismenu">
                <li class="app-sidebar__heading">Menu</li>
                <li class="">
                    <a href="#" aria-expanded="false">
                        <i class="metismenu-icon pe-7s-home"></i>Dashboard
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul class="mm-collapse" style="height: 7.04px;">
                        <li>
                            <a href="{{route("dashboard")}}">
                                <i class="metismenu-icon"></i>Analytics
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" aria-expanded="false">
                        <i class="metismenu-icon pe-7s-browser"></i>Posts
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul class="mm-collapse">
                        <li>
                            <a href="{{route("posts")}}">
                                <i class="metismenu-icon"></i> All
                            </a>
                        </li>
{{--                        <li>--}}
{{--                            <a href="">--}}
{{--                                <i class="metismenu-icon"></i>My posts--}}
{{--                            </a>--}}
{{--                        </li>--}}
                        <li>
                            <a href="{{route("posts.create.admin")}}">
                                <i class="metismenu-icon"></i>Add post
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" aria-expanded="false">
                        <i class="metismenu-icon pe-7s-users"></i>Users
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul class="mm-collapse">
                        <li>
                            <a href="{{route("users")}}">
                                <i class="metismenu-icon"></i>All
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="">
                    <a href="#" aria-expanded="false">
                        <i class="metismenu-icon pe-7s-comment"></i>Comments
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul class="mm-collapse" style="height: 7.04px;">
                        <li>
                            <a href="{{route("all.comments")}}">
                                <i class="metismenu-icon"></i>All
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="">
                    <a href="#" aria-expanded="false">
                        <i class="metismenu-icon pe-7s-link"></i>Navigation
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul class="mm-collapse" style="height: 7.04px;">
                        <li>
                            <a href="{{route('all.nav')}}">
                                <i class="metismenu-icon"></i>All
                            </a>
                        </li>
                        <li>
                            <a href="{{route('nav.create')}}">
                                <i class="metismenu-icon"></i>Add
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="">
                    <a href="#" aria-expanded="false">
                        <i class="metismenu-icon pe-7s-share"></i>Social Media
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul class="mm-collapse" style="height: 7.04px;">
                        <li>
                            <a href="{{route('all.socials')}}">
                                <i class="metismenu-icon"></i>All
                            </a>
                        </li>
                        <li>
                            <a href="{{route('soc.create')}}">
                                <i class="metismenu-icon"></i>Add
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 909px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 817px;"></div></div></div>
</div>
