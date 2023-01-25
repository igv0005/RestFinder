<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>

    <div class="signupFrm">
  
        <form action="conexion.php" method="post" class="form">
        <a href="index.html">
        <button type="button" class="submitBtn">Atras</button>
        </a>
          <h1 class="title">Registro</h1>
          
            
          <div class="inputContainer">
            <input type="text" class="input" placeholder="a" name="nombre_completo">
            <label for="" class="label">Nombre completo</label>
          </div>
    
          <div class="inputContainer">
            <input type="text" class="input" placeholder="a" name="nombre_usuario">
            <label for="" class="label">Usuario</label>
          </div>
    
          <div class="inputContainer">
            <input type="text" class="input" placeholder="a" name="password">
            <label for="" class="label">Contraseña</label>
          </div>
    
          <input type="submit" class="submitBtn" value="Sign up">
        </form>
      </div>

<style>
@import url('https://fonts.googleapis.com/css2?family=Lato&display=swap');

    /* Get rid of all default margins/paddings. Set typeface */
    body {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      background-color: white;
      font-family: "lato", sans-serif;
    }
    /* Puts the form in the center both horizontally and vertically. Sets its height to 100% of the viewport's height */

.signupFrm {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}

.form {
  background-color: white;
  width: 400px;
  border-radius: 8px;
  padding: 20px 40px;
  box-shadow: 0 10px 25px rgba(92, 99, 105, .2);
}

.title {
  font-size: 50px;
  margin-bottom: 50px;
}

.inputContainer {
  position: relative;
  height: 45px;
  width: 90%;
  margin-bottom: 17px;
}

/* Style the inputs */

.input {
  position: absolute;
  top: 0px;
  left: 0px;
  height: 100%;
  width: 100%;
  border: 1px solid #DADCE0;
  border-radius: 7px;
  font-size: 16px;
  padding: 0 20px;
  outline: none;
  background: none;
  z-index: 1;
}

/* Hide the placeholder texts (a) */

::placeholder {
  color: transparent;
}

/* Styling text labels */

.label {
  position: absolute;
  top: 15px;
  left: 15px;
  padding: 0 4px;
  background-color: white;
  color: #DADCE0;
  font-size: 16px;
  transition: 0.5s;
  z-index: 0;
}

.submitBtn {
  display: block;
  margin-left: auto;
  padding: 15px 30px;
  border: none;
  background-color: purple;
  color: white;
  border-radius: 6px;
  cursor: pointer;
  font-size: 16px;
  margin-top: 30px;
}

.submitBtn:hover {
  background-color: #9867C5;
  transform: translateY(-2px);
}

.input:focus + .label {
  top: -7px;
  left: 3px;
  z-index: 10;
  font-size: 14px;
  font-weight: 600;
  color: purple;
}

.input:focus {
  border: 2px solid purple;
}

.input:not(:placeholder-shown)+ .label {
  top: -7px;
  left: 3px;
  z-index: 10;
  font-size: 14px;
  font-weight: 600;
}
</style>
<?php
    include('conexion.php')
    ?>
</body>


</html>