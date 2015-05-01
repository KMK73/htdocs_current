$( document ).ready(function() {

	$( "#dancers" ).change(function() {
		var foodurl = "http://localhost/dancing/dancer_food.php?id=" + $(this).val();
		$(".profile").hide();
		
		if ( $(this).val() == 1) {
				$("#dancer_profile_britney").show();
		}

		if ( $(this).val() == 2) {
				$("#dancer_profile_sly").show();
		}


		$.getJSON( foodurl, function( data ) {
			$("#spot").empty();
			$("#spot").append('<select id="food" name="food"></select>')
			for (var i = 0; i < data.length; i++) {
				$('#food').append("<option value='"+data[i].id+"'>" + data[i].food + "</option>");
			}
		});

	});


});
