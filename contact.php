<!doctype html>
<?php include 'navi.php'?>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SULCI</title>
    <link rel="stylesheet" href="css/contact_style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
	

</head>
	

<body>
    <div class="container">
        <h1>Contact Us</h1>
        <p>Feel free to contact us and we will get back to you as soon as we can.</p>
        <form action="process.php" method="POST">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email">
            <label for="subject">Subject:</label>
            <input type="text" name="subject" id="subject">
            <label for="message">Message</label>
            <textarea name="message" cols="30" rows="10"></textarea>
            <input type="submit" value="Send">
        </form>
    </div>
	
</body>
<footer>	
	<div class="foot" style="padding: 10px; font-style: italic;">
		
		<a href="contact.php" style="text-decoration: none; color: white; padding: 10px;"> Contact Us</a>
		<a href="https://sulci.co.jp/pages/SDGs%E3%81%AE%E5%8F%96%E3%82%8A%E7%B5%84%E3%81%BF" style="text-decoration: none; color: white; padding: 10px;"> About us</a>
	</div>
	<div class="social">
		<div class="social_media">
			<a href="https://www.facebook.com/jemimatalcoseba" class="fa fa-facebook-square"></a>
			<a href="https://www.instagram.com/sulci_japan/" class="fa fa-instagram"></a>
			<a href="https://www.youtube.com/channel/UCf5QryvFcYM5qDQ2JJf17Dg" class="fa fa-youtube-square"></a>
		</div>
		 
				<h2>Copyright &copy; <script>document.write(new Date().getFullYear())</script> Sulci </h2>
	
	</div>
</footer>
		
		</div>
		
	</div>
	
	

	
</body>
	
</html>