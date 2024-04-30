<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/view/css/myCommon.css">
    <link href="/view/img/cloud.png" rel="shortcut icon" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
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
                            <ul class="dropdown-menu ">
                                <li><a class="dropdown-item" href="./free.html">자유게시판</a></li>
                                <li><a class="dropdown-item" href="./question.html">질문게시판</a></li>
                            </ul>
                        </li>
                    </ul>
                    <a href="./login.html" class="navbar-nav nav-link text-light" role="button">Log out</a>
                </div>
            </div>
        </nav>
    </header>
    <div class="text-center mt-5 mb-5">
        <h1 class="animate__animated animate__bounce animate__delay-2s">자유게시판</h1>
        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFAAAABQCAYAAACOEfKtAAAACXBIWXMAAAsTAAALEwEAmpwYAAAE60lEQVR4nO2czYscVRDAO6JC9G9Q1IMQ/Ba9iUY8iSCo8ZOgIOrV4yoYspLEiBcVTx5C7iuSzKsOmPWwJjFd1eN0VUfXjz9hV93NOVmxpXpi2EWne2Z6uuv1bBcUDLvTUO837/V7Va+qgqCTTjrpZHpxg8EtLrr0MGDyCqAsAvFJh7LkSL4FFFTVz/q3/H/Eh/W7py+mD+mzwW6TpdXVm12cPAXERwElciRbQJJNo/qsI7kIxEdCkicHg8FNwbxKL5Z7HPHHQLw+LbByoLzpiL90mD4WzIMczrIbepG85JClLmijlRmID6gNQdsky7I9IcpBQP6teXD/0V9dzK+pTUEbpIfJ/UD8vQfgdi5v5PNnokv3BT5vDoD8SZVNoX6IclXfw95tNm4wuF13VGtAE4D8Iez/eFfggwAmzwLyZWsoE0Mk3gxJnrGFF/MbPi/ZMfQvQHnbBF6IsuCQ//YAQrWZqGNAWWwUnkP5wHrgMHPl9xuBB8Svz8PMg/+ZiS7it+rfMPS94cGAoQ6IJFu1bSx6VHHEG9aDhLoV+XKP0jtnCk8Pnm0650FliNJXx2BmANXDMB8UNasO5aPZwOun96oLtOsAkmypX18JnkYwgOQ768GA2Szk85WiOHlIyoOBgKH2iF+dCp4GIj2J52Wms5Dkl6mCshpJtjYePFGHyQsTA7QJw4unyslk8Pr8qL3R4pXq1esks+8La4OBeE0vha7pujlAks8mCM3LH9YGhygL237Q96zt0R9xrKuA4aW3tbGShSTv/GuTfra2J1eU/aUA84wBa0PJW4AflgP0JGgQ+giQ+EIhvLNpeqsvfm/oIUBlsxRFe0e//zRLygNDwVOAQ+UHRgJUv8/eQPEaoHpoRe+/RWsDwXOAgHxoNEDik+YGkt8AHfKJ0e9A4q+tDQTvAcpXBUuYz9ZrAK+ph6FAShWTfdcBYrJvvGdkoW63zyF/Y3gG5ANBzRLG8mKtY0CJ5hpgr+44ZjHA2pfwugYG6lrCmp5huoS7TUQqbiLdMSardIzpDtJS7SDduXJSzZXT8ql6NxFp/UG6MFshr1vrwllZwfK9UhjOyiHmtWf2v3To4QzUVI+gTLRwz9pQ8BTgWLnUWvVobij5CdBF/EQpQL26cyS/Wxsb+netubaysnJjKcDhMpbPPTB4XQMDebWnBz+oQ/40GFdOx8kj1gaDZ6pHvLEBDmeh1tvaGw4eqCMZBN7F1ahFGstz0yZYrpobTy1NsFTRSm/rAYDPvm+ZaIK1I17ZtbMP5VzlVgF5tw1P/GNoUpGvbI+KVxIgOW4+IGpa+WgwK7nmnXgRZIAG1BHHMy31UjnV/+k2QPlzF8DbPIVyR1CHaCloy0v8s2J4suWQn64F3nWIKAfnteAaKH0zaEKG96/2g64r+tMMROR352EmmjSd2NE/gVr9TrRre7JzY+HN1s084o3aN4xJjjiuTedElP7M+yLMpK8CyXGf3b68+RjKMe+aj22XM3F6N5AsewjvnPr1QRsky7I9eZoIys/W4DSm6TB9uTUNGLeLBiK1WFnrbRufcSSDENPnW9kCtKQJ7Vp90HhjrprQFjTx2a+Fe9oqtMqmM3yWL+hBOIyTx8e+t50nWYqivWEsD+a5zciHNIFx2HRblvOc7WHe9nLenBv5hH5Hv6vPlCb6dNJJJ50EhfIPozZcZrV2V2oAAAAASUVORK5CYII=" fill="currentColor"
            class="bi bi-chat-square-heart-fill" viewBox="0 0 16 16" data-bs-toggle="modal"
            data-bs-target="#modalInsert">
            <path
                d="M2 0a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2.5a1 1 0 0 1 .8.4l1.9 2.533a1 1 0 0 0 1.6 0l1.9-2.533a1 1 0 0 1 .8-.4H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm6 3.993c1.664-1.711 5.825 1.283 0 5.132-5.825-3.85-1.664-6.843 0-5.132" />
        </svg>
    </div>
    <main>
        <div class="card">
            <img src="./img/romi1.jpg" class="card-img-top" alt="cat">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                <button class="btn" data-bs-toggle="modal" data-bs-target="#modalDetail">상세</button>
            </div>
        </div>
        <div class="card">
            <img src="./img/romi2.jpg" class="card-img-top" alt="cat">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                <button class="btn" data-bs-toggle="modal" data-bs-target="#modalDetail">상세</button>
            </div>
        </div>
        <div class="card">
            <img src="./img/romi3.jpg" class="card-img-top" alt="cat">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                <button class="btn" data-bs-toggle="modal" data-bs-target="#modalDetail">상세</button>
            </div>
        </div>
        <div class="card">
            <img src="./img/romi.jpg" class="card-img-top" alt="cat">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                <button class="btn" data-bs-toggle="modal" data-bs-target="#modalDetail">상세</button>
            </div>
        </div>
        <div class="card">
            <img src="./img/romi.jpg" class="card-img-top" alt="cat">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                <button class="btn" data-bs-toggle="modal" data-bs-target="#modalDetail">상세</button>
            </div>
        </div>
    </main>
    <footer class="fixed-bottom  text-center text-light p-3">Copyright</footer>
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
                <form action="">
                    <div class="modal-header">
                        <input type="text" class="form-control" placeholder="제목을 입력하세요">
                    </div>
                    <div class="modal-body">
                        <textarea class="form-control" cols="30" rows="10" placeholder="내용을 입력하세요"></textarea>
                        <br>
                        <br>
                        <input type="file" accept="imge/*" name="" id="">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">닫기</button>
                        <button type="button" class="btn">작성</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>