<?php include("template_header.php"); ?>

<main class="my-page">
  <div class="wrap wrap--my-page">
    <div class="my-page__nav">
      <h3>마이페이지</h3>
      <h4 class="light">내 계정</h4>
      <ul> 
        <li><a href="my-page_account.php">계정 정보</a></li>
        <li><a class="bold" href="my-page_password.php">비밀번호 변경</a></li>
      </ul>
    </div>
    <div class="my-page__content">
        <h2>비밀번호 변경</h2>
        <form>
          <div class="form_row">
            <h5><label>현재 비밀번호</label></h5>
            <input type="password" minlength='8'/>
          </div>
          <div class="form_row">
            <h5><label>새 비밀번호</label></h5>
            <input type="password" minlength='8' placeholder="8자리 이상"/>
          </div>
          <div class="form_row">
            <h5><label>새 비밀번호 확인</label></h5>
            <input type="password" minlength='8'/>
          </div>

          <button
            class="submit-btn"
            type="button"
          >변경하기
          </button>
        </form>
    </div>
  </div>
</main>

<?php include("template_footer.php"); ?>
