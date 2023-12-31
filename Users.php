<?php
#Another Solution
// $show_data = "";


if($_POST){
    switch($_POST['user']){
        case 'Mohamed':
            $name = $_POST['user'];
            $id = 1;
            $gender = "Male";
            $phone = "01278694124";
            $email = "mohamed@gmail.com";
            break;
        case 'Ahmed':
            $name = $_POST['user'];
            $id = 2;
            $gender = "Male";
            $phone = "01234567899";
            $email = "ahmed@gmail.com";
            break;
        default:
            $name = $_POST['user'];
            $id = 3;
            $gender = "Female";
            $phone = "0147258369";
            $email = "doaa@gmail.com";
    }
    $show_data = "<div class='alert alert-danger'>
                    <ul>
                        <li>
                            Id: $id
                        </li>
                        <li>
                            Name: $name
                        </li>
                        <li>
                            Gender: $gender
                        </li>
                        <li>
                            Phone: $phone
                        </li>
                        <li>
                            Email: $email
                        </li>
                    </ul>
                </div>";
}


?>

<!doctype html>
<html lang="en">
  <head>
    <title>Product</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container">
        <div class="row">
            <div class="col-12 mt-5">
                <h1 class="text-dark text-center h1">Users</h1>
            </div>
            <div class="offset-4 col-4">
                <form action="" method="post">
                    <div class="form-group">
                      <label for="user">Users</label>
                      <select name="user" id="user" class="form-control">
                        <option value="Mohamed">Mohamed</option>
                        <option value="Ahmed">Ahmed</option>
                        <option value="Doaa">Doaa</option>
                      </select>
                    </div>
                    <div class="form-group">
                        <button name="sale" value="sale" class="btn btn-dark rounded">Get Data!</button>
                    </div>
                </form>
                <?php if(isset($show_data)){echo $show_data;} ?>
            </div>
        </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>