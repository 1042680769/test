<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link href="css/style.css" rel='stylesheet' type='text/css' />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		
	</head>
	
	<body>
		<div class="main">
			<!-----start-main---->
			<form>
				<div><h2>父母信息统计</h2></div>
				<div class="lable">
					<input type="text" class="text" value="姓名" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '姓名';}" id="active">
					<input type="text" class="text" value="学号" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '学号';}">
					<input type="text" class="text" value="专业" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '专业';}">
					<input type="text" class="text" value="父亲姓名" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '父亲姓名';}">
					<input type="text" class="text" value="父亲联系方式" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '父亲联系方式';}">
					<input type="text" class="text" value="父亲工作单位" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '父亲工作单位';}">
					<input type="text" class="text" value="父亲职务" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '父亲职务';}">
					<input type="text" class="text" value="母亲姓名" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '母亲姓名';}">
					<input type="text" class="text" value="母亲联系方式" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '母亲联系方式';}">
					<input type="text" class="text" value="母亲工作单位" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '母亲工作单位';}">
					<input type="text" class="text" value="母亲职务" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '母亲职务';}">
					<input type="text" class="text" value="备注" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '备注';}">
				</div>
				<script type="text/javascript">
								/*
				<?php
				if(!empty($_POST["Name"])){
				//点击 登录 后才执行
					$username = $_POST["Name"];
					$snumber = $_POST["Number"];
					$college = $_POST["Coll"];
					$contact = $_POST["Contact"];
					$mysql = new SaeMysql();
					$sql = "insert into sae_weisite_challengecup_knowledgecontest(Name,SNumber,college,contact)values('$username','$snumber','$college','$contact')";
					$mysql->runsql($sql);
					//close the db
					$mysql->closeDb();
					$_POST = array();
					echo "alert('已成功注册~');";
				}
				?>
				*/
				</script>
				<div class="submit">
					<input type="submit" onclick="myFunction()" value="提交" >
				</div>
				<div class="clear"> </div>
			</form>
			<!-----//end-main---->
		</div>
		<!-----start-copyright---->
		<div class="copy-right">
			<p>南京师范大学教师教育学院 2017级研究生</a></p>
		</div>
		<!-----//end-copyright---->
		
	</body>
</html>