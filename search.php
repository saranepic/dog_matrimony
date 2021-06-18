<?php 
global $connection; 

if(isset($_POST['submit'])){
    $breed = $_POST['breed'];
    $city = $_POST['city'];
    echo $breed;
    echo $city;
    
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Search dogs</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
     <header style="">
          <nav class="navbar navbar-expand-lg navbar-light ">
              <a href="index.php"><h4 class="doghead" style="color:#FF1493">Dog<span style="color:black">honeymoon</span>♡</h4></a>
           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
           </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent" >
    <ul class="navbar-nav ml-auto">
     
        <li class="nav-item active"><a class="nav-link" href=""><span style="color:black;font-weight:bold;" >Sign-up</span>&nbsp;&nbsp;<span class="sr-only">(current)</span></a></li>
      
      <li class="nav-item active "><a class="nav-link" href=""><span style="color:black;font-weight:bold;" >Log-in</span><span class="sr-only">(current)</span></a></li>
          
     <li class="nav-item active "><a class="nav-link" href=""><span style="color:black;font-weight:bold;" > About</span><span class="sr-only">(current)</span></a></li>
                          
              </ul>
           </div> 
       </nav>
    </header>
    
   <main>
       <div class="container">
       <div class="sectionsearch p-0">
           <div class="d-flex justify-content-center">
               <div class="d-flex">
                 <form action="search.php" method="post">
                   <div class="form-group">
                   <h1>  Look for <span  style="color: #FF1493;">dogs!  </span></h1><br>
                   
                   
                   <label for="dog breed">Select dog breed</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="breed">
                      <option>Akita</option>
                      <option>Australian Shepherd</option>
                      <option>Basset Hound</option>
                      <option>Beagle</option>
                        <option>Belgian malinois</option>
                        <option>Bernese Mountain Dog</option>
                        <option>Bichon Frise</option>
                        <option>Border collie</option>
                        <option>Border terrier</option>
                        <option>Boxer</option>
                        <option>Bulldog</option>
                        <option>Bullmastiff</option>
                        <option>Cane corso</option>
                        <option>Chihuahua</option>
                        <option>Chow chow</option>
                        <option>Cocker Spaniel</option>
                        <option>Corgis</option>
                        <option>Dachshund</option>
                        <option>Dalmatian</option>
                        <option>Doberman</option>
                        <option>English Bulldog</option>
                        <option>English setter</option>
                        <option>Finnish Spitz</option>
                        <option>French bulldog</option>
                        <option>German shepard</option>
                        <option>German shorthaired pointer</option>
                        <option>Golden retriever</option>
                        <option>Great dane</option>
                        <option>Havanese</option>
                        <option>Husky</option>
                        <option>Indian Spitz</option>
                        <option>Country dog</option>
                        <option>Irish setter</option>
                        <option>Jack Russel</option>
                        <option>Labrador Retriever</option>
                        <option>Lhasa Apso</option>
                        <option>Lowchem</option>
                        <option>Maltese</option>
                        <option>Miniature Schnauzer</option>
                        <option>Mix breed</option>
                        <option>mountain dog</option>
                        <option>Pitbull terrier</option>
                        <option>Pomeranian</option>
                        <option>poodle</option>
                        <option>Pug</option>
                        <option>Rhodesian Ridgebck</option>
                        <option>Rottweiler</option>
                        <option>Saluki</option>
                        <option>Sheepdog</option>
                        <option>Shiba inu</option>
                        <option>siberian husky</option>
                        <option>Springer spaniel</option>
                        <option>St Bernard</option>
                        <option>Bull terrier</option>
                        <option>terrier</option>
                        <option>Tibetan master</option>
                        <option>Vizsla</option>
                        <option>Weimaraner</option>
                        <option>Indian dog</option>
                        <option>Shih Tzu</option>
                        <option>Himalayan sheepdog</option>
                    </select>
                    <br>
                    <label for="dog breed">Select your district</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="city">
                      <option>Other</option>
                      <option>Mumbai</option>
                      <option>Delhi</option>
                      <option>Bangalore</option>
                      <option>Hyderabad</option>
                      <option>Ahmedabad</option>
                      <option>Chennai</option>
                        <option>Kolkata</option>
                        <option>Surat</option>
                        <option>Pune</option>
                        <option>Jaipur</option>
                        <option>Lucknow</option>
                        <option>Kanpur</option>
                        <option>Nagpur</option>
                        <option>Indore</option>
                        <option>Thane</option>
                        <option>Bhopal</option>
                        <option>Coimbatore</option>
                        <option>Visakhapatnam</option>
                        <option>Patna</option>
                        <option>Vadodara</option>
                        <option>Ghaziabad</option>
                        <option>Ludhiana</option>
                        <option>Agra</option>
                        <option>Nashik</option>
                        <option>Gurgaon</option>
                    </select>
                   
                   
                   <br>
                   <input type="submit" name="submit" value="search" class="btn " class="searchbtn" style="margin-top:10%; margin-left:11%; background: #FF1493; color:white; width:200px;height:50px;">
                   </div>
                 </form>
               </div>
           </div>
       </div>
<div class="container display">
<div class="row">
   
   
    </div>
       </div>
       </div>
   </main>
</body>
</html>