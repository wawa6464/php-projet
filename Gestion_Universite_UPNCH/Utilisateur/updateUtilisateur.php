<?php

session_start();



$errors=[];
$user=null;


//pour modifier


require '../Dbconnect/Connexion.php';
$IdUtilisateur  = $_GET['IdUtilisateur'];
$sql = "SELECT* FROM utilisateur WHERE  IdUtilisateur=:IdUtilisateur";
$query= $sdPDO->prepare($sql);
$query->bindParam(':IdUtilisateur',$IdUtilisateur,PDO::PARAM_STR);
$query->execute();
$datas=$query->fetchAll();


/*
$IdUtilisateur = $_GET['IdUtilisateur'];
$query =$sdPDO->query("SELECT* FROM utilisateur WHERE  IdUtilisateur=:IdUtilisateur ");

 $datas= $query->fetchAll();

 */

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Tables - SB Admin</title>
    <link href="../https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="../css/styles.css" rel="stylesheet" />
    <script src="../https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"
        crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
   

    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="../index.html">UPNCH</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!">
            <i class="fas fa-bars"></i>
        </button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..."
                    aria-describedby="btnNavbarSearch" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="button">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <i class="fas fa-user fa-fw"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">

                    <li>
                        <a class="dropdown-item" href="../login.php">Deconection</a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Core</div>
                        <a class="nav-link" href="../index.php">
                            <div class="sb-nav-link-icon">
                                <i class="fas fa-tachometer-alt"></i>
                            </div>
                            Dashboard
                        </a>
                        <div class="sb-sidenav-menu-heading">GESTIONS DES </div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                            data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon">
                                <i class="fas fa-columns"></i>
                            </div>
                            Années académiques
                            <div class="sb-sidenav-collapse-arrow">
                                <i class="fas fa-angle-down"></i>
                            </div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                            data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="../AnneeAcademique/ouvertureAnneeAcademique.php">Ouvrir</a>

                            </nav>
                        </div>


                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#etudiant"
                            aria-expanded="false" aria-controls="etudiant">
                            <div class="sb-nav-link-icon">
                                <i class="fas fa-columns"></i>
                            </div>
                            Dossiers des Etudiants
                            <div class="sb-sidenav-collapse-arrow">
                                <i class="fas fa-angle-down"></i>
                            </div>
                        </a>
                        <div class="collapse" id="etudiant" aria-labelledby="headingOne" data-bs-parent="#etudiant">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="enregistrerEtudiant.php">Enregistrer</a>
                                <a class="nav-link" href="../servletEtudiant">Afficher</a>

                            </nav>
                        </div>



                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#professeurs"
                            aria-expanded="false" aria-controls="etudiant">
                            <div class="sb-nav-link-icon">
                                <i class="fas fa-columns"></i>
                            </div>
                            dossiers des Professeurs
                            <div class="sb-sidenav-collapse-arrow">
                                <i class="fas fa-angle-down"></i>
                            </div>
                        </a>
                        <div class="collapse" id="professeurs" aria-labelledby="headingOne"
                            data-bs-parent="#professeurs">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="../Professeur/enregistrerProfesseur.php">Enregistrer</a>
                                <a class="nav-link" href="../servletProfesseur">Afficher</a>

                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#cours"
                            aria-expanded="false" aria-controls="cours">
                            <div class="sb-nav-link-icon">
                                <i class="fas fa-columns"></i>
                            </div>
                            Gestion des cours
                            <div class="sb-sidenav-collapse-arrow">
                                <i class="fas fa-angle-down"></i>
                            </div>
                        </a>
                        <div class="collapse" id="cours" aria-labelledby="headingOne"
                            data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="../Cours/enregistrerCours.php">Enregistrer</a>
                                <a class="nav-link" href="../servletCours">Afficher</a>

                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#notes"
                            aria-expanded="false" aria-controls="notes">
                            <div class="sb-nav-link-icon">
                                <i class="fas fa-columns"></i>
                            </div>
                            Gestion des notes
                            <div class="sb-sidenav-collapse-arrow">
                                <i class="fas fa-angle-down"></i>
                            </div>
                        </a>
                        <div class="collapse" id="notes" aria-labelledby="headingOne"
                            data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="../Notes/enregistrerNotes.php">Enregistrer</a>
                                <a class="nav-link" href="../servletNotes">Afficher</a>


                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#etudiant"
                            aria-expanded="false" aria-controls="etudiant">
                            <div class="sb-nav-link-icon">
                                <i class="fas fa-columns"></i>
                            </div>
                            palmarès, Bulletin et relevés des notes
                            <div class="sb-sidenav-collapse-arrow">
                                <i class="fas fa-angle-down"></i>
                            </div>
                        </a>
                        <div class="collapse" id="palmares" aria-labelledby="headingOne"
                            data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">

                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#utilisateur"
                            aria-expanded="false" aria-controls="utilisateur">
                            <div class="sb-nav-link-icon">
                                <i class="fas fa-columns"></i>
                            </div>
                            Gestion des comptes utilisateur
                            <div class="sb-sidenav-collapse-arrow">
                                <i class="fas fa-angle-down"></i>
                            </div>
                        </a>
                        <div class="collapse" id="utilisateur" aria-labelledby="headingOne"
                            data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="../Utilisateur/enregistrerUtilisateur1.php">Enregistrer</a>
                                <a class="nav-link" href="../servletUtilisateurAff">Afficher</a>

                            </nav>
                        </div>

                    </div>
                </div>

            </nav>
        </div>

        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">

                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            <h4> Modifier  un utilisateur</h4>
                        </div>
                        <div class="card-body">
                            <!-- form for save a new student  -->
                            <div class="container-fluid">



                                <form action="Traitementutilisateur.php" method="post">

                       
                               
                                    
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label for="IdUtilisateur" class="col-sm-2 col-form-label">Id utilisateur</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control" name="IdUtilisateur" id="IdUtilisateur" readonly="readonly" value="<?php echo "$IdUtilisateur"; ?>"> 
                                                <small> <span class="text-danger"><?= isset($errors['IdUtilisateur'])? $errors['IdUtilisateur'] :'' ?></span></small>
                                                    
                                            </div>
                                        </div>


                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label for="Nom" class="col-sm-2 col-form-label">Nom</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="Nom" id="Nom" 
                                                value="<?php 
                                                    foreach($datas as $output){  ?>
                                                        <?php echo $output['Nom']; ?> 
                                                <?php }?>" />
                                                 
                                                <small> <span class="text-danger"><?= isset($errors['Nom'])? $errors['Nom'] :'' ?></span></small>
                                                    
                                            </div>
                                        </div>




                                        <div class="col-md-6">
                                            <label for="Prenom" class="col-sm-2 col-form-label">Prenom</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="Prenom" id="Prenom"
                                               
                                                value="<?php 
                                                    foreach($datas as $output){  ?>
                                                        <?php echo $output['Prenom']; ?> 
                                                <?php }?>" />
                                                <small> <span class="text-danger"><?= isset($errors['Prenom'])? $errors['Prenom'] :'' ?></span></small>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    
                             

                                        <div class="col-md-6">
                                            <label for="Poste" class="col-sm-2 col-form-label">Poste</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="Poste" id="Poste"
                                                value="<?php 
                                                    foreach($datas as $output){  ?>
                                                        <?php echo $output['Poste']; ?> 
                                                <?php }?>" />
                                                
                                                <small> <span class="text-danger"><?= isset($errors['Poste'])? $errors['Poste'] :'' ?></span></small>
                                                
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label for="Pseudo" class="col-sm-2 col-form-label">Pseudo
                                                </label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="Pseudo"
                                                id="Pseudo" 
                                                value="<?php 
                                                    foreach($datas as $output){  ?>
                                                        <?php echo $output['Pseudo']; ?> 
                                                <?php }?>" 
                                                />
                                                
                                                <small> <span class="text-danger"><?= isset($errors['Pseudo'])? $errors['Pseudo'] :'' ?></span></small>
                                                
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="MotDePasse" class="col-sm-2 col-form-label"> Mot de pasee 
                                                </label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="MotDePasse"
                                                
                                                 id="MotDePasse" 
                                                 value="<?php 
                                                    foreach($datas as $output){  ?>
                                                        <?php echo $output['Prenom']; ?> 
                                                <?php }?>"min="1990-11-12" max="2006-11-12" />
                                                 
                                                <small> <span class="text-danger"><?= isset($errors['MotDePasse'])? $errors['MotDePasse'] :'' ?></span></small>
                                                 
                                            </div>
                                        </div>
                                    </div>


                                 <div class="col-md-6">
                                            <label for="Etat" class="col-sm-2 col-form-label">Etat</label>
                                            <div class="col-sm-10">
                                                <select name="Etat" size=1
                                                value="<?php 
                                                    foreach($datas as $output){  ?>
                                                        <?php echo $output['Etat']; ?> 
                                                <?php }?>" 
                                                >
                                                    <option >Actif</option>
                                                    <option >Inactif</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label for="ModulesDacces" class="col-sm-2 col-form-label">Modules d'acces </label>
                                            <div class="col-sm-10">
                                                <select name="ModulesDacces" size=1
                                                value="<?php 
                                                    foreach($datas as $output){  ?>
                                                        <?php echo $output['ModulesDacces']; ?> 
                                                <?php }?>" 
                                                >
                                                    <option>Annee academique </option>
                                                    <option>Professeur </option>
                                                    <option> Cours</option>
                                                    <option>Notes </option>
                                                    <option> Palmares et Bulletin</option>
                                                    <option>Utilisateur </option>
                                              
                                                </select>
                                            </div>
                                        </div>

                                  



                   
                                
                                    <input class="btn btn-primary" type="submit" name="updateUtilisateur" value="update" />
                                    <button  class="btn btn-primary" type="reset" name="annuler"> Annuler</button>

                                </form>



                                <!-- end a new -->


                            </div>
                        </div>



                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
                            crossorigin="anonymous"></script>
                        <script src="../js/scripts.js"></script>
                        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest"
                            crossorigin="anonymous"></script>
                        <script src="../js/datatables-simple-demo.js"></script>

</body>
</html>