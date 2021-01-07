
<html>
<head>
<title> Post and Get </title>
</head>
<body>
<?php

echo $_POST['name'];
?>


<form method="Post" action ="<?php htmlentities($_SERVER["PHP_SELF"]); ?>">
<div>
<input type="text" name="name" placeholder="name">
</div>
<div>
<input type="text" name="email" placeholder="email">
</div>
<input type ="submit" value="submit">
</body>
</html>



	


