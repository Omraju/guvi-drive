<script>
$(function () {
	$('form#Myform').on('login', function (event) {
		$.ajax({
			type: 'post',
			url: 'profile.php',
			data: $('form').serialize(),
			success: function (data) {
			  $("#data").html(data);
			}
		});
		event.preventDefault();
	})
});
</script>