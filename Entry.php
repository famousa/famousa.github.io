<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style type="text/css">
input[type=text], select {
	width: 20%;
    background-color: white;
    color: black;
    padding: 17px 20px;
    margin: 10px 0; 
	font-family: "Times New Roman", Times, serif;
	margin-right: 100px;
    margin-left: 100px;
	text-align: center;   
    font-size: 15px;
}

input[type=password], select {
	width: 20%;
    background-color: white;
    color: black;
    padding: 17px 20px;
    margin: 10px 0; 
	font-family: "Times New Roman", Times, serif;
	margin-right: 100px;
    margin-left: 100px;
	text-align: center;
    font-size: 15px;
}
	 
input[type=submit] {
    width: 5%;
    background-color: #FFF;
    color: #FFB7B7;
    padding: 5px 20px;
    margin: 5px 0;
   font-family: "Times New Roman", Times, serif;
 margin-right: 179px;
    margin-left: 130px;
}

h1 {color: #FFB7B7;
text-align: center;
}

h3 {color: #FFB7B7; 
    text-align: center;
    
} 



 input[type=submit] button class {
	 border-bottom-color:#FFF;
 }


.success{
  font-size: 20px;
  color: green;
  text-align: center;
  font-weight: bold;  
}

.errorr{
  font-size: 20px;
  color: red;
  text-align: center;
  font-weight: bold;  
}

</style>
 

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body background="image/001-subtle-light-pattern-background-texture.jpg">




<br>
<br>
<br>
<br><h1> تسجيل الدخول</h1>

<?php


include "include/conect.php";



if(isset($_POST['Enter'])){
    
    $username = $_POST['username'];
    $password = $_POST['password'];

      
    $searchforuse = "select * from users where username = '$username' and pass = '$password'  ";
    $searchforuserapplay = mysqli_query($conect,$searchforuse);
    $numforuser = mysqli_num_rows($searchforuserapplay);
    $rowforuser = mysqli_fetch_assoc($searchforuserapplay); 
  
       
      if($numforuser == 0 ){
        echo "<div class='errorr'>اسم المستخدم أو الرقم السري غير صحيح</div>";
       }
       else {

            $_SESSION['ssessionId'] = $rowforuser['iduser'];
            $_SESSION['ssessionUser'] = $rowforuser['username'];
            $_SESSION['ssessionPassword'] = $rowforuser['pass'];
            $_SESSION['ssessionEmail'] = $rowforuser['email'];
             echo "<meta http-equiv='refresh' content='0; url=test.php' />";
 
        }
    }
    
     ?>
 
          
<form action="Entry.php" method="post">	  
<center><p><label>
    <input type="text"  name="username" placeholder="الاسم" required="">
</label></p></center>
 
 
<center> <p><label>
   <input type="password" name="password" placeholder="كلمة المرور" required="">
   
</label></p></center>

 <center><input type="submit" name="Enter" value="دخول"></center>
</form>	
</body>
</html>
