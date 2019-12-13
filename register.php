<?php
    include_once('includes/header.php')
?>


<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="Register" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="registerModal1">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            
        <form>
        <div class="form-group">
            <label for="registerInputEmail1">Email address</label>
            <input type="email" class="form-control" name="regEmail" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="registerInputName">Name</label>
            <input type="text" class="form-control" name ="regEmail">
        </div>
        <div class="form-group">
            <label for="registerInputPassword" name ="regPassword">Password</label>
            <input type="password" class="form-control">
        </div>
        <div class="form-group">
            <label for="registerInputPasswordConf" name ="regPasswordConf">Confirm Password</label>
            <input type="password" class="form-control" >
        </div>
        <div class="form-group">
            <label for="registerInputname" name ="regPhone">Phone</label>
            <input type="tel" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Register</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
        
<?php
include_once('includes/footer.php')
?>