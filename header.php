<?php require_once __DIR__.'/backend/config.php'; ?>

<header>
    <div class="header_container">
        <img src="images/logo-big-v4.png" alt="logo1">
        <nav>

            <a class="home_link" href="<?php echo $base_url; ?>/index.php">Home</a> 
            <a class="taken_link" href="<?php echo $base_url; ?>/tasks/index.php">Takenoverzicht</a>
            <a class="login_link" href="<?php echo $base_url; ?>/tasks/login.php">Login</a>

        </nav>
    </div>
</header>