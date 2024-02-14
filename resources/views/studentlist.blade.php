<!doctype html>
<html lang="en">
    <head>
        <title>Registered Students List</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <!-- place navbar here -->
        </header>
        <main>

<div class="container">
<table class="table table-hover">
@if($success= Session::get('success'))

<div class="alert alert-danger alert-dismissible fade show" role="alert">
<strong>{{ $success }}</strong> Student Deleted...!.
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
  <thead>
    <h1 class="text-center text-success display-4 my-4 fw-bolder">Registered Students List</h1>
    <tr class="table-success">
      <th scope="col">S.No</th>
      <th scope="col">Username</th>
      <th scope="col">Email</th>
      <th scope="col">Image</th>
      <th scope="col">Contact</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach( $students as $student)
    <tr>
      <th scope="row">{{ $loop->index+1}}</th>
      <td>{{ $student['username']}}</td>
      <td>{{ $student['email']}}</td>
      <td><img src="./student_uploads/{{ $student['image']}}" width="50" alt=""></td>
      <td>{{ $student['contact']}}</td>
      <td>
        <a href="editstudent/{{ $student['id']}}" class="btn btn-primary">Edit</a>
        <a href="deletestudent/{{ $student['id']}}" class="btn btn-danger">Delete</a>
     </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>

        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
