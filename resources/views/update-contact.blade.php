  <link href="{{asset('css/new-contact.css')}}" rel="stylesheet">

<aside class="update-contact-aside">
    <h2>New Contact</h2>
     <div id="app" class="flash-message"> 
        @include('flash-message')
        @yield('content')
        <button type="button" class="close-view close-view-update">Close View</button>
        <form method="POST" action="/contacts/update/{{$member['id']}}">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="{{$member['full_name']}}" required>
        <label for="phone">Phone</label>
        <input type="text" name="phone" id="phone" value="" placeholder="Old number was {{$member['contact_number']}}" required>
        <button type="submit" class="add-contact-button">Update Contact</button>
    </form>
    </div>
    {{-- <script>
        const flash_message = document.querySelector('.flash-message')
        // hide flash message after 4 seconds
        setTimeout(() => {
            flash_message.style.visibility = 'hidden'
        }, 4000)
    </script> --}}
</aside>
