<x-layout> 
    
    <div class="container-fluid">
        <div class="row p-5 justify-content-between align-items-center vh-100">

            <div class="col-12 col-md-6 p-5 mt-5">
                <h2 class="mb-5 textOrange">CREATE ACCOUNT</h2>
                
                <form method="POST" action="{{route('register')}}">
                    @csrf
                    <div class="my-3">
                        <label for="exampleInputName" class="form-label">Name</label>
                        <input name="name" type="text" class="form-control" id="exampleInputName">
                    </div>
                    <div class="my-3">
                        <label for="exampleInputEmail" class="form-label">Email address</label>
                        <input name="email" type="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text textOrange">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="my-3">
                        <label for="exampleInputPassword" class="form-label">Password</label>
                        <input name="password" type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="my-3">
                        <label for="exampleInputPasswordConfirmation" class="form-label">Password</label>
                        <input name="password_confirmation" type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    
                    <button type="submit" class="btn btn-dark my-4 px-5 py-2 rounded-0">JOIN US</button>
                </form>  
            </div>
            
            <div class="col-12 col-md-6 p-5 mt-5 text-center">
                <h2 class="mb-4">WELCOME TO THE COMMUNITY</h2>
                <p class="">Set up a new MusicLab account and we will keep you updated with all the news and speed up your next visit</p>
            </div>
        </div>
        
    </div>
    
    
</x-layout>