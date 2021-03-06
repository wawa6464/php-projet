<?php

session_start();

require '../Dbconnect/Connexion.php';

$errors=[];
$user=null;


//pour modifier

$CodeEtud = $_GET['Code'];


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
        <a class="navbar-brand ps-3" href="../index.jsp">UPNCH</a>
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
                        <a class="dropdown-item" href="../login.jsp">Deconection</a>
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
                        <a class="nav-link" href="../index.jsp">
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
                            Ann??es acad??miques
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
                            palmar??s, Bulletin et relev??s des notes
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
                                <a class="nav-link" href="../Utilisateur/afficherUtilisateur.php">Afficher</a>

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
                            <h4> Modification professeur</h4>
                        </div>
                        <div class="card-body">
                            <!-- form for save a new student  -->
                           

                            <div class="container-fluid">



                                <form action="TraitementProfesseur.php" method="POST">
                                <?php
                                 $Code  = $_GET['Code'];
                                 $sql = "SELECT* FROM professeur WHERE  Code=:Code";
                                 $query= $sdPDO->prepare($sql);
                                 $query->bindParam(':Code',$CodeEtud,PDO::PARAM_STR);
                                 $query->execute();
                                 $resultat=$query->fetchAll(PDO::FETCH_OBJ);
                                 if($query->rowCount()>0) {
                                    $cnst = 1;
                                    foreach ($resultat as $row) {
                                        # code...
                                    
                                 ?>

                                  
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label for="Code" class="col-sm-2 col-form-label">Code</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control" name="Code" id="Code"
                                                    required="required" readonly="readonly" value="<?php echo $row->Code; ?>">
                                            </div>
                                        </div>



                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label for="Nom" class="col-sm-2 col-form-label">Nom</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="Nom" id="nom"
                                                    required="required" value="<?php echo $row->Nom; ?>">
                                            </div>
                                        </div>




                                        <div class="col-md-6">
                                            <label for="Prenom" class="col-sm-2 col-form-label">Prenom</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="Prenom" id="prenom"
                                                    required="required" value="<?php echo $row->Prenom; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label for="Sexe" class="col-sm-2 col-form-label">Sexe</label>
                                            <div class="col-sm-10">
                                                <select name="Sexe" size=1 value="<?php echo $row->Sexe; ?>">
                                                    <option>F</option>
                                                    <option>M</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="Adresse" class="col-sm-2 col-form-label">Adresse</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="Adresse" id="Adresse"
                                                    required="required" value="<?php echo $row->Adresse; ?>">
                                            </div>
                                        </div>

                                    </div>
                               

                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label for="Telephone" class="col-sm-2 col-form-label">Telephone</label>
                                            <div class="col-sm-10">
                                                <input type="tel" class="form-control" name="Telephone"
                                                    id="Telephone" required="required" value="<?php echo $row->Telephone; ?>">
                                            </div>
                                        </div>

                                        

                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label for="matrimonial" class="col-sm-2 col-form-label">Etat matrimonial</label>
                                            <div class="col-sm-10">
                                                <select name="matrimonial" size=1 value="<?php echo $row->matrimonial; ?>">
                                                    <option>Celibataire</option>
                                                    <option>Marie</option>
                                                    <option>Fiance</option>
                                                    <option>Autre</option>
                                                  
                                                </select>
                                            </div>
                                        </div>

                                       
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label for="LieuNaisance" class="col-sm-2 col-form-label">Lieu de
                                                naissance</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="LieuNaissance"
                                                    id="LieudeNaisance" required="required" value="<?php echo $row->LieuNaissance; ?>">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="DateNaissance" class="col-sm-2 col-form-label">Date de
                                                naissance</label>
                                            <div class="col-sm-10">
                                                <input type="date" class="form-control" name="DateNaissance"  value="<?php echo $row->DateNaissance; ?>"
                                                    id="DateNaissance" min="1990-11-12" max="2006-11-12">
                                            </div>
                                        </div>
                                    </div>
                                     
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label for="Niveau" class="col-sm-2 col-form-label">Niveau</label>
                                            <div class="col-sm-10">
                                                <select name="Niveau" size=1 value="<?php echo $row->Niveau; ?>">
                                                    <option>Licence</option>
                                                    <option>Metrice</option>
                                                    <option>Mastere</option>
                                                    <option>Docteur</option>
                                                </select>
                                            </div>
                                        </div>

                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label for="CoursEnsegner" class="col-sm-2 col-form-label">Cours enseignes</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="CoursEnsegner" id="CoursEnsegner"
                                                    required="required" value="<?php echo $row->CoursEnsegner; ?>">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="FilliereAffecte" class="col-sm-2 col-form-label">Filier affecte </label>
                                            <div class="col-sm-10">
                                                <select name="FilliereAffecte" size=1 value="<?php echo $row->FilliereAffecte; ?>">


                                                    <option> Informatique</option>
                                                </select>
                                                 </div>
                                        </div>
                                    </div>


                                  
                                    <div class="col-md-6">
                                            <label for="Salaire" class="col-sm-2 col-form-label">Salaire</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control" name="Salaire" id="Salaire "
                                                    required="required" value="<?php echo $row->Salaire; ?>">
                                            </div>
                                        </div>
                                    </div>

                                    
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label for="Poste" class="col-sm-2 col-form-label">Poste</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="Poste"
                                                    id="Poste" required="required" value="<?php echo $row->Poste; ?>">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label for="Email" class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control" name="Email" id="email"
                                                    required="required" value="<?php echo $row->Email; ?>">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="NIFCIN" class="col-sm-2 col-form-label">NIF/CIN</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control" name="NIFCIN" id="NIFCIN"
                                                    required="required" value="<?php echo $row->NIFCIN; ?>">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label for="Etat" class="col-sm-2 col-form-label">Etat</label>
                                            <div class="col-sm-10">
                                                <select name="Etat" size=1 value="<?php echo $row->Etat; ?>">
                                                    <option>Actif</option>
                                                    <option>inactif</option>
                                                   
                                                  
                                                </select>
                                            </div>
                                        </div>


                                    <div class="row mb-3">
                                        <label for="demo" class="col-sm-2 col-form-label">Memo</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="Memo" id="demo" value="<?php echo $row->Memo; ?>" />
                                        </div>
                                    </div>
                             <?php }} ?>
                                    <input class="btn btn-primary" type="submit" name="updateprof" value="update" />

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