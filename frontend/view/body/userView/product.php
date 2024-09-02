<div class="container mt-5">
	<div class="row mt-5 justify-content-center">
		<div class="row pb-4" data-aos="fade-up" data-aos-duration="1500" data-aos-delay = "1500" data-aos-easing="linear">
			<p class="title text-white text-center">Our Products</p>
		</div>
		<div class="horizontalLine mt-4 mb-4"></div>
		<div class="row justify-content-center">

<?php
	
	require '../repository/CategoryRepository.php';
	
	$categoryRepository = new CategoryRepository();
	$categoryList = $categoryRepository->getAllCategory();
	
	$i = 0;
	$length = count($categoryList);
	while ($i < $length)
	{
?>		
		<div class="col-sm-4 justify-content-center mt-3" data-aos="fade-left" data-aos-offset="30em" data-aos-duration="1000" data-aos-delay = "<?php echo(2000 + $i*200)?>" data-aos-easing="linear">
			<div class="productContainer text-center justify-content-center">
				<div class="productCard">
					<a>
						<img src="<?php echo($categoryList[$i]->getLink()) ?>" class="productImage">
						<span class="productTitle"> <?php echo($categoryList[$i]->getCategoryName()) ?> </span>
					</a>
				</div>
			</div>
		</div>

<?php		
		$i++;
	}

?>

		</div>
	</div>
</div>