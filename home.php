<html>
<title>HOME or AWAY</title>
<body>
<style>


a.headerlink:link,a.headerlink:visited {
 color: yellow;
 text-decoration: none;
  }


</style>

<body style="background-color:black;font-family:courier,arial,helvetica;color:yellow;">


<center>

<h1> Are you home or away? </h1>


</body>
</html>

<?php


$home = gethostbyname("DDNS-Domain.example");

$currentLocation = $_SERVER['REMOTE_ADDR'];

if($home == $currentLocation)
{
echo "You are currently connected to your home network (",$currentLocation,")! You are home!";
}
else
{
echo "You are currently not connected to your home network(",$home,")! You are instead at ",$currentLocation,"!";
}



