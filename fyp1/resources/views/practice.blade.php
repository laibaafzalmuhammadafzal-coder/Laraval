<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <h1>Welcome to My Application</h1>
    <p>This is the welcome page.</p> -->
         <!-- <a href="{{ URL::to('/index') }}">index</a> -->
         <form action="{{ URL::to('/insertRecord') }}" method="POST">
            @csrf
            <input type="text" name="fullname" placeholder="Enter your name">
           <input type="text" name="email" placeholder="Enter your email">
            <input type="text" name="password" placeholder="Enter your password">

            <input type="submit" name="save" value="Submit">

         </form>

</body>
</html>