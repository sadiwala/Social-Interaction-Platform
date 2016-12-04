<?php include('header.php');?>
<div class="container">
	
		<?php echo form_open('register/sucsesful');?>
	  <fieldset>
	    <legend>Registration</legend>
	    <div class="form-group">
	      <label for="inputEmail" class="col-lg-2 control-label">Name</label>
	      <div class="col-lg-10">
	        <input type="text" class="form-control" name="name" id="inputEmail" placeholder="Name" value="<?php echo set_value('name');?>">
	        <?php echo form_error("name","<p class='text-danger'>","</p>");?>
	      </div>
	    </div>
	    <div class="form-group">
	      <label for="inputEmail" class="col-lg-2 control-label">User Name</label>
	      <div class="col-lg-10">
	        <input type="text" class="form-control" name="uname" id="inputEmail" placeholder="User Name" value="<?php echo set_value('uname');?>">
	        <?php echo form_error("uname","<p class='text-danger'>","</p>");?>
	      </div>
	    </div>
	    <div class="form-group">
	      <label for="inputEmail" class="col-lg-2 control-label">Email   </label>
	      <div class="col-lg-10">
	        <input type="text" class="form-control" name="email" id="inputEmail" placeholder="email" value="<?php echo set_value('email');?>">
	        <?php echo form_error("email","<p class='text-danger'>","</p>");?>
	      </div>
	    </div>
	    
	    <div class="form-group">
	      <label for="inputEmail" class="col-lg-2 control-label">Password</label>
	      <div class="col-lg-10">
	        <input type="password" class="form-control" name="pass" id="inputEmail" placeholder="Password" >
	      	<?php echo form_error("pass","<p class='text-danger'>","</p>");?>
	      </div>
	    </div>
	    <div class="form-group">
	      <div class="col-lg-10 col-lg-offset-2">
	      	<br />
	        <button type="reset" class="btn btn-default">Cancel</button>
	        <button type="submit" class="btn btn-primary">Submit</button>
	        <br />
	        <br />
	      </div>
	    </div>
	  </fieldset>
	</form>
</div>
<?php include('footer.php');?>