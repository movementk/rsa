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
                        <li><a href="/investment/finance_information.php">재무정보<span></span></a></li>
                        <li class="active"><a href="/investment/stock_information.php">주식정보<span></span></a></li>
                        <li><a href="/investment/disclosure_information.php">공시정보<span></span></a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="container">
            <section class="stock-information">
                <div class="section-header">
                    <h3 class="content-title">주식정보</h3>
                </div>
                <div class="section-content">
                    <p class="conclude-time">체결시간 <i class="date">2017-04-24 14:40</i> 기준</p>
                    <article class="stock-board">
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="information">
                                    <ul>
                                        <li>
                                            <!-- 
                                                class 고가 : high-price
                                                class 저가 : low-price
                                            -->
                                            <strong class="today-stock high-price">19,750</strong>
                                        </li>
                                        <li>
                                            <dl>
                                                <!-- 
                                                    class 고가 : high-price
                                                    class 저가 : low-price
                                                -->
                                                <dt>전일대비</dt>
                                                <dd class="net-change low-price">250</dd>
                                                <dt>등락률</dt>
                                                <dd class="fluctuation low-price">1.25</dd>
                                            </dl>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="table-wrap">
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
                                                <td class="high-price">19,900</td>
                                                <td class="low-price">9,400</td>
                                                <td>43,197</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="days-infomation">
                        <div class="table-wrap">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>날짜</th>
                                        <th>종가(원)</th>
                                        <th>전일대비</th>
                                        <th>등락률</th>
                                        <th>시가</th>
                                        <th>고가</th>
                                        <th>저가</th>
                                        <th>거래량 (주)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>2017-04-21</td>
                                        <td>19,750</td>
                                        <td class="net-change high-price">250</td>
                                        <td class="fluctuation high-price">1.28</td>
                                        <td>19,500</td>
                                        <td>19,900</td>
                                        <td>19,400</td>
                                        <td>443,197</td>
                                    </tr>
                                    <tr>
                                        <td>2017-04-21</td>
                                        <td>19,750</td>
                                        <td class="net-change high-price">350</td>
                                        <td class="fluctuation high-price">1.83</td>
                                        <td>19,500</td>
                                        <td>19,900</td>
                                        <td>19,400</td>
                                        <td>443,197</td>
                                    </tr>
                                    <tr>
                                        <td>2017-04-21</td>
                                        <td>19,750</td>
                                        <td>0</td>
                                        <td class="fluctuation">0</td>
                                        <td>19,500</td>
                                        <td>19,900</td>
                                        <td>19,400</td>
                                        <td>443,197</td>
                                    </tr>
                                    <tr>
                                        <td>2017-04-21</td>
                                        <td>19,750</td>
                                        <td class="net-change low-price">200</td>
                                        <td class="fluctuation low-price">1.54</td>
                                        <td>19,500</td>
                                        <td>19,900</td>
                                        <td>19,400</td>
                                        <td>443,197</td>
                                    </tr>
                                    <tr>
                                        <td>2017-04-21</td>
                                        <td>19,750</td>
                                        <td>250</td>
                                        <td class="fluctuation high-price default">1.28</td>
                                        <td>19,500</td>
                                        <td>19,900</td>
                                        <td>19,400</td>
                                        <td>443,197</td>
                                    </tr>
                                    <tr>
                                        <td>2017-04-21</td>
                                        <td>19,750</td>
                                        <td>250</td>
                                        <td class="fluctuation high-price default">1.28</td>
                                        <td>19,500</td>
                                        <td>19,900</td>
                                        <td>19,400</td>
                                        <td>443,197</td>
                                    </tr>
                                    <tr>
                                        <td>2017-04-21</td>
                                        <td>19,750</td>
                                        <td>250</td>
                                        <td class="fluctuation low-price default">0.83</td>
                                        <td>19,500</td>
                                        <td>19,900</td>
                                        <td>19,400</td>
                                        <td>443,197</td>
                                    </tr>
                                    <tr>
                                        <td>2017-04-21</td>
                                        <td>19,750</td>
                                        <td>250</td>
                                        <td class="fluctuation high-price default">1.28</td>
                                        <td>19,500</td>
                                        <td>19,900</td>
                                        <td>19,400</td>
                                        <td>443,197</td>
                                    </tr>
                                    <tr>
                                        <td>2017-04-21</td>
                                        <td>19,750</td>
                                        <td>250</td>
                                        <td class="fluctuation high-price default">1.28</td>
                                        <td>19,500</td>
                                        <td>19,900</td>
                                        <td>19,400</td>
                                        <td>443,197</td>
                                    </tr>
                                    <tr>
                                        <td>2017-04-21</td>
                                        <td>19,750</td>
                                        <td>250</td>
                                        <td class="fluctuation low-price default">0.28</td>
                                        <td>19,500</td>
                                        <td>19,900</td>
                                        <td>19,400</td>
                                        <td>443,197</td>
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