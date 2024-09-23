<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
        <div class="row mb-2 mt-2">
            <div class="col">
                <label for="firstname" class="form-label">First name</label>
                <input type="text" class="form-control" aria-label="First name" name="firstname">
            </div>
            <div class="col">
                <label for="lastname" class="form-label">Last name</label>
                <input type="text" class="form-control" aria-label="Last name" name="lastname">
            </div>
            <div class="col">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" aria-label="Email" name="email">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="gender" class="form-label">Gender</label>
                <select class="form-select" aria-label="Default select example" name="gender">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
            <div class="col">
                <label for="birthdate" class="form-label">Birthdate</label>
                <input type="date" class="form-control" aria-label="Birthdate" name="birthdate">
            </div>
            <div class="col">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" aria-label="Address" name="address">
            </div>
        </div>
        <div class="row mb-2 mt-2">
            <div class="col d-flex justify-content-end">
                <button type="submit" class="btn btn-primary">Add</button>
            </div>
        </div>
    </div>

      <div class="container">
      <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">Gender</th>
      <th scope="col">Birthday</th>
      <th scope="col">Address</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Angela Mae</td>
      <td>Lepiten</td>
      <td>@angelamaelep</td>
      <td>female</td>
      <td>07/06/2004</td>
      <td>Pelaez</td>
      <td><button type="button" class="btn btn-danger">Delete</button>
      <button type="button" class="btn btn-warning">Edit</button></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Hannah Mae</td>
      <td>Banzon</td>
      <td>@hannahbanzon</td>
      <td>female</td>
      <td>03/20/2003</td>
      <td>Gairan</td>
      <td><button type="button" class="btn btn-danger">Delete</button>
      <button type="button" class="btn btn-warning">Edit</button></td>
    </tr>
  </tbody>
</table>
      </div>
      <

</body>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>
