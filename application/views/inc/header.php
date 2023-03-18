<head>
    <link rel="stylesheet" href="<?php echo site_url('assets/css/bootstrap/bootstrap.css');?>">
    <link rel="stylesheet" href="<?php echo site_url('assets/css/other/style.css');?>">
</head>
<div class="container">
    <div class="row header">
        <div class="col-md-4 searchHeader">
            <form class="navbar-form navbar-left" role="search" action="/Minifb/page/membres.php" method="get">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search" name="rech">
                </div>
                <button type="submit" class="btn btn-default">Rechercher</button>
            </form>
        </div>
        <div class="col-md-2 titleHeader">
            <h1>Sys Info</h1>
        </div>
        <div class="col-md-6 linkHeader">
            <ul class="nav nav-pills">
                <li role="presentation"><a href="<?php echo site_url('accueil/index/infoSociete');?>">Information</a></li>
                <li role="presentation"><a href="<?php echo site_url('accueil/index/compteG');?>">Compte</a></li>
                <li role="presentation"><a href="<?php echo site_url('accueil/index/devise');?>">Devise</a></li>
                <li role="presentation"  style="margin-left:150px;width:fit-content;"><a href="/Minifb(boot)/page/conf.php" style="font-size:20px;" >Deconnexion</a></li>
            </ul>
        </div>
    </div>