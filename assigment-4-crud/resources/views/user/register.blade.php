<html>
<title>Register</title>
<body>
<h3>User register</h3>
@include('error.error')
<form action="{{route('user.register')}}" method="POST">
    {{csrf_field()}}
    <input type="text" name="username" placeholder="User Name">
    <input type="text" name="fname" placeholder="First Name"></br>
    <input type="text" name="lname" placeholder="Last Name"></br>
    <input type="email" name="email" placeholder="Email"></br>
    <input type="text" name="location" placeholder="Location"></br>
    <input type="text" name="mobile" placeholder="Mobile No"></br>
    <label for="gender">Gender: </label>
    <label for="Male">Male</label>
    <input type="radio" id="M" name="gender" value="Male" placeholder="Gender">
    <label for="Female">Female</label>
    <input type="radio" id="F" name="gender" value="Female" placeholder="Gender"> </br>
    <input type="submit" name="submit" value="Register">

</form>
</body>
</html>