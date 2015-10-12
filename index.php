<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="font-awesome-4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="style.css">
	<script src="https://cdn.bootcss.com/jquery/3.0.0-alpha1/jquery.min.js"></script>
	
	<script src="sandy.js"></script>
	<title>yulebao</title>
</head>

<body>
	<?php 
	var_dump($_POST);
		 $json_string = file_get_contents('data.json');
		 $data= json_decode($json_string,true);
		 //var_dump($data);	
	?>
	<header>
		<div class="top">
			<div class="logo"><img src="images/logo.png" alt=""></div>
			<nav>
				<a href="#" class="active">产品</a>
				<a href="#">运营推广</a>
				<a href="#">新人入职须知</a>
			</nav>
		</div>
	</header>
	<div class="content">
		<div class="content-title">
			<h1>产品项目</h1>
			<a href="#" class="btn btn-red btn-add" id="btn_red">+新增项目</a>
		</div>
		<table id="table">
			<thead>
				<th>项目时间</th>
				<th>项目标题</th>
				<th>平台</th>
				<th>归属人</th>
				<th>需求方</th>
				<th>云盘地址</th>
				<th>线上演示</th>
				<th>操作</th>
			</thead>
			<?php 
				for($i=0,$n=count($data);$i<$n;$i++){
			?>
			<tr>
			<?php 
					// foreach ($data[$i] as $key => $value) {
					// 	# code...
							echo "<td>".$data[$i]["time"]."</td>";
							echo "<td>".$data[$i]["title"]."<span class='prepare'>&nbsp;".$data[$i]["project_status"]."</td>";
							echo "<td>".$data[$i]["platform"]."</td>";
							echo "<td>".$data[$i]["belong to"]."</td>";
							echo "<td>".$data[$i]["demand"]."</td>";
							echo "<td class='yunpan'><a href='".$data[$i]["yunpan"]."'><i class='fa fa-cloud'></i>&nbsp;点击查看</a></td>";
							echo "<td class='demo'><a href='".$data[$i]["demo_UI"]."' class='UI'>交互</a>&nbsp;&nbsp;<a href='".$data[$i]["demo_GUI"]."' class='GUI'>视觉</a></td>";
							
					//}
			?>
				<td class="option">
					<a href=""><i class="fa fa-edit"></i></a>
					<a href=""><i class="fa fa-trash-o"></i></a>
				</td>
			<?php } ?>
			</tr>
		</table>
	</div>

	<div class="dialog">
		<div class="dialog_title">
			<h3>新增项目</h3>
			<a href=""><i class="fa fa-close" id="btn_close"></i></a>
		</div>
		<form action="index.php" method="post" class="form" id="form">
			<div>
				
				<label for="time"><strong>*&nbsp;</strong>项目时间</label>
				<input id="username" type="text" placeholder="2015/9/10-2015/9/13 或 2015/9/10" name="time" required data-msg-required='请输入时间'>
			</div>
			<div>
				<label for="title"><strong>*&nbsp;</strong>项目标题</label>
				<input id="title" type="text" placeholder="App2.0 大圣归来" name="title" required>
			</div>
			<div>
				<label for="project_status"><strong>*&nbsp;</strong>项目状态</label>
				<select name="project_status" id="project_status" required height="40px">
					<option value="未开始">未开始</option>
					<option value="进行中" selected="selected">进行中</option>
					<option value="已结束">已结束</option>
					<option value="项目暂停">项目暂停</option>
				</select>
			</div>
			<div>
				<label for="platform"><strong>*&nbsp;</strong>平台</label>
				<input id="platform" type="text" placeholder="IOS/H5" name="platform" required>
			</div>
			<div>
				<label for="belong_to"><strong>*&nbsp;</strong>归属人</label>
				<input id="belong_to" type="text" placeholder="花名1/花名2/花名3" name="time" required>
			</div>
			<div>
				<label for="demand"><strong>*&nbsp;</strong>需求方</label>
				<input type="demand" placeholder="加丁/凤傩" name="demand" required>
			</div>
			<div>
				<label for="yunpan"><strong>*&nbsp;</strong>云盘地址</label>
				<input type="text" placeholder="直接将云盘地址复制过来" name="yunpan" required>
			</div>
			<div>
				<label for="demo_UI">线上演示—交互</label>
				<input type="text" placeholder="为选填项" name="demo_UI">
			</div>
			<div>
				<label for="demo_GUI">线上演示—视觉</label>
				<input type="text" placeholder="为选填项" name="demo_GUI">
			</div>
			<button class="btn btn-blue btn-ok" type="submit">确定</button>
		</div>
	</div>
	<div class="mask"></div>

</body>
</html>