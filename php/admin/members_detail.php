<?php include("template_header--admin.php"); ?>

    <main class="admin-detail bg-color">
      <div class="wrap">
        <h2>회원 정보</h2>
        <form id="join_form">
          <div class="form_row">
            <h5><label>아이디</label></h5>
            <input type="email" placeholder="jiyun@wyslab.com" disabled />
          </div>
          <div class="form_row">
            <h5><label>이름</label></h5>
            <input type="text" placeholder="백지윤" disabled />
          </div>
          <div class="form_row">
            <h5><label>주소</label></h5>
            <input
              type="text"
              placeholder="대전 유성구 유성대로 1184번길 11-27 502호"
              disabled
            />
          </div>
          <div class="form_row">
            <h5><label>휴대폰 번호</label></h5>
            <input type="tel" placeholder="010-3369-3609" disabled />
          </div>
          <div class="form_row">
            <h5><label>소속</label></h5>
            <input type="text" placeholder="(주)위즈랩" disabled />
          </div>
          <div class="form_row form_row--jobs">
            <h5>
              <label
                >직업 분야<span class="light"> (복수선택 가능)</span></label
              >
            </h5>
            <div class="checkbox_wrap--admin">
              <ul
                ><li>과학연구</li><li>IT 소프트웨어</li>
            </ul>
          </div>
          <button class="gray-btn" type="button" onclick="location='members.php'">
            목록으로
          </button>
        </form>
      </div>
    </main>
    <script>
      feather.replace();
    </script>
  </body>
</html>
