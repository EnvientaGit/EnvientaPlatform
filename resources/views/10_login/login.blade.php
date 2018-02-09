<div id="login_dialog" class="modal animated bounceIn" tabindex="-1" role="dialog" aria-labelledby="modalLabelLarge" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Log In - Simply with an email!</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
          
        <div id="mail_block">
          <div id="email_alert" class="alert alert-danger" style="display: none;">
            Invalid <strong>pin code</strong>! Please try again or stop hacking.
          </div>
          <p>Type your email address below to get a <i>pin code</i> to log in.</p>
          <div class="input-group">
            <input id="request_pin_email" type="email" class="input-large" name="email" placeholder="Enter email address">
            <button id="request_pin_submit" class="btn btn-info">Send pin code</button>
            <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
            <input type="hidden" name="captcha_token" id="login_form_token" />
          </div>
        </div>

        <div id="pin_block" style="display: none;">
          <p>Type your <i>pin code</i> to log in.</p>
          <div class="input-group">
            <input id="login_pin" type="text" name="pin" maxlength="6">
            <button id="login_submit" class="btn btn-info">Log in</button>
            <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
            <input type="hidden" name="captcha_token" id="login_form_token" />
          </div>
        </div>

        <br/>

        <div class="modal-footer">
          <button type="button" class="btn btn-outline-info" data-dismiss="modal">Cancel</button>
        </div>
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