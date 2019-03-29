<?php error_reporting(0); ?>
<?PHP //print_r($_POST) ?>
<?PHP //PRINT_R($_GET) ?>
<?php
function change($num){
$arr=array(
1=>'a',
2=>'b',
3=>'c',
4=>'d',
5=>'e',
6=>'f',
7=>'g',
8=>'h',
9=>'i',
0=>'j'
);
$nums_arr=explode("\r\n",chunk_split($num,1));
foreach($nums_arr as $n){
if($n!=''){
$str.=$arr[$n];
}
}
return $str;

}

echo change("12345333");
?>
<?php
	error_reporting(0);
	header("content-type: text/html; charset=utf-8");
	//print_r($_POST);
	//print_r($_GET);
	//require_once('common.php'); // 引入公共文件，其中实现了SQL注入漏洞检查的代码 
	$usernum= trim($_GET['usernum']);
	//echo $usernum;
	//$pwd = md5($_POST['pwd']);
	//$password = trim($_POST['password']);
	
	$errmsg = '';
	if (!empty($usernum)) { // 用户填写了数据才执行数据库操作
	
	
	$db = @new mysqli("127.0.0.1", "root", "", "test");
	mysqli_query($db, 'set names utf8');
	
	//mysql_query("set names 'utf8'");//这就是指定数据库字符集，一般放在连接数据库后面就系了 
	//mysql_select_db("test"); 
	if (mysqli_connect_errno()) {
	$errmsg = "数据库连接失败!\n";
	}else {
	$sql = "SELECT * FROM mapuser WHERE usernum='$usernum'";
	//$sql = "SELECT * FROM mapuser where usernum='黑龙江'";
	//echo $sql;
	// mysql_set_charset('utf8',$db);
	$rs = $db->query($sql);
	//print_r($rs);
	//echo("sql行数".$rs->num_rows); 
		$newsNum=$rs->num_rows;  
		//echo $newsNum;
		while ( $row = $rs->fetch_array() ) {  
			//echo $row[0];
			$shengname=$row[username];
			
			$row[password];
			$shengnum=$row[usernum];
					
			}  
		
		
		$db->close();
		}		 
		//echo $shengnum; 			 
					 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf8" />
<title>省级地图</title>
<meta name="description" content="#" />
<link href="static/css/default2.css" rel="stylesheet" type="text/css" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
 <!-- 引入 Bootstrap -->
<!-- <link href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">-->
<link rel="stylesheet" type="text/css" href="static/css/main.css">
<script type="text/javascript" src="static/js/echarts.min.js"></script>
<!-- jQuery (Bootstrap 的 JavaScript 插件需要引入 jQuery) -->
<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
<!-- 包括所有已编译的插件 -->
<!--       <script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- 全国344个市、区、州对应的数字编号 -->
<script type="text/javascript" src="static/js/citymap.js"></script>

<!-- 悬浮框 -->
<style type="text/css">
.content{
    display:none;
    width:250px;
    height:70px;
    border-radius:10px;
    padding:20px;
    position:relative;
    top:15px;
    left:80px;
    background-color:#2F4056;
}
pre{
	display:none;
}
</style>



<script type="text/javascript">
$(document).ready(function(){

$(".h3class1").mouseover(function(){
$(this).next().find("pre").css("display","block"); 
//$(".h3class1").onlick(function(){
//$(this).find("pre").css("display","none"); 
//$(this).next().find("pre").css("display","none");
//  });	
});	

$(".h3class2").mouseover(function(){
$(this).next().find("pre").css("display","block"); 
//$(".h3class2").onlick(function(){
//$(this).find("pre").css("display","none");
//$(this).next().find("pre").css("display","none");  
//  });	
});	

}); 
</script>


<!--  -->

</head>
<body>
<div id="outer">
	<div id="header">
		<h1><a href="#"><?php echo $shengname ?>数据展示</h1>
		<!--<h2>by <a href="#"></a></h2>-->
	</div>
	<div id="menu">
		<ul>
			<!--<li class="first"><a href="###" accesskey="1" title=""></a></li>
			<li><a href="#" accesskey="2" title=""></a></li>
			<li><a href="###" accesskey="3" title=""></a></li>
			<li><a href="#" accesskey="4" title=""></a></li>-->
		</ul>
	</div>
	<div id="content">
		<div id="tertiaryContent">
			<h3>RSRP电平图表</h3>
			<img src="./images/rsrp.png" width=250 height=200>
			<p></p>
			<h3>RSRP栅格区间图表</h3>
			<img src="./images/rsrpsg.png" width=250 height=200>
			<ul>
			
				<li><a href="#">图表说明</a></li>
			
			</ul>
			<h3>图例</h3>
			<ul>
			<img src="./images/dianping.png" width=100 height=80>
			
				<li><a href="#">图例说明</a></li>

			</ul>
			<div class="xbg"></div>
		</div>
<div id="primaryContentContainer">
	<div id="primaryContent">
			<h2><?php echo $shengname ?>数据分析</h2>
				<p><strong></strong>
<div id="main" style="width: 100%;height:800px;">
<div id="div1" class="my_class"  ><img src="./images/chongqin.png" width=800 height=600>		</div>
				</div>				
				<p></p>
				<p></p>
				<h3>详细信息</h3>
				<ul>
					<li><a href="#">信息1信息信息信息信息信息信息信息信息信息信息信息信息信息信息信息信息信息信息信息信息信息.</a></li>
					<li><a href="#">信息2.信息2.信息2.信息2.信息2.信息2.信息2.信息2.信息2.信息2.信息2.信息2.信息2.信息2.信息2.信息2.信息2.信息2.信息2.信息2.信息2.信息2.</a></li>
					<li><a href="#">信息3.信息3.信息3.信息3.信息3.信息3.信息3.信息3.信息3.信息3.信息3.信息3.信息3.信息3.信息3.信息3.信息3.信息3.信息3.信息3.信息3.信息3.信息3.信息3.</a></li>
				</ul>
				<h3>分析情况</h3>
				<blockquote>
						<p>分析分析分析分析分析分析分析分析分析分析分析分析分析分析分析分析分析分析分析分析分析分析分析分析分析分析分析分析分析分析分析分析分析分析分析分析分析分析分析分析分析分析分析分析分析分析分析分析分析分析分析分析分析分析分析分析分析分析分析分析分析分析分析分析分析分析分析分析分析分析分析分析分析分析分析分析分析分析分析分析分析分析分析分析分析分析..........................</p>
				
				</blockquote>
				<h3>表格，图等</h3>
				
			</div>
		</div>
<div id="secondaryContent">
<h2><?php echo $shengname ?></h2>


			<?php  
			
			
			$nianfen=array();
			
			$db = @new mysqli("127.0.0.1", "root", "", "test");
				mysqli_query($db, 'set names utf8');
			if (mysqli_connect_errno()) {
				$errmsg = "数据库连接失败!\n";
			}else {
				$sql = "SELECT * FROM mapproject WHERE sheng='$shengname'";
				//echo $sql;
				$rs = $db->query($sql);
				//print_r($rs);
				//echo("sql行数".$rs->num_rows); 
				$newsNum=$rs->num_rows;  
				//echo $newsNum;
				
				
				while ( $row = $rs->fetch_assoc() ) { 
				$rows[]=$row;
				}

foreach($rows as $k=>$v){

 $nianfen[$v["mounth"]][] = $v;
}

//echo '<pre>';
//print_r($nianfen);

foreach($nianfen as $k1=>$rowlist){
//echo '<pre>';
//print_r($rowlist);

?>
<?php if(count($rowlist)==1){ ?>
<h3 class="h3class1">
<?php echo $k1; ?></h3>
<ul class="tongji">
<pre>
<table>
	<tr class="rowH">
		<th>地区</th>
		<th>已完</th>
		<th>未完</th>
		<th>总计</th>
	</tr>
	<tr class="rowA">
		<td><a href="shishow.php?mounth=<?php echo $k1; ?>&shi=<?php echo $rowlist[0][shi]; ?>"><?php  echo $rowlist[0][shi];?></a></td>
		<td><?php echo $rowlist[0][yiwanchen];?></td>
		<td><?php echo $rowlist[0][zongji]-$row[yiwanchen];?></td>
		<td><?php echo $rowlist[0][zongji];?></td>
	</tr>
</table>
</pre>
</ul>
<?php }else{ 
?>
<h3 class="h3class2">
<?php echo $k1; ?></h3>
<ul class="tongji1">
<pre>
<table>
	<tr class="rowH">
		<th>地区</th>
		<th>已完</th>
		<th>未完</th>
		<th>总计</th>
	</tr>
<?php
$listi=count($rowlist);
for($i=0;$i<$listi;$i++){
?>
	<tr class="rowA">
		<td><a href="shishow.php?mounth=<?php echo $k1; ?>&shi=<?php echo $rowlist[$i][shi]; ?>"><?php  echo $rowlist[$i][shi];?></a></td>
		<td><?php echo $rowlist[$i][yiwanchen];?></td>
		<td><?php echo $rowlist[$i][zongji]-$row[yiwanchen];?></td>
		<td><?php echo $rowlist[$i][zongji];?></td>
	</tr>

<?php }?>
</table>
</pre>
</ul>
<?php 


}
?>

<?php	
				

				}  //foreach
	
			//}  //foreach
		$db->close();
		}	
?>
<div class="xbg"></div>
		</div>
		<div class="clear"></div>
	</div>
	<div id="footer">
		<p> <a href="#">地市</a></p>
		<a href="#" target="_blank"></a><br>
<br>
<br>
<br>

<br>
<br>
	</div>
</div>
</body>
</html>
<?php				

	}		
?>
