    <?php $this->view('pageinit'); ?>

    <?php $this->view('navup'); ?>
    <?php $date=date('Y-m-d');?>

    <input type="hidden" id="lat" value=7.8731>
    <input type="hidden" id="lng" value=80.7718>

    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBTET7frzRd7t4FvurRzw28rbqEE7_oWFU&callback=initMap&libraries=places"></script>
    <script src="http://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script defer src="<?=ROOT?>/js/map.js"></script>
    
    <link rel="stylesheet" href="<?=ROOT?>/css/reqdetailsstyle.css">

     <div class="campname" ><u><?php echo $rows->camp_name; ?></u></div>

    <div class="splits">

       
        <div class="splitleft">
           
            <div class="imgplc">
                <div class="imgg"><img src="<?=ROOT?>/images/backlogo.png"></div>
            </div>
            
            <div class="det">
                <div class="place g"><b>Place: </b><?=$rows->address;?>   </div>
                <div class="time g"><b>Time: </b><?=$rows->start_time;?></div>
                <div class="date g"><b>Date: </b><?=$rows->date;?>      </div>
                <div class="orgby g"><b>Organized by: </b><?=$rows->date;?></div>
                
                <?php if($rows->doctor_id!=NULL) {?>
                    <div class="doctor"><b>Doctor ID: </b><?=$rows->doctor_id?></div>

                    <?php } else{?>

                        <form method="post">
                        <div class="doctor g"><b>Doctor ID: </b><select name="docid" id="docid">
                        <?php if($rows2!=NULL) {
                        foreach($rows2 as $row):?>
                            <option class="bbopt" value=<?=$row->id?>><?=$row->name?></option>
                        <?php endforeach; 
                        }?>
                        </select>
                        <button type="submit">Add</button>
                        </div>

                        </form>
                    <?php }?>
                    <?php if($rows->date<$date) { ?>
                        <a href="<?=ROOT?>/reportui?id=<?php echo $rows->camp_id; ?>"><button class="btn1">Report</button></a> <!-------------only after bdc--->

                    <?php }?>
            </div>
        </div>
        <div class="splitright"> 
            <div class="desc"><p align="justify"><?=$rows->description;?>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sagittis, nibh sed dictum porta, justo sem efficitur massa, vitae porta metus nibh ac quam. Sed convallis tincidunt lorem sed dapibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Integer a arcu ac orci ultrices dapibus. Phasellus feugiat mauris nunc,Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sagittis, nibh sed dictum porta, justo sem efficitur massa, vitae porta metus nibh ac quam. Sed convallis tincidunt lorem sed dapibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Integer a arcu ac orci ultrices dapibus. Phasellus feugiat mauris nunc,Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sagittis, nibh sed dictum porta, justo sem efficitur massa, vitae porta metus nibh ac quam. Sed convallis tincidunt lorem sed dapibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Integer a arcu ac orci ultrices dapibus. Phasellus feugiat mauris nunc</p></div>     
            <div class="map" id="map"></div>
        </div>
    </div>

    <?php if($rows->date==$date) { ?>
        <div class="onetimebtn">
            <a href="<?=ROOT?>/onetimeui?id=<?=$rows->camp_id;?>"><button class="btnonet">Start BDC</button> <!-------------only on bdc--->
        </div>
    <?php }?>
    
    

</body>
</html>