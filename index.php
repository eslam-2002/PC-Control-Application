
<?php 

$command = "";
$output = "";
//var_dump($_POST);
if (isset($_POST["command"])) {

    $command = $_POST["command"];
    //echo $_POST["command"];
    $output = shell_exec($command);
 
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <title>Control PC</title>
</head>
<body style="background-color: #bfbcbb;">

<div class="container" style="padding-top: 25px;">
<div class="row">

<div class="col-4"></div>
<div class="col-4">
<div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">This Application Should Never Be Deployed To Production</h5>
  </div>
</div>
<div class="col-4"></div>

</div>
</div>
<div class="container" style="padding-top: 25px;">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
<form action="" method="post">
  <div class="mb-3">
    <label class="form-label">Command : </label>
    <input type="text" class="form-control" placeholder="enter command" name="command" value="<?php echo $command; ?>">
  </div>

  <button type="submit" class="btn btn-success">Submit</button>
<br>
<br>
  <div class="form-floating">
  <textarea class="form-control" placeholder=" command Output : " style="height: 100px "   id="floatingTextarea"><?php echo $output; ?></textarea>
  <label for="floatingTextarea">command Output : </label>
</div>
</form>
</div>
<div class="col-3"></div>
</div>
</div>
</body>




<footer>
      <div class="container text-muted text-center py-3 mt-5">
        <h5>
          Copyright &copy; 2021 |
          <a style="font-size: 11px;" class="text-decoration-none" href="https://github.com/eslam-2002"
            >Eslam Samy</a
          >
        </h5>
      </div>
    </footer>


</html>