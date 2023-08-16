

<?php $this->view("includes/navbar", $data); ?>
<link rel="stylesheet" href="<?= ROOT ?>/css/addcamp.css">
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBTET7frzRd7t4FvurRzw28rbqEE7_oWFU&callback=initMap&libraries=places"></script>
<script src="http://polyfill.io/v3/polyfill.min.js?features=default"></script>


  <script defer src="<?=ROOT?>/js/addcamp.js"></script>
<title>Add camp</title>
<div class="sec1">
    <h2 class="sec1-h">Campaigns</h2>
</div>
<div class="sec2">
   
    <div class="sec2-1">
        <form action="" enctype="multipart/form-data" method="post" class="file_form" id="addpic">



            <div class="form-item">
                <label for="cName" class="label1">Campaign Name</label><br>
                <input type="text" class="inp1" id="cName" name="camp_name" value="<?=$reqdata[0]->name?>"><br>
            </div>

           
           
            <div class="form-item">
                <label for="email" class="label1">Email</label><br>
                <input type="text" class="inp1" id="email" name="email"  value="<?=AUTH::getemail()?>" readonly><br>
            </div>
            <div class="form-item">
                <label for="phone" class="label1">Phone NO</label><br>
                <input type="text" class="inp1" name="phone" id="telephone"  value="<?=$reqdata[0]->telephone?>" readonly><br>
            </div>
            <div class="form-item">
                <label for="date" class="label1">Date</label><br>
                <input type="date" class="inp1" id="date" name="date"  value="<?=$reqdata[0]->date?>" readonly><br>
            </div>
            <div class="form-item">
                <label for="time" class="label1">Starting Time</label><br>
                <input type="time" class="inp1" name="start_time" id="time"><br>
            </div>
           
            <div class="form-item">
                <label for="bloodBank" class="label1">Blood Bank</label><br>
                <input type="text" class="inp1" value="<?=$reqdata['bloodbank_name']?>" id="blood_bank" name="bloodBank" readonly><br>
            </div>
            <div class="form-item">
                <label for="description" class="label1">Description</label><br>
                <textarea class="inp2" id="description" name="description"></textarea>
            </div>
     



    </div>
    <div class="sec2-2">

        <div class="add_camp_pic">



            <div class="file_form">



                <input type="file" name="file" id="file" class="file">
                </label>
                <br>

                <!-- <button type="submit" class="save" name=submit>Add Photo</button> -->
            </div>
            </form>

        </div>

        <div class="sec2-btn">
            <button type="submit" form="addpic" class="addBtn">Add</button>
        </div>


    </div>

</div>

