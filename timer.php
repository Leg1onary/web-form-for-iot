<html>
	<head>
		<title>Timer Panel</title>
		<link href="main.css" rel="stylesheet">
	</head>
	<style>
	th{
		font-size: 40px;
	}
	td{
		border: 4px solid black;
		font-size: 30px;
		padding: 10px;
	}
	</style>
<?php $cnt = ((count($_POST)-1)/3);?>
	<script>
function tt(){
  for (i = 2; i <= <?php echo $cnt ?>; i++) { 
  document.getElementById('output_time').innerHTML = document.getElementById('output_time').innerHTML +
"<tr><td>"+i+": <?php echo $_POST['time_"+i+"_1'];?> - <?php echo $_POST['time_"+i+"_2'];?></td><td><?php $time1 = strtotime($_POST['time_"+i+"_1']);$time2 = strtotime($_POST['time_"+i+"_2']);$diff = $time2 - $time1;echo $diff.' sec == '.gmdate('H:i',$diff);?></td><td><?php echo $_POST['StatusBox_"+i+"']; ?> </td></tr>";
}
}
	</script>
<body onload="tt()">
  <div id="timer_content">
  Count: <?php echo ((count($_POST)-1)/3);?>
	<table style="margin: 0px auto;" name='output_time' id='output_time'>
		<tr><th>Time</th><th>Delay</th><th>Status</th></tr>
	<tr>
		<td>1: <?php echo $_POST['time_1_1'];?> - <?php echo $_POST['time_1_2'];?></td>
		<td>
			<?php 
				$time1 = strtotime($_POST['time_1_1']);
				$time2 = strtotime($_POST['time_1_2']);
				$diff = $time2 - $time1;
				echo $diff.' sec == '.gmdate('H:i',$diff);
			?>
		</td>
		<td><?php echo $_POST['StatusBox_1']; ?></td>
	</tr>
	</table>
   </div>
</body>
</html>