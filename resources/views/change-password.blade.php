 <link href="{{ asset('css/sign-up.css') }}" rel="stylesheet">
 <aside class="reset-pass-aside">
     <div class="main-reset-container">
         <button type="button" class="close-view-reset">Close View</button>
         <div class="reset-container">
             <div class="reset">
                 <h2>Enter New Password</h2>
                 <form action="/reset-password" method="POST">
                     @csrf
                     <label for="phone-number">Password</label>
                     <input type="password" name="new_password" id="phone-number" placeholder="Enter your new password">
                     <input type="password" name="confirm_password" id="phone-number" placeholder="Confirm Password">
                     <input type="submit" value="Reset">
                 </form>
             </div>
         </div>
     </div>
 </aside>
