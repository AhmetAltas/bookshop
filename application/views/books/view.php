<!DOCTYPE html>
<html>
<head>
	<title><?php echo $books_item['title'] ?></title>
</head>
<div class="ind">
<body>
	<?php echo '<h1>'.$books_item['title'].'</h1>' ?>
<p>Dit boek is geschreven door <?php  echo $books_item['author']; ?>.</p> 
<br>
<p>Het werd gepubliceerd in <?php echo $books_item['year']; ?>.</p>
<br>
<p>De genre van dit boek is <?php echo $books_item['genre']; ?>.</p>
<br>
<p>Beschrijving;
<br>
 <?php echo $books_item['description']; ?> </p>
</div>
</body>
</html>

