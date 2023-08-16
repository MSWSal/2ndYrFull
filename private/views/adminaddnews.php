<?php $this->view('includes/pageinit'); ?>
<?php $this->view('adminnavup'); ?>
<title>Admin Add News</title>

<?php $i = 0 ?>

<link rel="stylesheet" href="<?= ROOT ?>/css/adminaddnews.css">

<div class="">
    <h1 class="h1">Add News</h1>
</div>



<div class="form-add">
    <form method="post" id="form">


        <div class="name">
            <label for="blood-bank-name">Title :</label>
            <input class="Bname" type="text" id="title" name="title">
        </div>

        <div class="name">
            <label for="blood-bank-name">Description :</label>
            <input class="Bname12" type="text" id="description" name="description">
        </div>


        <div class="d4">
            <div class="city">
                <label for="telephone-number">Image : </label>
                <button class="add_image" type="submit">Select</button>
            </div>
        </div>


        <div class="d3">
            <div class="city">
                <label for="no">Link : </label>
                <input class="d3-no" type="text" id="link" name="link">
            </div>
        </div>

        <div class="add">
            <input type="submit" class="add_bank1">
            <button type="submit" class="add_bank" href="<?= ROOT ?>/AdminNews">Post</button>
        </div>

    </form>
</div>
