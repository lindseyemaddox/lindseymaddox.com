<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/_includes/head.php'); // HTTP head
?>    		
    		
	<title>Contact Lindsey Maddox | Web Developer</title>
	<meta name="description" content="Use this form to contact Lindsey Maddox about a new website!">

	<script src="/_scripts/jquery.maskedinput.js"></script>

</head>

<body>

<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/_includes/header.php'); // header and navigation
?>

<section id="contact">
    		
	<div class="form">

	    <?php
	        $name = $_REQUEST['name'] ;
	        $email = $_REQUEST['email'] ;
	        $phone = $_REQUEST['phone'] ;
	        $desc = $_REQUEST['desc'] ;
	        if (isset($_POST['submit'])) {
	          $to = 'lindseyemaddox@gmail.com';
	          $headers = "From: " . strip_tags($_POST['email']) . "\r\n";
	          $headers .= "Reply-To: ". strip_tags($_POST['email']) . "\r\n";
	          $headers .= "MIME-Version: 1.0\r\n";
	          $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
	          $message = '<html><body>';
	          $message .= 'Name: '.$name.'<br>';
	          $message .= 'Email: '.$email.'<br>';
	          $message .= 'Phone: '.$phone.'<br>';
	          $message .= 'Do you need a shiny new website? '.$desc.'<br>';
	          $message .= '</body></html>';
	          $subject = 'someone needs a shiny new website';

	    mail($to, $subject, $message, $headers);
	    echo "<div style='width: 100%; padding: 60px 0 80px; color: #000; text-align: center; font-size: 36px;'><label>Thanks for hollering. I'll be in touch ASAP!</label></div>";
	  }
	else
	  { echo "
	        <form method='post' action='".$_SERVER['SCRIPT_NAME']."'>
	        <div class='left'>
		        <label for='name'>Name</label><input type='text' required name='name' id='name' size='10'>
		        <label for='email'>Email</label><input type='text' required name='email' id='email' size='10'>
		        <label for='phone'>Phone</label><input type='text' name='phone' id='phone' size='10'>
	    	</div><!--left-->
	    	<div class='right'>
	    		<label for='desc'>Do you need a shiny new website?</label>
		        <textarea name='desc' id='desc' size='10'></textarea>
		        <button class='submit' type='submit' name='submit'>Holler</button>
			</div><!--right-->
	      </form>";
	      }
	    ?>

	</div><!--form-->

</section><!--portfolio-->

</div><!--content-->

<script type="text/javascript">
	jQuery(function($){
	  $("input[name='phone']").mask("(999) 999-9999");
	});
</script>

<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/_includes/footer.php'); // footer, close body and html
?>    		