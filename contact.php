<?php
  if(isset($_POST['submit'])){
   $name=$_POST['name'];
   $email=$_POST['email'];
   $subject=$_POST['subject'];
   $message=$_POST['message'];

   $conn=mysqli_connect("localhost","root","mysql123","bookatable");
   $q="insert into contact values('$name','$email','$subject','$message')";
   mysqli_query($conn,$q);

?>
<script>
alert("Your message has been sent. Thank you!");
window.location="index.html";
</script>
<?php
}
?>