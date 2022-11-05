<script>
$(function () {
$('form#Myform1').on('submit', function (event) {
$.ajax({
type: 'post',
url: 'guvi-drive/php/login.php',
data: $('form').serialize(),
success: function (data) {
$("#data").html(data);
}
});
event.preventDefault();
})
});
</script>