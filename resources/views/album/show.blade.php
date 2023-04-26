<x-layout>

    <section class="container">
        <div class="row justify-content-center align-items-center vh-100 mt-5">
            <div class="col-12 col-md-3 m-5">
                
                <div class="card shadow rounded-0" style="width: 20rem;">
                    <img src="{{Storage::url($album->image)}}" class="card-img-top rounded-0" alt="{{$album->name}}">
                    <div class="card-body text-center">
                        <h4 class="card-title">{{$album->title}}</h4>
                        <h5>{{$album->artist}}</h5>
                        <p class="card-text textBlackCus paragraphCus">{{$album->description}}</p> 
                        <a href="{{route('index-album')}}" class="btn bgMain border-0 btn-dark my-2 rounded-0">Back</a>

                        <a href="{{route('edit-album', compact('album'))}}" class="btn bgMain border-0 btn-dark my-2 rounded-0">Edit</a>

                        <a href="" class="btn bg-danger border-0 btn-dark my-2 rounded-0" onclick="event.preventDefault(); document.querySelector('#form-delete').submit();">Delete</a>
                        <form id="form-delete" method="POST" action="{{route('delete-album', compact('album'))}}">@method('delete')@csrf</form>

                    </div>
                </div>
            </div>

        </div>
    </section>

</x-layout>