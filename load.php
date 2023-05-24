<?php
// 保存数据到文件
if(isset($_POST["content"])){
    $file = fopen("data.txt", "w");
    fwrite($file, $_POST["content"]);
    fclose($file);
}

// 加载数据文件
if(file_exists("data.txt")){
    echo file_get_contents("data.txt");
} else {
    echo "";
}
?>