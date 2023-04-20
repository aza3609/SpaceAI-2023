<?php include("template_header.php"); ?>

<main class="find-password bg-color">
    <div class="wrap">
        <h2>비밀번호 찾기</h2>
        <p>기존에 가입하신 이메일로 임시 비밀번호를 발송해드립니다.</p>
        <form id="find-password__form" action="">
          <input type="email" placeholder="이메일 주소 입력" required />
          <input
            class="submit-btn"
            type="submit"
            value="메일로 인증번호 받기"
            onclick="location='find-password_code.php'"
          />
        </form>
    </div>
</main>

<?php include("template_footer.php"); ?>