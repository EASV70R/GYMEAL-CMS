<div id="spinner"
    class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" role="status"></div>
</div>

<div class="container-fluid fixed-top px-0">
    <nav class="navbar navbar-expand-lg navbar-light py-lg-0 px-lg-5">
        <a href="index.php" class="navbar-brand ms-4 ms-lg-0">
            <h1 class="fw-bold text-primary m-0">F<span class="text-secondary">I</span>T</h1>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="<?= (BASE_PATH); ?>index.php" class="nav-item nav-link">Home</a>
                <a href="<?= (BASE_PATH); ?>about.php" class="nav-item nav-link">About Us</a>
                <div class="nav-item dropdown">
                    <!-- 
                        btn-sm-square bg-white rounded-circle ms-3
                    -->
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><small class="fa fa-user text-body"></small></a>
                    <div class="dropdown-menu dropdown-menu-left">
                        <?php if (Session::Get('login')) : ?>
                        <p class="dropdown-item"><?= Util::Print(Session::Get('username'));?></p>
                        <a href="<?= (BASE_PATH); ?>profile.php" class="dropdown-item">Profile</a>
                        <a href="<?= (BASE_PATH); ?>logout.php" class="dropdown-item">Logout</a>
                        <?php else : ?>
                        <a href="<?= (BASE_PATH); ?>login.php" class="dropdown-item">Login</a>
                        <a href="<?= (BASE_PATH); ?>register.php" class="dropdown-item">Register</a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</div>