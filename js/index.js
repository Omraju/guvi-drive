<script>
$(function () {
	$('form#Myform1').on('login', function (event) {
		$.ajax({
			type: 'post',
			url: '/php/index.php',
			data: $('form').serialize(),
			success: function (data) {
			  console.log(data);
			}
		});
		event.preventDefault();
	})
});
</script>