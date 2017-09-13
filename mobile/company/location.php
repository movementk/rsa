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
                <h2>사업장 안내</h2>
            </div>
            <div class="btn-control">
                <a href="/mobile/company/history.php" class="btn-pre">
                    <i class="icon-left-open-big">
                        <span class="sr-only">이전 페이지</span>
                    </i>
                </a>
                <a href="/mobile/company/partner.php" class="btn-next">
                    <i class="icon-right-open-big">
                        <span class="sr-only">다음 페이지</span>
                    </i>
                </a>
            </div>
        </div>
        
        <!-- page content -->
        <section class="location">
            <div class="container">
                <div class="section-header">
                    <h3 class="section-title">사업장 안내</h3>
                </div>
                <div class="section-content">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#tab-1" aria-controls="tab-1" role="tab" data-toggle="tab">
                                본사 (서울/경기) 사업장
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#tab-2" aria-controls="tab-2" role="tab" data-toggle="tab">
                                부산 사업장
                            </a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="tab-1">
                            <div class="map">
                                <img src="/mobile/assets/images/company/map_img.jpg" class="img-responsive" alt="">
                            </div>
                            <div class="table-wrap">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th>주소</th>
                                            <td>
                                                경기도 평택시 진위면 진위산달로<br>
                                                38 (우) 451-862
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>전화번호</th>
                                            <td>
                                                <i class="icon-phone"></i> <a href="tel:0316859300">031-685-9300</a>
                                            </td>
                                        <tr>
                                            <th>FAX</th>
                                            <td>
                                                <i class="icon-fax"></i> 031-685-9500
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="tab-2">
                            <div class="map">
                                <img src="/mobile/assets/images/company/map_img.jpg" class="img-responsive" alt="">
                            </div>
                            <div class="table-wrap">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th>주소</th>
                                            <td>
                                                부산광역시 사상구 대동로 303<br>
                                                벽산디지털벨리 313호 (우) 617-731
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>전화번호</th>
                                            <td>
                                                <i class="icon-phone"></i> <a href="tel:0316859300">051-329-7802</a>, 7803
                                            </td>
                                        <tr>
                                            <th>FAX</th>
                                            <td>
                                                <i class="icon-fax"></i> 051-329-7804
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
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