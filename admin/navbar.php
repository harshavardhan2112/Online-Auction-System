
<style>
	.collapse a{
		text-indent:10px;
	}
</style>

<nav id="sidebar" class='mx-lt-7 bg-white' >

		
		<div class="sidebar-list">
				<a style="font-weight:bold" href="index.php?page=home" class="nav-item nav-home"><span class='icon-field'></span> Home</a>
				<a style="font-weight:bold" href="index.php?page=categories" class="nav-item nav-categories"><span class='icon-field'></span> Categories</a>
				<a style="font-weight:bold" href="index.php?page=products" class="nav-item nav-products"><span class='icon-field'></span> Products</a>
				<a style="font-weight:bold" href="index.php?page=bids" class="nav-item nav-bids"><span class='icon-field'></span> Bids</a>
				<?php if($_SESSION['login_type'] == 1): ?>
				
				
			<?php endif; ?>
		</div>

</nav>
<script>
	$('.nav_collapse').click(function(){
		console.log($(this).attr('href'))
		$($(this).attr('href')).collapse()
	})
	$('.nav-<?php echo isset($_GET['page']) ? $_GET['page'] : '' ?>').addClass('active')
</script>
