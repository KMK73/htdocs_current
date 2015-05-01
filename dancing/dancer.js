$( document ).ready(function() {

	$( "#dancers" ).change(function() {
		var foodurl = "http://localhost/dancing/dancer_food.php?id=" + $(this).val();
		$.getJSON( foodurl, function( data ) {
			$("#spot").empty();
			$("#spot").append('<select id="food" name="food"></select>')
			for (var i = 0; i < data.length; i++) {
				$('#food').append("<option value='"+data[i].id+"'>" + data[i].food + "</option>");
			}
		});
	});


});
