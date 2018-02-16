<div class="text-muted env_bg pb-4">
  <div class="container">
    <a href="{{ url('/') }}" class="mr-1">
        <img class="d-block" src="{{ URL::to('img/logo_lightbubble_white.svg') }}" height="64">
    </a>
    <p class="float-right">
        <a id="env_link" href="#" class="text-white">
            <i class="fa fa-arrow-up fa-2x p-2 rounded-circle border border-white" aria-hidden="true"></i>
        </a>
    </p>
    <p class="text-white">ENVIENTA™ - Open Source Everything <br>This is an Open Source Project! Read more at 
        <a id="env_link" href="http://envienta.com" class="text-light">ENVIENTA</a> Official Site.</p>
  </div>
</div>

{{--
<!--CAPTCHA CODE-->
<div style="text-align:left;">
    <div class="g-recaptcha" data-sitekey="6LdznCwUAAAAAAblIY11zkroyvcBb2mir4AdQYHT"
         data-size="invisible" data-callback="onLoginSubmit"></div>
</div>
<!--CAPTCHA CODE-->
--}}

<!-- Bootstrap v4 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

{{-- Disqus --}}
<script id="dsq-count-scr" src="//localhost-ttb34uya0n.disqus.com/count.js" async></script>

<script type="text/javascript">
  $('.taglist').tagEditor({
    maxTags: 6,
    delimiter: ' '
  });
</script>

{{--
<script>
  $(document).ready(function() {
    //var simplemde = new SimpleMDE({ element: document.getElementById("simplemde_edit") });
    $('#login_form_submit').click(function(e) {
      e.preventDefault();
      grecaptcha.execute();
    });
  });
  
  function onLoginSubmit(token) {
    $('#login_form_token').val(token);
    $('#login_form').submit();
  }
</script>
--}}