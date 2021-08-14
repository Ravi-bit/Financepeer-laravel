<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Records</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .container{
            display:flex;
            flex-direction:column;
            justify-content:center;
            align-items:center;
            margin-top:20px;
        }
    </style>
</head>
<body>
    <div class="container">
    @if(count($records)>0)
       <h4>Available Records:</h4>
       <table class="table table-striped table-dark" style="margin:10px">
       <thead>
        <tr>

         <th scope="col">userId</th>
         <th scope="col">id</th>
         <th scope="col">Title</th>
         <th scope="col">Body</th>
        </tr>
       </thead>
      <tbody>
    @endif
    @forelse($records as $r)
    <tr>
      <th scope="row">{{$r->userId}}</th>

      <td>{{$r->id}}</td>
      <td>{{$r->title}}</td>
      <td>{{$r->body}}</td>
    </tr>


    @empty
    <div style="text-align: center;" class="jumbotron">
       <h4 style="font-style: italic; color:gray">No records available in the database</h4>
    </div>
  @endforelse
     </tbody>
   </table>
    </div>
</body>
</html>
