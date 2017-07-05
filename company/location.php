<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/company.css" rel="stylesheet">
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    
    <!-- Srat Content -->
	<main class="sub company">
        <!-- Sub Content Pageheader -->
        <div class="page-header">
            <div class="visual-header">
                <div class="page-intro">
                    <h2 class="page-title">회사개요</h2>
                    <hr>
                    <p>알에스오토메이션을 소개합니다.</p>
                </div>
            </div>
            <!-- Sub lnb -->
            <nav class="sub-lnb">
                <div class="container">
                    <ul class="lnb-list">
                        <li><a href="/company/introduce.php">회사소개</a></li>
                        <li><a href="/company/greeting.php">인사말</a></li>
                        <li><a href="/company/ci.php">CI</a></li>
                        <li><a href="/company/history.php">연혁</a></li>
                        <li class="active"><a href="/company/location.php">사업장안내</a></li>
                        <li><a href="/company/partner.php">파트너쉽 제안</a></li>
                        <li><a href="/company/partner_ship.php">글로벌 파트너쉽</a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="container">
            <section class="headquarters">
                <div class="section-header">
                    <h3 class="content-title">사업장 안내</h3>
                </div>
                <div class="section-content">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#home" aria-controls="home" role="tab" data-toggle="tab">Home</a>
                        </li>
                        <li role="presentation">
                            <a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Profile</a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="home">
                            
                        </div>
                        <div role="tabpanel" class="tab-pane" id="profile">
                            
                        </div>
                    </div>
                </div>
            </section>
        </div>
	</main>
	<!-- //End Content -->
	
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>