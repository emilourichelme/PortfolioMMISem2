<?php
require('../modele/connexion.php');
require('../modele/connection.php');

?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8" >
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Portfolio</title>
  <link href="styles.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body>
  <header>
    <div class="pres-container">
      <div class="prestext">
        <h1>
        <section id="texte">
          <?php
        require('../controleur/controleur.php');
        get_prenom();
        echo $data['prenom'];
        ?>
         <?php
        require('../controleur/controleur.php');
        get_nom();
        echo $data['nom'];
        ?>
        </h1>
        <h3 class="underline--magical">
        <?php
        require('../controleur/controleur.php');
        get_statut();
        echo $data['statut'];
        ?>
        <br>
        </h3>
      </div>
      <div class="navbar-container">
        <div class="presimage">
          <?php
      require('../controleur/controleur.php');
      get_image();
      echo"<img src =".$data['photo']." />";
        ?>
        </div>
      </div>
      <nav>
        <ul>
          <li><a href="">Accueil</a></li>
          <li><a href="#texte">A propos de moi</a></li>
          <li><a href="#mes-travaux">Mes travaux</a></li>
          <li><a href="#contact">Contact</a></li>
          <li><a href="login.php">Connexion</a></li>
        </ul>
      </nav>
    </div>
  </header>
  <div class="centrer">
    <?php
      require('../controleur/controleur.php');
      get_descrip(1);
      echo $data['descrip'];
      ?>
      </div>

  <div class="container">
    <div class="card-container">
      <div class="card">
        <h2>Ma scolarité :</h2>
        <ul>
        <?php
      require('../controleur/controleur.php');
      $data = get_texte();
      
      ?>

          <?php foreach ($data as $scolarite) : ?>
          <li>
            <p>
              <?php echo $scolarite['texte']; ?> : 
              <p><?php echo $scolarite['lieux']; ?></p>
              <p><?php echo $scolarite['date']; ?></p>
            </p>
          </li>
          <?php endforeach; ?>
        </ul>
      </div>
      <div class="card">
        <h2>Mes experiences :</h2>
        <ul>
        <?php $data = get_experience() 
        ?>
          <?php foreach ($data as $experience) : ?>
            
              <li>
            <p>
            <h3 style="padding: 100"><?php echo $experience['titre']; ?>: </h3>
            <p><?php echo $experience['texte'];?></p>
            <p><?php echo $experience['date_debut'];?> - <?php echo $experience['date_fin']; ?></p>
            <p><?php echo $experience['lieux']; ?></p>
          </p>
          </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </div>
  <section id="formulaire">
    <div class="container" style="padding: 0";>
          </div>
        </div>
      <div class="Mstrvx">
    <h2 class="underline--magical">Mes travaux:</h2 class="underline--magical">
      </div>
    <ul>
          </div>
          <section>
    <div class="container" style="padding: 0">
    <section id="mes-travaux">
      <div class="mini-card">
        <h2>Contenu Multimédia</h2>
      </div>
    </div>
    <div class="container">
    <?php $data = get_travaux() ?>
          <?php foreach ($data as $travaux) : ?>
            
              <li>
          </li>
          <div>
          <iframe id="aboutUsVideo" width="400" height="200" src="<?= $travaux['contenu'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
          <?php endforeach; ?>
      </div>
      </div>
      <div class="centrer">
      <?php
      get_descrip(3);
      echo $data['descrip'];
      ?>
      <div>
  </section>
  <section>
    <div class="container" style="padding: 0">
      <div class="mini-card">
        <h2>Ecriture</h2>
      </div></div>
      <div class="container"  >
      <?php $data = get_ecriture() ?>
          <?php foreach ($data as $ecriture) : ?>
            <p>
            <iframe src="<?= $ecriture['lien'] ?>" width="400" height="450" ="middle"></iframe></h3>
          </p>
          <?php endforeach; ?>
          </div>
      </div>
      <div class="centrer h2">
      <?php
      require('../controleur/controleur.php');
      get_descrip(4);
      echo $data['descrip'];
      ?>
      </div>
      </div>
      <div class="Mstrvx">
    <h2 class="underline--magical">Mes compétences:</h2 class="underline--magical">
    </div>
    <br><br/>
    <div class="competences">
    <?php
      require('../controleur/controleur.php');
      get_competence();
      ?>
      </div>
    <ul>
  </section>
  <section id="contact" class="center-elements">
    <div class="formulaire card">
      <form action="ajouter_un_message.php" method="post">
        <h2>Pour me contacter:</h2>
        <br />
        <div class="form-control">
          <label for="nom">Votre nom :</label>
          <input type="text" name="nom" />
        </div>
        <div class="form-control">
          <label for="email">Votre email :</label>
          <input type="email" name="email" />
        </div>
        <div class="form-control">
          <label for="message">Votre message :</label>
          <textarea name="message" cols="30" rows="5"></textarea>
        </div>
        <div class="form-control">
          <input type="submit" value="Envoyer" />
        </div>
      </form>
      <div class="form-control">
        <div class="form-control">
        </div>
      </div>
    </div>
  </section>

      <div class="icons">
      <?php $data = get_photo() ?>
            <p>
            <h3 style="padding: 0">
        </div>

</body>
</html>