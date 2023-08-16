<?php $this->view('includes/pageinit'); ?>
<?php $this->view('adminnavup'); ?>
<title>Admin add lab</title>

<?php $i = 0 ?>

<link rel="stylesheet" href="<?= ROOT ?>/css/adminaddstafflab.css">




<div class="">
    <h1 class="h1">Add Lab Staff</h1>
</div>


<div class="form-add">
    <form method="post" id="form">
        <div class="name">
            <label for="blood-bank-name">Name</label>
            <input class="Bname" type="text" id="name" name="name"><br>
        </div>

        <div class="d2">
        <div class="name">
                <label for="telephone-number">Email </label>
                <input class="d2-tel" type="tel" id="email" name="email"><br>
            </div>
            <div class="name">
                <label for="telephone-number">Telephone No. </label>
                <input class="d2-tel" type="tel" id="telephone" name="telephone"><br>
            </div>
        </div>

        <div class="d3">
            <div class="city">
                <label for="no">NIC</label>
                <input class="d3-no" type="text" id="house_no" name="house_no"><br>
            </div>

            <div class="city">
                <label for="city">Medical ID</label>
                <input class="d3-city" type="text" id="city" name="city"><br>
            </div>
        </div>

        <div class="street">
            <label for="street">Password</label>
            <input class="street-in" type="text" id="street" name="street"><br>
        </div>

        <div class="add">
            <button class="add_bank" type="submit">Submit</button>
        </div>


    </form>
</div>