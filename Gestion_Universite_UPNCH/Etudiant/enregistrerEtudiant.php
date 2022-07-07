<?php
  require '../Dbconnect/Connexion.php';
  $query =$sdPDO->query("SELECT* FROM anneacademique ORDER BY AnneeDebut");
  $query->execute();
  $resultat = $query->fetchAll();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>UPNCH</title>
    <link href="../https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="../css/styles.css" rel="stylesheet" />
    <script src="../https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"
        crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="../public/index.php">UPNCH</a>
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
                                <a class="nav-link" href="../Etudiant/enregistrerEtudiant.php">Enregistrer</a>
                                <a class="nav-link" href="../Etudiant/afficherEtudiant.php">Afficher</a>

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
                                <a class="nav-link" href="../Professeur/afficherProfesseur.php">Enregistrer</a>
                              

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
                                <a class="nav-link" href="../Cours/afficherCours.php">Afficher</a>
                               

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
                                <a class="nav-link" href="../Notes/afficherNotes.php">Enregistrer</a>
                              


                            </nav>
                        </div>
                   
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#cours"
                            aria-expanded="false" aria-controls="cours">
                            <div class="sb-nav-link-icon">
                                <i class="fas fa-columns"></i>
                            </div>
                           Les resultats
                            <div class="sb-sidenav-collapse-arrow">
                                <i class="fas fa-angle-down"></i>
                            </div>
                        </a>
                        <div class="collapse" id="cours" aria-labelledby="headingOne"
                            data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                
                                <a class="nav-link" href="../Palmares/palmares.php">Palmares</a>
                                <a class="nav-link" href="../Palmares/bulletin.php">Bulletin</a>
                                <a class="nav-link" href="../Palmares/releveeNote.php">relevés de notes</a>
                               

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
                                <a class="nav-link" href="../Utilisateur/afficherUtilisateur.php">Enregistrer</a>
                              

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
                            <h4> Enregistrer un Etudiant</h4>
                        </div>
                        <div class="card-body">
                            <!-- form for save a new student  -->
                            <div class="container-fluid">



                                <form action="TraitementEtudiant.php" method="post">
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label for="nom" class="col-sm-2 col-form-label">Nom</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="Nom" id="Nom"
                                                    required="required">
                                            </div>
                                        </div>




                                        <div class="col-md-6">
                                            <label for="prenom" class="col-sm-2 col-form-label">Prenom</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="Prenom" id="Prenom"
                                                    required="required">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label for="sexe" class="col-sm-2 col-form-label">Sexe</label>
                                            <div class="col-sm-10">
                                                <select name="Sexe" size=1>

                                                    <option value="Masculin">M</option>
                                                    <option value="Feminin">F</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="adresse" class="col-sm-2 col-form-label">Adresse</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="Adresse" id="adresse"
                                                    required="required">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label for="lieudenaisance" class="col-sm-2 col-form-label">Lieu denaissance</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="LieuNaissance"
                                                    id="lieudenaisance" required="required">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="datenaissance" class="col-sm-2 col-form-label">Date de naissance</label>
                                            <div class="col-sm-10">
                                                <input type="date" class="form-control" name="DateNaissance"
                                                    id="datenaissance" min="1990-11-12" max="2006-11-12">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label for="telephone" class="col-sm-2 col-form-label">Telephone</label>
                                            <div class="col-sm-10">
                                                <input type="tel" class="form-control" name="Telephone"
                                                    id="Telephone" required="required">
                                            </div>
                                        </div>

                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label for="email" class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control" name="Email" id="email"
                                                    required="required">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="filliere" class="col-sm-2 col-form-label">Filiere</label>
                                            <div class="col-sm-10">
                                                <select name="Filiere" size=1>
                                                    <option> Informatique</option>
                                                    <option> Genie</option>
                                                    <option> Medecine</option>
                                                    <option> Agronomie</option>
                                                    <option> Beaux arts</option>
                                                    <option> Amenagement</option>

                                                </select>



                                            </div>
                                        </div>
                                    </div>


                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label for="Niveau" class="col-sm-2 col-form-label">Niveau</label>
                                            <div class="col-sm-10">
                                                <select name="Niveau" size=1>
                                                    <option>EUF</option>
                                                    <option>L1</option>
                                                    <option>L2</option>
                                                    <option>L3</option>
                                                    <option>L4</option>
                                                    <option>L5</option>
                                                    <option>L6</option>
                                                    <option>L7</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="nifcin" class="col-sm-2 col-form-label">NIF/CIN</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control" name="NIFCIN" id="nifcin"
                                                    required="required">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label for="personnereference" class="col-sm-2 col-form-label">Personne  Reference    </label>
                                            
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="PersonneReference"
                                                    id="personnereference" required="required">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="telpersonneref" class="col-sm-2 col-form-label">Telephone personne de reference.</label>
                                            
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="telpersonneref"
                                                    id="telpersonneref" required="required">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label for="AnneeAcademique"
                                                class="col-sm-2 col-form-label">AnneeAcademique </label>
                                   <div class="col-sm-10">
                                                <select name="AnneeAcademique" size=1>
                                                 
                                                    <?php 
                                                      foreach($resultat as $output){  ?>
                                                        <option ><?php echo $output['AnneeAcademique']; ?> </option>
                                                    
                                                    <?php }?>
                                                  
                                                   
                                                </select>
                                            </div>
                                        </div>
                              
                                        <div class="col-md-6">
                                            <label for="etat" class="col-sm-2 col-form-label">Etat</label>
                                            <div class="col-sm-10">
                                                <select name="Etat" size=1>

                                                    <option>Disponible</option>
                                                    <option>non Disponible</option>
                                                 
                                               
                                                </select>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row mb-3">
                                        <label for="demo" class="col-sm-2 col-form-label">Memo</label>
                                        <div class="col-sm-10">
                                            <textarea type="text" class="form-control" name="Memo" id="demo" >Messages</textarea>
                                        </div>
                                    </div>
                         
                                    <div class="col-md-6">
                                            <label for="photo" class="col-sm-2 col-form-label">Photo</label>
                                            <div class="col-sm-10">
                                                <input type="file" class="file-upload-input" name="photo" id="photo"
                                                    onchange="readURL(this)" accept="Image/">
                                            </div>
                                        </div>
                                    </div>
                             


                                    <input class="btn btn-primary" type="submit" name="optionEtudiant" value="Enregistrer" />

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