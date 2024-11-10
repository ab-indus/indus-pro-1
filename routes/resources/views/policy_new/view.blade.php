@extends('admin_frontend.master')
@section('content')

<style>
    .content-wrapper {
        background-color: #1f1f2f; /* Dark background */
    }
    .policy-card {
        background-color: #2e2e38; /* Neutral dark gray for card */
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        color: #ffffff; /* Light color for text */
    }
    .policy-title {
        font-size: 1.5rem;
        font-weight: bold;
        color: #ffffff;
        text-align: center;
    }
    .policy-section {
        margin-top: 20px;
    }
    .section-title {
        font-size: 1.2rem;
        font-weight: 600;
        color: #d1d1d1; /* Softer gray for section titles */
        margin-bottom: 10px;
        display: flex;
        align-items: center;
    }
    .section-title i {
        color: #888888; /* Gray for icons */
        margin-right: 8px;
    }
    .policy-info-row {
        display: flex;
        flex-wrap: wrap;
        gap: 15px;
        border-bottom: 1px solid #444;
        padding-bottom: 10px;
        margin-bottom: 10px;
    }
    .info-item {
        width: 30%;
        min-width: 250px;
    }
    .info-label {
        font-weight: 600;
        color: #cfcfcf;
    }
    .info-value {
        font-weight: 400;
        color: #ffffff;
    }
</style>

    <br>
    <!-- header -->
    <div class="page-header">
        <h3 class="page-title">  </h3>
        <nav aria-label="breadcrumb">
        <ol class="breadcrumb"> 
            <a href="{{ url('Client/Portal/Form', $data->id) }}" type="button" class="btn btn-info btn-icon-text" >
            <i class="mdi mdi-plus-circle-outline"></i>
            Manage Policy </a>
        </ol>
        </nav>
    </div>
    <!-- header end -->

<div class="content-wrapper">
    <div class="policy-card my-4 mx-auto" style="max-width: 900px;">
        <div class="policy-title">Policy Details</div>

        <!-- Customer Information Section -->
        <div class="policy-section">
            <div class="section-title"><i class="fas fa-user"></i> Customer Information</div>
            <div class="policy-info-row">
                <div class="info-item"><span class="info-label">Customer Type:</span> <span class="info-value">{{ $data->type_of_customer }}</span></div>
                <div class="info-item"><span class="info-label">Autopay:</span> <span class="info-value">{{ $data->autopay }}</span></div>
                <div class="info-item"><span class="info-label">New Customer:</span> <span class="info-value">{{ $data->new_customer }}</span></div>
            </div>
        </div>

        <!-- Personal Information Section -->
        <div class="policy-section">
            <div class="section-title"><i class="fas fa-address-card"></i> Personal Information</div>
            <div class="policy-info-row">
                <div class="info-item"><span class="info-label">First Name:</span> <span class="info-value">{{ $data->first_name }}</span></div>
                <div class="info-item"><span class="info-label">Middle Name:</span> <span class="info-value">{{ $data->middle_name }}</span></div>
                <div class="info-item"><span class="info-label">Last Name:</span> <span class="info-value">{{ $data->last_name }}</span></div>
                <div class="info-item"><span class="info-label">Email:</span> <span class="info-value">{{ $data->email }}</span></div>
                <div class="info-item"><span class="info-label">Phone:</span> <span class="info-value">{{ $data->phone }}</span></div>
                <div class="info-item"><span class="info-label">Date of Birth:</span> <span class="info-value">{{ $data->dob }}</span></div>
            </div>
        </div>

        <!-- Policy Information Section -->
        <div class="policy-section">
            <div class="section-title"><i class="fas fa-file-alt"></i> Policy Information</div>
            <div class="policy-info-row">
                <div class="info-item"><span class="info-label">Policy Number:</span> <span class="info-value">{{ $data->policy_number }}</span></div>
                <div class="info-item"><span class="info-label">Carrier:</span> <span class="info-value">{{ $data->carrier }}</span></div>
                <div class="info-item"><span class="info-label">Type of Policy:</span> <span class="info-value">{{ $data->type_of_policy }}</span></div>
                <div class="info-item"><span class="info-label">Effective Date:</span> <span class="info-value">{{ $data->effective_date }}</span></div>
                <div class="info-item"><span class="info-label">Expiration Date:</span> <span class="info-value">{{ $data->expiration_date }}</span></div>
                <div class="info-item"><span class="info-label">Term Months:</span> <span class="info-value">   @if($data->term_months == 12)
                    Monthly
                @elseif($data->term_months == 4)
                    Quarterly
                @elseif($data->term_months == 2)
                    Semi-Annual
                @elseif($data->term_months == 1)
                    Annual
                @else
                    Unknown
                @endif</span></div>

            </div>
        </div>

        <!-- Financial Information Section -->
        <div class="policy-section">
            <div class="section-title"><i class="fas fa-money-check-alt"></i> Financial Information</div>
            <div class="policy-info-row">
                <div class="info-item"><span class="info-label">Amount Due:</span> <span class="info-value">{{ $data->amount_due }}</span></div>
                <div class="info-item"><span class="info-label">Base Premium:</span> <span class="info-value">{{ $data->base_premium }}</span></div>
                <div class="info-item"><span class="info-label">Total Premium:</span> <span class="info-value">{{ $data->total_premium }}</span></div>
            </div>
        </div>

        <!-- Notes Section -->
        <div class="policy-section">
            <div class="section-title"><i class="fas fa-sticky-note"></i> Notes</div>
            <p class="info-value">{{ $data->notes }}</p>
        </div>
    </div>
</div>

@endsection
