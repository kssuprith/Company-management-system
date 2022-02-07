<?php

include('connection.php');


session_start();
 if($_SESSION['active'] != 1)
 {     echo "<script>alert(\"ristricted access.\")</script>";
 	echo "<script> window.location = \"firstpg.html\"</script>";
 }

?>






<!DOCTYPE html>
<html>
<head>
    
    <title>Company Management</title>
    <meta charset="utf-8">
    <meta name= "viewport" content="width=device-width initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="style3.css">
</head>
<body>
<header>
        
    <nav>
        <ul class="nav_links">
           
            <li><a href="dashboard.php">Dashboard</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>   

    </nav>
    <h1 class="text-primary text-center">Company Management</h1>
    <h2 class="text-primary align">List of Companies :</h2>
    <div class="d-flex justify-content-end ">
    <button type="button" class="btn btn-primary asd" data-toggle="modal" data-target="#myModal">Add Companies</button>
    </div>
<div class="container">

    
    <div id="company_contant">

    </div>
        <!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content text-center">

      <!-- Modal Header -->
      <div class="modal-header clr">
        <h4 class="modal-title ">Company Details</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body clr">
        <div class=" form-group">
        <label >company name:</lable>
        <input type="text" name="companyname" id="companyname" class="form-control" placeholder="company name" >
        
        </div>
        <div class="form-group">
        <label >Company website:</label>
        <form>
        <input type="url" name="companywebsite" class="form-control" id="companywebsite"
        placeholder="https://example.com"
        pattern="https://.*" size="30" required>
        </form>
        </div>
        <div class="form-group">
            <label for="Companyphno">company phone no</lable>
            <input type="text" name="" id="companyphno" class="form-control" placeholder="company phone no" >
        
        </div>
        <div class="form-group">
            <label for="companyaddress">company address</lable>
            <input type="text" name="" id="companyaddress" class="form-control" placeholder="company address" >
        
        </div>
        <div class="form-group">
            <label for="companycity">company city</lable>
            <input type="text" name="" id="companycity" class="form-control" placeholder="company city" >
        
        </div>
        <div class="form-group">
            <label for="companystate">company state</lable>
            <input type="text" name="" id="companystate" class="form-control" placeholder="company state" >
        
        </div>
        <div class="form-group">
            <label for="companycountry">company country</lable>
            <input type="text" name="" id="companycountry" class="form-control" placeholder="company country" >
        
        </div>
        <div class="form-group">
            <label for="industrylist">industry list</lable>
            <select id="industrylist" class="form-control" name="industrylist" >
                <option value="Account">Account</option>
                <option value="IT">IT</option>
                <option value="Sales">Sales</option>
                <option value="healthcare">Health care</option>
            </select>
        </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer clr">
        <button type="submit" class="btn btn-success" onclick="addRecord()" data-dismiss="modal" >save</button>
        <button type="submit" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>

    </div>
  </div>
</div>

 <!--    ///////update model/// -->
        <!-- The Modal -->
<div class="modal" id="update_user_modal">
  <div class="modal-dialog">
    <div class="modal-content text-center">

      <!-- Modal Header -->
      <div class="modal-header clr">
        <h4 class="modal-title">Edit Company Details</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

       <!-- Modal body -->
      <div class="modal-body clr">
        <div class="form-group">
        <label for="update_companyname">company name:</lable>
        <input type="text" name="companyname" id="update_companyname" class="form-control" placeholder="company name" >
        
        </div>
        <div class="form-group">
        <label for="update_companywebsite">company website:</label>
        <input type="url" name="url" class="form-control" id="update_companywebsite"
        placeholder="https://example.com"
        pattern="https://.*" size="30" required
        >
        
        </div>
        <div class="form-group">
            <label for="update_companyphno">company phone no</lable>
            <input type="text" name="" id="update_companyphno" class="form-control" placeholder="company phone no" >
        
        </div>
        <div class="form-group">
            <label for="update_companyaddress">company address</lable>
            <input type="text" name="" id="update_companyaddress" class="form-control" placeholder="company address" >
        
        </div>
        <div class="form-group">
            <label for="update_companycity">company city</lable>
            <input type="text" name="" id="update_companycity" class="form-control" placeholder="company city" >
        
        </div>
        <div class="form-group">
            <label for="update_companystate">company state</lable>
            <input type="text" name="" id="update_companystate" class="form-control" placeholder="company state" >
        
        </div>
        <div class="form-group">
            <label for="update_companycountry">company country</lable>
            <input type="text" name="" id="update_companycountry" class="form-control" placeholder="company country" >
        
        </div>
        <div class="form-group">
            <label for="update_industrylist">industry list</lable>
            <select id="update_industrylist" class="form-control" name="industrylist" >
                <option value="Account">Account</option>
                <option value="IT">IT</option>
                <option value="Sales">Sales</option>
                <option value="healthcare">Health care</option>
            </select>
        </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer clr">
        <button type="submit" class="btn btn-success" onclick="updateuserdetail()" data-dismiss="modal" >update</button>
        <button type="submit" class="btn btn-danger" data-dismiss="modal">Close</button>
        <input type="hidden" name="" id="hidden_user_id">
        </div>

    </div>
  </div>
</div>

</div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.0/js/bootstrap.min.js"></script>

  <script>
    $(document).ready(function () {
        readRecords();
    });

    function readRecords() {
        var readrecord = "readrecord"
        $.ajax({
            url:"backend1.php",
            type:"post",
            data:{ readrecord : readrecord },
            success:function(data,status){
                $('#company_contant').html(data);
            }

     
        });
    }

      function addRecord(){
          var companyname = $('#companyname').val();
          var companywebsite = $('#companywebsite').val();
          var companyphno = $('#companyphno').val();
          var companyaddress = $('#companyaddress').val();
          var companycity = $('#companycity').val();
          var companystate = $('#companystate').val();
          var companycountry = $('#companycountry').val();
          var industrylist = $('#industrylist').val();

          $.ajax({
              url:"backend1.php",
              type:'post',
              data: { companyname : companyname,
                    companywebsite : companywebsite,
                    companyphno :companyphno,
                    companyaddress : companyaddress,
                    companycity : companycity,
                    companystate : companystate,
                    companycountry : companycountry,
                    industrylist : industrylist
              },

              success:function(data,status){
                  readRecords();
              }


          });
            
        }

        function DeleteUser(deleteid){
            var conf = confirm(" Are you sure");
            
            if(conf==true){
                $.ajax({
                    url:"backend1.php",
                    type:"post",
                    data:{ deleteid:deleteid },
                    success:function(data,status){
                        readRecords();
                    }


                });

            
        }
            }

    function GetUserDetails(id){
        $('#hidden_user_id').val(id);

        $.post("backend1.php", {
            id:id
        }, function(data,status){
            var user = JSON.parse(data);
            $('#update_companyname').val(user.companyname);
            $('#update_companywebsite').val(user.companywebsite);
            $('#update_companyphno').val(user.companyphno);
            $('#update_companyaddress').val(user.companyaddress);
            $('#update_companycity').val(user.companycity);
            $('#update_companystate').val(user.companystate);
            $('#update_companycountry').val(user.companycountry);
            $('#update_industrylist').val(user.industrylist);

        }
        );
        $('#update_user_modal').modal("show");
    }

    function updateuserdetail() {
        var companynameupd = $('#update_companyname').val();
        var companywebsiteupd = $('#update_companywebsite').val();
        var companyphnoupd = $('#update_companyphno').val();
        var companyaddressupd = $('#update_companyaddress').val();
        var companycityupd = $('#update_companycity').val();
        var companystateupd = $('#update_companystate').val();
        var companycountryupd = $('#update_companycountry').val();
        var industrylistupd = $('#update_industrylist').val();

        var hidden_user_idupd = $('#hidden_user_id').val();

        $.post("backend1.php",{
            hidden_user_idupd:hidden_user_idupd,
            companynameupd:companynameupd,
            companywebsiteupd:companywebsiteupd,
            companyphnoupd:companyphnoupd,
            companyaddressupd:companyaddressupd,
            companycityupd:companycityupd,
            companystateupd:companystateupd,
            companycountryupd:companycountryupd,
            industrylistupd:industrylistupd
        },
        function (data,status) {
            $('#update_user_modal').modal("hide");
            readRecords();
            
        }

        );

        }
    
    
    </script>

</body>

</html>