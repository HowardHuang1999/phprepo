<?php
$num=123.456;
//以字符串形式输出
printf("数值为：%s",$num);
echo"<br/>";

//带有两位小数的浮点数
printf("数值为：%.2f",$num);
echo"<br/>";

//二进制形式输出
printf("数值为：%b",$num);
echo"<br/>";

//带有五位小数的浮点数
printf("数值为：%.5f",$num);
echo"<br/>";

//打印%符号
printf("数值为：%%%f",$num*100);
echo"<br/>";
?>