<?php session_start(); ?>
<?php
if(isset($_SESSION['ssessionUser']) && isset($_SESSION['ssessionPassword']) ){

$iduser = $_SESSION['ssessionId'];    
$usern =  $_SESSION['ssessionUser'];
$pass =   $_SESSION['ssessionPassword'];
$Email =   $_SESSION['ssessionEmail'];
}else{
    
header("Location: Entry.php");  
exit();     
   
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="rtl">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?php
   include "include/conect.php";
   

  if(isset($_POST['test1'])){
    
    $Q1 = $_POST['answer1'];
    $Q2 = $_POST['answer2'];
    $Q3 = $_POST['answer3'];
    $Q4 = $_POST['answer4'];
    $Q5 = $_POST['answer5'];
    $Q6 = $_POST['answer6'];
    $Q7 = $_POST['answer7'];
    $Q8 = $_POST['answer8'];
    $Q9 = $_POST['answer9'];
    $Q10 = $_POST['answer10'];
    
    $result = 0 ;
    

    
    
      if($Q1 == 1){
        $result++;
      }
      if($Q2 == 3){
        $result++;
      }
      if($Q3 == 3){
        $result++;
      }
      if($Q4 == 2){
        $result++;
      }
      if($Q5 == 3){
        $result++;
      }
      if($Q6 == 2){
        $result++;
      }
      if($Q7 == 3){
        $result++;
      }
      if($Q8 == 1){
        $result++;
      }
      if($Q9 == 2){
        $result++;
      }
      if($Q10 == 2){
        $result++;
      }
      
      
      $searchResultKamy = "select * from testkamy where iduser = '$iduser'";
      $applaySearchResultKamy = mysqli_query($conect,$searchResultKamy);
      $numSearchResultKamy = mysqli_num_rows($applaySearchResultKamy);
 
  
       if($numSearchResultKamy == 0){
      
      $insertResult = "insert into testkamy (iduser,resultTest) values('$iduser','$result')";
      $applay = mysqli_query($conect,$insertResult);
      }else{
        
      $updateResult = "update testkamy set resultTest = '$result' where iduser = '$iduser'";
      $applay = mysqli_query($conect,$updateResult);
       
      }
      
      
      
      if(isset($applay)){
        echo "<meta http-equiv='refresh' content='0; url=test.php' />";
       }
      
      
  }
  
 
  ?>

 <form action="QuantitativeTesting.php" method="POST">
<marquee direction="right" scrolldelay="120"/>
<b><font color="Red" size= 	3/>عزيزتي الطالب / الطالبه  
الاختبار جزء من العمليه التعليميه لاينبغي الخوف منه بل الاستعداد له </color></i></marquee></b>

<br />

 

<br />
<div align="center"><b><font color="blue"><font face="Traditional Arabic">السؤال ( 1</font></font></b><b><font color="blue"><font face="Traditional Arabic"> )</font></font></b><br />


<div align="center"><b><font color="black"><font face="Traditional Arabic">أدخر محمد مبلغ من المال قيمته ص ريال</font></font></b><b><font color="black"><font face="Traditional Arabic">اشترى بربعه كرة قدم وبثلثي الباقي بدلة رياضية</font></font></b><b><font color="black"><font face="Traditional Arabic"> .</font></font></b></div> <br />
<div align="center"><b><font color="black"><font face="Traditional Arabic">فكم تبقى معه من مدخراته</font></font></b><b><font color="black"><font face="Traditional Arabic">؟</font></font></b></div> <br />


 <div align= "center"/>
  <input type="radio" name="answer1" value="1" required=""/>   ص / 4<br>
  <input type="radio" name="answer1" value="2">  ص / 3 <br>
  <input type="radio" name="answer1" value="3">   ص / 3



 <br />
 <br />
 <br />
 <br />
<div align="center"><b><font color="blue"><font face="Traditional Arabic">السؤال ( 2</font></font></b><b><font color="blue"><font face="Traditional Arabic"> )</font></font></b></div> <br />
<div align="center"><b><font color="black"><font face="Traditional Arabic">مزرعة أبقار تبيع</font></font></b><b><font color="black"><font face="Traditional Arabic">عادة 200 بقرة شهرياً ، في بداية هذا الشهر باعت 30 بقرة ، كم بقرة</font></font></b></div> <br />
<div align="center"><b><font color="black"><font face="Traditional Arabic">يلزم</font></font></b><b><font color="black"><font face="Traditional Arabic">بيعها حتى نهاية الشهر حتى يصبح عدد المبيعات 75 % من المبيعات المعتادة ؟</font></font></b></div> <br />

 <div align= "center"/>
  <input type="radio" name="answer2" value="1" required="" /> 720<br>
  <input type="radio" name="answer2" value="2">80 <br>
  <input type="radio" name="answer2" value="3">120


 <br />
 <br />
 <br />
 <br />
 <br />
<div align="center"><b><font color="blue"><font face="Traditional Arabic">السؤال ( 3</font></font></b><b><font color="blue"><font face="Traditional Arabic"> )</font></font></b></div> <br />
<div align="center"><b><font color="black"><font face="Traditional Arabic">إذا كانت النسبة بين</font></font></b><b><font color="black"><font face="Traditional Arabic">زوايا مثلث هي 1 : 3 : 5 فما قياس أصغر زواياه ؟</font></font></b></div> <br />

 <div align= "center"/>
  <input type="radio" name="answer3" value="1" required="" /> 120<br>
  <input type="radio" name="answer3" value="2">40 <br>
  <input type="radio" name="answer3" value="3"> 20



 <br />
 <br />
 <br />
 <br />
<div align="center"><b><font color="blue"><font face="Traditional Arabic">السؤال ( 4</font></font></b><b><font color="blue"><font face="Traditional Arabic"> )</font></font></b></div> <br />
<div align="center"><b><font color="black"><font face="Traditional Arabic">للمعادلة س^2 + 6 س</font></font></b><b><font face="Traditional Arabic"> + </font></font></b><b><font color="black"><font face="Traditional Arabic">جـ = 0 جذر مكرر عندما جـ = 0</font></font></b></div> <br />
 
  <input type="radio" name="answer4" value="1" required="" /> -9<br>
  <input type="radio" name="answer4" value="2">9 <br>
  <input type="radio" name="answer4" value="3"> 3

 <br />
 <br />
<br />
<br />
 <br />
<br />
<div align="center"><b><font color="blue"><font face="Traditional Arabic">السؤال ( 5</font></font></b><b><font color="blue"><font face="Traditional Arabic"> )</font></font></b><br /></div>
 <br />
<div align="center"><b><font color="black"><font face="Traditional Arabic">يقضي محمد ربع يومه في الدراسة وثلث يومه في</font></font></b><b><font color="black"><font face="Traditional Arabic">النوم و ( 1/ 8 ) من يومه في ممارسة الرياضة ،</font></font></b></div> <br />
<div align="center"><b><font color="black"><font face="Traditional Arabic">فما الكسر الذي يعبر الوقت</font></font></b><b><font color="black"><font face="Traditional Arabic">الذي يقضية في الأعمال الأخرى ؟</font></font></b></div> <br />

  <input type="radio" name="answer5" value="1" required="" />  1 + ( (1/4 ) + (1/3 ) + (1/8 ) ) <br>
  <input type="radio" name="answer5" value="2">1 - ( (1/4 ) + (1/3 ) - (1/8 ) ) <br>
  <input type="radio" name="answer5" value="3">  1 - ( (1/4 ) + (1/3 ) + (1/8 ) )



 <br />
 <br />
 <br />
 <br />
 <br />
 <br />
<br />
<div align="center"/><b><font color="blue"><font face="Traditional Arabic">السؤال ( 6</font></font></b><b><font color="blue"><font face="Traditional Arabic"> ) </font></font></b><br />
 <br />
<div align="center"><b><font color="black"><font face="Traditional Arabic">صف به 78 طالباً ، اشترك منهم 41 طالب</font></font></b><b><font color="black"><font face="Traditional Arabic">بالنشاط الثقافي و 22 طالب بالنشاط الصحي </font></font></b></div> <br />
<div align="center"><b><font color="black"><font face="Traditional Arabic">و 9 طلاب اشتركوا بالنشاطين</font></font></b><b><font color="black"><font face="Traditional Arabic">الثقافي والصحي . فما عدد الطلاب الذين لم يشتركوا بأي نشاط ؟</font></font></b></div> <br />

  <input type="radio" name="answer6" value="1" required="" /> 15<br>
  <input type="radio" name="answer6" value="2">24 <br>
  <input type="radio" name="answer6" value="3"> 33


 <br />
 <br />
 <br />
 <br />
 <br />
<br />

<div align="center"/><b><font color="blue"><font face="Traditional Arabic">السؤال ( 7 </font></font></b><b><font color="blue"><font face="Traditional Arabic"> ) </font></font></b><br />
 <br />
<div align="center"><b><font color="black"><font face="Traditional Arabic">خزان ماء طوله 120 سم ، وعرضه 50 سم ،</font></font></b><b><font color="black"><font face="Traditional Arabic">وارتفاعه 60 سم صببنا فيه 150 لتر من الماء</font></font></b><b><font color="black"><font face="Traditional Arabic"> .</font></font></b></div> <br />
<div align="center"><b><font color="black"><font face="Traditional Arabic">فما ارتفاع الماء في الخزان</font></font></b><b><font color="black"><font face="Traditional Arabic">؟</font></font></b></div> <br />

  <input type="radio" name="answer7" value="1" required="" /> 50 سم <br>
  <input type="radio" name="answer7" value="2">20 سم<br>
  <input type="radio" name="answer7" value="3"> 25 سم<br />

 <br />
 <br />
 <br />
 <br />
 <br />
<br />
<div align="center"><b><font color="blue"><font face="Traditional Arabic">السؤال ( 8 </font></font></b><b><font color="blue"><font face="Traditional Arabic"> )</font></font></b><br />
 <br />
<div align="center"><b><font color="black"><font face="Traditional Arabic">يقطع ثلاث عمال 3 ألواح خشبية إلى قطع</font></font></b><b><font color="black"><font face="Traditional Arabic">متساوية في 3 دقائق</font></font></b><b><font color="black"><font face="Traditional Arabic"> .</font></font></b></div> <br />
<div align="center"><b><font color="black"><font face="Traditional Arabic">كم لوحاً يقطعها 9 عمال في 4 ساعات ؟</font></font></b></div> <br />

<input type="radio" name="answer8" value="1" required="" /> 720 <br>
  <input type="radio" name="answer8" value="2">80 <br>
  <input type="radio" name="answer8" value="3"> 20


</div><br />
 <br />
 <br />
 <br />
 <br />
 <br />
 <br />
<br />
<div align="center"><b><font color="blue"><font face="Traditional Arabic"> السؤال ( 9 ) </font></font></b><b><font color="blue"><font face="Traditional Arabic"> </font></font></b><br /></div>
 <br />
<div align="center"><b><font color="black"><font face="Traditional Arabic">تنطلق سيارتان من نقطه واحدة وفي نفس الوقت</font></font></b><b><font color="black"><font face="Traditional Arabic">بالاتجاه نفسه فإذا كانت سرعة السيارة الأولى</font></font></b></div> <br />
<div align="center"><b><font face="Traditional Arabic"><font color="black">80 </font></font></b><b><font color="black"><font face="Traditional Arabic">كم/س وسرعة السيارة</font></font></b><b><font color="black"><font face="Traditional Arabic">الثانية 60 كم/س فما المسافة بين السيارتين بعد ساعة من انطلاقهما ؟</font></font></b></div> <br />

  <input type="radio" name="answer9" value="1" required="" /> 70 كم  <br>
  <input type="radio" name="answer9" value="2"> 20 كم  <br>
  <input type="radio" name="answer9" value="3"> 140 كم 


<br />
<br />
<b><font color="blue"><font face="Traditional Arabic">السؤال ( 10</font></font></b><b><font color="blue"><font face="Traditional Arabic"> )</font></font></b><br />
 <br />
<div align="center"><b><font color="Black"><font face="Traditional Arabic">اشترى محمد ثوب بثمن يزيد 80 ريال عن ثمن</font></font></b><b><font color="Black"><font face="Traditional Arabic">ثوب سلمان ،</font></font></b></div> <br />
<div align="center"><b><font color="Black"><font face="Traditional Arabic">وكان ثوب سلمان يقل 30 ريال عن ثمن ثوب خالد الذي ثمنه 90 ريال</font></font></b><b><font color="Black"><font face="Traditional Arabic"> .</font></font></b></div> <br />
<div align="center"><b><font color="Black"><font face="Traditional Arabic">فما ثمن ثوب محمد ؟</font></font></b></div> <br />

  <input type="radio" name="answer10" value="1" required="" /> 60 ريال <br>
  <input type="radio" name="answer10" value="2"> 140 ريال <br>
  <input type="radio" name="answer10" value="3"> 100 ريال



<table>

<br />
<td>
<input type="submit" name="test1" value="النتيجة" /></td>

<td><button type="reset">الغاء</button></a></td>

<td><a href="test.php"><button type="button" >أعاده</button></a></td>
 <br />
 <br />
 <br />
<br />
</table>

		<!-- / message -->
</form>
</body>
</html>

