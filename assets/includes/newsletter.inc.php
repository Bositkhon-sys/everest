<?php
function setEmail($conn){
	if (isset($_POST['submit-newsletter'])) {
		$newsletterusersemail = $_POST['newsletterusersemail'];
		$newsletterusersname = $_POST['newsletterusersname'];
		
		$sql = "INSERT INTO newsletter (newsletterusersemail, newsletterusersname) VALUES('$newsletterusersemail', '$newsletterusersemail')";
		$result = $conn->query($sql);
	}
}
