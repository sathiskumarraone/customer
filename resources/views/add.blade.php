<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>add</h1>
    <form action="add" method="p">
    @csrf
      <input class="input" type="text" name="id" placeholder="enter id"><br>
      <input class="input" type="text" name="first_name" placeholder="enter first_name"><br>
      <input class="input" type="text" name="last_name" placeholder="enter last_name"><br>
      <input class="input" type="text" name="gender" placeholder="enter gender"><br>
      <button class="btn btn-sucess" type="submit">ADD</button>
      </form>
</body>
</html>