<div id="login_dialog" class="modal animated fade" tabindex="-1" role="dialog" aria-labelledby="modalLabelLarge" aria-hidden="true">

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.12&appId=548015295569874&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <h6 class="card-header dtitle p-2">Sign in / Sign up
        <i class="fa fa-times env_edit pull-right text-secondary" aria-hidden="true" data-dismiss="modal" aria-label="Close"></i>
      </h6>

      <div class="card-body p-3">

        {{-- Enter mail part --}}
        <div id="mail_block">
          <div id="email_alert" class="alert alert-danger" style="display: none;">
            Invalid <strong>pin code</strong>! Please try again and/or stop hacking!
          </div>

          <p class="card-text text-justify">Type your email address below and push the <b class="env_color">next</b> button.</p>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
            </div>
            <input type="email" id="request_pin_email" name="email" class="form-control btn-sm" placeholder="Enter email address" aria-label="Username" aria-describedby="basic-addon1">
          </div>

          <div class="input-group mb-3">
            <button id="email_next_submit" class="btn btn-sm env_button env_right">Next</button>
            <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
            <input type="hidden" name="captcha_token" id="login_form_token" />
          </div>

          <div class="text-center">
            <p>-- OR --</p>
            <p><div class="fb-login-button" data-max-rows="1" data-size="medium" data-button-type="login_with" data-show-faces="false" data-auto-logout-link="false" data-use-continue-as="false" data-scope="public_profile,email" onlogin="checkFBLoginState();"></div></p>
          </div>

          <div class="row">
            <div class="col-md-12">
              <a href="https://t.me/envienta" target="_blank">
                <div class="card border border-dark mb-5 _bpulse">
                  <div class="card-body">
                    <h6 class="text-center mb-0">
                      Hi everyone. In order to further develop our platform, we need your feedback and help. Also if you have any questions, don't hesitate to ask. We are waiting for you in our Telegram channel. Click here: <a href="https://t.me/envienta" target="_blank"></a> <i class="fab fa-telegram-plane _blue"></i>
                    </h6>
                  </div>
                </div>
              </a>
            </div>
          </div>

        </div>

        {{-- Enter Pin part --}}
        <div id="pin_block" style="display: none;">
          <p class="card-text text-justify">We have sent a <b class="env_color">pin code</b> to your e-mail address, sign in with it.

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1"><i class="fa fa-key" aria-hidden="true"></i></span>
            </div>
            <input id="login_pin" type="text" name="pin" maxlength="6" placeholder="Enter pin code" class="form-control btn-sm">
          </div>

          <div class="input-group mb-3">
            <button id="request_pin_submit" class="btn btn-sm env_button env_right" style="display: none;">Request pin code</button>
            <button id="login_submit" class="btn btn-sm env_button ml-2">Sign in</button>
            <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
            <input type="hidden" name="captcha_token" id="login_form_token" />
          </div>
        </div>

      </div>

    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script type="text/javascript">
  $('#email_next_submit').click(function() {
    $.get("/auth/requestPin", {email: $('#request_pin_email').val()}).done(function() {
      $('#mail_block').hide();
      $('#pin_block').show();
    });
  });
  $('#request_pin_submit').click(function() {
    $.get("/auth/requestPin", {email: $('#request_pin_email').val()}).done(function() {
      alert("New pincode generated, and sent to your e-mail address!");
    });
  });
  $('#login_submit').click(function() {
    $.get("/auth/login", {email: $('#request_pin_email').val(), pin: $('#login_pin').val()}).done(function(data) {
      $('#login_pin').val('');
      if(data == 'success') {
        location.replace('/profile');
      } else {
        //$('#pin_block').hide();
        //$('#mail_block').show();
        //$('#email_alert').show();
        alert("Wrong pin code! New pincode generated, and sent to your e-mail address!");
      }
    });
  });
  function checkFBLoginState() {
    FB.getLoginStatus(function(response) {
      $.get("/auth/fb_login", {token: response.authResponse.accessToken}).done(function(data) {
        if(data == 'success') {
          location.reload();
        } else {
          $('#pin_block').hide();
          $('#mail_block').show();
          $('#email_alert').show();
        }
      });
    });
  }
</script>
