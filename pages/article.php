<?php
	include_once 'assets/php/header.php';
?>

<div class="projects-container">
		<?php
	
		$title = mysqli_real_escape_string($conn, $_GET['title']);
		$date = mysqli_real_escape_string($conn, $_GET['date']);
		
		$sqlSearch = "SELECT * FROM article WHERE a_title='$title' AND a_date='$date'";
		$resultsearch = mysqli_query($conn, $sqlSearch);
		$queryResults = mysqli_fetch_assoc($resultsearch);
		
		if ($queryResults > 0) {
			while($row = mysqli_fetch_assoc($resultsearch)) {
				echo "
					<div class='article-box'>
						<h4>".$row['a_title']."</h4>
						<a href='article.php?title=".$row['projects']."&date=".$row['date']."'><h3>".$row['projects']."</h3></a>
						<p>".$row['a_text']."</p>
						<p>".$row['a_author']."</p>
						<p>".$row['hashtag']."</p>
						<p>".$row['a_date']."</p>
					</div>
				";
				/* 
				========================================== 
				REMINDER: ADD MORE ARTICLE
				========================================== 
				*/
			}
		}
			
		?>
</div>

<?php
	include_once 'assets/php/footer.php';
?>
