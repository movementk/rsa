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
                        <li class="active"><a href="/customer/video_list.php">동영상</a></li>
                        <li><a href="/customer/cs_center.php">서비스센터</a></li>
                        <li><a href="/customer/agent_list.php">대리점</a></li>
                        <li><a href="/customer/agent_notice.php">대리점 게시판</a></li>
                        <li><a href="/customer/contact.php">연락처</a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="container">
            <section class="video-view">
                <div class="section-header">
                    <h3 class="content-title">동영상</h3>
                </div>
                <div class="section-content">
                    <article class="notice-view">
                        <h4 class="notice-title">
                            동영상 TEST 입니다.
                        </h4>
                        <ul class="user-info">
                            <li>
                                <dl>
                                    <dt>작성자</dt>
                                    <dd>관리자</dd>
                                </dl>
                            </li>
                            <li>
                                <dl>
                                    <dt>이메일</dt>
                                    <dd>rsautomation@rsautomation.co.kr</dd>
                                </dl>
                            </li>
                            <li>
                                <dl>
                                    <dt>작성일</dt>
                                    <dd>2017.06.12</dd>
                                </dl>
                            </li>
                        </ul>
                        <div class="view-content">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/IojGQErD5dQ" allowfullscreen=""></iframe>
                            </div>
                        </div>
                        <dl class="attach">
                            <dt>첨부파일</dt>
                            <dd>
                                <a href="#">
                                    <i class="icon-doc-text">
                                        <span class="sr-only">첨부파일</span>
                                    </i>
                                    첨부된 파일명.PDF
                                </a>
                                <a href="#">
                                    <i class="icon-doc-text">
                                        <span class="sr-only">첨부파일</span>
                                    </i>
                                    첨부된 파일명.PDF
                                </a>
                                <a href="#">
                                    <i class="icon-doc-text">
                                        <span class="sr-only">첨부파일</span>
                                    </i>
                                    첨부된 파일명.PDF
                                </a>
                            </dd>
                        </dl>
                        <div class="move-link">
                            <div class="pre-link">
                                <dl>
                                    <dt>이전글</dt>
                                    <dd>
                                        <a href="#">동영상 TEST1 입니다.</a>
                                    </dd>
                                </dl>
                            </div>
                            <div class="next-link">
                                <dl>
                                    <dt>다음글</dt>
                                    <dd>
                                        <a href="#">동영상 TEST3 입니다.</a>
                                    </dd>
                                </dl>
                            </div>
                        </div>
                    </article>
                    <div class="btn-area">
                        <p>
                            <a href="#" class="btn btn-gray" role="button">수정</a>
                            <a href="#" class="btn btn-gray" role="button">삭제</a>
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