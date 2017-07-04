<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/member.css" rel="stylesheet">
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    
    <!-- Srat Content -->
	<main class="sub member">
        <!-- Sub Content Pageheader -->
        <div class="page-header">
            <div class="visual-header">
                <div class="page-intro">
                    <h2 class="page-title">MEMBER</h2>
                    <hr>
                    <p>알에스오토메이션에 오신것을 환영합니다</p>
                </div>
            </div>
        </div>
        <div class="container">
            <section class="common-form login">
                <div class="section-header">
                    <h3>LOGIN</h3>
                </div>
                <div class="section-content">
                    <div class="login-form">
                        <form action="#">
                            <div class="write">
                                <div class="form-group">
                                    <label for="u-id" class="sr-only">아이디</label>
                                    <input type="text" id="u-id" class="form-control" placeholder="아이디 입력">
                                </div>
                                <div class="form-group">
                                    <label for="u-pw" class="sr-only">비밀번호</label>
                                    <input type="password" id="u-pw" class="form-control" placeholder="비밀번호 입력">
                                </div>
                                <p class="btn-login">
                                    <button type="submit" class="btn btn-red">로그인</button>
                                </p>
                            </div>
                            <div class="find-join">
                                <div class="id-save">
                                    <div class="form-group">
                                        <label><input type="checkbox"> 아이디 저장</label>
                                    </div>
                                </div>
                                <ul>
                                    <li>
                                        <a href="/member/id_pw_find.php">아이디 / 비밀번호 찾기</a>
                                    </li>
                                    <li>
                                        <a href="/member/join.php">회원가입</a>
                                    </li>
                                </ul>
                            </div>
                        </form>
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