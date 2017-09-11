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
                        <li class="active"><a href="/company/introduce.php">회사소개</a></li>
                        <li><a href="/company/greeting.php">인사말</a></li>
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
            <div class="introduce">
                <article class="company-intro">
                    <div class="article-header">
                        <h3 class="content-title">회사소개</h3>
                    </div>
                    <div class="article-content">
                        <h4>The Innovative Reliable &amp; Smart Automation</h4>
                        <p>
                            알에스오토메이션은 지난 30여년간, 글로벌 초우량 기업 (삼성테크윈, 삼성전자, 로크웰오토메이션)에서의<br>
                            사업경험을 바탕으로 2010년 1월 1일 새롭게 출범한 자동화기기 전문 기업 입니다.
                        </p>
                        <div class="intro-list">
                            <ol>
                                <li>
                                    <i class="num">01</i>
                                    <p>
                                        본사 및 영업지사<br>
                                        <small>(평택, 부산)</small>
                                    </p>
                                </li>
                                <li>
                                    <i class="num">02</i>
                                    <p>
                                        자동화 연구소<br>
                                        밒 제조센터
                                    </p>
                                </li>
                                <li>
                                    <i class="num">03</i>
                                    <p>
                                        전국 40여 개사의<br>
                                        대리점 및 특판 파트너
                                    </p>
                                </li>
                                <li>
                                    <i class="num">04</i>
                                    <p>
                                        국내외 500여개사의<br>
                                        고객사
                                    </p>
                                </li>
                                <li>
                                    <i class="num">05</i>
                                    <p>
                                        글로벌 제조 /<br>
                                        엔지니어링 서비스
                                    </p>
                                </li>
                            </ol>
                        </div>
                    </div>
                </article>
                <article class="service-area">
                    <div class="article-header">
                        <h3 class="content-title">서비스 영역</h3>
                    </div>
                    <div class="article-content">
                        <p>
                            알에스오토메이션은 개발/제조/영업/서비스 등의 전 분야에서 보다 경쟁력 있는 품질과<br>
                            가격의 제품 공급, 실제적인 서비스로 고객 여러분의 제조 경쟁력 향상에 기여하는 회사가 될 것입니다.
                        </p>
                        <ul class="circle-list">
                            <li>
                                <div class="circle gray-bg">
                                    <p class="figure">
                                        <img src="/assets/images/company/service_area_img01.png" alt="컴포넌트 자동화 제어기기">
                                    </p>
                                    <p class="figcaption">컴포넌트 자동화<br>제어기기</p>
                                </div>
                            </li>
                            <li>
                                <div class="circle red-bg">
                                    <p class="figure">
                                        <img src="/assets/images/company/service_area_img02.png" alt="고객 교육 및 적용 상담">
                                    </p>
                                    <p class="figcaption">고객 교육 및<br>적용 상담</p>
                                </div>
                            </li>
                            <li>
                                <div class="circle gray-bg">
                                    <p class="figure">
                                        <img src="/assets/images/company/service_area_img03.png" alt="시스템 엔지니어링 및 프로젝트 관리 지원">
                                    </p>
                                    <p class="figcaption">시스템 엔지니어링 및<br>프로젝트 관리 지원</p>
                                </div>
                            </li>
                            <li>
                                <div class="circle red-bg">
                                    <p class="figure">
                                        <img src="/assets/images/company/service_area_img04.png" alt="노후 제품의 수리 및 유지보수 지원">
                                    </p>
                                    <p class="figcaption">노후 제품의 수리 및<br>유지보수 지원</p>
                                </div>
                            </li>
                            <li>
                                <div class="circle gray-bg">
                                    <p class="figure">
                                        <img src="/assets/images/company/service_area_img05.png" alt="설치, 시운전 및 응용 기술 지원">
                                    </p>
                                    <p class="figcaption">설치, 시운전 및 응용<br>기술 지원</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </article>
            </div>
        </div>
	</main>
	<!-- //End Content -->
	
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>