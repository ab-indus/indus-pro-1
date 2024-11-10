@extends('admin_frontend.master')
@section('content')

<div class="content-wrapper">
    <form action="{{ url('Project/Update', ['id' => $project->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="card my-2" id="cloneILPContainer">
            <div class="card-body">
                <h4 class="card-title">Edit Project </h4>
                <p class="card-description">Project Info</p>

                <div class="row">

                    <div class="col">

                        <div class="form-group">
                            <label for="project_name">Project Name</label>
                            <input type="text" class="form-control" id="project_name" name="project_name" value="{{ old('project_name', $project->project_name) }}">
                        </div>

                        <div class="form-group">
                            <label for="project_template">Category Main</label>
                            <select class="form-control" id="project_type" name="project_type">
                                <option value="Marketing" {{ $project->project_type == 'Marketing' ? 'selected' : '' }}>Marketing</option>
                                <option value="HR" {{ $project->project_type == 'HR' ? 'selected' : '' }}>HR</option>
                                <option value="Sales" {{ $project->project_type == 'Sales' ? 'selected' : '' }}>Sales</option>
                                <option value="Benefits Management" {{ $project->project_type == 'Benefits Management' ? 'selected' : '' }}>Benefits Management</option>
                                <option value="Finance" {{ $project->project_type == 'Finance' ? 'selected' : '' }}>Finance</option>
                                <option value="Legal" {{ $project->project_type == 'Legal' ? 'selected' : '' }}>Legal</option>
                                <option value="Tax" {{ $project->project_type == 'Tax' ? 'selected' : '' }}>Tax</option>
                                <option value="IT-Website" {{ $project->project_type == 'IT-Website' ? 'selected' : '' }}>IT-Website</option>
                                <option value="IT-Software" {{ $project->project_type == 'IT-Software' ? 'selected' : '' }}>IT-Software</option>
                                <option value="All" {{ $project->project_type == 'All' ? 'selected' : '' }}>Other</option>
                            </select>
                        </div>

                        {{-- <div class="form-group">
                            <label for="status">Status</label>
                            <select class="form-control" id="status" name="status">
                                <option value="Active" {{ $project->status == 'Active' ? 'selected' : '' }}>Active</option>
                                <option value="Not Active" {{ $project->status == 'Not Active' ? 'selected' : '' }}>Not Active</option>
                            </select>
                        </div> --}}

                        {{-- <div class="form-group">
                            <label for="project_name">Actual Project Cost</label>
                            <input type="number" class="form-control" id="ActualCost" name="ActualCost" value="{{ old('ActualCost', $project->ActualCost) }}">
                        </div> --}}

                    </div>

                    <div class="col">

                    <div class="form-group">
                            <label for="project_name">Deadline</label>
                            <input type="date" class="form-control" id="Deadline" name="Deadline" value="{{ old('Deadline', $project->Deadline) }}">
                        </div>

                        {{-- <div class="form-group">
                            <label for="project_name">Project Percent Done</label>
                            <input type="number" class="form-control" id="ProjectPercent" name="ProjectPercent" value="{{ old('ProjectPercent', $project->ProjectPercent) }}">
                        </div> --}}

                        {{-- <div class="form-group">
                            <label for="ActualTime">Actual Project Time</label>
                            <input type="number" class="form-control" id="ActualTime" name="ActualTime" value="{{ old('ActualTime', $project->ActualTime) }}">
                        </div> --}}
                      


                    </div>

                </div>

            </div>
        </div>

        <br>
        <div class="col-12 grid-margin">
            <button type="submit" class="btn btn-primary mr-2">Submit</button>
        </div>
    </form>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</div>

@endsection
