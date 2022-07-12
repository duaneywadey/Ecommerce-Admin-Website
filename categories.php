
<?php 
include('includes/header.php'); 
include('functions/userfunctions.php'); 

?>

<div class="py-3 bg-primary">	
	<div class="container">	
		<h6 class="text-white">Home / Collections</h6>
	</div>
</div>

<div class="py-5">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>Our Collections</h1>
				<hr>	
				<div class="row">
					<?php
					$categories = getAllActive("categories");

					if(mysqli_num_rows($categories) > 0)
					{
						foreach($categories as $item)
						{

					?>
					<div class="col-md-3 mb-4 mt-4">
						<a href="products.php?category=<?= $item['slug']; ?>">
							<div class="card card-prods shadow p-3 mb-5 bg-white rounded">
								<img class="card-img-top mx-auto" src="uploads/<?= $item['image']; ?>" alt="Card image cap" style="width: 80%; height:100%;">
							    <div class="card-body">
								    <h5 class="card-title text-center"><?=$item['name'];?></h5>
							    </div>
						  	</div>
					  	</a>

					</div>

					<?php	
							
						}
					}

					else
					{
						echo "No data available";
					} 

					?>	
					</div>	
				</div>
			</div>
		</div>
	</div>
</div>

<?php include('includes/footer.php'); ?>