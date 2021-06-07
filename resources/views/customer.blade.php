<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <style>
    body{
        background-color:lightgray;
    }
    h1{
       text-align:center;
    }
    table, td, th {
  border: 1px solid black;
}

table {
  border-collapse: collapse;
  width: 100%;
}

td {
  text-align: center;
  text-align: left;]
  height: 50px;
  width:550px;
  vertical-align: bottom;
}
  </style>




</script> 

</head>

<body>

<h1>Customers Details</h1>
@csrf

  <table border="1">
       <tr>
           <th>ID<th>
           <th>FIRST_NAME<th>
           <th>LAST_NAME<th>
           <th>GENDER<th>
         </tr>
 @foreach($customers as $customer)
      <tr>
         <td class="table-primary">{{ $customer ->id }}</td>
         <td class="table-secondary">{{ $customer ->first_name }}</td>
         <td class="table-success">{{ $customer ->last_name }}</td>
         <td class="table-danger">{{ $customer ->gender }}</td>
       </tr>
    @endforeach
   </table>
      
</body>
</html>