<?php
    use App\Utils;
?>
<section class="cid-qUpG10sFw7" id="footer5-7i">
  <div class="">
    <div class="media-container-row">
            <div class="col-md-3">
                <div class="media-wrap">
                    <a href="{{ url('/') }}">
                       <img src="{{ url('assets/images/envienta-platform-logo-footer-1-1000x380.png') }}" alt="" title="">
                    </a>
                </div>
            </div>
            <div class="col-md-9">
            </div>
    </div>

{{--
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
--}}
          <div class="footer-lower">
            <div class="media-container-row">
                <div class="col-md-12">
                  <p class="mbr-text mbr-fonts-style display-7 float-right">© Copyright 2018 - Envienta</p>
                  <hr>
                </div>
            </div>
            <div class="media-container-row mbr-white">
                <div class="col-md-6 copyright">
                    <p>
                      <a href="{{ URL::to('/terms') }}" class="text-white mr-2">Terms & conditions </a>
                      <a href="{{ URL::to('/privacy') }}" class="text-white mr-2">Privacy policy </a>
                      <a href="{{ URL::to('/cookies') }}" class="text-white">Cookies </a>
                    </p>
                </div>
                <div class="col-md-6">
                    <div class="social-list align-right">
                        <div class="soc-item">
                            <a href="https://www.facebook.com/envienta" target="_blank">
                                <span class="mbr-iconfont mbr-iconfont-social socicon-facebook socicon" style="color: rgb(255, 255, 255);"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://twitter.com/envienta" target="_blank">
                                <span class="mbr-iconfont mbr-iconfont-social socicon-twitter socicon" style="color: rgb(255, 255, 255);"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://www.youtube.com/channel/UCbS_n6qVwLtyVlwFYMjq4og/videos" target="_blank">
                                <span class="mbr-iconfont mbr-iconfont-social socicon-youtube socicon" style="color: rgb(255, 255, 255);"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://www.youtube.com/channel/UCbS_n6qVwLtyVlwFYMjq4og/videos" target="_blank">
                                <span class="mbr-iconfont mbr-iconfont-social socicon-telegram socicon" style="color: rgb(255, 255, 255);"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://medium.com/envienta-open-source-everything" target="_blank">
                                <span class="mbr-iconfont mbr-iconfont-social socicon-medium socicon" style="color: rgb(255, 255, 255);"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://github.com/EnvientaGit" target="_blank">
                                <span class="mbr-iconfont mbr-iconfont-social socicon-github socicon" style="color: rgb(255, 255, 255);"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

  </div>
</section>

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
  $('.proplist').each(function() {
    var placeholder = $(this).attr('placeholder');
    $(this).tagEditor({
      delimiter: ' ',
      placeholder: placeholder
    });
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

<script type="text/javascript">
  $('#vlink_modal').modal('hide')
</script>
