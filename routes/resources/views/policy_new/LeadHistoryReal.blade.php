@extends('admin_frontend.master')
@section('content')

 <div class="content-wrapper">


    <div class="card my-2" id="cloneILPContainer">
    <div class="card-body">

        <h4 class="card-title">Lead History  </h4>
         <p class="card-description"></p>

    

         <div class="table-responsive">

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th class="card-title">Timestamp</th>
                        <th class="card-title">Type of Product</th>
                        <th class="card-title">Assigned to</th>
                        <th class="card-title">Need Additional Info</th>
                        <th class="card-title">Received Info</th>
                        <th class="card-title">Gave a quote</th>
                        <th class="card-title">Office/Call/Text/Email</th>
                        <th class="card-title">Follow Up Note</th>
                        <th class="card-title">Appointment Date</th>
                        <th class="card-title">Appointment Time</th>
                        <th class="card-title">Office/Call/Text</th>
                        <th class="card-title">Status</th>

                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $lead)
                    <tr data-id="{{ $lead->id }}">

                        <td>{{ $lead->created_at }}</td> <!-- Timestamp -->
                                    <!-- Editable fields -->
                        <td>
                            <select class="editable " data-field="product_type">
                                <option value="">Select Type of Policy ⬇️</option>
                                <option value="Auto Personal" {{ $lead->product_type == 'Auto Personal' ? 'selected' : '' }}>Auto Personal</option>
                                <option value="Auto Commercial" {{ $lead->product_type == 'Auto Commercial' ? 'selected' : '' }}>Auto Commercial</option>
                                <option value="Other Commercial" {{ $lead->product_type == 'Other Commercial' ? 'selected' : '' }}>Other Commercial</option>
                                <option value="Motorcycles" {{ $lead->product_type == 'Motorcycles' ? 'selected' : '' }}>Motorcycles</option>
                                <option value="Home" {{ $lead->product_type == 'Home' ? 'selected' : '' }}>Home</option>
                                <option value="Renters" {{ $lead->product_type == 'Renters' ? 'selected' : '' }}>Renters</option>
                                <option value="Life" {{ $lead->product_type == 'Life' ? 'selected' : '' }}>Life</option>
                                <option value="Medicare" {{ $lead->product_type == 'Medicare' ? 'selected' : '' }}>Medicare</option>
                                <option value="ACA" {{ $lead->product_type == 'ACA' ? 'selected' : '' }}>ACA</option>
                                <option value="Others" {{ $lead->product_type == 'Others' ? 'selected' : '' }}>Others</option>
                            </select>
                        </td>

                        <td>
                            <input type="text" class="editable" data-field="agent_name" value="{{ $lead->agent_name ?? '' }}">
                        </td>
                        <td>
                            <input type="checkbox" class="editable" data-field="need_additional_info" {{ $lead->need_additional_info ? 'checked' : '' }}>
                        </td>
                        <td>
                            <input type="checkbox" class="editable" data-field="received_info" {{ $lead->received_info ? 'checked' : '' }}>
                        </td>
                        <td>
                            <input type="checkbox" class="editable" data-field="gave_quote" {{ $lead->gave_quote ? 'checked' : '' }}>
                        </td>
                        <td>
                            {{$lead->medium_of_contact}}
                            {{-- <select class="editable " data-field="medium_of_contact">
                                <option value="Office" {{ $lead->medium_of_contact == 'Office' ? 'selected' : '' }}>Office</option>
                                <option value="Call" {{ $lead->medium_of_contact == 'Call' ? 'selected' : '' }}>Call</option>
                                <option value="Text" {{ $lead->medium_of_contact == 'Text' ? 'selected' : '' }}>Text</option>
                                <option value="Email" {{ $lead->medium_of_contact == 'Email' ? 'selected' : '' }}>Email</option>
                            </select> --}}
                        </td>
                        <td>
                            <textarea class="editable" data-field="follow_up_note">{{ $lead->follow_up_note ?? '' }}</textarea>
                        </td>
                        <td>
                            <input type="date" class="editable" data-field="appointment_date" value="{{ $lead->appointment_date ?? '' }}">
                        </td>
                        <td>
                            <input type="time" class="editable " data-field="appointment_time" value="{{ $lead->appointment_time ?? '' }}">
                        </td>
                        <td>
                            <select class="editable" data-field="appointment_method">
                                <option value="Office" {{ $lead->appointment_method == 'Office' ? 'selected' : '' }}>Office</option>
                                <option value="Call" {{ $lead->appointment_method == 'Call' ? 'selected' : '' }}>Call</option>
                                <option value="Text" {{ $lead->appointment_method == 'Text' ? 'selected' : '' }}>Text</option>
                            </select>
                        </td>

                        <td>
                            <select class="editable " data-field="status">
                                <option value="Pending Quote" {{ $lead->status == 'Pending Quote' ? 'selected' : '' }}>Pending Quote</option>
                                <option value="Policy Sold" {{ $lead->status == 'Policy Sold' ? 'selected' : '' }}>Policy Sold</option>
                                <option value="Future Prospects" {{ $lead->status == 'Future Prospects' ? 'selected' : '' }}>Future Prospects</option>
                            </select>
                        </td>
     
                    </tr>
                    @endforeach
                </tbody>
            </table>
            
            
            


    </div>
        


<br>


</div></div>


<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
    $(document).ready(function() {
        $('.editable').on('change', function() {
            const $this = $(this);
            const field = $this.data('field');
            let value = $this.is(':checkbox') ? $this.is(':checked') : $this.val();
            const id = $this.closest('tr').data('id');

            $.ajax({
                url: `/Lead/task/update/${id}`,
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    field: field,
                    value: value
                },
                success: function(response) {
                    if (response.success) {
                        alert('Update successful!');
                    } else {
                        alert('Update failed!');
                    }
                },
                error: function() {
                    alert('An error occurred while updating.');
                }
            });
        });
    });

</script>

@endsection
