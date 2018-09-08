<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Mystery Number</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
        crossorigin="anonymous">
</head>
<body>
<?php
include "./src/Mystery.php";
?>
<h1 class="text-center mt-5 pt-5">Mystery Number</h1>
<form class="mx-auto p-5 text-center" action="/" method="post">
<button type="submit" name="button" class="btn btn-primary">Start Game</button>
</form>
<?php
    session_start();
    if (isset($_POST['button'])){
    $mystery1 = new Mystery();
    $_SESSION["myster"]=$mystery1;
    echo '<p class="text-center">Ok go start game</p>';
    }
?>
<form class="mx-auto p-5 text-center" method="post">
  <div class="form-group">
    <label for="number">Select Number</label>
    <select class="form-control" name="number">
      <option>0</option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
      <option>6</option>
      <option>7</option>
      <option>8</option>
      <option>9</option>
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php
  if (isset($_POST['number'])) {
    $number = $_POST['number'];
    echo '<p class="text-center">'.($_SESSION["myster"]->mystNumber($number)).'</p>';
  }
?>
</body>
</html>