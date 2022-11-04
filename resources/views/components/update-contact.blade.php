  <link href="{{asset('css/new-contact.css')}}" rel="stylesheet">

<aside class="update-contact-aside">
    <h2>New Contact</h2>
     <div id="app" class="flash-message"> 
        @include('flash-message')


        @yield('content')
    </div>
    <div class="add-new-contact">
        <button type="button" class="close-view">Close View</button>
        <form method="POST" action="/contacts">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="old Value" required>
        <label for="phone">Phone</label>
        <input type="text" name="phone" id="phone" value="old value" required>
        <button type="submit" class="add-contact-button">Update Contact</button>
    </form>
    </div>
    <script>
        const flash_message = document.querySelector('.flash-message')
        // hide flash message after 4 seconds
        setTimeout(() => {
            flash_message.style.visibility = 'hidden'
        }, 4000)
    </script>
</aside>
