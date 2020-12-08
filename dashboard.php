<?php 
 session_start();


 //check if user is logged in or not
 if(isset($_SESSION['login'])){

//echo "Set";
//session_destroy();


 }else{
    header("Location: index.html");
    die();
 }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Patient Information</title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="./style.css"> 
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">   
            </style>
    </head>
    <body>
    <header class="header">

    <div class="ml-5 mr-5 ">
         <nav class="navbar navbar-expand-lg navbar-light   border-bottom">
            <a class="navbar-brand" href="#">MH Care</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
             </button>
   

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        
        
        
        
        
        </ul>
    <div class="form-inline my-2 my-lg-0">
      
      <a href="logout.php" class="btn btn-outline-danger my-2 my-sm-0"  >Logout</a>
</div>
  </div>
</nav>
</div>
    </header>

    <div class="container  mt-4">
         
        <div class="row">

        <div class="col col-sm-12">
        <h3 class="float-right"> Welcome : <?php echo $_SESSION['login'];  ?> </h3>
</div>
                <div class="col col-sm-12">
               
                <br/>
                    <button class="btn btn-primary btn-lg float-right" data-toggle="modal" data-target="#addModal">Add Patient</button>
                </div>

            <div class="col col-sm-12">
                <div id="msg"></div> 
           <h4>Patient Information</h4>
            <table class="table table-hover table-bordered mx-auto">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Fist Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Gender</th>
                        <th scope="col">DOB</th>
                        <th scope="col">Address</th>
                     
                         
                        <th scope="col">Phone</th>
                        <th scope="col">Email</th>
                        <th scope="col">Current Medication</th>
                        <th scope="col">Allergies</th>
                        <th scope="col">Referring Doctor</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody id="tbody">

                </tbody>
            </table>
        </div>
    </div>

    </div>


















<!--Add Modal-->
<!-- Modal -->
<div class="modal fade " id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          

            <form id="myform">

                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="firstName">First Name</label>
                            <input type="text" class="form-control" id="firstName">
                          </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="lastName">Last Name</label>
                            <input type="text" class="form-control" id="lastName">
                        </div>
                    </div>
                </div>
               



               

                  
              

                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="gender">Gender</label>
                            <select class="form-control" id="gender">
                            <option disabled>Select Gender</option>
                              <option>Male</option>
                              <option>Female</option>
                              <option>Transgender</option>
                              <option>Other</option>
                             </select>
                          </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="DOB">DOB</label>
                            <input type="date" class="form-control" id="DOB">
                         </div>
                    </div>
                </div>


                 


                 <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address">
                 </div>


                 <div class="form-group">
                    <label for="province">Province</label>
                    <input type="text" class="form-control" id="province">
                 </div>


                 <div class="row">
                     <div class="col-6">
                        <div class="form-group">
                            <label for="city">City</label>
                            <input type="text" class="form-control" id="city">
                         </div>
                     </div>
                     <div class="col-6">
                        <div class="form-group">
                            <label for="postalCode">Postal Code</label>
                            <input type="text" class="form-control" id="postalCode">
                         </div>
                    </div>
                 </div>
               
       


                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="tel" class="form-control" id="phone">
                         </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" class="form-control" id="email">
                         </div>
        
                    </div>
                </div>

              

               
                <div class="form-group">
                    <label for="medication">Current Medications</label>
                    <input type="text" class="form-control" id="medication">
                 </div>


                 <div class="form-group">
                    <label for="allergies">Allergies</label>
                    <input type="text" class="form-control" id="allergies">
                 </div>

                 <div class="form-group">
                    <label for="refDoctor">Referring Doctor</label>
                    <input type="text" class="form-control" id="refDoctor">
                 </div>

                <button type="submit" id="btnadd" data-dismiss="modal" class="btn btn-primary">Save</button>
              </form>






        </div>
       
      </div>
    </div>
  </div>

  <!-- Update Modal-->
  
 
<!-- Modal -->
<div class="modal fade  " id="updateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Update Record</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          

            <form id="myform1">

                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="firstName1">First Name</label>
                            <input type="text" class="form-control" id="firstName1">
                          </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="lastName1">Last Name</label>
                            <input type="text" class="form-control" id="lastName1">
                        </div>
                    </div>
                </div>
               



               

                  
              

                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="gender">Gender</label>
                            <select class="form-control" id="gender1">
                                <option disabled>Select Gender</option>
                              <option>Male</option>
                              <option>Female</option>
                              <option>Transgender</option>
                              <option>Other</option>
                             </select>
                          </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="DOB1">DOB</label>
                            <input type="date" class="form-control" id="DOB1">
                         </div>
                    </div>
                </div>


                 


                 <div class="form-group">
                    <label for="address1">Address</label>
                    <input type="text" class="form-control" id="address1">
                 </div>


                 <div class="form-group">
                    <label for="province1">Province</label>
                    <input type="text" class="form-control" id="province1">
                 </div>


                 <div class="row">
                     <div class="col-6">
                        <div class="form-group">
                            <label for="city1">City</label>
                            <input type="text" class="form-control" id="city1">
                         </div>
                     </div>
                     <div class="col-6">
                        <div class="form-group">
                            <label for="postalCode1">Postal Code</label>
                            <input type="text" class="form-control" id="postalCode1">
                         </div>
                    </div>
                 </div>
               
       


                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="phone1">Phone</label>
                            <input type="tel" class="form-control" id="phone1">
                         </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="email1">Email</label>
                            <input type="email" class="form-control" id="email1" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                         </div>
        
                    </div>
                </div>

              

               
                <div class="form-group">
                    <label for="medication1">Current Medications</label>
                    <input type="text" class="form-control" id="medication1">
                 </div>


                 <div class="form-group">
                    <label for="allergies1">Allergies</label>
                    <input type="text" class="form-control" id="allergies1">
                 </div>

                 <div class="form-group">
                    <label for="refDoctor1">Referring Doctor</label>
                    <input type="text" class="form-control" id="refDoctor1">
                 </div>

                <button type="submit" id="btnupdate" data-dismiss="modal" class="btn btn-primary">Update</button>
              </form>






        </div>
       
      </div>
    </div>
  </div>





        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js "></script>
        <script src="https://code.jquery.com/jquery-3.4.1.js " integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin=" anonymous "></script>

<script src="./main.js"></script>

     </body>

     </html>