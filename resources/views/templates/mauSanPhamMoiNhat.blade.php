<div class="col-md-4 col-xs-6">
	<div class="product">
		<div class="product-img">
			<a href="<?php echo 'index.php?page=ChiTiet&id=' . $row['Product_Id'] ?>">
				<img src="<?php echo $row['Avatar']; ?>" alt="">
			</a>
			<div class="product-label">
				<span class="new">NEW</span>
			</div>
		</div>

		<div class="product-body">
			<p class="product-category">
				<?php echo $row['Category_Name']; ?>
			</p>
			<h3 class="product-name"><a href="<?php echo 'index.php?page=ChiTiet&id=' . $row['Product_Id'] ?>">
					<?php echo $row['Name']; ?>
				</a></h3>
			<p class="product-category">
				<?php echo $row['Author']; ?>
			</p>
			<h4 class="product-price">
				<?php echo number_format($row['Price'], 0, '.', '.'). ' ₫'; ?>
			</h4>
			<div class="product-rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
			</div>

			<div class="product-btns">
				<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to
						wishlist</span></button>
				<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to
						compare</span></button>
				<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
			</div>
		</div>

		<div class="add-to-cart">
			<?php 
				if($row['Quantity'] > 0) 
					echo '<button class="add-to-cart-btn" onclick="cartAction(\'add\', \'' . $row['Product_Id'] . '\')"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</button>';
				else
				echo '<button class="add-to-cart-btn-disable" disabled>Hết hàng</button>';
			?>
		</div>
	</div>
</div>