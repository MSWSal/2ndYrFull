<?php $this->view("includes/navbar", $data);?>
<link rel="stylesheet" href="<?=ROOT?>/css/profile.css">

<div>

   <form action="" method="post">

       <div>
           <label for="name">Current Password</label>
           <input class="inputsec2-1" type="password"  name="current_pass">
       </div>

       <div>
           <label for="email">New password</label>
           <input class="inputsec2" type="password" name="new_pass">
       </div>
       <div>
           <label for="email">Re-enter password</label>
           <input class="inputsec2" type="password" name="re_enter_pass">
       </div>
       <button class="editbtn">Save</button>
   </form>


</div>