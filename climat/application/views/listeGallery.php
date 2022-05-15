<!DOCTYPE html>
<!--
Template Name: Yammoe
Author: <a href="https://www.os-templates.com/">OS Templates</a>
Author URI: https://www.os-templates.com/
Copyright: OS-Templates.com
Licence: Free to use under our free template licence terms
Licence URI: https://www.os-templates.com/template-terms
-->
<html lang="">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->
<head>
<title> Gallery</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="<?php echo base_url("assets/layout/styles/layout.css") ?>" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Top Background Image Wrapper -->
<div class="bgded overlay" style="background-image:url('<?php echo base_url("assets/images/demo/backgrounds/planeteB.jpg") ?>')"> 
  <!-- ################################################################################################ -->
  <div class="wrapper row0">
    <div id="topbar" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <p class="fl_left nospace"><i class="fas fa-phone"></i> Madagascar</p>
      <p class="fl_right nospace"><a class="btn" href="<?php echo base_url() ?>">Deconnexion</a></p>
      <!-- ################################################################################################ -->
    </div>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper row1">
    <header id="header" class="hoc clear">
      <div id="logo" class="fl_left"> 
        <!-- ################################################################################################ -->
        <h1>Rechauffement Climatique</h1>
        <!-- ################################################################################################ -->
      </div>
    </header>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div id="breadcrumb" class="hoc clear"> 
    <!-- ################################################################################################ -->
   <p>images de rechauffement climatique</p>
 
    <!-- ################################################################################################ -->
  </div>
  <!-- ################################################################################################ -->
</div>
<!-- End Top Background Image Wrapper -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="content"> 
      <!-- ################################################################################################ -->
      <div id="gallery">
      <p><a href="<?php echo base_url()?>">Accueil</a></p>
        <figure>
        <h5>  <header class="heading">Images en relation avec le rechauffement climatique</header> </h5>
        <p align="center"><a href="<?php echo base_url("GalleryController/insert")?>"> ajouter :<img src="https://img.icons8.com/nolan/96/add.png"/></a></p>
          <ul class="nospace clear">
            <?php if(!empty($listeAllImage)) 
            {
              $counter=0;
              foreach($listeAllImage as $images)
              { 
               
                if($counter==0)
                {    
             ?>
            <li class="one_quarter first"><a href="<?php echo base_url("assets/images/demo/gallery/".$images['image']) ?>"><img src="<?php echo base_url("assets/images/demo/gallery/".$images['image']) ?>" alt="<?php $images['image'] ?>"></a><?php echo $images['description'] ?>
        <p><a href="<?php echo base_url("GalleryController/deleteGallery/".$images['id']) ?>"><img src="https://img.icons8.com/color/48/000000/delete-forever.png"/></a></p></li>
           
           <?php
             }
             else {
              
            ?>
            <li class="one_quarter"><a href="<?php echo base_url("assets/images/demo/gallery/".$images['image']) ?>"><img src="<?php echo base_url("assets/images/demo/gallery/".$images['image']) ?>" alt="<?php $images['image'] ?>"></a><?php echo $images['description'] ?>
            <p><a href="<?php echo base_url("GalleryController/deleteGallery/".$images['id']) ?>"><img src="https://img.icons8.com/color/48/000000/delete-forever.png"/></a</p></li>
        
            <?php
               }
               $counter++;
               if($counter==4) $counter=0;
             }
            } 
          ?>
          </ul>
        </figure>
      </div>
      <?php if(!empty($succes))
      {
          ?>
            <div class="alert alert-dark" role="alert">
             Le post a ete supprime convenablement
            </div>
          <?php
      }
          ?>
      <!-- ################################################################################################ -->
      <!-- ################################################################################################ -->
      <!-- ################################################################################################ -->
    </div>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Bottom Background Image Wrapper -->
<div class="bgded overlay" style="background-image:url('images/demo/backgrounds/01.png');"> 
  <!-- ################################################################################################ -->
  <div class="wrapper row4">
    <footer id="footer" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <div class="group btmspace-50">
        <div class="one_quarter first">
          <h6 class="heading">Droit d'auteur</h6>
          <p> Toute édition d’écrits, de composition musicale, de dessin, de peinture ou de toute autre production, imprimée ou gravée en entier ou en partie et toute autre production relevant des droits voisins comme le vidéogrammes et phonogrammes au mépris des lois et règlement relatifs à la propriété des auteurs, 
            aux titulaires des droits voisins est une contrefaçon et toute contrefaçon est un délit.
La contrefaçon sur le territoire Malagasy, d’ouvrages et d’objets protégés parles droits voisins publiés à Madagascar ou à l’étranger, est punie d’une amende de 100.000 FMG à 10.000.000 FMG et/ou d’un emprisonnement de six mois à cinq ans.
</p>
        </div>
        <div class="one_quarter">
          <h6 class="heading">Coordonnées</h6>
          <ul class="nospace linklist">
            <li><img src="https://img.icons8.com/fluency/48/000000/mail-statistics.png"/>marcnomena@gmail.com</li>
            <li><img src="https://img.icons8.com/color/48/000000/hot-line.png"/>tel :+261 32 52 357 79</li>
            <li><img src="https://img.icons8.com/color/48/000000/hot-line.png"/>tel: +261 34 57 178 92</li>
            <li><img src="https://img.icons8.com/color/48/000000/instagram-new--v1.png"/>marc_nomena</li>
            <li><img src="https://img.icons8.com/nolan/64/facebook.png"/>Randriamahaleo Marc Nomena</li>
          </ul>
        </div>
        <div class="one_quarter">
        <h6 class="heading">Plus d'informations </h6>
          <ul class="nospace linklist">
            <li><a href="https://youmatter.world/fr/definition/definition-rechauffement-climatique/">Autres definitions </a></li>
            <li><a href="https://climate.selectra.com/fr/comprendre/rechauffement-climatique">Autres causes et consequences </a></li>
          </ul>

        </div>
        <div class="one_quarter">
          <h6 class="heading">Sponsors</h6>
          <ul class="nospace clear latestimg">
            <li><a class="imgover" ><img src="https://img.icons8.com/nolan/64/php.png" alt="php"/></a></li>
            <li><a class="imgover" ><img src="https://img.icons8.com/color/48/000000/bootstrap.png" alt="bootstrap"/></a></li>
            <li><a class="imgover" ><img src="https://img.icons8.com/ios/50/000000/call-of-duty-mobile.png" alt="warzone"/></a></li>
           
          </ul>
        </div>
      </div>
      <!-- ################################################################################################ -->
    
      <!-- ################################################################################################ -->
    
      <!-- ################################################################################################ -->
    </footer>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper row5">
    <div id="copyright" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <p class="fl_left">Droit d'auteur &copy; 2022 - tout droits reserve - <a href="#">AlwaysData</a></p>
      <p class="fl_right">Site web fait par <a target="_blank"  title="Free Website Templates">Randriamahaleo Marc Nomena Anjaratiana</a></p>
      <!-- ################################################################################################ -->
    </div>
  </div>
  <!-- ################################################################################################ -->
</div>
<!-- End Bottom Background Image Wrapper -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="../layout/scripts/jquery.min.js"></script>
<script src="../layout/scripts/jquery.backtotop.js"></script>
<script src="../layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>