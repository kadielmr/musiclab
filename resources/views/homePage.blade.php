<x-layout>
    
    @if(session('message'))
    <div class="message-alert rounded-0 alert z-3 alert-dismissible alert-success text-center" role="alert">
        {{session('message')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        </div>
        @endif
        
        <header class="container-fluid headerCus ">
            <div class="row justify-content-between align-items-center vh-100 position-relative">
                <div class="col-12 col-md-6 mt-5 ms-5 position-absolute start-0">
                    <h1>YOUR DAILY DOSE OF MUSIC</h1>
                    <p class="col-12 col-md-8">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Et, autem! Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officia praesentium fugiat, temporibus sequi suscipit vel dicta deleniti amet repellendus nemo! Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, beatae!</p>
                </div>
                <div class="col-3 vertical-text d-md-block d-none">
                    <h5>DISCOVER THE SCIENZE OF MUSIC</h5>
                </div>  
            </div>
        </header>
        
        <main class="container-fluid">
            
            <div class="row my-5"> 
                
                <div class="col-12 col-md-7 swiper swiper-slide mySwiper">  
                    
                    <div class="swiper-wrapper"> 
                        <div class="swiper-slide">
                            <img src="./media/sw1.png" />
                        </div>
                        
                        <div class="swiper-slide">
                            <img src="./media/sw5.png" />
                        </div>
                        
                        <div class="swiper-slide">
                            <img src="./media/sw6.png"/>
                        </div>
                        
                        <div class="swiper-slide">
                            <img src="./media/sw7.png"/>
                        </div>   
                        
                        <div class="swiper-slide">
                            <img src="./media/sw8.png"/>
                        </div>    
                    </div>
                    <div class="bg-success">
                         <div class="swiper-button-next"></div>
                    </div>
                   
                </div>  
                 
                <div class="col-12 col-md-5">
                    
                </div>
                
                
            </div>  
        </section>
        
    </div>
    
</main>

<!-- 𝗝𝗦 𝗦𝗪𝗜𝗣𝗘𝗥 -->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
{{-- 𝗦𝘄𝗶𝗽𝗲𝗿 𝗶𝗻𝗶𝘇𝗶𝗮𝗹𝗶𝘇𝗲 --}}
<script>
    let swiper = new Swiper(".mySwiper", {
        effect: "navigation",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "2",
        loop: true,
        spaceBetween: 300,

        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: ".swiper-button-next",
        },
        
    });
</script>

</x-layout>