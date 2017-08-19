<div id="login_dialog" class="modal animated bounceIn" tabindex="-1" role="dialog" aria-labelledby="modalLabelLarge" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Log In - Simply with an email!</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <p>Type your email address below to get a <i>Log In link.</i></p>
        <form id="login_form" method="post" action="/auth/login">
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
            <input id="email" type="email" class="input-large" name="email" placeholder="Enter email address">
            <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
            <input type="hidden" name="captcha_token" id="login_form_token" />
          </div>
          <br>
          {{-- <button
            class="g-recaptcha"
            data-sitekey="6LdznCwUAAAAAAblIY11zkroyvcBb2mir4AdQYHT"
            data-callback="YourOnSubmitFn">
            Submit
          </button> --}}
          <div class="modal-footer">
            <button id="login_form_submit" class="btn btn-info">Send login token</button>
            <button type="button" class="btn btn-outline-info" data-dismiss="modal">Close</button>
          </div>
        </form>
      </div>
      
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->