<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('css/groups.css')}}" rel="stylesheet">
    <title>Groups</title>
</head>
<body>
      <x-dashboard-header/>
    <x-dashboard-sidebar/>
    <main>
        <section>
            <div class="main-container">
                <h2>Groups</h2>
                <div class="table-container">
                    <table class="table">
                        <tr>
                            <th>Group Name</th>
                            <th>Number of Contacts</th>
                            <th>Actions</th>
                        </tr>
                        {{-- @foreach ($groups as $group)
                        <tr>
                            <td>{{$group['group_name']}}</td>
                            <td>{{$group['number_of_contacts']}}</td>
                            <td class="actions">
                                <a href="edit/{{$group['id']}}" class="show-update">Update</a>
                                <a href="delete/{{$group['id']}}">Delete</a>
                            </td>
                        </tr>
                        @endforeach --}}
                    </table>
                </div>
                <div class="create-group">
                    <a href="#" class="show-create">Create Group</a>
                </div>
            </div>
        </section>
    </main>
</body>
</html>