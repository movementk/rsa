<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link href="/mobile/assets/css/main.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
    <!-- Content Start -->
    <main id="content">
        <!-- 메인 비주얼 -->
        <div class="jumbotron">
            <div class="jumbo-slider">
                <ul>
                    <li style="background-image: url(/mobile/assets/images/main/jumbo_img01.jpg);"></li>
                    <li style="background-image: url(/mobile/assets/images/main/jumbo_img01.jpg);"></li>
                    <li style="background-image: url(/mobile/assets/images/main/jumbo_img01.jpg);"></li>
                    <li style="background-image: url(/mobile/assets/images/main/jumbo_img01.jpg);"></li>
                </ul>
            </div>
            <div class="jumbo-content">
                <p>로봇모션·에너지제어 전문기업</p>
                <h2>알에스오토메이션</h2>
                <small>4차산업혁명의 브레인을 만든다</small>
            </div>
        </div>
        
        <!-- 전체 검색 -->
        <div id="global-search">
            <form action="#">
                <div class="form-group">
                    <input type="text" class="form-control" id="search-form" placeholder="RSA Data Search">
                    <label for="search-form" class="sr-only">전체검색</label>
                </div>
                <button type="submit" class="btn btn-search">
                    <i class="icon-search">
                        <span class="sr-only">검색버튼</span>
                    </i>
                </button>
            </form>
        </div>
        
        <div id="quick-menu">
            <div class="container">
                <ul class="row">
                    <li class="col-xs-6">
                        <a href="/mobile/product/product_list.php">
                            <img src="/mobile/assets/images/main/quick_img01.gif" alt="제품안내">제품안내
                        </a>
                    </li>
                    <li class="col-xs-6">
                        <a href="/mobile/customer/faq_list.php">
                            <img src="/mobile/assets/images/main/quick_img02.gif" alt="고객지원">고객지원
                        </a>
                    </li>
                    <li class="col-xs-6">
                        <a href="#">
                            <img src="/mobile/assets/images/main/quick_img03.gif" alt="자료실">자료실
                        </a>
                    </li>
                    <li class="col-xs-6">
                        <a href="/mobile/customer/qna_list.php">
                            <img src="/mobile/assets/images/main/quick_img04.gif" alt="Q&A">Q&amp;A
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        
        <article id="introduce">
            <div class="container">
                <h2>회사소개</h2>
                <hr>
                <p>
                    알에스오토메이션은 지난 30여년간, 글로벌 초우량 기업<br>
                    (삼성테크윈, 삼성전자, 로크웰오토메이션)에서의<br>
                    사업경험을 바탕으로 2010년 1월 1일 새롭게 출범한<br>
                    자동화기기 전문 기업 입니다.
                </p>
            </div>
        </article>
        
        <article id="robot-motion">
            <div class="figure">
                <img src="/mobile/assets/images/main/robot_motion_bg.jpg" class="img-responsive" alt="">
            </div>
            <div class="details">
                <img src="/mobile/assets/images/main/robot_motion_arrow.png" alt="">
                <h3>로봇모션제어</h3>
                <hr>
                <ul>
                    <li>Motion Controller</li>
                    <li>Drive</li>
                    <li>PLC</li>
                    <li>Distributed</li>
                    <li>Distributed I/O</li>
                    <li>Touch Panel</li>
                </ul>
            </div>
        </article>
        
        <article id="energy">
            <div class="details">
                <img src="/mobile/assets/images/main/energy_arrow.png" alt="">
                <h3>에너지제어</h3>
                <hr>
                <ul>
                    <li>PCS</li>
                    <li>UPS</li>
                    <li>Inverter</li>
                </ul>
            </div>
            <div class="figure">
                <img src="/mobile/assets/images/main/energy_bg.jpg" class="img-responsive" alt="">
            </div>
        </article>
        
        <section id="board">
            <div class="container">
                <article class="press">
                    <p class="figure">
                        <img src="/mobile/assets/images/main/press_img01.jpg" class="img-responsive" alt="">
                    </p>
                    <div class="title">
                        <i class="icon-doc-text"></i>
                        <h4>PRESS</h4>
                    </div>
                    <div class="details">
                        <a href="/mobile/news/pr_view.php">
                            알에스오토메이션, 코스닥 신규 상장 - <br>
                            4차산업 혁명에 따른 고성장 기대 
                        </a>
                    </div>
                </article>
                <article class="notice">
                    <div class="title">
                        <i class="icon-mic"></i>
                        <h4>NOTICE</h4>
                    </div>
                    <div class="details">
                        <a href="/mobile/news/notice_view.php">
                            신주 발행 공고(2017)
                            <p class="date">17-07-13</p>
                        </a>
                    </div>
                </article>
            </div>
        </section>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
    <script src="/assets/jquery.bxslider/jquery.bxslider.min.js"></script>
    <script>
        (function($) {
            //메인 슬라이더
            $('.jumbo-slider > ul').bxSlider({
                auto: true,
                controls: false
            });
        })(jQuery);
    </script>
</body>
</html>