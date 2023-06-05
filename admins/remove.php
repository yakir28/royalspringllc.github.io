<?php 
session_start();
include "register/config/db.php";
  
              if(isset($_POST['delete']) && isset($_POST['un_id']))
              {
                  $id = $_POST['un_id'];
                  $row[] = mysqli_real_escape_string($conn, $_POST['delete']);
                  $sql = "DELETE FROM `contact` WHERE id = $id";
                  $result = mysqli_query($conn, $sql);
              
                  if($result)
                  {
                    header("Location: index.php#contact?contact has removed");                      
                  }
                  else
                  {
                     
                      header("location:index.php?connection failed");
                      exit(0);
                  }
              }


              
              if(isset($_POST['delete']) && isset($_POST['admin_id']))
              {
                  $id = $_POST['admin_id'];
                  $row[] = mysqli_real_escape_string($conn, $_POST['delete']);
                  $sql = "DELETE FROM `users` WHERE id = $id";
                  $result = mysqli_query($conn, $sql);
              
                  if($result)
                  {
                    header("Location: index.php#contact?contact has removed");                      
                  }
                  else
                  {
                     
                      header("location:index.php?connection failed");
                      exit(0);
                  }
              }


              if(isset($_POST['delete']) && isset($_POST['em_id']))
              {
                  $id = $_POST['em_id'];
                  $row[] = mysqli_real_escape_string($conn, $_POST['delete']);
                  $sql = "DELETE FROM `email` WHERE id = $id";
                  $result = mysqli_query($conn, $sql);
              
                  if($result)
                  {
                    header("Location: index.php#contact?contact has removed");                      
                  }
                  else
                  {
                     
                      header("location:index.php?connection failed");
                      exit(0);
                  }
              }


              if(isset($_POST['house_id']) )
              {
                  $row[] = mysqli_real_escape_string($conn, $_POST['delete']);
                  $sql = "DELETE FROM `house` WHERE id = $_POST[house_id]";
                  $result = mysqli_query($conn, $sql);
              
                  if($result)
                  {
                    header("Location: index.php#house_delete_list ");                      
                  }
                  else
                  {
                     
                      header("location:index.php#house_delete_list?connection failed");
                      exit(0);
                  }
              }




              if(isset($_POST['delete']) && isset($_POST['em_id']))
              {
                  $row[] = mysqli_real_escape_string($conn, $_POST['delete']);
                  $sql = "DELETE FROM `email` WHERE id = $_POST[em]";
                  $result = mysqli_query($conn, $sql);
              
                  if($result)
                  {
                    header("Location: index.php?contact has removed");                      
                  }
                  else
                  {
                     
                      header("location:index.php?connection failed");
                      exit(0);
                  }
              }
            ?>