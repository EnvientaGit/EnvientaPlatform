<div id="login_dialog" class="modal animated bounceIn" tabindex="-1" role="dialog" aria-labelledby="modalLabelLarge" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Log In - Simply with an email!</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
          
        <div id="mail_block">
          <p>Type your email address below to get a <i>pin code</i> to log in.</p>
          <div class="input-group">
            <input id="email" type="email" class="input-large" name="email" placeholder="Enter email address">
            <button id="login_form_submit" class="btn btn-info">Send pin code</button>
            <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
            <input type="hidden" name="captcha_token" id="login_form_token" />
          </div>
        </div>

        <div id="pin_block" style="display: none;">
          <p>Type your <i>pin code</i> to log in.</p>
          <div class="input-group">
            <input type="text" name="pin" class="pincode6" maxlength="6">
            <button id="login_form_submit" class="btn btn-info">Log in</button>
            <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
            <input type="hidden" name="captcha_token" id="login_form_token" />
          </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-outline-info" data-dismiss="modal">Cancel</button>
        </div>
      </div>
      
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->