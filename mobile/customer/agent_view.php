<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link href="/mobile/assets/css/sub.css" rel="stylesheet">
<link href="/mobile/assets/css/customer.css" rel="stylesheet">
</head>
<body class="customer">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
    <!-- Content Start -->
    <main id="content">
        <!-- page-header -->
        <div class="page-header">
            <div class="container">
                <h2>대리점</h2>
            </div>
            <div class="btn-control">
                <a href="/mobile/customer/" class="btn-pre">
                    <i class="icon-left-open-big">
                        <span class="sr-only">이전 페이지</span>
                    </i>
                </a>
                <a href="/mobile/customer/" class="btn-next">
                    <i class="icon-right-open-big">
                        <span class="sr-only">다음 페이지</span>
                    </i>
                </a>
            </div>
        </div>
        
        <section class="agent-view">
            <div class="container">
                <article class="view">
                    <h3>나래자동화</h3>
                    <div class="table-wrap">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th>지역</th>
                                    <td>구로</td>
                                </tr>
                                <tr>
                                    <th>대표자명</th>
                                    <td>황채화</td>
                                </tr>
                                <tr>
                                    <th>주소</th>
                                    <td>
                                        서울 금천구 가산동 487 - 11
                                        대륭테크노타운 8차 1114호
                                    </td>
                                </tr>
                                <tr>
                                    <th>전화번호</th>
                                    <td><a href="tel:028342144">02 - 834 - 2144</a></td>
                                </tr>
                                <tr>
                                    <th>팩스번호</th>
                                    <td>02 - 849 - 2147</td>
                                </tr>
                                <tr>
                                    <th>취급품목</th>
                                    <td>PLC, I/O, Touch Panel, INVERTER, Motion</td>
                                </tr>
                                <tr>
                                    <th>홈페이지</th>
                                    <td><a href="http://www.samsungplc.co.kr" target="_blank">www.samsungplc.co.kr</a></td>
                                </tr>
                                <tr>
                                    <th>약도</th>
                                    <td>
                                        <div class="map">
                                            <img src="/mobile/assets/images/customer/agent_map_img.jpg" class="img-responsive" alt="">
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="btn-area">
                        <p>
                            <a href="/mobile/customer/agent_list.php" class="btn btn-lg btn-red" role="button">목록</a>
                        </p>
                    </div>
                </article>
            </div>
        </section>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
</body>
</html>