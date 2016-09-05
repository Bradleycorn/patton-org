<?php

	function getActivePageClass($title) {
		global $PageTitle;

		if (!is_array($title)) {
			$title = array($title);
		}

		foreach($title as $titleItem) {
			if ($PageTitle == $titleItem) {
				echo  "active";
				return;
			}
		}
	}

	function RelativeTime($date, $fallback = 'M j, Y', $postfix = 'ago')
	{
		if (!empty($postfix))
			$postfix = ' ' . $postfix;

	    $diff = time() - $date; //strtotime($date);
	    if($diff < 30)
	        return "just now";

	    $diff = round($diff/60);
	    if($diff < 60)
	        return $diff . ' min'. $postfix;

	    $diff = round($diff/60);
	    if($diff < 24)
	        return $diff . ' hour'. ($diff != 1 ? 's' : '') . $postfix;

	    $diff = round($diff/24);
	    if($diff < 7)
	        return $diff . ' day'. ($diff != 1 ? 's' : '') . $postfix;

	    $diff = round($diff/7);
	    if($diff < 3)
	        return $diff . ' week'. ($diff != 1 ? 's' : '') . $postfix;

	    //$diff = round($diff/4);
	    //if($diff < 12)
	    //    return $diff . ' month'. ($diff != 1 ? 's' : '') . $postfix;

	    return date($fallback, $date);
	    //return date($fallback, strtotime($date));
	}

	function GetSiteProtocol() {
		if (isset($_SERVER['HTTPS'])) {
			if ($_SERVER['HTTPS'] == "" || $_SERVER['HTTPS'] == "off" || $_SERVER['HTTPS'] === false)
				return "http://";
			else
				return "https://";
		} else {
			return "http://";
		}
	}

	function RequestData($key, $default=null, $emptyAsDefault = false, $method = null) {
		if ($method != null)
			$method = strtoupper($method);

		if ($method == "GET") {
			if (isset($_GET[$key]) && (!$emptyAsDefault || !empty($_GET[$key])))
				return htmlentities($_GET[$key], ENT_QUOTES, 'UTF-8', false);
			return $default;
		} elseif ($method == "POST") {
			if (isset($_POST[$key]) && (!$emptyAsDefault || !empty($_POST[$key])))
				return $_POST[$key];
			return $default;
		} elseif ($method == "COOKIE") {
			if (isset($_COOKIE[$key]) && (!$emptyAsDefault || !empty($_COOKIE[$key])))
				return $_COOKIE[$key];
			return $default;
		} else {
			if (isset($_REQUEST[$key]))
				return $_REQUEST[$key];
			else {
				$data = json_decode(file_get_contents("php://input"), true);
				if (count($data) > 0 && isset($data[$key]) && (!$emptyAsDefault || !empty($data[$key])))
					return $data[$key];
				return $default;
			}
		}
	}


	function SetSectionInfo() {
		global $SiteSection, $SubSection, $PathInfo, $RequestFile, $PageTitle, $SectionNavFile, $SectionTitle;
		$SiteSection = null;
		$SubSection = null;
		$RequestFile = null;
		$PageTitle = null;
		$SectionNavFile = null;
		$SectionTitle = null;


		//$path will have the "path" section of the BROWSER url
		//	That is, no domain, and no querystring ... so something like:
		// /path/to/file.php    or ...  /path/to/folder/
		$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);


		//if $path is to a folder, we need to add a filename on the end,
		//or else pathinfo will get confused in the next step.
		if (substr($path, -1) == '/')
			$path.="index.php";


		//pathinfo will return the path without a filename on the end
		// for example... /path/to/something
		$pathInfo = str_replace("\\", "/", trim(pathinfo($path, PATHINFO_DIRNAME)));
		$RequestFile = trim(pathinfo($path, PATHINFO_BASENAME));


		if ($pathInfo != "/") {
			$pathInfo = strtolower(trim($pathInfo, "/"));
			$pathParts = explode("/",$pathInfo);
			$PathInfo = $pathParts;
			$SiteSection = $pathParts[0];
			$PageTitle = ucwords($SiteSection);
			$SectionNavFile = Slugify($SiteSection).'.php';
			$SectionTitle = ucwords($SiteSection);

			if (count($pathParts) > 1) {
				$SubSection = $pathParts[1];
				$PageTitle = ucwords($SubSection . " | " . $PageTitle);
			}
		} else {
			if (basename($_SERVER['SCRIPT_NAME']) == "index.php") {
				$SiteSection = "home";
			}
		}
	}

	function Slugify($text, $makeLowerCase = true) {
		// replace non letter or digits by -
		$text = preg_replace('~[^\\pL\d]+~u', '-', $text);

		// trim
		$text = trim($text, '-');

		// transliterate
		$text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

		// lowercase
		if ($makeLowerCase) {
			$text = strtolower($text);
		}

		// remove unwanted characters
		$text = preg_replace('~[^-\w]+~', '', $text);

		if (empty($text)) {
			return 'n-a';
		}

		return $text;
	}

	function Deslugify($text, $ucwords = true) {
		$text = str_ireplace("-", " ", $text);

		if ($ucwords)
			$text = ucwords($text);

		return $text;
	}

	function FormatPhone($phone) {
		if (empty($phone)) return "";

		//Remove anything that's not a number
		$phone = preg_replace('/\D/', '', $phone);

		//If there are more than 10 digits,
		//we strip off the FRONT to get to 10
		//i.e. 18005556666 becomes 8005556666
		$phone = substr($phone, -10);

		if (strlen($phone) == 7)
			$phone = "502".$phone;
		return substr($phone, 0, 3).".".substr($phone, 3, 3).".".substr($phone,6);
	}

	function ScrubText($text) {
		if (!isset($text) || trim($text)==='') {
			return '';
		}

		return trim($text);
	}

	function CheckPassword($password, $confirm) {
		if ($password !== $confirm) //passwords don't match
			return false;
		elseif (empty($password)) //password(s) are empty
			return "";
		else //passwords match
			return $password;
	}

	function SendMail($to, $subject, $message, $html = true, $from = FROM_EMAIL) {
		$headers = "";
		if ($html) {
			$headers  = 'MIME-Version: 1.0' . "\r\n";
			$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		}
		$headers .= "From: " . $from;

		return mail($to, $subject, $message, $headers);
	}

	function HasFormError($fieldName) {
		global $FormErrors;

		if (isset($FormErrors[$fieldName])) {
			return $FormErrors[$fieldName];
		}

		return false;
	}

	function IsFirstElement($array, $key) {
		reset($array);
		return ($key === key($array));
	}

	function IsLastElement($array, $key) {
		end($array);
		return ($key === key($array));
	}

	function GetSvg($path, $print = false) {
		$svg = file_get_contents($_SERVER['DOCUMENT_ROOT'] . IMG_PATH . $path);

		if ($print) {
			echo $svg;
		} else {
			return $svg;
		}
	}


	function DeleteCookie($name) {
		$value = "";
		$expires = time - (60*60*24); //yesterday

		setcookie($name,$value,$expires,"/");
	}

?>
