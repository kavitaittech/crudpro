<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<body>
    <x-header />
    <div class="container">
        <table border="1" class="table table-striped table-hover w-75 mx-auto">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">Address</th>
                    <th scope="col">City</th>
                    <th scope="row">Action</th>
                    
                </tr>
            </thead>
            <tbody>
                <td>ID</td>
                <td>Username</td>
                <td>Username</td>
                <td>Username</td>
                <td>Username</td>
                <td>
                <button type="button" class="btn btn-primary ">
                  <a  class="text-decoration-none text-light">Edit</a>
                </button>
                <button type="button" class="btn btn-danger ">
                  <a  class="text-decoration-none text-light">Delete</a>
                </button>
              </td>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>