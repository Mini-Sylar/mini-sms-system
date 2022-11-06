<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('css/dashboard.css')}}" rel="stylesheet">
   
    <title>Dashboard</title>

</head>
<body>
    <x-dashboard-header/>
    <x-dashboard-sidebar/>
    <main>
        <section>
            <div class="quick-actions-container">
                <h2>Quick Actions</h2>
                <div class="quick-actions">
                    <a href="#">Quick Message</a>
                    <a href="/contacts">Contacts</a>
                    <a href="#">Groups</a>
                </div>
            </div>
                {{-- Analytics --}}
                 <h2 class="ana-text">Analytics</h2>
                <div class="analytics">
                    <div class="left-side">Graph Here</div>
                    <div class="right-side"> 
                        <div class="analytics-container">
                        <div class="analytics-item">
                            <h3>Messages Sent  </h3>
                            <p>0</p>
                        </div>
                        <div class="analytics-item">
                            <h3>Number of Contacts</h3>
                            <p>0</p>
                        </div>
                        <div class="analytics-item">
                            <h3>Number of Groups</h3>
                            <p>0</p>
                        </div>
                    </div></div>
                   
                   
            </div>
        </section>
    </main>
    {{-- <a href="logout">Logout</a> --}}
    {{-- Dashboard Com --}}
</body>
</html>