    <?php
    session_start();
    $allErrs = $nameErr = $emailErr = $contactnoErr = $cityErr = $typeOfSerrvicesErr = $allpostval = $allapproxbudget1 = $alltypeOfServices =  "" ;

    if(isset($_SESSION['errors'])){
      $allErrs = $_SESSION['errors'];
    }
    if(isset($_SESSION['postval'])){
      $allpostval =$_SESSION['postval'];
    }

    // if(isset($_SESSION['approxbudget1'])){
    //   $allapproxbudget1 =$_SESSION['approxbudget1'];
    // }

    if(isset($_SESSION['services'])){
      $alltypeOfServices =$_SESSION['services'];
    }

    if(isset($allpostval['enquirysource'])){
      $enquirysource=$allpostval['enquirysource'];

    }

    if (isset($allErrs['project'])) {
      $projectErr = $allErrs['project'];
    }

    if(isset($allErrs['name'])){
      $nameErr = $allErrs['name'];
    }

    if(isset($allErrs['email'])){
      $emailErr = $allErrs['email'];
    }
    if(isset($allErrs['contactno'])){
      $contactnoErr = $allErrs['contactno'];
    }
    if(isset($allErrs['city'])){
      $cityErr = $allErrs['city'];
    }
    // if(isset($allErrs['location'])){
    //   $locationErr = $allErrs['location'];
    // }

    // if(isset($allErrs['enquirysource'])){
    //   $enquirysourceErr = $allErrs['enquirysource'];
    // }
    if(isset($allErrs['services'])){
      $typeOfSerrvicesErr = $allErrs['services'];
    }?>    

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset=utf-8>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Legal | Hat</title>
        <!-- Load Roboto font -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <!-- Load css styles -->
        <!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.css" /> -->
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css1/bootstrap.min.css">
        <!-- custom CSS -->
        <!-- <link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css" /> -->
        <!-- <link rel="stylesheet" type="text/css" href="css/style.css" /> -->
        

        <!-- awesone fonts css-->
        <link href="css1/font-awesome.css" rel="stylesheet" type="text/css">
        <!-- owl carousel css-->
        <link rel="stylesheet" href="owl-carousel/assets/owl.carousel.min.css" type="text/css">
        <!-- Bootstrap CSS -->
        <!-- <link rel="stylesheet" href="css1/bootstrap.min.css"> -->
        <!-- custom CSS -->
        <link rel="stylesheet" href="css1/style.css">

        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/fontawesome.min.css"/> -->


        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>


        <link rel="stylesheet" href="owl-carousel/assets/owl.carousel.min.css" type="text/css">
        <link rel="stylesheet" type="text/css" href="css/pluton.css" />
        <!-- [if IE 7]> -->
        <link rel="stylesheet" type="text/css" href="css/pluton-ie7.css" />
        <!-- <![endif]--> 
            <link rel="stylesheet" type="text/css" href="css/jquery.cslider.css" />
            <link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css" />
            <link rel="stylesheet" type="text/css" href="css/animate.css" />
            <!-- Fav and touch icons -->
            
            <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57.png">
            <link rel="shortcut icon" href="images/ico/favicon.ico">

            <link rel="stylesheet" href="./form/style.css">
            <script src="https://kit.fontawesome.com/c4254e24a8.js" crossorigin="anonymous"></script>

            <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"> -->
            <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script> -->
            <!--  -->
            <!-- <link rel="stylesheet" href="css1/bootstrap.min.css"> -->

            <link rel="stylesheet" href="fonts/icomoon/style.css">

            <!-- <link rel="stylesheet" href="dropdown-19/css/owl.carousel.min.css"> -->

            <!-- Bootstrap CSS -->
            <!-- <link rel="stylesheet" href="dropdown-19/css/bootstrap.min.css"> -->

            <!-- Style -->
            <!-- <link rel="stylesheet" href="dropdown-19/css/style.css"> -->
            <!-- <link rel="stylesheet" href="dropdown-16/css/style.css"> -->

            <style type="text/css">

                .accordion{
                  margin: 40px 0;
              }
              .accordion .item {
                border: none;
                margin-bottom: 50px;
                background: none;
            }
            .t-p{
              color: rgb(193 206 216);
              padding: 40px 30px 0px 30px;
          }
          .accordion .item .item-header h2 button.btn.btn-link {
            background: #333435;
            color: white;
            border-radius: 0px;
            font-family: 'Poppins';
            font-size: 16px;
            font-weight: 400;
            line-height: 2.5;
            text-decoration: none;
        }
        .accordion .item .item-header {
            border-bottom: none;
            background: transparent;
            padding: 0px;
            margin: 2px;
        }

        .accordion .item .item-header h2 button {
            color: white;
            font-size: 20px;
            padding: 15px;
            display: block;
            width: 100%;
            text-align: left;
        }

        .accordion .item .item-header h2 i {
            float: right;
            font-size: 30px;
            color: #eca300;
            background-color: black;
            width: 60px;
            height: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 5px;
        }

        button.btn.btn-link.collapsed i {
            transform: rotate(0deg);
        }

        button.btn.btn-link i {
            transform: rotate(180deg);
            transition: 0.5s;
        }






        .shadowbtn{
            box-shadow: 0 .5rem 1rem rgba(0,0,0,.35)!important;
        }

        .txtshadow{
          text-shadow:0px 3px 12px #c3c3c3;
      }




      .template_faq {
        background: #edf3fe none repeat scroll 0 0;
    }
    .panel-group {
        background: #fff none repeat scroll 0 0;
        border-radius: 3px;
        box-shadow: 0 5px 30px 0 rgba(0, 0, 0, 0.04);
        margin-bottom: 0;
        padding: 30px;
    }
    #accordion .panel {
        border: medium none;
        border-radius: 0;
        box-shadow: none;
        margin: 0 0 15px 10px;
    }
    #accordion .panel-heading {
        border-radius: 30px;
        padding: 0;
    }
    #accordion .panel-title a {
        background: #ffb900 none repeat scroll 0 0;
        border: 1px solid transparent;
        border-radius: 30px;
        color: #fff;
        display: block;
        font-size: 18px;
        font-weight: 600;
        padding: 12px 20px 12px 50px;
        position: relative;
        transition: all 0.3s ease 0s;
    }
    #accordion .panel-title a.collapsed {
        background: #fff none repeat scroll 0 0;
        border: 1px solid #ddd;
        color: #333;
    }
    #accordion .panel-title a::after, #accordion .panel-title a.collapsed::after {
        background: #ffb900 none repeat scroll 0 0;
        border: 1px solid transparent;
        border-radius: 50%;
        box-shadow: 0 3px 10px rgba(0, 0, 0, 0.58);
        color: #fff;
        content: "";
        font-family: fontawesome;
        font-size: 25px;
        height: 55px;
        left: -20px;
        line-height: 55px;
        position: absolute;
        text-align: center;
        top: -5px;
        transition: all 0.3s ease 0s;
        width: 55px;
    }
    #accordion .panel-title a.collapsed::after {
        background: #fff none repeat scroll 0 0;
        border: 1px solid #ddd;
        box-shadow: none;
        color: #333;
        content: "";
    }
    #accordion .panel-body {
        background: transparent none repeat scroll 0 0;
        border-top: medium none;
        padding: 20px 25px 10px 9px;
        position: relative;
    }
    #accordion .panel-body p {
        border-left: 1px dashed #8c8c8c;
        padding-left: 25px;
    }
</style>

<style>
    .mega-menu{
        display: flex;
    }
    @media screen and (max-width: 420px) {
      .mega-menu {
        flex-direction: column;
    }
}



@import url('https://fonts.googleapis.com/css?family=Oswald');


/*body {
   position: relative;
   font-family: 'Oswald', sans-serif;
   background: $site;
   color: $light;
   font-size: 20px;
}*/

.grid {
   list-style: none;
   margin-left: -40px;
}

.gc {
   box-sizing: border-box;
   display: inline-block;
   margin-right: -.25em;
   min-height: 1px;
   padding-left: 40px;
   vertical-align: top;
}

.gc--1-of-3 {
   width: 33.33333%;
}

.gc--2-of-3 {
   width: 66.66666%;
}

.naccs {
   position: relative;
   max-width: 900px;
   margin: 100px auto 0;
}

.naccs .menu div {
   padding: 15px 20px 15px 40px;
   margin-bottom: 10px;
   color: #000;
   background: $second-color;
   box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
   cursor: pointer;
   position: relative;
   vertical-align: middle;
   font-weight: 700;
   transition: 1s all cubic-bezier(0.075, 0.82, 0.165, 1);
}

.naccs .menu div:hover {
   box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.naccs .menu div span.light {
   height: 10px;
   width: 10px;
   position: absolute;
   top: 24px;
   left: 15px;
   background-color: $base-color;
   border-radius: 100%;
   transition: 1s all cubic-bezier(0.075, 0.82, 0.165, 1);
}

.naccs .menu div.active span.light {
   background-color: $third-color;
   left: 0;
   height: 100%;
   width: 3px;
   top: 0;
   border-radius: 0;
}

.naccs .menu div.active {
   color: $third-color;
   padding: 15px 20px 15px 20px;
}

ul.nacc {
   position: relative;
   height: 0px;
   list-style: none;
   margin: 0;
   padding: 0;
   transition: .5s all cubic-bezier(0.075, 0.82, 0.165, 1);
}

ul.nacc li {
   opacity: 0;
   transform: translateX(50px);
   position: absolute;
   list-style: none;
   transition: 1s all cubic-bezier(0.075, 0.82, 0.165, 1);
}

ul.nacc li.active {
   transition-delay: .3s;
   z-index: 2;
   opacity: 1;
   transform: translateX(0px);
}

ul.nacc li p {
   margin: 0;
}



@import url('https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:wght@400;700&display=swap');

@keyframes fadeIn {
    from {
        opacity: 0;
    }
    to {
        opacity: 1;
    }
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

html {
    font-family: 'IBM Plex Mono', monospace;
}

                /*body {
                    background: #1b263b;
                    color: #778da9;
                    cursor: none;
                }*/

                #cursor {
                    position: fixed;
                    top: -16px;
                    left: -16px;
                    z-index: 1;
                    height: 32px;
                    width: 32px;
                    border-radius: 50%;
                    background: #e0e1dd;
                    opacity: 0;
                }

                #cursor.-activated {
                    animation: fadeIn 1s ease-out forwards;
                }

                .tags-cloud {
                    position: relative;
                    top: calc(50% - 30vmin);
                    left: calc(50% - 30vmin);
                    height: 30vmin;
                    width: 30vmin;
                    list-style: none;
                    opacity: 0;
                }

                .tags-cloud.-loaded {
                    animation: fadeIn 1s ease-out forwards;
                }

                .tags-cloud > .tag {
                    position: relative;
                    top: 50%;
                    left: 50%;
                    font-size: 5vmin;
                    font-weight: bold;
                    transition: transform .5s linear, opacity .5s linear;
                }

                .tags-cloud > .tag > .wrap {
                    display: inline-block;
                    transform: translateX(-80%) translateY(-80%);
                }

            </style>

            <style type="text/css">
                #circle {
                    position: absolute;
                    top: 50%;
                    left: 50%;
                    transform: translate(-50%,-50%);
                    width: 150px;
                    height: 150px;  
                    z-index: 99;
                }

                .loader {
                    width: calc(100% - 0px);
                    height: calc(100% - 0px);
                    border: 8px solid #162534;
                    border-top: 8px solid #09f;
                    border-radius: 50%;
                    animation: rotate 5s linear infinite;
                }

                @keyframes rotate {
                    100% {transform: rotate(360deg);}
                } 
            </style>



            <style>

                body{
                  font-family: 'Nunito', sans-serif;
                  /*padding: 50px;*/
              }
                          /*.container{
                            display: flex;
                            flex-wrap:wrap ;
                            flex-direction: column;
                            max-width: 60%;
                            justify-items: center;
                          }*/
                          .card11{

                            border-radius: 10px 30px;
                            background: #fff;
                            box-shadow: 0 10px 10px rgba(0,0,0,.08), 0 0 6px rgba(0,0,0,.05);
                            transition: .3s transform cubic-bezier(.155,1.105,.295,1.12),.3s box-shadow,.3s -webkit-transform cubic-bezier(.155,1.105,.295,1.12);
                            padding: 12px 15px ;
/*                            margin: 20px;*/
cursor: pointer;
}

.card11:hover{
   transform: scale(1.15);
   box-shadow: 0 10px 20px rgba(0,0,0,.12), 0 4px 8px rgba(0,0,0,.06);
}

.card11 h3{
  display: flex;
  justify-content: center;
  align-content: center;
  align-items: center;
/*                          font-weight: 600;*/
font-family: "Lato-Regular";
font-size: 24px;
color: rgba(252,200,19,1);
}

.card11 img{
  position: absolute;
  top: 20px;
  right: 15px;
  max-height: 120px;
}

.card-1{
  /*background-image: url(http://localhost/httpdocsSen/assets/images/megapolis-grey-logo.png);*/
  background-repeat: no-repeat;
  background-position: right;
  background-size: 450px;
}

.linebtn{
  display: flex;
  justify-content: center;
  align-items: center;
  list-style: none;
}

.linebtn ul{
  /*display: inline-block;*/
  list-style: none;
  display:flex;
  flex-wrap: wrap; 
  justify-content: center; 
  align-items: center;  
  /*padding: -19px;*/
}

.linebtn  ul li{

  display: flex;
  flex-wrap: wrap;
  justify-items: center;
  align-items: center;
  margin: 10px 20px;
  border: 1px solid ;
  padding: 8px 25px;
}

@media screen(max-width: 420px) {
    .linebtn  ul li{
      /*display: flex;*/
      justify-items: center;
      align-items: center;
      margin: 0px 0px;
      border: 1px solid ;
      /*padding: 8px 25px;*/
  }
}

.linebtn  ul li.active{
  background: rgba(34, 61, 97, 0.64);
  color: #fff;
}

.line{
  display: flex;
  justify-content: center;
  align-items: center;
  flex-wrap: wrap; 
  margin-bottom: 50px;
}

.line ul{
  display:flex;
  list-style: none; 
  padding: 5px;
}

.line ul li{
  display: flex;
  justify-content: center;
  align-content: center;
  margin: 20px 20px;
  border: 1px solid ;
  padding: 10px 50px;
}

.line ul li a{
  text-decoration: none;
}

                          /*.card-2{
                             background-image: url(https://ionicframework.com/img/getting-started/components-card.png);
                                background-repeat: no-repeat;
                              background-position: right;
                              background-size: 80px;
                          }

                          .card-3{
                             background-image: url(https://ionicframework.com/img/getting-started/theming-card.png);
                                background-repeat: no-repeat;
                              background-position: right;
                              background-size: 80px;
                          }*/

                          @media(max-width: 990px){
                            .card11{
                              margin: 20px;
                          }
                      } 








                      /*body {background:#ccc}*/

                      .box h3{
                        text-align:center;
                        position:relative;
                        top:80px;
                    }
                    .box {
                        width:70%;
                        height:250px;
                        background:#FFF;
                        margin:40px auto;
                    }
                    



                </style>


                   
                <style>
                  
                 
                    .nav-pills-custom .nav-link {
                        color: #aaa;
                        background: #fff;
                        position: relative;
                    }

                    .nav-pills-custom .nav-link.active {
                        color: #45b649;
                        background: #fff;
                    }


                    /* Add indicator arrow for the active tab */
                    @media (min-width: 992px) {
                        .nav-pills-custom .nav-link::before {
                            content: '';
                            display: block;
                            border-top: 8px solid transparent;
                            border-left: 10px solid #fff;
                            border-bottom: 8px solid transparent;
                            position: absolute;
                            top: 50%;
                            right: -10px;
                            transform: translateY(-50%);
                            opacity: 0;
                        }
                    }

                    .nav-pills-custom .nav-link.active::before {
                        opacity: 1;
                    }





                    /*
                    *
                    * ==========================================
                    * FOR DEMO PURPOSE
                    * ==========================================
                    */
                    /*body {
                        min-height: 100vh;
                        background: linear-gradient(to left, #dce35b, #45b649);
                    }*/
                </style>

                <style type="text/css">
                    #header {
                      position: fixed;
                      top: 0;
                      left: 0;
                      right: 0;
                      z-index: 999;
                      background-color: #fff;
                  }

                  #navbar {
                      display: flex;
                      align-items: center;
                      justify-content: space-between;
                      height: 50px;
                      background-color: #fff;
                      box-shadow: 0 4px 6px rgba(0,0,0,0.1);
                  }

                  #navbar ul {
                      display: flex;
                      list-style: none;
                      margin: 0;
                      padding: 0;
                  }

                  #navbar li {
                      margin: 0 10px;
                  }

                  #navbar a {
                      color: #333;
                      text-decoration: none;
                      font-size: 14px;
                  }

                  #navbar a:hover {
                      color: #00b8d4;
                  }

                  #navbar .logo {
                      font-size: 18px;
                      font-weight: bold;
                  }

                  #menu-btn {
                      display: none;
                      background}

                      .sticky {
                        background-color: #fff;
                        box-shadow: 0 4px 6px rgba(0,0,0,0.1);
                    }

                </style>

                <style type="text/css">
                    .float-bob-x {
                        -webkit-animation-name: float-bob-x;
                        /* animation-name: float-bob-x; */
                        -webkit-animation-duration: 2s;
                        /* animation-duration: 2s; */
                        -webkit-animation-iteration-count: infinite;
                        /* animation-iteration-count: infinite; */
                        -webkit-animation-timing-function: linear;
                        animation-timing-function: linear;
                    }
                </style>

                                <style>
                                    .navbar{
                /*                        margin-top: 10px;*/
                /*                        padding: 20px 0;*/
                                    }
                                    .navbar-brand{
                                        font-size: 800;
                                        text-transform: uppercase;
                /*                        font-size: 1rem;*/
                                        color: #c3c3c3;
                                    }
                                    .nav-item{
                                        font-weight: 800;
                                        text-transform: uppercase;
                                    }
                                    .navbar-light .navbar-nav  .nav-item .nav-link:hover,
                                    .navbar-light .navbar-nav  .nav-item.active .nav-link{
                                        background: #FECE1A;
                                        color:#fff;
                                    }
                                    .navbar-light .navbar-nav  .nav-item .nav-link{
                                        
                                        color:#000;
                                        padding: 5px 12px;
                                    }

                                    .navbar-light .navbar-toggler{
                                        border: none;
                                        color: #fff;
                                        border: 2px solid #FECE1A;
                                        border-radius: opx;
                                    }

                                    .navbar-collapse{

                                        background: #fff;
                                    }
                                    @media(max-width:768px){
                                     
                                     .navbar-collapse{

                                         background: #FECE1A;
                                     }   
                                    }
                                    .dropdown-menu{
                                        background-color: #FECE1A;
                                    }
                                    @media(max-width:768px){
                                     #home{

                                      padding: 150px 0px 0px;
                                     }   
                                    }
                                </style>

            </head>

            <body>

          <header id="header" >
                <!-- <nav id="navbar">
                  <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav> -->





         <div class="container">
             
              <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#"><img src="images/logo.png"width="170"height="50" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-lg-auto">
                    <li class="nav-item active">
                      <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Trademark/Patent</a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Registration
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Company</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                      </div>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link " href="#">Compony</a>
                    </li>
                  </ul>
                  
                </div>
              </nav>


         </div>   

        

        </header>
       


          <!-- Start home section -->
          <div id="home">
            <!-- Start cSlider -->
            <div id="da-slider" class="da-slider">
                <!-- <div class="triangle"></div> -->
                <!-- mask elemet use for masking background image -->
                <div class="mask"></div>
                <!-- All slides centred in container element -->
                <div class="container">
                    <!-- Start first slide -->
                    <div class="da-slide">
                        <h2 class="fittext2">Trademark</h2>
                        <!-- <h4>Trademark</h4> -->
                        <p>A trademark, trade mark, or trade-mark is a distinctive 
                            sign or indicator used by an individual, business 
                            organization, or other legal entity to identify that the 
                            products or services to consumers with which the 
                            trademark appears originate from a unique source, 
                            designated for a specific market, and is used to 
                            distinguish its products or services from those of other 
                        entities.</p>
                        <a href="#" class="da-link button">Read more</a>
                        <div class="da-img">
                           <!-- <a href="https://icons8.com/illustrations/author/JTmm71Rqvb2T">Dani Grapevine</a> from <a href="https://icons8.com/illustrations">Ouch!</a> -->
                           <img src="images/3d.png" alt="image01" width="320">
                       </div>
                   </div> 
                   <!-- End first slide -->
                   <!-- Start second slide -->
                   <div class="da-slide">
                    <h2>Copyright</h2>
                    <!-- <h4>Copyright</h4> -->
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                    <a href="#" class="da-link button">Read more</a>
                    <div class="da-img">
                        <img src="images/anime.gif" width="320" alt="image02">
                    </div>
                </div>
                <!-- End second slide -->
                <!-- Start third slide -->
                <div class="da-slide">
                    <h2>Patent Registration</h2>
                    <!-- <h4>Patent</h4> -->
                    <p>Patent is a major part of Intellectual Property which grants its' 
                        inventor, the right of exploiting its object exclusively, during a 
                    given time period.</p>
                    <a href="#" class="da-link button">Read more</a>
                    <div class="da-img">
                        <img src="images/patent.gif" width="320" alt="image03">
                    </div>
                </div>
                <div class="da-slide">
                    <h2>Company Formation</h2>
                    <!-- <h4>Company Formation</h4> -->
                    <p>Company formation is the term for the process of incorporation 
                        of a business. It is also sometimes referred to as 
                        company registration. Under company law and most 
                        international law a company or corporation is considered to be 
                        an entity that is separate from the people who own or operate 
                    the company.</p>
                    <a href="#" class="da-link button">Read more</a>
                    <div class="da-img">
                        <img src="images/Compani.png" width="320" alt="image03">
                    </div>
                </div>
                <div class="da-slide">
                    <h2>ISO</h2>
                    <!-- <h4>ISO</h4> -->
                    <p>ISO's work makes a positive difference to the world we live in. 
                        ISO standards add value to all types of business operations. 
                        They contribute to making the development, manufacturing 
                        and supply of products and services more efficient, safer 
                        and cleaner. They make trade between countries easier and 
                        fairer. ISO standards also serve to safeguard consumers and 
                        users of products and services in general - as well as making 
                    their lives simpler.</p>
                    <a href="#" class="da-link button">Read more</a>
                    <div class="da-img">
                        <img src="images/iso.png" width="320" alt="image03">
                    </div>
                </div>
                <div class="da-slide">
                    <h2>Website Design</h2>
                    <!-- <h4>Website Design</h4> -->
                    <p>A Web service is a method of communication between two 
                        electronic devices over the Web. It includes website 
                        development and various online services required for 
                    set up of a enterpreneurship.</p>
                    <a href="#" class="da-link button">Read more</a>
                    <div class="da-img">
                        <img src="images/Web.png" width="320" alt="image03">
                    </div>
                </div>
                <!-- Start third slide -->
                <!-- Start cSlide navigation arrows -->
                <div class="da-arrows">
                    <span class="da-arrows-prev"></span>
                    <span class="da-arrows-next"></span>
                </div>
                <!-- End cSlide navigation arrows -->
            </div>
        </div>
    </div>
    <!-- End home section -->
    <!-- Service section start -->

    <style type="text/css">.design-process-section .text-align-center {
        line-height: 25px;
        margin-bottom: 12px;
    }
    .design-process-content {
        border: 1px solid #e9e9e9;
        position: relative;
        padding: 16px 34% 30px 30px;
    }
    .design-process-content img {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        z-index: 0;
        max-height: 100%;
    }
    .design-process-content h3 {
        margin-bottom: 16px;
    }
    .design-process-content p {
        line-height: 26px;
        margin-bottom: 12px;
    }
    .process-model {
        list-style: none;
        padding: 0;
        position: relative;
        max-width: 600px;
        margin: 20px auto 26px;
        border: none;
        z-index: 0;
    }
    .process-model li::after {
        background: #e5e5e5 none repeat scroll 0 0;
        bottom: 0;
        content: "";
        display: block;
        height: 4px;
        margin: 0 auto;
        position: absolute;
        right: -30px;
        top: 33px;
        width: 85%;
        z-index: -1;
    }
    .process-model li.visited::after {
        background: #57b87b;
    }
    .process-model li:last-child::after {
        width: 0;
    }
    .process-model li {
        display: inline-block;
        width: 18%;
        text-align: center;
        float: none;
    }
    .nav-tabs.process-model > li.active > a, .nav-tabs.process-model > li.active > a:hover, .nav-tabs.process-model > li.active > a:focus, .process-model li a:hover, .process-model li a:focus {
        border: none;
        background: transparent;

    }
    .process-model li a {
        padding: 0;
        border: none;
        color: #606060;
    }
    .process-model li.active,
    .process-model li.visited {
        color: #57b87b;
    }
    .process-model li.active a,
    .process-model li.active a:hover,
    .process-model li.active a:focus,
    .process-model li.visited a,
    .process-model li.visited a:hover,
    .process-model li.visited a:focus {
        color: #57b87b;
    }
    .process-model li.active p,
    .process-model li.visited p {
        font-weight: 600;
    }
    .process-model li i {
        display: block;
        height: 68px;
        width: 68px;
        text-align: center;
        margin: 0 auto;
        background: #f5f6f7;
        border: 2px solid #e5e5e5;
        line-height: 65px;
        font-size: 30px;
        border-radius: 50%;
    }
    .process-model li.active i, .process-model li.visited i  {
        background: #fff;
        border-color: #57b87b;
    }
    .process-model li p {
        font-size: 14px;
        margin-top: 11px;
    }
    .process-model.contact-us-tab li.visited a, .process-model.contact-us-tab li.visited p {
        color: #606060!important;
        font-weight: normal
    }
    .process-model.contact-us-tab li::after  {
        display: none; 
    }
    .process-model.contact-us-tab li.visited i {
        border-color: #e5e5e5; 
    }



    @media screen and (max-width: 560px) {
      .more-icon-preocess.process-model li span {
        font-size: 23px;
        height: 50px;
        line-height: 46px;
        width: 50px;
    }
    .more-icon-preocess.process-model li::after {
        top: 24px;
    }
}
@media screen and (max-width: 380px) { 
    .process-model.more-icon-preocess li {
        width: 16%;
    }
    .more-icon-preocess.process-model li span {
        font-size: 16px;
        height: 35px;
        line-height: 32px;
        width: 35px;
    }
    .more-icon-preocess.process-model li p {
        font-size: 8px;
    }
    .more-icon-preocess.process-model li::after {
        top: 18px;
    }
    .process-model.more-icon-preocess {
        text-align: center;
    } 
}</style>

<!-- <section class="design-process-section" id="process-tab">
  <div class="container-">
    <div >
      <div class="col-lg-12"> 
      
        <ul class="nav nav-tabs process-model more-icon-preocess" role="tablist">
          <li role="presentation" class="active"><a href="#discover" aria-controls="discover" role="tab" data-toggle="tab" data-target="#discove"><i class="fa fa-search" aria-hidden="true"></i>
            <p>Discover</p>
        </a></li>
        <li role="presentation"><a href="#strategy" aria-controls="strategy" role="tab" data-toggle="tab" data-target="#Strateg"><i class="fa fa-send-o" aria-hidden="true"></i>
            <p>Strategy</p>
        </a></li>
        <li role="presentation"><a href="#optimization" aria-controls="optimization" role="tab" data-toggle="tab" data-target="#optimizatio"><i class="fa fa-qrcode" aria-hidden="true"></i>
            <p>Optimization</p>
        </a></li>
        <li role="presentation"><a href="#content" aria-controls="content" role="tab" data-toggle="tab" data-target="#conten"><i class="fa fa-newspaper-o" aria-hidden="true"></i>
            <p>Content</p>
        </a></li>
        <li role="presentation"><a href="#reporting" aria-controls="reporting" role="tab" data-toggle="tab"data-target="#reportin"><i class="fa fa-clipboard" aria-hidden="true"></i>
            <p>Reporting</p>
        </a></li>
    </ul>
   
    <div class="tab-content">
      <div role="tabpanel" class="tab-pane  show active" id="discove">
        <div class="design-process-content">
          <h3 class="semi-bold">Discovery</h3>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincid unt ut laoreet dolore magna aliquam erat volutpat</p>
      </div>
  </div>
  <div role="tabpanel" class="tab-pane" id="Strateg">
    <div class="design-process-content">
      <h3 class="semi-bold">Strategy</h3>
      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincid unt ut laoreet dolore magna aliquam erat volutpat</p>
  </div>
</div>
<div role="tabpanel" class="tab-pane" id="optimizatio">
    <div class="design-process-content">
      <h3 class="semi-bold">Optimization</h3>
      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincid unt ut laoreet dolore magna aliquam erat volutpat</p>
  </div>
</div>
<div role="tabpanel" class="tab-pane" id="conten">
    <div class="design-process-content">
      <h3 class="semi-bold">Content</h3>
      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincid unt ut laoreet dolore magna aliquam erat volutpat</p>              
  </div>
</div>
<div role="tabpanel" class="tab-pane" id="reportin">
    <div class="design-process-content">
      <h3>Reporting</h3>
      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincid unt ut laoreet dolore magna aliquam erat volutpat. </p>
  </div>
</div>
</div>
</div>
</div>
</section> -->






<style type="text/css">
 .menu div {
    padding: 15px 20px 15px 40px;
    margin-bottom: 10px;
    color: #000;
    background: $second-color;
    box-shadow: 0 0 20px rgb(0 0 0 / 10%);
    cursor: pointer;
    position: relative;
    vertical-align: middle;
    font-weight: 700;
    transition: 1s all cubic-bezier(0.075, 0.82, 0.165, 1);
}

.menu div.active {
    color: #FBC02D;;
    padding: 15px 20px 15px 20px; 
}

.menu div:hover {
 box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.menu div span.light {
    height: 10px;
    width: 10px;
    position: absolute;
    top: 24px;
    left: 15px;
    background-color: #000;
    border-radius: 100%;
    transition: 1s all cubic-bezier(0.075, 0.82, 0.165, 1);
}    

.menu div span.light span{
    color: #000;      
} 


.menu div.active span.light {
    background-color: #FBC02D;
    left: 0;
    height: 100%;
    width: 3px;
    top: 0;
    border-radius: 0;
}    

    /*#menu {
        position: sticky;
            top: 58px;
            height: 100%;
            width: 280px;
            margin: 20px 7px 0 12px;
    }    
*/
    /*@media (min-height: 300px){
        #menu div.list{
        position: sticky;
        top: 60px;
        }
    }*/

</style>
<br><br><br>
<div class="row-fluid content">   
 <div class="container-fluid" style="display: flex;" >    
    <div class="col-lg-3 col-sm-6"> 
        <div class="menu" id="menu"style="position: sticky; top: 60px;" >
            <a href="#topic1" style="text-decoration: none;" >
                <div class="list"><span class="light"></span><span>Required Document</span></div>
            </a>
            <a href="#topic2" style="text-decoration: none;">
                <div class="list"><span class="light"></span><span>Advantages</span></div>
            </a>
            <a href="#topic3" style="text-decoration: none;">
                <div class="list"><span class="light"></span><span>Process</span></div>
            </a>

        </div> 
    </div>
    <div class="col-lg-6">
        <div id="topic1">
            <h4 style="text-align:center;">DOCUMENT REQUIRED </h4>
            <br>
            <div class="row"> 
               <div class="container text-center">
                  <div class="row align-items-center">
                    <div class="col" >
                        <div>
                            <img src="images1/camera.png">
                        </div>
                        <h5>Passport Size Photograph</h5>
                    </div>
                    <div class="col" >
                        <div>
                            <img src="images1/pan-card.png">
                        </div>
                        <h5>PAN Card</h5>
                    </div>
                    <div class="col" >
                       <div>
                           <img src="images1/electricity-bill.png">
                       </div>
                       <h5>Copy of Electricity Bill</h5>
                   </div>
                   <div class="col" >
                       <div>
                           <img src="images1/Office-Proof.png">
                       </div>
                       <h5>Registered Office Proof</h5>
                   </div>                         
               </div>
           </div>
       </div>
       <br>
       <div class="row"> 
           <div class="container text-center">
              <div class="row align-items-center">
                <div class="col" >
                    <div>
                        <img src="images1/Aadhaar-Card.png">
                    </div>
                    <h5>Copy of Aadhaar Card</h5>
                </div>
                <div class="col" >
                    <div>
                        <img src="images1/Address-Proof.png">
                    </div>
                    <h5>Address Proof</h5>
                </div>
                <div class="col" >
                   <div>
                       <img src="images1/Residential-Proof.png">
                   </div>
                   <h5>Residential Proof</h5>
               </div>
               <div class="col" >
                   <div>
                       <img src="images1/noc.png">
                   </div>
                   <h5>No Objection Certificate</h5>
               </div>                         
           </div>
       </div>
   </div>
</div>   
<br><br><br>

<div id="topic2">
 <h4 style="text-align:center;">THE ADVANTAGES OF REGISTRATION OF COMPANY</h4>
 <!-- Start title section -->
 <div class="title">
     <!-- <h1 style="text-align:center; color: #ffb900;">What We Do ?</h1> -->
     <!-- Section's title goes here -->
     <p  style="text-align:center;"> Setup & Delivered 2,00,000 + New Companies and Business Licenses for MSMEs in India and continuing…</p>
     <!--Simple description for section goes here. -->
 </div>
 <!-- <div class="row"> -->
   <br>
   <div class="row">

     <!-- <div class="container"> -->

      <div class="container">

             <div class="row"> 
                <div class="container text-center">
                   <div class="row align-items-center">
                     <div class="col" >
                         <div>
                             <img src="images1/camera.png">
                         </div>
                         <h5>Passport Size Photograph</h5>
                     </div>
                     <div class="col" >
                         <div>
                             <img src="images1/pan-card.png">
                         </div>
                         <h5>PAN Card</h5>
                     </div>
                     <div class="col" >
                        <div>
                            <img src="images1/electricity-bill.png">
                        </div>
                        <h5>Copy of Electricity Bill</h5>
                    </div>
                    <div class="col" >
                        <div>
                            <img src="images1/Office-Proof.png">
                        </div>
                        <h5>Registered Office Proof</h5>
                    </div>                         
                </div>
            </div>
        </div>


             <div class="row"> 
                <div class="container text-center">
                   <div class="row align-items-center">
                     <div class="col" >
                         <div>
                             <img src="images1/camera.png">
                         </div>
                         <h5>Passport Size Photograph</h5>
                     </div>
                     <div class="col" >
                         <div>
                             <img src="images1/pan-card.png">
                         </div>
                         <h5>PAN Card</h5>
                     </div>
                     <div class="col" >
                        <div>
                            <img src="images1/electricity-bill.png">
                        </div>
                        <h5>Copy of Electricity Bill</h5>
                    </div>
                    <div class="col" >
                        <div>
                            <img src="images1/Office-Proof.png">
                        </div>
                        <h5>Registered Office Proof</h5>
                    </div>                         
                </div>
            </div>
        </div>

          <div class="line" style="margin-bottom: 50px;">
              <div class="col-lg-3 col-sm-12">
                  <div class=" card11 text-center">
                      <!-- <div class="oval"><img class="card-img-top" src="images1/isoRg.png" alt=""></div> -->
                      <div class="card-body">
                          <h3 class="card-title">BORROWING CAPACITY</h3>
                          <h6 class="card-title">A company enjoys better avenues for borrowing of funds. It can issue debentures,
secured as well as unsecured, accept deposits from the public, etc.</h6>

                      </div>
                  </div>
              </div>  
              <div class="col-lg-3 col-sm-12">
                  <div class="card11 text-center" >

                    <!-- <a href="#" target="_blank" style="text-decoration: none;" rel="noopener"> -->
                      <div class="card-body">
                          <h3 class="card-title">TAXATION</h3>
                          <h6 class="card-title">There is a wider range of allowances and tax deductible costs that can be offset
against company's profits.</h6>  
                      </div>
                                      <!-- <h5 class="txtshadow zoom-in">TRADEMARK REGISTRATION</h5>
                                      <p class="card-text">Nullam quis libero in lorem accumsan sodales. Nam vel nisi
                                      eget.</p> -->
                                      <!-- </a>   -->
                                  </div>
                              </div>  


                              <div class="col-lg-3 col-sm-12">
                                  <div class="card11 text-center" >
                                      <div class="card-body">
                                          <h3 class="card-title">RAISING MONEY FROM PUBLIC</h3>
                                          <h6 class="card-title">Limited liability conferred
upon the company's directors and shareholders.</h6>  
                                      </div>           
                                  </div>
                              </div>


                              <div class="col-lg-3 col-sm-12">
                                  <div class="card11 text-center" >
                                      <div class="card-body">
                                          <h3 class="card-title">LIMITED LIABILITY LEGAL ENTITY OR RECOGNITION</h3>
                                          <h6 class="card-title">Easy transferability of business and ownership also helps in attracting venture
capital funding for new business ventures.</h6>  
                                      </div>           
                                  </div>                        
                              </div>

                              <div class="col-lg-3 col-sm-12">
                                  <div class="card11 text-center" >
                                      <div class="card-body" style="padding:.5rem ;">
                                          <h3 class="card-title">DUAL RELATIONSHIP</h3>
                                          <h6 class="card-title">It is also possible for
a person to be in control of a company and at the same time be in its employment. Thus, a
person can at the same time be a shareholder, director,
creditor and employee of the company.</h6>  
                                      </div>           
                                  </div>  
                              </div>

                              


                          </div>
                      </div>
                      <!-- </div> -->

                  </div>
              </div>
          <div id="topic3">
            
        </div>
    </div>
    <div class="col-lg-3">

        <div class="container"style="position: sticky; top: 60px;">
          <form method="post" action="send.php" class="form-horizontal" role="form" id="LaedsForm" >
            <!-- <i class="fas fa-paper-plane"></i> -->
            <!-- <span class="text-success"style="display: flex;justify-content: center;"><?php if($_SESSION['success']){echo $_SESSION['success'];} ?></span> -->
            <div class="input-group">
              <!-- <label>Full Name</label> -->
              <input type="text" name="name" placeholder="Enter your name"  id="contact_name" onkeyup="validatName()" >
              <span id="name_error"><?php echo $nameErr; ?></span>
            </div>

            <div class="input-group">
              <!-- <label>Phone No.</label> -->
              <input type="tel" name="contactno" placeholder="123 456 7890" id="contact_phone" onkeyup="validatPhone()" >
              <span id="phone_error"class="text-danger"><?php echo $contactnoErr; ?></span>
            </div>

            <div class="input-group">
              <!-- <label>Email Id</label> -->
              <input type="email" name="email" placeholder="Enter Email" id="contact_email" onkeyup="validatEmail()" >
              <span id="email_error"class="text-danger"><?php echo $emailErr; ?></span>
            </div>   
            <br>
            <div class="input-group" style="max-width:88% ;">
                 <!-- <label class="">Services </label> -->
                 <!-- <div class="col-lg-12"> -->
                   <select  name="services[]" class="form-control">
                     <option value="">--Please choose an option--</option>
                     <option value="Trademark" <?php if(in_array('Trademark',$alltypeOfServices)) {  echo "selected";}else{echo "";}  ?>>Trademark</option>
                     <option value="Copyright" <?php if(in_array('Copyright',$alltypeOfServices)) {  echo "selected";}else{echo "";}  ?>>Copyright</option>
                     <option value="Patent" <?php if(in_array('Patent',$alltypeOfServices)) {  echo "selected";}else{echo "";}  ?>>Patent</option>
                     <option value="Company Formation" <?php if(in_array('Company Formation',$alltypeOfServices)) {  echo "selected";}else{echo "";}  ?>>Company Formation</option>
                     <option value="ISO" <?php if(in_array('ISO',$alltypeOfServices)) {  echo "selected";}else{echo "";}  ?>>ISO</option>
                     <option value="Website Design" <?php if(in_array('Website Design',$alltypeOfServices)) {  echo "selected";}else{echo "";}  ?>>Website Design</option>

                   </select>
                   <span class="text-danger"><?php echo $typeOfSerrvicesErr; ?></span>
                 <!-- </div> -->
               </div>
               <!-- <br> -->

            <div class="input-group">
              <!-- <label>City</label> -->
              <input type="text" name="city" placeholder="Enter City name"  id="contact_name" onkeyup="validatCity()" >
              <span id="city_error"class="text-danger"><?php echo $cityErr; ?></span>
            </div>   
               
            <!-- <div class="input-group">
              <label>Your Message</label>
              <textarea rows="5" placeholder="Enter your message" id="contact_massage" onkeyup="validatMassage()"></textarea>
              <span id="massage_error"></span>
            </div> -->

            <div class="input-group">
              <!-- <label for="location" class="col-sm-3 control-label">Generate OTP:</label> -->
              <!-- <div class="col-sm-12"> -->
               <!-- <input type="text" id="otp" name="otp" placeholder="otp" class="form-control"  >
               <span><strong>Note : </strong> Please Verify Mobile No. To submit the form. <a href="javascript:void(0)" onclick="SendOtp()">Verify</a></span>
               <span class="text-danger"><?php echo $otpErr; ?></span> -->
               <!-- <br>
               <br> -->
                    <!-- <div   class="col-sm-12" > -->
                      <input id="button" type="submit" name="save" class="" value="Submit">
                    <!-- </div> -->

             </div>

          <!-- <button>Submit</button> -->
          <span id="submit-error" id="contact_submit" onkeyup="validatSubmit()"></span>
         
        </form>
        </div>

    </div>
</div>
</div>    
 


<br><br><br>
<!-- <div class="row-"> -->
    <div class="container-fluid" style="display: flex; " >
        <!-- <div class="col-lg-6 col-sm-6"></div> -->
        <div class="col-lg-6 col-sm-6">
            <h3 style="text-align: center;">Procedure for registration of a logo / monogram </h3>
            <img src="images1/patentProcess.png" alt="">
        </div>
        <div class="col-lg-6 col-sm-6">
            <h3 style="text-align: center;">Procedure for registration for service
            Industries : </h3>
            <img src="images1/patentProcess.png" alt="">
        </div>
    </div>
<!-- </div> -->


<footer class="container-fluid" id="gtco-footer">
 <div class="container">
     <div class="row">
         <div class="col-lg-6" id="contact">
             <h4> Contact Us </h4>
             <input type="text" class="form-control" placeholder="Full Name">
             <input type="email" class="form-control" placeholder="Email Address">
             <textarea class="form-control" placeholder="Message"></textarea>
             <a href="#" class="submit-button">READ MORE <i class="fa fa-angle-right" aria-hidden="true"></i></a>
         </div>
         <div class="col-lg-6">
             <div class="row">
                 <div class="col-6">
                     <h4>Company</h4>
                     <ul class="nav flex-column company-nav">
                         <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                         <li class="nav-item"><a class="nav-link" href="#">Services</a></li>
                         <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                         <li class="nav-item"><a class="nav-link" href="#">News</a></li>
                         <li class="nav-item"><a class="nav-link" href="#">FAQ's</a></li>
                         <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                     </ul>
                     <h4 class="mt-5">Fllow Us</h4>
                     <ul class="nav follow-us-nav">
                         <li class="nav-item"><a class="nav-link pl-0" href="#"><i class="fa fa-facebook"
                           aria-hidden="true"></i></a></li>
                           <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-twitter"
                              aria-hidden="true"></i></a></li>
                              <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-google"
                                  aria-hidden="true"></i></a></li>
                                  <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-linkedin"
                                      aria-hidden="true"></i></a></li>
                                  </ul>
                              </div>
                              <div class="col-6">
                                 <h4>Services</h4>
                                 <ul class="nav flex-column services-nav">
                                     <li class="nav-item"><a class="nav-link" href="#">Trademark Registration</a></li>
                                     <li class="nav-item"><a class="nav-link" href="#">Copyright Registration</a></li>
                                     <li class="nav-item"><a class="nav-link" href="#">Design Registration</a></li>
                                     <li class="nav-item"><a class="nav-link" href="#">Patent Registration</a></li>
                                     <li class="nav-item"><a class="nav-link" href="#">ISO Registration</a></li>
                                     <li class="nav-item"><a class="nav-link" href="#">Formation OF Company</a></li>
                                     <li class="nav-item"><a class="nav-link" href="#">Web Servieces</a></li>
                                     <li class="nav-item"><a class="nav-link" href="#">Branding Services</a></li>
                                     <li class="nav-item"><a class="nav-link" href="#">Other Registration Services</a></li>
                                 </ul>
                             </div>
                             <div class="col-12">
                                 <p>&copy; 2023. All Rights Reserved.</p>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </footer>



                           <!--  <div id="contact" class="contact">
                                <div class="section secondary-section">
                                    <div class="container">
                                        <div class="title">
                                            <h1>Contact Us</h1>
                                            <p>Duis mollis placerat quam, eget laoreet tellus tempor eu. Quisque dapibus in purus in dignissim.</p>
                                        </div>
                                    </div>
                                    <div class="map-wrapper">
                                        <div class="map-canvas" id="map-canvas">Loading map...</div>
                                        <div class="container">
                                            <div class="row-fluid">
                                                <div class="span5 contact-form centered">
                                                    <h3>Say Hello</h3>
                                                    <div id="successSend" class="alert alert-success invisible">
                                                        <strong>Well done!</strong>Your message has been sent.</div>
                                                        <div id="errorSend" class="alert alert-error invisible">There was an error.</div>
                                                        <form id="contact-form" action="php/mail.php">
                                                            <div class="control-group">
                                                                <div class="controls">
                                                                    <input class="span12" type="text" id="name" name="name" placeholder="* Your name..." />
                                                                    <div class="error left-align" id="err-name">Please enter name.</div>
                                                                </div>
                                                            </div>
                                                            <div class="control-group">
                                                                <div class="controls">
                                                                    <input class="span12" type="email" name="email" id="email" placeholder="* Your email..." />
                                                                    <div class="error left-align" id="err-email">Please enter valid email adress.</div>
                                                                </div>
                                                            </div>
                                                            <div class="control-group">
                                                                <div class="controls">
                                                                    <textarea class="span12" name="comment" id="comment" placeholder="* Comments..."></textarea>
                                                                    <div class="error left-align" id="err-comment">Please enter your comment.</div>
                                                                </div>
                                                            </div>
                                                            <div class="control-group">
                                                                <div class="controls">
                                                                    <button id="send-mail" class="message-btn">Send message</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="container">
                                            <div class="span9 center contact-info">
                                                <p>123 Fifth Avenue, 12th,Belgrade,SRB 11000</p>
                                                <p class="info-mail">ourstudio@somemail.com</p>
                                                <p>+11 234 567 890</p>
                                                <p>+11 286 543 850</p>
                                                <div class="title">
                                                    <h3>We Are Social</h3>
                                                </div>
                                            </div>
                                            <div class="row-fluid centered">
                                                <ul class="social">
                                                    <li>
                                                        <a href="">
                                                            <span class="icon-facebook-circled"></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <span class="icon-twitter-circled"></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <span class="icon-linkedin-circled"></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <span class="icon-pinterest-circled"></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <span class="icon-dribbble-circled"></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <span class="icon-gplus-circled"></span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- Contact section edn -->
                                <!-- Footer section start -->
                                <!-- <div class="footer">
                                    <pShared by <i class="fa fa-love"></i><a href="#">hemraj</a>
                                    </p>
                                </div> -->
                                <!-- Footer section end -->
                                <!-- ScrollUp button start -->
                                <div class="scrollup">
                                    <a href="#">
                                        <i class="icon-up-open"></i>
                                    </a>
                                </div>



                                <!-- ScrollUp button end -->
                                <!-- Include javascript -->
                                <script src="js/jquery.js"></script>
                                <script type="text/javascript" src="js/jquery.mixitup.js"></script>
                                <!-- <script type="text/javascript" src="js/bootstrap.js"></script> -->
                                <script type="text/javascript" src="js/modernizr.custom.js"></script>
                                <script type="text/javascript" src="js/jquery.bxslider.js"></script>
                                <script type="text/javascript" src="js/jquery.cslider.js"></script>
                                <script type="text/javascript" src="js/jquery.placeholder.js"></script>
                                <script type="text/javascript" src="js/jquery.inview.js"></script>
                                <!-- Load google maps api and call initializeMap function defined in app.js -->
                                <script async="" defer="" type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false&callback=initializeMap"></script>
                                <!-- css3-mediaqueries.js for IE8 or older -->
            <!--[if lt IE 9]>
                <script src="js/respond.min.js"></script>
            <![endif]-->
               <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script> -->

               <script type="text/javascript" src="js/app.js"></script>

           <!--     <script src="dropdown-19/js/jquery-3.3.1.min.js"></script>
               <script src="dropdown-19/js/popper.min.js"></script>
               <script src="dropdown-19/js/bootstrap.min.js"></script>
               <script src="dropdown-19/js/owl.carousel.min.js"></script>
               <script src="dropdown-19/js/main.js"></script> -->


               <script type="text/javascript">
                   (function($) {
                       'use strict';

                       jQuery(document).on('ready', function(){

                           $('a.page-scroll').on('click', function(e){
                               var anchor = $(this);
                               $('html, body').stop().animate({
                                   scrollTop: $(anchor.attr('href')).offset().top - 50
                               }, 1500);
                               e.preventDefault();
                           });     

                       });                       
                   })(jQuery);
               </script>

               <script type="text/javascript">
               // Acc
                 $(document).on("click", ".naccs .menu div", function() {
                    var numberIndex = $(this).index();

                    if (!$(this).is("active")) {
                        $(".naccs .menu div").removeClass("active");
                        $(".naccs ul li").removeClass("active");

                        $(this).addClass("active");
                        $(".naccs ul").find("li:eq(" + numberIndex + ")").addClass("active");

                        var listItemHeight = $(".naccs ul")
                        .find("li:eq(" + numberIndex + ")")
                        .innerHeight();
                        $(".naccs ul").height(listItemHeight + "px");
                    }
                });
            </script> 


            <script type="text/javascript">
                class FibonacciSphere {
                    #points;

                    get points() {
                        return this.#points;
                    }

                    constructor(N) {
                        this.#points = [];

                        const goldenAngle = Math.PI * (3 - Math.sqrt(5));

                        for (let i = 0; i < N; i++) {
                            const y = 1 - (i / (N - 1)) * 2;
                            const radius = Math.sqrt(1 - y ** 2);
                            const a = goldenAngle * i;
                            const x = Math.cos(a) * radius;
                            const z = Math.sin(a) * radius;

                            this.#points.push([x, y, z]);
                        }
                    }
                }


                class TagsCloud {
                    #root;
                    #size;
                    #sphere;
                    #tags;
                    #rotationAxis;
                    #rotationAngle;
                    #rotationSpeed;
                    #frameRequestId;

                    constructor(root) {
                        this.#root = root;
                        this.#size = this.#root.offsetWidth;
                        this.#tags = root.querySelectorAll('.tag');
                        this.#sphere = new FibonacciSphere(this.#tags.length);
                        this.#rotationAxis = [1, 0, 0];
                        this.#rotationAngle = 0;
                        this.#rotationSpeed = 0;

                        this.#updatePositions();
                        this.#initEventListeners();
                        this.#root.classList.add('-loaded');
                    }

                    #initEventListeners() {
                        window.addEventListener('resize', this.#updatePositions.bind(this));
                        document.addEventListener('mousemove', this.#onMouseMove.bind(this));
                    }

                    #updatePositions() {
                        const sin = Math.sin(this.#rotationAngle);
                        const cos = Math.cos(this.#rotationAngle);
                        const ux = this.#rotationAxis[0];
                        const uy = this.#rotationAxis[1];
                        const uz = this.#rotationAxis[2];

                        const rotationMatrix = [
                            [
                                cos + (ux ** 2) * (1 - cos),
                                ux * uy * (1 - cos) - uz * sin,
                                ux * uz * (1 - cos) + uy * sin,
                                ],
                            [
                                uy * ux * (1 - cos) + uz * sin,
                                cos + (uy ** 2) * (1 - cos),
                                uy * uz * (1 - cos) - ux * sin,
                                ],
                            [
                                uz * ux * (1 - cos) - uy * sin,
                                uz * uy * (1 - cos) + ux * sin,
                                cos + (uz ** 2) * (1 - cos)
                                ]
                            ];

                        const N = this.#tags.length;

                        for (let i = 0; i < N; i++) {
                            const x = this.#sphere.points[i][0];
                            const y = this.#sphere.points[i][1];
                            const z = this.#sphere.points[i][2];

                            const transformedX =
                            rotationMatrix[0][0] * x
                            + rotationMatrix[0][1] * y
                            + rotationMatrix[0][2] * z;
                            const transformedY =
                            rotationMatrix[1][0] * x
                            + rotationMatrix[1][1] * y
                            + rotationMatrix[1][2] * z;
                            const transformedZ =
                            rotationMatrix[2][0] * x
                            + rotationMatrix[2][1] * y
                            + rotationMatrix[2][2] * z;

                            const translateX = this.#size * transformedX / 2;
                            const translateY = this.#size * transformedY / 2;
                            const scale = (transformedZ + 2) / 3;
                            const transform =
                            `translateX(${translateX}px) translateY(${translateY}px) scale(${scale})`;
                            const opacity = (transformedZ + 1.5) / 2.5;

                            this.#tags[i].style.transform = transform;
                            this.#tags[i].style.opacity = opacity;
                        }
                    }

                    #onMouseMove(e) {
                        const rootRect = this.#root.getBoundingClientRect();
                        const deltaX = e.clientX - (rootRect.left + this.#root.offsetWidth / 2);
                        const deltaY = e.clientY - (rootRect.top + this.#root.offsetHeight / 2);
                        const a = Math.atan2(deltaX, deltaY) - Math.PI / 2;
                        const axis = [Math.sin(a), Math.cos(a), 0];
                        const delta = Math.sqrt(deltaX ** 2 + deltaY ** 2);
                        const speed = delta / Math.max(window.innerHeight, window.innerWidth) / 10;

                        this.#rotationAxis = axis;
                        this.#rotationSpeed = speed;
                    }

                    #update() {
                        this.#rotationAngle += this.#rotationSpeed;

                        this.#updatePositions();
                    }

                    start() {
                        this.#update();

                        this.#frameRequestId = requestAnimationFrame(this.start.bind(this));
                    }

                    stop() {
                        cancelAnimationFrame(this.#frameRequestId);
                    }
                }


                function main() {
                    {
                        const root = document.querySelector('.tags-cloud');
                        const cloud = new TagsCloud(root);

                        cloud.start();
                    }

                    {
                        const cursor = document.getElementById('cursor');
                        const isActivated = false;

                        document.addEventListener('mousemove', (e) => {
                            if (!isActivated) {
                                cursor.classList.add('-activated');
                            }

                            cursor.style.transform =
                            `translateX(${e.clientX}px) translateY(${e.clientY}px)`;
                        });
                    }
                }


                document.addEventListener('DOMContentLoaded', () => {
                    main();
                });

            </script>    

            <!-- <script src="https://code.jquery.com/jquery-3.6.1.js"></script> -->
            <!-- <script src="assets/js/jquery-1.9.1.min.js"></script> -->
            <script type="text/javascript">
              $(document).ready(function(){
                 $('.list').click(function(){
                  const value = $(this).attr('data-filter');
                  if(value == 'all'){
                      $('.itemBox').show('1000');
                  }
                  else{
                      $('.itemBox').not('.'+value).hide('1000');
                      $('.itemBox').filter('.'+value).show('1000');
                  }
              }); 

                 $('.list').click(function(){
                    $(this).addClass('active').siblings().removeClass('active');
                });
             });
         </script>
         <script src="js1/jquery-3.3.1.slim.min.js"></script>
         <script src="js1/popper.min.js"></script>
         <script src="owl-carousel/owl.carousel.min.js"></script>
         <script src="js1/bootstrap.min.js"></script>
         <script src="js1/main.js"></script>

         <script>window.onscroll = function() {
          stickyHeader();
      };

      var header = document.getElementById("header");
      var sticky = header.offsetTop;

      function stickyHeader() {
          if (window.pageYOffset > sticky) {
            header.classList.add("sticky");
        } else {
            header.classList.remove("sticky");
        }
    }

</script>

<script type="text/javascript">
// Acc
    $(document).on("click", " .menu div", function() {
        var numberIndex = $(this).index();

        if (!$(this).is("active")) {
            $(" .menu div").removeClass("active");
        // $("  ul li").removeClass("active");

            $(this).addClass("active");
        // $(" ul").find("li:eq(" + numberIndex + ")").addClass("active");

    //     var listItemHeight = $(".naccs ul")
    //         .find("li:eq(" + numberIndex + ")")
    //         .innerHeight();
    //     $(" ul").height(listItemHeight + "px");
    // }
        };
    </script>



<script type="text/javascript">// script for tab steps
$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {

    var href = $(e.target).attr('href');
    var $curr = $(".process-model  a[href='" + href + "']").parent();

    $('.process-model li').removeClass();

    $curr.addClass("active");
    $curr.prevAll().addClass("visited");
});
</script>

<script src="./form/script.js"></script>
         </body> 
         <?php 
         unset($_SESSION['errors']);
         unset($_SESSION['notmatched']);
         unset($_SESSION['postval']);
         unset($_SESSION['typeofflat1']);
         unset($_SESSION['approxbudget1']);
         session_destroy();

         ?>
</html>