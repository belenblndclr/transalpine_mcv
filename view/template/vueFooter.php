	<?php if($page == "carte"): ?>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script> <!-- Google Maps -->
		<script src="http://www.google.com/jsapi"></script>
		<script src="common/js/points.json"></script>
		<script type="text/javascript" src="common/js/gmap/markerclusterer.js"></script>
		<script src="common/js/maps.js"></script>
		
<!--	<script src="common/js/slider/util.js"></script>
	<script src="common/js/slider/ion.rangeSlider.js"></script>
	<script src="common/js/slider/ion.rangeSlider.min.js"></script>
		-->
		<script>		
		$( "#ouv" ).click(function() {
			$( ".menu" ).animate({ "left": "0" }, "slow" );
		});
		
		$( "#miouv" ).click(function() {
			$( ".menu" ).animate({ "left": "-15em" }, "slow" );
		});
		
		$( "#ferm" ).click(function(){
			$( ".menu" ).animate({ "left": "-25em" }, "slow" );
		});
	</script>
	
<!--	<script>
		$("#siecle").ionRangeSlider({
			min: 8,                        // min value
			max: 15,                       // max value
			from: 10,                       // overwrite default FROM setting
			to: 11	,                         // overwrite default TO setting
			type: "double",                 // slider type
			step: 1,                       // slider step
			postfix: "ème",             // postfix text
			hasGrid: false,                  // enable grid
			hideMinMax: false,               // hide Min and Max fields
			hideFromTo: true,               // hide From and To fields
			prettify: false,                 // separate large numbers with space, eg. 10 000
			disable: false,                 // disable the slider
			onChange: function(obj){        // callback, is called on every change
				console.log(obj);
			},
			onFinish: function(obj){        // callback, is called once, after slider finished it's work
				console.log(obj);
			}
		});
	</script>-->
	<?php endif; ?>
	
	<?php if($page == "moderation"): ?>	   
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
		<script type="text/javascript">
			if (!window.jQuery) {
				document.write('<script src="common/js/jquery-1.9.1.min.js"><\/script>');
			}
		</script>
		<script src="common/js/footable/footable.js?v=2-0-1" type="text/javascript"></script>
		<script src="common/js/footable/footable.filter.js?v=2-0-1" type="text/javascript"></script>
		<script src="common/js/footable/footable.paginate.js?v=2-0-1" type="text/javascript"></script>
		<script type="text/javascript">
			$(function () {
				$('table').footable().bind({
					'footable_filtering': function (e) {
						var selected = $('.filter-status').find(':selected').text();
						if (selected && selected.length > 0) {
							e.filter += (e.filter && e.filter.length > 0) ? ' ' + selected : selected;
							e.clear = !e.filter;
						}
					},
					'footable_filtered': function() {
						var count = $('table.demo tbody tr:not(.footable-filtered)').length;
						$('.row-count').html(count + ' rows found');
					}
				});

				$('.clear-filter').click(function (e) {
					e.preventDefault();
					$('.filter-status').val('');
					$('table.demo').trigger('footable_clear_filter');
					$('.row-count').html('');
				});

				$('.filter-status').change(function (e) {
					e.preventDefault();
					$('table.demo').data('footable-filter').filter( $('#filter').val() );
				});
			});
		</script>
	<?php endif; ?>
	
	<?php if($page == "admin"): ?>	   
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
		<script type="text/javascript">
			if (!window.jQuery) {
				document.write('<script src="common/js/jquery-1.9.1.min.js"><\/script>');
			}
		</script>
		<script src="common/js/footable/footable.js?v=2-0-1" type="text/javascript"></script>
    <script src="common/js/footable/footable.sort.js?v=2-0-1" type="text/javascript"></script>
    <script src="common/js/footable/footable.filter.js?v=2-0-1" type="text/javascript"></script>
    <script src="common/js/footable/footable.paginate.js?v=2-0-1" type="text/javascript"></script>
    <script src="common/js/footable/bootstrap-tab.js" type="text/javascript"></script>
    <script src="common/js/footable/demos.js" type="text/javascript"></script>
		<script type="text/javascript">
			 $(function () {
				$('table').footable().bind({
					'footable_filtering': function (e) {
						var selected = $('.filter-status').find(':selected').text();
						if (selected && selected.length > 0) {
							e.filter += (e.filter && e.filter.length > 0) ? ' ' + selected : selected;
							e.clear = !e.filter;
						}
					},
					'footable_filtered': function() {
						var count = $('table.demo tbody tr:not(.footable-filtered)').length;
						$('.row-count').html(count + ' rows found');
					}
				});

				$('.clear-filter').click(function (e) {
					e.preventDefault();
					$('.filter-status').val('');
					$('table.demo').trigger('footable_clear_filter');
					$('.row-count').html('');
				});

				$('.filter-status').change(function (e) {
					e.preventDefault();
					$('table.demo').data('footable-filter').filter( $('#filter').val() );
				});
			});
		</script>
	<?php endif; ?>

	
	<?php if($page == "revues"): ?>
		
	<?php endif; ?>
	
	<?php if($page == "aide"): ?>
		
	<?php endif; ?>
	
	<?php if($page == "apropos"): ?>
		
	<?php endif; ?>
	
	
	
  </body>
</html>