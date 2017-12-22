<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <title>Bin master</title>



    <link rel="stylesheet" href="css/login.css">


</head>

<body>

<form action="{{route ('signin')}}" method="POST">
    {{csrf_field()}}
    <header>Login</header>
    <label>Username </label>
    <input/>

    <label>Password</label>
    <input/>

    <button>Login</button>
    <input type="hidden" name="_token" value="{{ Session::token() }}">
</form>


</body>
</html>
