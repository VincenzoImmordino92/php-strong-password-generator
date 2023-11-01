<?php
session_start();

if(isset($_SESSION['passwordGen'])){

  $password = $_SESSION['passwordGen'];

}else{

  header('Location: ./index.php');

} 


include_once __DIR__ . "/template/head.php"
?>


<body>

  <div class="container my-5">
    <div class="row flex-column text-center">
      <div class="col text-center">
        <h3>La password generata è: <?php echo $password ?></h3>
        <a href="index.php" class="btn btn-primary ">Genera un'altra password</a>
      </div>
      
      
    </div>
    
  </div>

</body>
</html> 