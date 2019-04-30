<?php
require 'menu.php';
?>
<div class="container"><br>
    <form action="domainsubmit.php" method="POST" enctype="multipart/form-data">
    <center><h3>Fill the detail</h3></center><br>
    <div class="row">
        <div class="col-lg-3">
            <label>Enter Domain Name:</label>
        </div>
        <div class="col-lg-6">
            <input type="text" required class="form-control" name="domain" size="50" placeholder="www.domainname.com">
        </div>
    </div><br>
    <div class="row">
        <div class="col-lg-3">
            <label>Select File:</label>
        </div>
        <div class="col-lg-6">
            <input style="cursor: pointer;" type="file" required class="form-control" name="file" accept="zip,tar">
        </div>
    </div><br>
    <div class="row">
        <div class="col-lg-3">
            <label>SSL required?:</label>
        </div>
        <div class="col-lg-6">
            <input style="cursor: pointer;" type="radio" name="ssl" value="1" required> Yes
            <input style="cursor: pointer;" type="radio" name="ssl" value="0"> No
        </div>
    </div><br>
    <div class="row">
        <div class="col-lg-3">
            <label>AMP required?:</label>
        </div>
        <div class="col-lg-6">
            <input style="cursor: pointer;" type="radio" name="amp" value="1" required=""> Yes
            <input style="cursor: pointer;" type="radio" name="amp" value="0"> No
        </div>
    </div><br>
    <div class="row">
        <div class="col-lg-3">
            
        </div>
        <div class="col-lg-6">
            <center>
            <input style="cursor: pointer;" class="btn btn-primary" type="submit" name="submit" >
            </center>
        </div>
    </div>
</form>
</div>
<?php
require 'footer.php';
?>