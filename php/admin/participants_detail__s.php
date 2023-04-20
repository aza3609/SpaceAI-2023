<?php include("template_header--admin.php"); ?>

    <main class="admin-detail admin-detail--720 bg-color">
      <div class="wrap">
        <h2>Scientist 트랙 참가 신청서</h2>
        <form id="s-registration_form" action="">
          <div class="registration_applicant columns-2">
            <div class="form_row">
              <h5><label>이름</label></h5>
              <input id="join_id" type="text" placeholder="백지윤" disabled />
            </div>
            <div class="form_row">
              <h5><label>소속</label></h5>
              <input
                id="join_password"
                type="password"
                placeholder="위즈랩"
                disabled
              />
            </div>
            <div class="form_row">
              <h5><label>이메일</label></h5>
              <input
                id="join_password-confirm"
                type="email"
                placeholder="jiyun@wyslab.com"
                disabled
              />
            </div>
            <div class="form_row">
              <h5><label>핸드폰 번호</label></h5>
              <input
                id="join_name"
                type="text"
                placeholder="010-3369-3609"
                disabled
              />
            </div>
          </div>
          <div class="form_row form_row--radio">
              <h5><label>연구제안서 제출 여부</label></h5>
              <div class="checkbox_wrap--admin">
                <label class="bold">제출함</label>
              </div>
            </div>
          <div class="form_row form_row--special">
            <h5>
              <label
                >전문 분야<span class="light"> (복수선택 가능)</span></label
              >
            </h5>
            <div class="checkbox_wrap--admin">
              <ul class="bold">
                <li>우주과학</li>
                <li>영상처리</li>
                <li>기타 전문분야</li>
              </ul>
            </div>
          </div>
          <div class="registration_writing">
            <div class="form_row">
              <h5>
                <label>간략한 자기소개</label
                ><span class="light small">500자 이내</span>
              </h5>
              <textarea
                type="text"
                disabled
                placeholder="간략한 자기소개"
              ></textarea>
            </div>
            <div class="form_row">
              <h5>
                <label>프로그램 참가 목적/계기</label
                ><span class="light small">500자 이내</span>
              </h5>
              <textarea
                type="text"
                placeholder="프로그램 참가 목적/계기"
                disabled
              ></textarea>
            </div>
            <div class="form_row">
              <h5>
                <label>관심있는 연구주제</label
                ><span class="light small">500자 이내</span>
              </h5>
              <textarea
                type="text"
                placeholder="관심있는 연구주제"
                disabled
              ></textarea>
            </div>
            <button
              class="gray-btn"
              type="button"
              onclick="location='s-participants.php'"
            >
              목록으로
            </button>
          </div>
        </form>
      </div>
    </main>

    <script>
      feather.replace();
    </script>
  </body>
</html>
