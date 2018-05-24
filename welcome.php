<html>
<body>
    <div>
    <h2>
        Thank You</h2> <br><h1> <?php echo $_POST["firstname"]; ?> <?php echo $_POST["lastname"]; ?></h1><h2> <br>for visiting!<br>
            Your email address is: </h2><br> <h1><?php echo $_POST["email"]; ?>
    </h1>
            <h2> Here's a potato!</h2>
            <img src="potato.jpeg">
    </div>
            
    
    <div>
        <br>
        <br>
        <h1>List of Visitors</h1>
    <h2>
       <?php
            $file = fopen("log.txt","r");
            $txt = "";
            while(! feof($file))
              {
              $current = fgets($file);
              $txt .= $current;
              $Result = str_replace( "\\n", '<br />', $current ); 
              echo $Result;
              
              }
            fclose($file);
            $file = fopen("log.txt","a+");
              $txt =$_POST["firstname"] . ' ' .$_POST["lastname"]. ' ' . $_POST["email"] . "\\n";
            
            
              fwrite($file, $txt);

            fclose($file);
        ?>
    </h2>
    </div>
            
</body>
</html>



