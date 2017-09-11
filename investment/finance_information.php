<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/investment.css" rel="stylesheet">
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    
    <!-- Srat Content -->
	<main class="sub investment">
        <!-- Sub Content Pageheader -->
        <div class="page-header">
            <div class="visual-header">
                <div class="page-intro">
                    <h2 class="page-title">투자정보</h2>
                    <hr>
                    <p>알에스오토메이션의 새로운 소식을 알려드립니다</p>
                </div>
            </div>
            <!-- Sub lnb -->
            <nav class="sub-lnb">
                <div class="container">
                    <ul class="lnb-list">
                        <li class="active"><a href="/investment/finance_information.php">재무정보<span></span></a></li>
                        <li><a href="/investment/stock_information.php">주식정보<span></span></a></li>
                        <li><a href="/investment/disclosure_information.php">공시정보<span></span></a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="container">
            <section class="finance-information">
                <div class="section-header">
                    <h3 class="content-title">재무정보</h3>
                </div>
                <div class="section-content">
                    <article class="financial-statement">
                        <h4 class="article-title">요약 재무제표</h4>
                        <dl class="unit">
                            <dt>단위</dt>
                            <dd>백만원</dd>
                        </dl>
                        <div class="table-wrap">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>항목</th>
                                        <th>2013년</th>
                                        <th>2014년</th>
                                        <th>2015년</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>[유동자산]</td>
                                        <td>1,234</td>
                                        <td>1,234</td>
                                        <td>1,234</td>
                                    </tr>
                                    <tr>
                                        <td>당좌자산</td>
                                        <td>5,678</td>
                                        <td>5,678</td>
                                        <td>5,678</td>
                                    </tr>
                                    <tr>
                                        <td>재고자산</td>
                                        <td>1,234</td>
                                        <td>1,234</td>
                                        <td>1,234</td>
                                    </tr>
                                    <tr>
                                        <td>[비유동자산]</td>
                                        <td>5,678</td>
                                        <td>5,678</td>
                                        <td>5,678</td>
                                    </tr>
                                    <tr>
                                        <td>투자자산</td>
                                        <td>1,234</td>
                                        <td>1,234</td>
                                        <td>1,234</td>
                                    </tr>
                                    <tr>
                                        <td>유형자산</td>
                                        <td>5,678</td>
                                        <td>5,678</td>
                                        <td>5,678</td>
                                    </tr>
                                    <tr>
                                        <td>무형자산</td>
                                        <td>1,234</td>
                                        <td>1,234</td>
                                        <td>1,234</td>
                                    </tr>
                                    <tr>
                                        <td>기타비유동자산</td>
                                        <td>5,678</td>
                                        <td>5,678</td>
                                        <td>5,678</td>
                                    </tr>
                                    <tr class="total">
                                        <td>자산통계</td>
                                        <td>1,234</td>
                                        <td>1,234</td>
                                        <td>1,234</td>
                                    </tr>
                                    <tr>
                                        <td>[유동부채]</td>
                                        <td>5,678</td>
                                        <td>5,678</td>
                                        <td>5,678</td>
                                    </tr>
                                    <tr>
                                        <td>[비유동부채]</td>
                                        <td>1,234</td>
                                        <td>1,234</td>
                                        <td>1,234</td>
                                    </tr>
                                    <tr class="total">
                                        <td>부채총계</td>
                                        <td>5,678</td>
                                        <td>5,678</td>
                                        <td>5,678</td>
                                    </tr>
                                    <tr>
                                        <td>자본자본잉여금</td>
                                        <td>1,234</td>
                                        <td>1,234</td>
                                        <td>1,234</td>
                                    </tr>
                                    <tr>
                                        <td>기타자본</td>
                                        <td>5,678</td>
                                        <td>5,678</td>
                                        <td>5,678</td>
                                    </tr>
                                    <tr>
                                        <td>기타포괄손인누계액</td>
                                        <td>1,234</td>
                                        <td>1,234</td>
                                        <td>1,234</td>
                                    </tr>
                                    <tr>
                                        <td>이익잉여금</td>
                                        <td>5,678</td>
                                        <td>5,678</td>
                                        <td>5,678</td>
                                    </tr>
                                    <tr class="total">
                                        <td>자본총계</td>
                                        <td>1,234</td>
                                        <td>1,234</td>
                                        <td>1,234</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </article>
                    <article class="income-statement">
                        <h4 class="article-title">요약 손익계산서</h4>
                        <dl class="unit">
                            <dt>단위</dt>
                            <dd>백만원</dd>
                        </dl>
                        <div class="table-wrap">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>항목</th>
                                        <th>2013년</th>
                                        <th>2014년</th>
                                        <th>2015년</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>매출액</td>
                                        <td>1,234</td>
                                        <td>1,234</td>
                                        <td>1,234</td>
                                    </tr>
                                    <tr>
                                        <td>매출원가</td>
                                        <td>5,678</td>
                                        <td>5,678</td>
                                        <td>5,678</td>
                                    </tr>
                                    <tr>
                                        <td>매출 총이익</td>
                                        <td>1,234</td>
                                        <td>1,234</td>
                                        <td>1,234</td>
                                    </tr>
                                    <tr>
                                        <td>영업이익</td>
                                        <td>5,678</td>
                                        <td>5,678</td>
                                        <td>5,678</td>
                                    </tr>
                                    <tr>
                                        <td>당기순이익</td>
                                        <td>1,234</td>
                                        <td>1,234</td>
                                        <td>1,234</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            기본 및 희석 주당순이익<br>
                                            (단위 : 원)
                                        </td>
                                        <td>5,678</td>
                                        <td>5,678</td>
                                        <td>5,678</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
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