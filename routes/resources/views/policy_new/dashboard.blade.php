@extends('admin_frontend.master')
@section('content')

 <div class="content-wrapper">

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


    <div class="card my-2" id="cloneILPContainer">
    <div class="card-body">

        <h4 class="card-title"> Policy Dashboard </h4>
         <p class="card-description"></p>

       
  
   

         <div class="table-responsive">

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th class="card-title">Policy</th>
                        <th class="card-title">Increase/Decrease</th>
                        <th class="card-title">Total Policies</th>
                        <th class="card-title">Active</th>
                        <th class="card-title">Inactive</th>
                        <th class="card-title">Agents</th>
                        <th class="card-title">Downline</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Total Policies</td>
                        <td></td>
                        <td>{{ $totalPolicies }}</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Total Premium</td>
                        <td>{{ $totalPremium }}</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Auto Personal Policies</td>
                        <td></td>
                        <td>{{ $autoPersonalPolicies }}</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Auto Personal Premium</td>
                        <td>{{ $autoPersonalPremium }}</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Auto Commercial Policies</td>
                        <td></td>
                        <td>{{ $autoCommercialPolicies }}</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Auto Commercial Premium</td>
                        <td>{{ $autoCommercialPremium }}</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Other Commercial Policies</td>
                        <td></td>
                        <td>{{ $otherCommercialPolicies }}</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Other Commercial Premium</td>
                        <td>{{ $otherCommercialPremium }}</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Motorcycles Policies</td>
                        <td></td>
                        <td>{{ $motorcyclePolicies }}</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Motorcycles Premium</td>
                        <td>{{ $motorcyclePremium }}</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Home Policies</td>
                        <td></td>
                        <td>{{ $homePolicies }}</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Home Premium</td>
                        <td>{{ $homePremium }}</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Renters Policies</td>
                        <td></td>
                        <td>{{ $rentersPolicies }}</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Renters Premium</td>
                        <td>{{ $rentersPremium }}</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Life Policies</td>
                        <td></td>
                        <td>{{ $lifePolicies }}</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Life Premium</td>
                        <td>{{ $lifePremium }}</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Medicare Policies</td>
                        <td></td>
                        <td>{{ $medicarePolicies }}</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Medicare Premium</td>
                        <td>{{ $medicarePremium }}</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>ACA Policies</td>
                        <td></td>
                        <td>{{ $acaPolicies }}</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>ACA Premium</td>
                        <td>{{ $acaPremium }}</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Other Policies</td>
                        <td></td>
                        <td>{{ $otherPolicies }}</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Other Premium</td>
                        <td>{{ $otherPremium }}</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            

        
    </div>
        


<br>


</div></div>

<div class="row">

    
    <div class="col-lg-6 grid-margin stretch-card">

        <div class="card my-2  ">
            <div class="card-body">
                <h5 class="card-title">Total Premium per Policy Type</h5>
                <canvas id="policyPremiumChart"></canvas>
            </div>
        </div>

    </div>
   
    <div  class="col-lg-6 grid-margin stretch-card">
        <div class="card my-2 " id="monthlyPremiumChartContainer">
            <div class="card-body">
                <h5 class="card-title">Total Premium by Month (Last 12 Months)</h5>
                <canvas id="monthlyPremiumChart"></canvas>
            </div>
        </div>
    </div>


    <div class="col-lg-6 grid-margin stretch-card">

        <div class="card my-2 custom-card " id="monthlyPoliciesChartContainer">
            <div class="card-body">
                <h5 class="card-title">Total Policies by Month (Last 12 Months)</h5>
                <canvas id="monthlyPoliciesChart"></canvas>
            </div>
        </div>
    </div>


   

</div>









<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Get data passed from the controller
        var months = @json($months1); // X-axis
        var premiums = @json($premiums); // Y-axis

        // Create the bar chart
        var ctx = document.getElementById('monthlyPremiumChart').getContext('2d');
        var monthlyPremiumChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: months,
                datasets: [{
                    label: 'Total Premium',
                    data: premiums,
                    backgroundColor: 'rgba(54, 162, 235, 0.6)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    x: {
                        title: {
                            display: true,
                            text: 'Time (Months)'
                        }
                    },
                    y: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: 'Total Premium'
                        }
                    }
                }
            }
        });
    });
</script>





    <!-- New Card for Total Policies by Month -->






<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Get data passed from the controller
        var months = @json($months); // X-axis
        var policies = @json($policies); // Y-axis

        // Create the bar chart for policies
        var ctx = document.getElementById('monthlyPoliciesChart').getContext('2d');
        var monthlyPoliciesChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: months,
                datasets: [{
                    label: 'Total Policies',
                    data: policies,
                    backgroundColor: 'rgba(75, 192, 192, 0.6)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    x: {
                        title: {
                            display: true,
                            text: 'Time (Months)'
                        }
                    },
                    y: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: 'Total Policies'
                        }
                    }
                }
            }
        });
    });
</script>




<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>

// Data passed from the controller
    const policyPremiumData = {
        labels: ['Auto Personal', 'Auto Commercial', 'Other Commercial', 'Motorcycles', 'Home', 'Renters', 'Life', 'Medicare', 'ACA', 'Others'],
        datasets: [{
            label: 'Total Premium',
            data: [
                {{ $autoPersonalPremium }},
                {{ $autoCommercialPremium }},
                {{ $otherCommercialPremium }},
                {{ $motorcyclePremium }},
                {{ $homePremium }},
                {{ $rentersPremium }},
                {{ $lifePremium }},
                {{ $medicarePremium }},
                {{ $acaPremium }},
                {{ $otherPremium }}
            ],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)'
            ],
            borderWidth: 1
        }]
    };

    // Chart options
    const chartOptions = {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    };

    // Initialize the chart
    const ctx = document.getElementById('policyPremiumChart').getContext('2d');
    const policyPremiumChart = new Chart(ctx, {
        type: 'bar',
        data: policyPremiumData,
        options: chartOptions
    });
</script>


@endsection
