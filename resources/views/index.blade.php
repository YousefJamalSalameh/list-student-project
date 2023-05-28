<!DOCTYPE html>
<html>
<head>
    <title>Students insertion Form</title>
</head>
<body>
<h1 style="text-align: center;font-family: 'Arial Narrow';background-color: #ef4444;color: white">Add New Student</h1>
<form style="text-align: center " action="{{route('store')}}" method="POST">
    @csrf
    @if(session()->has('message'))
        <div class="alert alert-danger">
            {{ session()->get('message') }}
        </div>
    @endif
    <label for="fullname">Full Name:</label>
    <input type="text" id="fullname" name="fullname" required><br><br>

    <label for="email">Email Address:</label>
    <input type="" id="" name="email" required><br><br>

    <label for="gender">Gender:</label>
    <input type="radio" id="male" name="gender" value="Male" required>
    <label for="male">Male</label>
    <input type="radio" id="female" name="gender" value="Female" required>
    <label for="female">Female</label><br><br>

    <input type="submit" value="Submit">
    @if(session('success'))
        <div class="alert alert-success" style="color: black; background-color: greenyellow">
            {{ session('success') }}
        </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger" style="background-color: #ef4444">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <a href="show">List page</a>








</form>
</body>
</html>
