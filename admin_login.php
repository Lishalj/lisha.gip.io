<?php
session_start();
include("config.php");
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
  <link rel="shortcut icon" href="https://www.jnujaipur.ac.in/img/favicon.jpg" type="" />
    <title>Admin Login</title>
    <style>
        h1 {
          text-decoration-color: green;
       text-decoration-style: double;
       color: green;
       font-style: italic;
       }
       #rightbox{ 
                 float:right; 
       }
     </style>
       <header class="text-greem-500 body-font">
            <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
              <a href="index.html" class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
                <img class="object-cover object-center rounded" alt="" src="images/logo.png" height="70" width="60">
                <span class="ml-3 text-xl">Jaipur National University</span>
              </a>
              <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
                <a href="index.html" class="mr-5 hover:text-gray-900">Home</a>
                 
                <a href="about us.html" class="mr-5 hover:text-gray-900">About Us</a>
                     <a href="feedbackform.php" class="mr-5 hover:text-gray-900">Feedback</a>
              </nav>
               <button  class="inline-flex items-center bg-gray-200 border-0 py-1 px-3 focus:outline-none hover:bg-gray-300 rounded text-base mt-4 md:mt-0"> <a href="https://www.jnujaipur.ac.in/" >Go-to main site</a>
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
                  <path d="M5 12h14M12 5l7 7-7 7"></path>
                </svg>
              </a></button>
            </div>
        </header>
    
          <hr>
          <style>
              .lebel1
              {
                 text-align:center;
    vertical-align:middle; 
    display:table-cell;
    
              }
          </style>
</head>
<body>
     
    <section class="text-gray-700 body-font">
        <div class="container px-10 py-10 mx-auto flex flex-wrap items-center">
         
      <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
        <img class="object-cover object-center rounded" alt="project" src=" images/jnumain.jpg" height="720" width="600">
      </div>
      <div class="lg:w-2/6 md:w-1/2 bg-gray-200 rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0">
            <h2 class="text-gray-900 text-lg font-medium title-font mb-5">Sign in</h2>
             <form method="POST" action="">
            <input class="bg-white rounded border border-gray-400 focus:outline-none focus:border-green-500 text-base px-4 py-2 mb-4" placeholder="Username" type="text"  name=" username"required>
            <input class="bg-white rounded border border-gray-400 focus:outline-none focus:border-green-500 text-base px-4 py-2 mb-4" placeholder="Password" type="password"  name="password" required>
            <br>
            <input  class="field  inline-flex text-white bg-green-500 border-0 py-2 px-6 focus:outline-none hover:bg-green-600 rounded text-lg " name="submit" type="submit" value="Log in">
          <br>
          </form>
           <p style="text-align: right; color: green;"><u><a href="https://www.w3schools.com/">Forget Password</a></u></p>
            <p class="text-xs text-gray-500 mt-3">Sign in for visitor details and many more.</p>
          </div>
        </div>
    </form>
      </section>
</body>

<hr>
<footer class="text-gray-700 body-font">
    <div class="container px-5 py-10 mx-auto flex md:items-center lg:items-start md:flex-row md:flex-no-wrap flex-wrap flex-col">
      <div class="w-64 flex-shrink-0 md:mx-0 mx-auto text-center md:text-left">
        <a class="flex title-font font-medium items-center text-green-500 mb-4 md:mb-0">
                        <span class="ml-3 text-xl">Jaipur National University</span>
          </a>    
    </div>
      <div class="flex-grow flex flex-wrap md:pl-10 -mb-10 md:mt-0 mt-0 md:text-left text-center">
        <div class="lg:w-1/2 md:w-1/2 w-full px-4">
          <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-4">Address</h2>
          <p>Jaipur-Agra Bypass</p>
          <p>Near New RTO office </p>
          <p>Jagatpura, Jaipur-302017 </p>   <br>                    
  
        </div>
   <br>
        <div class="lg:w-1/2 md:w-1/2 w-full px-4">
            <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">Contact Us</h2>
           <p>Toll Free No.: 1800-102-1900</p>
           <p>Phone: 9314288082</p>
            <p>E-Mail: info@jnujaipur.ac.in </p>



          </div>
             </div>
    </div>
    <div class="bg-gray-200">
      <div class="container mx-auto py-10 px-10 flex flex-wrap flex-col sm:flex-row">
        <p class="text-gray-700 text-sm text-center sm:text-left">Made by ALS |© 2020 Jaipur National University. All Rights Reserved.
          <a href="" rel="noopener noreferrer" class="text-gray-600 ml-1" target="_blank"></a>
        </p>
        <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
            <p class="text-sm text-gray-800 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-500 sm:py-0 sm:mt-0 mt-0" class="text-gray-700 body-font" style="text-align: center; color: green;"> Follow us on: </p> 
            <a target="_blank" href="https://www.facebook.com/jaipurnationaluniv" class="text-gray-500">
              <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
              </svg>
            </a>
            <a target="_blank" href="https://twitter.com/jaipurjnu" class="ml-3 text-gray-500">
              <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
              </svg>
            </a>
            <a target="_blank" href="https://www.instagram.com/jnujaipuruniversity/" class="ml-3 text-gray-500">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
              </svg>
            </a>
            <a target="_blank" href="https://www.linkedin.com/school/jaipurnationaluniversity/" class="ml-3 text-gray-500">
              <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
                <circle cx="4" cy="4" r="2" stroke="none"></circle>
              </svg>
            </a>
         
          </span>
      </div>
    </div>
  </footer>

<?php
if(isset($_POST['submit']))
{
    $adminusername = $_POST['username'];
    $adminpass = $_POST['password'];

   $sel_admin = "select * from admin where username='$adminusername' and pass='$adminpass'";
     $result = mysqli_query($conn,$sel_admin);
     // print_r($sel_admin);die();
    $count = mysqli_num_rows($result);
    if($count>0)
    {
        $_SESSION['admin_email']= $adminusername;
        echo "<script>window.open('adminpanel.php','_self')</script>";
    }
    else
    {
        echo "!!check your username/password!!,login fail";
    }

}

?>