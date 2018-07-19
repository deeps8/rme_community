<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/searchbar.css">
  <link rel="stylesheet" type="text/css" href="css/navnew.css">

  <link rel="stylesheet" type="text/css" href="css/navold.css">
  <link rel="stylesheet" type="text/css" href="css/Navs.css">
  <link rel="stylesheet" type="text/css" href="css/lowerBar.css">
   <link rel="stylesheet" type="text/css" href="css/carousel.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  <script src="https://cdn.ckeditor.com/ckeditor5/10.1.0/classic/ckeditor.js"></script>

  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
        <div class="modal fade" id="myModal">
                  <div class="modal-dialog modal-dialog-centered modal-width">
                  <div class="modal-dialog" style="max-width: 100%;width: 100%;">
                    <div class="modal-content">

                      <!-- Modal Header -->
                      <div class="modal-header" style="padding: 7px 20px;color: #074760;">
                        <h4 class="modal-title">Start a discussion</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>

                      <!-- Modal body -->
                      <div class="modal-body">
                       <form>                          
                          <div class="row">
                            <div class="col-lg col-md col-sm-12 form-group">
                                <input type="text" class="form-control" name="field1" placeholder="Post title or question">
                            </div>
                            <div class="col-lg col-md col-sm-12 form-group">
                                <select class="form-control">
                                  <option>General Real Estate </option>
                                  <option>Investment</option>
                                  <option>RME Academy</option>
                                  <option>Real Estate on Blockchain</option>
                                  
                                </select>
                            </div>
                          </div>
                            <textarea name="content" id="editor"></textarea>
                            <div class="custom-file form-group mb-3">
                                <input type="file" class="custom-file-input" name="certify" required="">
                                <label class="file-alt">
                                  <span class="input-group-addon gly"></span>Upload the Attachments
                                </label>
                             </div>
                            <div class="m10 center">
                              <button class="btn btn-primary">Post Discussion</button>
                            </div>  
                       </form>
                          <script>
                            ClassicEditor
                                      .create( document.querySelector( '#editor' ) )
                                      .then( editor => {
                                        console.log( editor );
                                      } )
                                      .catch( error => {
                                        console.error( error );
                                      } );
                          </script>
                      </div>
                    </div>
                  </div>
                  </div>
                </div> 




<!-- sidebar starts here -->
<div id="mySidenav" class="sidenav">

   <div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar" class=" " style="m">
            <div class="sidebar-header">
              <img src="img/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3 rme-logo">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

             </div>

            <ul class="list- components">
                
                <li class="">

                    <a href="#homeSubmenu"  data-toggle="modal" data-target="#myModal">Start Discussion</a>
                </li>
                <li class="">
                            <a href="myCommunity.php">My Commmnity</a>
                </li>
                <li class="">

                    
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Browse Community</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="#">- Developer</a>
                        </li>
                         <li>
                            <a href="#">- Builder</a>
                        </li>
                        <li>
                            <a href="#">- Broker</a>
                        </li>
                        <li>
                            <a href="#">- Land Owner</a>
                        </li>
                        <li>
                            <a href="#">- Human Resource</a>
                        </li>
                        <li>
                            <a href="#">- Consultant</a>
                        </li>
                        <li>
                            <a href="#">- End User</a>
                        </li>
                        <li>
                            <a href="#">- Digital Marketing</a>
                        </li>
                    </ul>
                 </li>
                       
                        <li class="">
                            <a href="#">My Account</a>
                        </li>
                        <li>
                        <p class="other"></p>
                        </li>
                         <li class="">
                            <a href="#">FAQ</a>
                        </li>
                        <li class="">
                            <a href="#">Terms & Conditions</a>
                        </li>
            </ul>            
        </nav>
      </div>
  </div> 
<!-- sidebar ends here -->
<div id="main">
  <div class="container-fluid nav-fluid" id="first-sec">
    <!-- navbar with search section -->
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent" id="fixed-nav">
        <i id="openbutton" class="fas fa-bars" style="font-size: 25px;" onclick="openNav()"></i>
        <a href="index.php" class="home-btn sm-display"><i class="fas fa-home"></i></a>
        <form class="ml-lg-5 ml-md-5 ml-sm-1 sm-display" action="" method="" style="width: 40%">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text p-0 border-0">
                        <button type="submit" name="search" class="src-input-all btn src-btn pr-3 pl-3"><i class="fas fa-search"></i></button>
                      </div>
                    </div>
                    <input type="text" class="form-control src-input-all" id="inlineFormInputGroup" placeholder="search here ..">
                  </div>
          </form>
          <ul class="nav ml-auto">
            <li class="nav-item mr-lg-4 mr-md-3 mr-sm-3">
              <button class="nav-link btn btn-primary discuss" data-toggle="modal" data-target="#myModal">Start a discussion</button>
            </li>
            <li class="nav-item mr-lg-4 mr-md-3 mr-sm-3 display-item">
             <div class="dropdown">
          <span class="dropdown-toggle nav-link" id="community" data-toggle="dropdown" aria-haspopup="true">
              Browse Community
            </span>
            <div class="dropdown-menu" aria-labelledby="community">
              <a class="dropdown-item" href="">Developer</a>
              <a class="dropdown-item" href="">Builder</a>
              <a class="dropdown-item" href="">Broker</a>
              <a class="dropdown-item" href="">Land Owner</a>
              <a class="dropdown-item" href="">Human Resource</a>
              <a class="dropdown-item" href="">Consultant</a>
              <a class="dropdown-item" href="">End User</a>
              <a class="dropdown-item" href="">Digital Marketing</a>
            </div>
          </div>
            </li>
            <li class="nav-item mr-lg-4 mr-md-3 mr-sm-3">
              <div class="dropdown">
          <span class="nav-link" id="profile" data-toggle="dropdown" aria-haspopup="true">
            <img src="img/user.png" class="card-img-top rounded-circle">
            </span>
            <div class="dropdown-menu" aria-labelledby="profile" style="left: -80px;">
              <a class="dropdown-item" href="signinup.php">Login</a>
              <a class="dropdown-item" href="signinup.php">Signin</a>
              <a class="dropdown-item" href="">About Us</a>
            </div>
          </div>
            </li>
            <li class="nav-item mr-lg-4 ">
              <i class="fas fa-bell nav-link" style="font-size: 18px;padding-top: 7px !important;"></i>
            </li>
            <li class="nav-item mr-lg-4 " id="open-src" onclick="opsrc_resp()">
              <i class="fas fa-search nav-link" style="font-size: 18px;padding-top: 7px !important;" ></i>
            </li>
            <li class="nav-item mr-lg-4  src-resp" id="close-src" onclick="clsrc_resp()">
              <i class="fas fa-times nav-link" style="font-size: 18px;padding-top: 7px !important;"></i>
            </li>
            <li class="nav-item mr-lg-4 src-resp" id="resp-input">
             <form class="ml-lg-5 ml-md-5 ml-sm-1 src-resp-input" action="" method="">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text p-0 border-0">
                        <button type="submit" name="search" class="src-input-all btn src-btn pr-3 pl-3"><i class="fas fa-search"></i></button>
                      </div>
                    </div>
                    <input type="text" class="form-control src-input-all" id="FormInput" value=""  placeholder="search here ..">
                  </div>
            </form>
            </li>
          </ul>
        
    </nav>
    <!-- navbar close -->
        <div class="ask-prop">
          <h1>Wanna Discuss Property</h1>
          <form action="" method="post" class="ask-form">
            <input type="text" name="query" placeholder="Search for Discussions , Property..." class="form-control">
            <input type="submit" name="search" value="Search" class="btn btn-gold src-btn send-src-btn" 
           >
          </form>
        </div>

  </div>
<script type="text/javascript">
  var srcinput=document.getElementById("resp-input");
  var opensrc=document.getElementById("open-src");
  var closesrc=document.getElementById("close-src");
  function opsrc_resp(){
    opensrc.style.display="none";
    srcinput.style.display="block";
    closesrc.style.display="block";
  }
  function clsrc_resp(){
    opensrc.style.display="block";
    srcinput.style.display="none";
    closesrc.style.display="none";
    document.getElementById("FormInput").value="";
  }
</script>

<!-- events and annoucments -->
<div class="container">
  <h3 class="text-center p-4">Events And Announcements</h3>
  <div class="row">
    <div class="col-md-3 col-sm-12 ">
      <div class="events" >
        <h5 class="text-center p-2">Seminars</h5>
        <p><img src="https://png.icons8.com/dusk/50/000000/presentation.png"></p>
      </div>
    </div>
    <div class="col-md-3 col-sm-12 ">
      <div class="events">
        <h5 class="text-center p-2">Events</h5>
        <p><img src="https://png.icons8.com/dusk/80/000000/overtime.png"></p>
      </div>
    </div>
    <div class="col-md-3 col-sm-12 ">
      <div class="events">
        <h5 class="text-center p-2">Announcments</h5>
        <p><img src="https://png.icons8.com/dusk/50/000000/presentation.png"></p>
      </div>
    </div>
    <div class="col-md-3 col-sm-12 ">
      <div class="events">
        <h5 class="text-center p-2">Proposals</h5>
        <p><img src="https://png.icons8.com/dusk/80/000000/training.png"></p>
      </div>
    </div>
  </div>
</div>


<div class="container p-1 pt-3 pb-3 mb-5" style="">
  <h3 class="text-center p-4">Discover Forums</h3>
  <div class="card">
    <div class="card-body disc-forum">
      <ul class="nav nav-tabs nav-fill">
        <li class="nav-item">
          <a class="nav-link active" href="#tab1" data-toggle="tab">General Real Estate discussion</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#tab2" data-toggle="tab">Investor Portal</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#tab3" data-toggle="tab">Academy</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#tab4" data-toggle="tab">Builder</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#tab5" data-toggle="tab">Developer</a>
        </li>
      </ul>



      <div class="tab-content">
        <div id="tab1" class="container-fluid tab-pane active p-0">
          <ul class="list-group discuss-list">
            <li class="list-group-item">
              <div class="row">
                <div class="col-sm-1">
                  <img src="img/user.png" class="img-fluid" alt="Responsive image">
                </div>
                <div class="col-sm-5">
                  <a href="General1.php"><p>I am looking for a 3 BHK flat in Greater Noida,U.P. Suggestions for the same are welcome</p></a>
                </div>
                <div class="col-sm-6">
                <p>2<span> Replies</span> | 123+<span>views</span> | <span>Last reply: </span>20 <span>june 2018</span></p>
                <p><span>Started by <a href="#"></span>deeps8<span></a> on </span>12 jan 2018</p>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div class="row">
                <div class="col-sm-1">
                  <img src="img/user.png" class="img-fluid" alt="Responsive image">
                </div>
                <div class="col-sm-5">
                  <a href="General2.php"><p>Difference in property rates</p></a>
                </div>
                <div class="col-sm-6">
                <p>4<span> Replies</span> | 94+<span>views</span> | <span>Last reply: </span>1 <span>week ago</span></p>
                <p><span>Started by <a href="#"></span>simran53<span></a> on </span>2 july 2018</p>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div class="row">
                <div class="col-sm-1">
                  <img src="img/user.png" class="img-fluid" alt="Responsive image">
                </div>
                <div class="col-sm-5">
                  <a href="#"><p>How children needs influence property buying?</p></a>
                </div>
                <div class="col-sm-6">
                <p>500<span> Replies</span> | 1k+<span>views</span> | <span>Last reply: </span>10 <span>days ago</span></p>
                <p><span>Started by <a href="#"></span>yash9621<span></a> on </span>6 months ago</p>
                </div>
              </div>

            </li>
            <li class="list-group-item">
              <div class="row">
                <div class="col-sm-1">
                  <img src="img/user.png" class="img-fluid" alt="Responsive image">
                </div>
                <div class="col-sm-5">
                  <a href="#"><p>Managing finances in regards to infrastructure</p></a>
                </div>
                <div class="col-sm-6">
                <p>3k<span> Replies</span> | 5k+<span>views</span> | <span>Last reply: </span>1 <span>week ago</span></p>
                <p><span>Started by <a href="#"></span>rahul1998<span></a> on </span>2 year ago</p>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <a href="#">View All discussions</a>
            </li>
          </ul>
        </div>
        <div id="tab2" class="container tab-pane p-0">
          <ul class="list-group">
            <li class="list-group-item">
              <div class="row">
                <div class="col-sm-1">
                  <img src="img/user.png" class="img-fluid" alt="Responsive image">
                </div>
                <div class="col-sm-5">
                  <a href="Investment1.php"><p>Investing in land in a metropolitan city</p></a>
                </div>
                <div class="col-sm-6">
                <p>3<span> Replies</span> | 50+<span>views</span> | <span>Last reply: </span>10 <span>july 2018</span></p>
                <p><span>Started by <a href="#"></span>shivamshukla541<span></a> on </span>21 april 2018</p>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div class="row">
                <div class="col-sm-1">
                  <img src="img/user.png" class="img-fluid" alt="Responsive image">
                </div>
                <div class="col-sm-5">
                  <a href="Investment2.php"><p>Looking for options for investment in Chennai</p></a>
                </div>
                <div class="col-sm-6">
                <p>2<span> Replies</span> | 30+<span>views</span> | <span>Last reply: </span>20 <span>june 2018</span></p>
                <p><span>Started by <a href="#"></span>deepaksharma8<span></a> on </span>12 jan 2018</p>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div class="row">
                <div class="col-sm-1">
                  <img src="img/user.png" class="img-fluid" alt="Responsive image">
                </div>
                <div class="col-sm-5">
                  <a href="#"><p>Advantages of Buying RERA Registered Projects</p></a>
                </div>
                <div class="col-sm-6">
                <p>500<span> Replies</span> | 1k+<span>views</span> | <span>Last reply: </span>10 <span>days ago</span></p>
                <p><span>Started by <a href="#"></span>yash9621<span></a> on </span>6 months ago</p>
                </div>
              </div>

            </li>
            <li class="list-group-item">
              <div class="row">
                <div class="col-sm-1">
                  <img src="img/user.png" class="img-fluid" alt="Responsive image">
                </div>
                <div class="col-sm-5">
                  <a href="#"><p>Integrated Township: Changing the future of real estate sector</p></a>
                </div>
                <div class="col-sm-6">
                <p>3k<span> Replies</span> | 5k+<span>views</span> | <span>Last reply: </span>1 <span>week ago</span></p>
                <p><span>Started by <a href="#"></span>rahul1998<span></a> on </span>2 year ago</p>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <a href="#">View All discussions</a>
            </li>
          </ul>
        </div>
        <div id="tab3" class="container-fluid tab-pane p-0">
          <ul class="list-group">
            <li class="list-group-item">
              <div class="row">
                <div class="col-sm-1">
                  <img src="img/user.png" class="img-fluid" alt="Responsive image">
                </div>
                <div class="col-sm-5">
                  <a href="#"><p>Know Blockchain Technology</p></a>
                </div>
                <div class="col-sm-6">
                <p>100<span> Replies</span> | 2k+<span>views</span> | <span>Last reply: </span>1 <span>day ago</span></p>
                <p><span>Started by <a href="#"></span>shivamshukla541<span></a> on </span>1 year ago</p>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div class="row">
                <div class="col-sm-1">
                  <img src="img/user.png" class="img-fluid" alt="Responsive image">
                </div>
                <div class="col-sm-5">
                  <a href="#"><p>Real Estate transactions using Blockchain</p></a>
                </div>
                <div class="col-sm-6">
                <p>1k<span> Replies</span> | 5k+<span>views</span> | <span>Last reply: </span>5 <span>days ago</span></p>
                <p><span>Started by <a href="#"></span>deepaksharma8<span></a> on </span>1 year ago</p>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div class="row">
                <div class="col-sm-1">
                  <img src="img/user.png" class="img-fluid" alt="Responsive image">
                </div>
                <div class="col-sm-5">
                  <a href="#"><p>Transparency and security using the all new RME cryptocurrency</p></a>
                </div>
                <div class="col-sm-6">
                <p>500<span> Replies</span> | 1k+<span>views</span> | <span>Last reply: </span>10 <span>days ago</span></p>
                <p><span>Started by <a href="#"></span>yash9621<span></a> on </span>6 months ago</p>
                </div>
              </div>

            </li>
            <li class="list-group-item">
              <div class="row">
                <div class="col-sm-1">
                  <img src="img/user.png" class="img-fluid" alt="Responsive image">
                </div>
                <div class="col-sm-5">
                  <a href="#"><p>Learn how to operate the platform</p></a>
                </div>
                <div class="col-sm-6">
                <p>3k<span> Replies</span> | 5k+<span>views</span> | <span>Last reply: </span>1 <span>week ago</span></p>
                <p><span>Started by <a href="#"></span>rahul1998<span></a> on </span>2 year ago</p>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <a href="#">View All discussions</a>
            </li>
        </ul>
        </div>
        <div id="tab4" class="container-fluid tab-pane p-0">
          <ul class="list-group">
            <li class="list-group-item">
              <div class="row">
                <div class="col-sm-1">
                  <img src="img/user.png" class="img-fluid" alt="Responsive image">
                </div>
                <div class="col-sm-5">
                  <a href="#"><p>Gaur City Projects</p></a>
                </div>
                <div class="col-sm-6">
                <p>100<span> Replies</span> | 2k+<span>views</span> | <span>Last reply: </span>1 <span>day ago</span></p>
                <p><span>Started by <a href="#"></span>shivamshukla541<span></a> on </span>1 year ago</p>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div class="row">
                <div class="col-sm-1">
                  <img src="img/user.png" class="img-fluid" alt="Responsive image">
                </div>
                <div class="col-sm-5">
                  <a href="#"><p>Greater Noida West projects</p></a>
                </div>
                <div class="col-sm-6">
                <p>1k<span> Replies</span> | 5k+<span>views</span> | <span>Last reply: </span>5 <span>days ago</span></p>
                <p><span>Started by <a href="#"></span>deepaksharma8<span></a> on </span>1 year ago</p>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div class="row">
                <div class="col-sm-1">
                  <img src="img/user.png" class="img-fluid" alt="Responsive image">
                </div>
                <div class="col-sm-5">
                  <a href="#"><p>Jaypee on its way to building a masterpiece</p></a>
                </div>
                <div class="col-sm-6">
                <p>500<span> Replies</span> | 1k+<span>views</span> | <span>Last reply: </span>10 <span>days ago</span></p>
                <p><span>Started by <a href="#"></span>yash9621<span></a> on </span>6 months ago</p>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div class="row">
                <div class="col-sm-1">
                  <img src="img/user.png" class="img-fluid" alt="Responsive image">
                </div>
                <div class="col-sm-5">
                  <a href="#"><p>NBCC headed towards India's first world trade centre</p></a>
                </div>
                <div class="col-sm-6">
                <p>3k<span> Replies</span> | 5k+<span>views</span> | <span>Last reply: </span>1 <span>week ago</span></p>
                <p><span>Started by <a href="#"></span>rahul1998<span></a> on </span>2 year ago</p>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <a href="#">View All discussions</a>
            </li>
        </ul>
        </div>
        <div id="tab5" class="container-fluid tab-pane p-0">
          <ul class="list-group">
            <li class="list-group-item">
              <div class="row">
                <div class="col-sm-1">
                  <img src="img/user.png" class="img-fluid" alt="Responsive image">
                </div>
                <div class="col-sm-5">
                  <a href="#"><p>Gaur City Projects</p></a>
                </div>
                <div class="col-sm-6">
                <p>100<span> Replies</span> | 2k+<span>views</span> | <span>Last reply: </span>1 <span>day ago</span></p>
                <p><span>Started by <a href="#"></span>shivamshukla541<span></a> on </span>1 year ago</p>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div class="row">
                <div class="col-sm-1">
                  <img src="img/user.png" class="img-fluid" alt="Responsive image">
                </div>
                <div class="col-sm-5">
                  <a href="#"><p>Greater Noida West projects</p></a>
                </div>
                <div class="col-sm-6">
                <p>1k<span> Replies</span> | 5k+<span>views</span> | <span>Last reply: </span>5 <span>days ago</span></p>
                <p><span>Started by <a href="#"></span>deepaksharma8<span></a> on </span>1 year ago</p>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div class="row">
                <div class="col-sm-1">
                  <img src="img/user.png" class="img-fluid" alt="Responsive image">
                </div>
                <div class="col-sm-5">
                  <a href="#"><p>Jaypee on its way to building a masterpiece</p></a>
                </div>
                <div class="col-sm-6">
                <p>500<span> Replies</span> | 1k+<span>views</span> | <span>Last reply: </span>10 <span>days ago</span></p>
                <p><span>Started by <a href="#"></span>yash9621<span></a> on </span>6 months ago</p>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div class="row">
                <div class="col-sm-1">
                  <img src="img/user.png" class="img-fluid" alt="Responsive image">
                </div>
                <div class="col-sm-5">
                  <a href="#"><p>NBCC headed towards India's first world trade centre</p></a>
                </div>
                <div class="col-sm-6">
                <p>3k<span> Replies</span> | 5k+<span>views</span> | <span>Last reply: </span>1 <span>week ago</span></p>
                <p><span>Started by <a href="#"></span>rahul1998<span></a> on </span>2 year ago</p>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <a href="#">View All discussions</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

<!--------------------------------------------FORUM------------------------ -->
<!-- top developers section starts here  -->
<div class="top-category container mb-3">
  <div class="stackholder">
  <h3 class="text-center p-3">Stakeholders</h3>
  <div class="row">
    <div class="col-md-3">
      <div class="container categories">
        <h5 class="text-center">Land Owner</h5>
        <img src="img/land-owner.png" class="" alt="broker" style="height: 135px; width: 135px;" >
      </div>
    </div>
    <div class="col-md-3">
      <div class="container categories">
        <h5 class="text-center">Land Developer</h5>
        <img src="img/developer.png" class="" alt="Developer" >
      </div>
    </div>
    <div class="col-md-3">
      <div class="container categories">
        <h5 class="text-center">Builder</h5>
        <img src="img/builder.png" class="" alt="broker" >
      </div>
    </div>
    
    <div class="col-md-3">
      <div class="container categories">
        <h5 class="text-center">Project Invester</h5>
        <img src="img/invester.png" class="" alt="broker" style="height: 138px;width: 160px;">
      </div>
    </div>
    
  </div>
</div>
  <div class="mt-5 beneficiary">
  <h3 class="text-center p-3">Beneficiary</h3>   
  <div class="row">

   <div class="col-md-3">
      <div class="container categories">
        <h5 class="text-center">Broker</h5>
        <img src="img/broker.png" class="" alt="broker" style="height: 130px; width: 130px;" >
      </div>
    </div>
    <div class="col-md-3">
      <div class="container categories">
        <h5 class="text-center">Broking Houses</h5>
        <img src="img/broking-house.png" class="" alt="broker" >
      </div>
    </div>
    <div class="col-md-3">
      <div class="container categories">
        <h5 class="text-center">Customer</h5>
        <img src="img/consultant.png" class="" alt="broker" style="height: 150px; width: 175px;">
      </div>
    </div>
    <div class="col-md-3">
      <div class="container categories">
        <h5 class="text-center">Vendors</h5>
        <img src="img/consultant.png" class="" alt="broker" style="height: 150px; width: 175px;">
      </div>
    </div>
    <div class="col-md-3 m-auto">
      <div class="container categories">
        <h5 class="text-center">Facilitator</h5>
        <img src="img/consultant.png" class="" alt="broker" style="height: 150px; width: 175px;">
      </div>
    </div>
  </div>
  </div>
</div>
<div class="footer">
  <div class="container">
  <div class="row">
    <div class="col-md-4 col-lg-4 col-sm-12 terms">
      <a href="" class="mr-4">Term of Use</a>
      <a href="">Privacy Policy</a>
    </div>
    <div class="col-md-4 col-lg-4 col-sm-12 copyright">
      <span >© 2018 Launch. All rights reserved.</span>
    </div>
    <div class="col-md-4 col-lg-4 col-sm-12 social ">
      <a href="" class="mr-3 social-btn twitter"><i class="fab fa-twitter"></i></a>
      <a href="" class="mr-3 social-btn fb"><i class="fab fa-facebook-f"></i></a>
      <a href="" class="mr-3 social-btn ln"><i class="fab fa-linkedin-in"></i></a>
    </div>
  </div>
  </div>
</div>







</div>



<script>

function openNav() {
    var x = window.matchMedia("(max-width: 425px)")
    if (x.matches) { // If media query matches
    document.getElementById("mySidenav").style.width = "60%";
    document.getElementById("sidebar").style.width="auto";
    
    }
    else{
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
    document.getElementById("openbutton").style.display ="none";
   }
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
    document.getElementById("openbutton").style.display ="block";

}
</script>
     
     
</body>
</html> 
