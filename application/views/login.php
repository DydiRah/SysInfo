<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo site_url('assets/css/bootstrap/bootstrap.css');?>">
    <link rel="stylesheet" href="<?php echo site_url('assets/css/other/style.css');?>">
    <title>Login SI</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 login">
                <h1>Login S.I</h1>
                <form action="<?php echo site_url('login/entrer');?>" method="post">
                    <p><input type="text" placeholder="Nom:" name="name"></p>
                    <p><input type="password" placeholder="Mot de passe:" name="mdp"></p>
                    <p><input type="submit" value="Entrer" class="loginSub"></p>
                </form>
                <p class="loginError"><?php echo $error;?></p>
            </div>
        </div>
    </div>
</body>
</html>