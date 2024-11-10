<!doctype html>
<html lang="en">

<head>
  <title>Export users</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>


<h1>User Export</h1>

<form action="{{ route('import-customer')}}" method="post" enctype="multipart/form-data" >
   @csrf
   <div class="mb-3">
  <label for="" class="form-label">Choose file</label>
  <input type="file" class="form-control" name="file" id="" placeholder="" aria-describedby="fileHelpId">
  <div id="fileHelpId" class="form-text">Help text</div>
</div>
<a href="{{ route('user-export')}}">Export Excel</a>
   <input type="submit">
</form>
</body>
</html>