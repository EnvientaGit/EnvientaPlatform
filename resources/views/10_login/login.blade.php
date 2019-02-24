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

      <div class="modal-header bg-light p-2">
        <h5 class="modal-title">@lang('login.SIGNIN')</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <i class="fa fa-times fa-xs"></i>
        </button>
      </div>

      <div class="card-body p-3">

        {{-- Enter mail part --}}
        <div id="mail_block">
          <div id="email_alert" class="alert alert-danger" style="display: none;">
            @lang('login.INVALID_PIN')
          </div>

          <p class="card-text text-justify">
          @lang('login.HELP')
          </p>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
            </div>
            <input type="email" id="request_pin_email" name="email" class="form-control btn-sm" placeholder="email" aria-label="Username" aria-describedby="basic-addon1">
          </div>

          <div class="input-group mb-3">
            <button id="email_next_submit" class="btn btn-sm btn-primary env_right">
            	@lang('login.NEXT')
            </button>
            <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
            <input type="hidden" name="captcha_token" id="login_form_token" />
          </div>

          <div class="text-center">
            <p>-- @lang('login.OR') --</p>
            <p><div class="fb-login-button" data-max-rows="1" data-size="medium" data-button-type="login_with" data-show-faces="false" data-auto-logout-link="false" data-use-continue-as="false" data-scope="public_profile,email" onlogin="checkFBLoginState();"></div></p>
          </div>

          <div class="row">
            <div class="col-md-12">
              <a href="https://t.me/envienta" target="_blank">
                <div class="card border border-dark mb-5 _bpulse">
                  <div class="card-body">
                    <h6 class="text-center mb-0">
                      @lang('campaign.TELEGRAM'): <a href="https://t.me/envienta" target="_blank"></a> <i class="fab fa-telegram-plane _blue"></i>
                    </h6>
                  </div>
                </div>
              </a>
            </div>
          </div>

        </div>

        {{-- Enter Pin part --}}
        <div id="pin_block" style="display: none;">
          <div class="card-text text-justify">
          	<p id="sentPinMsg" style="display:block">@lang('login.SENTPIN')</p>
          	<p id="wrongPinMsg" class="alert alert-danger" style="display:none">@lang('login.WRONGPIN')</p>
          </div>	

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1"><i class="fa fa-key" aria-hidden="true"></i></span>
            </div>
            <input id="login_pin" type="text" name="pin" maxlength="6" placeholder="pin code" class="form-control btn-sm">
          </div>

          <div class="input-group mb-3">
            <button id="request_pin_submit" class="btn btn-sm env_button env_right" style="display: none;">
            	@lang('login.PINBTN')
            </button>
            <button id="login_submit" class="btn btn-sm btn-primary ml-2">
            	@lang('login.SIGNBTN')
            </button>
            <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
            <input type="hidden" name="captcha_token" id="login_form_token" />
          </div>
        </div>
        
        <div id="psw_block" style="display: none">
          <div class="card-text text-justify">
          	<p id="wrongPswMsg" class="alert alert-danger" style="display:none">
          		@lang('login.WRONGPSW')&nbsp;(<var id="pswProbe"></var>)
          	</p>
          </div>	

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1"><i class="fa fa-key" aria-hidden="true"></i></span>
            </div>
            <input id="login_psw" type="password" name="psw" maxlength="6" 
            	placeholder="@lang('login.PASSWORD')" class="form-control btn-sm">
          </div>
          <div class="input-group mb-3">
            <button id="psw_submit" class="btn btn-sm btn-primary ml-2">
            	@lang('login.SIGNPSW')
            </button>
            &nbsp;
            <button id="pswForget" class="btn btn-sm ml-2">
            	@lang('login.FORGETPSW')
            </button>
            <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
            <input type="hidden" name="captcha_token" id="login_form_token" />
          </div>
        </div>

      </div>

    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script type="text/javascript">
  var wrongPswLimit = 3;
  var wrongPswCount = 0;
  $('#email_next_submit').click(function() {
	   $.get("/auth/requestPin",
		   	 {email: $('#request_pin_email').val(), mode: '?'}
	   	  ).done(function(data) {
			if (data == 'psw') {
		      $('#mail_block').hide();
		      $('#psw_block').show();
		   } else {
		      $('#mail_block').hide();
		   	$('#sentPinMsg').show();
		      $('#pin_block').show();
		   }   
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
        $('#mail_block').hide();
	     $('#wrongPinMsg').show();
		  $('#pin_block').show();
      }
    });
  });
  $('#psw_submit').click(function() {
    $.get("/auth/login", 
    			{email: $('#request_pin_email').val(), psw: $('#login_psw').val()}
    		).done(function(data) {
      $('#login_psw').val('');
      if(data == 'success') {
        location.replace('/profile');
      } else {
      	wrongPswCount++;
      	if (wrongPswCount < wrongPswLimit) {
		      $('#mail_block').hide();
		      $('#pswProbe').html((wrongPswLimit - wrongPswCount));
			   $('#wrongPswMsg').show();
				$('#psw_block').show();
      	} else {
		      $('#psw_block').hide();
		      $('#wrongPswMsg').hide();
		      $('#wrongPinMsg').hide();
		      wrongPswCount = 0;
		      $('#mail_block').show();
      	}
      }
    });
  });
  $('#pswForget').click(function() {
	   $.get("/auth/requestPin",
		   	 {email: $('#request_pin_email').val(), mode: 'pin'}
	   	  ).done(function(data) {
		      $('#mail_block').hide();
		      $('#psw_block').hide();
		   	$('#sentPinMsg').show();
		      $('#pin_block').show();
	    });
  	
  	
  	
        $('#mail_block').hide();
        $('#psw_block').hide();
	     $('#wrongPinMsg').hide();
		  $('#pin_block').show();
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
