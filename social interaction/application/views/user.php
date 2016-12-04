<?php include('user_header.php');?>
<div class="col-lg-2" >
	<h5><?php echo $name;?></h5>
</div>
<div class="col-lg-10">
	<?php echo form_open('user_q/insert');?>
		  <fieldset>
		    <div class="form-group">
		      <div class="col-lg-12">
		      	<?php foreach ($ques as $q) {
		      		$q_ques=$q['ques'];
		      		$q_id=$q['id'];
		      		echo "<h6 data-toggle='modal' data-target='#$q_id'>Q.<a href='#$q_id'>".$q_ques."</a></h6><br />";
		      	}
		      	?>
		      </div>
		    </div>
		    <br />
		    <br />
		    <h4>Ask Anything</h4>
		    <div class="form-group">
		      <label for="inputEmail" class="col-lg-2 control-label">Question</label>
		      <div class="col-lg-10">
		        <input type="text" class="form-control" name="ques" id="inputEmail" placeholder="Ask Me Anything" value="<?php echo set_value('team');?>">
		        
		      </div>
		    </div>
		    <br />
		    <br />
		    <div class="form-group">
	      		<div class="col-lg-10 col-lg-offset-2">
	      			<br />
	        		<button type="submit" class="btn btn-primary">Ask Me</button>
	        		<br />
	        		<br />
	      		</div>
	    	</div>
		  </fieldset>
		</form>
</div>


<!-- Modal -->
<?php foreach ($ques as $q) {
		      		$q_ques=$q['ques'];
		      		$q_id=$q['id'];
		      		$q_name=$q['name']
?>
<div id="<?php echo $q_id;?>" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h5 class="modal-title"><?php echo $q_ques;?></h5>
        <?php echo "-$q_name";?>
      </div>
      <div class="modal-body">
        <p><?php foreach ($ans as $a) {
        	$a_q_id=$a['ques_id'];
        	$a_ans=$a['ans'];
        	$a_name=$a['name'];
        	if($a_q_id==$q_id)
        	{
        		echo "<h6>$a_ans</h6><i>-$a_name</i>";
        	}
        }?></p>
      </div>
      <hr />
      <div class="modal-footer">
      	<?php echo form_open('user_q/insert_ans');?>
      		<textarea class="form-control" name="<?php echo $q_id;?>"></textarea><br />
      		<button type="submit" class="form-control btn btn-primary">Answer Me</button><hr />
      	</form>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<?php 
}
?>
<?php include('footer.php');?>