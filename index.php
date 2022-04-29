<!DOCTYPE html>
<html lang="en">
	<head>
    <!-- Meta data -->
    <meta charset="utf-8">
    <meta name="description" content="<!DOCTYPE html>
<html lang="en">
	<head>
    <!-- Meta data -->
    <meta charset="utf-8">
    <meta name="description" content="<!DOCTYPE html>
<html lang="en">
	<head>
    <!-- Meta data -->
    <meta charset="utf-8">
    <meta name="description" content="Guess My Number">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Anita Kay">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./fav_index/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index/favicon-16x16.png" />
    <link rel="manifest" href="./fav_index/site.webmanifest" />
    <!-- Link to CSS -->
    <link rel="stylesheet" href="./css/style.css">
    <title>Guess My Number</title>
	</head>
	<body>
    <center>
    <!-- php echo to print the html to the page -->
    <?php 
			echo "<h1>Guess My Number</h1>";
		?>
		<!-- form to get the sides of the base and height from the user -->
    <form action="./results.php" method="post" target="results">
      <label for=lblNum">Enter a number between 1 and 6 here:</label>
      <input type="text" name="number" placeholder="Enter number" step="1" min="1" max ="6"><br><br>
      <input type="submit" value="Enter Guess">
    </form>
		<!-- iframe so results can show on the web page. -->
			<iframe id="results" name="results">			
	    </iframe>
    <!-- Image -->
    <?php
      echo "<br><img src='./images/six.png' alt='temps' width='50%'>";
    ?>
	</body>
</html>