<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link href="/mobile/assets/css/sub.css" rel="stylesheet">
<link href="/mobile/assets/css/member.css" rel="stylesheet">
</head>
<body class="member">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
    <!-- Content Start -->
    <main id="content">
        <!-- page-header -->
        <div class="page-header">
            <div class="container">
                <h2>MEMBER</h2>
            </div>
        </div>
        
        <!-- page content -->
        <section class="agree">
            <div class="container">
                <div class="section-header">
                    <h3 class="section-title">이용약관</h3>
                </div>
                <div class="section-content">
                    <div class="terms">
                        이용약관 노출영역
                    </div>
                    <div class="radio-check">
                        위 이용약관에 <br>
                        <label><input type="radio">동의합니다.</label>
                        <label><input type="radio">동의하지 않습니다.</label>
                    </div>
                    <div class="btn-area">
                        <p>
                            <a href="/mobile/member/join.php" class="btn btn-lg btn-red" role="button">가입신청</a>
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
</body>
</html>