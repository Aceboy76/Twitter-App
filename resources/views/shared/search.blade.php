<div class="card">
    <div class="card-header pb-0 border-0">
        <h5 class="">Search</h5>
    </div>
    <div class="card-body">

        <form action="{{route('dashboard.index')}}" method="get">
            <input placeholder="...
            " class="form-control w-100" name="search-control" type="text" id="search">

            @error('search-control')
            <span class="d-block fs-6 text-danger mt-2">
                {{$message}}
            </span>
            @enderror

            <button class="btn btn-dark mt-2"> Search</button>


        </form>

    </div>
</div>