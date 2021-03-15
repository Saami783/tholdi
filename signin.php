<?php

include_once"_head_inc.php";
  
?>
  <link rel="stylesheet" href="signin_css/css/style.css">
  
  <!-- Bootstrap !-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900|Material+Icons'>
<!-- Fin Bootstrap !-->



<title>Inscription</title>


<!-- Formulaire de onnexion -->
<div class="form">
  <div class="form-toggle"></div>
  <div class="form-panel one">
    <div class="form-header">
      <h1>Connexion</h1>
    </div>
    <div class="form-content">
      <form>

<!-- Saisie adresse mail !-->
        <div class="form-group">
          <label for="username">Adresse e-mail</label>
          <input type="text" id="username" name="username" required="required"/>
        </div>

<!-- Saisie mot de passe !-->
        <div class="form-group">
          <label for="password">Mot de passe</label>
          <input type="password" id="password" name="password" required="required"/>
        </div>

<!-- Checkbox !-->
        <div class="form-group">
          <label class="form-remember">
            <input type="checkbox"/>Se souvenir de moi</label>

<!-- Mdp oublié !-->            
          <a class="form-recovery" href="renitialisationMdp.php">Mot de passe oublié?</a>
        </div>
        </label>

<!-- Redirection vers signup.php !-->
        <a class="form-recovery" href="signup.php">Pas encore inscrit?</a>
        </div>
        
<!-- Submit !-->
        <div class="form-group">
            <button type="submit"> <a  href="index.php"><font color="black">Se connecter.</font></a></button>
        </div>

      </form>
    </div>
  </div>

</body>
</html>
  

