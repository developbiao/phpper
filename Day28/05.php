<?php
/*
@Description:使用数组表单测试 
@Author:GongBiao
@Date:2015/06/25
*/
header('Content-Type:text/html; charset=utf-8');

echo '<pre>';
print_r($_FILES);
echo '</pre>';

/*

注意，多文件上传时
如果name的名称是数组格式
如pic[], pic[]

形成的数组与name = a, name = b 这种形式不同
Array
(
    [pic] => Array
        (
            [name] => Array
                (
                    [1] => 07ec0cf8b9aecebaa30d633858b36660a054db6913b75-IsAXue_fw658.jpg
                    [2] => duanwu.png
                    [3] => lh.png
                )

            [type] => Array
                (
                    [1] => image/jpeg
                    [2] => image/png
                    [3] => image/png
                )

            [tmp_name] => Array
                (
                    [1] => C:\Windows\Temp\php28AC.tmp
                    [2] => C:\Windows\Temp\php28AD.tmp
                    [3] => C:\Windows\Temp\php28BD.tmp
                )

            [error] => Array
                (
                    [1] => 0
                    [2] => 0
                    [3] => 0
                )

            [size] => Array
                (
                    [1] => 50155
                    [2] => 620540
                    [3] => 74716
                )

        )

)
*/


?>