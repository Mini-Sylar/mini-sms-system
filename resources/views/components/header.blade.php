<link href="{{asset('css/header.css')}}" rel="stylesheet">
<header>
    <div class="container">
        <nav class="nav-bar">
            <div class="logo">
                <a href="/">LOGO</a>
            </div>
            <div class="nav-links">
                <ul>
                    {{-- Put condition later here to check if person is logged in then render something different --}}
                    @if (session()->has('user'))
                         <li>
                        <a href="/dashboard" class="go-dashboard">Go to Dashboard</a>
                    </li>
                    @else
                      <li>
                        <a href="/login">Login</a>
                    </li>
                    <li>
                        <a href="/sign-up">Sign Up</a>
                    </li>
                    @endif
                  
                </ul>
            </div>
        </nav>
    </div>
</header>