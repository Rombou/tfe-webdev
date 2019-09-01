<span class="d-none"><?=session_start();?></span>
  
<div class="d-none d-lg-block">
    <nav class="nav-link">
            <ul class="nav" role="navigation">
                <li class="col-sm-12 mb-2"><a href="../index.php">Accueil</a></li>
                <li class="col-sm-12 mb-2"><a href="../produit.php">Produits</a></li>
                <li class="col-sm-12 mb-2"><a href="../condition_general.php">Conditions générales</a></li>
                <li class="col-sm-12 mb-2"><a href="../contact.php">Contact</a></li>
                <li class="col-sm-12 mb-4 dropdown"><a class="dropdown-toggle" href="inscription.php">Profil</a>
                    <ul class="dropdown-menu container col-sm-12">
                        <li class="col-sm-12 px-2"><a href="inscription.php">Inscription</a></li>
                        <li class="col-sm-12 px-2"><a href="modif_utilisateur.php">Nouvelle coordonnée</a></li>
                        <li class="col-sm-12 px-2"><a href="supprime_user.php">Désinscription</a></li>
                    </ul>
                </li>
                <li class="col-sm-12 pl-5"><a href="panier.php">Panier <span class="border text-center ml-4 rounded-circle bg-light p-1 px-2"><?php
                include 'nombrepanier.php';?></span></a> </li>
            </ul>
    </nav>
</div>
<div class="btn-group d-lg-none d-sm-block">
    <div class="container">
       <div class="btn-group row">
        <div>
            <button class="btn btn-light m-1" type="button" id="menu" data-toggle="dropdown" style="cursor: pointer" data-toggle="collapse" data-target="#navbar"
            aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">
               <i class="fas fa-bars"></i>
            </button>
            <div class="container">
            <div class="bg-light collapse row" id="navbar">
                <ul class="nav dropdown-menu mr-auto navbar navbar-brand px-2" role="navigation">
                    <li class="col-sm-12 py-1"><a href="../index.php">Accueil</a></li>
                    <li class="col-sm-12 py-1" ><a href="../produit.php">Produits</a></li>
                    <li class="col-sm-12 py-1" ><a href="../condition_general.php">Conditions générales</a></li>
                    <li class="col-sm-12 py-1" ><a href="../contact.php">Contact</a></li>
                    <li class="col-sm-12 py-1 last" >Profil
                    <ul class="nav navbar">
                        <li class="col-sm-12 py-1" ><a href="inscription.php">Inscription</a></li>
                        <li class="col-sm-12 py-1" ><a href="modif_utilisateur.php">Nouvelle coordonnée</a></li>
                        <li class="col-sm-12 py-1" ><a href="supprime_user.php">Désinscription</a></li>
                    </ul>
                </li>
                </ul>
            </div>
            </div>
        </div>
        <div>
            <button class="btn row btn-light" style="position : relative;" onclick="location.href='panier.php'" style="cursor: pointer"><i class="fas fa-shopping-cart"></i><span class="text-center rounded-circle bg-light border border-secondary p1 px-2 ml-2" style="position : absolute;"><?php
            include 'nombrepanier.php';?></span></button>
        </div>
           </div>
    </div>
</div> 