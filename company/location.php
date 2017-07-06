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
                        <li><a href="/company/global_partner.php">글로벌 파트너쉽</a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="container">
            <section class="location">
                <div class="section-header">
                    <h3 class="content-title">사업장 안내</h3>
                </div>
                <div class="section-content">
                    <!-- Nav tabs -->
                    <ul class="nav-tabs" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#headquarters" aria-controls="headquarters" role="tab" data-toggle="tab">
                                본사 (서울/경기) 사업장
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#busan" aria-controls="busan" role="tab" data-toggle="tab">
                                부산 사업장
                            </a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="headquarters">
                            <div class="map">
                                <p>
                                    <img src="/assets/images/company/map_img.jpg" alt="본사 사업장">
                                </p>
                            </div>
                            <div class="table-wrap">
                                <table class="table">
                                    <colgroup>
                                        <col style="width: 235px;">
                                        <col style="width: 935px;">
                                    </colgroup>
                                    <tbody>
                                        <tr>
                                            <th>주소</th>
                                            <td>경기도 평택시 진위면 진위산달로 38 (우) 451-862</td>
                                        </tr>
                                        <tr>
                                            <th>전화번호</th>
                                            <td><i class="icon-phone"></i>031-685-9300</td>
                                        </tr>
                                        <tr>
                                            <th>FAX</th>
                                            <td><i class="icon-fax"></i>031-685-9500</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="busan">
                            <div class="map">
                                <p>
                                    <img src="/assets/images/company/map_img.jpg" alt="부산 사업장">
                                </p>
                            </div>
                            <div class="table-wrap">
                                <table class="table">
                                    <colgroup>
                                        <col style="width: 235px;">
                                        <col style="width: 935px;">
                                    </colgroup>
                                    <tbody>
                                        <tr>
                                            <th>주소</th>
                                            <td>부산광역시 사상구 다동로 303 벽산디지털벨리 313호 (우) 617-731</td>
                                        </tr>
                                        <tr>
                                            <th>전화번호</th>
                                            <td><i class="icon-phone"></i>051-329-7802, 7803</td>
                                        </tr>
                                        <tr>
                                            <th>FAX</th>
                                            <td><i class="icon-fax"></i>051-329-7804</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
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