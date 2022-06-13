
<div id="navbar">
  
  <a href="/" id="logo"><img src="logo.png"></a>
  <div  id="navbar-right">


    <a href="seek">FOR JOB SEEKER</a>
    <a href="employer">FOR EMPLOYER</a>
    <a href="#">COMPANY</a>
    <!-- <a class="active" href="{{ route('login') }}">LOGIN</a> -->

    @if (Route::has('login'))
                
                    @auth
                        <a class="active" href="{{ url('/dashboard') }}" >Dashboard</a>
                    @else
                        <a class="active" href="{{ route('login') }}">Log in</a>


                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" >Register</a>
                        @endif
                        @endauth
                      
                  @endif
    

  </div>
</div>
