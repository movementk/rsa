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
                                                    <input type="radio" id="nx700">
                                                    <label for="nx700">NX700</label>
                                                    <div class="check"></div>
                                                </li>
                                                <li>
                                                    <input type="radio" id="nx70">
                                                    <label for="nx70">NX70</label>
                                                    <div class="check"></div>
                                                </li>
                                                <li>
                                                    <input type="radio" id="nx7">
                                                    <label for="nx7">NX7</label>
                                                    <div class="check"></div>
                                                </li>
                                                <li>
                                                    <input type="radio" id="x8">
                                                    <label for="x8">X8</label>
                                                    <div class="check"></div>
                                                </li>
                                                <li>
                                                    <input type="radio" id="etc1">
                                                    <label for="etc1">기타</label>
                                                    <div class="check"></div>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>터치패널</th>
                                        <td>
                                            <ul>
                                                <li>
                                                    <input type="radio" id="v9">
                                                    <label for="v9">V9 Plus</label>
                                                    <div class="check"></div>
                                                </li>
                                                <li>
                                                    <input type="radio" id="v8">
                                                    <label for="v8">V8 Plus</label>
                                                    <div class="check"></div>
                                                </li>
                                                <li>
                                                    <input type="radio" id="v7">
                                                    <label for="v7">V7/V7 Plus</label>
                                                    <div class="check"></div>
                                                </li>
                                                <li>
                                                    <input type="radio" id="w8">
                                                    <label for="w8">W8 Plus</label>
                                                    <div class="check"></div>
                                                </li>
                                                <li>
                                                    <input type="radio" id="s8">
                                                    <label for="s8">S8 Plus</label>
                                                    <div class="check"></div>
                                                </li>
                                                <li>
                                                    <input type="radio" id="etc2">
                                                    <label for="etc2">기타</label>
                                                    <div class="check"></div>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>인버터</th>
                                        <td>
                                            <ul>
                                                <li>
                                                    <input type="radio" id="f7">
                                                    <label for="f7">F7</label>
                                                    <div class="check"></div>
                                                </li>
                                                <li>
                                                    <input type="radio" id="f500">
                                                    <label for="f500">F500</label>
                                                    <div class="check"></div>
                                                </li>
                                                <li>
                                                    <input type="radio" id="f50">
                                                    <label for="f50">F50</label>
                                                    <div class="check"></div>
                                                </li>
                                                <li>
                                                    <input type="radio" id="msd">
                                                    <label for="msd">MSD</label>
                                                    <div class="check"></div>
                                                </li>
                                                <li>
                                                    <input type="radio" id="etc3">
                                                    <label for="etc3">기타</label>
                                                    <div class="check"></div>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>서보드라이브/모터</th>
                                        <td>
                                            <ul>
                                                <li>
                                                    <input type="radio" id="mmc">
                                                    <label for="mmc">MMC-EtherCAT</label>
                                                    <div class="check"></div>
                                                </li>
                                                <li>
                                                    <input type="radio" id="pci">
                                                    <label for="pci">Half PCI</label>
                                                    <div class="check"></div>
                                                </li>
                                                <li>
                                                    <input type="radio" id="csdm">
                                                    <label for="csdm">Sercos+CSDM</label>
                                                    <div class="check"></div>
                                                </li>
                                                <li>
                                                    <input type="radio" id="etc4">
                                                    <label for="etc4">기타</label>
                                                    <div class="check"></div>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>DIO</th>
                                        <td>
                                            <ul>
                                                <li>
                                                    <input type="radio" id="machine">
                                                    <label for="machine">머신 I/O</label>
                                                    <div class="check"></div>
                                                </li>
                                                <li>
                                                    <input type="radio" id="nxio">
                                                    <label for="nxio">NXIO</label>
                                                    <div class="check"></div>
                                                </li>
                                                <li>
                                                    <input type="radio" id="etc5">
                                                    <label for="etc5">기타</label>
                                                    <div class="check"></div>
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
                    
                    <!-- 검색전 -->   
                    <article class="basic-content">
                        <p class="attention">찾으시는 자료의 카테고리를 선택해주세요</p>
                    </article>
                    
                    <!-- 검색결과 -->
                    <article class="search-success">
                        <nav class="tab-list">
                            <ul>
                                <li class="active"><a href="#">카탈로그</a></li>
                                <li><a href="#">메뉴얼</a></li>
                                <li><a href="#">소프트웨어</a></li>
                                <li><a href="#">CAD Data</a></li>
                                <li><a href="#">기타 기술자료</a></li>
                                <li><a href="#">특허 및 인증서</a></li>
                            </ul>
                        </nav>
                        <div class="table-wrap">
                            <table class="table table-type1">
                                <colgroup>
                                    <col style="width: 80px;">
                                    <col style="width: 135px;">
                                    <col style="width: 610px;">
                                    <col style="width: 75px;">
                                    <col style="width: 130px;">
                                </colgroup>
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>분류</th>
                                        <th>제목</th>
                                        <th>파일</th>
                                        <th>등록일</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="num">152</td>
                                        <td>카탈로그</td>
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
                                        <td>카탈로그</td>
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
                                        <td>카탈로그</td>
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
                                        <td>카탈로그</td>
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
                                        <td>카탈로그</td>
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
                                        <td>카탈로그</td>
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
                                        <td>카탈로그</td>
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
                                        <td>카탈로그</td>
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
                                        <td>카탈로그</td>
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
                                        <td>카탈로그</td>
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
                    </article>
                </div>
            </section>
        </div>
	</main>
	<!-- //End Content -->
	
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>