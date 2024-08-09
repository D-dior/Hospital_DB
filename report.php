<HTML>
    <HEAD>
    <style>
        
    @import url('https://fonts.googleapis.com/css2?family=Gowun+Dodum&family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap');

    html{
        font-family: 'Noto Sans KR', sans-serif;
    }
             /* 헤더 */
                .main{
                    background-color:white;
                    
                }
             .header{
                background-image: url('background.jpg');
                padding: 20px;
                text-align: center;
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
             .topnav a (.active){
                background-color: #ddd;
             }
             
             /* 검색결과 출력창 */
             .result{
                text-align: center;
             }
             table, th, td{
                border: 1px solid black;
                    margin: auto;
                    
             }
          </style>
        <meta charset="UTF-8">
        <TITLE>Database Project</TITLE>
    </HEAD>
    
    <BODY>
    
        <div class="main">
            <div class="header">
             <h1>
                이화 병원
             </h1>
           </div>
            <div class="topnav">
             <a class="active" href="index.php">메인</a>
             <a href="report.php">특이 체질</a>
          </div>
        
            <div class="result">
             <h2 style="margin:3%">
                환자 특이 체질 정보
             </h2>
                
                <div id="search box">
                    <form action="http://localhost/homework2/report1.php" method="get">
                    </form>
                <!-- <p>환자ID 검색: 
                <input type="text" name ="query" value=" "  size=40>
                <button onclick="location.href='report.php'">검색</button ></p> -->
                <table style = "width:73%">
                <tr>
                    <th>환자ID</th>
                    <th>특이 체질</th>
                    <th>진료내용</th>
                    </tr>
    
            </div>
        </div>   
           <?php
            $conn=mysqli_connect("localhost", "web", "web_admin", "hospitalewha");
            $query="SELECT 특.환자ID, 특.특이체질, 진.진료내용 FROM 특이체질 as 특 LEFT JOIN 진료 as 진 ON 진.환자ID=특.환자ID ";
            $result=mysqli_query($conn, $query);
        ?> 
        <?php
        while($row=mysqli_fetch_array($result))
        { 
        ?>
         
            <TR>
                    <TD style="color:blue" onclick="location.href='chart.php'"><?=$row['환자ID']?></TD>
                    <TD><?=$row['특이체질']?></TD>
                    <TD><?=$row['진료내용']?></TD>
             
    
        <?php }?>
        </div> 
        </TABLE>
        </FORM> 
    
        <?php 
        mysqli_free_result($result);
        mysqli_close($conn);
        ?>
    
    </BODY>
    </HTML>