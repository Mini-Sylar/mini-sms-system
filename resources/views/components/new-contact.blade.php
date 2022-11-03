  <link href="{{asset('css/new-contact.css')}}" rel="stylesheet">

<aside class="new-contact-aside">
    <h2>New Contact</h2>
    <div class="add-new-contact">
        <button type="button" class="close-view">Close View</button>
        <form method="POST" action="/contacts">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="">
        <label for="phone">Phone</label>
        <input type="text" name="phone" id="phone" value="">
        <button type="submit" class="add-contact-button">Add Contact</button>
    </form>
    </div>
   <script src="{{asset('js/show-add-contact.js')}}"></script>
</aside>