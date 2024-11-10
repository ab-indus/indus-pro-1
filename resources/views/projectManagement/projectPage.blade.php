@extends('admin_frontend.master')
@section('content')

    
 
<div class="content-wrapper">
 
    
        <div class="card my-2" id="cloneILPContainer">
        <div class="card-body">
    
            <h4 class="card-title">Project : {{$data->project_name}} </h4>
             <p class="card-description"></p>
             <strong>Date Today:</strong> {{ \Carbon\Carbon::now()->format('m/d/Y') }}<br>
             <strong>Deadline:</strong> {{ \Carbon\Carbon::parse($data->Deadline)->format('m/d/Y') }}<br>
             <strong>Percent Completed:</strong> {{ $data->percent_completed ?? '0' }}%<br>
             <strong>Running Cost:</strong> ${{ $data->running_cost ?? '0' }}<br>
             <strong>Estimated Cost:</strong> <span id="total-cost">0</span> <br>
             <strong>Estimated Time:</strong> <span id="total-time">0</span> <br>   

             {{-- <strong>Estimated Cost:</strong> ${{ $data->EstimatedCost }} <br> --}}


             {{-- <strong>Category:</strong> 
             @if ($data->categories->isNotEmpty())
                 <ul>
                     @foreach ($data->categories as $category)
                         <li>{{ $category->category }}</li>
                     @endforeach
                 </ul>
             @else
                 No categories assigned.
             @endif --}}


</div></div>

<div class="card my-2" id="cloneILPContainer">
    <div class="card-body">
 
        <h4 class="card-title">Project Categories</h4>
        <div class="table-responsive">
          <table class="table table-bordered">
              <thead>
              <tr>
                
                <th class="card-title">Category</th>
                <th class="card-title">Estimated Time</th>
                <th class="card-title">Estimated Cost</th>
               
              </tr>
            </thead>
            <tbody>

                @if ($data->categories->isNotEmpty())
                    @foreach ($data->categories as $category)
                        <tr>
                            <td>{{ $category->category }}</td>
                            <td class="time">{{ $category->EstimatedTime }}</td>
                            <td class="cost">{{ $category->EstimatedCost }}</td>

                        </tr>
                    @endforeach
            @else
                No categories assigned.
            @endif
                  
                  </tbody>
              </table>
        </div>

</div></div>




</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function() {
        // Function to sum up all the costs
        function calculateTotalCost() {
            let totalCost = 0;
            let totalTime = 0;


            // Iterate over each element with the class 'cost'
            $('.cost').each(function() {
                // Parse the text as a float and add to the total
                let cost = parseFloat($(this).text()) || 0;
                totalCost += cost;
            });

            $('.time').each(function() {
                // Parse the text as a float and add to the total
                let time = parseFloat($(this).text()) || 0;
                totalTime += time;
            });

            // Update the total-cost span with the calculated value
            $('#total-cost').text(totalCost.toFixed(2));
            $('#total-time').text(totalTime.toFixed(2)); // Display with two decimal places
        }

        // Calculate total cost on page load
        calculateTotalCost();

        // If costs change dynamically, you can call calculateTotalCost() after any changes
    });

</script>

@endsection
