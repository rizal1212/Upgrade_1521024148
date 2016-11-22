<html>
<head>
<title>UPGRADE 1521024148</title>
</head>
	<body>
	<table border='1'>
	<tr>
		<th rowspan="2">INPUT</th>
		<th rowspan="5">OUTPUT</th>
	</tr>
<tr>
	<th>A</th>
	<th>I</th>
	<th>U</th>
	<th>E</th>
	<th>O</th>
</tr>
<tr>
	<td>
		<?php
		$n1="MOHAMAD RIZAL";
		echo $n1;
		?>
	</td>
	<td>
		<?php
		$mwh_a = substr_count($n1,"A");
		echo $mwh_a
		?>
   </td>
	<td>
		<?php
		$mwh_i = substr_count($n1,"I");
		echo $mwh_i
		?>
	<td>
		<?php
		$mwh_u = substr_count($n1,"U");
		echo $mwh_u
		?>
	</td>
	<td>
		<?php
		$mwh_e = substr_count($n1,"E");
		echo $mwh_e
		?>
	</td>
	<td>
		<?php
		$mwh_o = substr_count($n1,"O");
		echo $mwh_o
		?>
</td>
</tr>
</table>
</body>
</html>