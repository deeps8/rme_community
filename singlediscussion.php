<!DOCTYPE html>
<html>
<head>
	  <title>Single Discussion</title>
	  <link rel="stylesheet" type="text/css" href="css/searchbar.css">
	  <link rel="stylesheet" type="text/css" href="css/navnew.css">

	  <link rel="stylesheet" type="text/css" href="css/navold.css">
	  <link rel="stylesheet" type="text/css" href="css/Navs.css">
    <link rel="stylesheet" type="text/css" href="css/lowerBar.css">
	  <link rel="stylesheet" type="text/css" href="css/single-discussion.css">

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


  <div id="main">
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
              <a class="dropdown-item" href="">Login</a>
              <a class="dropdown-item" href="">Signin</a>
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

	<div id="main">
    
      <div class="container-fluid " style="margin-top: 5rem !important">
        <div class="row">

          <!-- discussion start -->
          <div class="col-lg-6 col-md-6 col-sm-12">

            <div class="discussion">
              <!--General Real Estateart -->
              <div class="head-of-discussion p-2">
                <div class="row">
                  <!-- author of discussion (details) -->
                  <div class="col-2 author-info">
                    <img src="img/user.png" class="rounded-circle card-img-top" style="width: 45%">
                    <p>deeps8</p>
                    <span class="role">RMEUser</span>
                  </div>
                  <!-- heading text , replies and time -->
                  <div class="col-10 heading-time">
                    
                    <h5>I am looking for a 3 BHK flat in Greater Noida,U.P. Suggestions for the same are welcome</h5>
                    <div class="dsc-status">
                      <span>1241 Replies</span><b> |</b>
                      <span>123+ Views</span><b> | </b>
                      <span>Last Reply: 20 jun 2018 </span><b> | </b>
                      <span>Posted on: 12 jan 2018</span>
                    </div>
                    <div class="discussion-info">
                      <p>
                        Swimming pool, parking and 24 hrs. power backup is required. 
                      </p>
                    </div>
                  </div>

                </div>
              </div>
              <!-- heading of discussion end here -->
              
              <!-- <span>Read more</span>
              <span>Read Less</span> -->
              <div style="padding: 0 9%" class="pb-4 dsc-status">
                <button class="btn btn-primary discuss mr-5">Reply</button>
                <span class="mr-3"><b>Upvote</b> : 12</span><b> | </b>
                <span class="ml-3"><b>Downvote</b> : 12</span>
              </div>
            </div>

            

            <!-- discussion replies (one "row" one reply) -->
              <div class="replies">
                <div class="filter">
                  <h6 class="d-inline">Replies : 1241</h6>
                  <button class="btn btn-outline-success float-right">Sort by</button>
                </div>
                <!-- first reply -->
                <div class="row">
                  <div class="col-2 author-info">
                    <img src="img/user.png" class="rounded-circle card-img-top" style="width: 45%">
                        <p>vrinda529</p>
                        <span class="role">Broker</span>
                  </div>
                  <div class="col-10 reply-text">
                    <div class="text-right text-secondary font-weight-bold">20 mar 2018</div>
                    <p>
                        There are flats available for the aforementioned requirements and from various famous builders like Jaypee,Guar,etc.
                        You may visit RME portal and have a look at them. 
                    </p>
                    <div class="action-on-reply">
                    <button class="btn btn-outline-success">Comment</button>
                    
                  </div>
                  </div>

                </div>
                <div class="row">
                  <div class="col-2 author-info">
                    <img src="img/user.png" class="rounded-circle card-img-top" style="width: 45%">
                        <p>abhinav9112</p>
                        <span class="role">Developer</span>
                  </div>
                  <div class="col-10 reply-text">
                    <div class="text-right text-secondary font-weight-bold">28 may 2018</div>
                    <p>
                        Yes, I agree with vrinda529 that you must visit and the portal look for the desired property from various options available there. Moreover, the system is absolutely transparent and very easy to use
                   </p>
                    <div class="action-on-reply">
                    <button class="btn btn-outline-success">Comment</button>
                    
                  </div>
                  </div>

                </div>
              </div>
          <!-- discussion replies end here -->


          </div>
          <!-- whole discussion ended here -->

          

          <!-- similar discussions section links of other discussion -->
          <div class="col-lg-4 col-md-4 col-sm-12 ml-10">
            <div class="container similar-dsc">
              <h4>Similar Discussions</h4>
              <ul>
                <li>
                  <a href="">Indian Real Estate Market</a>
                  <div class="dsc-status">
                      <span>1241 Replies</span><b> |</b>
                      <span>123+ Views</span><b> | </b>
                      <span>Last Reply: 20 jun 2018 </span>
                    </div>
                </li>
                <li>
                  <a href="">Indian Real Estate Market</a>
                  <div class="dsc-status">
                      <span>1241 Replies</span><b> |</b>
                      <span>123+ Views</span><b> | </b>
                      <span>Last Reply: 20 jun 2018 </span>
                    </div>
                  
                </li>
                <li>
                  <a href="">Indian Real Estate Market</a>
                  <div class="dsc-status">
                      <span>1241 Replies</span><b> |</b>
                      <span>123+ Views</span><b> | </b>
                      <span>Last Reply: 20 jun 2018 </span>
                    </div>
                  
                </li>
                <li>
                  <a href="">Indian Real Estate Market</a>
                  <div class="dsc-status">
                      <span>1241 Replies</span><b> |</b>
                      <span>123+ Views</span><b> | </b>
                      <span>Last Reply: 20 jun 2018 </span>
                    </div>
                </li>
              </ul>
            </div>

            <div class="container trending-dsc mt-5">
              <h4>Trending Discussions</h4>
              <ul>
                <li>
                  <a href="">Indian Real Estate Market</a>
                  <div class="dsc-status">
                      <span>1241 Replies</span><b> |</b>
                      <span>123+ Views</span><b> | </b>
                      <span>Last Reply: 20 jun 2018 </span>
                    </div>
                </li>
                <li>
                  <a href="">Indian Real Estate Market</a>
                  <div class="dsc-status">
                      <span>1241 Replies</span><b> |</b>
                      <span>123+ Views</span><b> | </b>
                      <span>Last Reply: 20 jun 2018 </span>
                    </div>
                  
                </li>
                <li>
                  <a href="">Indian Real Estate Market</a>
                  <div class="dsc-status">
                      <span>1241 Replies</span><b> |</b>
                      <span>123+ Views</span><b> | </b>
                      <span>Last Reply: 20 jun 2018 </span>
                    </div>
                  
                </li>
                <li>
                  <a href="">Indian Real Estate Market</a>
                  <div class="dsc-status">
                      <span>1241 Replies</span><b> |</b>
                      <span>123+ Views</span><b> | </b>
                      <span>Last Reply: 20 jun 2018 </span>
                    </div>
                </li>
              </ul>
            </div>

          </div>
          <!-- similar discussion ended here -->


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