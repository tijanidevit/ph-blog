<?php 

	require_once 'conn.php';
if (isset($_POST['title'])) {
	if (!isset($_POST['title']) || empty($_POST['title'])) {
		echo "Title is required and cannot be empty";
		exit();
	}

	if (!isset($_POST['content']) || empty($_POST['content'])) {
		echo "Content is required and cannot be empty";
		exit();
	}

	$title = $_POST['title'];
	$content = $_POST['content'];

	$insert_post_query = $db->query("INSERT INTO posts (title, content) VALUES ('$title', '$content')");
	if ($insert_post_query) {
		echo "Added";
	}
	else{
		echo $db->error;
	}
}
?>