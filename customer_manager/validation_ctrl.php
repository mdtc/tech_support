  <?php

  function validation(){

  
        
        if(!preg_match( '/^.{1,51}$/' , $first_name )){
        $name_error = "field must have at least 1 and less than 51 characters";
        $customer = unserialize($_COOKIE['customer'], ["allowed_classes" => false]);
        $c_country = $_COOKIE['country_code'];
        $countries = unserialize($_COOKIE['countries'], ["allowed_classes" => false]);
        include("customer_display.php");        
        } 

        // else if(!preg_match( '/^.{1,51}$/' , $last_name)){
        // $last_error = "field must have at least 1 and less than 51 characters";
        // $customer = unserialize($_COOKIE['customer'], ["allowed_classes" => false]);
        // $c_country = $_COOKIE['country_code'];
        // $countries = unserialize($_COOKIE['countries'], ["allowed_classes" => false]);
        // include("customer_display.php"); 
        // }
        
        // else if(!preg_match( '/^.{1,51}$/' , $address)){
        // $add_error = "field must have at least 1 and less than 51 characters";
        // $customer = unserialize($_COOKIE['customer'], ["allowed_classes" => false]);
        // $c_country = $_COOKIE['country_code'];
        // $countries = unserialize($_COOKIE['countries'], ["allowed_classes" => false]);
        // include("customer_display.php"); 
        // }

        // else if(!preg_match( '/^.{1,51}$/' , $city)){
        // $city_error = "field must have at least 1 and less than 51 characters";
        // $customer = unserialize($_COOKIE['customer'], ["allowed_classes" => false]);
        // $c_country = $_COOKIE['country_code'];
        // $countries = unserialize($_COOKIE['countries'], ["allowed_classes" => false]);
        // include("customer_display.php"); 
        // }

        // else if(!preg_match( '/^.{1,51}$/' , $state)){
        // $state_error = "field must have at least 1 and less than 51 characters";
        // $customer = unserialize($_COOKIE['customer'], ["allowed_classes" => false]);
        // $c_country = $_COOKIE['country_code'];
        // $countries = unserialize($_COOKIE['countries'], ["allowed_classes" => false]);
        // include("customer_display.php"); 
        // }
             
        // else if(!preg_match( '/^.{1,21}$/' , $postal_code)){
        // $postal_error = "postal code is required and must have at least 1 and less than 21 characters";
        // $customer = unserialize($_COOKIE['customer'], ["allowed_classes" => false]);
        // $c_country = $_COOKIE['country_code'];
        // $countries = unserialize($_COOKIE['countries'], ["allowed_classes" => false]);
        // include("customer_display.php"); 
        // }

        // else if(!preg_match( '/^.{6,21}$/' , $password)){
        // $pass_error = "password must be at least 6 and less than 21 characters";
        // $customer = unserialize($_COOKIE['customer'], ["allowed_classes" => false]);
        // $c_country = $_COOKIE['country_code'];
        // $countries = unserialize($_COOKIE['countries'], ["allowed_classes" => false]);
        // include("customer_display.php"); 
        // }

        // else if(!filter_var( $email , FILTER_VALIDATE_EMAIL)){
        // $email_error = "The email address must be a valid email address";
        // $customer = unserialize($_COOKIE['customer'], ["allowed_classes" => false]);
        // $c_country = $_COOKIE['country_code'];
        // $countries = unserialize($_COOKIE['countries'], ["allowed_classes" => false]);
        // include("customer_display.php"); 
        // }

        // else if(!preg_match( '/\(\d{3}\)\s?\d{3}-\d{4}/' , $phone)){
        // $phone_error = "phone number must be in the (999) 999-9999 format";
        // $customer = unserialize($_COOKIE['customer'], ["allowed_classes" => false]);
        // $c_country = $_COOKIE['country_code'];
        // $countries = unserialize($_COOKIE['countries'], ["allowed_classes" => false]);
        // include("customer_display.php"); 
        // }
        
        else{
            update_customer($customer_id, $first_name, $last_name,
            $address, $city, $state, $postal_code, $country_code,
            $phone, $email, $password);
            include('customer_success.php');
        }; 

    }
?>