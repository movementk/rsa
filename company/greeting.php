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
                        <li class="active"><a href="/company/greeting.php">인사말</a></li>
                        <li><a href="/company/ci.php">CI</a></li>
                        <li><a href="/company/history.php">연혁</a></li>
                        <li><a href="/company/location.php">사업장안내</a></li>
                        <li><a href="/company/partner.php">파트너쉽 제안</a></li>
                        <li><a href="/company/global_partner.php">글로벌 파트너쉽</a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="container">
            <section class="greeting">
                <div class="section-header">
                    <h3 class="content-title">인사말</h3>
                </div>
                <div class="section-content">
                    <div class="row">
                        <div class="col-xs-7">
                            <p class="greeting-txt">
                                고객 여러분께<br><br>
                                지난 사반세기를 오로지 자동화 산업 한 분야에 매진해 온 저희들, 2010년 1월 알에스 오토메이션으로 새롭게 출발하였습니다.<br><br>
                                더욱 치열해지는 경쟁환경, 그리고 예측하기 어려운 금융 환경 등, 갈수록 어려워지는 경영 여건 속에서 이제 그동안 쌓아온 다양한 산업 현장에서의 경험과 더욱 차별화된 서비스로, 고객 여러분의 제조 경쟁력 향상에 도움이 될 수 있도록 최선을 다하고자 합니다.<br><br>
                                향후 저희 알에스오토메이션은, 글로벌 컴포넌트 오토메이션 업계의 선두 기업을 목표로 모든 역량을 집중해, 고객 여러분께 진정한 가치를 드릴 수 있는 경쟁력 있는 회사로 거듭 태어날 것을 약속 드립니다.
                            </p>
                            <strong>
                                다시 한번 지금까지 보내주신 성원에 감사드리며, <br>
                                믿음직한 파트너로서 고객 여러분의 성원에 보답할 것입니다.
                            </strong>
                            <h4>
                                <small>대표이사 강덕현</small>
                                <img src="/assets/images/company/ceo_signature.gif" alt="대표이사 사">
                            </h4>
                        </div>
                        <div class="col-xs-5">
                            <figure>
                                <img src="/assets/images/company/ceo_img.jpg" alt="대표이사 강덕현">
                            </figure>
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