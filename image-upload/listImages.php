<?php
$sql = "SELECT imageId FROM user_profile_img ORDER BY imageId DESC";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->get_result();
?>

<?php
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        ?>
    <?php ?>
		<img src="imageView.php?image_id=<?php echo $row["imageId"];?>">
<?php
    }
}
?>