$(document).ready(function () {
	/*$('.reqlecture').click(function(e){
		e.preventDefault();
		
	});*/

	$('.form-4').submit(function (e) {

		var data = new FormData($(this)[0]);

		e.preventDefault();
		$(this).find("input[type=submit]:focus").val('Requesting...');
		var clickedbtn = $(this).find("input[type=submit]:focus");
		setTimeout(function () {
			$.ajax({
				data: data,
				type: 'post',
				dataType: 'json',
				url: 'allocation_mothers.php',
				contentType: false,
				cache: false,
				processData: false,
				success: function (outputData) {
					if (outputData == 'true') {
						clickedbtn.val('Request Sent');
						clickedbtn.attr('disabled', 'disabled');
					} else {
						clickedbtn.val('Error requesting');
						clickedbtn.css('color', '#C2000D');
						setTimeout(function () {
							clickedbtn.val('Request');
							clickedbtn.css('color', '');
						}, 1000)
					}
				}
			});
		}, 1000);
	});
});