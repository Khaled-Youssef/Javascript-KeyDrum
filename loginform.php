    <!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginModalLabel">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="login.php" method="post">
        <div class="form-group">
          <label for="loginInputEmail1">Email address</label>
          <input type="email" class="form-control" name="loginEmail" id="loginInputEmail1" aria-describedby="emailHelp">
          
        </div>
        <div class="form-group">
          <label for="loginInputPassword1">Password</label>
          <input type="password" class="form-control" id="loginInputPassword1" name="loginPassword">
        </div>
            <button type="submit" class="btn btn-primary">Login</button>
      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

