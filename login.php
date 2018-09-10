<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    

    <title>Sistema de SAC</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">


  </head>

  <body>

    <div class="container">
      <div class="row">
        
        <div class="col-4 offset-4" >
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Logar</h3>
                </div>
                <div class="panel-body">
                    <form role="form" action="controller/login.php" method="POST">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="Usuário" name="usuario" type="text" autofocus="">
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Senha" name="senha" type="password" value="">
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input name="lembrar" type="checkbox" value="Remember Me">Me manter logado
                                </label>
                            </div>
                           <button type="submit" class="btn btn-success">Logar</button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
      </div>
    </div>
    </body>
</html>