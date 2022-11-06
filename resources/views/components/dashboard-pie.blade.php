{{-- Extend dashboard --}}
@extends('dashboard')
<div>
    <!-- It is never too late to be what you might have been. - George Eliot -->
    <canvas id="Genders"
        style="max-height: 50%;position: relative;bottom: 10px;-webkit-box-reflect: below 1px linear-gradient(transparent, rgba(255, 255, 255, 0.1));"></canvas>
    <script>
        const getgender = document.getElementById('Genders').getContext('2d');
        const Genders = new Chart(getgender, {
            type: 'doughnut',
            data: {
                labels: ['Female', 'Male'],
                datasets: [{
                    label: 'Genders',
                    data: ['{{ $contact_list }}', '{{ $group_list }}'],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
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
                            color: 'white',
                        }
                    }
                }
            }
        });
    </script>

</div>
