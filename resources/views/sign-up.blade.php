<x-header />

<form action="" method="post">
    @csrf
    <div class="container">
        <div class="card">
            <h1>Register Students</h1>
            <hr>
            <label for="name"><b>Name</b></label>
            <input type="text" placeholder="Enter Name" name="name" id="email" value="{{ old('name') }}">
            <span role="alert" id="login-error"> @if ($errors->has('name')) <span class="text-danger">@error("name"){{$message}}@enderror</span> @endif </span>
            <br>
            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" id="email" value="{{ old('email') }}">
            <span role="alert" id="login-error"> @if ($errors->has('email')) <span class="text-danger">@error("email"){{$message}}@enderror</span> @endif </span>

            <br>
            <label for="pass"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="pass" id="psw" value="{{ old('pass') }}">
            <span role="alert" id="login-error"> @if ($errors->has('pass')) <span class="text-danger">@error("pass"){{$message}}@enderror</span> @endif </span>

            <br>
            <label for="address"><b>Address</b></label>
            <input type="text" placeholder="Enter Address" name="address" id="address" value="{{ old('address') }}">
            <span role="alert" id="login-error"> @if ($errors->has('address')) <span class="text-danger">@error("address"){{$message}}@enderror</span> @endif </span>

            <br>
            <label for="city"><b>City</b></label> 
            <input type="text" placeholder="Enter city" name="city" id="city" value="{{ old('city') }}">
            <span role="alert" id="login-error"> @if ($errors->has('city')) <span class="text-danger">@error("city"){{$message}}@enderror</span> @endif </span>

            <br>
            <label for="zip"><b>Zip</b></label>
            <input type="text" placeholder="Enter zip" name="zip" id="zip" value="{{ old('zip') }}">
            <span role="alert" id="login-error"> @if ($errors->has('zip')) <span class="text-danger">@error("zip"){{$message}}@enderror</span> @endif </span>

            <br>
            <hr>
            <button type="submit" class="registerbtn" name="submit">Register</button>
            <p class="signin p-3 mt-3">Already have an account? <a href="#">Sign in</a>.</p>
        </div>
       
    </div>
</form>