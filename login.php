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

input[type=email], select {
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
	 border-bottom-color:color: #FFB7B7;
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

<body  background="image/001-subtle-light-pattern-background-texture.jpg">




<br>

<br><h1>تسجيل </h1>
<h3><p>انشاء حساب جديد!</p></h3>

  <?php
    include "include/conect.php";
    
          

     if(isset($_POST['register'])){
    

            $username = $_POST['username'];
            $password = $_POST['password'];
            $password2 = $_POST['password2'];
            $email = $_POST['email'];
            
            
            $searchemail = "select * from users where email = '$email'";
            $searchemailApplay = mysqli_query($conect,$searchemail);
            $numemail = mysqli_num_rows($searchemailApplay);
            
            $searchusername = "select * from users where username = '$username'";
            $searchusernameApplay = mysqli_query($conect,$searchusername);
            $numusername = mysqli_num_rows($searchusernameApplay);
            


            if( $numemail != 0  ){
              echo "<div class='errorr'>الإيميل مسجل مسبقا</div>";
            
            }elseif( $numusername != 0  ){
              echo "<div class='errorr'>الاسم  مسجل مسبقا</div>";
            
            }elseif( $password != $password2  ){
              echo "<div class='errorr'>كلمة المرور غير متطابقة</div>";
            
            }
            else{

             $insertUser = "INSERT INTO users 
             (username,pass,email) 
             VALUES ('$username','$password','$email')";
         
            $insertUserapply = mysqli_query($conect,$insertUser);
         
        
         
            if(isset($insertUserapply)){
         
            echo "<div class='success'>تم تسجيل بياناتك بنجاح ويمكنك تسجيل الدخول لحسابك</div>";
            echo "<meta http-equiv='refresh' content='2; url=Entry.php' />";
        
            }
        
        
          }
    
  }

?>
   
          
<form action="login.php" method="post">		  
<center><p><label>
    <input type="text"  name="username" placeholder="اسم المستخدم" required="" />
</label></p></center>
 
 
<center> <p><label>
   <input  type="password" name="password" placeholder="كلمة المرور" required="" />
   
</label></p></center>
<center> <p> <label>
 
   <input type="password" name="password2" placeholder="تأكيد كلمة المرور" required="" /></label></p></center>
   
   <center> <p><label>
   <input type="email" name="email" placeholder="البريد الإلكتروني" required="" /></label></p></center>
   
<center><input type="submit" name="register" value="تسجيل" /></center></a>

</form>
</body>
</html>
