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
                        style="display: flex;justify-content:center;align-items:center; width:100% background-color:red;">
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
                    <a href="#" class="forgot-password">forgot password?</a>
                </div>
            </div>
            <x-reset-password />
        </section>
    </main>
    <script>
        const resetPassword = document.querySelector('.reset-pass-aside');
        const forgotPassword = document.querySelector('.forgot-password');
        const closeViewReset = document.querySelector('.close-view-reset');

        forgotPassword.addEventListener('click', () => {
            resetPassword.classList.add('show-reset');
        });

        closeViewReset.addEventListener("click", () => {
            resetPassword.classList.remove('show-reset');
        });
    </script>
</body>

</html>
