<!DOCTYPE HTML>

<script>
  var ct = 0;
  function clicker()
  {
      ct += 1;
      document.getElementById('changeThis').innerHTML = ct;
  }
  function signIn()
  {
      document.getElementById('email').value = "";

      //more code here
  }

</script>
<html>
	<head>
		<title>Button presser</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<span class="logo"><img src="images/logo.svg" alt="" /></span>
						<h1 id="centerSign">Sign up/Sign in Form</h1>
						
					</header>
          
          <h4  align="center">Email:</h4>
          <input align="center" class="" id="email" type="text" value=""><br>
         
          <button class="moveThis" type="button" onclick="signIn()">
           Sign in
          </button><br><br>
          <div class="moveEmail" id="email1"></div><br><br>
          <button class="moveThis" id="clicker" type="button" onclick="clicker()">
           Click
          </button>
          <h2 class="clickOutput" id="changeThis"></h2>


			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>