	<script src="/_scripts/jquery.fancybox.js"></script>

	<script type="text/javascript">
		$(document).ready(function() {
			
			$('.fancybox').fancybox();

			$('.fancybox-buttons').fancybox({
				closeBtn  : true,

				helpers : {
					title : {
						type : 'inside'
					},
					buttons	: {}
				},

				afterLoad : function() {
					this.title = 'Step ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
				}
			});


		});
	</script>

</body>
</html>