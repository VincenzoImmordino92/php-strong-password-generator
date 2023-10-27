<?php






include_once __DIR__ . "/template/head.php"
?>

<body>

  <div class="container my-5">
    <div class="row flex-column text-center">
      <div class="col">
        <h1>Strong Passoword Generator</h1>
        <h3>Genera una password sicura</h3>
      </div>
      <div class="col">
        <p>scegliere una pasword con un minimo di 8 caratteri e un massimo di 32 caratteri</p>
      </div>
      <div class="col">
        <form action="/action_page.php">
          <label for="quantity">Lunghezza password:</label>
          <input type="number" name="generator_password" id="quantity" name="quantity" min="8" max="32">
          <input type="submit">
      </form>
      </div>
    </div>
    
  </div>

</body>
</html>