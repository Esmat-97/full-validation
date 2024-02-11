
<?php



if(isset($_POST['submit'])){





    

    if(empty($_POST['fname'])){

        echo "fname is required"."<br>";
    }

else{   
    
    if(preg_match('/[a-zA-Z]/',$_POST['fname'])){
     echo "fname is valid"."<br>";
}
else{
    echo "fname isnot valid"."<br>";

}

}

                             /** lname **/



if(empty($_POST['lname'])){

    echo "lname is required"."<br>";
}
else{

if(preg_match('/[a-zA-Z]/',$_POST['lname'])){
echo "lname is valid"."<br>";
}
else{
    echo "lname isnot valid"."<br>";

}

}

                               /** email **/


if(empty($_POST['email'])){

    echo "email is required"."<br>";
}
else{


if(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
    echo "EMAIL is valid" ."<br>";
    }
    else{
        echo "input isnot valid" ."<br>";
    
    }


}

                          /** password **/

    

if(empty($_POST['password'])){

    echo "password is required"."<br>";
}
else{

    
    if(! preg_match("/[a-z]/",$_POST['password'])){

        echo "password must have lower "  ."<br>";
        
        }
        else{
                echo "password valid lower "  ."<br>";
        }

    




        if(! preg_match("/[A-Z]/",$_POST['password'])){

            echo "password must have upper " ."<br>";
            
            }
            else{
                echo "password valid upper"  ."<br>";
            }


            

            if(! preg_match("/[0-9]/",$_POST['password'])){

                echo "password must have numbers" ."<br>";
                
                }
                else{
            echo "password valid number "  ."<br>";
        }


                if(! preg_match("/[!@#$%^&*()-_=+{};:,<.>]/",$_POST['password'])){

                    echo "password must have specialchar" ."<br>";
                    
                    }
                    else{
                        echo "password valid  specialchar"  ."<br>";
                    }
            
        
        

                }






                                 /*                 */
                                 /*                 */




    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $password = $_POST['password'];
    $dep = $_POST['dep'];

    
    echo "First Name : $fname<br>";
    echo "Last Name  : $lname<br>";
    echo "Email : $email<br>";
    echo "Address    : $address<br>";
    echo "Password   : $password<br>";
    echo "Department    : $dep<br>";

    if(isset($_POST['angular'])) {
        echo "angular is: " . $_POST['angular'] ."<br>";
    } else {
        echo "angular not checked" ."<br>";
    }
    



    if(isset($_POST['mysql'])) {
        echo "mysql is: " . $_POST['mysql'] ."<br>";
    } else {
        echo "mysql not checked" ."<br>";
    }



    if(isset($_POST['ionic'])) {
        echo "ionic is: " . $_POST['ionic'] ."<br>";
    } else {
        echo "ionic not checked" ."<br>";
    }



    if(isset($_POST['electron'])) {
        echo "electron is: " . $_POST['electron'] ."<br>";
    } else {
        echo "electron not checked" ."<br>";
    }


    if(isset($_POST['male'])) {
        echo "male is: " . $_POST['male'] ."<br>";
    } else {
        echo "male not checked" ."<br>";
    }


    if(isset($_POST['female'])) {
        echo "female is: " . $_POST['female'] ."<br>";
    } else {   
        echo "female not checked" ."<br>";
    }


                                /*               */
                                /*               */




    
    $data = fopen('call.txt', 'w');
    fwrite($data, "First Name: $fname\n");
    fwrite($data, "Last Name: $lname\n");
    fwrite($data, "Address: $address\n");
    fwrite($data, "Password: $password\n");
    fwrite($data, "Department: $dep\n");
    fclose($data);

    
    $data = fopen('call.txt','r');
     echo fread($data,filesize("call.txt"));
        fclose($data);




    

}





?>






































