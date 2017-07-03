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
            <section class="pw-confirm">
                <div class="section-header">
                    <h3>비밀번호 확인</h3>
                    <p class="summary">소중한 개인정보를 보호하기 위해 비밀번호를 다시 한번 확인합니다.</p>
                </div>
                <div class="section-content">
                    <div class="login-form">
                        <form action="#">
                            <div class="write">
                                <p class="user-id">RSAUTOMATION</p>
                                <div class="form-group">
                                    <label for="u-pw" class="sr-only">비밀번호</label>
                                    <input type="password" id="u-pw" class="form-control" placeholder="비밀번호 입력">
                                </div>
                                <p class="btn-login">
                                    <button type="submit" class="btn btn-red">확인</button>
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