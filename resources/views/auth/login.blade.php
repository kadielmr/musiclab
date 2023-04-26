<x-layout> 
    
    <div class="container-fluid">
        <div class="row align-items-center justify-content-between vh-100">
            <div class="col-12 col-md-6 p-5 mt-5 bgGreyCus">
                <h2 class="mb-5">WELCOME BACK TO THE COMMUNITY</h2>
                <p class="textOrange">Login to access to your account</p>
                
                <form method="POST" action="{{route('login')}}">
                    @csrf
                    
                    <div class="my-3">
                        <label for="exampleInputEmail" class="form-label">Email address</label>
                        <input name="email" type="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text textOrange">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="my-3">
                        <label for="exampleInputPassword" class="form-label">Password</label>
                        <input name="password" type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    
                    <button type="submit" class="btn btn-dark my-4 px-5 py-2 rounded-0">SIGN IN</button>
                </form>  
                
            </div>
            
            <div class="col-12 col-md-6 p-5 mt-5 text-center">
                <h2 class="mb-4">NEW IN THE COMMUNITY ?</h2>
                <p class="">Set up a new MusicLab account and we will keep you updated with all the news and speed up your next visit</p>
                <a href="{{route('register')}}" class="btn bgOrange btn-dark border-0 mt-4 px-5 py-2 rounded-0">CREATE ACCOUNT</a>
            </div>
        </div>

    </div>
</div>
</div>



</x-layout>