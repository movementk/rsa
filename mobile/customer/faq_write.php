<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link href="/mobile/assets/css/sub.css" rel="stylesheet">
<link href="/mobile/assets/css/customer.css" rel="stylesheet">
</head>
<body class="customer">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
    <!-- Content Start -->
    <main id="content" class="board-space">
        <!-- page-header -->
        <div class="page-header">
            <div class="container">
                <h2>FAQ</h2>
            </div>
            <div class="btn-control">
                <a href="/mobile/customer/" class="btn-pre">
                    <i class="icon-left-open-big">
                        <span class="sr-only">이전 페이지</span>
                    </i>
                </a>
                <a href="/mobile/customer/" class="btn-next">
                    <i class="icon-right-open-big">
                        <span class="sr-only">다음 페이지</span>
                    </i>
                </a>
            </div>
        </div>
        
        <section class="faq-write">
            <div class="container">
                <div class="section-content">
                    <article class="write">
                        <div class="article-content">
                            <div class="table-wrap board-write">
                                <form action="#">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <th><label for="u-name">작성자</label></th>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" id="u-name" class="form-control">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th><label for="u-pw">비밀번호</label></th>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="password" id="u-pw" class="form-control">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th><label for="subject">제목</label></th>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" id="subject" class="form-control">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="u-content"><label for="u-content">내용</label></th>
                                                <td>
                                                    <div class="form-group">
                                                        <textarea id="u-content" class="form-control"></textarea>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>첨부파일</th>
                                                <td class="attach">
                                                    <div class="form-group">
                                                        <input type="file" id="attach" class="form-control">
                                                        <label for="attach">찾아보기</label>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="btn-area">
                                        <p>
                                            <button type="submit" class="btn btn-sm btn-red">확인</button>
                                            <a href="#" class="btn btn-sm btn-gray" role="button">취소</a>
                                        </p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </section>
        
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
</body>
</html>