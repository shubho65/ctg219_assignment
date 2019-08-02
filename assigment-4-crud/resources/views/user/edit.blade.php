<html>
<title>Register</title>
<body>
<h3>User register</h3>
@include('error.error')
<form action="{{route('user.update',[$user->id])}}" method="POST">
    {{csrf_field()}}
    <input type="text" name="username" placeholder="User Name" value="{{$user->username}}">
    <input type="text" name="fname" placeholder="First Name" value="{{$user->fname}}"></br>
    <input type="text" name="lname" placeholder="Last Name" value="{{$user->lname}}"></br>
    <input type="email" name="email" placeholder="Email" value="{{$user->email}}"></br>
    <input type="text" name="location" placeholder="Location" value="{{$user->location}}"></br>
    <input type="text" name="mobile" placeholder="Mobile No" value="{{$user->mobile}}"></br>
    <label for="gender">Gender: </label>
    <label for="Male">Male</label>
    <input type="radio" id="M" name="gender" value="Male" {{($user->gender == "Male")? "checked" : " "}} placeholder="Gender">
    <label for="Female">Female</label>
    <input type="radio" id="F" name="gender" value="Female" {{($user->gender == "Female")? "checked" : " "}} placeholder="Gender"> </br>
    <input type="submit" name="submit" value="Update">

</form>
</body>
</html>