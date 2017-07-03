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
                    <p class="summary">회원가입을 하시면 더 많은 서비스를 자유로이 누리실 수 있습니다</p>
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
                                    <label for="u-pw">비밀번호</label>
                                    <input type="password" id="u-pw" class="form-control">
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
                                <dt>아이디/비밀번호를 잊어버리셨나요?</dt>
                                <dd class="find">
                                    <a href="#">아이디</a>
                                    <a href="#">비밀번호 찾기</a>
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