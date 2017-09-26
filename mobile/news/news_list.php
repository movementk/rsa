<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link href="/mobile/assets/css/sub.css" rel="stylesheet">
<link href="/mobile/assets/css/news.css" rel="stylesheet">
</head>
<body class="news">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
    <!-- Content Start -->
    <main id="content">
        <!-- page-header -->
        <div class="page-header">
            <div class="container">
                <h2>News Center</h2>
            </div>
            <div class="btn-control">
                <a href="/mobile/news/pr_list.php" class="btn-pre">
                    <i class="icon-left-open-big">
                        <span class="sr-only">이전 페이지</span>
                    </i>
                </a>
                <a href="/mobile/news/notice_list.php" class="btn-next">
                    <i class="icon-right-open-big">
                        <span class="sr-only">다음 페이지</span>
                    </i>
                </a>
            </div>
        </div>
        
        <section class="news-list">
            <div class="container">
                <div class="section-header">
                    <h3 class="section-title">News Center</h3>
                </div>
                <div class="section-content">
                    <article class="list">
                        <div class="article-header">
                            <div class="selection-search">
                                <form action="#">
                                    <div class="form-group">
                                        <select class="form-control">
                                            <option>Distributed I/O</option>
                                        </select>
                                        <select class="form-control">
                                            <option>제목</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control">
                                        <button type="submit" class="btn btn-search">
                                            <i class="icon-search">
                                                <span class="sr-only">검색버튼</span>
                                            </i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="article-content">
                            <ul class="board-list">
                                <li>
                                    <a href="#">
                                        <p class="subject">IO20 보드용 API</p>
                                        <dl>
                                            <dt>등록일</dt>
                                            <dd>2017-08-05</dd>
                                            <dt>파일</dt>
                                            <dd><i class="icon-doc-text"></i></dd>
                                        </dl>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <p class="subject">전환청구권행사(2회차)</p>
                                        <dl>
                                            <dt>등록일</dt>
                                            <dd>2017-08-05</dd>
                                            <dt>파일</dt>
                                            <dd><i class="icon-doc-text"></i></dd>
                                        </dl>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <p class="subject">추가상장(국내사모 CB전환)</p>
                                        <dl>
                                            <dt>등록일</dt>
                                            <dd>2017-08-05</dd>
                                            <dt>파일</dt>
                                            <dd><i class="icon-doc-text"></i></dd>
                                        </dl>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <p class="subject">전환청구권행사(1회차)</p>
                                        <dl>
                                            <dt>등록일</dt>
                                            <dd>2017-08-05</dd>
                                            <dt>파일</dt>
                                            <dd><i class="icon-doc-text"></i></dd>
                                        </dl>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <p class="subject">전환청구권행사(1회차)</p>
                                        <dl>
                                            <dt>등록일</dt>
                                            <dd>2017-08-05</dd>
                                            <dt>파일</dt>
                                            <dd><i class="icon-doc-text"></i></dd>
                                        </dl>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <p class="subject">추가상장(국내사모 CB전환)</p>
                                        <dl>
                                            <dt>등록일</dt>
                                            <dd>2017-08-05</dd>
                                            <dt>파일</dt>
                                            <dd><i class="icon-doc-text"></i></dd>
                                        </dl>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <p class="subject">전환청구권행사(1회차)</p>
                                        <dl>
                                            <dt>등록일</dt>
                                            <dd>2017-08-05</dd>
                                            <dt>파일</dt>
                                            <dd><i class="icon-doc-text"></i></dd>
                                        </dl>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <p class="subject">전환청구권행사(1회차)ss</p>
                                        <dl>
                                            <dt>등록일</dt>
                                            <dd>2017-08-05</dd>
                                            <dt>파일</dt>
                                            <dd><i class="icon-doc-text"></i></dd>
                                        </dl>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </article>
                    <nav class="paging" aria-label="Page navigation">
                        <ul class="pagination">
                            <li>
                                <a href="#" aria-label="Previous">
                                    <i class="icon-angle-double-left"></i>
                                </a>
                            </li>
                            <li class="l-space">
                                <a href="#" aria-label="Previous">
                                    <i class="icon-angle-left"></i>
                                </a>
                            </li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li class="r-space">
                                <a href="#" aria-label="Next">
                                    <i class="icon-angle-right"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" aria-label="Next">
                                    <i class="icon-angle-double-right"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </section>
        
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
</body>
</html>