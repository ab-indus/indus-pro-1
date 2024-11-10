
@extends('admin_frontend.master')
@section('content')
<div class="content-wrapper">

  <!-- Body start  -->

  <div class="col-12 grid-margin">
    <div class="d-flex justify-content-between">
        <div>
            <button class="btn btn-primary mr-2" id="uploadDocumentBtn">Add Document</button>
        </div>
        
       
    </div>
</div>

<!-- table start -->

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Records</h4>
            <p class="card-description"><code></code></p>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th><h6 class="card-title">File name</h6></th>
                            <th><h6 class="card-title">File</h6></th>
                            <th><h6 class="card-title">Create</h6></th>
                            <th><h6 class="card-title">Update</h6></th>
                            <th><h6 class="card-title">Action</h6></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($customerDocuments as $document)
                        <tr>
                            <td>{{ $document->file_name }}</td>
                            <td><a href="{{ url('storage/'.$document->file_path) }}"> View</a></td>
                            <td>{{ $document->created_at }}</td>
                            <td>{{ $document->updated_at }}</td>
                        
                                <!-- <a href="">
                                    <i class="mdi mdi-table-edit" style="color: yellow" title="Edit"></i>
                                </a> -->
                                <!-- <a href="">
                                    <i class="mdi mdi-delete" style="color:red" title="Delete"></i>
                                </a> -->
                                <!-- <a href="">
                                    <i class="mdi mdi-eye" style="color:green" title="View"></i>
                                </a> -->

                                <td>
                                <form method="post" action="{{ route('customer-documents.destroy', [$customerId, $document->id]) }}" onsubmit="return confirm('Are you sure you want to delete this document?')">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger">
                                        <i class="mdi mdi-delete" title="Delete"></i>
                                    </button>
                                </form>
                            </td>

                            
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal for file upload -->
<div class="modal fade" id="uploadDocumentModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 " id="exampleModalLabel">Upload Document</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="{{ route('customer-documents.store', $customerId) }}" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="file name">File Name</label>
                        <input type="text" class="form-control" name="file_name" >
                        <label for="file">Select File</label>
                        <input type="file" class="form-control" name="file_path" required>
                       
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Upload</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        // Show the file upload dialog when the button is clicked
        $('#uploadDocumentBtn').click(function () {
            $('#uploadDocumentModal').modal('show');
        });
    });
</script>

@endsection
