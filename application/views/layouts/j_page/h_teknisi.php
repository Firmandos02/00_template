<!-- START : EXT Datatable -->
<?php $this->load->view('layouts/ext/datatable.php');
?>
<!-- END : EXT Datatable -->

<!-- START : EXT FULLCALENDAR JS -->
<?php $this->load->view('layouts/ext/calendar.php');
?>
<!-- END : EXT FULLCALENDAR JS -->


<script>
	$(document).ready(function() {
		var defaultEvents = '<?php echo base_url('Cdash/get_cal_pm'); ?>';
		$('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay'
			},
			events: defaultEvents,
			eventRender: function(event, element) {
				element.attr('data-toggle', 'tooltip');
				element.attr('title', event.title);
				$(element).tooltip({
					container: 'body',
					placement: 'top'
				});
			},

		});
	});
</script>
