<?php $this->view('pageinit');?>
<?php $this->view('nav'); ?>
<?php $this->view('navup'); ?>

<link rel="stylesheet" href="<?=ROOT?>/css/defectbloodstyle.css">




    <div class="section">           <!--main section except sidebar & navbar-->
    
        <div class="camptitleimg">
            
            <div class="backarr">
            <a href="<?php echo $_SERVER['HTTP_REFERER'] ?>"><img class="barr" src="./img/back.png" alt=""></a>
            </div>
            <div class="campaignimg">My Defects</div>
        </div>
       
        <div class="search">
            <form>
                <input type="text" placeholder="&#xf002; Search Defect..." class="jssearch" oninput=get_data()>

            </form>
            <a href="<?=ROOT?>/labusers"><button class="reset">Reset</button></a>

        </div>
        

        <div class="tbl jstable">
        <table>
            <thead>
                <tr>
                    
                    <th>Donor</th>
                    <th>Date</th>
                    <th>Type</th>
                    <th></th>
                    <!-- <th></th> -->

                </tr>
            <thead>
            <?php if($rows!=NULL) {
             foreach($rows as $row):?>
                <div class="trows">
                <tr class="hov">
                    
                    <td><?=$row->name ?></td>
                    <td><?=$row->date ?></td>
                    <td><?=$row->type ?></td>
                    <td><a href="<?=ROOT?>/removedefect?id=<?php echo $row->defect_id; ?>"><button class="btn">Remove</button></td>
                    
                    



                
                </tr>
                </div>
            <?php endforeach; } ?>
        </table>
        </div>
    </div>

    <?php if($rows!=NULL && count($_POST)==0) {?>

    <div class="pagination">
            <div class="pagin">
                <a href="<?=ROOT?>/mydefectblood?page=1"><button class="pagebtn">First</button></a>
            </div>
            <div class="pagin">
                <a href="<?=ROOT?>/mydefectblood?page=<?php 
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
                <a href="<?=ROOT?>/mydefectblood?page=<?=$i?>"><button class="pagebtn"><?=$i?></button></a>
            </div>
            
       <?php } ?> 
            <div class="pagin">
                <a href="<?=ROOT?>/mydefectblood?page=<?php
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
                <a href="<?=ROOT?>/mydefectblood?page=<?=$ess['noofpgs']?>"><button class="pagebtn">Last</button></a>
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
                var str="<table><thead><tr><th>DonorID</th><th>Date</th><th>BloodBankID</th><th></th></tr><thead>";
                for (var i=obj.length-1;i>=0;i--){
                    console.log(obj[i].name);
                    str+=  "<tr class='hov'><td>" + obj[i].donname + "</td> <td>" + obj[i].date + "</td> <td>" +  obj[i].blood_bank_id + `</td> <td> <a href='http://localhost/Bloood%20Link%202/public/removedefect?id=${obj[i].defect_id}'><button class='btn'>Remove</button></td> </tr>`;      

                }

                resultdiv.innerHTML = str;
            }
        })
        ajax.open('post', 'http://localhost/Bloood%20Link%202/public/defectblood/index2', true);
        ajax.send(form);
    }
</script>

</body>
</html>