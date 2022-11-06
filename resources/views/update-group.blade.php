  <link href="{{ asset('css/new-contact.css') }}" rel="stylesheet">

  <aside class="update-contact-aside">
      <h2>Edit Group</h2>
      <div id="app" class="flash-message">
          @include('flash-message')
          @yield('content')
          <button type="button" class="close-view close-view-update">Close View</button>
          <form method="POST" action="/groups/update/{{ $member['id'] }}">
              @csrf
              <label for="name">Group Name</label>
              <input type="text" name="name" id="name" value="{{ $member['group_name'] }}" required>
              <label for="phone">Group Contacts</label>
              <input type="text" name="phone" id="phone" value="{{ $member['contact_number'] }}"
                  placeholder="Old Group Contacts Here" required>
              <button type="submit" class="add-contact-button">Update Group</button>
          </form>
      </div>
  </aside>
