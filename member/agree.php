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
            <section class="agree">
                <div class="section-header">
                    <h3 class="content-title">이용약관</h3>
                </div>
                <div class="section-content">
                    <form action="#">
                        <div class="content">
                            이용약관 노출영역
                        </div>
                        <div class="selection-agree">
                            <div class="form-group">
                                <p class="agree-txt">위 이용약관에</p>
                                <label><input type="radio">동의합니다.</label>
                                <label><input type="radio">동의하지 않습니다.</label>
                            </div>
                            <div class="btn-area">
                                <p>
                                    <button type="submit" class="btn btn-red">가입신청</button>
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
            </section>
        </div>
	</main>
	<!-- //End Content -->
	
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>