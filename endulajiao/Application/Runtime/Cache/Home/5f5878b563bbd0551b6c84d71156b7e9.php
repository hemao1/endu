<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<center>
<body>
	<table border="1">
		<tr>
			<th>ID</th>
			<th>权限名称</th>
			<th>控制器名称</th>
			<th>方法名称</th>
			<th>操作</th>
		</tr>
		<?php if(is_array($list)): foreach($list as $key=>$val): ?><tr>
					<td><?php echo ($val["p_id"]); ?></td>
					<td><?php echo ($val["p_name"]); ?></td>
					<td><?php echo ($val["p_kongzhi"]); ?></td>
					<td><?php echo ($val["p_fangfa"]); ?></td>
					<td><a href="">删除</a>|<a href="">修改</a></td>
				</tr><?php endforeach; endif; ?>
	</table>
</body>
</center>
</html>