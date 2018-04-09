/* ============================================================
 * Form Layouts
 * Form layout options available in Pages
 * For DEMO purposes only. Extract what you need.
 * ============================================================ */
(function ($) {

	'use strict';

	$(document).ready(function () {

		// Validation method for budget, profit, revenue fields
		$.validator.addMethod("usd", function (value, element) {
			return this.optional(element) || /^(\$?)(\d{1,3}(\,\d{3})*|(\d+))(\.\d{2})?$/.test(value);
		}, "Please specify a valid dollar amount");

		$('#start-date, #end-date').datepicker();

		$('#form-personal').validate();
		$("#form-project").validate();
		$("#form-work").validate();

		$('#form-personal').submit(function (e) {
			e.preventDefault()
		})
		$('#form-project').submit(function (e) {
			e.preventDefault()
		})
		$('#form-work').submit(function (e) {
			e.preventDefault()
		})

		$('#daterangepicker').daterangepicker({
			timePicker: true,
			timePickerIncrement: 30,
			format: 'YYYY-MM-DD HH:mm'
		}, function (start, end, label) {
			console.log(start.toISOString(), end.toISOString(), label);
		});

		$('#summernote').summernote({
			height: 200,
			onfocus: function (e) {
				$('body').addClass('overlay-disabled');
			},
			onblur: function (e) {
        $('body').removeClass('overlay-disabled');
        
        $("#deskripsi").val($("#summernote").code());
      }
		});

	});

})(window.jQuery);
