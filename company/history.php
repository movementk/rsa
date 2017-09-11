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
                        <li class="active"><a href="/company/history.php">연혁</a></li>
                        <li><a href="/company/location.php">사업장안내</a></li>
                        <li><a href="/company/partner.php">파트너쉽 제안</a></li>
                        <li><a href="/company/global_partner.php">글로벌 파트너쉽</a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="container">
            <section class="history">
                <div class="section-header">
                    <h3 class="content-title">연혁</h3>
                </div>
                <div class="section-content">
                    <div class="content-top">
                        <h4>
                            글로벌 브랜드 RS Automation의 자동화 솔루션,<br>
                            앞서 가는 글로벌 기업이 되겠습니다
                        </h4>
                    </div>
                    <ol>
                        <li>
                            <dl>
                                <dt>2017</dt>
                                <dd>
                                    <p>제2공장 준공</p>
                                    <p>WC300 기업 선정</p>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>2016</dt>
                                <dd>
                                    <p>제어관련  기술특허 35개</p>
                                    <p>대한민국 기술 대상 수상</p>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>2015</dt>
                                <dd>
                                    <p>에너지 제어 장치 국내 1위</p>
                                    <p>스마트 튜닝 원천기술 개발</p>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>2014</dt>
                                <dd>
                                    <p>독일, 일본에 이어 22bit 광학식 엔코더 자체 개발</p>
                                    <p>로봇제어기 누적 1.2만대 공급</p>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>2013</dt>
                                <dd>
                                    <p>모션제어기 매출 국내 1위</p>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>2012</dt>
                                <dd>
                                    <p>누적 매출 2,000억  달성</p>
                                    <p>모션제어기 수출 국내 최초  2,000만불/년</p>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>2010</dt>
                                <dd>
                                    <p>알에스오토메이션 출범</p>
                                </dd>
                            </dl>
                        </li>
                    </ol>
                </div>
            </section>
        </div>
	</main>
	<!-- //End Content -->
	
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>