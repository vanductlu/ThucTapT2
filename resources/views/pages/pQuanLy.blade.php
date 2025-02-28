
<div class="content-page">
    <form style="margin: 0 auto; width:300px; font-size: 14px " action="pages-handle/xlQuanLy.php" method="POST">
        <fieldset>
            <legend>Thông tin tài khoản</legend>
            Họ
            <input style="margin-bottom:7px;" class="form-control" type="text" name="txtFirst_name" value="<?php echo $dong["First_Name"]; ?>" />
            <input type="hidden" name="id" value="<?php $dong["User_Id"];?>" />
        </fieldset>
    
        <fieldset>
            Tên 
            <input style="margin-bottom:7px;" class="form-control" type="text" name="txtLast_name" value="<?php echo $dong["Last_Name"]; ?>" />
        </fieldset>
    
        <fieldset>
            Email
            <input style="margin-bottom:7px;" class="form-control" type="text" name="txtEmail" value="<?php echo $dong["Email"]; ?>" readonly/>
        </fieldset>
    
        <fieldset>
            Mật khẩu
            <input style="margin-bottom:7px;" class="form-control" type="password" name="txtPassword" value="txtPassword" />
        </fieldset>
    
        <fieldset>
            Số điện thoại 
            <input style="margin-bottom:7px;" class="form-control" type="text" name="txtPhonenumber" value="<?php echo $dong["Phonenumber"]; ?>" />
        </fieldset>
    
        <fieldset>
            Địa chỉ
            <input style="margin-bottom:7px;" class="form-control" type="text" name="txtAddress" value="<?php echo $dong["Address"]; ?>" />
        </fieldset>
    
        <fieldset style="padding-top: 15px; text-align: center ">
            <input class="btn btn-danger" style="margin-right: 10px; width: 70px; height: 35px" type="submit" name="submit" value="Edit"/>
            <input class="btn btn-danger" style="width: 70px; height: 35px" type="button" value="Cancel" onClick="location = 'index.php?act=1';" />
        </fieldset>
    
    </form>
    </div>