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
            <div class="join">
                <form action="#">
                    <article class="basic-info">
                        <div class="article-header">
                            <h3 class="content-title">기본정보</h3>
                        </div>
                        <div class="article-content">
                            <div class="table-wrap">
                                <strong>*표시는 필수입력입니다</strong>
                                <table class="table type-write">
                                    <colgroup>
                                        <col style="width: 157px;">
                                        <col style="">
                                    </colgroup>
                                    <tbody>
                                        <tr>
                                            <th><label for="u-name">이름</label></th>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" id="u-name" class="form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><label for="e-mail">이메일</label></th>
                                            <td class="e-mail">
                                                <div class="form-group">
                                                    <input type="email" id="e-mail" class="form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><label for="u-id">아이디</label></th>
                                            <td class="user-id">
                                                <div class="form-group">
                                                    <input type="text" id="u-id" class="form-control">
                                                </div>
                                                <p class="check-id">
                                                    <a href="#" class="btn btn-gray" role="button">중복확인</a> 
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><label for="u-pw">비밀번호</label></th>
                                            <td class="user-pw">
                                                <div class="form-group">
                                                    <input type="password" id="u-pw" class="form-control">
                                                </div>
                                                <p class="attention">(영문과 숫자를 조합하여 4~12자 사이)</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><label for="confirm-pw">비밀번호 확인</label></th>
                                            <td>
                                                <div class="form-group">
                                                    <input type="password" id="confirm-pw" class="form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><label for="classify">구분</label></th>
                                            <td>
                                                <div class="form-group">
                                                    <select id="classify" class="form-control">
                                                        <option>분류</option>
                                                    </select>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </article>
                    <article class="office-info">
                        <div class="article-header">
                            <h3 class="content-title">직장 및 학교정보</h3>
                        </div>
                        <div class="article-content">
                            <div class="table-wrap">
                                <table class="table type-write">
                                    <colgroup>
                                        <col style="width: 157px;">
                                        <col style="">
                                    </colgroup>
                                    <tbody>
                                        <tr>
                                            <th><label for="u-office">직장/학교명</label></th>
                                            <td class="office">
                                                <div class="form-group">
                                                    <input type="text" id="u-office" class="form-control">
                                                </div>
                                                <p class="attention">'(주)'는 입력하지 마세요.</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><label for="u-department">부서명</label></th>
                                            <td class="department">
                                                <div class="form-group">
                                                    <input type="text" id="u-department" class="form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><label for="u-rank">직급</label></th>
                                            <td class="office">
                                                <div class="form-group">
                                                    <input type="text" id="u-rank" class="form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><label for="u-contact">전화번호</label></th>
                                            <td class="common-form">
                                                <div class="form-group">
                                                    <input type="text" id="u-contact" class="form-control"> -
                                                    <label for="u-contact-2" class="sr-only">2번째 번호</label>
                                                    <input type="text" id="u-contact-2" class="form-control"> -
                                                    <label for="u-contact-3" class="sr-only">3번째 번호</label>
                                                    <input type="text" id="u-contact-3" class="form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><label for="u-fax">팩스</label></th>
                                            <td class="common-form">
                                                <div class="form-group">
                                                    <input type="text" id="u-fax" class="form-control"> -
                                                    <label for="u-fax-2" class="sr-only">2번째 번호</label>
                                                    <input type="text" id="u-fax-2" class="form-control"> -
                                                    <label for="u-fax-3" class="sr-only">3번째 번호</label>
                                                    <input type="text" id="u-fax-3" class="form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><label for="u-phone">핸드폰</label></th>
                                            <td class="common-form">
                                                <div class="form-group">
                                                    <input type="text" id="u-phone" class="form-control"> -
                                                    <label for="u-phone-2" class="sr-only">2번째 번호</label>
                                                    <input type="text" id="u-phone-2" class="form-control"> -
                                                    <label for="u-phone-3" class="sr-only">3번째 번호</label>
                                                    <input type="text" id="u-phone-3" class="form-control">
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </article>
                    <div class="btn-area">
                        <p>
                            <button type="submit" class="btn btn-red">가입신청</button>
                        </p>
                    </div>
                </form>
            </div>
        </div>
	</main>
	<!-- //End Content -->
	
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>