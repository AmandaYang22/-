<?php
   // set_time_limit(0);
   // ini_set("max_execution_time", '0');
	class TestModel{
		public function getData(){
			$conn=mysqli_connect("localhost","n152127","123456");
			if(!$conn)
			{
				die("could not connect".mysqli_error());
			}
			mysqli_select_db($conn,"ex151002127");
			//mysqli_query("set names gb2312");
			//
			$result=mysqli_query($conn,"select * from  arpsniffer group by SenderIP");
			if(!$result){
				printf("result Error:%s\n",mysqli_error($conn));
				//exit();
			}
			$data=array();
			while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
				$data[]=$row;
			}
		/*	$length=count($data);
			echo "length:";
			echo $length;
			/*{
				$shuju=array($data[0],',',$data[1]);


			}
				//return $result;*/
			/*$i=0;
			echo "model";

			while($i<=$length-1);
			{
				echo "SenderIP  ";
				echo "TargetIP \n";
				echo $data[$i]["SenderIP"];
				echo "   ";
				echo $data[$i]["TargetIP"];
				echo "\n";
				$i++;
			}
			echo "model";*/
			return $data;
		}
	}
?>
