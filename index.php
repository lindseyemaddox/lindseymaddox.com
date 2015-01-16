<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/_includes/head.php'); // HTTP head
?>    		
    		
	<title>Lindsey Maddox | Web Developer</title>
	<meta name="description" content="web developer, nashville, creative, front end, html, css, web design, web development">

</head>

<body>

<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/_includes/header.php'); // header and navigation
?>

<section id="portfolio">
    
  <div id="options" class="clearfix">

      <h3>Portfolio</h3>

      <ul id="filters" class="option-set clearfix" data-option-key="filter">
        <li><a href="#filter" data-option-value="*" class="selected">show all</a></li>
        <li><a href="#filter" data-option-value=".fluid">Fluid Responsive</a></li>
        <li><a href="#filter" data-option-value=".breakpoint">Breakpoint Responsive</a></li>
        <li><a href="#filter" data-option-value=".build">Build</a></li>
        <li><a href="#filter" data-option-value=".design">Design</a></li>
        <li><a href="#filter" data-option-value=".maintenance">Maintenance</a></li>
      </ul>

  </div> <!-- #options -->

 	<div id="container" class="clearfix">
    
	    <a class="element-item design">
	    	<img src="/_img/angry-eagle-lodge-and-outfitters.jpg" alt="Angry Eagle Lodge & Outfitters website">
	    </a><!--element-->

	    <a href="http://www.2dimes.com/" target="_blank" class="element-item build fluid production">
	    	<img src="/_img/paradigm.jpg" alt="Paradigm website">
	    </a><!--element-->	    

	    <a href="http://meetidesign.com/" target="_blank" class="element-item build fluid production">
	    	<img src="/_img/meet-idesign.jpg" alt="iDesign, Inc. website">
	    </a><!--element-->

	    <a href="http://www.connico.com/" target="_blank" class="element-item build production">
	    	<img src="/_img/connico.jpg" alt="Connico website">
	    </a><!--element-->

	    <!--
<a href="http://www.tsumensbasketball.com.php53-14.dfw1-1.websitetestlink.com/" target="_blank" class="element-item build fluid development">
	    	<img src="/_img/tsu-basketball.jpg" alt="TSU Men's Basketball website">
	    </a>
--><!--element-->

	    <a href="http://www.greystonebd.com/" target="_blank" class="element-item fluid build production">
	    	<img src="/_img/greystone.jpg" alt="Greystone website">
	    </a><!--element-->

	    <a href="http://neighborhoodhealthtn.org" target="_blank" class="element-item build fluid production">
	    	<img src="/_img/neighborhood-health.jpg" alt="Neighborhood Health website">
	    </a><!--element-->

	    <a href="http://roofingbymidsouth.com/" target="_blank" class="element-item build fluid production">
	    	<img src="/_img/midsouth-construction.jpg" alt="MidSouth Construction website">
	    </a><!--element-->

	    <a href="http://www.sharedhospital.com/" target="_blank" class="element-item build fluid production">
	    	<img src="/_img/shared-hospital.jpg" alt="Shared Hospital Services website">
	    </a><!--element-->	    

	    <!--
<a href="http://www.specialolympicstn-test.com.php53-10.dfw1-1.websitetestlink.com/" target="_blank" class="element-item build fluid development">
	    	<img src="/_img/special-olympics.jpg" alt="Special Olympics TN website">
	    </a>
--><!--element-->	    

	    <a href="http://www.tnrmt.com/" target="_blank" class="element-item build fluid production">
	    	<img src="/_img/tennessee-risk-management-trust.jpg" alt="Tennessee Risk Management Trust website">
	    </a><!--element-->	    

	    <a href="http://theeastnashvillian.com/" target="_blank" class="element-item build fluid production">
	    	<img src="/_img/the-east-nashvillian.jpg" alt="The East Nashvillian website">
	    </a><!--element-->	    

	    <a href="http://thesmartpops.com/" target="_blank" class="element-item build fluid production">
	    	<img src="/_img/the-smart-pops.jpg" alt="Smart Pops website">
	    </a><!--element-->	    

	    <a href="http://newtractorpackages.com/" target="_blank" class="element-item fluid design build production">
	    	<img src="/_img/cirrus-outdoor-power-equipment.jpg" alt="Cirrus Outdoor Power Equipment website">
	    </a><!--element-->

	    <a href="http://appletonlearning.com/" target="_blank" class="element-item fluid build production">
	    	<img src="/_img/appleton.jpg" alt="Appleton Learning website">
	    </a><!--element-->

	    <a href="http://betterhearingbyphonak.com/" target="_blank" class="element-item fluid build production">
	    	<img src="/_img/better-hearing-by-phonak.jpg" alt="Better Hearing by Phonak website">
	    </a><!--element-->

	    <a href="http://www.beyondtheboxproductions.com/" target="_blank" class="element-item fluid build production">
	    	<img src="/_img/beyond-the-box.jpg" alt="Beyond the Box Productions website">
	    </a><!--element-->

	    <a href="http://www.beckfortn.com/" target="_blank" class="element-item build production">
	    	<img src="/_img/bill-beck.jpg" alt="Bill Beck campaign website">
	    </a><!--element-->

	    <a class="element-item breakpoint design build">
	    	<img src="/_img/coffee-lunch.jpg" alt="Coffee, Lunch. website">
	    </a><!--element-->

	    <a href="http://www.connecthearing.com/" target="_blank" class="element-item production breakpoint maintenance">
	    	<img src="/_img/connect-hearing.jpg" alt="Connect Hearing website">
	    </a><!--element-->

	    <a href="http://www.covenantcap.com/" target="_blank" class="element-item breakpoint build production">
	    	<img src="/_img/covenant-capital-management.jpg" alt="Covenant Capital Management website">
	    </a><!--element-->

	    <!--
<a href="http://www.greenapplestrategy-test.com.php53-14.dfw1-1.websitetestlink.com/" target="_blank" class="element-item fluid build development">
	    	<img src="/_img/green-apple-strategy.jpg" alt="Green Apple Strategy website">
	    </a>
--><!--element-->

	    <a href="http://www.hearingplanet.com/" target="_blank" class="element-item maintenance breakpoint production">
	    	<img src="/_img/hearing-planet.jpg" alt="Hearing Planet website">
	    </a><!--element-->

	    <a href="http://www.johnrayfortennessee.com/" target="_blank" class="element-item build fluid production">
	    	<img src="/_img/john-ray-clemmons.jpg" alt="John Ray Clemmons website">
	    </a><!--element-->

	    <a href="http://landonlackeylaw.com/" target="_blank" class="element-item build fluid production">
	    	<img src="/_img/landon-lackey.jpg" alt="Landon Lackey website">
	    </a><!--element-->

	    <a href="http://www.roseconstruction.com/" target="_blank" class="element-item build production">
	    	<img src="/_img/rose-construction.jpg" alt="Rose Construction website">
	    </a><!--element-->	    

	    <a href="http://www.veteransdisabilitybenefits.net/" target="_blank" class="element-item build breakpoint production">
	    	<img src="/_img/veterans-disability-benefits.jpg" alt="Veterans Disability Benefits website">
	    </a><!--element-->	    

 	</div> <!-- #container -->
  
	<div class="clear"></div>	

</section><!--portfolio-->

</div><!--content-->

<script>
$('#container').isotope({ layoutMode : 'fitRows' });

    $(function(){
      
      var $container = $('#container');

      $container.isotope({
        itemSelector : '.element'
      });
      
      
      var $optionSets = $('#options .option-set'),
          $optionLinks = $optionSets.find('a');

      $optionLinks.click(function(){
        var $this = $(this);
        // don't proceed if already selected
        if ( $this.hasClass('selected') ) {
          return false;
        }
        var $optionSet = $this.parents('.option-set');
        $optionSet.find('.selected').removeClass('selected');
        $this.addClass('selected');
  
        // make option object dynamically, i.e. { filter: '.my-filter-class' }
        var options = {},
            key = $optionSet.attr('data-option-key'),
            value = $this.attr('data-option-value');
        // parse 'false' as false boolean
        value = value === 'false' ? false : value;
        options[ key ] = value;
        if ( key === 'layoutMode' && typeof changeLayoutMode === 'function' ) {
          // changes in layout modes need extra logic
          changeLayoutMode( $this, options )
        } else {
          // otherwise, apply new options
          $container.isotope( options );
        }
        
        return false;
      });

      
    });
  
    $(function(){
      
      var $container = $('#container');
      
      $container.isotope({
        itemSelector : '.element',
        getSortData : {
          symbol : function( $elem ) {
            return $elem.attr('data-symbol');
          },
          category : function( $elem ) {
            return $elem.attr('data-category');
          },
          number : function( $elem ) {
            return parseInt( $elem.find('.number').text(), 10 );
          },
          weight : function( $elem ) {
            return parseFloat( $elem.find('.weight').text().replace( /[\(\)]/g, '') );
          },
          name : function ( $elem ) {
            return $elem.find('.name').text();
          }
        }
      });
      
      
      var $optionSets = $('#options .option-set'),
          $optionLinks = $optionSets.find('a');

      $optionLinks.click(function(){
        var $this = $(this);
        // don't proceed if already selected
        if ( $this.hasClass('selected') ) {
          return false;
        }
        var $optionSet = $this.parents('.option-set');
        $optionSet.find('.selected').removeClass('selected');
        $this.addClass('selected');
  
        // make option object dynamically, i.e. { filter: '.my-filter-class' }
        var options = {},
            key = $optionSet.attr('data-option-key'),
            value = $this.attr('data-option-value');
        // parse 'false' as false boolean
        value = value === 'false' ? false : value;
        options[ key ] = value;
        if ( key === 'layoutMode' && typeof changeLayoutMode === 'function' ) {
          // changes in layout modes need extra logic
          changeLayoutMode( $this, options )
        } else {
          // otherwise, apply new options
          $container.isotope( options );
        }
        
        return false;
      });

      
    });
</script>


<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/_includes/footer.php'); // footer, close body and html
?>    		