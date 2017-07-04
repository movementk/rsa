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
                        <li class="active"><a href="/customer/dataroom.php">자료실</a></li>
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
            <section class="dataroom">
                <div class="section-header">
                    <h3 class="content-title">자료실</h3>
                </div>
                <div class="section-content">
                    <form action="#">
                        <div class="table-wrap">
                            <table class="table type-write">
                                <colgroup>
                                    <col style="width: 228px;">
                                    <col style="width: 940px;">
                                </colgroup>
                                <tbody>
                                    <tr>
                                        <th>PLC</th>
                                        <td>
                                            <ul>
                                                <li>
                                                    <label><input type="radio">NX700</label>
                                                </li>
                                                <li>
                                                    <label><input type="radio">NX70</label>
                                                </li>
                                                <li>
                                                    <label><input type="radio">NX7</label>
                                                </li>
                                                <li>
                                                    <label><input type="radio">X8</label>
                                                </li>
                                                <li>
                                                    <label><input type="radio">기타</label>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>터치패넣</th>
                                        <td>
                                            <ul>
                                                <li>
                                                    <label><input type="radio">V9 Plus</label>
                                                </li>
                                                <li>
                                                    <label><input type="radio">V8 Plus</label>
                                                </li>
                                                <li>
                                                    <label><input type="radio">V7/V7 Plus</label>
                                                </li>
                                                <li>
                                                    <label><input type="radio">W8 Plus</label>
                                                </li>
                                                <li>
                                                    <label><input type="radio">S8 Plus</label>
                                                </li>
                                                <li>
                                                    <label><input type="radio">기타</label>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>인버터</th>
                                        <td>
                                            <ul>
                                                <li>
                                                    <label><input type="radio">F7</label>
                                                </li>
                                                <li>
                                                    <label><input type="radio">F500</label>
                                                </li>
                                                <li>
                                                    <label><input type="radio">F50</label>
                                                </li>
                                                <li>
                                                    <label><input type="radio">MSD</label>
                                                </li>
                                                <li>
                                                    <label><input type="radio">기타</label>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>서보드라이브/모터</th>
                                        <td>
                                            <ul>
                                                <li>
                                                    <label><input type="radio">MMC-EtherCAT</label>
                                                </li>
                                                <li>
                                                    <label><input type="radio">Half PCI</label>
                                                </li>
                                                <li>
                                                    <label><input type="radio">Sercos+CSDM</label>
                                                </li>
                                                <li>
                                                    <label><input type="radio">기타</label>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>DIO</th>
                                        <td>
                                            <ul>
                                                <li>
                                                    <label><input type="radio">머신 I/O</label>
                                                </li>
                                                <li>
                                                    <label><input type="radio">NXIO</label>
                                                </li>
                                                <li>
                                                    <label><input type="radio">기타</label>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        
                        <div class="search-area">
                            <h4 class="logo">
                                <img src="/assets/images/customer/search_logo.gif" alt="logo">
                            </h4>
                            <div class="search-form">
                                <div class="form-group">
                                    <select class="form-control selection-2">
                                        <option>전체</option>
                                        <option>제목</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" id="search" class="form-control" placeholder="검색어를 입력해 주세요">
                                    <label for="search" class="sr-only">검색하기</label>
                                    <button type="submit" class="btn btn-search">
                                        <i class="icon-search-1">
                                            <span class="sr-only">검색버튼</span>
                                        </i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
<!--
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
-->
                </div>
            </section>
        </div>
	</main>
	<!-- //End Content -->
	
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>