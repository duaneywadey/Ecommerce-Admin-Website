
<?php 
  
include('includes/header.php'); 
include('functions/userfunctions.php'); 

if(isset($_GET['category']))
{

// Get slug value of category
$category_slug = $_GET['category'];


$category_data = getSlugActive("categories", $category_slug);
$category = mysqli_fetch_array($category_data);
$cid = $category['id'];

?>

<div class="py-3 bg-primary">	
	<div class="container">	
		<h6 class="text-white">Home / Collections / <?= $category['name']; ?></h6>
	</div>
</div>

<div class="py-5">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1><?= $category['name']; ?></h1>
				<hr>	
				<div class="row">
					<?php
					$products = getProdByCategory($cid);

					if(mysqli_num_rows($products) > 0)
					{
						foreach($products as $item)
						{

					?>
					<div class="col-md-3 mb-4 mt-4">
						<a href="product-view.php?product=<?= $item['id']; ?>" style="text-decoration: none;">
							<div class="card card-prods shadow p-3 mb-5 bg-white rounded">
								<img class="card-img-top mx-auto" src="uploads/<?= $item['image']; ?>" alt="Card image cap" style="width: 150px; height:150px;">
							    <div class="card-body">
								    <h5 class="card-title text-center" style="color: black;   "><?= $item['name']; ?></h5>
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

<?php

}

else
{
	echo "Something went wrong!";
}

include('includes/footer.php'); 


?>