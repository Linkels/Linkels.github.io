<!DOCTYPE html>

<html>

  <head>
     <meta name="viewport" content="width=device-width"/>
     <link rel="shortcut icon" href="image/logo-280px-.ico">
      <script src="scripts/main.js"></script>

       <link href="styles/Pstyle.css" rel="stylesheet" type="text/css">
        <meta charset="UTF-8">
         <title>Horaire</title>
          </head>

<?php include "header.php";?>



<body>
  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

  <div class="FexG6"><center><h1 class="clr-6">Les horaire pour s'entraîner<br> au code au l'auto-école:</h1></center></div>
  <div class="FinG3"><center><p class="clr-3"><FONT face="Times New Roman"><FONT size="17">lundi a vendredi de <br>8H au  17H</FONT></FONT></p></center></div>
  <div class="FexD5"><center><h1 class="clr-6">Les horaire possibles pour les<br> heures de conduite:</h1></center></div>
  <div class="FinD4"><center><p class="clr-3"><FONT face="Times New Roman"><FONT size="17">lundi a vendredi de <br>13H au 17H</FONT></FONT></center></p></div></body>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


<script language="JavaScript">



  var position=0;
  var msg="AUTO-ECOLE PILOT'IN";
  var msg="     "+msg;
  var longue=msg.length;
  var fois=(70/msg.length)+1;
  for(i=0;i<=fois;i++) msg+=msg;
  function textdefil() {
  document.form1.deftext.value=msg.substring(position,position+70);
  position++;
  if(position == longue) position=0;
  setTimeout("textdefil()",100);
  }
  window.onload = textdefil;

</script>



</body>


<form name="form1">
  <div align="center">
  <input type="text" name="deftext" size=70>
  </div>
  </form>

<?php include "footer.php";?>

</html>
