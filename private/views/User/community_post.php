<?php $this->view("includes/navbar", $data); ?>
<link rel="stylesheet" href="<?= ROOT ?>/css/addpost.css">
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBTET7frzRd7t4FvurRzw28rbqEE7_oWFU&callback=initMap&libraries=places"></script>
<script src="http://polyfill.io/v3/polyfill.min.js?features=default"></script>

<script src="https://kit.fontawesome.com/1a2c8fa8df.js" crossorigin="anonymous"></script>
<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>



<script defer src="<?= ROOT ?>/js/add_compost.js"></script>

<title>Community Post</title>
<div class="sec1">
    <h2 class="sec1-h">Community Post</h2>
</div>


<div class="sec2">

    <div class="sec2-1">
        <form action="" enctype="multipart/form-data" method="post" class="file_form" id="addpic">

            <div class="form-item">
                <label for="cName" class="labe22">Title</label><br>
                <input type="text" class="input" id="cName" name="title"><br>
                <small>error message</small>
            </div>

            <div class="form-item">
                <label for="description" class="labe22">Description</label><br>
                <textarea class="input pw" id="description" name="description"></textarea><br>
                <small>error message</small>
            </div>




    </div>
    <div class="sec2-2">

        <div class="add_camp_pic">

            <div class="form-item">
                <input type="file" name="file" id="file" class="file">
                
                <small class="ss">error message</small>
            </div>

            </form>
            <div class="sec2-btn">
                <button type="submit" form="addpic" class="addBtn">Add</button>
            </div>
        </div>




    </div>

</div>
