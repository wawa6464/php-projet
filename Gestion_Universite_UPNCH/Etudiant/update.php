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
                            <h4> Modifier  un etudiant</h4>
                        </div>
                        <div class="card-body">
                            <!-- form for save a new student  -->
                            <div class="container-fluid">



                                <form action="TraitementEtudiant.php" method="post">

                                 <?php
                                 $Code  = $_GET['Code'];
                                 $sql = "SELECT* FROM etudiant WHERE  Code=:Code";
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
                                                <input type="number" class="form-control" name="Code" id="Nom" readonly="readonly"value="<?php echo $row->Code; ?>"> 
                                                <small> <span class="text-danger"><?= isset($errors['Code'])? $errors['Code'] :'' ?></span></small>
                                                    
                                            </div>
                                        </div>


                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label for="nom" class="col-sm-2 col-form-label">Nom</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="Nom" id="Nom"value="<?php echo $row->Nom; ?>"> 
                                                <small> <span class="text-danger"><?= isset($errors['Nom'])? $errors['Nom'] :'' ?></span></small>
                                                    
                                            </div>
                                        </div>




                                        <div class="col-md-6">
                                            <label for="prenom" class="col-sm-2 col-form-label">Prenom</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="Prenom" id="Prenom"
                                               
                                                value="<?php echo $row->Prenom; ?>" />
                                                <small> <span class="text-danger"><?= isset($errors['Prenom'])? $errors['Prenom'] :'' ?></span></small>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label for="sexe" class="col-sm-2 col-form-label">Sexe</label>
                                            <div class="col-sm-10">
                                                <select name="Sexe" size=1 value="<?php echo $row->Sexe; ?>">

                                                    <option >
                                                    
                                                
                                                    M</option>


                                                    
                                                    F</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="adresse" class="col-sm-2 col-form-label">Adresse</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="Adresse" id="Adresse"
                                                
                                                value="<?php echo $row->Adresse;?>">
                                                <small> <span class="text-danger"><?= isset($errors['Adresse'])? $errors['Adresse'] :'' ?></span></small>
                                                
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label for="lieudenaisance" class="col-sm-2 col-form-label">Lieu de
                                                naissance</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="LieuNaissance"
                                                id="LieuNaissance" 
                                                value="<?php echo $row->LieuNaissance; ?>">
                                                <small> <span class="text-danger"><?= isset($errors['LieuNaissance'])? $errors['LieuNaissance'] :'' ?></span></small>
                                                
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="datenaissance" class="col-sm-2 col-form-label">Date de
                                                naissance</label>
                                            <div class="col-sm-10">
                                                <input type="date" class="form-control" name="DateNaissance"
                                                 id="DateNaissance" min="1990-11-12" max="2006-11-12"
                                                 value="<?php echo $row->DateNaissance; ?>">
                                                <small> <span class="text-danger"><?= isset($errors['DateNaissance'])? $errors['DateNaissance'] :'' ?></span></small>
                                                 
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label for="telephone" class="col-sm-2 col-form-label">Telephone</label>
                                            <div class="col-sm-10">
                                                <input type="tel" class="form-control" name="Telephone"
                                                id="Telephone" 
                                                value="<?php echo $row->Telephone;  ?>">
                                                <small> <span class="text-danger"><?= isset($errors['Telephone'])? $errors['Telephone'] :'' ?></span></small>
                                                
                                            </div>
                                        </div>

                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label for="email" class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-10">
                                                <input type="Email" class="form-control" name="Email" id="Email"
                                            
                                             value="<?php echo $row->Email; ?>">
                                                <small> <span class="text-danger"><?= isset($errors['Email'])? $errors['Email'] :'' ?></span></small>
                                             
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
                                            <label for="niveau" class="col-sm-2 col-form-label">Niveau</label>
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
                                                <input type="number" class="form-control" name="NIFCIN" id="NIFCIN"
                                                   
                                                    value="<?php echo $row->NIFCIN;  ?>">
                                                <small> <span class="text-danger"><?= isset($errors['NIFCIN'])? $errors['NIFCIN'] :'' ?></span></small>
                                                    
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label for="personnereference" class="col-sm-2 col-form-label">Pers
                                                Reference</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="PersonneReference"
                                                id="PersonneReference" 
                                                value="<?php echo $row->PersonneReference; ?>">
                                                <small> <span class="text-danger"><?= isset($errors['PersonneReference'])? $errors['PersonneReference'] :'' ?></span></small>
                                                
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="telpersonneref" class="col-sm-2 col-form-label">Tel pers de
                                                R.</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="telpersonneref"
                                                 id="telpersonneref" 
                                                 value="<?php echo $row->telpersonneref; ?>">
                                                <small> <span class="text-danger"><?= isset($errors['telpersonneref'])? $errors['telpersonneref'] :'' ?></span></small>
                                                 
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label for="anneeacademique"
                                                class="col-sm-2 col-form-label">AnneeAcademique </label>
                                            <div class="col-sm-10">
                                                <select name="AnneeAcademique" size=1>
                                                <option value="1" > 2022-2024</option>
                                                 <option value="2">  2022-2024</option>
                                                
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="etat" class="col-sm-2 col-form-label">Etat</label>
                                            <div class="col-sm-10">
                                                <select name="Etat" size=1>

                                                    <option value="1">Actif</option>
                                                    <option value="0">inactif</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row mb-3">
                                        <label for="demo" class="col-sm-2 col-form-label">Memo</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="Memo" id="Memo"
                                            value="<?php echo $row->Memo;  ?>">
                                         <small> <span class="text-danger"><?= isset($errors['Memo'])? $errors['Memo'] :'' ?></span></small>
                                            
                                           
                                        </div>
                                    </div>

                                 
                                 <div class="col-md-6">
                                            <label for="photo" class="col-sm-2 col-form-label">Photo</label>
                                            <div class="col-sm-10">
                                                <input type="file" class="file-upload-input" name="photo" id="photo"
                                                    onchange="readURL(this)" accept="Image/"   
                                                    value="<?php echo $row->photo;?>">
                                                <small> <span class="text-danger"><?= isset($errors['photo'])? $errors['photo'] :'' ?></span></small>
                                                    
                                            </div>
                                        </div>
                                    </div>


                                <?php }}?>
                                
                                    <input class="btn btn-primary" type="submit" name="optionModifier" value="Modifier" />
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