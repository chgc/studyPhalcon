# Phalcon Study Note

##linkto遇到subfolder形式的website

	Code:
	echo Phalcon\Tag::linkTo("signup", "Sign Up Here!");

	得到的結果是
		localhost/signup 
	應看到的結果為
	localhost/tutorial/signup

解法: 在bootstrap file(ex: public/index.php)

	// Setting up the view component
	$di->set(
    	'url', 
	    function() {
    	    $url = new \Phalcon\Mvc\Url();
    	    $url->setBaseUri('/tutorial/');
    	    return $url;
    	}
	);

This will effectively instruct Phalcon to use the subfolder internally as well as the \Phalcon\Tag::linkTo() function. Please note the ending slash "/" character in the setBaseUri()
