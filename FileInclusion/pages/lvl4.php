<html>  
   <head>
      <meta charset="utf-8">
      <link rel="shortcut icon" href="../../Resources/hmbct.png" />
      <title> Level 4 </title>
   </head>

   <body>
      
      <div style="background-color:#c9c9c9;padding:15px;">
      <button type="button" name="homeButton" onclick="location.href='../../homepage.html';">Home Page</button>
      <button type="button" name="mainButton" onclick="location.href='fileinc.html';">Main Page</button>      
      </div>
      
      <div align="center"><b><h3>This is Level 4</h3></b></div>
      <div align="center">
      <a href=lvl4.php?file=1.php><button>Button</button></a>
      <a href=lvl4.php?file=2.php><button>The Other Button!</button></a>
      </div>
      
      <?php     
        echo "</br></br>";

        if (isset( $_GET[ 'file' ])) {
          
          $secure4 = basename($_GET[ 'file' ]);

          $allowed_files = ['1.php', '2.php'];
         
        if (in_array($secure4, $allowed_files)) {

              include($secure4);

            } else {

              echo "Access denied.";

            }      
        }              
      ?>
   </body>
</html>

