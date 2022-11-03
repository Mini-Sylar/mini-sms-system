<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('css/index.css')}}" rel="stylesheet">
    <title>Home</title>
</head>
<body>
   <x-header/>
   <main>
        <section>
            <div class="main-container">
                <div class="left-side">
                    <h1>Something About SMS</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque officiis assumenda minima aspernatur autem animi?</p>
                    

                     @if (session()->has('user'))
                      <div class="buttons-action">
                        <button type="button" class="sign-up"><a href="/dashboard" class="go-dashboard">Go to Dashboard</a></button>
                    </div>
                    @else
                   <div class="buttons-action">
                        <a href="/login">Login</a>
                        <a href="/sign-up" class="sign-up">Sign Up</a>
                    </div>
                    @endif
                </div>
                <div class="right-side">
                    <img src="{{URL::asset('/image/Sent-Message-bro.png')}}" alt="Hero Image" srcset="">
                </div>
            </div>
        </section>
   </main>
</body>
</html>