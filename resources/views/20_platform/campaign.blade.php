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