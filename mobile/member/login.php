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
            <article class="login">
                <div class="article-header">
                    <h3 class="title">LOGIN</h3>
                </div>
                <div class="article-content">
                    <form action="#">
                        <div class="form-group">
                            <label for="u-id" class="sr-only">아이디</label>
                            <input type="text" id="u-id" class="form-control" placeholder="아이디 입력">
                        </div>
                        <div class="form-group">
                            <label for="u-pw" class="sr-only">비밀번호</label>
                            <input type="password" id="u-pw" class="form-control" placeholder="비밀번호 입력">
                        </div>
                        <div class="btn-area">
                            <p>
                                <button type="submit" class="btn btn-lg btn-red">로그인</button>
                            </p>
                        </div>
                        <div class="find">
                            <label><input type="checkbox">아이디 저장</label>
                            <ul>
                                <li>
                                    <a href="/mobile/confirm.php">아이디/비밀번호 찾기</a>
                                </li>
                                <li>
                                    <a href="/mobile/member/join.php">회원가입</a>
                                </li>
                            </ul>
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