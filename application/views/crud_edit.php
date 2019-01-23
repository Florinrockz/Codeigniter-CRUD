<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <title>CodeIgniter CRUD</title>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Navbar</a>
    </nav>
    <div class="container">
        <form method='post' action='<?php echo site_url("crudcontroller/update"); ?>/<?php echo $row->id;?>'>
            <div class="form-group">
                <label for="exampleInputEmail1">First Name</label>
                <input type="text" class="form-control" name='FirstName' value="<?php echo $row->firstname; ?>" aria-describedby="emailHelp" placeholder="First Name">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Last Name</label>
                <input type="text" class="form-control" name='LastName' value="<?php echo $row->lastname; ?>" aria-describedby="emailHelp" placeholder="Last Name">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Birth Date</label>
                <input type="date" class="form-control" name='BirthDate' value="<?php echo $row->birth_date; ?>" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Phone</label>
                <input type="text" class="form-control" name='Phone' value="<?php echo $row->phone; ?>" aria-describedby="emailHelp" placeholder="Phone">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Bio</label>
                <input type="text" class="form-control" name='Bio' value="<?php echo $row->bio; ?>" aria-describedby="emailHelp" placeholder="Bio">
            </div>
            <button type="submit" class="btn btn-primary" value="save">Submit</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>