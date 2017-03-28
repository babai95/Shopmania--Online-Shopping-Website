
<?php
				if(isset($_REQUEST['change']))
				{	
						$msg="";
	$h=mysql_connect("localhost","root","") or die('error in connecting the database');
	mysql_select_db("student_record");
	$qry="update student set stu_name='$_REQUEST[txt_name]',stu_fname='$_REQUEST[txt_fname]',stu_email='$_REQUEST[txt_email]',stu_gender='$_REQUEST[gender]',stu_dob='$_REQUEST[txt_dob]',stu_mobile='$_REQUEST[txt_mobile]',stu_pwd='$_REQUEST[txt_password]',stu_addr='$_REQUEST[txt_address]',stu_university='$_REQUEST[university]',stu_branch='$_REQUEST[txt_branch]',stu_college='$_REQUEST[college]',stu_course='$_REQUEST[txt_course]' where id='$_REQUEST[id]'";
mysql_query($qry);
if(mysql_affected_rows()>0)
{
	$msg="<font color=green>Record Updated</font>";
}
else
{
	$msg="<font color=red>Error in Updating the record</font>";
}
					
					
				}
				?>
				<?php
$h=mysql_connect("localhost","root","") or die('error in connecting the database');
	mysql_select_db("online_shop");
	$res=  ExecuteQuery("select * from student where id=$_REQUEST[id]");
	$r=mysql_fetch_array($res);
	?>
	<html>
    <head>
        <title></title>
        <link href="style1.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <table width='100%'>
            <tr>
                <td valign='top'>
                    <table width='100%'>
                        <tr>
                            <td valign='top'>
                                <?php include("./header.php"); ?>
                            </td>
                        </tr>
                    </table>
                    <table border='1' width='100%' >
                        <tr>
                            <td style="background-image: url('images/shop.jpg'); " width='25%' valign='top'>
                                <?php include("./right.php"); ?>
                             </td>
                             <td valign='top'>
                                <form>
            <h2 align="center">Registration Form</h2>
        <fieldset>
            <legend>Personal Informatition</legend>
            <table width="100%">
                <tr>
                    <td width="25%"><label>Name</label></td>
                    <td width="30%"><input class="mystyle1" type="text" name="txt_name"  placeholder="Enter Name" value="<?php if(isset($_REQUEST['id'])) echo $r[0]?>"/></td>
                    <td></td>
                
                    <td><label>Father Name</label></td>
                    <td><input class="mystyle1" type="text" name="txt_fname" placeholder="Enter Father Name" value="<?php if(isset($_REQUEST['id'])) echo $r[1]?>"/></td>
                    <td></td>
                </tr>
                <tr>
                    <td><label>Email Id</label></td>
                    <td><input class="mystyle1" type="email" name="txt_username" placeholder="Enter Email ID" value="<?php if(isset($_REQUEST['id'])) echo $r[2]?>"/></td>
                    <td></td>
                
                    <td><label>Date of Birth</label></td>
                    <td><input class="mystyle1" type="date" name="txt_dob" value="<?php if(isset($_REQUEST['id'])) echo $r[4]?>"/></td>
                    <td></td>
                </tr>
                <tr>
                    <td><label>Gender</label></td>
                    <td>Male <input type="radio" name="gender" value="Male" /> Female <input type="radio" name="gender" value="Female" /></td>
                    <td></td>
                    <td><label>Mobile</label></td>
                    <td><input class="mystyle1" type="text" name="txt_mobile" value="<?php if(isset($_REQUEST['id'])) echo $r[5]?>"/></td>
                    <td></td>
                </tr>
               
                <tr>
                    <td><label>Address</label></td>
                    <td><textarea class="mystyle1" name="txt_address" cols="30" rows="6" value="<?php if(isset($_REQUEST['id'])) echo $r[7]?>"></textarea></td>
                    
                    <td></td>
                     <td><label>password</label></td>
                    <td><input class="mystyle1" type="password" name="txt_password" value="<?php if(isset($_REQUEST['id'])) echo $r[6]?>"/></td>
                    <td></td>
                    
                </tr>
            </table>
        </fieldset>
        <fieldset>
            <legend>Acadmic Info</legend>
            <table width="100%">
                <tr>
                    <td width="25%"><label>University</label></td>
                    <td width="30%">
                        <select class="mystyle1" name="university" value="<?php if(isset($_REQUEST['id'])) echo $r[8]?>">
                            <option>Select University</option>
                            <option>NIT DURGAPUR</option>
                            <option>IIT KHARAGPUR</option>
                            <option>IEM KOLKATA</option>
                            <option>NIT ROURKELA</option>
                        </select>
                    </td>
                    <td></td>
                    <td><label>College Name</label></td>
                    <td>
                        <select class="mystyle1" name="college" >
                            <option>Select University</option>
                            <option>college1</option>
                            <option>college11</option>
                            <option>college12</option>
                            <option>college13</option>
                        </select>
                    </td>
                    <td></td>
                </tr>
                 <tr>
                    <td></label>Course</label></td>
                    <td>
                        <input class="mystyle1" type="text" name="course" value="<?php if(isset($_REQUEST['id'])) echo $r[11]?>"/> 
                    </td>
                    <td></td>
                    <td>Branch</td>
                    <td><input class="mystyle1" type="text" name="branch" value="<?php if(isset($_REQUEST['id'])) echo $r[9]?>" /></td>
                    <td></td>
                </tr>
                 <tr>
                     <td colspan="6">
                         <input type="checkbox" name="rem" /> Agree with Terms and Condition
                     </td>
                    
                </tr>
            <tr>
                <td>
                </td>
                <td>
                    <input type="submit" name="change" value="Change">
                <tr>
				<td colspan=3>
				
				<?php 
				if(isset($_REQUEST['change']))
				echo "$msg";
				?>
				</td>
				</tr>
				
				</td>
                <td></td>
            </tr>
   
	</table> 
                                
       </form>
                                 
            
    </body>
    </html>
    
  