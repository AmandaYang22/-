<?php
	/*include 'index.html';
	//include 'insertSql.php';
	$posteddata=$_POST['data'];
	foreach($posteddata as $array)
	{
		echo "<br />$array";
	
	}*/
    //set_time_limit(0);
    //ini_set("max_execution_time", '0');
	class TestController{
		public function test(){
	//		echo "This is test function of test controller";

			//包含并实例一个模型
			include '/home/n152127/Z/10/app2/models/TestModel.php';
			$model=new TestModel();

			//通过模型获取数据
			$data=$model->getData();
			/*echo "test1";
			echo $data."</br>";
			echo "test2";*/
		//	echo "model.php";
			include '/home/n152127/Z/10/app2/views/TestView.php';
		}

	}
	
	
?>
