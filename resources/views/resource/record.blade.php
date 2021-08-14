<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .container{
          margin-top:100px;
          display:flex;

          justify-content:center;
          align-items:center;
          flex-direction:column;
        }
     </style>
</head>
<body>
    <div class="container">
    <h5>Upload a record to database</h5>
    <form method="POST" action="/uploadRecord" enctype="multipart/form-data" style="margin:10px;">
    @csrf
    <div class="custom-file">
      <input type="file" class="custom-file-input" id="customFile" name="file">
      <label class="custom-file-label" for="customFile">Choose file</label>

    </div>
      @error('file')
      <div>
    <span style="color:red">{{$message}}</span>
    </div>
      @enderror
      <div>
    <button class="btn btn-primary" type="submit" style="margin-top:10px;">Submit record</button>
    <a class="btn btn-success" type="button" style="margin-top:10px; color:white; float:right;" href="/viewRecord">View records</a>
    </div>
    </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script>
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>
</body>
</html>
