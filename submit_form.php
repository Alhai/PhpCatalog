<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Document</title>
</head>

<body>

  <?php

  var_dump($_POST);
  if (isset($_POST) && !empty($_POST)) {
    foreach ($_POST as $key => $number) {
      if (isset($number) && !empty($number)) {
        echo "<pre>";
        
        echo  $key . "-" . " Quantité" . " : " . $number;
        echo "</pre>";
      } else if ($number == 0) { 
        echo '<div class="alert-danger alert-success" role="alert">
      <h4 class="alert-heading">ATTENTION !</h4>
      <p>Le Panier est Vide </p>
    </div>';
   
      } if ($number != 0){
          
          $price = $number * 90;
          echo $price;
      }
  } 
    
}

 

?>

</body>

</html>