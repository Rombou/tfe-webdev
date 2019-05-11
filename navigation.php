<span class="d-none"><?=session_start();?></span>
   <style type="text/css">
    a:hover {color: #222; font-weight: normal;}
</style>    
<div class="d-none d-lg-block">
    <nav class="nav-link">
            <ul class="nav" role="navigation">
                <li class="col-sm-12 mb-2"><a href="index.php">Accueil</a></li>
                <li class="col-sm-12 mb-2"><a href="produit.php">Produits</a></li>
                <li class="col-sm-12 mb-2"><a href="condition_general.php">Conditions générales</a></li>
                <li class="col-sm-12 mb-2"><a href="contact.php">Contact</a></li>
                <li class="col-sm-12 mb-4"><a href="page/connexion_enregistrement.php">S'inscrire</a></li>
                <li class="col-sm-12 pl-5"><a href="page/panier.php">Panier 
                <span class="text-center ml-4 rounded-circle border bg-light p-1 px-2"><?php
                include 'page/nombrepanier.php';?></span></a> </li>
            </ul>
    </nav>
</div>
<div class="btn-group d-none d-lg-none d-sm-block">
    <div class="container">
       <div class="col-xs-12 my-2">
            <button class="btn row btn-light" type="button" id="menu" data-toggle="dropdown" style="cursor: pointer">
                <img src="assets/image/menu.png" width="20">
            </button>
            <div class="dropdown-menu" aria-labelledby="menu" role="navigation">
                <ul class="nav">
                    <li class="col-sm-12 mb-2"><a href="index.php">Accueil</a></li>
                    <li class="col-sm-12 mb-2"><a href="produit.php">Produits</a></li>
                    <li class="col-sm-12 mb-2"><a href="condition_general.php">Conditions générales</a></li>
                    <li class="col-sm-12 mb-2"><a href="contact.php">Contact</a></li>
                    <li class="col-sm-12 mb-4"><a href="page/connexion_enregistrement.php">S'inscrire</a></li>
                </ul>
            </div>
        </div>
        <div class="col-sm-12 row">
            <button class="btn row btn-light" onclick="location.href='page/panier.php'" style="cursor: pointer"><img src="assets/image/panier.png" width="20"><span class="text-center position-absolute rounded-circle bg-light border border-secondary ml-4 p1 px-2" ><?php
            include 'page/nombrepanier.php';?></span></button>
        </div>
    </div>
</div>
<div class="btn-group d-sm-none d-xs-block row">
    <div class="container">
       <div class="col-xs-12 my-2">
            <button class="btn btn-light" type="button" id="menu" data-toggle="dropdown" style="cursor: pointer">
                <img src="assets/image/menu.png" width="20">
            </button>
            <div class="dropdown-menu" aria-labelledby="menu" role="navigation">
                <ul class="nav">
                    <li class="col-sm-12 mb-2"><a href="index.php">Accueil</a></li>
                    <li class="col-sm-12 mb-2"><a href="produit.php">Produits</a></li>
                    <li class="col-sm-12 mb-2"><a href="condition_general.php">Conditions générales</a></li>
                    <li class="col-sm-12 mb-2"><a href="contact.php">Contact</a></li>
                    <li class="col-sm-12 mb-4"><a href="page/connexion_enregistrement.php">S'inscrire</a></li>
                </ul>
            </div>
           <button class="btn btn-light" onclick="location.href='page/panier.php'" style="cursor: pointer"><img src="assets/image/panier.png" width="20"><span class="text-center position-absolute rounded-circle bg-light border border-secondary p1 px-2" ><?php
            include 'page/nombrepanier.php';?></span>
           </button>
        </div>
    </div>
</div>  