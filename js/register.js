<script>
$(function () {
	$('form#Myform2').on('login', function (event) {
		$.ajax({
			type: 'post',
			url: 'register.php',
			data: $('form').serialize(),
			success: function (data) {
			  $("#data").html(data);
			}
		});
		event.preventDefault();
	})
});
</script>
