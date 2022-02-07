<?php


// Create connection
$conn = mysqli_connect('localhost', 'root', "" , 'person');

// extract($_POST);

if(isset($_POST['readrecord'])){

    $data = '<table class=" table table-bordered table-striped clr">
                        <tr>
                            <th>No.</th>
                            <th>Company Name</th>
                            <th>Company Website</th>
                            <th>Company Phone no</th>
                            <th>Company Address</th>
                            <th>Company City</th>
                            <th>Company State</th>
                            <th>Company Country</th>
                            <th>Industry List</th>
                            <th>Edit Action</th>
                            <th>Delete Action</th>
                        </tr>';

    $displayquery = "SELECT * FROM `company` ";
    $result = mysqli_query($conn,$displayquery);

    if(mysqli_num_rows($result)>0){

        $number = 1;
        while ($row = mysqli_fetch_array($result))
        {
            $data .= '<tr>
                <td>'.$number.'</td>
                <td>'.$row['companyname'].'</td>
                <td>'.$row['companywebsite'].'</td>
                <td>'.$row['companyphno'].'</td>
                <td>'.$row['companyaddress'].'</td>
                <td>'.$row['companycity'].'</td>
                <td>'.$row['companystate'].'</td>
                <td>'.$row['companycountry'].'</td>
                <td>'.$row['industrylist'].'</td>
                <td>
                    <button onclick="GetUserDetails('.$row['id'].')"
                        class="btn btn-warning">Edit</button>
                </td>
                <td>
                    <button onclick="DeleteUser('.$row['id'].')"
                        class="btn btn-danger">Delete</button>
                </td>
            </tr>';
            $number++;
        }
    }
    $data .='</table>';
        echo $data;

}

if(isset($_POST['companyname']))
{
    $companyname = $_POST['companyname'];
    $companywebsite = $_POST['companywebsite'];
    $companyphno = $_POST['companyphno'];
    $companyaddress = $_POST['companyaddress'];
    $companycity = $_POST['companycity'];
    $companystate = $_POST['companystate'];
    $companycountry = $_POST['companycountry'];
    $industrylist = $_POST['industrylist'];

    $query = " INSERT INTO `company`(`companyname`, `companywebsite`, `companyphno`, `companyaddress`, `companycity`, `companystate`, `companycountry`, `industrylist`) VALUES ('$companyname', '$companywebsite', '$companyphno', '$companyaddress', '$companycity', '$companystate', '$companycountry', '$industrylist')";
    mysqli_query($conn,$query);

    
}

if(isset($_POST['deleteid'])){
    $userid = $_POST['deleteid'];
    $deletequery = " DELETE FROM `company` WHERE id='$userid' ";
    mysqli_query($conn,$deletequery);
}

///////get user id for update
if(isset($_POST['id']) && isset($_POST['id'])!="")
{
    $user_id=$_POST['id'];
    $query = "SELECT * FROM company WHERE id = '$user_id'";
    if(!$result = mysqli_query($conn,$query)){
        exit(mysqli_error());
    }
    $response = array();

    if(mysqli_num_rows($result)>0){
        while ($row = mysqli_fetch_assoc($result)){
            $response=$row;
        }
    }
    else
    {
        $response['status']=200;
        $response['message']="data not found";
    }
    echo json_encode($response);

}
else{
        $response['status']=200;
        $response['message']="invalid request!";
}
//////updated///////

if(isset($_POST['hidden_user_idupd'])){
    $hidden_user_idupd = $_POST['hidden_user_idupd'];
    $companynameupd = $_POST['companynameupd'];
    $companywebsiteupd = $_POST['companywebsiteupd'];
    $companyphnoupd = $_POST['companyphnoupd'];
    $companyaddressupd = $_POST['companyaddressupd'];
    $companycityupd = $_POST['companycityupd'];
    $companystateupd = $_POST['companystateupd'];
    $companycountryupd = $_POST['companycountryupd'];
    $industrylistupd = $_POST['industrylistupd'];

    $query = "UPDATE `company` SET `companyname`='$companynameupd',`companywebsite`='$companywebsiteupd',`companyphno`='$companyphnoupd',`companyaddress`='$companyaddressupd',`companycity`='$companycityupd',`companystate`='$companystateupd',`companycountry`='$companycountryupd',`industrylist`='$industrylistupd' WHERE id='$hidden_user_idupd'";
    if(!$result = mysqli_query($conn,$query)){
        exit(mysqli_error());
    }
}
?>