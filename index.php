<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Project</title>
    <style>
         @import url('https://fonts.googleapis.com/css2?family=Gowun+Dodum&family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap');
        .header{
            padding: 20px;
            color: black;
            background-image: url('background.jpg');
        }
        body{
            text-align: center;
            font-family: 'Noto Sans KR', sans-serif;
        }

        /* 네비게이션바 */
			.topnav{
				overflow: hidden;
				background-color: #363c5f;
			}
			.topnav a{
				float: left;
				display: block;
				color: #f2f2f2;
				text-align: center;
				padding: 14px 16px;
				text-decoration: none;
			}
			.topnav a:hover{
				background-color: #ddd;
				color: black;
			}
			.topnav a(.active){
				background-color: #ddd;
			}

       

     .searchbox{
        margin-top: 5%;
      margin-left: auto;
      margin-right: auto;
      font-size: 15pt;
       color: black;
       padding:10px 20px;
       width:800px;
       background-color: #363c5f;
    }


    </style>
</head>
<body>
    <?php
    $conn = mysqli_connect("localhost", "web", "web_admin", "hospitalewha");
    $query = "SELECT 성명 FROM 환자";
    $result = mysqli_query($conn, $query);
    ?>

    <div class="header">
        <h1>이화  병원</h1>
    </div>

    <div class="topnav">
        <a class="active" href="index.php">메인</a>
        <a href="report.php">특이 체질</a>
    </div>
    
    
    <p>
        <div class="search">
            <!-- <input type="text" name ="query" value=" ">
            <button onclick="location.href='search.html'">검색</button> -->
            <div class="searchbox">
                <a style="color:white;"><b>환자 검색  </b></a>
                <input type="text" name="search" style="margin-left: 5px; width:580px; height:30px;" placeholder=" 환자 이름으로 검색하세요.">
                 <input type="button" name="search" onclick="location.href='search.php'" name="search" style="height:30px; width:50px; margin-top:5px; background-color: #2E3351; border:none; color: white;" value="검색">
             </div>
         
            
        </div>
    </p>
    <?php
		mysqli_free_result($result);
		mysqli_close($conn);
		?>
</body>
</html>