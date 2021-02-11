@auth
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="chat-left-aside">
                    <h3 class="title">User Panel</h3>
                    <ul class="list-links">
                        <li><a href="{{route('myprofile')}}">My Profile</a></li>
                        <li><a href="{{route('user_products')}}">My Notes</a></li>
                        @php
                            $userRoles = Auth::user()->roles->pluck('name');
                        @endphp

                        @if($userRoles->contains('admin'))
                            <li><a href="{{route('admin_home')}}" target="_blank"> Admin Panel</a></li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endauth
