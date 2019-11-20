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
            height: 830px;
        }
        
            label{
                margin-left: 20px; 
            }
        input[type=text], input[type = email],input[type=number],select, textarea {
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
            input[type=number]:focus{
            background-color: antiquewhite;
                
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
        
            
          <h2 style="position: relative; text-align: center; font-size: 50px;">CLOTHES FORM</h2>
            

        <form action="clothes.php" method="post" name="form-contact">
            <label for="fname">Name</label>
            <input type="text" id="fname" name="name" placeholder="Name..">

            <label for="email">Email</label>
            <input type="email" name="email" name="email" placeholder="Email..">


            <label for="mobile">Mobile</label>
            <input type="text" id="mobile" name="mobile" placeholder="Mobile..">

            <label for="quantity">Quantity</label>
            <input type="number" id="quantity" name="food" min="1" placeholder="Quantity..">
            
			<label for="food">Select Accordingly</label>
            <select id="country" name="sel">
              <option value=" Clothes For Below 12"> Clothes For Below 12</option>
              <option value=" Clothes For Above 12 and Below 20"> Clothes For Above 12 and Below 20</option>
              <option value="Clothes For Above 20 and Below 40">Clothes For Above 20 and Below 40</option>
              <option value="Clothes For Above 40">Clothes For Above 40</option>
              
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
	$sel=$_POST['sel'];
	
	

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
	if($sel=='')
	{
		echo "<script>alert('Select Accordingly')</script>";
	}

	

else{
	
	$query="Insert into clothes(Name,email,quantity,address,Mobile,pin,sel) values ('$name','$email','$food','$address','$mobile','$pin','$sel')";
		
if(mysqli_query($con,$query)){
	echo "<script>alert('Data Saved Successfully ')</script>";
}
}


}



?>
