<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class UserController extends BaseController
{
  public function index()
      {
      //     session_start();

      //     if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      //         $username = $_POST['username'];
      //         $password = $_POST['password'];

      // // Default admin credentials
      //     $adminUsername = "admin";
      //     $adminPassword = "authorized_person";

      //     if ($username === $adminUsername && $password === $adminPassword) {
      //         $_SESSION['Logged-in'] = true;
      //         return view('adminDash');
      //         exit();
      //     }else {
      //         // $error = "Invalid username or password";
      //         return view('/');
      // }
  // }
          return view('login');
      }


  public function signup()
     {
 // Database connection parameters
 $servername = "localhost";
 $username = "root";
 $password = " ";
 $database = "lab3";

 // Create connection
 $conn = new mysqli($servername, $username, $password, $database);

 // Check connection
 if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
 }

 // Get user input from the form
 $username = $_POST['Username'];
 $email = $_POST['E-mail'];
 $password = password_hash($_POST['Password'], PASSWORD_DEFAULT); // Hash the password before storing it in the database

 // SQL query to insert user data into the database
 $sql = "INSERT INTO users (Username, E-mail, Password) VALUES ('$username', '$email', '$password')";

 if ($conn->query($sql) === TRUE) {
     echo "New record created successfully";
 } else {
     echo "Error: " . $sql . "<br>" . $conn->error;
 }

 // Close the database connection
 $conn->close();


     return view('signup');
 }

  public function prod5()
  {
      return view('prod5');
  }
  public function prod4()
  {
      return view('prod4');
  }
  public function prod3()
  {
      return view('prod3');
  }
  public function prod2()
  {
      return view('prod2');
  }
  public function prod1()
  {
      return view('prod1');
  }
  public function vegetables()
  {
      return view('vegetables');
  }

  public function shop()
  {
      return view('shop');
  }

  public function contact()
  {
      return view('contact');
  }

  public function about()
  {
      return view('about');
  }
}
