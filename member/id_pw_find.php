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
            <section class="common-form id-find">
                <div class="section-header">
                    <h3>아이디 찾기</h3>
                    <p class="summary">아이디를 찾기 위해 다음 항목을 입력해주세요.</p>
                </div>
                <div class="section-content">
                    <div class="login-form">
                        <form action="#">
                            <div class="write">
                                <div class="form-group">
                                    <label for="u-name" class="sr-only">이름</label>
                                    <input type="text" id="u-name" class="form-control" placeholder="이름 입력">
                                </div>
                                <div class="form-group">
                                    <label for="id-mail" class="sr-only">이메일</label>
                                    <input type="email" id="id-mail" class="form-control" placeholder="E-mail 입력">
                                </div>
                                <p class="btn-login">
                                    <button type="submit" class="btn btn-red">찾기</button>
                                    <a href="#" class="btn btn-white" role="button">회원가입</a>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
            <section class="common-form pw-find">
                <div class="section-header">
                    <h3>비밀번호 찾기</h3>
                    <p class="summary">가입 하실때 입력하셨던 아이디와 이메일을 입력해 주세요</p>
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
                                    <label for="pw-mail" class="sr-only">이메일</label>
                                    <input type="email" id="pw-mail" class="form-control" placeholder="E-mail 입력">
                                </div>
                                <p class="btn-login">
                                    <button type="submit" class="btn btn-red">확인</button>
                                    <a href="#" class="btn btn-white" role="button">회원가입</a>
                                </p>
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