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
                        <li><a href="/investment/stock_information.php">주식정보<span></span></a></li>
                        <li class="active"><a href="/investment/disclosure_information.php">공시정보<span></span></a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="container">
            <section class="disclosure-information">
                <div class="section-header">
                    <h3 class="content-title">공시정보</h3>
                </div>
                <div class="section-content">
                    <p class="date"><i>2017-04-24 14:40</i> 기준</p>
                    <div class="table-wrap">
                        <table class="table table-bordered">
                            <colgroup>
                                <col style="width: 80px;">
                                <col style="width: 710px;">
                                <col style="width: 130px;">
                                <col style="width: 130px;">
                            </colgroup>
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>공시제목</th>
                                    <th>제출의무자</th>
                                    <th>등록일</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>10</td>
                                    <td><a href="#" target="_blank">[정정]분기보고서(일반법인)</a></td>
                                    <td>RSA</td>
                                    <td>2015.06.08</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td><a href="#" target="_blank">전환청구권행사(2회차)</a></td>
                                    <td>포커스자산운용</td>
                                    <td>2015.06.08</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td><a href="#" target="_blank">추가상장(국내사모 CB전환)</a></td>
                                    <td>RSA</td>
                                    <td>2015.06.08</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td><a href="#" target="_blank">전환청구권행사(제1회차)</a></td>
                                    <td>포커스자산운용</td>
                                    <td>2015.06.08</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td><a href="#" target="_blank">단일판매ㆍ공급계약체결</a></td>
                                    <td>RSA</td>
                                    <td>2015.06.08</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td><a href="#" target="_blank">[정정]분기보고서(일반법인)</a></td>
                                    <td>포커스자산운용</td>
                                    <td>2015.06.08</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td><a href="#" target="_blank">전환청구권행사(2회차)</a></td>
                                    <td>RSA</td>
                                    <td>2015.06.08</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td><a href="#" target="_blank">추가상장(국내사모 CB전환)</a></td>
                                    <td>포커스자산운용</td>
                                    <td>2015.06.08</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td><a href="#" target="_blank">전환청구권행사(제1회차)</a></td>
                                    <td>RSA</td>
                                    <td>2015.06.08</td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td><a href="#" target="_blank">단일판매ㆍ공급계약체결</a></td>
                                    <td>포커스자산운용</td>
                                    <td>2015.06.08</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>
	</main>
	<!-- //End Content -->
	
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>