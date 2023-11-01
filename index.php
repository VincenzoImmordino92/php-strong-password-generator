<?php

require_once __DIR__ . "/functions.php";

session_start();

$error_msg = "Scegliere una password con un minimo di 8 caratteri e un massimo di 32 caratteri";

$password= "";


if(isset($_GET["generator_password_number"])){
  $numberPassword = $_GET["generator_password_number"];

  if(number_generator($numberPassword)){
    $password = randomPassword($numberPassword);

    $_SESSION['passwordGen'] = $password;

    header('Location: ./password_generator.php');

  }else{
    $error_msg = "Errore! La lunghezza della password deve avere un minimo di 8 caratteri e un massimo di 32 caratteri";
  }
}

require_once __DIR__ . "/template/head.php";
?>

<body>

  <div class="container my-5">
    <div class="row flex-column text-center">
      <div class="col">
        <h1>Strong Password Generator</h1>
        <h3>Genera una password sicura</h3>
      </div>
      <div class="col message my-2">
        <p class=" m-0 "><?php echo $error_msg ?></p>
      </div>

      <div class="col box d-flex my-2 flex-column">

        <form action="index.php" method="GET">

          <label for="quantity">Lunghezza password:</label>
          <input type="number" name="generator_password_number" id="quantity" name="quantity" min="1" max="80">
          <p></p>
          <h1><?php echo $password ?></h1>
          <div class="col">

            <button type="submit" class="btn btn-outline-light">Invia</button>
            <a href="index.php" class="btn btn-outline-dark" >Annulla</a>

          </div>
      </form>
      </div>
    </div>
    
  </div>

</body>
</html>