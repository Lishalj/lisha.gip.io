
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>JSP Page</title>
       
        <link href="Css/Kfms_style.css" rel="stylesheet" type="text/css"/>
   
    </head>
    <body>
        
        <div style="width: 50%; margin-left: 25%; margin-top: 5%">
            <h1>Reset Password Form</h1>
            <form action="AdminServlet" method="post">
                <input  class="field" type="password" name="pwd" required="" placeholder="Eneter new password to reset"/>
                 <input  class="field" type="password" name="pwd" required="" placeholder="conform your password"/>
                <input type="submit" value="Reset" name="opn"/>
            </form>
        </div>

    </body>
</html>
