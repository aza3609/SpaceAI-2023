<?php include("template_header.php"); ?>

<main class="find-password bg-color">
   <div class="wrap">
        <h2>메일 인증</h2>
        <p>user@example.com으로 임시 비밀번호를 발송했습니다</p>
        <form id="find-password--code" action="">
          <input type="text" placeholder="임시 비밀번호 입력" />
          <input
            class="submit-btn"
            type="button"
            value="비밀번호 재설정하기"
            onclick="location='find-password_change.php'"
          />
        </form>
    </div>
</main>

<?php include("template_footer.php"); ?>