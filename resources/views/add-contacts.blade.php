<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="{{asset('css/contacts.css')}}" rel="stylesheet">
       
    <title>SMS-Mini | Contacts</title>
</head>
<body>
    <x-dashboard-header/>
    <x-dashboard-sidebar/>

    <main>
        <section>
            {{-- Create table with heading name, number and actions --}}
            <x-new-contact/>
            {{-- <x-update-contact/> --}}

            <div class="main-container">
                {{-- Heading --}}
                <h2>Contact List</h2>
                 <div id="app2" class="flash-deleted"> 
                     @include('flash-message')
                     @yield('content')
                 </div>
                <div class="table-container">
                      <table class="table">
                <tr>
                    <th>Name</th>
                    <th>Phone Number</th>
                    <th>Actions</th>
                </tr>
                 @foreach ($members as $contact)
                <tr>
                    <td>{{$contact['full_name']}}</td>
                    <td>{{$contact['contact_number']}}</td>
                    <td class="actions">
                        <a href="contacts/edit/{{$contact['id']}}" class="show-update">Update</a>
                        <a href="contacts/delete/{{$contact['id']}}">Delete</a>
                    </td>
                </tr>
                @endforeach
            </table>
                </div>
                
            {{-- Create Contact Button Here --}}
            <div class="create-contact">
                    <a href="#" class="show-create" >Add New Contact</a>
            </div>
            </div>
       
             <script src="{{asset('js/show-add-contact.js')}}">
                
            </script>
        </section>
    </main>
</body>
</html>