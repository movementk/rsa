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
        
        <!-- page content -->
        <section class="join">
            <div class="container">
                <div class="section-header">
                    <h3 class="section-title">기본정보</h3>
                </div>
                <form action="#">
                    <div class="section-content">
                        <div class="table-wrap board-write">
                            <p class="essential">표시는 필수입력입니다</p>
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th class="essential"><label for="u-name">이름</label></th>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" id="u-name" class="form-control">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="essential"><label for="u-mail">이메일</label></th>
                                        <td>
                                            <div class="form-group">
                                                <input type="email" id="u-mail" class="form-control">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="essential top"><label for="u-id">아이디</label></th>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" id="u-id" class="form-control">
                                                <div class="btn-overlap">
                                                    <a href="#" class="btn-primary" role="button">중복확인</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="essential top"><label for="u-pw">비밀번호</label></th>
                                        <td>
                                            <div class="form-group">
                                                <input type="password" id="u-pw" class="form-control">
                                                <p class="note">
                                                    영문과 숫자를 조합하여 4~12자 사이
                                                </p>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="essential"><label for="pw-confirm">비밀번호 확인</label></th>
                                        <td>
                                            <div class="form-group">
                                                <input type="password" id="pw-confirm" class="form-control">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="essential">구분</th>
                                        <td>
                                            <div class="form-group">
                                                <select class="form-control">
                                                    <option>분류</option>
                                                </select>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="section-header">
                        <h3 class="section-title">직장 및 학교정보</h3>
                    </div>
                    <div class="section-content">
                        <div class="table-wrap board-write">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th class="top"><label for="u-affiliation">직장/학교명</label></th>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" id="u-affiliation" class="form-control">
                                                <span>‘(주)’는 입력하지 마세요</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><label for="u-department">부서명</label></th>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" id="u-department" class="form-control">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><label for="u-position">직급</label></th>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" id="u-position" class="form-control">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><label for="u-tel">전화번호</label></th>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" id="u-tel" class="form-control">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><label for="u-phone">핸드폰</label></th>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" id="u-phone" class="form-control">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><label for="u-fax">팩스</label></th>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" id="u-fax" class="form-control">
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                    <div class="btn-area">
                        <p>
                            <button type="submit" class="btn btn-sm btn-red">가입완료</button>
                            <a href="#" class="btn btn-sm btn-gray" role="button">취소</a>
                        </p>
                    </div>
                </form>
            </div>
        </section>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
</body>
</html>