<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">

        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                @if (Auth::user()->profile_photo_path)
                    <img src="{{Storage::url(Auth::user()->profile_photo_path)}}" style="height: 80px" alt="user-img" class="img-circle">
                @endif
                <li class="user-pro"> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><span class="hide-menu">{{Auth::user()->name}}</span></a>

                    <ul aria-expanded="false" class="collapse">
                        <li><a href="javascript:void(0)"><i class="ti-user"></i> My Profile</a></li>
                        <li><a href="javascript:void(0)"><i class="ti-wallet"></i> My Balance</a></li>
                        <li><a href="javascript:void(0)"><i class="ti-email"></i> Inbox</a></li>
                        <li><a href="{{route('admin_setting')}}"><i class="ti-settings"></i> Setting</a></li>
                        @auth
                            <li><a href="#"><i class="fa fa-power-off"></i> {{Auth::user()->name}}</a></li>
                            <li><a href="{{route('logout')}}"><i class="fa fa-power-off"></i> Logout</a></li>
                        @endauth
                    </ul>
                </li>

                <li> <a class=" waves-effect waves-dark" href="{{ route('admin_category') }}" aria-expanded="false">Categorys</a>

                </li>

                <li><a class=" waves-effect waves-dark" href="{{ route('admin_products') }}" aria-expanded="false">Products</a>

                </li>
                <li><a class=" waves-effect waves-dark" href="{{ route('admin_setting') }}" aria-expanded="false">Settings</a>

                </li>

                <li> <a class=" waves-effect waves-dark" href="{{ route('admin_message') }}" aria-expanded="false">Contact Messages</a>

                </li>
                <li> <a class=" waves-effect waves-dark" href="{{ route('admin_users') }}" aria-expanded="false">User</a>

            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
