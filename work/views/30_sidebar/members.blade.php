          @foreach ($project->members as $member)
            <div class="card bg-light mb-1">
              <div class="mx-1">
                @if (Auth::user() && $project->owner == Auth::user()->id && $member->user->id != $project->owner)
                  <a href="#" class="fa fa-times pull-right contributor-del" aria-hidden="true" rel="{{ $member->id }}" title="Remove from Contributors"></a>
                @endif
                <p class="card-text text-justify text-truncate" title="{{ $member->user->skills }}">
                    <a href="https://www.gravatar.com/{{ md5( strtolower( trim( $member->user->email ) ) ) }}" target="_blank">
                      <img src="{{ "https://www.gravatar.com/avatar/" . md5( strtolower( trim( $member->user->email ) ) ) . "?s=25"}}" class="img-fluid img-thumbnail mb-2" height="25" width="25">
                    </a>
                    <span class="gravatar_name" data-gravatar-hash="{{ md5( strtolower( trim( $member->user->email ) ) ) }}">Unknown</span>
                </p>
              </div>
            </div>
          @endforeach
