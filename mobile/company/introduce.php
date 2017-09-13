<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link href="/mobile/assets/css/sub.css" rel="stylesheet">
<link href="/mobile/assets/css/company.css" rel="stylesheet">
</head>
<body class="company">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
    <!-- Content Start -->
    <main id="content">
        <!-- page-header -->
        <div class="page-header">
            <div class="container">
                <h2>회사소개</h2>
            </div>
            <div class="btn-control">
                <a href="/mobile/company/partner.php" class="btn-pre">
                    <i class="icon-left-open-big">
                        <span class="sr-only">이전 페이지</span>
                    </i>
                </a>
                <a href="/mobile/company/greeting.php" class="btn-next">
                    <i class="icon-right-open-big">
                        <span class="sr-only">다음 페이지</span>
                    </i>
                </a>
            </div>
        </div>
        
        <!-- page content -->
        <section class="introduce">
            <div class="container">
                <div class="section-header">
                    <h3 class="section-title">회사소개</h3>
                </div>
            </div>
            <div class="section-content">
                <div class="container">
                    <figure class="intro-img">
                        <img src="/mobile/assets/images/company/introduce_img01.jpg" class="img-responsive" alt="">
                        <figcaption>
                            <h4>The Innovative Reliable &amp; Smart Automation</h4>
                            <p>
                                알에스오토메이션은 지난 30여년간,글로벌 초우량 기업<br>
                                (삼성테크윈, 삼성전자, 로크웰오토메이션)에서의<br>
                                사업경험을 바탕으로 2010년 1월 1일  새롭게 출범한<br>
                                자동화기기 전문 기업 입니다.
                            </p>
                        </figcaption>
                    </figure>
                </div>
                <article class="company-infomation">
                    <div class="container">
                        <figure>
                            <img src="/mobile/assets/images/company/introduce_img02.png" class="img-responsive" alt="">
                            <figcaption class="sr-only">
                                <ul>
                                    <li>
                                        01 본사 및 영업지사(평택, 부산)
                                    </li>
                                    <li>
                                        02 자동화 연구소 및 제조센터 
                                    </li>
                                    <li>
                                        03 전국 40여개사의 대리점 및 특판 파트너
                                    </li>
                                    <li>
                                        04 국내외 500여개사의 고객사
                                    </li>
                                    <li>
                                        05 글로벌 제조 / 엔지니어링 서비스
                                    </li>
                                </ul>
                            </figcaption>
                        </figure>
                    </div>
                </article>
            </div>
        </section>
        <section class="service-area">
            <div class="container">
                <div class="section-header">
                    <h3 class="section-title">서비스 영역</h3>
                </div>
                <div class="section-content">
                    <p class="summary">
                        알에스오토메이션은 금번 신규회사 출범으로<br>
                        개발/제조/영업/서비스 등의 전 분야에서 보다<br>
                        <b>경쟁력 있는 품질과 가격의 제품 공급,<br>
                        실제적인 서비스로</b> 고객 여러분의 <b>제조<br>
                        경쟁력 향상에 기여하는 회사</b>가 될 것입니다.
                    </p>
                    <ul>
                        <li>
                            <figure>
                                <img src="/mobile/assets/images/company/service_img01.png" alt="컴포넌트 자동화 제어기기">
                                <figcaption>컴포넌트 자동화<br>제어기기</figcaption>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="/mobile/assets/images/company/service_img02.png" alt="고객 교육 및 적용 상담">
                                <figcaption>고객 교육 및<br>적용 상담</figcaption>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="/mobile/assets/images/company/service_img03.png" alt="시스템 엔지니어링 및 프로젝트 관리 지원">
                                <figcaption>시스템 엔지니어링 및<br>프로젝트 관리 지원</figcaption>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="/mobile/assets/images/company/service_img04.png" alt="노후 제품의 수리 및 유지보수 지원">
                                <figcaption>노후 제품의 수리 및<br>유지보수 지원</figcaption>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="/mobile/assets/images/company/service_img05.png" alt="설치, 시운전 및 응용 기술 지원">
                                <figcaption>설치, 시운전 및 응용<br>기술 지원</figcaption>
                            </figure>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
</body>
</html>