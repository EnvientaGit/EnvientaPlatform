@extends('00_header.platform')

@section('content')

    <main role="main">

{{--
      <section id="env_board" class="jumbotron text-center">
        <div class="container">
          <p class="lead env_p" style="color: #efefef; font-size: 20px; font-weight: 400;">
            “We, at ENVIENTA believe that technological progress can bring abundance and unlimited wealth to people,
            but this is only possible if every human beings are able to access to technology.”
          </p>
        </div>
      </section>
--}}
        @if(!Auth::check())
        @include('60_campaign.new_project_unauth')
        @else
        @include('60_campaign.new_project')
        @endif

        @include('60_campaign.62_front.front')

      <div class="album py-5 bg-light" id="projects">
        @include('60_campaign.projects')
      </div>


<section class="mbr-section form3 cid-qUCSa8RrlP" id="form3-7y">
    <div class="container">
        <div class="row justify-content-center">
            <div class="title col-12 col-lg-8">
                <h2 class="align-center pb-2 mbr-fonts-style display-2">DON'T MISS A THING</h2>
                <h3 class="mbr-section-subtitle align-center pb-5 mbr-light mbr-fonts-style display-5">Sign up for our newsletter</h3>
            </div>
        </div>

        <div class="row py-2 justify-content-center">
            <div class="col-12 col-lg-6  col-md-8 " data-form-type="formoid">
                <form class="mbr-form" action="https://envienta.us12.list-manage.com/subscribe/post?u=1cfb2999615d57f7f085b1680&amp;id=da900f432b" method="post">
                    <div class="mbr-subscribe input-group">
                        <input class="form-control" type="email" name="EMAIL" placeholder="Email" data-form-field="Email" required="" id="email-form3-7y">
                        <span class="input-group-btn"><button name="subscribe" type="submit" class="btn  btn-primary display-4">SUBSCRIBE</button></span>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

    </main>

    <script type="text/javascript">
      $(document).ready(function() {
        $(document).on('click', '.pagination a', function (e) {
            //getProjects($(this).attr('href').split('page=')[1]);
            location.hash = $(this).attr('href').split('page=')[1];
            e.preventDefault();
        });
      });

      $(window).on('hashchange', function() {
        if (window.location.hash) {
            var page = window.location.hash.replace('#', '');
            if (page == Number.NaN || page <= 0) {
                return false;
            } else {
                getProjects(page);
            }
        } else {
          getProjects(1);
        }
      });

      function getProjects(page) {
        $.ajax({
            url : '{{ $filter ? url('/s') . '/' . $filter : url('/') }}?page=' + page,
            //dataType: 'json',
        }).done(function (data) {
            $('#projects').html(data);
            location.hash = page;
        }).fail(function () {
            alert('Projects could not be loaded.');
        });
      }
    </script>
  
@endsection 