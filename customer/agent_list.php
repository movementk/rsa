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
            <section class="agent-list">
                <div class="section-header">
                    <h3 class="content-title">대리점</h3>
                </div>
                <div class="section-content">
                   
                    <!-- RSA 담당자 리뷰 (최종수정) e-mail input 추가 -->
                    <nav class="tab-list">
                        <ul class="agent-tab-list">
                            <li class="active"><a href="#">서울</a></li>
                            <li><a href="#">수원</a></li>
                            <li><a href="#">부산</a></li>
                            <li><a href="#">대구</a></li>
                            <li><a href="#">광주</a></li>
                            <li><a href="#">차단기전문대리점</a></li>
                            <li><a href="#">UPS전문대리점</a></li>
                        </ul>
                    </nav>
                    
                    <div class="table-wrap">
                        <table class="table table-type2">
                            <colgroup>
                                <col style="width: 20%;">
                                <col style="width: 20%;">
                                <col style="width: 20%;">
                                <col style="width: 20%;">
                                <col style="width: 20%;">
                            </colgroup>
                            <thead>
                                <tr>
                                    <th>업체명</th>
                                    <th>대표자명</th>
                                    <th>전화번호</th>
                                    <th>지역</th>
                                    <th>홈페이지</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="/customer/agent_view.php" class="agent">나래자동화</a></td>
                                    <td>황재하</td>
                                    <td>02-834-2144</td>
                                    <td>구로</td>
                                    <td>
                                        <a href="#" target="_blank">
                                            <i class="icon-home">
                                                <span class="sr-only">홈페이지 바로가기</span>
                                            </i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="/customer/agent_view.php" class="agent">서광N.B.A</a></td>
                                    <td>황재하</td>
                                    <td>02-834-2144</td>
                                    <td>구로</td>
                                    <td>
                                        <a href="#" target="_blank">
                                            <i class="icon-home">
                                                <span class="sr-only">홈페이지 바로가기</span>
                                            </i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="/customer/agent_view.php" class="agent">에드텍시스템</a></td>
                                    <td>황재하</td>
                                    <td>02-834-2144</td>
                                    <td>구로</td>
                                    <td>
                                        <a href="#" target="_blank">
                                            <i class="icon-home">
                                                <span class="sr-only">홈페이지 바로가기</span>
                                            </i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="/customer/agent_view.php" class="agent">원투테크</a></td>
                                    <td>황재하</td>
                                    <td>02-834-2144</td>
                                    <td>구로</td>
                                    <td>
                                        <a href="#" target="_blank">
                                            <i class="icon-home">
                                                <span class="sr-only">홈페이지 바로가기</span>
                                            </i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="/customer/agent_view.php" class="agent">주식회사 목성</a></td>
                                    <td>황재하</td>
                                    <td>02-834-2144</td>
                                    <td>구로</td>
                                    <td>
                                        <a href="#" target="_blank">
                                            <i class="icon-home">
                                                <span class="sr-only">홈페이지 바로가기</span>
                                            </i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="/customer/agent_view.php" class="agent">티피테크</a></td>
                                    <td>황재하</td>
                                    <td>02-834-2144</td>
                                    <td>구로</td>
                                    <td>
                                        <a href="#" target="_blank">
                                            <i class="icon-home">
                                                <span class="sr-only">홈페이지 바로가기</span>
                                            </i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="/customer/agent_view.php" class="agent">해냄시스텍</a></td>
                                    <td>황재하</td>
                                    <td>02-834-2144</td>
                                    <td>구로</td>
                                    <td>
                                        <a href="#" target="_blank">
                                            <i class="icon-home">
                                                <span class="sr-only">홈페이지 바로가기</span>
                                            </i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <nav class="paging" aria-label="Page navigation">
                        <ul class="pagination">
                            <li>
                                <a href="#" aria-label="Previous" class="arrow-btn double-previous"></a>
                            </li>
                            <li>
                                <a href="#" aria-label="Previous" class="arrow-btn previous"></a>
                            </li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">6</a></li>
                            <li><a href="#">7</a></li>
                            <li><a href="#">8</a></li>
                            <li><a href="#">9</a></li>
                            <li><a href="#">10</a></li>
                            <li>
                                <a href="#" aria-label="Next" class="arrow-btn next"></a>
                            </li>
                            <li>
                                <a href="#" aria-label="Next" class="arrow-btn double-next"></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </section>
        </div>
	</main>
	<!-- //End Content -->
	
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>