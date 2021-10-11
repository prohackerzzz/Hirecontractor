<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="viewprofile.css">
    <title>View Profile</title>
</head>
<body>
    <?php include "../Mainfolder/Navbar.php";?>
    <div class='container'>
    <form action="contdataupload.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">
    <label for="exampleFormControlInput1">Your Image</label>
    <input name="image" type="file" class="form-control" id="exampleFormControlInput1" accept="image/*" placeholder="for ex :- Plumbing, Painting"onchange="loadFile(event)">
    
    <img id="output"/>
<script>
  var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src) // free memory
    }
  };
</script>

  </div>
    <div class="form-group">
    <label for="exampleFormControlInput1">Your Charge/hr</label>
    <input name="rate" type="number" class="form-control" id="exampleFormControlInput1" placeholder="">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Your Work</label>
    <input name="desc" type="text" class="form-control" id="exampleFormControlInput1" placeholder="for ex :- Plumbing, Painting">
  </div>
  <div class="form-group">

    <label for="exampleFormControlTextarea1">Describe your work</label>
    <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <div class="butt">
  <button type="submit" name ="submit" class="btn btn-primary">Submit</button>
</div>
    </form>
</div>
    <?php include "../Mainfolder/Footer.php"?>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>