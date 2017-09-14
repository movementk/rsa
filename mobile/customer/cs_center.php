<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link href="/mobile/assets/css/sub.css" rel="stylesheet">
<link href="/mobile/assets/css/customer.css" rel="stylesheet">
</head>
<body class="customer">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
    <!-- Content Start -->
    <main id="content" class="board-space">
        <!-- page-header -->
        <div class="page-header">
            <div class="container">
                <h2>서비스센터</h2>
            </div>
            <div class="btn-control">
                <a href="/mobile/customer/" class="btn-pre">
                    <i class="icon-left-open-big">
                        <span class="sr-only">이전 페이지</span>
                    </i>
                </a>
                <a href="/mobile/customer/" class="btn-next">
                    <i class="icon-right-open-big">
                        <span class="sr-only">다음 페이지</span>
                    </i>
                </a>
            </div>
        </div>
        
        <section class="cs-center">
            <div class="container">
                <div class="section-content">
                    <article class="cs-location">
                        <p class="figure">
                            <img src="/mobile/assets/images/customer/center_location_img.jpg" class="img-responsive" alt="본사, 부산 센터">
                        </p>
                        <div class="details">
                            <ul>
                                <li>
                                    <dl>
                                        <dt>본사센터 (서울·인천·경기·강원·충청)</dt>
                                        <dd>
                                            경기도 평택시 진위면 진위산단로38 <br>
                                            우편번호 :  17709<br>
                                            전화번호 :  <a href="tel:0316859593">031 - 685 - 9593, 9594</a>
                                        </dd>
                                    </dl>
                                </li>
                                <li>
                                    <dl>
                                        <dt>부산센터 (부산·대구·경남·경북지역)</dt>
                                        <dd>
                                            부산광역시 사상구 다동로 303 벽산디지털벨리 313호<br>
                                            우편번호 :  46981<br>
                                            전화번호 :  <a href="tel:0513297802">051 - 329 - 7802, 7803</a>
                                        </dd>
                                    </dl>
                                </li>
                            </ul>
                        </div>
                    </article>
                </div>
            </div>
        </section>
        
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
</body>
</html>