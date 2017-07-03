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
                        <li class="active"><a href="/customer/faq_list.php">FAQ</a></li>
                        <li><a href="/customer/qna_list.php">Q&amp;A</a></li>
                        <li><a href="#">자료실</a></li>
                        <li><a href="/customer/video_list.php">동영상</a></li>
                        <li><a href="/customer/cs_center.php">서비스센터</a></li>
                        <li><a href="/customer/agent_list.php">대리점</a></li>
                        <li><a href="/customer/agent_notice.php">대리점 게시판</a></li>
                        <li><a href="/customer/contact.php">연락처</a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="container">
            <section class="faq-view">
                <div class="section-header">
                    <h3 class="content-title">FAQ</h3>
                </div>
                <div class="section-content">
                    <article class="notice-view">
                        <h4 class="notice-title">
                            멀티링크 문의 드립니다.
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
                                    <dt>작성일</dt>
                                    <dd>2017.06.12</dd>
                                </dl>
                            </li>
                        </ul>
                        <div class="view-content">
                            안녕하세요 TOUCH SCREEN 접속 방법에 대하여 문의 드립니다. V710C 와 OMRON CVM PLC CPU와 232통신으로 사용중입니다. <br>
                            여기에 V706C를 V710C를 마스터로 하여 멀티링크 하고자 합니다. 접속방법 및 설정방법좀 조언 부탁드립니다. <br>
                            수고하세요
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
                                        <a href="#">멀티링크 문의드립니다.</a>
                                    </dd>
                                </dl>
                            </div>
                            <div class="next-link">
                                <dl>
                                    <dt>다음글</dt>
                                    <dd>
                                        <a href="#">문의 드립니다.</a>
                                    </dd>
                                </dl>
                            </div>
                        </div>
                    </article>
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