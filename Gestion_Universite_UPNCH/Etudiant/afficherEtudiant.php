
<?php
require '../Dbconnect/Connexion.php';
 
 $query =$sdPDO->query("SELECT* FROM etudiant");

 $datas= $query->fetchAll();
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
                                <a class="nav-link" href="afficherEtudiant.php">Afficher</a>

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
                                <a class="nav-link" href="../Palmares/releveeNote.php">relev??s de notes</a>
                               

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
                            <h4> Liste des etudiants</h4>
                        </div>
                        <div class="card-body">
                            <!-- form for save a new student  -->
                            <div class="container-fluid">



                                <!-- Page Heading -->
                   


                


                    <div class="container-fluid px-4">

                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-table me-1"></i>
                                       
                                    </div>
                                    <button  onclick="window.print()" class="btn btn-primary">Imprimer</button>
                                    <div class="card-body">
                                        <table id="datatablesSimple">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Nom</th>
                                                    <th>Pre</th>
                                                    <th>Sexe</th>
                                                    <th>Adr</th>
                                                    <th>L.nai</th>
                                                    <th>D.nai</th>
                                                    <th>T??l </th>
                                                    <th>Email</th>
                                                    <th>Fili??re</th>
                                                    <th>Niveau</th>
                                                    <th>NI/CI</th>
                                                    <th>P.r??f</th>
                                                    <th>Tel p.r??</th>
                                                    <th>An-Acad</th>
                                                    <th>Etat</th>
                                                    <th>Memo</th>
                                                    <th> Photo</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                    <tbody>
                                    <?php foreach($datas as $data) : ?>
                                            <tr>
                                               
                                                <td><?= $data['Code'] ?></td>
                                                <td><?= $data['Nom'] ?></td>
                                                <td><?= $data['Prenom'] ?></td>
                                                <td><?= $data['Sexe'] ?></td>
                                                <td><?= $data['Adresse'] ?></td>
                                                <td><?= $data['LieuNaissance'] ?></td>
                                                <td><?= $data['DateNaissance'] ?></td>
                                                <td><?= $data['Telephone'] ?></td>
                                                <td><?= $data['Email'] ?></td>
                                                <td><?= $data['Filiere'] ?></td>
                                                <td><?= $data['Niveau'] ?></td>
                                                <td><?= $data['NIFCIN'] ?></td>
                                                <td><?= $data['PersonneReference'] ?></td>
                                                <td><?= $data['telpersonneref'] ?></td>
                                                <td><?= $data['AnneeAcademique'] ?></td>
                                                <td><?= $data['Etat'] ?></td>
                                                <td><?= $data['Memo'] ?></td>
                                                <td><?= $data['photo'] ?></td>
                                               

                                                <td>
                                                <a href="update.php?Code=<?= $data['Code']?>">modifier</a>
                                                <a href="delete.php?Code=<?=$data['Code'] ?>">supprimer</a>
                                                </td>
                                              
                                            </tr>
                                            <?php endforeach ; ?>
                                </tbody>

                                        </table>
                                    </div>
                                </div>
                                </div>




                                

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

                        <script>
                        $('.btn').click(function(){
                           var impre=document.getElementById('datatablesSimple');
                           var win=window.open("","","widh=1500,height=700");
                           win.document.write(impre.outerHTML);
                           win.document.close();
                           win.focus();
                           win.print();
                           win.close();
                        })
                    </script>

</body>

</html>
                   
                <!-- /.container-fluid -->
