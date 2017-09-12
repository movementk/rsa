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
                    <div class="search-form">
                        <form action="#">
                            <div class="form-group">
                                <select class="form-control">
                                    <option>선택</option>
                                </select>
                                <select class="form-control">
                                    <option>선택</option>
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
                    
                    <!-- 테이블 기본 -->
                    <div class="table-wrap">
                        <table class="table">
                            <tbody>
                                <th>주소</th>
                                <td>
                                    경기도 평택시 진위면 진위산달로<br>
                                    38 (우) 451-862
                                </td>
                            </tbody>
                        </table>
                    </div>
                    
                    <br><br><br>
                    
                    <!-- 투자정보 테이블 -->
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
                            
                        </div>
                    </article>
                    
                    <br><br><br>
                    
                </div>
            </div>
        </section>
        
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
</body>
</html>