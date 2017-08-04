<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Joshua Blakley</title>
    <link rel="stylesheet" href="style/css/style.css" />
    <link rel="stylesheet" href="style/css/text.css" />
    <link rel="stylesheet" href="style/css/960.css" />
    <link rel="stylesheet" href="style/css/menu.css" />
    <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="style/js/menu.js"></script>

</head>
<body>
  <div align="center" id="mainWrapper" class="container_12">
  
    <?php include('_header.php') ?>

    <div id="Content" class="grid_12 pull_12">
        <div id="panel" class="grid_12 alpha">
    	  <div class="text">
	
		      <h3>Contact &nbsp;&nbsp;
            <a href="//www.linkedin.com/pub/joshua-blakley/54/b18/369" style="text-decoration:none;">
            <img src="style/img/linked-in.gif" alt="LinkedIn" style="border:0;width:32px;height:32px;"/></a>
            <a href="//plus.google.com/117468195813393969865?prsrc=3" rel="publisher" style="text-decoration:none;">
            <img src="//ssl.gstatic.com/images/icons/gplus-32.png" alt="Google+" style="border:0;width:32px;height:32px;"/></a>
            <a href="//www.facebook.com/joshua.blakley" style="text-decoration:none;">
            <img src="style/img/facebook.png" alt="Facebook" style="border:0;width:32px;height:32px;"/></a>
		      </h3>
  
		      <?php
      			function spamcheck($field)
			      {
			        //filter_var() sanitizes the e-mail
      			  //address using FILTER_SANITIZE_EMAIL
			        $field=filter_var($field, FILTER_SANITIZE_EMAIL);

      			  //filter_var() validates the e-mail
			        //address using FILTER_VALIDATE_EMAIL
			        if(filter_var($field, FILTER_VALIDATE_EMAIL)) return TRUE;
			        else return FALSE;
			      }
			  
      			function displayForm()
			      {
      			  echo "<form action='contact.php' method='post'>
			        <p>Your name:  <input type='text' size='50' name='name'/></p>
      			  <p>Your e-mail:<input type='text' size='50' name='email'/></p>
			        <p>Message:</p><br/>
      			  <textarea rows='10' cols='50' spellcheck='1' name='message'></textarea>
			        <br/>
      			  <input type='submit' value='Send'>
			        <input type='reset' value='Clear'>
      			  </form>";
			      }

			      if (isset($_REQUEST['email'])){ 
              //if "email" is filled out, proceed

			        //check if the email address is invalid
			        $mailcheck = spamcheck($_REQUEST['email']);
			        if ($mailcheck==FALSE){
				        echo "<script language='javascript' type='text/javascript'>alert('Invalid Input. Please, try again...');</script>";
				        displayForm();
				      }else{//send email
				        $email = $_REQUEST['email'] ;
				        $subject = 'Resume contact - ' . $_REQUEST['name'] ;
				        $message = $_REQUEST['message'] ;
				        mail("jblakley89@gmail.com", "Subject: $subject", $message, "From: $email" );
				        echo "<p>Thank you, Your message has been sent, and will be reviewed at my next opportunity.</p>";
				      }
			      }else{//if "email" is not filled out, display the form
			        displayForm();
			      }
		      ?>	
		
    	  </div>
		</div>
	</div>
	<div class="clear"></div>

    <?php include('_footer.php') ?>

  </div>
</body>
</html>
