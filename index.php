<?php
	include("init.php");
	include("config.php");
	$contest = $_SESSION['contest'];
	if (isset($_GET['kt'])) $contest = $_GET['kt'];
	include($contestDir . $contest . "/info.php");
	include("functions.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="en"> <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Trần Hữu Nam - thnam@thptccva.edu.vn">

    <title>Nộp bài trực tuyến</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/jumbotron.css" rel="stylesheet">
	<script src="js/jquery-latest.js"></script>
	<script>
		var refreshId = setInterval(function(){
			$('#logs').load('logs.php');
			$('#timer').load('timer.php');
			if (conlai<1) $("#chonopbai").hide();
		}, 2000);
	</script>
</head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">&middot; Nộp bài trực tuyến</a>
        </div>
		<div class="navbar-collapse collapse">
			<div class="navbar-form navbar-right"> 
				<a class="btn btn-success" href="repass.php" title="Đổi mật khẩu"><?php echo $_SESSION['tname']; ?></a> 
				<a href="logout.php">(Thoát)</a>
			</div>
		</div>  
      </div>
    </div>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <center><h2 style='color:blue;'><?php echo $contestName; ?></h2></center>
        <p><?php echo $description; ?></p>
<?php if ($duringTime > 0) { ?>
		<p>
			- Thời gian bắt đầu: <?php echo date("H:i:s d/m/Y", $begintime); ?> <br/>
			- Thời gian làm bài: <?php echo $duringTime; ?> phút. <br/>
			<span id="timer"> </span>
		</p>
<?php } ?>	
           
		  <a href="ranking.php" target="_blank">Bảng điểm</a>
          <form class="navbar-form navbar-right"  action="upload.php" method="POST" enctype="multipart/form-data" id="chonopbai">
 			 Nộp bài: 
			<div class="form-group">
				<input type="file" name="file" id="file" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Nộp bài</button>
			<div><i>Lưu ý: đặt tên tệp đúng với yêu cầu của đề bài.</i></div>
          </form>
	  
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
	  
        <div class="col-md-4">
          <h2>Đề bài</h2>
		  <div id="khudebai">
<?php
		if ($begintime<=time()) //Khi nao toi gio thi moi hien de
		{
			$dir = opendir($contestDir.$contest);
			while ($file = readdir($dir)) { 
				if ($file!="." && $file!=".." && in_array(substr($file,strlen($file)-4),$duoibai)) {
					$tenngan=strtolower(substr($file,0,-4)); //bo phan duoi
					echo "<h4> ■ <a href='".$contestDir .$contest."/". $file."' target='_blank'>".(isset($problemname[$tenngan]) ? $problemname[$tenngan] : $tenngan)."</a></h4>";
				}
			}
			closedir($dir);	
		}
		
?>		</div>  
        </div>
		
        <div class="col-md-4">
          <h2>Các test mẫu</h2>
<?php	
		$duoitest=[".inp",".out"];
		$dir = opendir($contestDir.$contest);
		while ($file = readdir($dir)) { 
			if ($file!="." && $file!=".." && in_array(substr($file,strlen($file)-4),$duoitest)) {
				echo "<p>►<a href='".$contestDir .$contest."/". $file."' target='_blank'>".$file."</a></p>";
			}
		}
		closedir($dir);
?>		  
          <!-- <p><a class="btn btn-default" href="<?php echo $examTestDir.'/'.$examTestFile; ?>" role="button">Tải về &raquo;</a></p> -->
       </div>
	   
        <div class="col-md-4">
          <h2>Các bài đã nộp</h2>
		  <div id="logs"> Đang tải... </div>
        </div>
      </div>

      <hr>

      <footer>
        <center><?php echo $footer; ?></center>
      </footer>
    </div> <!-- /container -->
	<div id="debug" style="color:white;"><?php echo "debug"; ?></div>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
