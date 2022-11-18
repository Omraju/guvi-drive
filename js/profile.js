<script>
$(function () {
	$('form#Myform1').on('login', function (event) {
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
