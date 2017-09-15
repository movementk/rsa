<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link href="/mobile/assets/css/sub.css" rel="stylesheet">
<link href="/mobile/assets/css/customer.css" rel="stylesheet">
</head>
<body class="customer">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
    <!-- Content Start -->
    <main id="content">
        <!-- page-header -->
        <div class="page-header">
            <div class="container">
                <h2>돋영상</h2>
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
        
        <section class="video-view">
            <div class="container">
                <div class="section-content">
                    <article class="view">
                        <div class="article-content">
                            <div class="board-view">
                                <div class="view-header">
                                    <h4 class="subject">게시판 제목</h4>
                                    <div class="writer-info">
                                        <ul>
                                            <li>
                                                <dl>
                                                    <dt>등록일</dt>
                                                    <dd>2017-08-05</dd>
                                                </dl>
                                            </li>
                                            <li>
                                                <dl>
                                                    <dt>조회수</dt>
                                                    <dd>27</dd>
                                                </dl>
                                            </li>
                                            <li>
                                                <dl>
                                                    <dt>작성자</dt>
                                                    <dd>이상철</dd>
                                                </dl>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="view-content">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/VkD9Wqk9dbg" allowfullscreen=""></iframe>
                                    </div>
                                </div>
                                <dl class="attach">
                                    <dt>첨부파일</dt>
                                    <dd>
                                        <a href="#">test.pdf</a>
                                    </dd>
                                </dl>
                            </div>
                            <ul class="next-link">
                                <li>
                                    <dl>
                                        <dt>이전글</dt>
                                        <dd>
                                            <a href="#">멀티링크 문의드립니다.멀티링크 문의드립니다.멀티링크 문의드립니다.</a>
                                        </dd>
                                    </dl>
                                </li>
                                <li>
                                    <dl>
                                        <dt>다음글</dt>
                                        <dd>
                                            <a href="#">문의드립니다.</a>
                                        </dd>
                                    </dl>
                                </li>
                            </ul>
                            <div class="btn-area">
                                <p>
                                    <a href="/mobile/customer/faq_write.php" class="btn btn-xs btn-red" role="button">글쓰기</a>
                                    <a href="#" class="btn btn-xs btn-gray" role="button">수정하기</a>
                                    <a href="#" class="btn btn-xs btn-gray" role="button">삭제하기</a>
                                </p>
                            </div>
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