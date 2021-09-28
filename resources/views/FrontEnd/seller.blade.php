<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Document</title>
    <style>
        #header{
            background-color: blue;
        }
    </style>
</head>
<body class="">

    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-primary">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                    <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                        <span class="fs-5 d-none d-sm-inline">Menu</span>
                    </a>
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                        <li class="nav-item">
                            <a href="#" class="nav-link align-middle px-0 text-white">
                                <i class="fa fa-line-chart" aria-hidden="true"></i> <span class="ms-1 d-none d-sm-inline">Statistiques</span>
                            </a>
                        </li>
                    
                        <li>
                            <a href="#" class="text-white nav-link px-0 align-middle">
                                <i class="fa fa-user-plus" aria-hidden="true"></i>
                             <span class="ms-1 d-none d-sm-inline">Employés</span></a>
                        </li>
                     
                        <li>
                            <a href="#" class=" text-white nav-link px-0 align-middle">
                                <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Customers</span> </a>
                        </li>
                        <li>
                            <a href="#" class=" text-white nav-link px-0 align-middle">
                                <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Customers</span> </a>
                        </li>
                        <li>
                            <a href="#" class=" text-white nav-link px-0 align-middle">
                                <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Customers</span> </a>
                        </li>
                        <li>
                            <a href="#" class=" text-white nav-link px-0 align-middle">
                                <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Customers</span> </a>
                        </li>
                        <li>
                            <a href="#" class=" text-white nav-link px-0 align-middle">
                                <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Customers</span> </a>
                        </li>
                        <li>
                            <a href="#" class=" text-white nav-link px-0 align-middle">
                                <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Customers</span> </a>
                        </li>
                        <li>
                            <a href="#" class=" text-white nav-link px-0 align-middle">
                                <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Customers</span> </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col">
            <section class="">  
              <div class="row" style="height:80px;">
               <div class="d-flex flex-row-reverse bd-highlight">
                <div class="p-2 bd-highlight" style="z-index: 99">
                   <ul class="list-group">
                    <li class="list-group-item border-0">
                           <ul class="list-group"  style="width: 230px">
                            <li class="list-group-item border-0">
                                <div class="" style="border: 3px solid gray; border-radius: 25px; width:45px">
                                    <img src="{{url('PHOTO/profile.png')}}" style="width: 40px;padding :5px"/>
                                </div>
                            </li>
                            <li class="list-group-item border-top">
                                    <strong>Abdelhamid Taouili (Client)</strong>
                                    <label>clent@gmal.com</label>  
                            </li>
                                <li class="list-group-item">
                                    <a href="account.php"><i class="fa fa-user"></i> Mon profile</a>
                                </li>
                                <li class="list-group-item">
                                    <a href="account.php"><i class="fa fa-lock"></i> Changer mot de passe</a>
                                </li>
                                <li class="list-group-item">
                                    <a href="general.php"><i class="fa fa-brush"></i> Réglage affichage</a>
                                </li>
                                <li class="list-group-item">
                                    <a href="disconnect.php"><i class="fa fa-power-off"></i> Déconnexion</a>
                                </li>
                            </ul>                        
                       
                    </li>
                   </ul>
                </div>
               </div>
            </div>
            </section>

                <section>
                        <div class="row border-3 border-top border-bottom  bg-white">
                          <div class="col col-2 bg-light" href="#"><a class="nav-link link-secondary active" href="#"><h5>Ramassage</h5> </a></div>
                          <div class="col col-2" href="#"><a class="nav-link link-secondary"href="#"><h5>Liste Colis</h5></a></div>
                          <div class="col col-2" href="#"><a class="nav-link link-secondary"href="#"><h5>Colis à traiter</h5></a></div>
                      </div>
                </section>

                <section class="#">
                  
                  <div class="row">
                     <nav class="navbar navbar-light bg-light">
                       <div class="container-fluid">
                          <div>Afficher <span>10</span> éléments</div>
                   <form class="d-flex">
                        <div>Rechercher : </div>
                   <div>
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  </div>
                  </form>
                  </div>
                      </nav>
                 </div>
    

<!--Third parties--->
     <div class="row">
        <table class="table">
            <thead>
              <tr>
                <th scope="col"><i class="fa fa-sort" aria-hidden="true"></i> Code</th>
                <th scope="col"><i class="fa fa-sort" aria-hidden="true"></i> Destinataire</th>
                <th scope="col"><i class="fa fa-sort" aria-hidden="true"></i> Details</th>
                <th scope="col"><i class="fa fa-sort" aria-hidden="true"></i> Etat</th>
                <th scope="col"><i class="fa fa-sort" aria-hidden="true"></i>Remarques<i class="fa fa-sort" aria-hidden="true"></i></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>@mdo</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                <td>@fat</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td colspan="2">Larry the Bird</td>
                <td>@twitter</td>
                <td>@twitter</td>
              </tr>
            </tbody>
          </table>
     </div>
    </div>
                 </section>

            </div>
        </div>
    </div>
 
</body>
</html>