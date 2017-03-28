<?php
session_start();
$msg="";
include './blogic.php';
if(isset($_SESSION['id']))
{
   $res=  ExecuteQuery("select * from student where stu_id=$_SESSION[id]");
    $r=  mysql_fetch_array($res);
}
if(isset($_REQUEST['sub']))
{
   
    if($_REQUEST['sub']=="Register")
    {
        
        $qry="insert into student(stu_name,stu_fname,stu_email,stu_dob,stu_gender,stu_mobile,stu_pwd,stu_addr,stu_university,stu_college,stu_course,stu_branch) values('$_REQUEST[txt_name]','$_REQUEST[txt_fname]','$_REQUEST[txt_email]','$_REQUEST[txt_dob]','$_REQUEST[gender]',$_REQUEST[txt_mobile],'$_REQUEST[txt_pwd]','$_REQUEST[txt_address]','$_REQUEST[university]','$_REQUEST[college]','$_REQUEST[course]','$_REQUEST[branch]')";
        
        
        
        $x=ExecuteNonQuery($qry);
        if($x>0)
        {
            $msg="<font color=green>Record Inserted....</font>";
        }
        else
        {
            $msg="<font color=red>Error in Inserting the Record....</font>";
        }
    }
    if($_REQUEST['sub']=="Update Record")
    {
        $qry="update student set stu_name='$_REQUEST[txt_name]',stu_fname='$_REQUEST[txt_fname]',stu_email='$_REQUEST[txt_email]',stu_dob='$_REQUEST[txt_dob]',stu_gender='$_REQUEST[gender]',stu_mobile=$_REQUEST[txt_mobile],stu_pwd='$_REQUEST[txt_pwd]',stu_addr='$_REQUEST[txt_address]',stu_university='$_REQUEST[university]',stu_college='$_REQUEST[college]',stu_course='$_REQUEST[course]',stu_branch='$_REQUEST[branch]' where stu_id=$_SESSION[id]";
        
        $x=ExecuteNonQuery($qry);
        if($x>0)
        {
            $msg="<font color=green>Record updated....</font>";
        }
        else
        {
            $msg="<font color=red>error in updating record</font>";
        }   
    }
}
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="style1.css" rel="stylesheet" type="text/css"/>
        <script type="text/javascript">
            function Validate()
            {
                result=true;
                //alert("jgjjgjh");
                if(document.getElementById("txt1").value.length==0)
                {
                    result=false;
                    document.getElementById("txt1").style="background-color:red";
                }
                else
                {
                    document.getElementById("txt1").style="";
                }
                if(document.getElementById("txt2").value.length==0)
                {
                    result=false;
                    document.getElementById("txt2").style="background-color:red";
                }
                else
                {
                    document.getElementById("txt2").style="";
                }
                return result;
            }
            function CheckEmail(str)
            {
                obj=new XMLHttpRequest();
                obj.open("get","checkemail.php?eid="+str,true);
                obj.send();
                obj.onreadystatechange=function()
                {
                    if(obj.readyState==4 && obj.status==200)
                    {
                        document.getElementById("email").innerHTML=obj.responseText;
                    }
                }
            }
            function compare
            {
                 if(document.getElementById("pwd1").value==document.getElementById("pwd2").value)
                     return true;
                 else 
                     return false;
                
            }
        </script>
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
                            <td style="background-image: url('images/top-rept.jpg'); " width='25%' valign='top'>
                                <?php include("./right.php"); ?>
                             </td>
                             <td valign='top'>
                                 <form method="get" onsubmit="return Validate()">
            <h2 align="center">Registration Form</h2>
        <fieldset>
            <legend>Personal Informatition</legend>
            <table width="100%">
                <tr>
                    <td width="25%"><label>Name</label></td>
                    <td width="30%"><input class="mystyle1" id="txt1" type="text" name="txt_name" value="<?php if(isset($_SESSION['id'])) echo $r[1]; ?>"  placeholder="Enter Name" /></td>
                    <td><div id="div1" style="color:red"></div></td>
                
                    <td><label>Father Name</label></td>
                    <td><input class="mystyle1" type="text" id="txt2" name="txt_fname" value="<?php if(isset($_SESSION['id'])) echo $r[2]; ?>" placeholder="Enter Father Name" /></td>
                    <td><div id="div2" style="color:red"></div></td>
                </tr>
                <tr>
                    <td><label>Email Id</label></td>
                    <td><input class="mystyle1" type="email" onchange="CheckEmail(this.value)" name="txt_email" value="<?php if(isset($_SESSION['id'])) echo $r[3]; ?>" placeholder="Enter Email ID" /></td>
                    <td></td>
                
                    <td><label>Date of Birth</label></td>
                    <td><input class="mystyle1" type="date" name="txt_dob" value="<?php if(isset($_SESSION['id'])) echo $r[5]; ?>" /></td>
                    <td></td>
                </tr>
                <tr>
                    <td><label>Gender</label></td>
                    <td>Male <input type="radio" name="gender" value="Male" <?php if(isset($_SESSION['id'])){ if($r[4]=="Male"){ echo "checked"; }}?> /> Female <input type="radio" name="gender" value="Female" <?php  if(isset($_SESSION['id'])){ if($r[4]=="Female") echo "checked"; }?> /></td>
                   
                    <td></td>
                    <td><label>Mobile</label></td>
                    <td><input class="mystyle1" type="text" name="txt_mobile" value="<?php if(isset($_SESSION['id'])) echo $r[6]; ?>" /></td>
                    <td></td>
                </tr>
                <tr>
                    <td><label>Password</label></td>
                    <td><input class="mystyle1" type="password" name="txt_pwd" id="pwd1"  value="<?php if(isset($_SESSION['id'])) echo $r[7]; ?>" placeholder="Enter Paswword" /></td>
                    <td></td>
                
                    <td><label>Confirm Password</label></td>
                    <td><input class="mystyle1" type="password" name="txt_cpwd" id="pwd2" placeholder="Enter Paswword" value="<?php if(isset($_SESSION['id'])) echo $r[7]; ?>" /></td>
                    <td></td>
                </tr>
                <tr>
                    <td><label>Address</label></td>
                    <td><textarea class="mystyle1" name="txt_address" cols="30" rows="6"><?php if(isset($_SESSION['id'])) echo $r[8]; ?></textarea></td>
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
                        <select class="mystyle1" name="university">
                            <option>Select University</option>
                            <option <?php if(isset($_SESSION['id'])){ if($r[9]=="xyz") {echo "selected";} }?> >xyz</option>
                            <option <?php if(isset($_SESSION['id'])){ if($r[9]=="xyz1") {echo "selected"; }}?>>xyz1</option>
     
                            <option <?php if(isset($_SESSION['id'])){ if($r[9]=="xyz2") {echo "selected";} }?>>xyz2</option>
                            <option <?php if(isset($_SESSION['id'])){ if($r[9]=="xyz3") {echo "selected"; }}?>>xyz3</option>
                        </select>
                    </td>
                    <td></td>
                    <td><label>College Name</label></td>
                    <td>
                        <select class="mystyle1" name="college">
                            <option>Select University</option>
                            <option <?php if(isset($_SESSION['id'])){ if($r[11]=="college1") echo "selected"; }?> >college1</option>
                            <option <?php if(isset($_SESSION['id'])){ if($r[11]=="college11") echo "selected"; }?>>college11</option>
                            <option <?php if(isset($_SESSION['id'])){ if($r[11]=="college12") echo "selected"; }?>>college12</option>
                            <option <?php if(isset($_SESSION['id'])){ if($r[11]=="college13") echo "selected"; }?>>college13</option>
                        </select>
                    </td>
                    <td></td>
                </tr>
                 <tr>
                    <td></label>Course</label></td>
                    <td>
                        <input class="mystyle1" type="text" name="course" value="<?php if(isset($_SESSION['id'])) echo $r[10]; ?>" /> 
                    </td>
                    <td></td>
                    <td>Branch</td>
                    <td><input class="mystyle1" type="text" name="branch" value="<?php if(isset($_SESSION['id'])) echo $r[12]; ?>" /></td>
                    <td></td>
                </tr>
                 <tr>
                     <td colspan="6">
                         <input type="checkbox" name="rem" /> Agree with Terms and Condition
                     </td>
                    
                </tr>
                 <tr>
                     <td colspan="6">
                         <input id="mystyle2" type="submit" name="sub" value="<?php if(isset($_SESSION['id'])) echo "Update Record"; else echo "Register"; ?>" />
                     </td>
                    
                </tr>
                <tr>
                    <td colspan="6" align="center"><?php echo $msg; ?></td>
                </tr>
            </table>
        </fieldset>
        </form>
                             </td>
                        </tr>
                    </table>
                    <table width='100%'>
                        <tr>
                            <td valign='top'>
                    <?php include("./footer.php"); ?>
                            </td>
                        </tr>
                </table>
                </td>
            </tr>
        </table>
    </body>
</html>
