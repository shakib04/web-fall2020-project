<?php
    
    require_once "../models/db_connection.php";
?>
<?php
    $username="";
	$err_username="";
    $Full_Name="";
	$err_Full_Name="";
    $email="";
    $err_email="";
	$phone_number="";
	$err_phone_number="";
	$full_address="";
	$err_full_address="";
    $countValid= 0;
    $Full_Name = $columns[0]['Full_Name'];
    $username = $columns[0]['username'];
    $email = $columns[0]['email'];
    $phone_number = $columns[0]['phone_number'];
    $full_address = $columns[0]['full_address'];

	
	if(isset($_POST["OK"])){
        //FULL NAME VALIDATION
        if(empty($_POST["Full_Name"])){
			$err_Full_Name="Full Name Required";	
		}
		else{
			$Full_Name = htmlspecialchars($_POST["Full_Name"]);
			$countValid++;
        }
		//User name validation
		if(empty($_POST["username"])){
			$err_username="Username Required";
				
		}
		else{
			$username = htmlspecialchars($_POST["username"]);
			$countValid++;
        }
        
        //EMAIL VALIDATION
        if(empty($_POST["email"])){
            $err_email="Please Enter Email!";
            
        }
        elseif(strpos($_POST["email"],"@") && strpos($_POST["email"],".")){
            if(strpos($_POST["email"],"@") < strpos($_POST["email"],".")){
                $email=htmlspecialchars($_POST["email"]);
				$countValid++;
            }
            else{
                $err_email="'@' Must be before '.'.";
                
            }
        }
        else{
            $err_email="Email must contain '@' and '.'.";
          
        }
		
	//phone validation	
    if (empty(trim($_POST["phone_number"]))) {
        $err_phone_number = "<span style='color:red;'> Phone Number is Required </span>";
    } elseif (!is_numeric($_POST["phone_number"])) {
        $err_phone_number = "<span style='color:red;'> Number is not valid (only numeric) </span>";
    } elseif (strpos($_POST["phone_number"], " ")) {
        $err_phone_number = "<span style='color:red;'> Space is not Allowed </span>";
    } else {
        $phone_number = htmlspecialchars($_POST["phone_number"]);
        $CountValid++;
    }
	
    //address validation 

    if (empty(trim($_POST["full_address"]))) {
        $err_full_address = "<span style='color:red;'> Address is Required </span>";
    } else {
        $full_address = htmlspecialchars($_POST["full_address"]);
         $CountValid++;
    }
	}
        
        
		if($countValid==5){
           
		   
        }	
		profileDetails();
	
		function profileDetails(){
        $query="SELECT * FROM all_registered_users WHERE username='" . $_SESSION['username'] . "'";
        $columns= getColumsValue($query);
        return  $columns ;
       }
 
       
			
			
		
	
	
?>