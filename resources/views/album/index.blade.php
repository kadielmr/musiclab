<x-layout>

    <section class="container">
        <div class="row justify-content-center align-items-center vh-100 mt-5">
            @foreach($albums as $album)
            <div class="col-12 col-md-3 m-5">
                
                <div class="card shadow rounded-0" style="width: 20rem;">
                    <img src="{{Storage::url($album->image)}}" class="card-img-top rounded-0" alt="{{$album->name}}">
                    <div class="card-body text-center">
                        <h4 class="card-title">{{$album->title}}</h4>
                        <h5>{{$album->artist}}</h5>
                        <p class="card-text textBlackCus paragraphCus">{{$album->description}}</p> 
                        <a href="{{route('show-album',compact('album'))}}" class="btn bgMain rounded-0 border-0 btn-dark my-2">Details</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>

</x-layout>