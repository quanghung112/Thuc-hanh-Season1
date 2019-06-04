<html>
<meta http-equiv="Content-Type" content="text/html"; charset="utf-8">
<head>
    <style>
        input[type=text]{
            width: 300px;
            font-size: 16px;
            border: 2px black solid;
            border-radius: 10px;
            padding: 12px 10px 12px 10px;
        }
        #submit{
            border-radius: 5px;
            padding: 10px 32px;
            font-size: 16px;
        }
    </style>
</head>
<body>
<h2>Tu dien anh-viet</h2>
<form method="post">
    <input type="text" name="search" placeholder="Nhap tu can tim">
    <input type="submit" id="submit" value="Tranlate">
</form>
</body>
</html>
<?php
$dictionary=array("hello"=>"xin chao","how"=>"nhu the nao","book"=>"cuon sach","car"=>"o to");
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $search=$_POST["search"];
    $flag=0;
    foreach ($dictionary as $word=>$description){
        if ($word==$search){
            echo "Tu: ".$word.".<br/>Nghia la: ".$description;
            echo "<br/>";
            $flag=1;
        }
    }
    if (@$flag==0){
        echo "Not find word";
    }
}

