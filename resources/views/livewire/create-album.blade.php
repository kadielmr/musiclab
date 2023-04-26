<div>
    
    <div class="container-fluid">
        <div class="row p-5 align-items-center justify-content-between pt-5 bgOrange ">

            <div class="col-12 col-md-4 text-center">
                <h2>SELECT ONE OF YOUR FAVORITES TO SHARE IN ONE OF OUR PLAYLISTS </h2>
                <p>Visit all the playlists available and choose your favorites</p>
                <a href="" class="btn btn-dark rounded-0 px-23">AVAILABLE PLAYLISTS</a>
            </div>

            <div class="col-12 col-md-7 p-5 mt-5 ">
                
                <form wire:submit.prevent="store">
                    
                    <div class="mb-3">
                        <label for="exampleInputName" class="form-label">Album Title</label>
                        <input wire:model.lazy="title" type="text" class="form-control inputCus" id="exampleInputName">
                        @error('title')
                        <span class="error text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputName" class="form-label">Artist Name</label>
                        <input wire:model.lazy="artist" type="text" class="form-control inputCus" id="exampleInputName">
                        @error('artist')
                        <span class="error text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputName" class="form-label">Description</label>
                        <textarea wire:model.lazy="description" id="exampleTextDecription" class="form-control descriptionCus rounded-0" cols="30" rows="10"></textarea>
                        @error('description')
                        <span class="error text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputName" class="form-label">Select Image</label>
                        <input wire:model.lazy="image" type="file" class="form-control border-0 rounded-0" id="exampleInputName">
                        @error('image')
                        <span class="error text-danger">{{$message}}</span>
                        @enderror
                    </div> 
                    <button type="submit" class="btn btn-dark border-0 rounded-0  my-2">Add Album</button>
                </form>
                
            </div>
        </div>
    </div>
    
</div>
