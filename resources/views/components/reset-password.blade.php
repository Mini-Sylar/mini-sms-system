 <link href="{{ asset('css/sign-up.css') }}" rel="stylesheet">
 <aside class="reset-pass-aside">
     <div class="main-reset-container">
         <button type="button" class="close-view-reset">Close View</button>
         <div class="reset-container">
             <div class="reset">
                 <h2>Reset Password</h2>
                 <form action="/reset-password" method="POST">
                     @csrf
                     <label for="phone-number">Email</label>
                     <input type="email" name="email" id="phone-number" placeholder="Enter your email address">
                     <input type="submit" value="Reset">
                 </form>
             </div>
         </div>
     </div>
 </aside>
