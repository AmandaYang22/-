<?php
		//set_time_limit(0);
        //ini_set("max_execution_time", '0');
		//URL:http://localhost/AWebsite/test/MVCtest/index.php  
        //入口文件  
      
         header("Content-Type:text/html;charset=utf-8");  
        //包含控制器  
        include '/home/n152127/Z/10/app1/controllers/TestController.php'; 
        //实例化控制器对象
        $classname='TestController';
        $controller=new $classname();

        //调用方法
        $controller->test();
?>
