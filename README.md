
# # Kemal-Softic-Photo

### Photography Portfolio Website

*Link to the project*: [Kemal Softić](https://kemalsoftic.com/)

A photographers portfolio doesn't need a lot of images. It's more important to have good ones that leave an impact on the viewer.
 ___
![Project Image](https://raw.githubusercontent.com/SeadSabanovic/Kemal-Softic-Photo/main/img/kemo.png)
___

### PHP Functionality:
* **Contact Form**
	* PHP Mailer
	
* **Language Changer**
	* Simple option to switch between two languages. All is done in the config file.
```PHP
<?php
	session_start();
	if (!isset($_SESSION['lang']))
		$_SESSION['lang'] = "en";
	else if (isset($_GET['lang']) && $_SESSION['lang'] != $_GET['lang'] && !empty($_GET['lang'])) {
		if ($_GET['lang'] == "en")
			$_SESSION['lang'] = "en";
		else if ($_GET['lang'] == "bs")
			$_SESSION['lang'] = "bs";
	}
	require_once  ""  .  $_SESSION['lang'] .  ".php";
```
___
### #Issues
* The only thing I would change now if I ever go back to this project is that instead of **.jpeg** images inside `<img>` elements, I would probably use **.webp** images inside `<picture>` elements with fallback sources just in case. Current the support for **.webp** is **92.13**%.

