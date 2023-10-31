

<!-- Shop section -->
<section class="shop-section">
	<div class="auto-container">
		<div class="row">
			<div class="col-lg-12 py-4">
				<h1>Product category - <?= $category->title; ?></h1>
				<p><?= $category->excerpt; ?></p>
			</div>
			<?php foreach($products as $p) { ?>
				<div class="col-lg-4 col-md-6 shop-block">
					<div class="inner-box">
						<div class="image"><a href="<?= base_url('product/'.$p->id) ?>"><img src="<?= $p->image; ?>" alt=""></a></div>
						<div class="content-upper">
							<h4><a href="<?= base_url('product/'.$p->id) ?>"><?= $p->title; ?></a></h4>
							<div class="price">MDS Metals</div>
						</div>
						<div class="bottom-content">
							<div class="rating">
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
							</div>
							<div class="cart"><i class="flaticon-shopping-cart"></i>Av. on inquiry</div>
							<div class="link"><a href="<?= base_url('product/'.$p->id) ?>"><i class="flaticon-arrow-1"></i></a></div>
						</div>
					</div>
				</div>
			<?php }?>
		</div>
	</div>
</section>

