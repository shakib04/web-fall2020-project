  
<?php
    require_once "session-code.php";
?> 


<html>
    <head>
        <title>BookEvent</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<style>
      .container {
         position: relative;
         font-family: Arial;
		
		 }

      .text-block {
         position: absolute;
		 width:90%;
         height: 615px;
         top: 30px;
         left: 60px;
         background-color: whitesmoke;
         color: black;
         padding-left: 20px;
         padding-right: 20px;
		 }
		 .image{
           position: absolute;
		   width:500px;
		   height: 1000px;
           top: 30px;
           right:450px;
         }
		 div.absolute{
           position:absolute;
           left: 400px;
          
         }
		 div.absolute1{
           position:absolute;
           left: 460px;
		   top: 550px;
		   color: blue;
          
         }
		 div.absolute2{
           position:absolute;
           left: 350px;
		   top: 400px;
		   color: blue;
          
         }
		 div.absolute3{
           position:absolute;
           left: 350px;
		   top: 430px;
		   color: blue;
          
         }
		 div.absolute4{
           position:absolute;
           left: 350px;
		   top: 460px;
		   color: blue;
          
         }
		 
		 
</style>	   
    </head>
    <body>
	     <?php include "mypagehead.php";?>
		  <form action="" method="post" onsubmit="return doBookEventValidation()">  
	    <center>
		 <div class="container">
          <img src="images/web1.jpg" alt="Wedding" style="width:100%;">
         <div class="text-block">
		 <div class="image">
		 <p><img src="images/planner1.jpg" alt="Wedding" width="350" height="300"></p>
		 </div>
		 <div class="absolute">
         <h1>Liz King                500+</h1>
         <p>Event Planner Superhero.Tech Obsessed.</p>
         <p>Event are the most powerful tool for creating a strong brand and community!</p>
		 <p>Greater Dhaka City Area || Events Services</P>
		 <p>Current : Dhaka University,techsytalk,Inc,Liz King Events</p>
		 <p>Education: Dhaka University</p>
		 <p>Recommendations:12 people have recommended Liz</p>
		 <p>Websites: Liz King Events Website</p>
         </div>
		 <div class="absolute2">
		 Event type :  
         <select style="width: 164px;">  
         <option value="Select">--Select--</option>}  
         <option value="Marriage">Marriage</option>  
         <option value="FamilyFunction">Family Function</option>  
         <option value="Birthday">Birthday Party</option>  
         <option value="Anniversary">Anniversary Party</option>  
         <option value="University">University Event</option>  
         </select>
		 </div>
		 <div class="absolute3">
		 <tr>
                <td>Event Price:</td>
                <td><input type="text" id="price" placeholder="Price" name="price"><span id="err_price" style="color:red;">*</span><br></td>
            </tr>
		 
		 </div>
		 <div class="absolute4">
		 <tr>
                <td>Comment:</td>
                <td><textarea  id="comment" name="comment" rows="5" cols="20"></textarea><span id="err_comment" style="color:red;">*</span><br></td>
            </tr>
		 </div>
		 <div class="absolute1">
		 <tr>

                <td><input type="submit" name="Submit" value="Submit"></td>
            </tr>
		 </div>
         
	  
	 </div> 
     </div>
      </center>

		 
		 
		 
		 <script src="../scripts/bookeventvalidation.js"></script>
		 
		 
		 
		 </body>
</html>