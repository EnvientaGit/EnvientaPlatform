<div id="login_dialog" class="modal animated fade" tabindex="-1" role="dialog" aria-labelledby="modalLabelLarge" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      
      <h6 class="card-header dtitle p-2">Log In - Simply with an email!
        <i class="fa fa-times env_edit pull-right text-secondary" aria-hidden="true" data-dismiss="modal" aria-label="Close"></i>
      </h6>

      <div class="card-body p-3">
        
        {{-- Enter mail part --}}
        <div id="mail_block">
          <div id="email_alert" class="alert alert-danger" style="display: none;">
            Invalid <strong>pin code</strong>! Please try again and/or stop hacking!
          </div>

          <p class="card-text text-justify">Type your email address below to get a <b class="env_color">pin code</b> to log in.</p>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
            </div>
            <input type="email" id="request_pin_email" name="email" class="form-control btn-sm" placeholder="Enter email address" aria-label="Username" aria-describedby="basic-addon1">
          </div>

          <div class="input-group mb-3">
            <button id="request_pin_submit" class="btn btn-sm env_button env_right">Send pin code</button>
            <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
            <input type="hidden" name="captcha_token" id="login_form_token" />
          </div>
        </div>
        
        {{-- Enter Pin part --}}
        <div id="pin_block" style="display: none;">
          <p class="card-text text-justify">Type your <b class="env_color">pin code</b> to log in.</p>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1"><i class="fa fa-key" aria-hidden="true"></i></span>
            </div>
            <input id="login_pin" type="text" name="pin" maxlength="6" placeholder="Enter pin code" class="form-control btn-sm">
          </div>
          
          <div class="input-group mb-3">
            <button id="login_submit" class="btn btn-sm env_button env_right">Log in</button>
            <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
            <input type="hidden" name="captcha_token" id="login_form_token" />
          </div>
        </div>

      </div>

      <div class="card-footer p-2">
          <button type="button" class="btn btn-sm btn-outline-secondary pull-right" data-dismiss="modal">Cancel</button>
      </div>
      
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script type="text/javascript">
  $('#request_pin_submit').click(function() {
    $.get("/auth/requestPin", {email: $('#request_pin_email').val()}).done(function() {
      $('#mail_block').hide();
      $('#pin_block').show();
    });
  });
  $('#login_submit').click(function() {
    $.get("/auth/login", {email: $('#request_pin_email').val(), pin: $('#login_pin').val()}).done(function(data) {
      $('#login_pin').val('');
      if(data == 'success') {
        location.reload();
      } else {
        $('#pin_block').hide();
        $('#mail_block').show();  
        $('#email_alert').show();
      }
    }); 
  });
</script>