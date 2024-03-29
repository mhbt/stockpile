<style>
    .navbar .form-control, .navbar .input-group-addon {
        border: 0;
        background: transparent;
    }
    .input-group,.navbar .dropdown {
        margin-top: 17px;
    }
    .navbar .dropdown-menu a{
      color: #f45e11 !important;
    }
    .navbar li a, .navbar .navbar-brand {
          color: #fff !important;
      }
      .navbar-nav li a:hover, .navbar-nav li.active a {
         // color: #f4511e !important;
          background-color: #fff !important;
      }
      .navbar-default .navbar-toggle {
          border-color: transparent;
          color: #fff !important;

      }
    .navbar-default .glyphicon-login {
        color: white !important;
    }
    .navbar-default {
       // background-color: #f4511e !important;
        background-image: url(assets/images/sign_up_background.jpg);
        background-position: center;
        color: white !important;
        padding: 1.5% !important;
        margin-bottom: 2% !important;
    }
    @media screen and (max-width: 768px) {
        .navbar-default .input-group {
            float: right;
        }
      }
       @media screen and (max-width: 768px) {
        .carousel {
            display:none;
        }
      }
    .no-pm {
        padding:0 !important;
        margin: 0 !important;
    }
    .float-right {
        float:right !important;
    }
  .carousel-inner > .item > img,
.carousel-inner > .item > a > img {
  width: 50%;
  margin:auto;
}
    .glyphicon-chevron-right, .glyphicon-chevron-left, .carousel-indicators li {
        color: #f4511e;
    }
    .caret {
        float:right;
        margin:auto;
        margin-top: 7px;
        margin-left: 2px;
        margin-right:2px;
    }
    .li-orange a{
        color:#f4511e !important;
    }
    .li-orange a:hover {
        //background-color: #f4511e !important;
        background-image: url(assets/images/sign_up_background.jpg);
        background-position: right;
        color:white !important;
        transition: background-image 3s;
    }
    .container-left {
        background-color:  rgba(244,81,30,0.04);
        float: left !important;
        width: 20% !important;
        padding: 0 !important;
       height:  1000px !important;
        padding-top: 6px !important;
    }
    .container-right {
        float: left !important;
        width: 80% !important;
        padding: 0 !important;
        margin:  0% !important;
        //background-color:  rgba(244,81,30,0.04);

    }
    .carousel-indicators li {
          border-color: #f4511e !important;
      }
      .carousel-indicators li.active {
          background-color: #f4511e;
      }
    .featured-products {
       padding: 5px !important;
    }

    .panel {
            border: 1px solid #f4511e !important; 
            border-radius:0;
            transition: box-shadow 0.3s;
            width: 200px;
            margin: 30px 5px 3px 20px !important;
            float:left;
        }
    .panel-body img {
        height: 160px !important;
        width: 150px !important;
    }
        .panel:hover {
            box-shadow: 5px 0px 40px rgba(0,0,0, .2);
        }
        .panel-heading {
            color: #fff !important;
            background-image: url(assets/images/sign_up_background.jpg);
            background-position: left;
            padding: 25px;
            border-bottom: 1px solid transparent;
            border-top-left-radius: 0px;
            border-top-right-radius: 0px;
            border-bottom-left-radius: 0px;
            border-bottom-right-radius: 0px;
        }

        .panel-footer {
            background-color: #fff !important;
        }

        .panel-footer h3 {
            font-size: 32px;
        }

        .panel-footer h4 {
            color: #aaa;
            font-size: 14px;
        }
     .panel-footer .btn:hover {
            border: 1px solid #f4511e;
            background-color: #fff !important;
            color: #f4511e;
            background-image: none;
        }

    .panel-footer .btn {
        margin: 15px 0;
        background-image: url(assets/images/sign_up_background.jpg);
        background-position: right;
        color: #fff;
    }
    .featured-products h2 {
        color: #f4511e;
    }
    .sections-wrapper {
        height: 100%;
        width : 100%;
        padding: 0 !important;
        padding-top: 90px !important;
        margin: 0 !important;
    }
    .footer {
        height: 100px !important;
        width: 100% !important;
        float:none;
        text-align: center;
        color:white;
        background-image: url(assets/images/sign_up_background.jpg);
        background-position: bottom;
        padding: 50px !important;
        margin: 0 !important;
    }
    body {
        font: 400 15px Lato, sans-serif;
        line-height: 1.8;
        color: #818181;
    }

    .jumbotron {
        font-family: Montserrat, sans-serif;
    }

    .navbar {
        font-family: Montserrat, sans-serif;
    }
    #sign-up button {
        margin:auto;
        width: 100%;
        margin: 15px 0;
        background-image: url(assets/images/sign_up_background.jpg);
        background-position: right;
        color: #fff;
        transition :box-shadow 0.3s
    }
    #sign-up .btn:hover, #sign-up .btn-default:hover{
        border: 1px solid #f4511e !important;
        background-color: #fff;
        background-image: none;
        color: #f4511e;
        box-shadow: 10px 10px 10px rgba(244,81,30, .2);
    }
    .navbar .btn-default  {
        color:#f4511e !important;
    }
    /*styling for user*/
    .user-jumbotron{
        width : 70%;
        margin: auto !important;
        margin-top: 7% !important;
        margin-bottom: 7% !important;
        text-align: center;
        background-color: rgba(244,81,30,0.01) !important;
        box-shadow: 10px 10px 10px 2px rgba(244,81,30, 0.5);
        border-image: url(assets/images/sign_up_background.jpg) 20 stretch;
        border-left: 1px solid transparent;
        border-top: 10px solid transparent;
        border-top-left-radius: 10px;
        border-bottom-left-radius: 10px;
    }
    .table th{
        text-align: center;
    }
    .user-jumbotron .table-hover tr:hover{
        color: #fff;
        background-color: rgba(244,81,30,0.5);
    }
    .btn-request {
        margin-top: 25px;
        float:right !important;
    }
     .admin-jumbotron{
        padding-top:50px;
        width : 100%;
        margin: auto !important;
        margin-bottom: 7% !important;
        text-align: center;
        background-color: rgba(244,81,30,0.01) !important;
        box-shadow: 10px 10px 10px 2px rgba(244,81,30, 0.5);
        border-image: url(assets/images/sign_up_background.jpg) 20 stretch;
        //border-left: 1px solid transparent;
        //border-top: 10px solid transparent;
        //border-top-left-radius: 10px;
        //border-bottom-left-radius: 10px;
    }
    .admin-jumbotron .table-hover tr:hover{
        color: #fff;
        background-color: rgba(244,81,30,0.5);
    }
    .navbar-header .breadcrumb a{
            color: #f4511e !important;
            
        }
        .navbar-form .input-group, .navbar-form {
            margin: 5px;
        }
    .heading-orange {
        color: #f4511e;
        padding: 20px;
        text-transform: uppercase;
        text-align: center;
    }
    .heading-main {
        padding: 150px;
    }
    .order-jumbotron{
        width : 70%;
        padding: 2px !important;
        margin: auto !important;
        margin-top: 1% !important;
        margin-bottom: 1% !important;
        background-color: rgba(244,81,30,0.01) !important;
        box-shadow: 10px 10px 10px 2px rgba(244,81,30, 0.5);
        border-image: url(assets/images/sign_up_background.jpg) 20 stretch;
        border-left: 1px solid transparent;
        border-top: 10px solid transparent;
        border-radius: 10px;
    }
    .ordermanager-jumbotron{
        padding-top:50px;
        padding-bottom:50px;
        width : 100%;
        margin: auto !important;
        margin-bottom: 7% !important;
        background-color: rgba(244,81,30,0.01) !important;
        box-shadow: 10px 10px 10px 2px rgba(244,81,30, 0.5);
        border-image: url(assets/images/sign_up_background.jpg) 20 stretch;
        //border-left: 1px solid transparent;
        //border-top: 10px solid transparent;
        //border-top-left-radius: 10px;
        //border-bottom-left-radius: 10px;
    }
    .order-glyphicon {
        color: #f4511e;
    }
    .order-inf {
        float:left;
        width: 50%;
    }
    .customer-inf {
        float:right;
        width: 50%;
    }
    .ordermanager-jumbotron p {
        font-size: 1em !important;
        margin-left: 25px;
    }
    .ordermanager-jumbotron .table-hover tr:hover{
        color: #fff;
        background-color: rgba(244,81,30,0.5);
    }
     .ordermanager-jumbotron .table{
        text-align: center;
    }
    .ordermanager-jumbotron form input{
        margin-left: 40% !important;
        margin-right: 40% !important;
        margin-bottom: 5px;
    }
    .admin-jumbotron .table th {
      background-image: url(assets/images/sign_up_background.jpg);
     background-position: bottom;   
    color: #fff !important;
    }
    .sales-total {
        float:right !important;
        border-radius: 10px;
        box-shadow: 5px 0px 10px 5px rgba(244,81,30, .2);
    }
    .bg-red {
        background-color: rgba(244,81,30,.5);
        color: #fff;
    }
  .rate-jumbotron{
        width : 30%;
        margin: auto !important;
        margin-top: 7% !important;
        margin-bottom: 7% !important;
        text-align: center;
        background-color: rgba(244,81,30,0.01) !important;
        box-shadow: 2px 2px 10px 2px rgba(244,81,30, 0.5);
        //border-image: url(assets/images/sign_up_background.jpg) 20 stretch;
        border-left: 1px solid transparent;
        border-top: 10px solid transparent;
        border-top-left-radius: 10px;
        border-bottom-left-radius: 10px;
    }
    .rate-jumbotron .form-control {
        margin-top: 20px;
        margin-bottom: 20px;
    }
    .rate-jumborton img {
        height : 200px !important;
        width : 200px !important;
    }
    .heading-orange-less-pm {
        color: #f4511e;
        padding: 2px;
        text-transform: uppercase;
        text-align: center;
    }
    body ~ .cart {
        position: relative;
    }
    .cart .panel{
        z-index: 1;
        position: fixed;
        right:1%;
        bottom:0%;
        padding: 0;
        border: none !important;
        width : 300px;
        margin: 0 !important;
        box-shadow: 1px 1px 10px 2px rgba(0,0,0, .5);
        
    }
    .left {
        float:left !important;
        width : 90%;
    }
    .right {
        float:right !important; 
        width: 10%;
    }
    .bg-cart {
        background-color: #ffae42 !important;
    }
    .cart .panel .panel-title {
        width: 100%;
        padding: 5px;
        color: #fff;
        border: 1px solid rgba(0,0,0,0.2);
    }
    .cart .panel .panel-title :hover {
        cursor: pointer !important;
    }
    .panel .cart-name {
        width: 90%;
    }
    .cart-inside .item {
        width :100%;
    }
    .item-name {
        text-transform: uppercase;
        font-size: 15px;
    }
    .item .item-remove {
        background: none;
    }
    .cart .panel-body {
        //border-bottom: 1px solid #ffae42;
    }
    .cart .panel-footer {
        width: 100%;
        text-transform: uppercase;
        font-size: 15px;
        margin-bottom: 5px !important;
    }
    .cart .panel-footer a {
        color: black;
        font-size: 20px;
        margin-bottom: 5px !important;
    } 
   .cart .panel-footer a :hover{
        color: #ffae42;
    } 
</style>