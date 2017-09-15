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
                <h2>Q&amp;A</h2>
            </div>
        </div>
        
        <div class="container">
            <!-- page content -->
            <article class="pw-confirm">
                <div class="article-header">
                    <h3 class="title">비밀번호 확인</h3>
                    <p class="summary">소중한 개인정보를 보호하기 위해 비밀번호를<br>다시 한번 확인합니다. </p>
                </div>
                <div class="article-content">
                    <form action="#">
                        <p class="user-id">RSAUTOMETION</p>
                        <div class="form-group">
                            <label for="u-email" class="sr-only">이메일</label>
                            <input type="email" id="u-email" class="form-control" placeholder="이메일 입력">
                        </div>
                        <div class="btn-area">
                            <p>
                                <button type="submit" class="btn btn-lg btn-red">확인</button>
                            </p>
                        </div>
                    </form>
                </div>
            </article>
        </div>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
</body>
</html>