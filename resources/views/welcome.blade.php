<!DOCTYPE html>
<html lang="en">
   <head>
   	<meta charset="utf-8">
   	<meta name="viewport" content="width-device-width, initial-scale-1.0">

   	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
   	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

   	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
       <script src="/assets/jquery.js"></script>
   	<title>Online Shop</title>
   
   
	 <div class="navbar">

  				
     <header>
          <nav>
            <ul>
               <li><a href="#about">Shafeeling</a></li>
               <li><a href="#about">Home</a></li>
               <div class="dropdown">
    <div class="dropbtn">Category
      <i class="fa fa-caret-down"></i>
   
    <div class="dropdown-content">
      <a href="#">Shoes</a>
      <a href="#">Gadgets</a>
      <a href="#">Perfume</a>
    </div>
    </div>
     </div>
               <li><a href="#projects">About</a></li>
               <li><a href="#contact">Contact</a></li>
               <li><a href="#projects">Pages</a></li>
               <li><a href="#projects">Login</a></li>
             
            </ul>
         </nav>


</nav>
</div>

<style>

    h1{
        margin-top:30px;
        text-align:center;
    }
 .navbar{
   max-width:100%;
   padding:10px;
   color:white;
background:#169016;


 }
 .topbanner img{


    width:100%;
    height:700px;
   
 }
.logo{
position:absolute;
margin-left:23%;
margin-top:5%;

}
.logo img{
width:800px


}
.dropbtn{

margin-right: 25px;
}
 nav ul {
      list-style: none;
      margin: 0;
      padding: 0;
      display: flex;
    }

    nav ul li {
      margin-right: 25px;
    }

    nav ul li a {
      color: #fff;
      text-decoration: none;
    }


    nav li:nth-child(1) {
   font-size: 20px; 
    margin-right:20%; 
  }
  nav li:nth-child(6) {
    margin-right:700px; 
   
    ;
  }
 

 
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
   margin-right: 25px;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
} 


    .product-card {
      width: 200px;
      margin: 10px;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      text-align: center;
    }

    .product-card img {
      width: 200px;
      height: 200px;
      object-fit: cover;
      margin-bottom: 10px;
    }
  
    .product-container {
      display: flex;
      flex-wrap: wrap;
       margin-left:50px;

    }

    .product-card {
      width: 250px;
      margin: 10px;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      text-align: center;
      margin-right: 30px;
       
    
    }

    .product-card img {
      width: 200px;
      height: 200px;
      object-fit: cover;
      margin-bottom: 10px;
    }
    a{
        color:black;
    }
    


.contact ul{
  list-style: none;
      margin-top: 0;
      padding: 0;
      display: inline;
  

}

.copyright
{
	overflow: hidden;
	padding: 30px;
	background: #4CAF50;
  height:80px;
}

.copyright p
{
  font-size:21px;
	color: rgba(255, 255, 255, 0.6);
}

.copyright a
{
	text-decoration: none;
	color: rgba(255, 255, 255, 0.8);
  font-size:21px;
}


 
 
 </style>


<body>
<div class="logo">
<img src="logo.png" alt="Product photo5">
</div>
<div class="topbanner">
<img src="photo5.jpg" alt="Product photo5">
</div>

<h1> Shop Category <h1>     
<div class="product-container">
    <div class="product-card">
      <img src="photo4.jpg" alt="Product 1">
      <a href="#"><p>Skin Care</p></a>
    
     
    </div>

    <div class="product-card">
      <img src="photo3.jpg" alt="Product 2">
      <a href="#"><p>Massage Oil</p></a>
   
  
    </div>

    <div class="product-card">
      <img src="photo2.jpg" alt="Product 3">
      <a href="#"><p>Fashion</p></a>
     
      
    </div>

    <div class="product-card">
      <img src="photo.jpg" alt="Product 4">
      
      <a href="#"><p>Gadgets</p></a>
   
    </div>

    <div class="product-card">
      <img src="photo1.jpg" alt="Product 5">
      <a href="#"><p>Shoes</p></a>
      
  
    </div>
  </div>


</body>
<footer>
        <div class="copyright">
             
 
        <p>© All rights reserved | Shafeeling.</p>
 
     
        </div>
    </footer>
</html>