<?php
	if (isset($_POST['submit'])) {
		$connection = new mysqli("localhost", "root", "", "search");
		$q = $connection->real_escape_string($_POST['q']);
		$column = $connection->real_escape_string($_POST['column']);

		if ($column == "" || ($column != "title" && $column != "description"))
			$column = "title";

		$sql = $connection->query("SELECT title,description,url FROM users WHERE $column LIKE '%$q%'");//column like:in the sense is (that column is for that paticular query($q) or vice versa)
		if ($sql->num_rows > 0) {
			$i=$sql->num_rows;
			echo $i.":results found" ."<br>"."<br>"."<br>"."<br>";
			while ($data = $sql->fetch_array())
				{echo  '<span style="color:#F3FB00;font-weight=bold;">'.$data['title'].'</span>'."<br>" .$data['description'] ."<br>". $data['url'] ."<br>";}
		} else
			echo "Your search query doesn't match with data";
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<style type="text/css">
	body{ 
  background: url(https://ak5.picdn.net/shutterstock/videos/7755955/thumb/1.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
</style>
<body>
	
</body>
</html>