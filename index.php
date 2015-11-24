<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Administration ISEN - Connexion</title>

    <!-- Bootstrap core CSS -->
    <link href="./lib/bootstrap-3.3.5-dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">

      <form class="form-signin" action="connexion.php" method="post">
        <h2 class="form-signin-heading">Connexion</h2>
        <label for="inputId" class="sr-only">Identifiant</label>
        <input type="text" id="inputId" name="inputId" class="form-control" placeholder="Identifiant" required autofocus>
        <label for="inputMdp" class="sr-only">Mot de passe</label>
        <input type="password" id="inputMdp" name="inputMdp" class="form-control" placeholder="Mot de passe" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Se souvenir de moi
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Connexion</button>
      </form>

    </div> <!-- /container -->
  </body>
</html>
