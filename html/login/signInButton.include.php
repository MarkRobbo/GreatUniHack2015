<?php if (!isset($_SESSION['steamID'])){ ?>
<a href="<?php
	include_once "SteamSignIn.class.php";
	$steamSignIn = new SteamSignIn();

	if ($body)
		$url = "https://steamcommunity-a.akamaihd.net/public/images/signinthroughsteam/sits_large_noborder.png";
	else
		$url = "https://steamcommunity-a.akamaihd.net/public/images/signinthroughsteam/sits_small.png";

	if (isset($_GET['return_url']))
		echo $steamSignIn->genUrl('http://' . $_SERVER['HTTP_HOST'] . $_GET['return_url']);
	else
		echo $steamSignIn->genUrl('http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
?>"><img src="<?php echo $url;?>" alt="Login through Steam"></a>
<?php } ?>