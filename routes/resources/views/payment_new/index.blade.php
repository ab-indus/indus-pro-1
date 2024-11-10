@extends('admin_frontend.master')
@section('content')

 <div class="content-wrapper">


    <div class="card my-2" id="cloneILPContainer">
    <div class="card-body">

        <h4 class="card-title">Payment History </h4>
         <p class="card-description">List of all payments made</p>


         <div class="table-responsive">

            <div class="container">
                <!-- Summary Totals Row -->
                <div class="row mb-3">
                    <div class="col">
                        <strong>Total Card:</strong> <span id="totalCard">0</span>
                    </div>
                    <div class="col">
                        <strong>Total Cash:</strong> <span id="totalCash">0</span>
                    </div>
                    <div class="col">
                        <strong>Total Direct Pay:</strong> <span id="totalDirectPay">0</span>
                    </div>
                    <div class="col">
                        <strong>Total Paid:</strong> <span id="totalPaid">0</span>
                    </div>
                </div>
            
                <!-- Date Filter Section -->
                <div class="row mb-3">
                    <div class="col-md-4">
                        <label for="startDate">Start Date:</label>
                        <input type="date" id="startDate" class="form-control">
                    </div>
                    <div class="col-md-4">
                        <label for="endDate">End Date:</label>
                        <input type="date" id="endDate" class="form-control">
                    </div>
                    <div class="col-md-4 d-flex align-items-end">
                        <button id="filterBtn" class="btn btn-primary w-100">Filter</button>
                    </div>
                </div>
            
                <!-- Payment History Table -->
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="card-title">Timestamp</th>
                            <th class="card-title">Agent/CSR</th>
                            <th class="card-title">First Name</th>
                            <th class="card-title">Last Name</th>
                            <th class="card-title">Carrier</th>
                            <th class="card-title">Policy #</th>
                            <th class="card-title">Amount Paid (Card)</th>
                            <th class="card-title">Amount Paid (Cash)</th>
                            <th class="card-title">Direct Pay</th>
                            <th class="card-title">Payment For</th>
                            <th class="card-title">Total Sum Paid</th>
                        </tr>
                    </thead>
                    <tbody id="paymentTable">
                        @if($data->count() > 0)
                            @foreach($data as $payment)
                                <tr>
                                    <td>{{ $payment->created_at->format('Y-m-d H:i:s') }}</td>
                                    <td>{{ $payment->person ?? 'N/A' }}</td>
                                    <td>{{ $payment->first_name }}</td>
                                    <td>{{ $payment->last_name }}</td>
                                    <td>{{ $payment->carrier }}</td>
                                    <td>{{ $payment->policy_number }}</td>
                                    <td>{{ $payment->amount_paid_cc ?? 'N/A' }}</td>
                                    <td>{{ $payment->amount_paid_cash ?? 'N/A' }}</td>
                                    <td>{{ $payment->direct_pay ?? 'N/A' }}</td>
                                    <td>{{ $payment->payment_for ?? 'N/A' }}</td>
                                    <td>{{ $payment->amount_paid_cc + $payment->amount_paid_cash + $payment->direct_pay }}</td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="11" class="text-center">No Payment History Found</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
            

        </div>
        
       
        


<br>


</div></div>


<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
    $(document).ready(function() {
    // Calculate and display totals on load
    calculateTotals();

    // Date range filter function
    $('#filterBtn').on('click', function() {
        const startDate = $('#startDate').val();
        const endDate = $('#endDate').val();
        filterPayments(startDate, endDate);
    });

    function calculateTotals() {
        let totalCard = 0;
        let totalCash = 0;
        let totalDirectPay = 0;
        let totalPaid = 0;

        $('#paymentTable tr:visible').each(function() {  // Only count visible rows
            const card = parseFloat($(this).find('td:nth-child(7)').text()) || 0;
            const cash = parseFloat($(this).find('td:nth-child(8)').text()) || 0;
            const directPay = parseFloat($(this).find('td:nth-child(9)').text()) || 0;
            const sumPaid = card + cash + directPay;

            totalCard += card;
            totalCash += cash;
            totalDirectPay += directPay;
            totalPaid += sumPaid;
        });

        $('#totalCard').text(totalCard.toFixed(2));
        $('#totalCash').text(totalCash.toFixed(2));
        $('#totalDirectPay').text(totalDirectPay.toFixed(2));
        $('#totalPaid').text(totalPaid.toFixed(2));
    }

    function filterPayments(startDate, endDate) {
        $('#paymentTable tr').each(function() {
            const rowDate = new Date($(this).find('td:first-child').text());
            const start = new Date(startDate);
            const end = new Date(endDate);

            if ((startDate && rowDate < start) || (endDate && rowDate > end)) {
                $(this).hide();
            } else {
                $(this).show();
            }
        });

        // Recalculate totals after filtering to only include visible rows
        calculateTotals();
    }
});

</script>

@endsection
