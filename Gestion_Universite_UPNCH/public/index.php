<?php


require '../Dbconnect/Connexion.php';
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
        <script src="../https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>

    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="#">UPNCH1</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!">
                <i class="fas fa-bars"></i>
            </button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch"
                           />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-user fa-fw"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">

                        <li>
                            <a class="dropdown-item" href=".../index.php">Deconection</a>
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
                            <a class="nav-link" href="#">
                                <div class="sb-nav-link-icon">
                                    <i class="fas fa-tachometer-alt"></i>
                                </div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">GESTIONS DES </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false"
                               aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon">
                                    <i class="fas fa-columns"></i>
                                </div>
                                Années académiques
                                <div class="sb-sidenav-collapse-arrow">
                                    <i class="fas fa-angle-down"></i>
                                </div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="../AnneeAcademique/ouvertureAnneeAcademique.php">Ouvrir</a>

                                </nav>
                            </div>


                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#etudiant" aria-expanded="false" aria-controls="etudiant">
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



                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#professeurs" aria-expanded="false" aria-controls="etudiant">
                                <div class="sb-nav-link-icon">
                                    <i class="fas fa-columns"></i>
                                </div>
                                dossiers des Professeurs
                                <div class="sb-sidenav-collapse-arrow">
                                    <i class="fas fa-angle-down"></i>
                                </div>
                            </a>
                            <div class="collapse" id="professeurs" aria-labelledby="headingOne" data-bs-parent="#professeurs">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="../Professeur/enregistrerProfesseur.php">Enregistrer</a>
                                    <a class="nav-link" href="../Professeur/afficherProfesseur.php">Afficher</a>

                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#cours" aria-expanded="false" aria-controls="cours">
                                <div class="sb-nav-link-icon">
                                    <i class="fas fa-columns"></i>
                                </div>
                                Gestion des cours
                                <div class="sb-sidenav-collapse-arrow">
                                    <i class="fas fa-angle-down"></i>
                                </div>
                            </a>
                            <div class="collapse" id="cours" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="../Cours/enregistrerCours.php">Enregistrer</a>
                                    <a class="nav-link" href="../Cours/afficherCours.php">Afficher</a>
                                   
                                   


                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#notes" aria-expanded="false" aria-controls="notes">
                                <div class="sb-nav-link-icon">
                                    <i class="fas fa-columns"></i>
                                </div>
                                Gestion des notes
                                <div class="sb-sidenav-collapse-arrow">
                                    <i class="fas fa-angle-down"></i>
                                </div>
                            </a>
                            <div class="collapse" id="notes" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="../Notes/enregistrerNotes.php">Enregistrer</a>
                                    <a class="nav-link" href="../Notes/afficherNotes.php">Afficher</a>
                                   


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





                      
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#utilisateur" aria-expanded="false" aria-controls="utilisateur">
                                <div class="sb-nav-link-icon">
                                    <i class="fas fa-columns"></i>
                                </div>
                                Gestion des comptes utilisateur
                                <div class="sb-sidenav-collapse-arrow">
                                    <i class="fas fa-angle-down"></i>
                                </div>
                            </a>
                            <div class="collapse" id="utilisateur" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
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
                        <h1 class="mt-4"><center>Dashboard</center></h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard  </li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body"><center><h6>Nombre d'étudiants enregistrés dans le système </center></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#"><label> </label></a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                            <?php 
                                            $query =$sdPDO->query("SELECT COUNT(Code) AS count FROM etudiant");

                                            $datas= $query->fetchAll();
                                            ?>
                                        <table id="datatablesSimple">
                                <thead>
                                <tr>
                                <th>ToTal :</th>
                                </tr>
                                </thead>

                                  
                                            <?php foreach($datas as $data) : ?>
                                                <tr>
                                                   
                                                    <td><?= $data['count'] ?></td>         
                                             </tr>
                                 <?php endforeach ; ?>
                                 </tbody>

                                 </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body"><center><h6>Nombre de professeurs enregistrés dans le système</h6></center>
                                  
                                 </div>

                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#"><label> </label></a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    <?php
                                     $query =$sdPDO->query("SELECT COUNT(Code) AS count FROM professeur");

                                     $datas= $query->fetchAll();
                                    
                                    ?>
                                   
                                    <table id="datatablesSimple">
                                <thead>
                                <tr>
                                <th>ToTal :</th>
                                </tr>
                                </thead>

                                  
                                            <?php foreach($datas as $data) : ?>
                                                <tr>
                                                   
                                                    <td><?= $data['count'] ?></td>         
                                             </tr>
                                 <?php endforeach ; ?>
                                 </tbody>

                                 </table>
                                 </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body"><center><h6>Nombre d'utilisateurs enregistrés dans le système</h6></center></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#"><label> </label></a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                        <?php
                                        
                                            $query =$sdPDO->query("SELECT COUNT(IdUtilisateur) AS count FROM utilisateur");

                                            $datas= $query->fetchAll();
                                        
                                        ?>
                                        <table id="datatablesSimple">
                                <thead>
                                <tr>
                                <th>ToTal :</th>
                                </tr>
                                </thead>

                                  
                                            <?php foreach($datas as $data) : ?>
                                                <tr>
                                                   
                                                    <td><?= $data['count'] ?></td>         
                                             </tr>
                                 <?php endforeach ; ?>
                                 </tbody>

                                 </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body"><center><h6>Nombre de cours enregistrés dans le système</h6></center></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#"><label> </label></a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                        <?php
                                            
                                            $query =$sdPDO->query("SELECT COUNT(CodeCours) AS count FROM cours");

                                            $datas= $query->fetchAll();
                                        ?>
                                        <table id="datatablesSimple">
                                <thead>
                                <tr>
                                <th>ToTal :</th>
                                </tr>
                                </thead>

                                  
                                            <?php foreach($datas as $data) : ?>
                                                <tr>
                                                   
                                                    <td><?= $data['count'] ?></td>         
                                             </tr>
                                 <?php endforeach ; ?>
                                 </tbody>

                                 </table>
                                    </div>
                                    
                                </div>
                               
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area me-1"></i>
                                      
                                    </div>
                                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar me-1"></i>
                                       
                                    </div>
                                    <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                <center><h3> Le monde des  intellectuels</h3></center>
                            </div>
                           
                                <div class="form-floating mb-3">
                                    <p> ====> </P>
                                    <img src ="../Photo/student.jpg"  width="1275" Height = "600"  alt="" > 
                                    

                                </div>

                                
                                <div class="form-floating mb-3">
                                  <!----  <img src ="Photos/uni4.jpg"  width="1075" Height = "300"  alt="" >  -->

                                </div>
                            
                        </div>
                        
                    </div>


            </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
            <script src="js/scripts.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
            <script src="js/datatables-simple-demo.js"></script>
    </body>

</html>
