<?php include("template_header.php"); ?>

<main class="login">
  <div class="login__wrap">
    <h2>로그인</h2>
    <form id="login_form" action="">
      <input class="login_id" type="email" placeholder="이메일 주소" />
      <input class="login_password" type="password" placeholder="비밀번호" />
      <button class="submit-btn" type="submit">로그인</button>
    </form>
    <span
      ><a href="find-password.php">비밀번호 찾기</a>
      <span class="light">|</span>
      <a href="join.php">회원가입</a></span
    >
  </div>
</main>

<?php include("template_footer.php"); ?>
