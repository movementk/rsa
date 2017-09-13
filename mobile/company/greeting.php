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
                <h2>인사말</h2>
            </div>
            <div class="btn-control">
                <a href="/mobile/company/introduce.php" class="btn-pre">
                    <i class="icon-left-open-big">
                        <span class="sr-only">이전 페이지</span>
                    </i>
                </a>
                <a href="/mobile/company/ci.php" class="btn-next">
                    <i class="icon-right-open-big">
                        <span class="sr-only">다음 페이지</span>
                    </i>
                </a>
            </div>
        </div>
        
        <!-- page content -->
        <section class="greeting">
            <div class="container">
                <div class="section-header">
                    <h3 class="section-title">인사말</h3>
                </div>
                <div class="section-content">
                    <p class="figure">
                        <img src="/mobile/assets/images/company/greeting_ceo.jpg" class="img-responsive" alt="RSA CEO">
                    </p>
                    <div class="details">
                        <p>
                           고객 여러분께<br><br>
                           지난 사반세기를 오로지 자동화 산업 한 분야에 매진해 온 저희들, 2010년 1월 알에스 오토메이션으로 새롭게 출발하였습니다.<br><br>
                           더욱 치열해지는 경쟁환경, 그리고 예측하기 어려운 금융 환경 등, 갈수록 어려워지는 경영 여건 속에서 이제 그동안 쌓아온 다양한 산업 현장에서의 경험과 더욱 차별화된 서비스로, 고객 여러분의 제조 경쟁력 향상에 도움이 될 수 있도록 최선을 다하고자 합니다.<br><br>
                           향후 저희 알에스오토메이션은, 글로벌 컴포넌트 오토메이션 업계의 선두 기업을 목표로 모든 역량을 집중해, 고객 여러분께 진정한 가치를 드릴 수 있는 경쟁력 있는 회사로 거듭 태어날 것을 약속 드립니다.
                        </p>
                        <strong>
                            다시 한번 지금까지 보내주신 성원에 감사드리며, 믿음직한 파트너로서 고객 여러분의 성원에 보답할 것입니다.
                        </strong>
                        <div class="ceo">
                            <h4>대표이사 강덕현</h4>
                            <p class="sign">
                                <img src="/mobile/assets/images/company/ceo_sign.jpg" alt="">
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
</body>
</html>