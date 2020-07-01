<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    
	<link rel="shortcut icon" href="https://www.jnujaipur.ac.in/img/favicon.jpg" type="" />
	
    <title>JNU Jaipur</title>
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
 
</head>
<body>
  <header class="text-gray-700 body-font">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
      <a href="index.html" class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
        <img class="object-cover object-center rounded" alt="project" src=" images/logo.png" height="70" width="60">
        <span class="ml-3 text-xl">Jaipur National University</span>
      </a>
      <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
        <a href="" class="mr-5 hover:text-gray-900">Home</a>
        <a href="viewAllEntry.php" class="mr-5 hover:text-gray-900">View Entry</a>
             <a href="UserFeedback.php" class="mr-5 hover:text-gray-900">View Feedback</a>
      </nav>
    </div>
  </header>
  <hr>
  <section class="text-gray-700 body-font">

    <div id = "rightbox"> 
      <form action="signout.php" class="inline">
      <button class="inline-flex text-white bg-green-500 border-0 py-2 px-6 focus:outline-none hover:bg-green-600 rounded text-lg" >Sign-out</button></form>
      <form action="addadmin.php" class="inline"> 
      <button class="ml-4 inline-flex text-gray-700 bg-gray-200 border-0 py-2 px-6 focus:outline-none hover:bg-gray-300 rounded text-lg" >Add Admin</button></form>
    </div>
  </section>
  <hr>

    