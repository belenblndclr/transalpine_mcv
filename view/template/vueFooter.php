	<?php if($page == "carte"): ?>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script> <!-- Google Maps -->
		<script src="http://www.google.com/jsapi"></script>
		<script src="common/js/points.json"></script>
		<script type="text/javascript" src="common/js/gmap/markerclusterer.js"></script>
		<script src="common/js/maps.js"></script>
	<?php endif; ?>
	
	<?php if($page == "moderation"): ?>	   
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
		<script>
			if (!window.jQuery) {
				document.write('<script src="js/jquery-1.9.1.min.js"><\/script>');
			}
		</script>
		<script src="js/footable.js?v=2-0-1" type="text/javascript"></script>
		<script src="js/footable.filter.js?v=2-0-1" type="text/javascript"></script>
		<script src="js/footable.paginate.js?v=2-0-1" type="text/javascript"></script>
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
	<script type="text/javascript">
		$(function() {

			var container = $("#container"),
				pagination = $("#pagination");

			function setLazyLoad () {
				container.find("img").lazyload({
					event : "turnPage",
					effect : "fadeIn"
				});
			};

			function setPagination () {
				pagination.jPages({
					containerID : "container",
					perPage : 1,
					direction : "auto",
					animation : false,
					previous : "?",
					next : "?",
					callback : function( pages, items ){
						items.showing.find("img").trigger("turnPage");
						items.oncoming.find("img").trigger("turnPage");
					}
				});
			};

			function destroyPagination () {
				pagination.jPages("destroy");
			};

			setLazyLoad();
			setPagination();

			$.filtrify("container", "placeHolder", {
				block : "data-original",
				callback : function() {
					destroyPagination();
					setPagination();
				}
			});


		});
		</script>
	<?php endif; ?>
	
	<?php if($page == "aide"): ?>
		
	<?php endif; ?>
	
	<?php if($page == "apropos"): ?>
		
	<?php endif; ?>
	
	
	
  </body>
</html>