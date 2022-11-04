<link href="{{asset('css/dash-side-bar.css')}}" rel="stylesheet">
{{-- TODO: FIX FONT AWESOME --}}

 {{-- <script src="https://kit.fontawesome.com/f10280270c.js" crossorigin="anonymous"></script> --}}
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<aside class="dash-side-container">
    <nav class="dash-side" >
      {{-- Go Home --}}
       <a href="/dashboard"><i class="fa-solid fa-messages"></i>Home</a>
       {{-- Quick Message --}}
       <a href="#"><i class="fa-solid fa-messages"></i>Quick Message</a>
       {{-- Contact Section --}}
        <a href="/contacts"><i class="fa-solid fa-messages"></i> Contacts</a>
        {{-- Group Section --}}
         <a href="#"><i class="fa-solid fa-messages"></i>Groups</a>
    </nav>
    <div class="logout">
          <a href="logout">Logout</a>
    </div>
</aside>