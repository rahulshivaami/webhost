<?php
require 'menu.php';
?>
<div class="container"><br>
    <form action="domainsubmit.php" method="POST" enctype="multipart/form-data">
    <center><h3>Fill the detail</h3></center><br>
    <div class="row" id="form-data1">
        <div class="col-lg-3">
            <label>Enter Domain Name:</label>
        </div>
        <div class="col-lg-6">
            <input type="text" required class="form-control" name="domain" size="50" placeholder="www.domainname.com">
        </div>
    </div><br>   
    <div class="row" id="form-data2">
        <div class="col-lg-3">
            <label>SSL required?:</label>
        </div>
        <div class="col-lg-6">
            <input style="cursor: pointer;" type="radio" name="ssl" value="1" required> Yes
            <input style="cursor: pointer;" type="radio" name="ssl" value="0"> No
        </div>
    </div><br>
    <div class="row" id="form-data3">
        <div class="col-lg-3">
            <label>AMP required?:</label>
        </div>
        <div class="col-lg-6">
            <input style="cursor: pointer;" type="radio" name="amp" value="1" required=""> Yes
            <input style="cursor: pointer;" type="radio" name="amp" value="0"> No
        </div>
    </div><br>
    <div class="row" id="form-button-1">
        <div class="col-lg-3">
            
        </div>
        <div class="col-lg-6">
            <center>
                <i class="fa fa-arrow-right fa-lg" onclick="next1();" style="color:#0000ff;border:1px solid #f1f1f1;padding:5px;cursor: pointer;">Next</i>
            </center>
        </div>
    </div>
    <div class="row" id="form-data4">
        <div class="col-lg-3">
            <label>Select File:</label>
        </div>
        <div class="col-lg-6">
            <input style="cursor: pointer;" type="file" required class="form-control" name="file" accept="zip,tar">
        </div>
    </div><br>
    <div class="row" id="form-button-2">
        <div class="col-lg-3">
            
        </div>
        <div class="col-lg-6">
            <center>
                <i class="fa fa-arrow-left fa-lg" onclick="back1();" style="color:#0000ff;border:1px solid #f1f1f1;padding:5px;cursor: pointer;">Back</i>
                <i class="fa fa-arrow-right fa-lg" onclick="next2();" style="color:#0000ff;border:1px solid #f1f1f1;padding:5px;cursor: pointer;">Next</i>
            </center>
        </div>
    </div>
    <div class="row" id="form-button-3">
        <div class="col-lg-3">
            
        </div>
        <div class="col-lg-6">
            <center>
            <i class="fa fa-arrow-left fa-lg" onclick="back2();" style="color:#0000ff;border:1px solid #f1f1f1;padding:5px;cursor: pointer;">Back</i>
            <input style="cursor: pointer;" class="btn btn-primary" type="submit" name="submit" value="Review & Submit">
            </center>
        </div>
    </div><br>
    <div class="row">
        <div class="col-lg-3">
            
        </div>
        <div style="display:none;" class="col-lg-6" id="successmsg">
            <center>
                <i class="fa fa-check" style="color:#00ff00;"></i>
                <label>Domain added successfully!</label>
            </center>
        </div>
        <div style="display:none;" class="col-lg-6" id="errormsg">
            <center>
                <i class="fa fa-close" style="color:#ff0000;"></i>
                <label>Domain add process failed!</label>
            </center>
        </div>
    </div>
</form>
</div>
<script>
var session_msg = '<?php echo $_SESSION["msg"]; ?>';
if(session_msg=='success'){
    document.getElementById("successmsg").style.display = "block";
    setTimeout(function () {
        document.getElementById("successmsg").style.display = "none";
    }, 3000);
    var op = '<?php unset($_SESSION['msg']) ?>';
}else if(session_msg=='fail'){
    document.getElementById("errormsg").style.display = "block";
    setTimeout(function () {
        document.getElementById("errormsg").style.display = "none";
    }, 3000);
    var op = '<?php unset($_SESSION['msg']) ?>';
}

</script>
<script>
    $(document).ready(function(){
       $('#form-data4').hide();
       $('#form-button-2').hide();
       $('#form-button-3').hide();
    });
    
    function next1(){
        $('#form-data1').hide();
        $('#form-data2').hide();
        $('#form-data3').hide();
        $('#form-data4').show();
        $('#form-button-1').hide();
        $('#form-button-2').show();
        $('#form-button-3').hide();
    }
    
    function next2(){
        $('#form-data1').show();
        $('#form-data2').show();
        $('#form-data3').show();
        $('#form-data4').show();
        $('#form-button-1').hide();
        $('#form-button-2').hide();
        $('#form-button-3').show();
    }
    
    function back1(){
        $('#form-data1').show();
        $('#form-data2').show();
        $('#form-data3').show();
        $('#form-data4').hide();
        $('#form-button-1').show();
        $('#form-button-2').hide();
        $('#form-button-3').hide();
    }
    
    function back2(){
        $('#form-data1').hide();
        $('#form-data2').hide();
        $('#form-data3').hide();
        $('#form-data4').show();
        $('#form-button-1').hide();
        $('#form-button-2').show();
        $('#form-button-3').hide();
    }
    
    
    
</script> 
<?php
require 'footer.php';
?>