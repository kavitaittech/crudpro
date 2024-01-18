<x-header/>
<!-- @if(session('success'))
        <div class="alert-container">
          <div class="alert alert-success fixed" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            {{ session('success') }}
          </div>
        </div> -->
        <table border="1" class="table table-striped table-hover w-75 mx-auto mt-5">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>Action</th>
                    
                </tr>
            </thead>
            <tbody>
               @foreach( $data as $user)
               <tr>
               <td>{{$user['id']}}</td>
               <td>{{$user['name']}}</td>
                <td>{{$user['email']}}</td>
                <td>{{$user['address']}}</td>
                <td>{{$user['city']}}</td>
                <td>
               
                <button type="button" class="btn btn-primary ">
                  <a  href="edit/{{$user['id']}}" class="text-decoration-none text-light">Edit</a>
                </button>
                <button type="button" class="btn btn-danger ">
                  <a href="delete/{{$user['id']}}" class="text-decoration-none text-light">Delete</a>
                </button>
              </td>
              </tr>
               @endforeach
            </tbody>
        </table>






        <!-- <script>
          window.setTimeout(function() {
            $(".alert").fadeTo(500, 0).slideUp(500, function() {
              $(this).parent().remove();
            });
          }, 2000);
        </script>
        @endif -->