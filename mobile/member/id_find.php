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
        
        <div class="container">
            <!-- page content -->
            <article class="common-find">
                <div class="article-header">
                    <ul class="find-list">
                        <li class="active">
                            <a href="/mobile/member/id_find.php">아이디 찾기</a>
                        </li>
                        <li>
                            <a href="/mobile/member/pw_find.php">비밀번호 찾기</a>
                        </li>
                    </ul>
                </div>
                <div class="article-content">
                    <h3 class="title">아이디 찾기</h3>
                    <p class="summary">아이디를 찾기 위해 다음 항목을 입력해주세요.</p>
                    <form action="#">
                        <div class="form-group">
                            <label for="u-name" class="sr-only">이름</label>
                            <input type="text" id="u-name" class="form-control" placeholder="이름 입력">
                        </div>
                        <div class="form-group">
                            <label for="u-email" class="sr-only">이메일</label>
                            <input type="email" id="u-email" class="form-control" placeholder="이메일 입력">
                        </div>
                        <div class="btn-area">
                            <p>
                                <button type="submit" class="btn btn-lg btn-red">아이디 찾기</button>
                            </p>
                            <p>
                                <a href="/mobile/member/join.php" class="btn btn-lg btn-white" role="button">회원가입</a>
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