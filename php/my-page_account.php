<?php include("template_header.php"); ?>

<main class="my-page">
  <div class="wrap wrap--my-page">
    <div class="my-page__nav">
      <h3>마이페이지</h3>
      <h4 class="light">내 계정</h4>
      <ul> 
        <li><a class="bold" href="my-page_account.php">계정 정보</a></li>
        <li><a href="my-page_password.php">비밀번호 변경</a></li>
      </ul>
    </div>
    <div class="my-page__content">
        <h2>계정 정보</h2>
        <form>
          <div class="form_row form_row--id-confirm">
            <h5><label>아이디</label></h5>
            <input type="email" placeholder="이메일 주소" disabled />
          </div>
          <div class="form_row">
            <h5><label>이름</label></h5>
            <input type="text" />
          </div>
          <div class="form_row">
            <h5><label>주소</label></h5>
            <input type="text" />
          </div>
          <div class="form_row">
            <h5><label>휴대폰 번호</label></h5>
            <input id="join_phone" type="tel" />
          </div>
          <div class="form_row">
            <h5><label>소속</label></h5>
            <input type="text" />
          </div>
          <div class="form_row form_row--checkbox">
            <h5>
              <label
                >직업 분야<span class="light"> (복수선택 가능)</span></label
              >
            </h5>
            <div class="wrap columns-2">
              <label class="check-btn"
                ><input class="checkbox" type="checkbox" />과학연구</label
              >
              <label class="check-btn"
                ><input class="checkbox" type="checkbox" />IT 소프트웨어</label
              >
              <label class="check-btn"
                ><input class="checkbox" type="checkbox" />IT 하드웨어</label
              >
              <label class="check-btn"
                ><input class="checkbox" type="checkbox" />교육</label
              >
              <label class="check-btn"
                ><input class="checkbox" type="checkbox" />대학원생</label
              >
              <label class="check-btn"
                ><input class="checkbox" type="checkbox" />중고등학생</label
              >
              <label class="check-btn check-btn--etc"
                ><input class="checkbox" type="checkbox" />기타<input
                  class="check-btn__etc"
                  type="text"
                  placeholder="직접 입력"
              /></label
              >
            </div>
          </div>
          <button
            class="submit-btn"
            type="button"
          >저장하기
          </button>
        </form>
    </div>
  </div>
</main>

<?php include("template_footer.php"); ?>
