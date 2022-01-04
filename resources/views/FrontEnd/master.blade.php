<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <!--  font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!--Css Custom -->
    <link rel="stylesheet" href="{{ asset('/') }}FrontEndSourceFile/css/style.css">
</head>
<body>
   <!-- header section starts-->

   <header>
       <a href="#" class="logo"><i class="fas fa-utensils"></i>food</a>

        <div id="menu-bar" class="fas fa-bars"></div>
        
        <nav class="navbar">
            <a href="#home" >home</a>
            <a href="#speciality" >especialidades</a>
            <a href="#popular" >populares</a>
            <a href="#gallery" >galeria</a>
            <a href="#review" >avaliações</a>
            <a href="#order" >pedidos</a>
        </nav>
   </header>


   <!-- header section ends-->

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

        <div class="box">
            <span class="price"> $5 - $20 </span>
            <img src="{{ asset('/') }}FrontEndSourceFile/images/p-1.jpg" alt="">
            <h3>tasty burger</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <a href="#" class="btn">order now</a>
        </div>
        <div class="box">
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
        </div>

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
                <input type="email" placeholder="email">
            </div>

            <div class="inputBox">
                <input type="number" placeholder="number">
                <input type="text" placeholder="food name">
            </div>

            <textarea placeholder="address" name="" id="" cols="30" rows="10"></textarea>

            <input type="submit" value="order now" class="btn">

        </form>

    </div>

</section>

<!-- order section ends -->

<!-- footer section  -->

<section class="footer">

    <div class="share">
        <a href="#" class="btn">facebook</a>
        <a href="#" class="btn">twitter</a>
        <a href="#" class="btn">instagram</a>
        <a href="#" class="btn">pinterest</a>
        <a href="#" class="btn">linkedin</a>
    </div>

    <h1 class="credit"> created by <span> Marlon Paulo </span> | Todos os direitos reservados </h1>

</section>

<!-- scroll top button  -->
<a href="#home" class="fas fa-angle-up" id="scroll-top"></a>

<!-- loader  -->
<div class="loader-container">
    <img src="{{ asset('/') }}FrontEndSourceFile/images/loader.gif" alt="">
</div>
    


    <!-- custom js file link -->
    <script src="{{ asset('/') }}FrontEndSourceFile/js/script.js"></script>
</body>
</html>