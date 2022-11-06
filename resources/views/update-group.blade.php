  <link href="{{asset('css/new-contact.css')}}" rel="stylesheet">

<aside class="update-contact-aside">
    <h2>New Contact</h2>
     <div id="app" class="flash-message"> 
        @include('flash-message')


        @yield('content')
        <button type="button" class="close-view close-view-update">Close View</button>
        <form method="POST" action="/update/{{$member['id']}}">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="{{$member['full_name']}}" required>
        <label for="phone">Phone</label>
        <input type="text" name="phone" id="phone" value="" placeholder="Old Group Contacts Here" required>
        <button type="submit" class="add-contact-button">Update Group</button>
    </form>
    </div>
</aside>
