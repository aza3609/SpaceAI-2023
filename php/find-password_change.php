<?php include("template_header.php"); ?>

    <main class="find-password bg-color">
      <div class="wrap">
        <h2>비밀번호 재설정하기</h2>
        <p>새로운 비밀번호를 입력해주세요</p>
        <form id="find-password--change" action="">
          <input type="password" placeholder="새 비밀번호" required />
          <input type="password" placeholder="새 비밀번호 재확인" required />
          <button
            class="submit-btn"
            type="button"
            onclick="location='success--find-password.php'"
          >
            재설정하기
          </button>
        </form>
      </div>
    </main>

    <?php include("template_footer.php"); ?>