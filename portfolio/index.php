<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Portfolio Valentin Picot-Bilbault</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/bde126bcc4.js" crossorigin="anonymous"></script>
</head>

	<body>
        <nav>
        <?php
            $data=yaml_parse_file("yaml/menu.yaml");
            echo '<p>'.$data['auteur']['prenom'].' '.$data['auteur']['nom'].'</p>';
            echo '<ul>';
            $data=yaml_parse_file("yaml/menu.yaml");
            foreach($data['menu'] AS $fichier=>$nom){
                echo ' <li><a href=#'.$fichier.'> '.$nom.' </a></li>';
            }
            echo '</ul>';
        ?>
        </nav>

        <?php
            $data=yaml_parse_file("yaml/accueil.yaml");
            echo '<h1>'.$data['Acroche'].'</h1>';
            echo '<h3>'.$data['Citation'].'</h3>';
        ?>
<!-- Page A rpopos -->
<br></br>
          <span id="apropos"></span>
          <div class="photo">
            <img class="moi"src="images/moi.jpg" alt="img de moi">
          </div>
        <div class="textepres">
          <p>Je m'appelle <strong>Valentin Picot Bilbault</strong>, je suis né à Caen dans cette belle Normandie ou j’ai vécu toute ma vie dans cette belle ville. Avant cela j’ai fait un Baccalauréat Général avec les spécialités NSI (Numérique et Science de l’informatique) et SVT. Je suis actuellement en étude supérieur en BTS SIO (Services informatiques aux organisations), dont mon objectif est de devenir développeur web ou développeur d’application.</p> 
          <div class="cv">
            <i class="fa-solid fa-download"></i>
            <a class="pdf" href="CV.pdf" download>Mon CV en pdf</a>
          </div>
        </div>
        
<!-- Page Compétences -->
        <span id="competence"></span>
        <?php
            $data=yaml_parse_file("yaml/competence.yaml");
            echo '<h1>Mes Compétences</h1>';
            foreach($data AS $domaine=>$tab){
                echo '<h2>'.$domaine.'</h2>';
                echo '<div class="Competence">';
                    foreach($tab AS $competence=>$niveau){
                        echo '<div>';
                            echo '<p>'.$competence.'</p>';
                            echo '<div class="barre">';
                                echo '<div class="skill" style="width:'.$niveau.'%">'.$niveau.'%</div>';
                            echo '</div>';
                        echo '</div>';
                    }
                echo '</div>';
            }
        ?>
<!-- Page Expérience -->
    <span id="experience"></span>
    <h1>Mes Expériences :</h1>
    <div class="container">
        <ul>
          <li>
            <span></span>
            <div>
              <div class="title">Stage de Troisième</div>
              <div class="info">Stage dans une boulangerie/pâtisserie</div>
              <div class="type"></div>
            </div>
            <div>
              <span></span>
              <div class="title">Brevet des collèges</div>
              <div class="info">Obtention du brevet des collèges avec Mention Bien</div>
              <div class="type"></div>
            </div>
            <span class="number">
              <span>2017</span>
              <span>2018</span>
            </span>
          </li>
          <li>
            <div>
              <span></span>
              <div class="title">Entré lycée </div>
              <div class="info">Entré en lycée Jeanne D'arc à caen, voie générale</div>
              <div class="type"></div>
            </div>
            <div>
              <span></span>
              <div class="title">Stage en Seconde</div>
              <div class="info">Stage avec une Manageuse de Développeur WEB</div>
              <div class="type"></div>
            </div>
            <span class="number">
              <span>2019</span>
              <span>2020</span>
            </span>
          </li>
          <li>
            <div>
              <span></span>
              <div class="title">Baccalauréat</div>
              <div class="info">Obtention Baccalauréat avec Mention Assez bien</div>
              <div class="type">Avec Spécialités NSI (Numérique et Science Informatique) et SVT (Sciences de la Vie et de la Terre) et Maths Complémentaire</div>
            </div>
            <span class="number">
              <span>2021</span>
              <span>2022</span>
            </span>
          </li>
          <li>
            <div>
              <span></span>
              <div class="title">BTS SIO</div>
              <div class="info">Entré en BTS SIO (Service Informatiques aux Organisations) à Caen </div>
              <div class="type"></div>
            </div>
            <span class="number">
              <span>2022</span>
              <span>2023</span>
            </span>
          </li>
        </ul>
      </div>
<!-- Page Contact -->
    <span id="contact"></span>
    <div class="contact">
      <h1>Formulaire de Contact :</h1>
      <form name="mon-formulaire1" action="page-envoi.html" method="get">
        <p>
            Votre prénom :<br />
            <input type="text" name="prenom" value="" />
        </p>
        <p>
            Votre nom :<br />
            <input type="text" name="nom" value="" />
        </p>
        <p>
            Votre adresse mail :<br />
            <input type="text" name="mail" value="" />      
        </p>
        <p>
            Votre message :<br />
            <textarea name="le-message" rows="6" cols="40">Votre message.</textarea>
        </p>
        <p>
            <input type="submit" value="Envoyer" />
            <input type="reset" value="Annuler" />
        </p>
      </form>
    </div>

    <div class="social">
      <button class="social-btn1">
        <a href="https://twitter.com/SnowWolf07" class="so"title="Mon compte twitter" target="blank">
          <i class="fa-brands fa-twitter"></i>
      </button>
      <button class="social-btn2">
        <a href="https://github.com/Vaalencienne" class="so"title="Mon compte github" target="blank">
          <i class="fa-brands fa-github"></i>
      </button>
    </div>

    <div class="haut">
      <a href="#" class="btn_haut" title="">Retour en haut</a>
        <i class="fa-solid fa-arrow-up"></i>
      </div>

    </body>
    <script src="script.js"></script>
</html>
