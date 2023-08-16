<?php $this->view('includes/pageinit'); ?>
<?php $this->view('adminnavup'); ?>
<title>Admin Public User profile</title>

<?php $i = 0 ?>

<link rel="stylesheet" href="<?= ROOT ?>/css/adminpublicusersprofile.css">


<div class="">
    <h1 class="h1"><?= $rows[0]->name ?></h1>
</div>


<div class="form-add">
    <form method="post" id="form">

        <div class="d3">
            <div class="city">
                <label for="blood-bank-name">Email : </label>
                <label class="Bname name" type="text" id="name" name="name"><?= $rows[0]->email ?></label>
            </div>

            <div class="city">
                <label class="citY" for="city">Mobile :</label>
                <label class="d3-city" type="text" id="city" name="city"><?= $rows[0]->mobile ?></label>
            </div>
        </div>

        <div class="d3">
            <div class="city">
                <label for="no">NIC : </label>
                <label class="d3-no" type="text" id="house_no" name="house_no"><?= $rows[0]->nic ?></label>
            </div>

            <div class="city">
                <label class="citY" for="city">Age :</label>
                <label class="d3-city" type="text" id="city" name="city"><?= $rows[0]->age ?></label>
            </div>
        </div>

        <div class="d3">
            <div class="city">
                <label for="no">House No : </label>
                <label class="d3-no" type="text" id="house_no" name="house_no"><?= $rows[0]->houseno ?></label>
            </div>

            <div class="city">
                <label class="citY" for="city">City :</label>
                <label class="d3-city" type="text" id="city" name="city"><?= $rows[0]->city ?></label>
            </div>
        </div>

        <div class="street">
            <label for="street">Street :</label>
            <label class="street-in" type="text" id="street" name="street"><?= $rows[0]->street ?></label>
        </div>




    </form>
</div>