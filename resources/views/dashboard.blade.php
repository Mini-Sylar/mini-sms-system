<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.6.0/chart.min.js"
        integrity="sha512-GMGzUEevhWh8Tc/njS0bDpwgxdCJLQBWG3Z2Ct+JGOpVnEmjvNx6ts4v6A2XJf1HOrtOsfhv3hBKpK9kE5z8AQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Dashboard</title>
</head>

<body>
    <x-dashboard-header />
    <x-dashboard-sidebar />
    <main>
        <section>
            <div class="quick-actions-container">
                <h2>Quick Actions</h2>
                <div class="quick-actions">
                    <a href="#">Quick Message</a>
                    <a href="/contacts">Contacts</a>
                    <a href="/groups">Groups</a>
                </div>
            </div>
            {{-- Analytics --}}
            <h2 class="ana-text">Analytics</h2>
            <div class="analytics">
                <div class="left-side">
                    <div style="width: 80%; height:80%">
                        <!-- It is never too late to be what you might have been. - George Eliot -->
                        <canvas id="Genders" style="max-height: 35vh;"></canvas>
                        <script>
                            const getgender = document.getElementById('Genders').getContext('2d');
                            const Genders = new Chart(getgender, {
                                type: 'doughnut',
                                data: {
                                    labels: ['Number of Contacts', 'Number of Groups', 'Messages Sent'],
                                    datasets: [{
                                        label: 'Genders',
                                        data: [{{ $contact_list }}, {{ $group_list }}, 3],
                                        backgroundColor: [
                                            'rgba(255, 99, 132, 1)',
                                            'rgba(54, 162, 235, 1)',
                                            "rgb(255, 142, 0)"
                                        ],
                                        borderColor: [
                                            'rgba(255, 99, 132, 1)',
                                            'rgba(54, 162, 235, 1)',
                                            'rgb(255, 142, 0)'
                                        ],
                                        borderWidth: 1
                                    }]
                                },
                                options: {
                                    plugins: {
                                        legend: {
                                            labels: {
                                                font: {
                                                    size: 12
                                                },
                                                color: 'black',
                                            }
                                        }
                                    }
                                }
                            });
                        </script>

                    </div>
                </div>
                {{-- RIght Side --}}
                <div class="right-side">
                    <div class="analytics-container">
                        <div class="analytics-item">
                            <h3>Messages Sent </h3>
                            <p>0</p>
                        </div>
                        <div class="analytics-item">
                            <h3>Number of Contacts</h3>
                            <p>{{ $contact_list }}</p>
                        </div>
                        <div class="analytics-item">
                            <h3>Number of Groups</h3>
                            <p>{{ $group_list }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>

</html>
