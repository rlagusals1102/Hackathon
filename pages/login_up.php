<?php
session_start();
if (isset($_SESSION['cust_name'])) {
    header("location: mypage.php");
}
?>



<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.84.0">
  <title>회원가입 - 텍리큘럼</title>

  <!-- Bootstrap core CSS -->
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
  <!-- JavaScript Bundle with Popper -->
  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>


  <!-- Custom styles for this template -->
  <link href="../styles/signin.css" rel="stylesheet">
</head>
<!-- DSC-digitech s?? c?? -->
<body class="text-center bg-dark">
  <nav class="navbar-expand-lg fixed-top justify-content-start">
    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
      <button class = "btn btn-success btn-lg " type="button" onClick="history.go(-1)"><img src="../imgs/door-open-fill.svg" alt=" 뒤로가기 이미지"></button>
    </div>
  </nav>
  
  <main class="form-signin">
    <img class="mb-3" src="../imgs/Frame.svg" alt="로고">
    <h1 class="text-center text-white">회원가입</h1>
    <form action="register_server.php" method="post">
      <div class="form-group mt-5 mb-3">
          <input
              class="form-control"
              type="text"
              pattern="^[a-zA-Z0-9]+$"
              required="required"
              title="영문 대소문자와 숫자만 입력 가능합니다"
              name="REGV_ID"
              placeholder="아이디">
      </div>
      <div class="form-group mb-3">
          <input
              class="form-control"
              type="email"
              pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
              required="required"
              title="이메일 형식에 맞게 입력해야 합니다"
              name="REGV_EMAIL"
              placeholder="이메일">
      </div>
      <div class="form-group mb-3">
          <input
              class="form-control"
              type="text"
              required="required"
              title="영문 대소문자와 숫자만 입력 가능합니다"
              name="REGV_NAME"
              placeholder="이름">
      </div>
      <div class="form-group mb-3">
          <input
              class="form-control pw"
              type="password"
              name="REGV_PW"
              pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[~!@#$%^&*()+|=])[A-Za-z\d~!@#$%^&*()+|=]{4,16}$"
              required="required"
              title="최소 영문 대소문자, 숫자, 특수문자가 하나씩 포함되어야 합니다"
              placeholder="비밀번호">
      </div>
      <div class="form-group mb-3">
          <input
              class="form-control pw"
              type="password"
              name="RE_REGV_PW"
              pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[~!@#$%^&*()+|=])[A-Za-z\d~!@#$%^&*()+|=]{4,16}$"
              required="required"
              title="최소 영문 대소문자, 숫자, 특수문자가 하나씩 포함되어야 합니다"
              placeholder="비밀번호 확인">
      </div>
      <div class="mt-5">
          <button class="btn btn-outline-success btn-lg">등록하기</button>
          <a class="text-white" href="./login_in.html">이미 회원이신가요?</a>
      </div>
  </form>
  </main>



</body>

</html>