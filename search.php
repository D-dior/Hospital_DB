<!DOCTYPE html>
<html>
	<link rel="stylesheet" type="text/css" href="style.css">
	<head>
		<style>
			.topnav a:hover{
				background-color: #ddd;
				color: black;
			}
		</style>
		<title>Database Project</title>
	</head>
	
	<body>
	<?php
	$conn=mysqli_connect("localhost", "web", "web_admin", "hospitalewha");
	$query = "SELECT * FROM 환자 WHERE 성명 = '에이쁠'";
	$result = mysqli_query($conn, $query);
	?>
		
		<div class="header">
			<h1>
				이화 병원
			</h1>
		</div>
		
		<div class="topnav">
			<a href='index.php'>메인</a>
			<a href='report.php'>특이 체질</a>
		</div>
		
		<div class="result">
			<h2 style="margin:3%">
				검색 결과
			</h2>
			<table>
				<tr>
					<th>환자ID</th>
					<th>성명</th>
					<th>성별</th>
					<th>직업</th>
					<th>담당의사ID</th>
					<th>담당간호사ID</th>
					<th>주민번호</th>
					<th>보호자연락처</th>
					<th>시</th>
					<th>구</th>
					<th>연락처</th>
					<th>이메일</th>
				</tr>
			<?php
			 while($row=mysqli_fetch_array($result))
			{
			?>
				<tr>
					<td style="color:blue" onclick="location.href='chart.php'"><?=$row['환자ID']?></td>
					<td><?=$row['성명']?></td>
					<td><?=$row['성별']?></td>
					<td><?=$row['직업']?></td>
					<td><?=$row['담당의사ID']?></td>
					<td><?=$row['담당간호사ID']?></td>
					<td><?=$row['주민번호']?></td>
					<td><?=$row['보호자연락처']?></td>
					<td><?=$row['시']?></td>
					<td><?=$row['구']?></td>
					<td><?=$row['연락처']?></td>
					<td><?=$row['이메일']?></td>
				</tr>
			<?php } ?>
			</table>
		</div>
		<?php
		mysqli_free_result($result);
		mysqli_close($conn);
		?>
	</body>
</html>