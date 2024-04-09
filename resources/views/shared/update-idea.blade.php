<form action="{{route('ideas.update', $idea->id)}}" method="post">
    @csrf
    @method('put')
    <div class="mb-3">
        <textarea name="idea-control" class="form-control" id="idea"
            rows="3"> {{$idea->idea_content}} </textarea>
        @error('idea-control')
        <span class="d-block fs-6 text-danger mt-2">
            {{$message}}
        </span>
        @enderror
    </div>
    <div class="">
        <button type="submit" class="btn btn-dark"> Update </button>
    </div>
</form>