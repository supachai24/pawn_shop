<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.php">Pawn Shop</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.php">PS</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">HOME</li>
            <li class="nav-item dropdown">
                <?= (basename($_SERVER['PHP_SELF']) == "index.php" || basename($_SERVER['PHP_SELF']) == "pledge-ticket-details.php") ? "<li class=\"active\" >" : "<li>" ?>
                    <a class="nav-link" href="index.php"><i class="fas fa-home"></i><span>Home</span></a>
                </li>
            </li>
            <li class="menu-header">PAGES</li>
            <li class="nav-item dropdown">
                <?= (basename($_SERVER['PHP_SELF']) == "pledging-process.php") ? "<li class=\"active\" >" : "<li>" ?>
                    <a class="nav-link" href="pledging-process.php"><i class="fas fa-file-alt"></i><span>Pledging Process</span></a>
                </li>
            </li>
            <li class="nav-item dropdown">
                <?= (basename($_SERVER['PHP_SELF']) == "customer.php" ||
                    basename($_SERVER['PHP_SELF']) == "customer-details.php" ||
                    basename($_SERVER['PHP_SELF']) == "edit-customer.php" ||
                    basename($_SERVER['PHP_SELF']) == "add-customer.php") ? "<li class=\"active\" >" : "<li>" ?>
                    <a class="nav-link" href="customer.php"><i class="fas fa-user"></i><span>Customer</span></a>
                </li>
            </li>
            <li class="menu-header">Setting</li>
            <li class="nav-item dropdown <?= (basename($_SERVER['PHP_SELF']) == "user.php" || 
                basename($_SERVER['PHP_SELF']) == "add-user.php" ||
                basename($_SERVER['PHP_SELF']) == "edit-user.php") ? "active" : "" ?>">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-cog"></i><span>Setting</span></a>
                <ul class="dropdown-menu">
                    <?= (basename($_SERVER['PHP_SELF']) == "user.php" ||
                        basename($_SERVER['PHP_SELF']) == "add-user.php" ||
                        basename($_SERVER['PHP_SELF']) == "edit-user.php") ? "<li class=\"active\" >" : "<li>" ?>
                        <a class="nav-link" href="user.php"><span>User</span></a>
                    </li>
                </ul>
            </li>
        </ul>
    </aside>
</div>