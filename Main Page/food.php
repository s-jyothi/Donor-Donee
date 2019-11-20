<head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            *{
                margin-right: 20px;
            }
        body {font-family: Arial, Helvetica, sans-serif;}
        * {box-sizing: border-box;}
            #id1{
/*            background:    -moz-linear-gradient(#fdfbfb, #ebedee);*/
            background:         linear-gradient(#fdfbfb, #ebedee);
            width: 100%;
            height: 700px;
        }
        
            label{
                margin-left: 20px; 
            }
        input[type=text], input[type = email],select, textarea {
          margin-left: 20px;
          width: 100%;
          padding: 12px;
          border: 1px solid #ccc;
          border-radius: 4px;
          box-sizing: border-box;
          margin-top: 6px;
          margin-bottom: 16px;
          resize: vertical;
        }

        input[type = text]:focus{
            background-color: antiquewhite;
        }
        input[type = email]:focus{
            background-color: antiquewhite;
        }
        textarea:focus{
            background-color: antiquewhite;
        }
        #country:focus{
            background-color: antiquewhite;
        }
        input[type=submit] {
          background-color: #4CAF50;
          color: white;
          padding: 12px 20px;
          border: none;
          border-radius: 4px;
          cursor: pointer;
        }

        input[type=submit]:hover {
          background-color: #45a049;
        }

        .container {
          border-radius: 5px;
          background-color: #f2f2f2;
          padding: 20px;
        }
        
        </style>
</head>




<div id="id1">
    <div id="id2">
        
            
          <h2 style="position: relative; text-align: center; font-size: 50px;">FOOD FORM</h2>
            

        <form action="food.php" method="post" name="form-contact">
            <label for="fname">Name</label>
            <input type="text" id="fname" name="name" placeholder="Name..">

            <label for="email">Email</label>
            <input type="email" name="email" name="email" placeholder="Email..">


            <label for="mobile">Mobile</label>
            <input type="text" id="mobile" name="mobile" placeholder="Mobile..">

            <label for="food">Food Quantity</label>
            <select id="country" name="food">
              <option value="one">1kg</option>
              <option value="two">2kg</option>
              <option value="four">4kg</option>
              <option value="eight">8kg</option>
              <option value="other">Other</option>
            </select>

                
            
            <label for="address">Address</label>
            <textarea id="address" name="address" placeholder="Enter Your Address.." style="height:100px"></textarea>
            
            <label for="pincode">Pincode</label>
            <input type="text" id="pincode" name="pin" placeholder="Pincode..">
                
                
            <input type="submit" value="submit" name="submit" >
          </form>
</div>
</div>


 <?php
$con=mysqli_connect("localhost","root","","almstock") or die(mysql_error());

if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$mobile=$_POST['mobile'];
	$address=$_POST['address'];
	$food=$_POST['food'];
	$email=$_POST['email'];
	$pin=$_POST['pin'];
	
	

	if($name=='')
	{
		echo "<script>alert('Enter your Name')</script>";
	}

	if($mobile=='')
	{
		echo "<script>alert('Enter your Mobile Number')</script>";
	}

	if($address=='')
	{
		echo "<script>alert('Enter Address')</script>";
	}
	if($email=='')
	{
		echo "<script>alert('Enter Email ID')</script>";
	}

	if($food=='')
	{
		echo "<script>alert('Enter Quantity')</script>";
	}
	if($pin=='')
	{
		echo "<script>alert('Enter PinCode')</script>";
	}

	

else{
	
	$query="Insert into food(Name,email,quantity,address,Mobile,pin) values ('$name','$email','$food','$address','$mobile','$pin')";
		
if(mysqli_query($con,$query)){
	echo "<script>alert('Data Saved Successfully ')</script>";
}
}


}



?>

