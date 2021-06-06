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



<script>  
export default {
  name: "ADD",
  data: () => ({ id: "",first_name: "",last_name: "",  gender: [] }),
  computed: {
    sortedList: function() {
      return this.allScores.slice().sort(function(a, b, c, d) {
        return b.score - a.score - c.score, d.score ;
      });
    },
  },
  methods: {
    onSubmit() {
      this.allScores.push({ id: this.id, first_name: this.first_name, last_name: this.last_name, gender: this.gender, });
      this.clearForm();
    },
    clearForm() {
        this.id = "";
      this.first_name = "";
      this.last_name = "";
      this.gender = "";
    },
  },
};
</script> 

</head>

<body>
<div class="container"><br><br>
<h1>Customers Details</h1>
@csrf
<br><br>
                 <table class="table table-sm">
                      <thead class="thead-dark"> 
                          <tr>
                            <th>id<th>
                            <th>first_name<th>
                            <th>last_name<th>
                            <th>gender<th>
                          </tr>
                      </thead>
                      <tbody>
                            @foreach($customers as $customer)
                  <tr>
                        <td class="table-primary">{{ $customer ->id }}</td>
                        <td class="table-secondary">{{ $customer ->first_name }}</td>
                        <td class="table-success">{{ $customer ->last_name }}</td>
                        <td class="table-danger">{{ $customer ->gender }}</td>
                       <td>
                        <a href="" class="btn btn-secondary">EDIT</a>
                        <a href="" class="btn btn-danger">DELETE</a>
                        </td>
                  </tr>
    @endforeach
    </tbody>
    </table>
    </div>   
</body>
</html>