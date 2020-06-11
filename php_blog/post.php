<?php
 include('inc/header.php');

	// get ID
	$id = mysqli_real_escape_string($conn, $_GET['id']);

	// Create Query
	$query = 'SELECT * FROM tbl_post WHERE id = '.$id;

	// Get Result
	$result = mysqli_query($conn, $query);

	// Fetch Data
	$post = mysqli_fetch_assoc($result);
	//var_dump($posts);

	// Free Result
	//mysqli_free_result($result);

	// Close Connection
	mysqli_close($conn);
?>

<div class="container">
    <a href="<?php echo ROOT_URL; ?>" class="btn btn-default">Back</a>
    <hr>
    <div class="well">
    <h1>
        <?php echo $post['title']; ?>
    </h1>
    <small>Created on
        <?php echo $post['date']; ?> by
        <?php echo $post['author']; ?></small>
    <p style="text-align: justify">
        <?php echo $post['body']; ?>
    </p>
</div>
</div>
<?php include('inc/footer.php'); ?>