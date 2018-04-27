<?php
    use App\Utils;
?>    
<div class="text-muted env_bg pb-4">
  <div class="container">
    <div class="row my-3">
      <a href="{{ url('/') }}" class="my-4">
        <img class="d-block" src="{{ Utils::themeResPath('footer_logo') }}" height="64">
      </a>
    </div>
    <p class="float-right">
        <a id="env_link" href="#" class="text-white">
            <i class="fa fa-arrow-up fa-2x p-2 rounded-circle border border-white" aria-hidden="true"></i>
        </a>
    </p>
    <p class="text-white">ENVIENTA™ - Open Source Everything <br>This is an Open Source Project! Read more at 
        <a id="env_link" href="http://envienta.com" class="text-light">ENVIENTA</a> Official Site.
    </p>
    <p>
      <a href="https://www.facebook.com/envienta" class="text-white">
        <i class="fa fa-facebook mr-3" aria-hidden="true"></i>
      </a>
      <a href="https://twitter.com/envienta" class="text-white">
        <i class="fa fa-twitter mr-3" aria-hidden="true"></i>
      </a>
      <a href="https://plus.google.com/+EnvientaGlobal" class="text-white">
        <i class="fa fa-google-plus mr-3" aria-hidden="true"></i>
      </a>
      <a href="https://medium.com/envienta-open-source-everything" class="text-white">
        <i class="fa fa-medium mr-3" aria-hidden="true"></i>
      </a>
      <a href="https://www.youtube.com/channel/UCbS_n6qVwLtyVlwFYMjq4og" class="text-white">
        <i class="fa fa-youtube-play mr-3" aria-hidden="true"></i>
      </a>
    </p>
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