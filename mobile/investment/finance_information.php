<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link href="/mobile/assets/css/sub.css" rel="stylesheet">
<link href="/mobile/assets/css/investment.css" rel="stylesheet">
</head>
<body class="investment">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
    <!-- Content Start -->
    <main id="content">
        <!-- page-header -->
        <div class="page-header">
            <div class="container">
                <h2>재무정보</h2>
            </div>
            <div class="btn-control">
                <a href="/mobile/investment/disclosure_information.php" class="btn-pre">
                    <i class="icon-left-open-big">
                        <span class="sr-only">이전 페이지</span>
                    </i>
                </a>
                <a href="/mobile/investment/stock_information.php" class="btn-next">
                    <i class="icon-right-open-big">
                        <span class="sr-only">다음 페이지</span>
                    </i>
                </a>
            </div>
        </div>
        
        <!-- page content -->
        <section class="finance-information">
            <div class="container">
                <div class="section-header">
                    <h3 class="section-title">재무정보</h3>
                </div>
                <div class="section-content">
                    <article class="financial-statements">
                        <div class="article-header">
                            <h4 class="article-title">요약 재무제표</h4>
                        </div>
                        <div class="article-content">
                            <dl class="unit">
                                <dt>단위</dt>
                                <dd>백만원</dd>
                            </dl>
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
                                            <td>[유동자산]</td>
                                            <td>42,256</td>
                                            <td>34,578</td>
                                            <td>25,504</td>
                                        </tr>
                                        <tr>
                                            <td>당좌자산</td>
                                            <td>42,256</td>
                                            <td>34,578</td>
                                            <td>25,504</td>
                                        </tr>
                                        <tr>
                                            <td>재고자산</td>
                                            <td>42,256</td>
                                            <td>34,578</td>
                                            <td>25,504</td>
                                        </tr>
                                        <tr>
                                            <td>[비유동자산]</td>
                                            <td>42,256</td>
                                            <td>34,578</td>
                                            <td>25,504</td>
                                        </tr>
                                        <tr>
                                            <td>투자자산</td>
                                            <td>42,256</td>
                                            <td>34,578</td>
                                            <td>25,504</td>
                                        </tr>
                                        <tr>
                                            <td>유형자산</td>
                                            <td>42,256</td>
                                            <td>34,578</td>
                                            <td>25,504</td>
                                        </tr>
                                        <tr>
                                            <td>무형자산</td>
                                            <td>42,256</td>
                                            <td>34,578</td>
                                            <td>25,504</td>
                                        </tr>
                                        <tr>
                                            <td>기타비유동자산</td>
                                            <td>42,256</td>
                                            <td>34,578</td>
                                            <td>25,504</td>
                                        </tr>
                                        <tr class="total">
                                            <td>자산통계</td>
                                            <td>42,256</td>
                                            <td>34,578</td>
                                            <td>25,504</td>
                                        </tr>
                                        <tr>
                                            <td>[유동부채]</td>
                                            <td>42,256</td>
                                            <td>34,578</td>
                                            <td>25,504</td>
                                        </tr>
                                        <tr>
                                            <td>[비유동부채]</td>
                                            <td>42,256</td>
                                            <td>34,578</td>
                                            <td>25,504</td>
                                        </tr>
                                        <tr class="total">
                                            <td>부채총계</td>
                                            <td>42,256</td>
                                            <td>34,578</td>
                                            <td>25,504</td>
                                        </tr>
                                        <tr>
                                            <td>자본자본잉여금</td>
                                            <td>42,256</td>
                                            <td>34,578</td>
                                            <td>25,504</td>
                                        </tr>
                                        <tr>
                                            <td>기타자본</td>
                                            <td>42,256</td>
                                            <td>34,578</td>
                                            <td>25,504</td>
                                        </tr>
                                        <tr>
                                            <td>기타포괄손인누계액</td>
                                            <td>42,256</td>
                                            <td>34,578</td>
                                            <td>25,504</td>
                                        </tr>
                                        <tr>
                                            <td>이익잉여금</td>
                                            <td>42,256</td>
                                            <td>34,578</td>
                                            <td>25,504</td>
                                        </tr>
                                        <tr class="total">
                                            <td>자본총계</td>
                                            <td>42,256</td>
                                            <td>34,578</td>
                                            <td>25,504</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </article>
                    <article class="income-measurement">
                        <div class="article-header">
                            <h4 class="article-title">요약 손익계산서</h4>
                        </div>
                        <div class="article-content">
                            <dl class="unit">
                                <dt>단위</dt>
                                <dd>백만원</dd>
                            </dl>
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
                                            <td>매출액</td>
                                            <td>42,256</td>
                                            <td>34,578</td>
                                            <td>25,504</td>
                                        </tr>
                                        <tr>
                                            <td>매출원가</td>
                                            <td>42,256</td>
                                            <td>34,578</td>
                                            <td>25,504</td>
                                        </tr>
                                        <tr>
                                            <td>매출총이익</td>
                                            <td>42,256</td>
                                            <td>34,578</td>
                                            <td>25,504</td>
                                        </tr>
                                        <tr>
                                            <td>영업이익</td>
                                            <td>42,256</td>
                                            <td>34,578</td>
                                            <td>25,504</td>
                                        </tr>
                                        <tr>
                                            <td>당기순이익</td>
                                            <td>42,256</td>
                                            <td>34,578</td>
                                            <td>25,504</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                이본 및 희석 주당<br>
                                                순이익 (단위 : 원)
                                            </td>
                                            <td>42,256</td>
                                            <td>34,578</td>
                                            <td>25,504</td>
                                        </tr>
                                    </tbody>
                                </table>
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