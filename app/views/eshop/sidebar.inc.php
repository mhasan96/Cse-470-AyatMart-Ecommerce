<div class="col-sm-3">
	<div class="left-sidebar">
		<h2>Category</h2>
		<div class="panel-group category-products" id="accordian"><!--category-productsr-->
			
			<?php if(isset($categories) && is_array($categories)):?>
				<?php foreach($categories as $cat):

						if($cat->parent > 0){
							continue;
						}

						$parents = array_column($categories, "parent");
					?>

 					<!--category with children-->
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a <?= in_array($cat->id, $parents) ? 'data-toggle="collapse"': '' ; ?>  data-parent="#accordian" href="<?= in_array($cat->id, $parents) ? '#'.$cat->category : ROOT . "shop/category/" . $cat->category;?>">
									<?=$cat->category?>
									<?php if(in_array($cat->id, $parents)):?>
										<span class="badge pull-right"><i class="fa fa-plus"></i></span>
									<?php endif;?>
								</a>
							</h4>
						</div>
						<?php if(in_array($cat->id, $parents)):?>
							<div id="<?=$cat->category?>" class="panel-collapse collapse">
								<div class="panel-body">
									<ul>
										<li><a href="<?=ROOT . "shop/category/" . $cat->category;?>">ALL</a></li>
										<?php foreach($categories as $sub_cat):?>
											<?php if($sub_cat->parent == $cat->id):?>
												<li><a href="<?=ROOT . "shop/category/" . $sub_cat->category;?>"><?=$sub_cat->category?></a></li>
											<?php endif; ?>
										<?php endforeach; ?>
									</ul>
								</div>
							</div>
						<?php endif;?>
					</div>
					 <!--category without children
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title"><a href="#"><?=$cat->category?></a></h4>
						</div>
					</div>-->

			 	<?php endforeach; ?>
		 	<?php endif; ?>

		</div><!--/category-products-->
	
		                 <h2>Advanced Search</h2>
                      	 <!--searchbox-->
                      	 <style>
                      	 	.my-table{
                      	 		background-color: #eee;
                      	 	}
                      	 	.my-table th{
                      	 		background-color: #ddd;
                      	 	}
                      	 	
                      	 </style>

  
                     

		<div class="shipping text-center"><!--shipping-->
			<img src="<?= ASSETS . THEME ?>images/home/shipping.jpg" alt="" />
		</div><!--/shipping-->
	
	</div>
</div>

<script>
	
	var price_range = document.querySelector(".price-range");
	price_range.addEventListener('mousemove',change_price_range);
	
	var quantity_range = document.querySelector(".quantity-range");
	quantity_range.addEventListener('mousemove',change_price_range);

	function change_price_range(e)
	{
		var tooltip = e.currentTarget.querySelector(".tooltip-inner");
		var min_price = e.currentTarget.querySelector(".min-value");
		var max_price = e.currentTarget.querySelector(".max-value");
		
		var values = tooltip.innerHTML;
		var parts = values.split(":");

		min_price.value = parts[0].trim();
		max_price.value = parts[1].trim();
		
	}


</script>