<?php $cookie = json_decode(Cookie::get('shoppingcart'),true) ?>
<?php if ($cookie != NULL): ?>
	<?php foreach($cookie as $cart): ?>
	<a href="#!" class="list-group-item list-group-item-action">
		<div class="row align-items-center">
			<div class="col-auto">
				<!-- Avatar -->
				<img alt="Image placeholder" src="/uploads/<?php echo($cart['image']) ?>" class="avatar rounded-circle">
			</div>
			<div class="col ml--2">
				<div class="d-flex justify-content-between align-items-center">
					<div>
						<h4 class="mb-0 text-sm"><?php echo($cart['name']) ?></h4>
					</div>
					<div class="text-right text-muted">
						<small></small>
					</div>
				</div>
			</div>
		</div>
	</a>
	<?php endforeach ?>
<?php endif ?>
