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
    <p class="text-white">Copyright &copy; 2018 ENVIENTA Association</p>
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

{{-- mobi --}}

  <script src="{{ URL::to('assets/popper/popper.min.js') }}"></script>
  <script src="{{ URL::to('assets/tether/tether.min.js') }}"></script>
  <script src="{{ URL::to('assets/smoothscroll/smooth-scroll.js') }}"></script>
  <script src="{{ URL::to('assets/touchswipe/jquery.touch-swipe.min.js') }}"></script>
  <script src="{{ URL::to('assets/ytplayer/jquery.mb.ytplayer.min.js') }}"></script>
  <script src="{{ URL::to('assets/vimeoplayer/jquery.mb.vimeo_player.js') }}"></script>
  <script src="{{ URL::to('assets/dropdown/js/script.min.js') }}"></script>
  <script src="{{ URL::to('assets/theme/js/script.js') }}"></script>
  
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