 <link href="{{ asset('css/sign-up.css') }}" rel="stylesheet">
 <aside class="reset-pass-aside update-aside">
     <div class="main-reset-container">
         <div class="reset-container">
             <div class="reset">
                 <h2>Enter New Password</h2>
                 <div id="app" class="flash-message"
                     style="display: flex;justify-content:center;align-items:center; width:100% background-color:red;">
                     @include('flash-message')
                     @yield('content')
                 </div>
                 <form action="/password/reset/update" method="POST">
                     @csrf
                     <label for="phone-number">Phone Number</label>
                     <input type="text" name="user_number" id="username" placeholder="" value="{{ $phone_number }}"
                         readonly>
                     <label for="new_password">Password</label>
                     <input type="password" name="new_password" id="phone-number" placeholder="Enter your new password">
                     <label for="confirm_password">Confirm Password</label>
                     <input type="password" name="confirm_password" id="phone-number" placeholder="Confirm Password">
                     <input class="update-submit" type="submit" value="Reset">
                 </form>
             </div>
         </div>
     </div>
 </aside>
