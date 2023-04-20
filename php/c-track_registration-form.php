    <?php include("template_header.php"); ?>

    <main class="registration bg-color">
      <div class="wrap">
        <h2>Citizen Scientist 트랙 참가 신청</h2>
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
          <div class="form_row form_row--checkbox">
            <h5>
              <label
                >전문 분야<span class="light"> (복수선택 가능)</span></label
              >
            </h5>
            <div class="wrap columns-3">
              <label class="check-btn"
                ><input class="checkbox" type="checkbox" />우주과학</label
              >
              <label class="check-btn"
                ><input class="checkbox" type="checkbox" />우주기술 개발</label
              >
              <label class="check-btn"
                ><input class="checkbox" type="checkbox" />빅데이터
                사이언스</label
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
                ><input class="checkbox" type="checkbox" />GPU 등
                하드웨어</label
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
              <textarea
                id="s-tract_introduction"
                type="text"
                required
              ></textarea>
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
                <label>바라는 점  <span class="light"> (선택 사항) </span></label
                ><span class="light small">500자 이내</span>
              </h5>
              <textarea type="text"></textarea>
            </div>
          </div>
          <div class="btn-row">
            <button class="gray-btn" onclick="location='index.php'">
              취소
            </button>
            <button
              class="submit-btn"
              type="submit"
              onclick="location='success--registration.php'"
            >
              제출
            </button>
          </div>
        </form>
      </div>
    </main>

    <?php include("template_footer.php"); ?>