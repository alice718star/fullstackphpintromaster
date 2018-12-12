<html>
<head>
	<title>PHP and JSON Demo</title>
	<link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <?php require_once('assets/partials/nav.php');?>
	<h1>Profiles</h1>
	<hr>
	<table>
		<tr>
			<th>ID</th>
			<th>NAME</th>
			<th>GENRE</th>
		</tr>
        <?php
            $d = file_get_contents('assets/data.json');
            $d = json_decode($d, true);
            //print_r($d);
            foreach($d as $key => $value ){
                echo '
                <tr>
                    <td>'.$key.'</td>
                    <td>'.$value['name'].'</td>
                    <td>'.$value['genre'].'</td>
                </tr>
                ';
            };
        ?>
	</table>
    <!--here $k and $v could be $key, value. $d is an array that contains indexes. $key takes on those indexes. $value takes on the whole object-->
    <!--in php you can have spaces tr, td no impact-->
	<hr>
    <?php require_once('assets/partials/footer.php');?>
</body>
</html>