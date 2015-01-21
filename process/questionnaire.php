<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/_includes/head.php'); // HTTP head
?>    		
    		
	<title>Lindsey Maddox | Website Questionnaire</title>
	<meta name="description" content="Use this form to contact Lindsey Maddox about a new website!">

	<script src="/_scripts/jquery.maskedinput.js"></script>

</head>

<body>

<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/_includes/header.php'); // header and navigation
?>

<section id="questionnaire">
    		
	<div class="form">

		<h3>Website Questionnaire</h3>

		<p>Answer the following questions with as much detail as possible. This questionnaire will help define the purpose, structure, and layout of your website, and your answers will determine how we cater the website to meet your unique needs.</p> 

	    <?php
	        $name = $_REQUEST['name'] ;
	        if (isset($_POST['submit'])) {
	          $to = 'lindseyemaddox@gmail.com';
	          $headers = "From: " . strip_tags($_POST['email']) . "\r\n";
	          $headers .= "Reply-To: ". strip_tags($_POST['email']) . "\r\n";
	          $headers .= "MIME-Version: 1.0\r\n";
	          $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
	          $message = '<html><body>';
	          $message .= 'Name: '.$name.'<br>';
	          if (isset($_POST['goals_branding'])) {
				    $message .= 'I want to focus on branding.<br>';
				} else {
			  }
	          if (isset($_POST['goals_inform'])) {
				    $message .= 'I want to inform visitors.<br>';
				} else {
			  }
	          if (isset($_POST['goals_ranking'])) {
				    $message .= 'I want to improve my ranking.<br>';
				} else {
			  }
	          if (isset($_POST['goals_entertain'])) {
				    $message .= 'I want to focus on entertaining.<br>';
				} else {
			  }
	          if (isset($_POST['goals_subscribers'])) {
				    $message .= 'I want to increase subscribers.<br>';
				} else {
			  }
	          if (isset($_POST['goals_visitors'])) {
				    $message .= 'I want to increase visitors.<br>';
				} else {
			  }
	          if (isset($_POST['goals_downloads'])) {
				    $message .= 'I want to increase downloads.<br>';
				} else {
			  }
	          if (isset($_POST['goals_other'])) {
				    $message .= 'I have other goals.<br>';
				} else {
			  }
	          $message .= 'Other Goals: '.$other_explanation.'<br>';
	          $message .= '</body></html>';
	          $subject = 'someone filled out a questionnaire';

	    mail($to, $subject, $message, $headers);
	    echo "<div style='width: 100%; padding: 60px 0 80px; color: #000; text-align: center; font-size: 36px;'><label> Thanks for filling out the questionnaire. I'll be in touch ASAP!</label></div>";
	  }
	else
	  { echo "
	        <form method='post' action='".$_SERVER['SCRIPT_NAME']."'>

	        <label for='name'>Name</label><input type='text' required name='name' id='name' size='10'>

	        <label for='goals'>select your top three goals for this website</label>
	        	<div class='three left'>
				    <div class='squaredThree'>
				    	<input type='hidden' name='foo' value='0' />
				      	<input type='checkbox' value='1' id='branding' name='goals_branding[]' />
				      	<label for='branding'>Branding</label>
				    </div>
				    <div class='squaredThree'>
				      	<input type='checkbox' value='inform' id='inform_visitors' name='goals_inform[]' />
				      	<label for='inform_visitors'>Inform Visitors</label>
				    </div>
				    <div class='squaredThree'>
				      	<input type='checkbox' value='improve' id='improve_ranking' name='goals_ranking[]' />
				      	<label for='improve_ranking'>Improve Ranking</label>
				    </div>
  				</div>
  				<div class='three center'>
				    <div class='squaredThree'>
				      	<input type='checkbox' value='branding' id='entertain' name='goals_entertain[]' />
				      	<label for='entertain'>Entertain</label>
				    </div>
				    <div class='squaredThree'>
				      	<input type='checkbox' value='subscribers' id='increase_subscribers' name='goals_subscribers[]' />
				      	<label for='increase_subscribers'>Increase Subscribers</label>
				    </div>
				    <div class='squaredThree'>
				      	<input type='checkbox' value='increase' id='increase_visitors' name='goals_visitors[]' />
				      	<label for='increase_visitors'>Increase Visitors</label>
				    </div>
  				</div>
  				<div class='three right'>
				    <div class='squaredThree'>
				      	<input type='checkbox' value='downloads' id='increase_downloads' name='goals_downloads[]' />
				      	<label for='increase_downloads'>Increase Downloads</label>
				    </div>
				    <div class='squaredThree no-marb'>
				      	<input type='checkbox' value='other' id='other' name='goals_other[]' />
				      	<label for='other'>Other</label>
				    </div>
			        <textarea name='other_explanation' id='other_explanation' size='10'>Please Explain</textarea>
  				</div>
	        <div class='left'>

		        <label for='color_scheme'>Do you use a specific color scheme?</label>

		        <div class='three left'>
				    <div class='squaredThree'>
				      	<input type='radio' value='yes' id='color_scheme_yes' name='color_scheme' />
				      	<label for='color_scheme_yes'>Yes</label>
				    </div>
				</div><!--three-->
				<div class='three center'>
				    <div class='squaredThree three right'>
				      	<input type='radio' value='no' id='color_scheme_no' name='color_scheme' />
				      	<label for='color_scheme_no'>No</label>
				    </div>
				</div><!--three-->

		        <label for='current_site'>Do you have a current website?</label>

		        <div class='three left'>
				    <div class='squaredThree'>
				      	<input type='radio' value='yes' id='current_site_yes' name='current_site' />
				      	<label for='current_site_yes'>Yes</label>
				    </div>
				</div><!--three-->
				<div class='three center'>
				    <div class='squaredThree three right'>
				      	<input type='radio' value='no' id='current_site_no' name='current_site' />
				      	<label for='current_site_no'>No</label>
				    </div>
				</div><!--three-->

	    		<label for='sites_you_like'>Please list three websites that you like.</label>
		        <textarea name='sites_you_like' id='sites_you_like' size='10'></textarea>



	    	</div><!--left-->

	    	<div class='right'>

		        <label for='background'>Do you prefer a light or a dark background?</label>

		        <div class='three left'>
				    <div class='squaredThree'>
				      	<input type='radio' value='yes' id='background_light' name='background' />
				      	<label for='background_light'>Light</label>
				    </div>
				</div><!--three-->
				<div class='three center'>
				    <div class='squaredThree three right'>
				      	<input type='radio' value='no' id='background_dark' name='background' />
				      	<label for='background_dark'>Dark</label>
				    </div>
				</div><!--three-->

		        <label for='images'>Do you have any images that can be used on the website?</label>

		        <div class='three left'>
				    <div class='squaredThree'>
				      	<input type='radio' value='yes' id='images_yes' name='images' />
				      	<label for='images_yes'>Yes</label>
				    </div>
				</div><!--three-->
				<div class='three center'>
				    <div class='squaredThree three right'>
				      	<input type='radio' value='no' id='images_no' name='images' />
				      	<label for='images_no'>No</label>
				    </div>
				</div><!--three-->

	    		<label for='features'>List any specific features or content you want included.</label>
		        <textarea name='features' id='features' size='10'></textarea>






		        <button class='submit' type='submit' name='submit'>I'm Done</button>

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