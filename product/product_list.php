<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/product.css" rel="stylesheet">
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    
    <!-- Srat Content -->
	<main class="sub product">
        <!-- Sub Content Pageheader -->
        <div class="page-header">
            <div class="visual-header">
                <div class="page-intro">
                    <h2 class="page-title">제품안내</h2>
                    <hr>
                    <p>알에스오토메이션의 제품을 소개합니다.</p>
                </div>
            </div>
            <!-- Sub lnb -->
            <nav class="sub-lnb">
                <div class="container">
                    <ul class="lnb-list">
                        <li class="active"><a href="#">PLC</a></li>
                        <li><a href="#">Distributed I/O</a></li>
                        <li><a href="#">Touch Panel</a></li>
                        <li><a href="#">Inverter</a></li>
                        <li><a href="#">Servo</a></li>
                        <li><a href="#">Motion Controller</a></li>
                        <li><a href="#">UPS</a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="container">
            <section class="product-list">
                <div class="section-header">
                    <h3 class="content-title">PLC</h3>
                </div>
                <div class="section-content">
                    <nav class="tab-list">
                        <ul>
                            <li class="active"><a href="#">X8 시리즈</a></li>
                            <li><a href="#">NX7R 시리즈</a></li>
                            <li><a href="#">NX 700 시리즈</a></li>
                            <li><a href="#">NX70 시리즈</a></li>
                            <li><a href="#">NX7 시리즈</a></li>
                        </ul>
                    </nav>
                    <article class="product-item">
                        <div class="row">
                            <!-- 이미지와 컨텐츠 height 값이 다르므로 .vcenter 클래스 추가 -->
                            <div class="col-xs-4 col-xs-offset-1 vcenter">
                                <!-- 이미지 & 버튼 -->
                                <div class="figure">
                                    <p class="product-img">
                                        <img src="/assets/images/product/plc_img01.jpg" alt="X8 시리즈">
                                    </p>
                                </div>
                                <div class="btn-area">
                                    <p>
                                        <a href="#" class="btn btn-red" role="button">
                                            <i class="icon-file-pdf"></i>카탈로그 다운로드
                                        </a>
                                    </p>
                                </div>
                            </div>
                            <div class="col-xs-6 vcenter">
                                <!-- 설명 & 테이블 -->
                                <div class="details">
                                    <h4 class="product-name">X8 시리즈</h4>
                                    <p class="summary">고성능 차세대 소형 네트워크 기능의 X8 시리즈</p>
                                    <strong>작지만 강력한 기능  강력한 통신 기능</strong>
                                    <ul>
                                        <li>내장 10/100Mbps 이더넷 포트</li>
                                        <li>내장 USB 포트</li>
                                        <li>내장 10/100Mbps 이더넷 포트</li>
                                    </ul>
                                    <strong>
                                        내장 RS232C/485 겸용 2 채널 고속 시리얼 포트<br>
                                        다양한 통신 프로토콜 지원
                                    </strong>
                                    <p>
                                        - Ethernet Protocol : Xnet over IP Client/Server, Modbus/TCP Client/Server, 
                                        <br>EtherNet/IP(PCCC, CIP Generic) Client/Server, HSMS/SECS-II Client/Server, 
                                        <br>Bootp/DHCP Client, SNMP Server, HTTP(Web) Server
                                    </p>
                                    <p>
                                        - Serial Protocol : Xnet Master/Slave, Modbus/RTU Master/Slave, DF1-Full Duplex,<br> 
                                        NX-Plus  Master, NX-Alpha Master, MELSEC 1C Master, MP5 Master, ASCII/Binary <br>(User Defined Protocol)
                                    </p>
                                    <strong>
                                        레시피 및 데이터 로그용 4G byte SD Card 지원<br>
                                        네트워크 기반 시스템의 최적 솔루션  
                                    </strong>
                                    <p>-Semi/FPD, Communication, SCADA, etc</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-10 col-xs-offset-1">
                                <div class="table-wrap">
                                    <table class="table table-type2">
                                        <colgroup>
                                            <col style="width: 25%">
                                            <col style="width: 25%">
                                            <col style="width: 25%">
                                            <col style="width: 25%">
                                        </colgroup>
                                        <thead>
                                            <tr>
                                                <th>Cat. No</th>
                                                <th>Power Supply</th>
                                                <th>Digital InPut</th>
                                                <th>Digital OutPut</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>나래자동화</td>
                                                <td>24VDC</td>
                                                <td>DC 16pts</td>
                                                <td>Sink out 16pts</td>
                                            </tr>
                                            <tr>
                                                <td>X8-M16DDR</td>
                                                <td>24VDC</td>
                                                <td>DC 8pts</td>
                                                <td>Relay 8pts</td>
                                            </tr>
                                            <tr>
                                                <td>X8-M14DDT</td>
                                                <td>24VDC</td>
                                                <td>DC 8pts</td>
                                                <td>Sink out 6pts</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </article>
                    
                    <article class="product-item">
                        <div class="row">
                            <div class="col-xs-4 col-xs-offset-1 vcenter">
                                <!-- 이미지 & 버튼 -->
                                <div class="figure">
                                    <p class="product-img">
                                        <img src="/assets/images/product/plc_img02.jpg" alt="NX7R 시리즈">
                                    </p>
                                </div>
                                <div class="btn-area">
                                    <p>
                                        <a href="#" class="btn btn-red" role="button">
                                            <i class="icon-file-pdf"></i>카탈로그 다운로드
                                        </a>
                                    </p>
                                </div>
                            </div>
                            <div class="col-xs-6 vcenter">
                                <!-- 설명 & 테이블 -->
                                <div class="details">
                                    <h4 class="product-name">NX7R 시리즈</h4>
                                    <p class="summary">새로운 하드웨어가 내장된 강력한 성능의 경제적인 NX7R</p>
                                    <ul>
                                        <li>-합리적인 가격의 소규모 응용에 적합한 완벽한 컨트롤러 솔루션</li>
                                        <li>-고속통신과 풍부한 프로그래밍 영역, 고성능의 제어 능력을 내장한 컨트롤러</li>
                                        <li>-컴팩트 사이즈의 마이크로 컨트롤러 </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-10 col-xs-offset-1">
                                <div class="table-wrap">
                                    <table class="table table-type2">
                                        <colgroup>
                                            <col style="width: 16.66%">
                                            <col style="width: 16.66%">
                                            <col style="width: 16.66%">
                                            <col style="width: 16.66%">
                                            <col style="width: 16.66%">
                                            <col style="width: 16.66%">
                                        </colgroup>
                                        <thead>
                                            <tr>
                                                <th>Cat. No</th>
                                                <th>Power Supply</th>
                                                <th>Digital InPut</th>
                                                <th>Digital OutPut</th>
                                                <th>Analog In</th>
                                                <th>Analog Out</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>NX7R-28ADR</td>
                                                <td>AC100/220V</td>
                                                <td>DC 6pts</td>
                                                <td>Relay 12pts</td>
                                                <td>-</td>
                                                <td>-</td>
                                            </tr>
                                            <tr>
                                                <td>NX7R-28ADT</td>
                                                <td>AC100/220V</td>
                                                <td>DC 6pts</td>
                                                <td>TR(Sink) 12pts</td>
                                                <td>-</td>
                                                <td>-</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </article>
                    
                    <article class="product-item">
                        <div class="row">
                            <div class="col-xs-4 col-xs-offset-1 vcenter">
                                <!-- 이미지 & 버튼 -->
                                <div class="figure">
                                    <p class="product-img">
                                        <img src="/assets/images/product/plc_img03.jpg" alt="NX 700 시리즈">
                                    </p>
                                </div>
                                <div class="btn-area">
                                    <p>
                                        <a href="#" class="btn btn-red" role="button">
                                            <i class="icon-file-pdf"></i>카탈로그 다운로드
                                        </a>
                                    </p>
                                </div>
                            </div>
                            <div class="col-xs-6 vcenter">
                                <!-- 설명 & 테이블 -->
                                <div class="details">
                                    <h4 class="product-name">NX 700 시리즈</h4>
                                    <p class="summary">첨단기능이 집약된 NX700 시리즈</p>
                                    <p>
                                        NX700 시리즈는 차세대 제어장치에 대응이 가능하도록 컴팩트 하고 사용이 편리한 디자인으로<br>설계되어 효율적 구성이 가능하고 뛰어난 성능을 자랑합니다.
                                    </p>
                                    <div class="table-wrap">
                                        <table class="table table-type2">
                                            <colgroup>
                                                <col style="width: 180px;">
                                                <col style="width: 335px;">
                                            </colgroup>
                                            <tbody>
                                                <tr>
                                                    <th>제어점수</th>
                                                    <td>Local 1600점 (REMOTE포함 2048~8192점)</td>
                                                </tr>
                                                <tr>
                                                    <th>다양한 CPU Line-up</th>
                                                    <td>CPU700P,CPU700, CPU 750A/B/C/D등</td>
                                                </tr>
                                                <tr>
                                                    <th>메모리 용량</th>
                                                    <td>16K ~ 120K 까지</td>
                                                </tr>
                                                <tr>
                                                    <th>처리속도</th>
                                                    <td>0.03us ~ 0.4 us</td>
                                                </tr>
                                                <tr>
                                                    <th>내부접점</th>
                                                    <td>2048 ~8192 점</td>
                                                </tr>
                                                <tr>
                                                    <th>데이터 메모리</th>
                                                    <td>2048 ~ 10,240 워드</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <p class="attention">
                                            해당 모델은 단종이므로, 보다 자세한 문의사항은 고객센터(1588-5298)로 연락해 주세요
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                    
                    <article class="product-item">
                        <div class="row">
                            <div class="col-xs-4 col-xs-offset-1 vcenter">
                                <!-- 이미지 & 버튼 -->
                                <div class="figure">
                                    <p class="product-img">
                                        <img src="/assets/images/product/plc_img04.jpg" alt="NX7 시리즈">
                                    </p>
                                </div>
                                <div class="btn-area">
                                    <p>
                                        <a href="#" class="btn btn-red" role="button">
                                            <i class="icon-file-pdf"></i>카탈로그 다운로드
                                        </a>
                                    </p>
                                </div>
                            </div>
                            <div class="col-xs-6 vcenter">
                                <!-- 설명 & 테이블 -->
                                <div class="details">
                                    <h4 class="product-name">NX7 시리즈</h4>
                                    <p class="summary">초소형 사이즈와 다양한 기능의 NX7 시리즈</p>
                                    <p>
                                        NX7 시리즈는 초소형 사이즈에 각종 특수기능이 내장되어 있으며 경제 적인 구성이 가능하도록<br>일체형으로 설계된 제품입니다.
                                    </p>
                                    <div class="table-wrap">
                                        <table class="table table-type2">
                                            <colgroup>
                                                <col style="width: 180px;">
                                                <col style="width: 335pxpx;">
                                            </colgroup>
                                            <tbody>
                                                <tr>
                                                    <th>제어점수</th>
                                                    <td>외부 입출력 14,28,48..~104점</td>
                                                </tr>
                                                <tr>
                                                    <th>메모리 용량</th>
                                                    <td>4~9K Words</td>
                                                </tr>
                                                <tr>
                                                    <th>통신포트</th>
                                                    <td>RS232C/485겸용 2 Ports</td>
                                                </tr>
                                                <tr>
                                                    <th>특수기능</th>
                                                    <td>
                                                        고속카운터<br>
                                                        펄스출력<br>
                                                        펄스캐치<br>
                                                        PID<br>
                                                        시계기능<br>
                                                        백업메모리 등<br>
                                                        기본내장
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <p class="attention">
                                            해당 모델은 단종이므로, 보다 자세한 문의사항은 고객센터(1588-5298)로 연락해 주세요
                                        </p>
                                    </div>
                                </div>
                            </div>
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