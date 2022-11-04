  <link href="{{asset('css/new-contact.css')}}" rel="stylesheet">

<aside class="new-contact-aside">
    <h2>New Group</h2>
     <div id="app" class="flash-message"> 
        @include('flash-message')


        @yield('content')
    </div>
    <div class="add-new-contact">
        <button type="button" class="close-view">Close View</button>
        <form method="POST" action="/groups">
        @csrf
        <label for="name">Group Name</label>
        <input type="text" name="name" id="name" value="" required>
        <label for="phone">Numbers</label>
        <input type="text" name="phone" id="phone" value="" placeholder="Add numbers seperated by commas" required>
        <button type="submit" class="add-contact-button">Create New Group</button>
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
