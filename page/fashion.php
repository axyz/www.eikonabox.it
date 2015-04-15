<?php include("header.php"); ?>
<?php require '../php/cloudinary.php';?>
<style>body{visibility:hidden;}</style>
<section>
	<?php require '../php/cloud-gallery.php';makeGallery($cloudinary_api, "eikona", "fashion", 360);?>
</section>

<?php include("footer.php"); ?>
