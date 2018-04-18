<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>


<style>

h1 {
    position: absolute;
    left: 350px;
    top: 100px;
	font-size: 35px;
	font-weight: 500;
}

h2 {
    position: absolute;
    left: 350px;
    top: 250px;
	margin-left: auto;
    margin-right: auto;
    width: 15em;
	font-weight: 300;
}

body {
        background-image: url("hotels_background.jpg");
		background-repeat: no-repeat;
         background-size: 1365px 700px;
		 font-family: sans-serif;
		 color: #ff4f26;
} 

.button {

    position: absolute;
    left: 350px;
    top: 450px;
    background-color: #fafafa; 
    border: none;
    color: #ff4f26;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 24px;
    margin: 4px 2px;
    cursor: pointer;
	border-radius: 12px;
	width: 250px;
}

h3{
	color: #ff4f26;
	position: absolute;
    left: 425px;
    top: 550px;
	font-size: 24px;
}

</style>
 
</head>
 
<body >

<h1>Hotels.ng Internship 4.0</h1>

<h2> A remote internship program for aspiring  developers all across africa who wish to  become world class developers. </h2> 

<button class="button">Sign up!</button>

<?php
date_default_timezone_set("Africa/Lagos");
$txt1 = date("h:i:sa");
echo "<h3>" . $txt1 . "</h3>";

?>



</body>
</html>