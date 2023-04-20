<?php include("template_header.php"); ?>

<main class="proposal-submit bg-color">
  <div class="wrap">
    <h2>연구 제안서 제출</h2>
    <form id="proposal_form" action="">
      <div class="form_row">
        <h5><label>이름</label></h5>
        <input type="text" placeholder="" />
      </div>
      <div class="form_row">
        <h5><label>소속</label></h5>
        <input type="password" />
      </div>
      <div class="form_row">
        <h5><label>이메일</label></h5>
        <input type="email" />
      </div>
      <div class="form_row">
        <h5><label>핸드폰 번호</label></h5>
        <input type="text" />
      </div>
      <div class="form_row">
        <h5><label>연구제안서 제목</label></h5>
        <input type="text" />
      </div>
      <div class="form_row">
        <h5><label>연구제안서 제출</label></h5>
        <input class="submit-file" type="file" accept=".hwp, .doc,.docx" />
      </div>
      <button
        class="submit-btn"
        type="button"
        value="제출"
        onclick="location='success--proposal-submit.php'"
      >
        제출하기
      </button>
    </form>
  </div>
</main>

<?php include("template_footer.php"); ?>
