<html>
<title>User Data</title>
<body>
<h3>User Data</h3>
    <table border="1px">
        <tr>
            <th>Username</th>
            <th>Fname</th>
            <th>Lname</th>
            <th>Email</th>
            <th>Location</th>
            <th>Mobile</th>
            <th>Gender</th>
            <th>Action</th>
        </tr>
        @foreach($users as $user)
        <tr>
            <td>{{$user->username}}</td>
            <td>{{$user->fname}}</td>
            <td>{{$user->lname}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->location}}</td>
            <td>{{$user->mobile}}</td>
            <td>{{$user->gender}}</td>
            <td><a href="{{route('user.edit',[$user->id])}}">edit</a></td>
        </tr>
        @endforeach
    </table>

</body>
</html>