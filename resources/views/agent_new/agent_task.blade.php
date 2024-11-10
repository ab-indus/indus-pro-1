@extends('admin_frontend.master')
@section('content')

 <div class="content-wrapper">


    <div class="card my-2" id="cloneILPContainer">
    <div class="card-body">

        <h4 class="card-title">Agent / CSR  ToDo  </h4>
         <p class="card-description"></p>


         <div class="table-responsive">

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th class="card-title">Log Time</th>
                        <th class="card-title">Agent/CSR</th>
                        <th class="card-title">Medium of Contact</th>
                        <th class="card-title">First Name</th>
                        <th class="card-title">Last Name</th>
                        <th class="card-title">Phone</th>
                        <th class="card-title">Reason for Contact</th>
                        <th class="card-title">Done</th>
                        <th class="card-title">Done Time</th>
                        <th class="card-title">Docsave</th>
                        <th class="card-title">Proof Upload</th>
                        <th class="card-title">Picture Upload</th>
                        <th class="card-title">Notes</th>
                    </tr>
                </thead>
                
                <tbody>
                    @foreach($data as $item)
                    <tr data-id="{{ $item->id }}">
                        <td>{{ $item->created_at }}</td>
                        <td>{{ $item->agent }}</td>
                        <td>{{ $item->medium_of_contact }}</td>
                        <td>{{ $item->first_name }}</td>
                        <td>{{ $item->last_name }}</td>
                        <td>{{ $item->contact_number }}</td>
                        <td>{{ $item->reason_of_contact }}</td>
            
                        <!-- Editable Done field -->
                        <td>
                            <select class="editable" data-field="done">
                                <option value="0" {{ $item->done == 0 ? 'selected' : '' }}>No</option>
                                <option value="1" {{ $item->done == 1 ? 'selected' : '' }}>Yes</option>
                            </select>
                        </td>
            
                        <td class="done_time">{{ $item->done_time }}</td>
            
                        <!-- Editable Docsave field -->
                        <td>
                            <select class="editable" data-field="doc_save">
                                <option value="Pending" {{ $item->doc_save == 'Pending' ? 'selected' : '' }}>❌</option>
                                <option value="Done" {{ $item->doc_save == 'Done' ? 'selected' : '' }}>✅</option>
                            </select>
                        </td>
            
                        <!-- Editable Proof Upload field -->
                        <td>
                            <select class="editable" data-field="proof_upload">
                                <option value="Pending" {{ $item->proof_upload == 'Pending' ? 'selected' : '' }}>❌</option>
                                <option value="Done" {{ $item->proof_upload == 'Done' ? 'selected' : '' }}>✅</option>
                            </select>
                        </td>
            
                        <!-- Editable Picture Upload field -->
                        <td>
                            <select  class="editable" data-field="picture_upload">
                                <option  value="Pending" {{ $item->picture_upload == 'Pending' ? 'selected' : '' }}>❌</option>
                                <option value="Done" {{ $item->picture_upload == 'Done' ? 'selected' : '' }}>✅</option>
                            </select>
                        </td>
            
                        <!-- Editable Notes field -->
                        <td>
                            <textarea class="editable" data-field="notes">{{ $item->notes }}</textarea>
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
        // Listen for changes in editable fields
        $('.editable').on('change', function() {
            const $this = $(this);
            const field = $this.data('field');
            const value = $this.val();
            const id = $this.closest('tr').data('id');

            // Send AJAX request
            $.ajax({
                url: `/Agent/task/update/${id}`,
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    [field]: value
                },
                success: function(response) {
                    if (response.success) {
                        // If 'done' is updated to 'Yes', update the Done Time field
                        if (field === 'done' && value == '1') {
                            $this.closest('tr').find('.done_time').text(response.done_time);
                        }
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
