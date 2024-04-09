<div class="card">
    <div class="px-3 pt-4 pb-2">
        <div class="d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center">
                <img style="width:50px" class="me-2 avatar-sm rounded-circle"
                    src="https://api.dicebear.com/6.x/fun-emoji/svg?seed=Mario" alt="Mario Avatar">
                <div>
                    <h5 class="card-title mb-0"><a href="#"> Mario
                        </a></h5>
                </div>
            </div>

            <div>

                <form action="{{route('ideas.destroy', $idea->id)}}" method="post">
                    @csrf
                    @method('delete')

                    <a href="{{route('ideas.show', $idea->id)}}"> view </a>
                    <a class="ms-2" href="{{route('ideas.edit', $idea->id)}}"> edit </a>

                    <button class="ms-2 btn btn-danger btn-sm"> X </button>
                </form>


            </div>
        </div>
    </div>
    <div class="card-body">
        @if ($editing ?? false)

        @include('shared.update-idea')

        @else
        <p class="fs-6 fw-light text-muted">
            {{$idea->idea_content}}
        </p>
        @endif

        <div class="d-flex justify-content-between">
            <div>
                <a href="#" class="fw-light nav-link fs-6"> <span class="fas fa-heart me-1">
                    </span>{{$idea->likes}} </a>
            </div>
            <div>
                <span class="fs-6 fw-light text-muted"> <span class="fas fa-clock"> </span>
                    {{$idea->created_at}} </span>
            </div>
        </div>

        @include('shared.comments')
    </div>
</div>