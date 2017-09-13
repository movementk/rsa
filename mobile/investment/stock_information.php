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
                <h2>주식정보</h2>
            </div>
            <div class="btn-control">
                <a href="/mobile/investment/finance_information.php" class="btn-pre">
                    <i class="icon-left-open-big">
                        <span class="sr-only">이전 페이지</span>
                    </i>
                </a>
                <a href="/mobile/investment/disclosure_information.php" class="btn-next">
                    <i class="icon-right-open-big">
                        <span class="sr-only">다음 페이지</span>
                    </i>
                </a>
            </div>
        </div>
        
        <!-- page content -->
        <section class="stock-information">
            <div class="container">
                <div class="section-header">
                    <h3 class="section-title">주식정보</h3>
                </div>
                <div class="section-content">
                    <p class="today-time">
                        체결시간 <i>2017-04-24 14:40</i> 기준
                    </p>
                    <div class="stock-information">
                        <div class="today-stock">
                            <p class="today up">19,750</p>
                            <hr>
                            <dl>
                                <dt>전일대비</dt>
                                <dd class="down">254</dd>
                                <dt>등락률</dt>
                                <dd class="fluctuation plus">1.25</dd>
                            </dl>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>시가(원)</th>
                                        <th>고가(원)</th>
                                        <th>저가(원)</th>
                                        <th>거래량</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>19,500</td>
                                        <td class="up">19,900</td>
                                        <td class="down">9,400</td>
                                        <td>43,197</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <article>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
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