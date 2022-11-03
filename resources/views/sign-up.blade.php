<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('css/sign-up.css')}}" rel="stylesheet">
    <title>Sign-Up</title>
</head>
<body>
    <x-header/>
    <main>
        <section>
            <div class="sign-up-container">
                <div class="sign-up">
                    {{-- Create Sign Up Form which contains first name,lastname, phone number,email,country,password,confirm password,recaptcha,checkbox for terms of agreement --}}
                    <form action="sign-up" method="POST">
                        @csrf
                        {{-- Create first name input --}}
                        <label for="first-name">First Name</label>
                        <input type="text" name="first-name" id="first-name" placeholder="Enter your first name" required>
                        
                        {{-- Create last name input --}}
                        <label for="last-name">Last Name</label>
                        <input type="text" name="last-name" id="last-name" placeholder="Enter your last name" required>
                        <br>
                        {{-- Create phone number input --}}
                        <label for="phone-number">Phone Number</label>
                        <input type="text" name="phone-number" id="phone-number" placeholder="Enter your phone number" required>
                        
                        {{-- Create email input --}}
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" placeholder="Enter your email" required>
                        <br>
                        {{-- Create country input --}}
                        <label for="country">Country</label>
                        {{-- <input type="text" name="country" id="country" placeholder="Enter your country"> --}}
                        <x-country-options/>
                        <br>
                        {{-- Create password input --}}
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" placeholder="Enter your password" required>
                        
                        {{-- Create confirm password input --}}
                        <label for="confirm-password">Confirm Password</label>
                        <input type="password" name="confirm-password" id="confirm-password" placeholder="Enter your confirm password" required>
                        
                        {{-- Create recaptcha --}}
                        <div class="g-recaptcha" data-sitekey="6LcM6f0UAAAAAEkX9aWlRJYH5Zd0n3q3Gy5Q5h5l" required></div>
                        
                        {{-- Create terms of agreement checkbox --}}
                        <div class="check-box-container">
                        <input type="checkbox" name="terms-of-agreement" id="terms-of-agreement" required>
                        <label for="terms-of-agreement" class="terms">I agree to the <a href="#">Terms of Agreement</a></label>
                        </div>
                       
                        
                        {{-- Create submit button --}}
                        <input type="submit" value="Sign Up" >
                    </form>
                            
                </div>
            </div>
        </section>
    </main>
</body>
</html>