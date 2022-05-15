<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="<?php echo bootstrap_url("bootstrap.min") ?>" rel="stylesheet">

        <title>Insertion de Poste</title>    
    </head>
    <body>
        
			<h3 align="center">insertion de données </h3>

       <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Rechauffement Climatique</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo base_url("GalleryController/listeGallery") ?>">Liste des Postes <span class="sr-only"></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url("GalleryController/insert") ?>">Inserer des postes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url() ?>">Se deconnecter</a>
                </li>
                </ul>
            </div>
            </nav>

         <form enctype="multipart/form-data" method="post" action="<?php echo base_url("GalleryController/do_upload") ?>">
                <div class="form-group">
                    <label for="exampleInputEmail1">Description</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
                </div>
                <select class="form-control form-control-sm" name="typerechauffementclimat">
                    <option value="1"> activite solaire et volcanique</option>
                    <option value="2"> gaz a effet de serre</option>
                    <option value="3">aerosols et nuages</option>
                    <option value="4"> modification de la surface de la terre</option>
                </select>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Choisir une image</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
                </div>
                <button type="submit" class="btn btn-primary">Valider</button>
                <br><br>
                <div class="alert alert-danger" role="alert">
  seulement les images sous 2mo sont inserablent
</div>
        </form>
        <script src="<?php echo jquery_url() ?>"></script>
        <script src="<?php  echo bootstrap_js_url()?>"></script>
    </body>
</html>