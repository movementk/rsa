<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/news.css" rel="stylesheet">
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    
    <!-- Srat Content -->
	<main class="sub news">
        <!-- Sub Content Pageheader -->
        <div class="page-header">
            <div class="visual-header">
                <div class="page-intro">
                    <h2 class="page-title">뉴스센터</h2>
                    <hr>
                    <p>알에스오토메이션의 새로운 소식을 알려드립니다</p>
                </div>
            </div>
            <!-- Sub lnb -->
            <nav class="sub-lnb">
                <div class="container">
                    <ul class="lnb-list">
                        <li><a href="/news/notice_list.php">Notice</a></li>
                        <li><a href="/news/pr_list.php">Press Release</a></li>
                        <li class="active"><a href="/news/news_list.php">News Center</a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="container">
            <section class="view news-view">
                <div class="section-header">
                    <h3 class="content-title">News Center</h3>
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
                            <p>
                                <img src="/assets/images/news/notice_img.jpg" alt="정기 주주총회 소집공고">
                            </p>
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