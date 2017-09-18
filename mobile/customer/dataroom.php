<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link href="/mobile/assets/css/sub.css" rel="stylesheet">
<link href="/mobile/assets/css/customer.css" rel="stylesheet">
</head>
<body class="customer">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
    <!-- Content Start -->
    <main id="content">
        <!-- page-header -->
        <div class="page-header">
            <div class="container">
                <h2>자료실</h2>
            </div>
            <div class="btn-control">
                <a href="#" class="btn-pre">
                    <i class="icon-left-open-big">
                        <span class="sr-only">이전 페이지</span>
                    </i>
                </a>
                <a href="#" class="btn-next">
                    <i class="icon-right-open-big">
                        <span class="sr-only">다음 페이지</span>
                    </i>
                </a>
            </div>
        </div>
        
        <section class="dataroom">
            <div class="container">
                <form action="#">
                    <div class="search-form">
                        <div class="form-group">
                            <select class="form-control">
                                <option>전체</option>
                            </select>
                            <input type="text" class="form-control">
                            <button type="submit" class="btn btn-search">
                                <i class="icon-search">
                                    <span class="sr-only">검색버튼</span>
                                </i>
                            </button>
                        </div>
                    </div>
                    <p class="summary">
                        <i class="icon-search"></i>
                        찾으시는 자료의 카테고리를 선택해 주세요
                    </p>
                    <div class="table-wrap">
                        <table class="table type-write">
                            <tbody>
                                <tr>
                                    <th>PLC</th>
                                    <td>
                                        <ul>
                                            <li>
                                                <input type="radio" id="nx700">
                                                <label for="nx700">NX700</label>
                                                <div class="check"></div>
                                            </li>
                                            <li>
                                                <input type="radio" id="nx70">
                                                <label for="nx70">NX70</label>
                                                <div class="check"></div>
                                            </li>
                                            <li>
                                                <input type="radio" id="nx7">
                                                <label for="nx7">NX7</label>
                                                <div class="check"></div>
                                            </li>
                                            <li>
                                                <input type="radio" id="x8">
                                                <label for="x8">X8</label>
                                                <div class="check"></div>
                                            </li>
                                            <li>
                                                <input type="radio" id="etc1">
                                                <label for="etc1">기타</label>
                                                <div class="check"></div>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <th>터치패널</th>
                                    <td>
                                        <ul>
                                            <li>
                                                <input type="radio" id="v9">
                                                <label for="v9">V9 Plus</label>
                                                <div class="check"></div>
                                            </li>
                                            <li>
                                                <input type="radio" id="v8">
                                                <label for="v8">V8 Plus</label>
                                                <div class="check"></div>
                                            </li>
                                            <li>
                                                <input type="radio" id="v7">
                                                <label for="v7">V7/V7 Plus</label>
                                                <div class="check"></div>
                                            </li>
                                            <li>
                                                <input type="radio" id="w8">
                                                <label for="w8">W8 Plus</label>
                                                <div class="check"></div>
                                            </li>
                                            <li>
                                                <input type="radio" id="s8">
                                                <label for="s8">S8 Plus</label>
                                                <div class="check"></div>
                                            </li>
                                            <li>
                                                <input type="radio" id="etc2">
                                                <label for="etc2">기타</label>
                                                <div class="check"></div>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <th>인버터</th>
                                    <td>
                                        <ul>
                                            <li>
                                                <input type="radio" id="f7">
                                                <label for="f7">F7</label>
                                                <div class="check"></div>
                                            </li>
                                            <li>
                                                <input type="radio" id="f500">
                                                <label for="f500">F500</label>
                                                <div class="check"></div>
                                            </li>
                                            <li>
                                                <input type="radio" id="f50">
                                                <label for="f50">F50</label>
                                                <div class="check"></div>
                                            </li>
                                            <li>
                                                <input type="radio" id="msd">
                                                <label for="msd">MSD</label>
                                                <div class="check"></div>
                                            </li>
                                            <li>
                                                <input type="radio" id="etc3">
                                                <label for="etc3">기타</label>
                                                <div class="check"></div>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <th>서보드라이브<br>/모터</th>
                                    <td>
                                        <ul>
                                            <li>
                                                <input type="radio" id="mmc">
                                                <label for="mmc">MMC-EtherCAT</label>
                                                <div class="check"></div>
                                            </li>
                                            <li>
                                                <input type="radio" id="pci">
                                                <label for="pci">Half PCI</label>
                                                <div class="check"></div>
                                            </li>
                                            <li>
                                                <input type="radio" id="csdm">
                                                <label for="csdm">Sercos+CSDM</label>
                                                <div class="check"></div>
                                            </li>
                                            <li>
                                                <input type="radio" id="etc4">
                                                <label for="etc4">기타</label>
                                                <div class="check"></div>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <th>DIO</th>
                                    <td>
                                        <ul>
                                            <li>
                                                <input type="radio" id="machine">
                                                <label for="machine">머신 I/O</label>
                                                <div class="check"></div>
                                            </li>
                                            <li>
                                                <input type="radio" id="nxio">
                                                <label for="nxio">NXIO</label>
                                                <div class="check"></div>
                                            </li>
                                            <li>
                                                <input type="radio" id="etc5">
                                                <label for="etc5">기타</label>
                                                <div class="check"></div>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <article class="list">
                        <div class="article-header">
                            <nav class="dropdown">
                                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    카탈로그
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                    <li><a href="#">카탈로그1</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="article-content">
                            <ul class="board-list">
                                <li>
                                    <a href="#">
                                        <p class="subject">IO20 보드용 API</p>
                                        <ul>
                                            <li>
                                                <dl>
                                                    <dt>등록일</dt>
                                                    <dd>2017-08-05</dd>
                                                </dl>
                                            </li>
                                            <li>
                                                <dl>
                                                    <dt class="category">분류</dt>
                                                    <dd>카탈로그</dd>
                                                </dl>
                                            </li>
                                            <li>
                                                <dl>
                                                    <dt>파일</dt>
                                                    <dd><i class="icon-doc-text"></i></dd>
                                                </dl>
                                            </li>
                                        </ul>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <p class="subject">IO20 보드용 API</p>
                                        <ul>
                                            <li>
                                                <dl>
                                                    <dt>등록일</dt>
                                                    <dd>2017-08-05</dd>
                                                </dl>
                                            </li>
                                            <li>
                                                <dl>
                                                    <dt class="category">분류</dt>
                                                    <dd>카탈로그</dd>
                                                </dl>
                                            </li>
                                            <li>
                                                <dl>
                                                    <dt>파일</dt>
                                                    <dd><i class="icon-doc-text"></i></dd>
                                                </dl>
                                            </li>
                                        </ul>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <p class="subject">IO20 보드용 API</p>
                                        <ul>
                                            <li>
                                                <dl>
                                                    <dt>등록일</dt>
                                                    <dd>2017-08-05</dd>
                                                </dl>
                                            </li>
                                            <li>
                                                <dl>
                                                    <dt class="category">분류</dt>
                                                    <dd>카탈로그</dd>
                                                </dl>
                                            </li>
                                            <li>
                                                <dl>
                                                    <dt>파일</dt>
                                                    <dd><i class="icon-doc-text"></i></dd>
                                                </dl>
                                            </li>
                                        </ul>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <p class="subject">IO20 보드용 API</p>
                                        <ul>
                                            <li>
                                                <dl>
                                                    <dt>등록일</dt>
                                                    <dd>2017-08-05</dd>
                                                </dl>
                                            </li>
                                            <li>
                                                <dl>
                                                    <dt class="category">분류</dt>
                                                    <dd>카탈로그</dd>
                                                </dl>
                                            </li>
                                            <li>
                                                <dl>
                                                    <dt>파일</dt>
                                                    <dd><i class="icon-doc-text"></i></dd>
                                                </dl>
                                            </li>
                                        </ul>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <p class="subject">IO20 보드용 API</p>
                                        <ul>
                                            <li>
                                                <dl>
                                                    <dt>등록일</dt>
                                                    <dd>2017-08-05</dd>
                                                </dl>
                                            </li>
                                            <li>
                                                <dl>
                                                    <dt class="category">분류</dt>
                                                    <dd>카탈로그</dd>
                                                </dl>
                                            </li>
                                            <li>
                                                <dl>
                                                    <dt>파일</dt>
                                                    <dd><i class="icon-doc-text"></i></dd>
                                                </dl>
                                            </li>
                                        </ul>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <p class="subject">IO20 보드용 API</p>
                                        <ul>
                                            <li>
                                                <dl>
                                                    <dt>등록일</dt>
                                                    <dd>2017-08-05</dd>
                                                </dl>
                                            </li>
                                            <li>
                                                <dl>
                                                    <dt class="category">분류</dt>
                                                    <dd>카탈로그</dd>
                                                </dl>
                                            </li>
                                            <li>
                                                <dl>
                                                    <dt>파일</dt>
                                                    <dd><i class="icon-doc-text"></i></dd>
                                                </dl>
                                            </li>
                                        </ul>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <p class="subject">IO20 보드용 API</p>
                                        <ul>
                                            <li>
                                                <dl>
                                                    <dt>등록일</dt>
                                                    <dd>2017-08-05</dd>
                                                </dl>
                                            </li>
                                            <li>
                                                <dl>
                                                    <dt class="category">분류</dt>
                                                    <dd>카탈로그</dd>
                                                </dl>
                                            </li>
                                            <li>
                                                <dl>
                                                    <dt>파일</dt>
                                                    <dd><i class="icon-doc-text"></i></dd>
                                                </dl>
                                            </li>
                                        </ul>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <p class="subject">IO20 보드용 API</p>
                                        <ul>
                                            <li>
                                                <dl>
                                                    <dt>등록일</dt>
                                                    <dd>2017-08-05</dd>
                                                </dl>
                                            </li>
                                            <li>
                                                <dl>
                                                    <dt class="category">분류</dt>
                                                    <dd>카탈로그</dd>
                                                </dl>
                                            </li>
                                            <li>
                                                <dl>
                                                    <dt>파일</dt>
                                                    <dd><i class="icon-doc-text"></i></dd>
                                                </dl>
                                            </li>
                                        </ul>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </article>
                    <nav class="paging" aria-label="Page navigation">
                        <ul class="pagination">
                            <li>
                                <a href="#" aria-label="Previous">
                                    <i class="icon-angle-double-left"></i>
                                </a>
                            </li>
                            <li class="l-space">
                                <a href="#" aria-label="Previous">
                                    <i class="icon-angle-left"></i>
                                </a>
                            </li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li class="r-space">
                                <a href="#" aria-label="Next">
                                    <i class="icon-angle-right"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" aria-label="Next">
                                    <i class="icon-angle-double-right"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </form>
            </div>
        </section>
        
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
</body>
</html>