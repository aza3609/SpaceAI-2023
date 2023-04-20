<?php include("template_header.php"); ?>

<main class="registration bg-color">
  <div class="wrap">
    <h2>Scientist 트랙 참가 신청</h2>
    <form id="s-registration_form" action="">
      <div class="registration__applicant columns-2">
        <div class="form_row">
          <h5><label>이름</label></h5>
          <input type="text" placeholder="" required />
        </div>
        <div class="form_row">
          <h5><label>소속</label></h5>
          <input type="password" required />
        </div>
        <div class="form_row">
          <h5><label>이메일</label></h5>
          <input type="email" required />
        </div>
        <div class="form_row">
          <h5><label>핸드폰 번호</label></h5>
          <input type="text" required />
        </div>
      </div>
      <div class="form_row form_row--radio">
        <h5><label>연구제안서 제출 여부</label></h5>
        <div class="radio-wrap">
          <label class="radio-btn"
            ><input type="radio" name="fruit" value="yes" checked />
            제출함</label
          >
          <label class="radio-btn"
            ><input type="radio" name="fruit" value="no" /> 제출하지 않음</label
          >
        </div>
      </div>
      <div class="form_row form_row--checkbox">
        <h5>
          <label>전문 분야<span class="light"> (복수선택 가능)</span></label>
        </h5>
        <div class="wrap columns-3">
          <label class="check-btn"
            ><input class="checkbox" type="checkbox" />우주과학</label
          >
          <label class="check-btn"
            ><input class="checkbox" type="checkbox" />우주기술 개발</label
          >
          <label class="check-btn"
            ><input class="checkbox" type="checkbox" />빅데이터 사이언스</label
          >
          <label class="check-btn"
            ><input class="checkbox" type="checkbox" />머신러닝</label
          >
          <label class="check-btn"
            ><input class="checkbox" type="checkbox" />영상처리</label
          >
          <label class="check-btn"
            ><input class="checkbox" type="checkbox" />통계분석</label
          >
          <label class="check-btn"
            ><input class="checkbox" type="checkbox" />GPU 등 하드웨어</label
          >
          <label class="check-btn check-btn--etc"
            ><input class="checkbox" type="checkbox" />기타<input
              class="check-btn__etc"
              type="text"
              placeholder="직접 입력"
          /></label>
        </div>
      </div>
      <div class="registration__writing">
        <div class="form_row">
          <h5>
            <label>간략한 자기소개</label
            ><span class="light small">500자 이내</span>
          </h5>
          <textarea id="s-tract_introduction" type="text" required></textarea>
        </div>
        <div class="form_row">
          <h5>
            <label>프로그램 참가 목적/계기</label
            ><span class="light small">500자 이내</span>
          </h5>
          <textarea id="s-tract_purpose" type="text" required></textarea>
        </div>
        <div class="form_row">
          <h5>
            <label>관심있는 연구주제</label
            ><span class="light small">500자 이내</span>
          </h5>
          <textarea id="s-tract_interest" type="text" required></textarea>
        </div>
      </div>
      <div class="btn-row">
        <button class="gray-btn" onclick="location='s-track.php'">뒤로가기</button>
        <button
          class="submit-btn"
          type="submit"
          onclick="location='success--registration.php'"
        >
          제출하기
        </button>
      </div>
    </form>
  </div>
</main>

<?php include("template_footer.php"); ?>
