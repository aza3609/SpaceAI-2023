<?php include("template_header--admin.php"); ?>

    <main class="login g-color">
      <div class="login__wrap">
        <h2>관리자 로그인</h2>
        <form id="login_form-adim" action="">
          <input class="login_id" type="id" placeholder="관리자 아이디" />
          <input
            class="login_password"
            type="password"
            placeholder="관리자 비밀번호"
          />
          <button
            class="submit-btn"
            type="button"
            onclick="location='index.php'"
          >
            로그인
          </button>
        </form>
      </div>
    </main>
    <script>
      feather.replace();
    </script>
  </body>
</html>
