<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link href="/mobile/assets/css/sub.css" rel="stylesheet">
</head>
<body class="company">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
    <!-- Content Start -->
    <main id="content">
        <!-- page-header -->
        <div class="page-header">
            <div class="container">
                <h2>회사소개</h2>
            </div>
            <div class="btn-control">
                <a href="#" class="btn-pre">
                    <i class="icon-left-open-big">
                        <span class="sr-only">이전 페이지</span>
                    </i>
                </a>
                <a href="#" class="btn-next">
                    <i class="icon-right-open-big">
                        <span class="sr-only">다음 페이지</span>
                    </i>
                </a>
            </div>
        </div>
        
        <!-- page content -->
        <section>
            <div class="container">
                <div class="section-header">
                    <h3 class="section-title">서비스 영역</h3>
                </div>
                <div class="section-content">
                    
                    <!-- 검색폼 -->
                    <p class="ex-title">검색폼1</p>
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
                    
                    <br><br><br>
                    
                    <!-- 검색폼 -->
                    <p class="ex-title">검색폼2</p>
                    <div class="search-form">
                        <form action="#">
                            <div class="form-group">
                                <select class="form-control">
                                    <option>전체</option>
                                </select>
                                <input type="text" class="form-control">
                                <button type="submit" class="btn btn-search">
                                    <i class="icon-search">
                                        <span class="sr-only">검색버튼</span>
                                    </i>
                                </button>
                            </div>
                        </form>
                    </div>
                    
                    <br><br><br>
                    
                    <!-- 테이블 기본 -->
                    <p class="ex-title">테이블 기본</p>
                    <div class="table-wrap">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th>주소</th>
                                    <td>
                                        경기도 평택시 진위면 진위산달로<br>
                                        38 (우) 451-862
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    
                    <br><br><br>
                    
                    <!-- 게시판 글쓰기 -->
                    <p class="ex-title">게시판 글쓰기</p>
                    <div class="table-wrap board-write">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th><label for="u-name">작성자</label></th>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" id="u-name" class="form-control">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th><label for="u-pw">비밀번호</label></th>
                                    <td>
                                        <div class="form-group">
                                            <input type="password" id="u-pw" class="form-control">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th><label for="u-name">제목</label></th>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" id="u-name" class="form-control">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="u-content"><label for="u-content">내용</label></th>
                                    <td>
                                        <div class="form-group">
                                            <textarea id="u-content" class="form-control"></textarea>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th>첨부파일</th>
                                    <td class="attach">
                                        <div class="form-group">
                                            <input type="file" id="attach" class="form-control">
                                            <label for="attach">찾아보기</label>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    
                    <br><br><br>
                    
                    <!-- 투자정보 테이블 -->
                    <p class="ex-title">투자정보 테이블</p>
                    <article>
                        <div class="article-header">
                            <h4 class="article-title">요약 재무제표</h4>
                        </div>
                        <div class="article-content">
                            <dl class="unit">
                                <dt>단위</dt>
                                <dd>백만원</dd>
                            </dl>
                            <!-- 반응형 테이블 -->
                            <p class="ex-title">반응형 테이블</p>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>항목</th>
                                            <th>2016년</th>
                                            <th>2015년</th>
                                            <th>2014년</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>유동자산(계)</td>
                                            <td>42,256</td>
                                            <td>34,578</td>
                                            <td>25,504</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            
                            <br><br><br>
                            
                            <!-- 게시판 리스트 -->
                            <p class="ex-title">게시판 리스트</p>
                            <ul class="board-list">
                                <li>
                                    <a href="#">
                                        <p class="subject">[정정] 분기보고서 (일반법인)</p>
                                        <dl>
                                            <dt>등록일</dt>
                                            <dd>2017-08-05</dd>
                                            <dt>제출의무자</dt>
                                            <dd>RSA</dd>
                                        </dl>
                                    </a>
                                </li>
                            </ul>
                            
                            <br><br><br>
                            
                            <!-- 게시판 뷰 -->
                            <p class="ex-title">게시판 뷰</p>
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
                                    <p>
                                        게시판 상세 내용<br>
                                    </p>
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

                        </div>
                    </article>
                    
                    <br><br><br>
                    
                    <!-- 버튼 -->
                    <p class="ex-title">버튼</p>
                    <div class="btn-area">
                        <p>
                            <a href="#" class="btn btn-xs btn-red" role="button">글쓰기</a>
                            <a href="#" class="btn btn-xs btn-gray" role="button">수정하기</a>
                            <a href="#" class="btn btn-xs btn-gray" role="button">삭제하기</a>
                        </p>
                        <br>
                        <p>
                            <a href="#" class="btn btn-sm btn-red" role="button">확인</a>
                            <a href="#" class="btn btn-sm btn-gray" role="button">취소</a>
                        </p>
                        <br>
                        <p>
                            <a href="#" class="btn btn-lg btn-red" role="button">확인</a>
                        </p>
                    </div>
                    
                    <br><br><br>
                    
                    <!-- 버튼 -->
                    <p class="ex-title">페이징</p>
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