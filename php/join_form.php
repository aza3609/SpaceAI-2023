<?php include("template_header.php"); ?>

    <main class="join bg-color">
      <div class="wrap">
        <h2>회원가입</h2>
        <form id="join_form">
          <div class="form_row form_row--id-confirm">
            <h5><label>아이디</label></h5>
            <input type="email" placeholder="이메일 주소" />
            <button class="id-confirm-btn">중복확인</button>
          </div>
          <div class="form_row">
            <h5><label>비밀번호</label></h5>
            <input type="password" minlength='8' placeholder="8자리 이상"/>
          </div>
          <div class="form_row">
            <h5>
              <label>비밀번호 재확인</label
              ><span class="elert">
                <i data-feather="alert-circle"></i> 비밀번호가 일치하지
                않습니다</span
              >
            </h5>
            <input type="password" minlength='8'/>
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
            onclick="location='success--join.php'"
          >
            가입하기
          </button>
        </form>
      </div>
    </main>

    <?php include("template_footer.php"); ?>