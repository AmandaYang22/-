<?php
	session_start();
	$mydata=$_SESSION['array'];
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />

	<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<style type="text/css">
	.span2{
		background-color: #eeefff;
		height:1000px;
	}
	.span10{
		/*background-color:#FFE384;*/
		height:1000px;
	}
	.nav-sidebar{
        margin: 10px 0 0;
        padding: 0;
        background-color: #fff;
        -webkit-border-radius: 6px;
        -moz-border-radius: 6px;
        border-radius: 6px;
        -webkit-box-shadow: 0 1px 4px rgba(0,0,0,.065);
        -moz-box-shadow: 0 1px 4px rgba(0,0,0,.065);
        box-shadow: 0 1px 4px rgba(0,0,0,.065);
    }
    .nav-sidebar >li:first-child >a{
        -webkit-border-radius: 6px 6px 0 0;
        -moz-border-radius: 6px 6px 0 0;
        border-radius: 6px 6px 0 0;
    }
    .nav-sidebar >li>a{
        display: block;
        width: 190px \9;
        margin: 0 0 -1px;
        padding: 8px 14px;
        border: 1px solid #e5e5e5;
    }
	.page{
		text-align:center;
		margin-right:1000px;
		margin-bottom:10px;
	}
	.page a{
		text-decoration:none;
		border:1px solid #f9d52b;
		padding:5px 4px;
		color:#767675
	}
	</style>
	<script src="jquery/jquery.min.js" type="text/javascript"></script>
	<script src="jquery/jquery.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	</head>
	<body>	
	<form>
	<div class="contianer-fluid">
		<div class="row-fluid">
			<div class="span2">
				<!--Sidebar content-->
			 <ul class="nav nav-sidebar">
                        <li class="active"><a href="#one" class="nav-header menu-first collapsed" data-toggle="collapse">
                            <i class="fa fa-user"></i>&nbsp; 按源IP统计 <span class="sr-only">(current)</span></a>
                        </li> 
                        <!-- 二级菜单 -->
                        <!-- 注意一级菜单中<a>标签内的href="#……"里面的内容要与二级菜单中<ul>标签内的id="……"里面的内容一致 -->
                        <ul id="one" class="nav nav-list collapse menu-second">
                            <li><a href="../index.php" onclick="" id="one"><i class="fa fa-users"></i>全部展示 </a></li>
                        </ul>
                         
                        <li><a href="#two" class="nav-header menu-first collapsed" data-toggle="collapse">
                            <i class="fa fa-globe"></i>&nbsp; 按目的IP统计 <span class="sr-only">(current)</span></a>
                        </li> 
                        <ul id="two" class="nav nav-list collapse menu-second">
                            <li><a href="../../app2/index.php" onclick="" id="two"><i class="fa fa-list-alt"></i>全部展示</a></li>
                        </ul>
                                
                    </ul>
				</ul>
			</div>
			
			<div class="span10">
				<!--Body content-->
                    <h1 class="page-header"><i class="fa fa-cog fa-spin"></i>&nbsp;&nbsp;&nbsp;homework<small>&nbsp;&nbsp;&nbsp;</small></h1>
                        
                        <!-- 载入左侧菜单指向的jsp（或html等）页面内容 -->
					      <div class="page">
								<span>上一页</span>
								<a href="#">&laquo;</a></li>
								<a href="view1.php">1</a></li>
								<a href="view2.php">2</a></li>
								<a href="view3.php">3</a></li>
								<a href="#">&raquo;</a></li>
								</span>下一页</span>
						  </div>
                          <div id="content">   
                                    <?php
                                     //   set_time_limit(0);
									//    ini_set("max_execution_time", '0');a
										 //echo "TestView";
                                         //echo "this text is get from View:".$var;
                                        $length=count($mydata);
                                        $i=0;
										echo "<table border='1' class='table table-bordered table-striped'>
										<tr>
										<th align='center' text_align='center'>          Summary  Table         
										</tr>
										<tr>
										<td align=center> <b>SourceIP</b></td>
										<td align=center> <b>TargetIP</b></td>
										</tr>";

										while($i<36)
										{
											echo "<tr>";
											print_r("<td align=center>{$mydata[$i]['SenderIP']}</td>");
											print_r("<td align=center>{$mydata[$i]['TargetIP']}</td>");
											echo "</tr>";
											$i++;
										}
										echo "</table>";
							?>
                          </div>  
                </div> 
        	</div>
	</div>
    </form>
	</body>
	</html>

