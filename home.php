<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="container">

<?php @include 'header.php'; ?>

<section class="home">

   <div class="swiper home-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide" style="background:url(images/home2.jpeg) no-repeat">
            <div class="content">
               <h3>plan your wedding!</h3>
               <pre> 
Step1: Bring your wedding ideas to life with our incredible inspiration
Step2:Our planning tools will be there to help your every step of the way
Step3:Create your wedding team venues &suppliers               
               </pre>
               <a href="about.php" class="btn">discover more</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images/home3.jpeg) no-repeat">
            <div class="content">
               <h3>plan your wedding!</h3>
                 <pre> 
Step1: Bring your wedding ideas to life with our incredible inspiration
Step2:Our planning tools will be there to help your every step of the way
Step3:Create your wedding team venues &suppliers               
               </pre>
               <a href="about.php" class="btn">discover more</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images/home1.jpeg) no-repeat">
            <div class="content">
               <h3>plan your wedding!</h3>
                <pre> 
Step1: Bring your wedding ideas to life with our incredible inspiration
Step2:Our planning tools will be there to help your every step of the way
Step3:Create your wedding team venues &suppliers               
               </pre>
               <a href="about.php" class="btn">discover more</a>
            </div>
         </div>

      </div>

      <div class="swiper-pagination"></div>

   </div>

</section>

<section class="services">

   <h1 class="heading">our services</h1>

   <div class="swiper service-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <img src="images/service1.jpeg" alt="">
            <div class="content">
               <h3>Photography</h3>
               <p>Pre-Shoot Edited photos</br>
High-resolution, Edited Soft Copies</br>
Unlimited Unedited Soft Copies</br>
non-watermarked images</br>
Download or USB options</p>
               <a href="about.php" class="btn">about us</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="images/service3.jpg" alt="">
            <div class="content">
               <h3>Wedding Hall</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, pariatur!</p>
               <a href="about.php" class="btn">about us</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="images/services5.jpeg" alt="">
            <div class="content">
               <h3>Wedding Dressing</h3>
               <p>From wedding dresses to jeans to
suiting, our in-store alterations
specialists can transform pretty much
anything in your closet for a perfect fit.
Pay in installments over time
using Affirm.
</p>
               <a href="about.php" class="btn">about us</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="images/service-4.jpg" alt="">
            <div class="content">
               <h3>wedding cake</h3>
               <p>There are few things we appreciate more than a decadent wedding cake—both in taste and style.
   Dessert trends come and go, but nothing takes the place of a delicious cake that satisfies more than one of your senses. 
Our favorite type of wedding cake is the kind that makes a statement by adding to your wedding décor.
</p>
               <a href="about.php" class="btn">about us</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="images/services4.jpeg" alt="">
            <div class="content">
               <h3>wedding ceremony</h3>
               <p>A wedding is the ceremony that begins the marriage.
The marriage is the relationship, which by the way is much more important than the wedding.
There is a saying “Brides and grooms should be more concerned about the marriage than about the wedding.
 So, “Wedding ceremony” is the correct term</p>
               <a href="about.php" class="btn">about us</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="images/service4.jpg" alt="">
            <div class="content">
               <h3>fine dining</h3>
               <p>At Dining every single wedding is a new story. 
Whether you are dreaming of a traditional sit down wedding breakfast with champagne and canapés,
a vintage garden party with afternoon tea and cocktails,
 or a relaxed buffet or BBQ our chefs will use innovation and creativity tailored to you to ensure deliciously different menus on your most special occasion.

</p>
               <a href="about.php" class="btn">about us</a>
            </div>
         </div>

      </div>

      <div class="swiper-pagination"></div>

   </div>

</section>

<?php @include 'footer.php'; ?>

</div>
<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>