<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script> -->
    <link rel="stylesheet" href="/view/css/bootstrap/bootstrap.css">    
    <script src="/Js/bootstrap.js" defer></script>   
    <link rel="stylesheet" href="/view/css/myCommon.css">
    <link href="/view/img/cloud.png" rel="shortcut icon" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="/Js/board.js" defer></script>
    <title>자유게시판</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark ">
            <div class="container-fluid">
                <a class="navbar-brand " href="./free.html">미니보드</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        게시판
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <?php
                        foreach($this->arrBoardsNameInfo as $item) {
                            $url = $item["b_type"] == 2 ? "/food/goodPlace.php" : "/board/list?b_type=".$item["b_type"];
                            ?>
                            <li><a class="dropdown-item" href="<?php echo $url ?>"><?php echo $item["bn_name"] ?></a></li>
                            <?php
                        }
                        ?>
                    </ul>
                </li>
                </ul>

                    <a href="/user/logout" class="navbar-nav nav-link text-light" role="button">Log out</a>
                </div>
            </div>
        </nav>
    </header>
    <div class="text-center mt-5 mb-5">
        <h1 class="animate__animated animate__bounce animate__delay-2s"><?php echo $this->boardName ?></h1>
        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAAACXBIWXMAAAsTAAALEwEAmpwYAAADUklEQVR4nO2azU4UQRDHm4v4DupBBL2I32jUqxACr6Hio/i1ISai7+BFtnsYD0ZJgJ2qnTBVu8hpRSV4E/SCJKIkYwrwIxiCOzM9s7M7v6SSTXaT3v+/q6drqlupgoKCgoICq0z69VMaecwAPzVArzTykkb6ooG/b4d8Rl7a/e6J/HaqWjup8oxBOmuQShroo0EOIwXQikZ+WIbgjMoDYRh2OcijGrkSWfS+QXMGaETGUK3IZDW4pJGqyQvfmxUM2qtfUK3C9PT0YYP8yCBvWRf/J7Y00LjrNrozFW+A+gwSpSh877II3Ln5E9mI9/iyAV7NTvxOyA5S9vh6quI18pAB3sha/G8TgL6WgQZTEe9A7YoMmLXofwJ4w3omGKA+jfQ5c7H7m7Dm+As9VsS7bqNbHjqZizxoOSDPW9kdzM5WF+YjqJSoeAeDiynv83Fja7JSO5+I+DAMu1Kp8JJfCpVEDHCQR638QSDHeHzExfpRg+zaGMPxguHYBmgrLzYcivBfYzz33xyzkwk0G2/2q3zOVoruHcvWOFNevT+yAQaplHcDNNC9yAboOM2MVjEAeTlyG8tY+lNpGiBR9oLe5me/GtxpFwMc5NtNG2CkgdkmBhigx81nANDrdjFAI79sPgOQPrSNAUDvmjcAeC1OhacSJlbFCLwawQDajFvhJU3UilEjfWt6MFMYwJGWgKSpjSyQ2dfIL9JcAu/b5iGIvNS0Abrjt0Ho9EIIeax9DOBbHf0y5EY9PjNAKx37OizI5YT8G0B3VVSMXzvd0S0xYftmRk6bohpoRsXFAI1Ymp3tijFWhXdg+vNQIgcjBhhspai9iNkS/xu5k5O3ozFp6ask0UDjLSDs/wL4gUoa1210y9FzDsT7zxYXDyVugCAVVdROURqhkT+VsXZc2UT7NGCQ1ltw5jd0Nbiq0qAMNNha94Ro3fHohkoT7dOApFzW4uXOklOhayoLHH+hJ9MHI7Bvfc3/5+WpUpp1gkb+IVudtad9FKTwsHWZYs96n5Wr+KpVcbxgeOdPJjzrQDOJ1PZpMeXV+w3QfWlIxEj1ZbngIK/lKs+UvaBX+nIGeUIOKg3y2+0bp3L4ArQpnzVyY/e7Ce3RzUhn+gUFBQUFBaoZfgLEwut6CPdWlgAAAABJRU5ErkJggg==" fill="currentColor"
            class="bi bi-chat-square-heart-fill" viewBox="0 0 16 16" data-bs-toggle="modal"
            data-bs-target="#modalInsert">
            <path
                d="M2 0a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2.5a1 1 0 0 1 .8.4l1.9 2.533a1 1 0 0 0 1.6 0l1.9-2.533a1 1 0 0 1 .8-.4H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm6 3.993c1.664-1.711 5.825 1.283 0 5.132-5.825-3.85-1.664-6.843 0-5.132" />
        </svg>
    </div>
    <main>
        <?php
        foreach($this->arrBoardList as $item){
        ?>
         <div class="card">
            <img src="<?php echo $item["b_img"] ?>" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title"><?php echo $item["b_title"] ?></h5>
                <p class="card-text"><?php echo $item["b_content"] ?></p>
                <button class="btn my-btn-detail" data-bs-toggle="modal" data-bs-target="#modalDetail" value="<?php echo $item["b_id"] ?>">상세</button>
            </div>
        </div>
        <?php    
        }
        ?>
    </main>
    <footer class="fixed-bottom  text-center text-light p-3">Copyright by 이서린</footer>
    <!-- 상세 모달 -->
    <div class="modal" tabindex="-1" id="modalDetail">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="">
                    <div class="modal-header">
                        <h5 class="modal-title">개발자입니다.</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>힘들다..</p>
                        <br>
                        <img src="./img/romi.jpg" class="card-img-top" alt="cat">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn" data-bs-dismiss="modal">닫기</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal" tabindex="-1" id="modalDetail">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="">
                    <div class="modal-header">
                        <h5 class="modal-title">개발자입니다.</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>힘들다..</p>
                        <br>
                        <img src="./img/romi.jpg" class="card-img-top" alt="cat">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">닫기</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- 작성 모달 -->
    <div class="modal" tabindex="-1" id="modalInsert">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="/board/add" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="b_type" value="<?php echo $this->getBoardType(); ?>">
                    <div class="modal-header">
                        <input type="text" name="b_title" class="form-control" placeholder="제목을 입력하세요">
                    </div>
                    <div class="modal-body">
                        <textarea class="form-control" name="b_content" cols="30" rows="10" placeholder="내용을 입력하세요"></textarea>
                        <br>
                        <br>
                        <input type="file" name="img" accept="image/*" id="">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn " data-bs-dismiss="modal">닫기</button>
                        <button type="submit" class="btn">작성</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>