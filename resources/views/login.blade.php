<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/sign-up.css') }}" rel="stylesheet">

    <title>SMS-Mini | Login</title>
</head>

<body>
    <x-header />
    <main>
        <section>
            <div class="sign-up-container">

                <div class="sign-up">
                    <div id="app" class="flash-message"
                        style="display: flex;justify-content:center;align-items:center;">
                        @include('flash-message')


                        @yield('content')
                    </div>
                    {{-- create a form which takes phone number and password --}}
                    <form action="user" method="POST">
                        @csrf
                        {{-- Create phone number input --}}
                        <label for="phone-number">Phone Number</label>
                        <input type="text" name="phone-number" id="phone-number"
                            placeholder="Enter your phone number">

                        {{-- Create password input --}}
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" placeholder="Enter your password">

                        {{-- Create submit button --}}
                        <input type="submit" value="Login">
                    </form>
                    <a href="#">forgot password?</a>
                </div>
            </div>
        </section>
    </main>
</body>

</html>
