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
                            Années académiques
                            <div class="sb-sidenav-collapse-arrow">
                                <i class="fas fa-angle-down"></i>
                            </div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                            data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="../AnneeAcademique/ouvertureAnneeAcademique.php-">Ouvrir</a>

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
                                <a class="nav-link" href="../Professeur/afficherProfesseur.php">Afficher</a>

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
                                <a class="nav-link" href="../Notes/afficherNotes.php">Afficher</a>


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
                            <h4> Enregistrer un cour</h4>
                        </div>
                        <div class="card-body">
                            <!-- form for save a new student  -->
                            <div class="container-fluid">



                                <form action="TraitementCours.php" method="POST">
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label for="nom" class="col-sm-2 col-form-label">Nom cour</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="NomCours" id="nom"
                                                    required="required">
                                            </div>
                                        </div>




                                        <div class="col-md-6">
                                            <label for="Filliere" class="col-sm-2 col-form-label">Filiere</label>
                                            <div class="col-sm-10">

                                            <select name="Filliere" size=1>
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

                                        <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label for="Sessione" class="col-sm-2 col-form-label">Session</label>
                                            <div class="col-sm-10">
                                                <select name="Sessione" size=1>

                                                    <option>Session I</option>
                                                    <option>Session II</option>
                                                    
                                                    

                                                </select>
                                            </div>
                                        </div>


                                        
                                        <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label for="Coefficient" class="col-sm-2 col-form-label">Coefficient</label>
                                            <div class="col-sm-10">
                                                <select name="Coefficient" size=1>

                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    
                                                  

                                                </select>
                                            </div>
                                        </div>


                                        <div class="col-md-6">
                                            <label for="ProfTitulaire" class="col-sm-2 col-form-label">Professeur titulaire</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="ProfTitulaire" id="ProfTitulaire"
                                                    required="required">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label for="ProfSuppleant" class="col-sm-2 col-form-label">Professeur supleant</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="ProfSuppleant"
                                                    id="ProfSuppleant" required="required">
                                            </div>
                                        </div>

                                       
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                            <label for="Jours" class="col-sm-2 col-form-label">Jours</label>
                                            <div class="col-sm-10">
                                            <select name="Jours" size=1>

                                                <option>Lundi</option>
                                                <option>Mardi</option>
                                                <option>Mercredi</option>
                                                <option>Jeudi</option>
                                                <option>Vendredi</option>
                                                <option>Samedi</option>
                                                <option>Dimanche</option>
                                                

                                            
                                             </div>


                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label for="HeureDebut" class="col-sm-2 col-form-label">heure Debut</label>
                                            <div class="col-sm-10">
                                                <input type="time" class="form-control" name="HeureDebut"
                                                    id="HeureDebut" required="required">
                                            </div>
                                        </div>

                                        
                                        <div class="col-md-6">
                                            <label for="HeureFin" class="col-sm-2 col-form-label">heure Fin</label>
                                            <div class="col-sm-10">
                                                <input type="time" class="form-control" name="HeureFin"
                                                    id="HeureFin" required="required">
                                            </div>
                                        </div>

                                        
                                         <div class="col-md-6">
                                            <label for="Etat" class="col-sm-2 col-form-label">Etat</label>
                                            <div class="col-sm-10">
                                                <select name="Etat" size=1>

                                                    <option>Dispense</option>
                                                    <option>Non Dispense</option>
                                                    
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    

                                    <input class="btn btn-primary" type="submit" name="optionCours" value="Enregistrer" />

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