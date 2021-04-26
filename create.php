<?php
$f2='';	
$contents = file_get_contents("log.html");  
				$contents_arr=explode("<br>",$contents);
				$contents_count=count($contents_arr)-1;
				$i=0;
				while($i<=$contents_count){
					$f2.= $contents_arr[$i]."\n";
					$i++;
				}
				
//$f2=file_get_contents('log.html');
$f1=fopen('target.txt','w');
fwrite($f1,$f2);
fclose($f1);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="css/bootstrap.min.css" rel="stylesheet"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
  <link href="./images/icon-1.png" rel="icon" type="image/x-icon" />
<meta property="og:image" content="http://bhavikjain.0fees.us/images/icon-1.png" />
<meta property="og:description" content="Sem 8 Project" />
<meta property="og:title" content="Bhavik's ChatBot" />

<title>Download txt file</title>

<style>
html,body{overflow-x:hidden;}
</style>
</head>
<body>
<div class="container-fluid " style="margin:100px 0px;">
	<div class="row justify-content-around text-center">
		<div class="col-md-6 col-10 col-lg-6 col-sm-10 col-xs-10 mx-auto d-block justify-content-around">
			<div class="alert alert-success " role="alert">
				You left the chat.
				<div style="width:90vw;height:2px;background-color:#ffffff;margin:0px 10px;" class="mx-auto d-block text-center"></div>
				Click <a href="target.txt" class="alert-link" download >here</a> to download the chat transcript file (.txt).
			</div>
		</div>
	</div>
</div>

</body>
</html>