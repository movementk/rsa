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
                        <li><a href="/company/location.php">사업장안내</a></li>
                        <li class="active"><a href="/company/partner.php">파트너쉽 제안</a></li>
                        <li><a href="/company/global_partner.php">글로벌 파트너쉽</a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="container">
            <section class="partner">
                <div class="section-header">
                    <h3 class="content-title">파트너쉽 제안</h3>
                </div>
                <div class="section-content">
                    <h4>함께 성장해 가는 비즈니스 파트너의 미래를 위한 투자</h4>
                    <p class="summary">
                        알에스오토메이션이 비즈니스 파트너의 기술을 강화하고 수익 성장의 기회를 성취하도록 하기 위해 비즈니스 파트너를 모집합니다.<br>
                        알에스오토메이션의 비즈니스 파트너쉽은 그 동안 다양한 산업 현장에서 얻은 시장에 대한 통찰력과 중요한 성공 요인을 공유하고 지속 가능한 성장 가능성을 통해 <br>
                        비즈니스 파트너에게 최대 가치를 재공 하는데 그 목적이 있습니다.<br><br>
                        알에스오토메이션만의 차별화된 비즈니스 파트너쉽 프로그램을 통해 글로벌 시장을 선점할 기회를 만나십시오.<br><br>
                        파트너 지원 양식을 다운받아 아래의 메일주소로 연락 주십시오. 빠른시일 내에 연락 드리겠습니다.
                    </p>
                    <div class="btn-area">
                        <p>
                            <a href="#" class="btn btn-red" role="button">
                                <i class="icon-download"></i>파트너 지원양식
                            </a>
                        </p>
                    </div>
                    <ul>
                        <li>hmshin@rsautomation.co.kr</li>
                        <li>Tel . 031-689-9331</li>
                    </ul>
                </div>
            </section>
        </div>
	</main>
	<!-- //End Content -->
	
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>