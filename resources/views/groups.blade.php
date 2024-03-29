<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/groups.css') }}" rel="stylesheet">
    <title>SMS-Mini | Groups</title>
</head>

<body>
    <x-dashboard-header />
    <x-dashboard-sidebar />
    <main>
        <section>
            <x-new-group />
            <div class="main-container">
                <h2>Groups</h2>
                <div id="app2" class="flash-deleted">
                    @include('flash-message')
                    @yield('content')
                </div>
                <div class="table-container">
                    <table class="table">
                        <tr>
                            <th>Group Name</th>
                            <th>Number of Contacts</th>
                            <th>Actions</th>
                        </tr>
                        @foreach ($groups as $group)
                            <tr>
                                <td>{{ $group['group_name'] }}</td>
                                <td> {{ substr_count($group['contact_number'], ',') + 1 }}</td>
                                <td class="actions">
                                    <a href="groups/edit/{{ $group['id'] }}" class="show-update">Update</a>
                                    <a href="groups/delete/{{ $group['id'] }}">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
                <div class="create-group">
                    <a href="#" class="show-create">Create Group</a>
                </div>
            </div>
        </section>
    </main>
    <script src="{{ asset('js/show-add-contact.js') }}"></script>
</body>

</html>
