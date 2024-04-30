<?
	$mType = stripcslashes($_GET['mType']);
	$mFile = stripcslashes($_GET['mFile']);
	$title = stripcslashes($_GET['title']);
	$bgColor = stripcslashes($_GET['bgColor']);
?>
<head>
	<title><? echo $title; ?></title>
	<link href = 'https://fonts.googleapis.com/css?Family=Courgette' rel = 'stylesheet' type = 'text/css'
</head>
<?
	if($bgColor == null){
		print '<body style = "background-color: Cade+Blue;">';
	}
	else{
		print '<body style="background-color:' . $bgColor . ';">';
	}
?>
<div style = "margin: 60px auto 0; width: 74%; padding: 54px; background-color: White; text-align: center; border-radius: 33px;
border: DarkSlateGrey solid 2px;">
<?
	print '<h2 style = "font-family: Courgette; color:DarkGrey;">' . $title . "</h2>\n";
	print '<p><' . $mType . ' style="width:80%;" controls><source src="' . $mType . '/' . $mFile . '"></' . $mType . '></p>';
?>
</div>
</body>