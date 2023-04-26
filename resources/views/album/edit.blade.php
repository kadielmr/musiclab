<x-layout>
    <div class="container">
        <div class="row p-5 justify-content-center align-items-center">
            <div class="col-12 col-md-6 p-5 shadow">
                
                <form method="POST" action="{{route('update-album', compact('album'))}}" enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    
                    <div class="mb-3">
                        <label for="exampleInputName" class="form-label">Album Title</label>
                        <input name="title" type="text" class="form-control" id="exampleInputName" value="{{$album->title}}">
                        @error('title')
                        <span class="error text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputName" class="form-label">Artist Name</label>
                        <input name="artist" type="text" class="form-control" id="exampleInputName" value="{{$album->artist}}">
                        @error('artist')
                        <span class="error text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputName" class="form-label">Description</label>
                        <textarea name="description" id="exampleTextDecription" class="form-control" cols="30" rows="10">{{$album->description}}</textarea>
                        @error('description')
                        <span class="error text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <div class="d-flex">
                            <img src="{{Storage::url($album->image)}}" alt="" style="width:200px">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputName" class="form-label">Select Image</label>
                        <input name="image" type="file" class="form-control" id="exampleInputName">
                        @error('image')
                        <span class="error text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    
                    <button type="submit" class="btn btn-dark">Edit Album</button>
                </form>
                
            </div>
        </div>
    </div>
</x-layout>