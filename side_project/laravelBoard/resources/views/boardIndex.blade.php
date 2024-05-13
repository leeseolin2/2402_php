@extends('inc.layout')

{{-- 타이틀 --}}
@section('title','게시판')

{{-- 자바스크립트 파일 --}}
@section('script')
    <script src="/Js/board.js" defer></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
@endsection

{{-- 메인 --}}
@section('main')
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
    @foreach($data as $item)
    <div class="card" style="width: 18rem;">
        <img src="{{$item->img}}" class="card-img-top">
        <div class="card-body">
            <h5 class="card-title">{{$item->title}}</h5>
            <p class="card-text">{{$item->content}}</p>
            <button class="btn btn-primary my-btn-detail" data-bs-toggle="modal" data-bs-target="#modalDetail" value="{{$item->id}}">상세</button>
        </div>
    </div>
    @endforeach
</main>
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
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">닫기</button>
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
            <form action="{{route('board.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                {{-- TODO : type 설정 필요 --}}
                <input type="hidden" name="type" value="0">
                <div class="modal-header">
                    <input type="text" name="title" class="form-control" placeholder="제목을 입력하세요">
                </div>
                <div class="modal-body">
                    <textarea class="form-control" name="content" cols="30" rows="10" placeholder="내용을 입력하세요"></textarea>
                    <br>
                    <br>
                    <input type="file" accept="imge/*" name="file" id="">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">닫기</button>
                    <button type="submit" class="btn btn-primary">작성</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
