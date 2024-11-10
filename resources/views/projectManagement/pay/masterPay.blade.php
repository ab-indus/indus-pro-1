@extends('admin_frontend.master')
@section('content')
<div class="content-wrapper">

  <!-- Body start  -->

  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">


        {{-- date form --}}
        <form action="{{ url('Team-Member/Master-Pay') }}" method="GET">
          <!-- Add this form -->
          @csrf
          <div class="row">

            <div class="col-md-4">
              <div class="form-group row">
                <label class="col-sm-4 col-form-label">Date From</label>
                <div class="col-sm-8">
                  <input type="date" class="form-control" name="dateFrom" />
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group row">
                <label class="col-sm-4 col-form-label">Date To</label>
                <div class="col-sm-8">
                  <input type="date" class="form-control" name="dateTo" />
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <button type="submit" class="btn btn-info mr-2">Set Date Range </button> <br>

            </div>



          </div>
          <br>
        </form>


        {{-- date form end --}}


        <h4 class="card-title">Master Pay Sheet</h4>
        <p class="card-description"> All Details <code></code>
        </p>

        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>
                  <h6 class="card-title">Name</h6>
                </th>
                <th>
                  <h6 class="card-title">CNIC/NTN</h6>
                </th>
                <th>
                  <h6 class="card-title">Total Regular Hours</h6>
                </th>
                <th>
                  <h6 class="card-title">Hourly Rate</h6>
                </th>
                <th>
                  <h6 class="card-title">Base Salary</h6>
                </th>
                <th>
                  <h6 class="card-title">Over Time Hours</h6>
                </th>
                <th>
                  <h6 class="card-title">Over Time Rate</h6>
                </th>
                <th>
                  <h6 class="card-title">Total Ovetime </h6>
                </th>
                <th>
                  <h6 class="card-title">Bonus/Comm</h6>
                </th>
                <th>
                  <h6 class="card-title">Flat Rate</h6>
                </th>
                <th>
                  <h6 class="card-title">Gross Pay-Out</h6>
                </th>
                <th>
                  <h6 class="card-title">Tax Withheld</h6>
                </th>
                <th>
                  <h6 class="card-title">Gratuity</h6>
                </th>
                <th>
                  <h6 class="card-title">Insurance</h6>
                </th>
                <th>
                  <h6 class="card-title">Other Deductions</h6>
                </th>
                <th>
                  <h6 class="card-title">Net Pay-Out</h6>
                </th>

              </tr>
            </thead>
            <tbody>

              @foreach ($members as $member)
              <tr>
                <td><a href="{{ url('Team-Member/Pay-Sheet',$member->id )}}">
                    {{ $member->First_Name}} {{ $member->Middle_Name}} {{ $member->Surname}}
                  </a></td>

                <td>{{ $member->CNIC_NTN}}</td>
                <td>
                  {{ $member->rate->Monthly_Rate}}
                </td>

                <td>
                  {{
                    isset($member->rate->Hourly_Rate) ? $member->rate->Hourly_Rate : ''
                  }}
                </td>

                <td>
                  {{
                   $member->rate->Monthly_Rate*$member->rate->Hourly_Rate;
                  }}
                </td>
                
                <td>
                  {{
                    // isset($totalHours) && isset($member->rate->Minimum_Monthly_Hours) ? ($totalHours - $member->rate->Minimum_Monthly_Hours) : ''
                    $member->TotalOvetime;
                  }}
                </td>
                
                <td>
                  {{
                    isset($member->rate->Hourly_Over_Time_Rate) ? $member->rate->Hourly_Over_Time_Rate : ''
                  }}
                </td>
                <td> 
                  {{ number_format((float) $member->rate->Hourly_Over_Time_Rate * (float) $member->TotalOvetime, 2) }}
              </td>
              
                <td>{{ $member->Bonus }}</td>
                <td></td>
                <td></td>
                <td></td>
                <td>{{$member->Gratuity}}</td>
                <td>{{$member->Insurance}}</td>
                <td>{{ $member->EmployerPF; }}</td>
                <td>{{ $member->TotalOvetime; }}</td>

              </tr>
              @endforeach

            </tbody>
          </table>
        </div>
      </div>
    </div>

  </div>
  <!-- Modal Start -->
  <center>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <form method="POST">
          @csrf
          @method('delete')
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5 " id="exampleModalLabel">Delete Vendor Details</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              Are you sure you want to delete ?
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Delete</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </center>
  <!-- Modal End-->
</div>



<script>
  function showForm(url){

$("#exampleModal form").attr('action', url);
$("#exampleModal").modal("show");
}

</script>
@endsection