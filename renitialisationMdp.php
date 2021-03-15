<?php

include_once"_head_inc.php";
  
?>
<title>Inscription</title>
  
  <!-- Bootstrap !-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900|Material+Icons'>
<!-- Fin Bootstrap !-->

  <link rel="stylesheet" href="signin_css/css/style.css">

<!-- formulaire de rénitialisation du Mdp -->
<div class="form">
  <div class="form-toggle"></div>
  <div class="form-panel one">
    <div class="form-header">
      <h1>Renitialiser le mot de passe</h1>
    </div>
    <div class="form-content">
      <form>

<!-- Saisie Nom !-->
        <div class="form-group">
          <label for="nom">Nom</label>
          <input type="text" id="nom" name="nom" required="required"/>
        </div>

<!-- Saisie Prénom !-->
        <div class="form-group">
          <label for="prenom">Prénom</label>
          <input type="text" id="prenom" name="prenom" required="required"/>
        </div>

<!-- Saisie @ mail !-->
        <div class="form-group">
          <label for="username">Adresse e-mail</label>
          <input type="text" id="username" name="username" required="required"/>
        </div>


        
 <!-- Confirmation de l'inscription !-->       
        <div class="form-group">
            <button type="submit"> <a  href="index.php"><font color="black">Rénitialiser.</font></a></button>
        </div>
      </form>
    </div>
  </div>

</body>
</html>
  

