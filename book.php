<?php
  if(isset($_POST['submit'])){
   $name=$_POST['name'];
   $email=$_POST['email'];
   $phone=$_POST['phone'];
   $date=$_POST['date'];
   $time=$_POST['time'];
   $people=$_POST['people'];
   $message=$_POST['message'];

   $conn=mysqli_connect("localhost","root","mysql123","bookatable");
   $q="insert into reservations values('$name','$email','$phone','$date','$time','$people','$message')";
   mysqli_query($conn,$q);

?>
<script>
alert("Your booking request was sent. We will call back or send an Email to confirm your reservation. Thank you!");
window.location="index.html";
</script>
<?php
}
?>