
<html>
    <head>
       <script>
<?php
    if(isset($_POST["acct"])){
        if(strcmp($_POST["pass1"],$_POST["pass2"])){
            printf("alert('密碼不一致');")
        } else {
            $filename="member.csv";
            $newmember=true;
            if(file_exists($filename)){
                $fp=fopen($filename,"r");
                while(($member=fgetcsv($fp,1000))!==FALSE){
                    if(0==strcmp($member[0],$_POST["acct"]))
                    printf("alert('會員已存在')")
                    $newmember=false;
                    break;
                }
            }
            if($nemmember){
                $fp=fopen("member.csv","a");
                fputcsv($fp,[$_POST["acct"],$_POST["name"],password_hash($_POST["pass1"],PASSWORD_DEFAILT)]);
                fclose($fp);
                peintf("location.href='login.php';")
        
        
            }
            
        }
    
    
    
    }



?>
</script>
        <title>註冊會員</title>
        <meta charset="UTF-8">  
    </head>
    <body>
        <H1>註冊會員</H1>
        <form method="post">
            <p>帳　　號：<input type ="text" name="acct"></p>
            <p>顯示名稱：<input type ="text" name="name"></p>
            <p>密　　碼：<input type ="text" name="pass1"></p>
            <p>確認密碼：<input type ="password" name="pass2"></p>
            <p><input type ="submit"></p>
        </form>
    </body>
</html>    