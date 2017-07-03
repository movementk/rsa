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
                                    <label for="u-id">아이디</label>
                                    <input type="text" id="u-id" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="u-mail">이메일</label>
                                    <input type="email" id="u-mail" class="form-control">
                                </div>
                                <p class="btn-login">
                                    <button type="submit" class="btn btn-red">확인</button>
                                </p>
                            </div>
                        </form>
                        <div class="find-join">
                            <dl>
                                <dt>아직 회원이 아니신가요?</dt>
                                <dd>
                                    <p class="btn-join">
                                        <a href="/member/join.php" class="btn btn-gray" role="button">회원가입</a>
                                    </p>
                                </dd>
                            </dl>
                        </div>
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