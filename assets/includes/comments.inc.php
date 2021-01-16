<?php
   function setComments($conn) {
	   if (isset($_POST['submit-comment'])) {
		  $uid = $_POST['uid'];
		  $date = $_POST['date'];
		  $comment = $_POST['comment'];
		   
		   $sql = "INSERT INTO comments (uid, date, message) VALUES ('$uid','$date','$comment')";
		   $result = $conn->query($sql);
	   }
   }

function getComments($conn) {
	$sql = "SELECT * FROM  comments";
	$result = $conn->query($sql);
	while($row = $result->fetch_assoc()) {
		echo "<div class='comment-box each'><p>";
		
		echo "<div class='comment-uid'>";
			echo $row['uid']."<br>";
		echo "</div>";
		echo "<div class='message-comment'>";
			echo nl2br($row['message']."<br>");
		echo "</div>";
		echo "<div class='date'>";
			echo $row['date'];	
		echo "</div>";
		
		echo "</p></div>";
	}
	
	
// header("Location: index.php");
}
