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
                        <li class="active"><a href="/news/notice_list.php">Notice</a></li>
                        <li><a href="/news/pr_list.php">Press Release</a></li>
                        <li><a href="/news/news_list.php">News Center</a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="container">
            <section class="notice notice-list">
                <div class="section-header">
                    <h3 class="content-title">Notice</h3>
                </div>
                <div class="section-content">
                    <div class="search-form">
                        <form action="#">
                            <div class="form-group">
                                <select class="form-control selection-1">
                                    <option>Distributed I/O</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="form-control selection-2">
                                    <option>제목</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" id="search" class="form-control">
                                <label for="search" class="sr-only">검색하기</label>
                                <button type="submit" class="btn btn-search">
                                    <i class="icon-search-1">
                                        <span class="sr-only">검색버튼</span>
                                    </i>
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="table-wrap">
                        <table class="table table-type1">
                            <colgroup>
                                <col style="width: 95px;">
                                <col style="width: 710px;">
                                <col style="width: 90px;">
                                <col style="width: 155px;">
                            </colgroup>
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>제목</th>
                                    <th>파일</th>
                                    <th>등록일</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="num">152</td>
                                    <td class="subject">
                                        <a href="#">
                                            IO20 보드용 API
                                        </a>
                                    </td>
                                    <td>
                                        <i class="icon-doc-text">
                                            <span class="sr-only">첨부파일</span>
                                        </i>
                                    </td>
                                    <td class="date">2015.06.08</td>
                                </tr>
                                <tr>
                                    <td class="num">152</td>
                                    <td class="subject">
                                        <a href="#">
                                            X8PLC는 Ethernet 포트를 통해 어떠한 프로토콜 통신을 지원하는가
                                        </a>
                                    </td>
                                    <td>
                                        <i class="icon-doc-text">
                                            <span class="sr-only">첨부파일</span>
                                        </i>
                                    </td>
                                    <td class="date">2015.06.08</td>
                                </tr>
                                <tr>
                                    <td class="num">152</td>
                                    <td class="subject">
                                        <a href="#">
                                            X8PLC의 RS232C 485 포트 및 USB 채널은 어떠한 프로토콜 지원 가능한가
                                        </a>
                                    </td>
                                    <td>
                                        <i class="icon-doc-text">
                                            <span class="sr-only">첨부파일</span>
                                        </i>
                                    </td>
                                    <td class="date">2015.06.08</td>
                                </tr>
                                <tr>
                                    <td class="num">152</td>
                                    <td class="subject">
                                        <a href="#">
                                            X8 PLC Ethernet 다이렉트 통신케이블 결선도
                                        </a>
                                    </td>
                                    <td>
                                        <i class="icon-doc-text">
                                            <span class="sr-only">첨부파일</span>
                                        </i>
                                    </td>
                                    <td class="date">2015.06.08</td>
                                </tr>
                                <tr>
                                    <td class="num">152</td>
                                    <td class="subject">
                                        <a href="#">
                                            X8 PLC Xnet SERIAL RS232C통신케이블 결선도
                                        </a>
                                    </td>
                                    <td>
                                        <i class="icon-doc-text">
                                            <span class="sr-only">첨부파일</span>
                                        </i>
                                    </td>
                                    <td class="date">2015.06.08</td>
                                </tr>
                                <tr>
                                    <td class="num">152</td>
                                    <td class="subject">
                                        <a href="#">
                                            X8 PLC Xnet USB Mini B TYPE통신케이블 결선도
                                        </a>
                                    </td>
                                    <td>
                                        <i class="icon-doc-text">
                                            <span class="sr-only">첨부파일</span>
                                        </i>
                                    </td>
                                    <td class="date">2015.06.08</td>
                                </tr>
                                <tr>
                                    <td class="num">152</td>
                                    <td class="subject">
                                        <a href="#">
                                            IO20 보드용 API
                                        </a>
                                    </td>
                                    <td>
                                        <i class="icon-doc-text">
                                            <span class="sr-only">첨부파일</span>
                                        </i>
                                    </td>
                                    <td class="date">2015.06.08</td>
                                </tr>
                                <tr>
                                    <td class="num">152</td>
                                    <td class="subject">
                                        <a href="#">
                                            X8PLC의 RS232C 485 포트 및 USB 채널은 어떠한 프로토콜 지원 가능한가
                                        </a>
                                    </td>
                                    <td>
                                        <i class="icon-doc-text">
                                            <span class="sr-only">첨부파일</span>
                                        </i>
                                    </td>
                                    <td class="date">2015.06.08</td>
                                </tr>
                                <tr>
                                    <td class="num">152</td>
                                    <td class="subject">
                                        <a href="#">
                                            X8 PLC Ethernet 다이렉트 통신케이블 결선도
                                        </a>
                                    </td>
                                    <td>
                                        <i class="icon-doc-text">
                                            <span class="sr-only">첨부파일</span>
                                        </i>
                                    </td>
                                    <td class="date">2015.06.08</td>
                                </tr>
                                <tr>
                                    <td class="num">152</td>
                                    <td class="subject">
                                        <a href="#">
                                            X8 PLC Xnet SERIAL RS232C통신케이블 결선도
                                        </a>
                                    </td>
                                    <td>
                                        <i class="icon-doc-text">
                                            <span class="sr-only">첨부파일</span>
                                        </i>
                                    </td>
                                    <td class="date">2015.06.08</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="btn-area">
                        <p>
                            <a href="#" class="btn btn-red" role="button">글쓰기</a>
                        </p>
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