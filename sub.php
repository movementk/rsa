<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    
    <!-- Srat Content -->
	<main class="sub">
        <!-- Sub Content Pageheader -->
        <div class="page-header">
            <div class="visual-header">
                <div class="page-intro">
                    <h2 class="page-title">회사개요</h2>
                    <hr>
                    <p>알에스오토메이션의 아이덴티티를 소개합니다.</p>
                </div>
            </div>
            <!-- Sub lnb -->
            <nav class="sub-lnb">
                <div class="container">
                    <ul class="lnb-list">
                        <li><a href="#">회사소개</a></li>
                        <li><a href="#">인사말</a></li>
                        <li class="active"><a href="#">CI</a></li>
                        <li><a href="#">연혁</a></li>
                        <li><a href="#">사업장안내</a></li>
                        <li><a href="#">파트너쉽 제안</a></li>
                        <li><a href="#">글로벌 파트너쉽</a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="container">
            <section>
                <div class="section-header">
                    <h3 class="content-title">FAQ</h3>
                </div>
                <div class="section-content">
                    <!-- Search Form -->
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
                    
                    <div style="margin: 30px 0;"></div>
                    
                    <!-- Table list -->
                    <div class="table-wrap">
                        <!-- type1 -->
                        <table class="table table-type1">
                            <colgroup>
                                <col style="width: 80px;">
                                <col style="width: 580px;">
                                <col style="width: 165px;">
                                <col style="width: 75px;">
                                <col style="width: 130px;">
                            </colgroup>
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>제목</th>
                                    <th>작성자</th>
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
                                            <span class="label label-primary">New</span>
                                            <i class="icon-lock">
                                                <span class="sr-only">비밀글</span>
                                            </i>
                                        </a>
                                    </td>
                                    <td class="u-name">이상철</td>
                                    <td>
                                        <i class="icon-doc-text">
                                            <span class="sr-only">첨부파일</span>
                                        </i>
                                    </td>
                                    <td class="date">2015.06.08</td>
                                </tr>
                                <tr>
                                    <td class="num">152</td>
                                    <td class="subject reply">
                                        <a href="#">
                                            <span class="label label-default">RE</span>
                                            X8PLC는 Ethernet 포트를 통해 어떠한 프로토콜 통신을 지원하는가
                                        </a>
                                    </td>
                                    <td class="u-name">이상철</td>
                                    <td>
                                        <i class="icon-doc-text">
                                            <span class="sr-only">첨부파일</span>
                                        </i>
                                    </td>
                                    <td class="date">2015.06.08</td>
                                </tr>
                            </tbody>
                        </table>
                        
                        <div style="margin: 30px 0;"></div>
                        
                        <!-- type2 -->
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
                                    <td><a href="#" class="agent">나래자동화</a></td>
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
                        
                        <div style="margin: 30px 0;"></div>
                        
                        <!-- type-write -->
                        <table class="table type-write">
                            <colgroup>
                                <col style="width: 157px;">
                                <col style="">
                            </colgroup>
                            <tbody>
                                <tr>
                                    <th><label for="u-name">이름</label></th>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" id="u-name" class="form-control">
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    
                    <div style="margin: 30px 0;"></div>
                    
                    <!-- 게시판 뷰 -->
                    <article class="notice-view">
                        <h4 class="notice-title">
                            멀티링크 문의 드립니다.
                        </h4>
                        <ul class="user-info">
                            <li>
                                <dl>
                                    <dt>작성자</dt>
                                    <dd>이상철</dd>
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
                    
                    <div style="margin: 30px 0;"></div>
                    
                    <!-- 버튼 목록 -->
                    <div class="btn-area">
                        <p>
                            <a href="#" class="btn btn-gray" role="button">수정</a>
                            <a href="#" class="btn btn-red" role="button">목록</a>
                        </p>
                    </div>
                    
                    <div style="margin: 30px 0;"></div>
                    
                    <!-- Paging -->
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