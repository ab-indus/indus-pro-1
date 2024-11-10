@extends('admin_frontend.master')
@section('content')

 <div class="content-wrapper">

     <!-- Modal HTML -->
 <div id="statusModal" style="display: none;">
    <p>Want to update record?</p>
    <button id="confirmYes">Yes</button>
    <button id="confirmNo">No</button>
</div>

    <div class="card my-2" id="cloneILPContainer">
    <div class="card-body">

        <h4 class="card-title">Client Change Request </h4>
         <p class="card-description"></p>


         <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th class="card-title">Timestamp</th>
                        <th class="card-title">First Name</th>
                        <th class="card-title">Last Name</th>
                        <th class="card-title">Phone</th>
                        <th class="card-title">Carrier</th>
                        <th class="card-title">Policy #</th>
                        {{-- <th class="card-title">Auto Pay</th> --}}
                        <th class="card-title">Driver</th>
                        <th class="card-title">Driver Name</th>
                        <th class="card-title">DL</th>
                        <th class="card-title">Vehicle</th>
                        <th class="card-title">Vin</th>
                        <th class="card-title">Year</th>
                        <th class="card-title">Make</th>
                        <th class="card-title">Model</th>
                        <th class="card-title">Coverage</th>
                        <th class="card-title">Lien</th>
                        <th class="card-title">New Phone Number</th>
                        <th class="card-title">New Email</th>
                        <th class="card-title">New Address</th>
                        <th class="card-title">Notes</th>
                        <th class="card-title">Agents</th>

                        <th class="card-title">Agent Notes</th>
                        <th class="card-title">Completed</th>
                        <th class="card-title">Done Time</th>
                        <th class="card-title">View Policy</th>

                        
     
                    </tr>
                </thead>
                <tbody>

                    @foreach($data as $change)
                    <tr>
                        <td>{{ $change->created_at }}</td> <!-- Timestamp -->
                        <td>{{ $change->first_name }}</td> <!-- First Name -->
                        <td>{{ $change->last_name }}</td> <!-- Last Name -->
                        <td>{{ $change->phone }}</td> <!-- Phone -->
                        <td>{{ $change->carrier }}</td> <!-- Carrier -->
                        <td>{{ $change->policy_number }}</td> <!-- Policy # -->
                        {{-- <td>{{ $change->auto_pay }}</td> <!-- Auto Pay --> --}}
                        <td>{{ $change->driver_action }}</td> <!-- Driver -->
                        <td>{{ $change->driver_name }}</td> <!-- Driver Name -->
                        <td>{{ $change->dl }}</td> <!-- DL -->
                        <td>{{ $change->vehicle_option }}</td> <!-- Vehicle -->
                        <td>{{ $change->vin }}</td> <!-- Vin -->
                        <td>{{ $change->year }}</td> <!-- Year -->
                        <td>{{ $change->make }}</td> <!-- Make -->
                        <td>{{ $change->model }}</td> <!-- Model -->
                        <td>{{ $change->coverage }}</td> <!-- Coverage -->
                        <td>{{ $change->lien_option }}</td> <!-- Lien -->
                        <td>{{ $change->new_phone_number }}</td> <!-- New Phone Number -->
                        <td>{{ $change->new_email }}</td> <!-- New Email -->
                        <td>{{ $change->new_address }}</td> <!-- New Address -->
                        <td>{{ $change->notes }}</td> <!-- Notes -->
                        <td>{{ $change->agent }}</td> <!-- Agents -->

                        {{-- <td>{{ $change->agent_notes }}</td>  --}}
                        <td>
                            <span id="agent-note-{{ $change->id }}">{{ $change->agent_notes }}</span>
                            <button class="edit-note-btn" data-id="{{ $change->id }}" style="margin-left: 5px;">Edit Note</button>
                        </td>
                        {{-- <td>{{ $change->completed ? 'Yes' : 'No' }}</td> <!-- Completed --> --}}

                        {{-- <td>
                            <button 
                                class="status-toggle-btn" 
                                data-id="{{ $change->id }}" 
                                data-completed="{{ $change->completed }}" 
                                style="background-color: {{ $change->completed ? 'green' : 'red' }}; color: white;">
                                {{ $change->completed ? 'Yes' : 'No' }}
                            </button>
                        </td> --}}

                        <td>
                            <select 
                                class="status-select" 
                                data-id="{{ $change->id }}" 
                                style="background-color: {{ $change->completed == 'Done' ? 'green' : ($change->completed == 'Quoted / No Change' ? 'orange' : 'red') }}; color: white;">
                                <option value="Pending" {{ $change->completed == 'Pending' ? 'selected' : '' }}>Pending</option>
                                <option value="Quoted / No Change" {{ $change->completed == 'Quoted / No Change' ? 'selected' : '' }}>Quoted / No Change</option>
                                <option value="Done" {{ $change->completed == 'Done' ? 'selected' : '' }}>Done</option>
                            </select>
                        </td>
                        
                    
                        <td>{{ $change->done_time ?? 'Pending' }}</td> <!-- Done Time -->
                        <td>
                            <a href="{{ url('Policy/View/'.$change->policy_id)}}">View</a>
                        </td>
     
                    </tr>
                    @endforeach

                </tbody>

            </table>
        </div>
        
       
        <!-- Modal Popup for Editing Note -->
        <div id="editNoteModal" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5);">
            <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); background: white; padding: 20px; width: 300px; border-radius: 8px;">
                <h4>Edit Note</h4>
                <textarea id="noteText" rows="5" style="width: 100%;"></textarea>
                <button id="saveNote" style="margin-top: 10px;">Save</button>
                <button id="closeModal" style="margin-top: 10px; background-color: red; color: white;">Cancel</button>
            </div>
        </div>


        


<br>


</div></div>



<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
    document.querySelectorAll('.edit-note-btn').forEach(button => {
        button.addEventListener('click', function () {
            const changeId = this.getAttribute('data-id');
            const noteContent = document.getElementById(`agent-note-${changeId}`).textContent;

            // Set the current note content in the textarea
            document.getElementById('noteText').value = noteContent;
            document.getElementById('editNoteModal').style.display = 'block';

            // Save note with AJAX
            document.getElementById('saveNote').onclick = function () {
                const updatedNote = document.getElementById('noteText').value;
                updateNote(changeId, updatedNote);
            };

            // Close modal on cancel
            document.getElementById('closeModal').onclick = function () {
                document.getElementById('editNoteModal').style.display = 'none';
            };
        });
    });

    function updateNote(id, note) {
        fetch(`/Client/Change/Request/update/Note/${id}`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({ agent_notes: note })
        })
        .then(response => response.json())
        .then(data => {
            // Update the displayed note and close the modal
            document.getElementById(`agent-note-${id}`).textContent = note;
            document.getElementById('editNoteModal').style.display = 'none';
        })
        .catch(error => console.error('Error:', error));
    }
</script>

<script>
    document.querySelectorAll('.status-select').forEach(select => {
        select.addEventListener('change', function () {
            const changeId = this.getAttribute('data-id');
            const selectedStatus = this.value;

            updateStatus(changeId, selectedStatus);
        });
    });

    function updateStatus(id, status) {
        fetch(`/Client/Change/History/update/${id}`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({ completed: status })
        }).then(response => response.json())
          .then(data => location.reload()); // Reload the page to update the status display
    }
</script>

@endsection
