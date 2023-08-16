<?php $this->view('pageinit'); ?>

<?php $this->view('navup'); ?>

<title>Search</title>


<link rel="stylesheet" href="<?=ROOT?>/css/search.css">

<div class="main">
<div id="cover">
  <form method="post" action="">
    <div class="tb">
      <div class="td"><input type="text" placeholder="Search" required name="donor"></div>
      <div class="td" id="s-cover">
        <button type="submit">
          <div id="s-circle"></div>
          <span></span>
        </button>
      </div>
    </div>
  </form>
</div>

<?php if ($data):?>
<div class="container">
<!-- <a href="search"><button class="btn large" name="accept" >Back to search</button></a> -->
    <div class="card">

        <div class='top'>
            <img src="<?=$data->profile_img?>">
        </div>
        <div class='bottom'>
            <h1><?=$data->name?></h1>
            <small><?=$data->city?></small>
            <br>
            <div class="details">
                <p>Age: <?=$data->age?></p>
                <p>Email: <?=$data->email?></p>
                <p>NIC: <?=$data->nic?></p>
            </div>
        </div>
    </div>
</div>
<?php endif?>
<!-- ================================================reminder to use if(is_registered==0) to show details of nonreg users================================ -->
<?php if ($data=='0'):?>
    <p class="error">User with the NIC doesn't exist!<p>
    <form method="post" class="register">
        <p>Register as a guest donor</p>
        <input type="text" placeholder="Name of the donor" name="name" required>
        <input type="text" placeholder="National ID no." name="nic" required>
        <button class="btn">Register</button>
    </form>
<?php endif;?>
</div>