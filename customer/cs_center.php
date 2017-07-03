<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/customer.css" rel="stylesheet">
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    
    <!-- Srat Content -->
	<main class="sub customer">
        <!-- Sub Content Pageheader -->
        <div class="page-header">
            <div class="visual-header">
                <div class="page-intro">
                    <h2 class="page-title">고객지원</h2>
                    <hr>
                    <p>알에스오토메이션의 아이덴티티를 소개합니다.</p>
                </div>
            </div>
            <!-- Sub lnb -->
            <nav class="sub-lnb">
                <div class="container">
                    <ul class="lnb-list">
                        <li><a href="/customer/faq_list.php">FAQ</a></li>
                        <li><a href="/customer/qna_list.php">Q&amp;A</a></li>
                        <li><a href="#">자료실</a></li>
                        <li><a href="/customer/video_list.php">동영상</a></li>
                        <li class="active"><a href="/customer/cs_center.php">서비스센터</a></li>
                        <li><a href="/customer/agent_list.php">대리점</a></li>
                        <li><a href="/customer/agent_notice.php">대리점 게시판</a></li>
                        <li><a href="/customer/contact.php">연락처</a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="container">
            <section class="cs-center">
                <div class="section-header">
                    <h3 class="content-title">서비스센터</h3>
                </div>
                <div class="section-content">
                    <div class="center-addr">
                        <div class="jungbu">
                            <h4>동탄센터 (서울,인천,경기,강원,충청)</h4>
                            <address>경기도 화성시 동탕면 동탄신단2길 13</address>
                            <dl>
                                <dt>우편번호</dt>
                                <dd>445 - 812</dd>
                                <dt>전화번호</dt>
                                <dd>031 - 373 - 3744</dd>
                            </dl>
                        </div>
                        <div class="nambu">
                            <h4>부산센터 (부산,대구,경남,경북지역)</h4>
                            <address>부산광역시 사상구 다동로 303 벽산디지털벨리 313호</address>
                            <dl>
                                <dt>우편번호</dt>
                                <dd>617 - 731</dd>
                                <dt>전화번호</dt>
                                <dd>051 - 329 - 7802, 7803</dd>
                            </dl>
                        </div>
                    </div>
                    <div class="table-wrap">
                        <table class="table table-type2">
                            <colgroup>
                                <col style="width: 25%;">
                                <col style="width: 25%;">
                                <col style="width: 25%;">
                                <col style="width: 25%;">
                            </colgroup>
                            <thead>
                                <tr>
                                    <th>서비스센터</th>
                                    <th>서비스지역</th>
                                    <th>전화번호</th>
                                    <th>팩스번호</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>동탄센터</td>
                                    <td>서울,인천,경기,강원,충청</td>
                                    <td>031-373-3744</td>
                                    <td>031-372-9432</td>
                                </tr>
                                <tr>
                                    <td>부산센터</td>
                                    <td>부산,대구,경남,경북</td>
                                    <td>051-329-7802, 7803</td>
                                    <td>051-329-7804</td>
                                </tr>
                            </tbody>
                        </table>
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