<!DOCTYPE html>
<html lang="nl">
   <head>
      <meta http-equiv="content-type" content="text/html; charset=UTF-8">
      <?php include 'Taak2_functies.php';?>
      <link rel="stylesheet" href="Taak2.css">
   </head>
   <body>
      <div class="firstBlock">
         <span class="span">Hijstabel</span>
         <div class="logo">
            <img src="Taak2.jpg" width="7%" height="7%">
            <div class="menuBalk">
               <ul>
                  <li><a href="">Home</a></li>
               </ul>
            </div>
         </div>
         <br>
         <div class="secondBlock">
            <form action="" method="post">
               <?php
                  echo getSelectOption();
                  ?>
               <input type="submit" name="toon_opdracht" value="Toon opdracht">
            </form>
            <?php
               if(!empty($_POST['select_option']) && isset($_POST['toon_opdracht'])) {
               	echo toonOpdracht();
               }
               ?>
         </div>
         <div class="exitButton"><button onclick="exit()">exit</button></div>
      </div>
   </body>
</html>