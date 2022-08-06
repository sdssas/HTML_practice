<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML_PHP struggle</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    
    <div class="flex-container">

        <div class="header">     
               <?php include 'logo.inc.php' ?>         
               <?php include 'menu.inc.php' ?>	   
        </div>       
     
        <div class="about_me">
         
          <h1>  <?php  echo $p  ?> </h1>

            <div class="data">
                <div class="image-wrapper">
                    <?php  echo '<img src="./img/123.jpg">'; ?>                    
                </div>

                <div class="fullname">
                    <p> My name is
                    <?php echo $name, ' ', $surname; 
		echo 'from', ' ', $city; ?>                                      
                    </p> 
                    <p> I am
                    <?php  echo $age;   ?>          
                    years old </p>
                    <p> I've learned: </p>
	        <ul class="iam">
		<li> how to create variables  </li>
                    <li> and perform simple operations to them </li>
		</ul>
		  
                </div>
            </div>
</div>
</div>
           
             <div class="knowledge">  
<p class="text">For instance, here you can check the number of full days between any date and today:</p>
<br>    
            <form action="action_page.php" method="POST">
  <label for="appt">Select date:</label>
  <input type="date" id="appt" name="appt">
 <input name="submit" type="submit" value="CALCULATE">
  </form>

             
</div>


<div>
         <p class= "text"> 
The following function counts the number of this site visits:                      
                  <?php include("knowledge.inc.php"); ?> </p> 
</div>
 
 <div>
 

            <div class="article">
                <p class="text">
                    This line has to contain GDPR terms, but not, I have no idea how to collect your information. So, keep calm. 
                </p>
            </div>
        </div>

            <?php include 'footer.inc.php' ?>

    </div>


</body>
</html>