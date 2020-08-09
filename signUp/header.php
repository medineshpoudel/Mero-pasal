<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
	<a href="#" class="navbar-brand">Hamropasal</a>

	<ul class="navbar-nav">
		<li class="nav-item">
			<a href="customer.php" class="nav-link <?php if(basename($_SERVER['PHP_SELF'])=="index.php"){ echo "active";
		}else{
			echo "";
		}   ?>">Customer</a>
		</li>
		<li>
			<a href="retailer.php" class="nav-link <?php if(basename($_SERVER['PHP_SELF'])=="index.php"){ echo "active";
		}else{
			echo "";
		}   ?>">Retailer</a>

		</li>
	</ul>
</nav>