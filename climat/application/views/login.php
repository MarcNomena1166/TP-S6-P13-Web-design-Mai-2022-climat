<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="<?php echo bootstrap_url("bootstrap.min") ?>" rel="stylesheet">

        <title>Login</title>    
    </head>
    <body>
        
			<h3 align="center">Login </h3>
      <form action=<?php echo base_url("LoginController/login") ?> method="post">
        <div class="form-group">
          <label for="exampleInputEmail1">Nom d'utilisateur</label>
          <input type="texte" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="login">
          <small id="emailHelp" class="form-text text-muted">We will be uncover .</small>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Mot de passe</label>
          <input type="password" class="form-control" id="exampleInputPassword1" name="mdp">
        </div>
        <button type="submit" class="btn btn-primary">Valider</button>
      </form>
  
        <script src="<?php echo jquery_url() ?>"></script>
        <script src="<?php  echo bootstrap_js_url()?>"></script>
    </body>
</html>