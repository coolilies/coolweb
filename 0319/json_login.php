
<html>
    <head>
    <title>會員登入</title>
    <meta charset="UTF-8"> 
       <script>
<?php
    if(isset($_POST["acct"])){
            $filename="member.csv";
            $member=json_decode($all,true);
            if(file_exists($filename)){
                $all=file_get_contents($filename);
                foreach($member as $m){
                    if(0==strcmp($member[0],$_POST["acct"])&& password_verify($_POST["pass"],$m["name"]))
                    printf("alert('歡迎登入=，%s',$m[name])");
                    printf("location.href='login.php';");

                    break;
                }
                fclose($fp);
            }else{
           
                printf("alert('無會員資料，請通知管理員!')");

            }
            
        }
    
    
    
    


?>
</script>
        
       
    </head>
    <body>
        <H1>會員登入</H1>
        <form method="post">
            <p>帳　　號：<input type ="text" name="acct"></p>
            <p>密　　碼：<input type ="text" name="pass1"></p>
            <p><input type ="submit" value ="登入"></p>
        </form>
    </body>
</html>    