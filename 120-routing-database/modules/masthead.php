<a href="?page=home" class="brand">
	<picture class="logo">
		<img src="images/logo.png" alt="">
	</picture>
	Perpetual
</a>

<nav class="site-menu">
	<a href="?page=home" class='<?php if ($currentPage == home) { echo "current-page"; } ?>'>Home</a>
	<a href="?page=products" class='<?php if ($currentPage == products) { echo "current-page"; } ?>'>Shop</a>
	<a href="?page=contact" class='<?php if ($currentPage == contact) { echo "current-page"; } ?>'>Contact</a>
</nav>