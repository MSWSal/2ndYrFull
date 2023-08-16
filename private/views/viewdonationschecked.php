

<?php $this->view('pageinit'); ?>

<?php $this->view('nav'); ?>
<?php $this->view('navup'); ?>
<title>Checked Donatins</title>


<link rel="stylesheet" href="<?=ROOT?>/css/viewdonationsstyle.css">




    <div class="section">           <!--main section except sidebar & navbar-->
        <div class="camptitle">
            <div class="campaign">Donations</div>
        </div>

        <div class="navlinks">
            <a href="<?=ROOT?>/viewdonations"><div class="tocheck">
                <div class="cont">To Check</div>
            </div></a>

            <a href="<?=ROOT?>/viewdonationschecked"><div class="checked activenav">
            <div class="cont">Checked</div>

            </div></a>

            <a href="<?=ROOT?>/viewdonationsrejected"><div class="rejected">
            <div class="cont">Rejected</div>

            </div></a>
        </div>
        <div class="search">
            <form>
                <input type="text" placeholder="&#xf002; Search Packets..." class="jssearch" oninput=get_data()>

            </form>
            <a href="<?=ROOT?>/viewdonationschecked"><button class="reset">Reset</button></a>

        </div>

        <div class="tbl jstable">
        <table>
            <thead>
                <tr>
                    <th>PacketID</th>
                    <th>Donor</th>
                    <th>Date Collected</th>
                    <th>Campaign</th>
                    <!-- <th></th> -->

                </tr>
            <thead>
            <?php if($rows!=NULL) {
             foreach($rows as $row):?>
                <div class="trows">
                <tr class="hov">
                    <td><?=$row->packet_id ?></td>
                    <td><?=$row->name ?></td>
                    <td><?=$row->collected_date ?></td>
                    <td><?=$row->camp_name ?></td>
                    
                    



                
                </tr>
                </div>
            <?php endforeach; } ?>
        </table>
        </div>
    </div>

    <?php if($rows!=NULL) {?>

    <div class="pagination">
            <div class="pagin">
                <a href="<?=ROOT?>/viewdonationschecked?page=1"><button class="pagebtn">First</button></a>
            </div>
            <div class="pagin">
                <a href="<?=ROOT?>/viewdonationschecked?page=<?php 
                    if(!isset($_GET['page'])){
                        echo "1";
                    }elseif(($_GET['page']-1)<1){
                        echo "1";
                    } else{
                        echo $_GET['page']-1;
                    }
                    
                
                ?>"><button class="pagebtn"><<</button></a>
            </div>
       <?php for($i=1;$i<=$ess['noofpgs'];$i++) { ?>
            <div class="pagin">
                <a href="<?=ROOT?>/viewdonationschecked?page=<?=$i?>"><button class="pagebtn"><?=$i?></button></a>
            </div>
            
       <?php } ?> 
            <div class="pagin">
                <a href="<?=ROOT?>/viewdonationschecked?page=<?php
                    if(!isset($_GET['page'])){
                        echo "2";
                    } elseif(($_GET['page']+1)>$ess['noofpgs']){
                        echo $ess['noofpgs'];
                    } else{
                        echo $_GET['page']+1;
                    }
                    
                
                ?>"><button class="pagebtn">>></button></a>
            </div>
            <div class="pagin">
                <a href="<?=ROOT?>/viewdonationschecked?page=<?=$ess['noofpgs']?>"><button class="pagebtn">Last</button></a>
            </div>
    
    </div><?php } ?>

</div>
<?php 
    //   echo "<pre>";
    //  $a=$rows[0]->id;
    // print_r($rows);
    // print($a);
?>

<script>
    function get_data(){
        var text = document.querySelector(".jssearch").value;
         var form = new FormData();

        form.append('text', text);
        var ajax = new XMLHttpRequest();
        ajax.addEventListener('readystatechange', (e) => {
            if (ajax.readyState == 4 && ajax.status == 200) {
                //res
                // console.log(ajax.responseText);
                var obj=JSON.parse(ajax.responseText);
                console.log(obj);
                var resultdiv=document.querySelector(".jstable");
                var str="<table><thead><tr><th>Packet_id</th><th>Donor</th><th>Collected Date</th><th>Camp</th></tr><thead>";
                for (var i=obj.length-1;i>=0;i--){
                    console.log(obj[i].name);
                    str+=  "<tr class='hov'><td>" + obj[i].packet_id + "</td> <td>" + obj[i].name + "</td> <td>" +  obj[i].collected_date + "</td> <td>" + obj[i].camp_name +"</td> </tr>";      

                }

                resultdiv.innerHTML = str;
            }
        })
        ajax.open('post', 'http://localhost/Bloood%20Link%202/public/viewdonationschecked/index2', true);
        ajax.send(form);
    }
</script>

</body>
</html>