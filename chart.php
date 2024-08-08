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
                환자 진료
             </h2>
                
                <div id="search box">
                    <form action="http://localhost/homework2/report1.php" method="get">
                    </form>
                <!-- <p>환자ID 검색: 
                <input type="text" name ="query" value=" "  size=40>
                <button onclick="location.href='report.php'">검색</button ></p> -->
                <table style = "width:73%">
                <tr>
                    <th>진료ID</th>
                    <th>진료날짜</th>
                    <th>환자ID</th>
                    <th>진료 내용</th>
                    <th>접수간호사ID</th>
                    </tr>
    
            </div>
        </div>   
           <?php
            $conn=mysqli_connect("localhost", "web", "web_admin", "hospitalewha");
            $query="SELECT * FROM 진료 WHERE 환자ID='P059'";
            $result1=mysqli_query($conn, $query);
        ?> 
        <?php
        while($row=mysqli_fetch_array($result1))
        { 
        ?>
         
            <TR>
                    <TD><?=$row['진료ID']?></TD>
                    <TD><?=$row['진료날짜']?></TD>
                    <TD><?=$row['환자ID']?></TD>
                    <TD><?=$row['진료내용']?></TD>
                    <TD><?=$row['접수간호사ID']?></TD>
             
    
        <?php }?>
        </div> 
        </table>

        <div class="result">
             <h2 style="margin:3%">
                환자 차트
             </h2>
        </div>
        <table style = "width:73%">
                <tr>
                    <th>차트ID</th>
                    <th>진료ID</th>
                    <th>의사소견</th>
                    <th>재진여부</th>
                    </tr>
    
            </div>
        </div>   
           <?php
            $conn2=mysqli_connect("localhost", "web", "web_admin", "hospitalewha");
            $query2="SELECT * FROM 차트 WHERE 진료ID='23052209'";
            $result2=mysqli_query($conn2, $query2);
        ?> 
        <?php
        while($row=mysqli_fetch_array($result2))
        { 
        ?>
         
            <TR>
                    <TD><?=$row['차트ID']?></TD>
                    <TD><?=$row['진료ID']?></TD>
                    <TD><?=$row['의사소견']?></TD>
                    <TD><?=$row['재진여부']?></TD>
             
    
        <?php }?>
        </div> 
        </TABLE>
        
    
        <?php 
        mysqli_free_result($result1);
        mysqli_free_result($result2);
        mysqli_close($conn);
        ?>
    
    </BODY>
    </HTML>