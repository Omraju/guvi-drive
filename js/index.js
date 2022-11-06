<script>
$(function () {
	$('form#Myform').on('login', function (event) {
		$.ajax({
			type: 'post',
			url: 'index.php',
			data: $('form').serialize(),
			success: function (data) {
			  $("#data").html(data);
			}
		});
		event.preventDefault();
	})
});
</script>