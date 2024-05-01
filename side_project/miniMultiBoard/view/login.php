<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/view/css/myCommon.css">
    <link href="/view/img/cloud.png" rel="shortcut icon" type="image/x-icon">
    <title>로그인</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark ">
            <div class="container-fluid">
                <a class="navbar-brand" href="./free.html">미니보드</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
    </header>
    <div>
        <main class="d-flex justify-content-center align-items-center h-75">
            <form action="/user/login" class="loginForm" method="post">
            <?php
                foreach ($this->arrErrorMsg as $val) {
                    echo '<div class="form-text text-danger">'.$val.'</div>';
                }
            ?>
                <label for="u_email" class="form-label">이메일</label>
                <input type="text" class="form-control mb-3" id="u_email" name="u_email" value="admin@admin.com">
                <label for="u_pw" class="form-label mb-3">비밀번호</label>
                <input type="text" class="form-control mb-3" id="u_pw" name="u_pw" value="qwer1234!">
                <button type="submit" class="btn mb-3">로그인</button>
            </form>
        </main>
    </div>
    <footer class="fixed-bottom  text-center text-light p-3">Copyright</footer>
</body>

</html>