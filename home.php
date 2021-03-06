<?php
require 'menu.php';
?>
<style>
.loader {
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #3498db;
  width: 120px;
  height: 120px;
  -webkit-animation: spin 2s linear infinite; /* Safari */
  animation: spin 2s linear infinite;
}

/* Safari */
@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
</style>
<div class="container">

    
    <br>
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
            <input style="cursor: pointer;" class="btn btn-primary" onclick="showload();" type="submit" name="submit" value="Review & Submit">
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
    <div class="row"><center><div class="loader" style="display:none;"></div></center></div>
</div>

<!-- Modal -->
<div id="myModal" class="modal" role="dialog" style="display:none;z-index: 9999;">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" onclick="hide_modal();" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">What's Next!!!</h4>
      </div>
      <div class="modal-body">
        <p>You'll receive two DNS records in your email and instructions to update them in your Domain DNS panel. After the activity your website will be live on <?php echo $_SESSION['domain'];?></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" onclick="hide_modal();" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<script>
var session_msg = '<?php echo $_SESSION["msg"]; ?>';
var domain = '<?php echo $_SESSION["domain"]; ?>';
if(session_msg=='success'){
    document.getElementById("successmsg").style.display = "block";
    setTimeout(function () {
        document.getElementById("successmsg").style.display = "none";
        document.getElementById("myModal").style.display = "block";
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
    
    function showload() {
        $('.loader').show();
    }
    
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
    
    function hide_modal(){
        $('#myModal').hide();
    }
    
</script> 
<?php
require 'footer.php';
?>