<!DOCTYPE html >
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
		<nav>
			<div class="main-wrapper">
				<ul>
				<li> <a href="index.php ">Home</a></li>
				</ul>
				<div class="nav-login">
					<form>
						<input type="text" name="uid" placeholder="username/email">
						<input type="pasword" name="pwd" placeholder="pasword">
						<button>submit</button>
					</form>
					<a href="signup.php">Sign up</a>
					<label for="when">Date:</label>
                    <input id="when" name="when" type="date">
                    <iframe name='proprofs' id='proprofs' width='450' height='615' frameborder=0 marginwidth=0 marginheight=0 src='https://www.proprofs.com/quiz-school/story.php?title=cover-letter-resume&id=302259&ew=430'></iframe><div style='font-size:10px; font-family:Arial, Helvetica, sans-serif; text-align:left;'><a href='https://www.proprofs.com/quiz-school/topic/' title='' target='_blank' rel='nofollow'></a></div>
                    <?php
                        echo " Today is " . date("l") . ". ";
                     ?>

					
				</div>

				
			</div>
		</nav>


	</header>

</body>
</html>