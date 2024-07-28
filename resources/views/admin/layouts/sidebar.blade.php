<div class="sidebar-wrapper">
    <div>
        <div class="logo-wrapper">
            <a href="{{route('admin.home')}}" data-bs-original-title="" title="">
                <img src="{{asset('assets/images/logo/company.svg')}}" style="width: 195px;">
            </a>
            <div class="back-btn"><i class="fa fa-angle-left"></i></div>
            <div class="toggle-sidebar" checked="checked">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     class="feather feather-grid status_toggle middle sidebar-toggle">
                    <rect x="3" y="3" width="7" height="7"></rect>
                    <rect x="14" y="3" width="7" height="7"></rect>
                    <rect x="14" y="14" width="7" height="7"></rect>
                    <rect x="3" y="14" width="7" height="7"></rect>
                </svg>
            </div>
        </div>
        <div class="logo-icon-wrapper"><a href="{{route('admin.home')}}"><img class="img-fluid"
                                                                 src="{{asset('assets/images/logo/ob-logo-32x32.png')}}"
                                                                 alt=""></a></div>
        <nav class="sidebar-main">
            <div class="left-arrow disabled" id="left-arrow">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     class="feather feather-arrow-left">
                    <line x1="19" y1="12" x2="5" y2="12"></line>
                    <polyline points="12 19 5 12 12 5"></polyline>
                </svg>
            </div>
            <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar" data-simplebar="init" style="display: block;">
                    <div class="simplebar-wrapper" style="margin: 0px;">
                        <div class="simplebar-height-auto-observer-wrapper">
                            <div class="simplebar-height-auto-observer"></div>
                        </div>
                        <div class="simplebar-mask">
                            <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                <div class="simplebar-content-wrapper" style="height: 100%; overflow: hidden scroll;">
                                    <div class="simplebar-content" style="padding: 0px;">
                                        <li class="back-btn"><a href="index.html"><img class="img-fluid"
                                                                                       src="{{asset('assets/images/logo/logo-icon.png')}}"
                                                                                       alt=""></a>
                                            <div class="mobile-back text-end"><span>Back</span><i
                                                        class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                                        </li>

                                        <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav"
                                                                    href="{{route('admin.home')}}">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-home">
                                                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                                </svg>
                                                <span>Home</span>
                                                <div class="according-menu"><i class="fa fa-angle-right"></i></div>
                                            </a></li>

                                        <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav"
                                            href="{{route('admin.user-list')}}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-home">
                                                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                                <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                            </svg>
                                            <span>User List</span>
                                            <div class="according-menu"><i class="fa fa-angle-right"></i></div>
                                        </a></li>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="simplebar-placeholder" style="width: auto; height: 2559px;"></div>
                    </div>
                    <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                        <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                    </div>
                    <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                        <div class="simplebar-scrollbar"
                             style="height: 89px; transform: translate3d(0px, 0px, 0px); display: block;"></div>
                    </div>
                </ul>
            </div>
            <div class="right-arrow" id="right-arrow">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     class="feather feather-arrow-right">
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                </svg>
            </div>
        </nav>
    </div>
</div>
