<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="{{asset('css/contacts.css')}}" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <x-dashboard-header/>
    <x-dashboard-sidebar/>

    <main>
        <section>
            {{-- Create table with heading name, number and actions --}}
            <div class="main-container">
                {{-- Heading --}}
                <h2>Contact List</h2>
                <div class="table-container">
                      <table class="table">
                <tr>
                    <th>Name</th>
                    <th>Phone Number</th>
                    <th>Actions</th>
                </tr>
                <tr>
                    <td>John Doe</td>
                    <td>02xxxxxxxxx</td>
                    <td class="actions">
                        <a href="">Update</a>
                        <a href="">Delete</a>
                    </td>
                </tr>
            </table>
                </div>
                
            {{-- Create Contact Button Here --}}
            <div class="create-contact">
                <a href="#">Create Contact</a>
            </div>
          
        </section>
    </main>
</body>
</html>