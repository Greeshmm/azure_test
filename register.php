<!doctype html>

<html>
	<head>
		<title>Registration</title>
		<script type="text/javascript">
			function validate()
			{
				var pattern= /^[A-Za-z0-9._]*\@[A-Za-z]*\.[A-Za-z]{2,5}$/;
				var name 		= document.frm.regname.value;
                var email 		= document.frm.regmail.value; 
                var phone 	= document.frm.regph.value;
                var address 	= document.frm.regadd.value;
				var user=document.frm.uname.value;
                var password=document.frm.pass.value;
                var change=document.frm.repass.value;
				if (name == "")
                {
                 alert("Enter your name");
                 document.frm.regname.focus();
                 return false;
                }
                else if (!(isNaN(name))) {
                alert("Name must be a string");
                document.frm.regname.focus();
                return false;
                } 
                else  if(email==""){
                alert("Please enter an email id");
                document.frm.regmail.focus();
                return false;
                }
				else if(pattern.test(email)==false){
				alert("Please enter a valid email id");
				document.frm.regmail.focus();
				return false;
				}
				else if(phone==""){
				alert("enter a phone number");
				document.frm.regph.focus();
				return false;
				}
				else if(isNaN(phone))
				{
				alert("Please enter a valid phone number");
				document.frm.regph.focus();
				return false;
				}
				else if(phone.length<9)
				{
				alert("Please enter a valid phone number");
				document.frm.regph.focus();
				return false;
				}
				else if (address == "") {
				alert("Please enter an address");
				document.frm.regadd.focus();
				return false;
				} 
			    else if(user==""){
				alert("Please enter USER NAME");
				document.frm.uname.focus();
				return false;
				}
				else if(password==""){
				alert("Please enter PASSWORD");
				document.frm.pass.focus();
				return false;
				}
				else if(password.length<6){
				alert("Please enter 6 characters");
				document.frm.pass.focus();
				return false;
				}
				else if(change==""){
				alert("Please enter NEW PASSWORD");
				document.frm.repass.focus();
				return false;
				}
				else if(password!=change){
				alert("Please enter correct password");
				document.frm.repass.focus();
				return false;
				}
				}
				</script>
	<style>

body

a{background-color:	#FFFFFF;text-decoration:none;}
</style>
				</head>
	<body>
			
			<table border=0 bgcolor="#00CCFF" width=2000px align=left>
		
				<tr>
					<th>
						<table border=0 width=400px align=center>
							<tr>
								<th align=center bgcolor="#99FF99"><font size=3><a href="./home.php">Home</a></td>
				
								<th align=center bgcolor="#99FF99"><font size=3><a href="./register.php">Registration</a></td>
								<th align=center bgcolor="#99FF99"><font size=3><a href="./login.php">Login</a></td>
							</tr>
						</table>
					
			
				</tr>
			</table>
		

			<body background="aaa.jpg" >
			<form action=show.php method="post" name="frm" id="frm" onSubmit="return validate()"/>

			<CENTER><h1><font size=6 color=black><b><b>Registration Form</b></b></table></font></h1>
			<CENTER><TABLE BORDER=6 width="600px" bgcolor="#99FF99" >
			<TR><TH><font color="black" size="4">Name</TH><TD><INPUT TYPE="TEXT" id="regname" name="regname" /></TD></TR>
			<TR><TH><font color="black" size="4">Email</TH><TD><INPUT TYPE="TEXT" id="regmail" name="regmail" value="" /></TD></TR>
			<TR><TH><font color="black" size="4">Phone</TH><TD><INPUT TYPE="TEXT" id="regph" name="regph" /></TD></TR>
			<TR><TH><font color="black" size="4">Address</TH><TD><TEXTAREA ROWS="4" COLS="60"  id="regadd" name="regadd" ></TEXTAREA></TD></TR>
			<TR><TH><font color="black" size="4">User name</TH><TD><INPUT TYPE="TEXT"id="uname" name="uname" /></TD></TR>
			<TR><TH><font color="black" size="4"> Password</TH><TD><INPUT TYPE="PASSWORD"  id="pass" name="pass"/></TD></TR>
			<tr><td><input type="submit" name="submit"></td></tr>
			</table>
			
	</body>
</html>