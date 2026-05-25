<?php
$navItems = [
    'home' => ['label' => 'HOME', 'url' => 'index.php'],
    'about' => ['label' => 'ABOUT US', 'url' => 'about.php'],
    'solutions' => ['label' => 'SOLUTIONS', 'url' => 'solutions.php'],
    'infrastructure' => ['label' => 'INFRASTRUCTURE', 'url' => 'infrastructure.php'],
    'investor-relations' => ['label' => 'INVESTOR RELATIONS', 'url' => 'investor-relations.php'],
];
?>
<header class="main-header active-sticky-header">
    <div class="header-sticky">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="index.php">
                    <img src="img/logo2.png" alt="Modern Laminators">
                </a>

                <div class="collapse navbar-collapse main-menu">
                    <div class="nav-menu-wrapper">
                        <ul class="navbar-nav mr-auto" id="menu">
                            <?php foreach ($navItems as $pageKey => $item): ?>
                                <li class="nav-item">
                                    <a class="nav-link<?= $currentPage === $pageKey ? ' active' : ''; ?>" href="<?= $item['url']; ?>"><?= $item['label']; ?></a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>

                    <div class="header-btn">
                        <a href="contact.php" class="btn-default">CONTACT US</a>
                    </div>
                </div>
                <div class="navbar-toggle"></div>
            </div>
        </nav>
        <div class="responsive-menu"></div>
    </div>
</header>
