<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/company.css" rel="stylesheet">
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    
    <!-- Srat Content -->
	<main class="sub company">
        <!-- Sub Content Pageheader -->
        <div class="page-header">
            <div class="visual-header">
                <div class="page-intro">
                    <h2 class="page-title">회사개요</h2>
                    <hr>
                    <p>알에스오토메이션을 소개합니다.</p>
                </div>
            </div>
            <!-- Sub lnb -->
            <nav class="sub-lnb">
                <div class="container">
                    <ul class="lnb-list">
                        <li><a href="/company/introduce.php">회사소개</a></li>
                        <li><a href="/company/greeting.php">인사말</a></li>
                        <li><a href="/company/ci.php">CI</a></li>
                        <li class="active"><a href="/company/history.php">연혁</a></li>
                        <li><a href="/company/location.php">사업장안내</a></li>
                        <li><a href="/company/partner.php">파트너쉽 제안</a></li>
                        <li><a href="/company/global_partner.php">글로벌 파트너쉽</a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="container">
            <section class="history">
                <div class="section-header">
                    <h3 class="content-title">연혁</h3>
                </div>
                <div class="section-content">
                    <div class="content-top">
                        <h4>
                            글로벌 브랜드 RS Automation의 자동화 솔루션,<br>
                            앞서 가는 글로벌 기업이 되겠습니다
                        </h4>
                    </div>
                    <ol>
                        <li>
                            <dl>
                                <dt>2014</dt>
                                <dd>
                                    <p>Servo CSD7 Series, MMC-EtherCAT 출시</p>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>2012</dt>
                                <dd>
                                    <p>X8 Series PLC, MMC-X 신제품 출시</p>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>2011</dt>
                                <dd>
                                    <p>NX7R PLC 개발 출시</p>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>2010</dt>
                                <dd>
                                    <p>CSD5 Series Servo 신제품 출시</p>
                                    <p>NX7G Series PLC 개발 출시</p>
                                    <p>알에스오토메이션 (RS Automation) 출범</p>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>2006</dt>
                                <dd>
                                    <p>로크웰오토메이션코리아로 사명 변경. OEMax 브랜드 국내 출시</p>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>2004</dt>
                                <dd>
                                    <p>OEMax 브랜드 제품군 해외 시장 출시</p>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>2002</dt>
                                <dd>
                                    <p>로크웰 삼성 오토메이션 합작회사 설립</p>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>1997</dt>
                                <dd>
                                    <p>자동화 사업, 삼성전자로 단일화</p>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>1993</dt>
                                <dd>
                                    <p>삼성전자, 서보 CSDJ, 삼성항공 인버터 Moscon-E3 개발 출시</p>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>1991</dt>
                                <dd>
                                    <p>삼성항공, PLC SPC-300 독자개발 출시</p>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>1989</dt>
                                <dd>
                                    <p>삼성전자 생기연, 서보 CSD 독자개발</p>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>1988</dt>
                                <dd>
                                    <p>삼성항공, 히타지(PLC, 1988) 및 야스카와전기(인버터, 1989) 기술제휴 생산, 판매 개시</p>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>1985</dt>
                                <dd>
                                    <p>삼성항공 (현 삼성테크윈), 자동화사업부 출범으로 자동화 기기 사업 개시</p>
                                </dd>
                            </dl>
                        </li>
                    </ol>
                </div>
            </section>
        </div>
	</main>
	<!-- //End Content -->
	
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>