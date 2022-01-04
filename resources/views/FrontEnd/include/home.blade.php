@extends('FrontEnd.master')
@section('title')
    Home
@endsection
@section('content')
    

   <!-- home section starts -->

   <section class="home" id="home">

    <div class="content">
        <h3>Comida feita com amor</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem quo dolor officiis culpa maxime iusto, dolorum ut ipsam odio, repellat accusamus neque. Dolor quaerat et ipsam itaque laudantium officia corporis?

        </p>
        <a href="#" class="btn">Fazer pedido</a>
    </div>

    <div class="image">
        <img src="{{ asset('/') }}FrontEndSourceFile/images/home-img.png" alt="" srcset="">
    </div>

   </section>

   <!-- home section ends -->

   <!-- Speciality section starts -->

   <section class="speciality" id="speciality">
       <h1 class="heading">Nossas <span>especialidades</span></h1>

       <div class="box-container">
         {{-- @foreach ($categories as $cat)
             <h1>{{ $cat->category_name }}</h1>
         @endforeach --}}
           <div class="box">
               <img class="image" src="{{ asset('/') }}FrontEndSourceFile/images/s-img-1.jpg" alt="">
               <div class="content">
                   <img src="{{ asset('/') }}FrontEndSourceFile/images/s-1.png" alt="">
                   <h3>Hambúrguer saboroso</h3>
                   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet, iste fugit rem sed eum mollitia voluptates corporis esse dolor totam molestias ad dicta saepe officiis libero quos magni maxime harum?
                    </p>
                   <h3></h3>
               </div>
           </div>
           <div class="box">
               <img class="image" src="{{ asset('/') }}FrontEndSourceFile/images/s-img-1.jpg" alt="">
               <div class="content">
                   <img src="{{ asset('/') }}FrontEndSourceFile/images/s-1.png" alt="">
                   <h3>Hambúrguer saboroso</h3>
                   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet, iste fugit rem sed eum mollitia voluptates corporis esse dolor totam molestias ad dicta saepe officiis libero quos magni maxime harum?
                    </p>
                   <h3></h3>
               </div>
           </div>
           <div class="box">
               <img class="image" src="{{ asset('/') }}FrontEndSourceFile/images/s-img-1.jpg" alt="">
               <div class="content">
                   <img src="{{ asset('/') }}FrontEndSourceFile/images/s-1.png" alt="">
                   <h3>Hambúrguer saboroso</h3>
                   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet, iste fugit rem sed eum mollitia voluptates corporis esse dolor totam molestias ad dicta saepe officiis libero quos magni maxime harum?
                    </p>
                   <h3></h3>
               </div>
           </div>
       </div>
   </section>
   <!-- Speciality section ends-->
   
   
<!-- popular section starts  -->

<section class="popular" id="popular">

    <h1 class="heading"> comidas mais <span>populares</span></h1>

    <div class="box-container">
          @foreach ($products as $p)
          <div class="box">
            <span class="price"> $5 - $20 </span>
            <img src="{{ asset('/') }}FrontEndSourceFile/images/p-1.jpg" alt="">
            <h3>{{ $p->product_name }}</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <a href="#" class="btn">order now</a>
          </div>
            @endforeach
          @foreach ($products as $p)
          <div class="box">
            <span class="price"> $5 - $20 </span>
            <img src="{{ asset('/') }}FrontEndSourceFile/images/p-1.jpg" alt="">
            <h3>{{ $p->product_name }}</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <a href="#" class="btn">order now</a>
          </div>
            @endforeach
            
         </div>
        {{--<div class="box">
            <span class="price"> $5 - $20 </span>
            <img src="{{ asset('/') }}FrontEndSourceFile/images/p-2.jpg" alt="">
            <h3>tasty cakes</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <a href="#" class="btn">pedir agora</a>
        </div>
        <div class="box">
            <span class="price"> $5 - $20 </span>
            <img src="{{ asset('/') }}FrontEndSourceFile/images/p-3.jpg" alt="">
            <h3>tasty sweets</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <a href="#" class="btn">pedir agora</a>
        </div>
        <div class="box">
            <span class="price"> $5 - $20 </span>
            <img src="{{ asset('/') }}FrontEndSourceFile/images/p-4.jpg" alt="">
            <h3>tasty cupcakes</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <a href="#" class="btn">pedir agora</a>
        </div>
        <div class="box">
            <span class="price"> $5 - $20 </span>
            <img src="{{ asset('/') }}FrontEndSourceFile/images/p-5.jpg" alt="">
            <h3>cold drinks</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <a href="#" class="btn">pedir agora</a>
        </div>
        <div class="box">
            <span class="price"> $5 - $20 </span>
            <img src="{{ asset('/') }}FrontEndSourceFile/images/p-6.jpg" alt="">
            <h3>cold ice-cream</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <a href="#" class="btn">pedir agora</a>
        </div> --}}

    </div>

</section>

<!-- popular section ends -->

<!-- steps section starts  -->

<div class="step-container">

    <h1 class="heading">como <span>funciona</span></h1>

    <section class="steps">

        <div class="box">
            <img src="{{ asset('/') }}FrontEndSourceFile/images/step-1.jpg" alt="">
            <h3>escolha sua comida favorita</h3>
        </div>
        <div class="box">
            <img src="{{ asset('/') }}FrontEndSourceFile/images/step-2.jpg" alt="">
            <h3>frete grátis e rápido</h3>
        </div>
        <div class="box">
            <img src="{{ asset('/') }}FrontEndSourceFile/images/step-3.jpg" alt="">
            <h3>pagamento facilitado</h3>
        </div>
        <div class="box">
            <img src="{{ asset('/') }}FrontEndSourceFile/images/step-4.jpg" alt="">
            <h3>e aproveite !!!</h3>
        </div>
    
    </section>

</div>

<!-- steps section ends -->

<!-- gallery section starts  -->

<section class="gallery" id="gallery">

    <h1 class="heading"> Nossa <span> Galeria de comida </span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="{{ asset('/') }}FrontEndSourceFile/images/g-1.jpg" alt="">
            <div class="content">
                <h3>tasty food</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti, ipsum.</p>
                <a href="#" class="btn">ordern now</a>
            </div>
        </div>
        <div class="box">
            <img src="{{ asset('/') }}FrontEndSourceFile/images/g-2.jpg" alt="">
            <div class="content">
                <h3>tasty food</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti, ipsum.</p>
                <a href="#" class="btn">ordern now</a>
            </div>
        </div>
        <div class="box">
            <img src="{{ asset('/') }}FrontEndSourceFile/images/g-3.jpg" alt="">
            <div class="content">
                <h3>tasty food</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti, ipsum.</p>
                <a href="#" class="btn">ordern now</a>
            </div>
        </div>
        <div class="box">
            <img src="{{ asset('/') }}FrontEndSourceFile/images/g-4.jpg" alt="">
            <div class="content">
                <h3>tasty food</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti, ipsum.</p>
                <a href="#" class="btn">ordern now</a>
            </div>
        </div>
        <div class="box">
            <img src="{{ asset('/') }}FrontEndSourceFile/images/g-5.jpg" alt="">
            <div class="content">
                <h3>tasty food</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti, ipsum.</p>
                <a href="#" class="btn">ordern now</a>
            </div>
        </div>
        <div class="box">
            <img src="{{ asset('/') }}FrontEndSourceFile/images/g-6.jpg" alt="">
            <div class="content">
                <h3>tasty food</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti, ipsum.</p>
                <a href="#" class="btn">ordern now</a>
            </div>
        </div>
        <div class="box">
            <img src="{{ asset('/') }}FrontEndSourceFile/images/g-7.jpg" alt="">
            <div class="content">
                <h3>tasty food</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti, ipsum.</p>
                <a href="#" class="btn">ordern now</a>
            </div>
        </div>
        <div class="box">
            <img src="{{ asset('/') }}FrontEndSourceFile/images/g-8.jpg" alt="">
            <div class="content">
                <h3>tasty food</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti, ipsum.</p>
                <a href="#" class="btn">ordern now</a>
            </div>
        </div>
        <div class="box">
            <img src="{{ asset('/') }}FrontEndSourceFile/images/g-9.jpg" alt="">
            <div class="content">
                <h3>tasty food</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti, ipsum.</p>
                <a href="#" class="btn">ordern now</a>
            </div>
        </div>

    </div>

</section>

<!-- gallery section ends -->

<!-- review section starts  -->

<section class="review" id="review">

    <h1 class="heading"> our customers <span>reviews</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="{{ asset('/') }}FrontEndSourceFile/images/pic1.png" alt="">
            <h3>john deo</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti delectus, ducimus facere quod ratione vel laboriosam? Est, maxime rem. Itaque.</p>
        </div>
        <div class="box">
            <img src="{{ asset('/') }}FrontEndSourceFile/images/pic2.png" alt="">
            <h3>john deo</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti delectus, ducimus facere quod ratione vel laboriosam? Est, maxime rem. Itaque.</p>
        </div>
        <div class="box">
            <img src="{{ asset('/') }}FrontEndSourceFile/images/pic3.png" alt="">
            <h3>john deo</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti delectus, ducimus facere quod ratione vel laboriosam? Est, maxime rem. Itaque.</p>
        </div>

    </div>

</section>

<!-- review section ends -->

<!-- order section starts  -->

<section class="order" id="order">

    <h1 class="heading"> <span>Pedir</span> agora </h1>

    <div class="row">
        
        <div class="image">
            <img src="{{ asset('/') }}FrontEndSourceFile/images/order-img.jpg" alt="">
        </div>

        <form action="">

            <div class="inputBox">
                <input type="text" placeholder="name">
                <input type="email" placeholder="e-mail">
            </div>

            <div class="inputBox">
                <input type="number" placeholder="número">
                <input type="text" placeholder="nome da comida">
            </div>

            <textarea placeholder="endereço" name="" id="" cols="30" rows="10"></textarea>

            <input type="submit" value="pedir agora" class="btn">

        </form>

    </div>

</section>

<!-- order section ends -->
@endsection