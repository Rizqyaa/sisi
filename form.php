
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>. . .</title>
    <style>
        h1{
            margin-left: 10px;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }
        #inputPassword6{
            margin-left: 4px;
        }
    </style>
</head>
<body>


    <form action="session.php" method="POST">
    <h1>L O G I N</h1>
    <div class="row g-3 align-items-center">
  <div class="col-auto">
    <label for="inputusername" class="col-form-label">Username</label>
  </div>
  <div class="col-auto">
    <input type="text" id="inputusername" class="form-control" aria-describedby="usernameHelpInline">
  </div>
  <div class="col-auto">
    <span id="usernameHelpInline" class="form-text">

    </span>
  </div>
</div>
<br>
    <div class="row g-3 align-items-center">
  <div class="col-auto">
    <label for="inputPassword6" class="col-form-label">Password</label>
  </div>
  <div class="col-auto">
    <input type="password" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
  </div>
  <div class="col-auto">
    <span id="passwordHelpInline" class="form-text">
      
    </span>
  </div>
</div>
    
    <button type="submit" class="btn btn-primary">submit</button>
    </form>
</body>
</html>
