<?php include("template_header.php"); ?>

<main class="join bg-color">
      <div class="wrap">
        <h2>회원가입</h2>
        <form id="join_privacy" action="">
          <h5>개인정보 수집 및 이용 안내</h5>
          <div class="join__privacy-text">
            <p>
              SpaceAI 개인정보 처리방침 SpaceAI는 정보통신망 이용촉진 및
              정보보호 등에 관한 법률, 개인정보보호법, 통신비밀보호법,
              전기통신사업법 등 정보통신서비스제공자가 준수하여야 할 관련
              법령상의 개인정보보호 규정을 준수하며, 관련 법령에 의거한
              개인정보취급방침을 정하여 이용자의 권익 보호에 최선을 다한다.
              <br />
              <br />
              SpaceAI는 정보통신망 이용촉진 및 정보보호 등에 관한 법률,
              개인정보보호법, 통신비밀보호법, 전기통신사업법 등
              정보통신서비스제공자가 준수하여야 할 관련 법령상의 개인정보보호
              규정을 준수하며, 관련 법령에 의거한 개인정보취급방침을 정하여
              이용자의 권익 보호에 최선을 다한다.
              <br />
              <br />
              SpaceAI는 정보통신망 이용촉진 및 정보보호 등에 관한 법률,
              개인정보보호법, 통신비밀보호법, 전기통신사업법 등
              정보통신서비스제공자가 준수하여야 할 관련 법령상의 개인정보보호
              규정을 준수하며, 관련 법령에 의거한 개인정보취급방침을 정하여
              이용자의 권익 보호에 최선을 다한다.
            </p>
          </div>

          <div class="join_row--checkbox">
            <label
              ><input class="checkbox" type="checkbox" required />개인정보 수집
              및 이용에 동의합니다</label
            >
          </div>
          <button
            class="submit-btn"
            type="submit"
            onclick="location='join_form.php'"
          >
            확인
          </button>
        </form>
      </div>
</main>

<?php include("template_footer.php"); ?>