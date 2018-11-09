<?php
global $sourcedir;

$SSI_INSTALL = false;
if (file_exists(dirname(__FILE__) . '/SSI.php') && !defined('SMF'))
{
	$SSI_INSTALL = true;
	require_once(dirname(__FILE__) . '/SSI.php');
}
elseif (!defined('SMF')) // If we are outside SMF and can't find SSI.php, then throw an error
	die('<b>Error:</b> Cannot install - please verify you put this file in the same place as SMF\'s SSI.php.');

if (!file_exists($sourcedir . '/SayThanks.php'))
	die('<b>Error:</b> Cannot install - Required mod does not appear to be installed!  Missing file: <b>Sources/SayThanks.php</b>');

// Echo that we are done if necessary:
if ($SSI_INSTALL)
	echo 'Required file check has been completed.';
?>