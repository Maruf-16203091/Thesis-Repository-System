
          <div class="col-md-3 static">
            <div class="profile-card">
              <a href="{{ route('single-user', Auth::user()->id) }}">
                @if (isset(auth()->user()->image))
                <img src="{{asset(auth()->user()->image)}}" alt="user" class="profile-photo" />
                @else
                <img src="{{asset('back/images/user/default.jpg')}}" alt="user" class="profile-photo" />
                @endif
              </a>
            	<h5><a href="{{ route('single-user', Auth::user()->id) }}" class="text-white">{{ Auth::user()->name }}</a></h5>
            	<a href="{{ route('single-user', Auth::user()->id) }}" class="text-white">{{ Auth::user()->user_id }}</a>
            </div><!--profile card ends-->
            <ul class="nav-news-feed">
              <li><i class="icon ion-ios-people"></i><div><a href="{{ route('single-user', Auth::user()->id) }}">My Profile</a></div></li>
              {{-- <li><i class="icon ion-ios-people"></i><div><a href="{{ route('friend-request') }}">People Nearby</a></div></li> --}}
              <li><i class="icon ion-ios-people-outline"></i><div><a href="{{ route('friends') }}">Friends</a></div></li>
              <li><i class="icon ion-chatboxes"></i><div><a href="{{URL::to('/chatroom')}}">Messages</a></div></li>
              <li><i class="icon ion-ios-paper"></i><div><a href="{{URL::to('/all_papers')}}">Papers</a></div></li>
              <li><i class="icon ion-images"></i><div><a href="{{URL::to('/all_images')}}">Images</a></div></li>
            </ul><!--news-feed links ends-->
            <div id="chat-block">
              
              
            </div><!--chat block ends-->
          </div>