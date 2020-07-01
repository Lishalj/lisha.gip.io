<?php
include("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
  <link rel="shortcut icon" href="https://www.jnujaipur.ac.in/img/favicon.jpg" type="" />
	
    <title>Visitor Entry</title>
    <style>
.leftbox
{
  float: left;
}
      .lebel2
      {
        text-align: left;
      }

        inline
    {
      text-align: center;
    display: inline;

    }
    .border1 {border-style: solid; border-color: green;}
    h1 {text-align: center;
      text-decoration-color: green;
      text-decoration-style: double;
      color: green;
      font-style: italic;
      }
      .image-margin {
		margin-left: 320px;
	}
    .image1-margin {
		margin-left:0x;
  background-color: #cccccc;

	}
    .image2-margin {
		margin-left:0x;
  background-color: #cccccc;
  margin-top: 200px;
	}


    </style>
<!--<script>
    function popup()
    {
      var con=document.form1.text1.value;
if (con==" ") 
{
 con=alert('Please input a value');
  return false;
}    
else{ con=alert('Form sumitted successfully...!');
return true;
    }
    }
</script>-->

</head>
<body>
 <header class="text-gray-700 body-font">
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
          <a href="index.html" class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
            <img class="object-cover object-center rounded" alt="project" src=" images/logo.PNG" height="70" width="60">
            <span class="ml-3 text-xl">Jaipur National University</span>
          </a>
          <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
            <a href="index.html" class="mr-5 hover:text-gray-900">Home</a>
             
            <a href="about us.html" class="mr-5 hover:text-gray-900">About Us</a>
                 <a href="feedbackform.php" class="mr-5 hover:text-gray-900">Feedback</a>
          </nav>
          <button class="inline-flex items-center bg-gray-200 border-0 py-1 px-3 focus:outline-none hover:bg-gray-300 rounded text-base mt-4 md:mt-0"><a href="https://www.jnujaipur.ac.in/" >Go-to main site</a>
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
              <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg>
          </button>
        </div>
      </header>
<hr>

     
      <section id="inline" style="text-align: center; -ms-flex-align: center;" class="text-gray-700 body-font">
        <div id="border1"  class="container mx-auto flex px-23 py-3 md:flex-row flex-col items-center border-green-500">
            <div class="lg:flex-grow md:w-full lg:pr-0 md:pr-0 flex flex-col md:items-middle md:text-center mb-5 md:mb-9 items-center text-center">
                     <section class="text-gray-700 body-font relative">
                        <div style="-ms-grid-row-align: start; float:left; float:left;" class="lg:max-w-lg lg:w-full md:w-full w-full">
                     
                    
                        <div id="border1"class="flex flex-col text-center w-full mb-12">
                        <h1 style="text-decoration-color: green;" class="sm:text-3xl text-2xl font-medium title-font mb-4 text-green-600"> Visitor Entry Application Form</h1>
                        <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Please fill the form to get entry in the JNU Campus</p>
                      </div>
                      <div class="p-300 x1:w-full md:w-full w-full">
                        <div class="h-full p-8 rounded-lg border-2 border-green-500 flex flex-col relative overflow-hidden">
                          <span class="bg-green-500 text-white px-8 py-1 tracking-widest text-xs absolute right-0 top-0 rounded-b">FORM</span>
              
                      <div class="lg:w-1/2 md:w-full mx-auto">
                       
                        <form  method="post" action="" onsubmit="required()" enctype="multipart/form-date"> 
                            <div class="flex flex-wrap inline -m-2">
                                  <span  style="display: inline;">
                                
                                <div class="p-2 w-full">
                            <input class="w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-green-500 text-base px-4 py-2" name="fname"  placeholder="First Name" type="text"  required/> &nbsp; <input class="w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-green-500 text-base px-4 py-2" name="lname" placeholder="Last Name" type="text"  required/> 
                          </div>
                        </span>
                          <div class="p-2 w-full">
                            <input class="w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-green-500 text-base px-4 py-2" name="email" placeholder="Email" type="email"  required>
                          </div>
                         
                          <div class="p-2 w-full">
                            <input class="w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-green-500 text-base px-4 py-2" name="mno" placeholder="Mobile No." type="text"  required>
                          </div>

                          <div class="p-2 w-full">
                            <label style="float: left;" for="campus">Gender</label><br>
                           <section class="w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-green-500 text-base px-4 py-2">
                            
                            <input type="radio" id="male" name="gender" value="male" required>
                            <label for="male">Male&nbsp;</label>&nbsp;&nbsp;&nbsp;
                            <input type="radio" id="female" name="gender" value="female"required>
                            <label for="female">Female</label>&nbsp;&nbsp;<br>
                            <input type="radio" id="other" name="gender" value="other" required>
                            <label for="other">Other</label> 
                          </section>
                          </div>
                          <div id="leftbox" class="p-2 w-4/2">
                        <label style="float: left;" for="campus" name="visit">Campus</label>
                           <select class="w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-green-500 text-base px-4 py-2" name="visit" id="visit">
                              
                           <option value="SADTM Campus" >SADTM</option>
                         <option value="MAIN Campus" >Main Campus</option>
                         <option value="SIILAS Campus" >SIILAS</option>
                         
                                </select>
                          </div>
                        
                        <span>   
                          <div id="leftbox"class="p-2 w-4/2">
      <label id=lebel2; style="float: left;"  for="Visit">Purpose to Visit</label>
      <select class="w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-green-500 text-base px-4 py-2" name="purpose" id="Visit" >
      <option value="Admission" >Admission</option>
      <option value="Meeting" >Meeting</option>
          <option value="Interview" >Interview</option>
          <option value="Event" >Event</option>
          <option value="Library" >Library</option>
          <option value="fee Submission" >Fee Submission</option>
      </select>
</div>
</span>
  <div id="leftbox" class="p-2 w-full">
        <label class=lebel2; style="float: left;" for="date">Date:</label>
      <input class="w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-green-600 text-base px-4 py-2" type="datetime-local" id="date" name="edate"  required>
                          </div>
                          <div class="p-2 w-full">
                            <textarea class="w-full bg-gray-100 rounded border border-gray-400 focus:outline-none h-48 focus:border-green-500 text-base px-4 py-2 resize-none block" placeholder="Address" name="addr" required></textarea>
                          </div>
                          <div class="p-2 w-full">
                      <input  class="btn btn-primary  inline-flex text-white bg-green-500 border-0 py-2 px-4 focus:outline-none hover:bg-green-600 rounded text-lg" type="submit" name="submit" value="Submit"> 
</div>
                        </form>
                      </div>
                        </div>
   
                    </div>
                  </section>
      <hr>
            </div>
            </div>
            </section>
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
</body>
</html>


<?php

 if(isset($_POST['submit']))
{
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$mno = $_POST['mno'];
$gender =$_POST['gender'];
$visit= $_POST['visit'];
$purpose= $_POST['purpose'];
$edate = $_POST['edate'];
$addr = $_POST['addr'];


$insert_query = "INSERT INTO registration(fname,lname,email,mno,gender,visit,purpose,edate,addr) 
                      VALUES ('$fname','$lname','$email','$mno','$gender','$visit','$purpose','$edate','$addr')";
$result = mysqli_query($conn,$insert_query); 
if($result)
{

  echo "<script>window.open('campus.php','_self')</script>";
}
else
{
  //header("location:visitors.php");
  echo "submiton fail";
}
    }

?>
