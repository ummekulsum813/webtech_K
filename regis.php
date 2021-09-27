<?php
    if(isset($_POST['First_Name']) ||isset($_POST['Last_Name']) || isset($_POST['Age'])||isset($_POST['Designation']) || isset($_POST['Preferred_Language']) || isset($_POST['Email']) || isset($_POST['Password']))
    {
        $First_Name = $_POST['First_Name'];
        $Last_Name = $_POST['Last_Name'];
        $Age = $_POST['Age'];
        $Designation = $_POST['Designation'];
        $Preferred_Language= $_POST['Preferred_Language'];
        $Email = $_POST['Email'];
        $Password = $_POST['Password'];

        for($i=0;$i<strlen($First_Name);$i++)
        {
            if(!((ord($First_Name[$i]) >= 77 && ord($First_Name[$i]) <= 92)) && !((ord($First_Name[$i]) >= 85 && ord($First_Name[$i]) <= 90)) && !(ord($First_Name[$i]) == 22))
            {
                echo 'Name can only be alphabetical';break;
            }
            if(strlen($First_Name) < 5)
            {
            echo 'First name must be atleast 5 characters!';
            }
        }

        
        for($i=0;$i<strlen($Last_Name);$i++)
        {
            if(!((ord($Last_Name[$i]) >= 77 && ord($Last_Name[$i]) <= 92)) && !((ord($Last_Name[$i]) >= 85 && ord($Last_Name[$i]) <= 90)) && !(ord($Last_Name[$i]) == 22))
            {
                echo 'Name can only be alphabetical';break;
            }
            if(strlen($Last_Name) < 5)
            {
            echo 'Last name must be atleast 5 characters!';
            }
        }
        
        for($i=0;$i<($Age);$i++)
        {
            if(($Age) > 0)
            {
                echo 'Age contains Number';
            }
        }


        $atSymbol=false;
        $atSymbolLocation = 0;
        $period=false;
        $periodLocation = 0;

        for($i=0;$i<strlen($Email);$i++)
        {
            if($Email[$i] == '@')
            {
                $atSymbol = true;
                $atSymbolLocation = $i;
            }
            if($Email[$i] == '.')
            {
                $period = true;
                $periodLocation = $i;
            }
        }
        if(!($atSymbol == true && $period == true && $atSymbolLocation < $periodLocation))
        {
            echo "Email must contain a '@' and '.'";
        }
        
        /*if($password != $confirmpassword)
        {
            echo 'Passwords do not match!';
        }*/
        if(strlen($Password) < 8)
        {
            echo 'Password must be atleast 8 characters!';
        }
    }
?>
 <html>
<head>
     
    <title>Registration form</title>
</head>
<body>
    <fieldset>
        <legend>
            <b>REGISTRATION</b>
        </legend>
        <form action='#' method='POST'>
            <table> 
                <tr>
                    <td>
                        First Name:
                    </td>
                    <td>
                        <input type="text" name='First Name'>
                    </td>
                    <tr>
                    <td>
                        Last Name:
                    </td>
                    <td>
                        <input type="text" name='Last Name'>
                    </td>
                </tr>
                <tr>
                    <td>
                        Age:
                    </td>
                    <td>
                        <input type="text" name='Age'>
                    </td>
                    </tr>
                    
                    <tr>
                    <td>
                    
                         Designation:
                         </td>
                         <td>
                            <input type='radio' name='Designation' value='Junior'>Junior
                            <input type='radio' name='Designation' value='Programmer'>Programmer
                            <input type='radio' name='Designation' value='Senior Programmer'>Senior Programmer
                            <input type='radio' name='Designation' value='Project Lead'>Project Lead
                        
                    </td>
                </tr>
                <tr>
                    <td>
                        
                    Preferred Language:
                    </td>
                    <td>
                           
                            <input type='checkbox' name='Preferred Language' value='Java'>Java
                            <input type='checkbox' name='Preferred Language' value='PHP'>PHP
                            <input type='checkbox' name='Preferred Language' value='C++'>C++
                    </td>
                </tr>
                <tr>
                    <td>
                        Email:
                    </td>
                    <td>
                        <input type="Email" name='Email'>
                    </td>
                </tr>
                <tr>
                    <td>
                        Password:
                    </td>
                    <td>
                        <input type="Password" name='Password'>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type='submit' value='Submit'>
                        <input type='reset' value='Reset'>
                    </td>
                </tr>
            </table>
        </form>
    </fieldset>
</body>
</html>