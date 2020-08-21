<?php $session = json_decode(Session::get('cart'),true) ?>
<?php if ($session != NULL): ?>
	<?php foreach($session as $guid => $cart): ?>
	<div class="list-group-item list-group-item-action">
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
			<div class="col-2">
				<i id="<?php echo($guid) ?>" class="removecart far fa-trash-alt" style="cursor:pointer"></i>
			</div>
		</div>
	</div>
	<?php endforeach ?>
	<!-- View all -->
	<a href="<?php if (count($session) == 10){ echo '/shoppingcart';}else{echo 'javascript:void(0)';} ?>" class="dropdown-item text-center text-primary font-weight-bold py-3">Finish</a>
<?php endif ?>
