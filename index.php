<!DOCTYPE html>
<html>
<head>
	<title>IdCard Generator</title>
	<meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="js/vendor/jquery-1.12.0.min.js"></script>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="js/bootstrap.min.js"></script>
</head>
<body> 
    <section id="main" style="margin-top:100px;">

     <div class="container">
       

       <div class="row">
         <div class="col-sm-6">
             
         <div class="form-group">  
         <label for="bn"></label>   
        <form action="view.php" method="POST" enctype="multipart/form-data">

               
       <div class="form-group">
      <label for="bn">Your Bangla Name</label>
			<input type="text" class="form-control" name="fname" placeholder="Your Bangla Name" required>
			</div><br>
			<div class="form-group">
            <label for="en">Your English Name</label>
			<input type="text" class="form-control" name="ename" placeholder="Your English Name" required>
			</div><br>
			<div class="form-group">
            <label for="">Your Father's Name (Bangla)</label>
			<input type="text" class="form-control" name="faname" placeholder="Your Father's Name (Bangla)" required>
			</div><br>
			<div class="form-group">
            <label for="">Your Mother's Name (Bangla)</label>
			<input type="text" class="form-control" name="mname" placeholder="Your Mother's Name (Bangla)" required>
			</div><br>
			<div class="form-group">
            <label for="">Your Date Of Birth(English)</label>
			<input type="date" class="form-control" name="dname" placeholder="Your Date Of Birth (English)" required>
			</div><br>
			<div class="form-group">
            <label for="">Your ID Number (English)</label>
			<input type="text"  class="form-control" name="nid" placeholder="Your ID Number (English)" required>
			</div><br><br>
			<div class="form-group">
            <label for="">Your Signature (English)</label>
			      <input type="text" class="form-control" name="si" placeholder="Your Signature (English) " required>
			</div><br><br>
      <div class="form-group">
            <label for="">Blood Group</label>
			      <input type="text" class="form-control" name="blood-group" placeholder="Your Signature (English) " required>
			</div><br><br>
      <div class="form-group">
            <label for="">Village</label>
			      <input type="text" class="form-control" name="village" placeholder="Village (Bangla) " required>
			</div><br><br>
      <div class="form-group">
            <label for="">Post Office</label>
			      <input type="text" class="form-control" name="post-office" placeholder="Post Office (Bangla) " required>
			</div><br><br>
      <div class="form-group">
            <label for="">Thana</label>
			      <input type="text" class="form-control" name="thana" placeholder="Thana (Bangla) " required>
			</div><br><br>
      <div class="form-group">
            <label for="">District</label>
			      <input type="text" class="form-control" name="district" placeholder="District (Bangla) " required>
			</div><br><br>
      <div class="form-group">
            <label for="">Issu Date(English)</label>
			<input type="date" class="form-control" name="issu-dname" placeholder="Card Issu (English)" required>
			</div><br>
			<div class="form-group">
      <label for="">Upload Your Picture</label>
			<b></b> <input type="file" name="file" required>
			</div><br>
			<input type="submit" class="btn btn-success" name="" value="Submit">
			</form>
      </div>

           
           </div>
           </div>
           </div>
       </section>

  
       <footer class="foot">
            <center><p>Copyright &copy;2017<br>Developed By <a href="http://fb.com/ashadullah.shawon">Ashadullah Shawon</a></p></center>
        </footer>


</body>
</html>
