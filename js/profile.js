<script>
$(function () {
$('form#Myform1').on('submit', function (event) {
$.ajax({
type: 'post',
url: 'profile.php',
data: $('form').serialize(),
success: function (data) {
$("#data").html(data);
}
});
event.preventDefault();
});
});
</script>