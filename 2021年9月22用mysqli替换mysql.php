Fatal error: 

Uncaught Error: Call to undefined function mysql_connect()

in /storage/emulated/0/htdocs/4s5rWoteZipp9_XINGAIZippo_from_bf_ff_dlt_ssq_00000000000/21x21dlt_myaql_21.php:116 
Stack trace: #0 {main} thrown in /storage/emulated/0/htdocs/4s5rWoteZipp9_XINGAIZippo_from_bf_ff_dlt_ssq_00000000000/21x21dlt_myaql_21.php on

 line 116



从PHP5.0开始mysql_connect()就不推荐使用了，


到PHP7.0就直接被废弃了，

如果PHP为7.0及以上版本的话用mysqli_connect()代替


其它同名函数也换成相应的 mysqli_method



<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>JS彩票随机控位生成数字代码 - 大乐透mysqli李，复活版版</title>




<script src="jquery.min.js">
</script>
<script>
$(document).ready(function(){
  $("#hide").click(function(){
    $("div").hide();
  });
  $("#show").click(function(){
    $("div").show();
  });
});
</script>


<body>




<h1 style=color:#888888>




数据库随机动态换位，等于保留，不等替

换，新逆向思维拉伸。



</h1>


<h1  style=color:#888888>如果你点击“显示” 按钮，我将会出现。</h1>



<button id="show"  style="font-size:35px;


color:#FF0000"  >显示前区动态</button>


<h1  style=color:#888888>如果你点击“隐藏” 按钮，我将会消失。</h1>


<button id="hide"  style="font-size:35px;

color:#FF0000"  >隐藏前区动态</button>




<h1 style=color:#888888>

数据库动态换位，换位关联，并用传值随

机，<br>


数据库随机换位，......


</h1>


<br><hr>

<a href="91x22dlt_myaql_91.php" style="font-size:35px;">开始动态换位</a>


<br><hr>





<div  style="display:none";>



<?php

/*
error_reporting(E_ALL^E_NOTICE^E_WARNING);     //php关闭错误报告

*/

echo "<h1  style=color:#FF0000>前区动态换位         
  
 </>";
 
 
$dbhost = 'localhost';  // mysql服务器主机地址
$dbuser = 'root';            // mysql用户名
$dbpass = '';          // mysql用户名密码
$con = mysqli_connect($dbhost, $dbuser, $dbpass);

if(! $con)
{
    die('Could not connect: ' . mysqli_error());
}
echo '数据库连接成功！';

 echo  "<br>";

if (!$con)
  {
  die('Could not connect: ' . mysqli_error());
  }
//"dltxuanhaoku"是库名
mysqli_select_db($con, "dltxuanhaoku");

$kongwei=mt_rand(5,5);

$result = mysqli_query($con, "SELECT * FROM `dltxh5`ORDER BY rand() LIMIT $kongwei");         // 'dltxh5' 是数据库表名称 


 $i=1;


while($row = mysqli_fetch_array($result))
      
       {            

echo  "第".$i."=";                                 
  
  echo $row['xh5'] . " " ;      



  $i++;

   
   //$row['xh5']  xh5是数据库表中的列 名称 
   
       }

   echo "<h1 style=color:#FF0000>后区动态换位          
    </>";        



$kongwei2=mt_rand(2,2);


$result = mysqli_query($con, "SELECT * FROM `dltxh2`   ORDER BY rand() LIMIT $kongwei2");            

//'dltxh2'是数据库表名


 $i=1;


while($row = mysqli_fetch_array($result))
  {          
               

echo  "第".$i."=";            
                          
 echo    $row['xh2'] . " " ;   
                           


  $i++;

     }
        
      mysqli_close($con);




/*

例子举例说明以双色球为例

{//
ssqxuanhaoku是库名称


ssqxh6是表名称

//}


{//
$row['xh6']  xh6是数据库表中的列名称

一库，两表，一表一列，一表一列，一个列里面添加数字1_33,一个列里面添加数字1_16,一个列名xh6,一个列名xh1,注意是一表一列.数据类型int,
一个表建一个列，在列里面添加数据

insert添加，把数字写在value里保存即可


//}


*/

?>


</div>



</body>

</html>
