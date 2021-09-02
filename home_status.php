<?php


$home = gethostbyname("DDNS-Domain.example");

$currentLocation = $_SERVER['REMOTE_ADDR'];

if($home == $currentLocation)
{
echo "HOME";
}
else
{
echo "AWAY";
}
