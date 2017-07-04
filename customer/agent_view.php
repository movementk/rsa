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
                        <li><a href="/customer/dataroom.php">자료실</a></li>
                        <li><a href="/customer/video_list.php">동영상</a></li>
                        <li><a href="/customer/cs_center.php">서비스센터</a></li>
                        <li class="active"><a href="/customer/agent_list.php">대리점</a></li>
                        <li><a href="/customer/agent_notice.php">대리점 게시판</a></li>
                        <li><a href="/customer/contact.php">연락처</a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="container">
            <section class="agent-view">
                <div class="section-header">
                    <h3 class="content-title">서비스센터</h3>
                </div>
                <div class="section-content">
                    <div class="table-wrap">
                        <table class="table type-write">
                            <colgroup>
                                <col style="width: 160px;">
                                <col style="width: 890px;">
                            </colgroup>
                            <tbody>
                                <tr>
                                    <th colspan="2"><b>나래자동화</b></th>
                                </tr>
                                <tr>
                                    <th>지역</th>
                                    <td>구로</td>
                                </tr>
                                <tr>
                                    <th>대표자명</th>
                                    <td>황재화</td>
                                </tr>
                                <tr>
                                    <th>주소</th>
                                    <td>서울 금천구 가산동 487 - 11 태륭테크노타운 8차 1114호</td>
                                </tr>
                                <tr>
                                    <th>전화번호</th>
                                    <td>02 - 834 - 2144</td>
                                </tr>
                                <tr>
                                    <th>팩스번호</th>
                                    <td>02 - 849 - 2147</td>
                                </tr>
                                <tr>
                                    <th>취급품목</th>
                                    <td>PLC, I/O, Touch Panel, INVERTER, Motion</td>
                                </tr>
                                <tr>
                                    <th>홈페이지</th>
                                    <td><a href="#" target="_blank">www.samsungplc.co.kr</a></td>
                                </tr>
                                <tr>
                                    <th class="agent-maps">약도</th>
                                    <td class="agent-maps">
                                        <div class="map">
                                            <img src="/assets/images/customer/agent_map_img.jpg" alt="대리점 약도">
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="btn-area">
                        <p>
                            <a href="#" class="btn btn-red" role="button">목록</a>
                        </p>
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