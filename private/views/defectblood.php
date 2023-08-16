

<?php $this->view('pageinit'); ?>

<?php $this->view('nav'); ?>
<?php $this->view('navup'); ?>
<title>Defects</title>


<link rel="stylesheet" href="<?=ROOT?>/css/defectbloodstyle.css">




    <div class="section">           <!--main section except sidebar & navbar-->
        <div class="camptitleimg">
            
            <div class="backarr">
            <a href="<?php echo $_SERVER['HTTP_REFERER'] ?>"><img class="barr" src="./img/back.png" alt=""></a>

            </div>
            <div class="campaignimg">Defects</div>
        </div>
        
        
        <div class="search">
            <form>
                <input type="text" placeholder="&#xf002; Search Defect..." class="jssearch" oninput=get_data()>

            </form>
            <a href="<?=ROOT?>/defectblood"><button class="reset">Reset</button></a>

        </div>

        <div class="tbl jstable">
        <table>
            <thead>
                <tr>
                    <th>Lab</th>
                    <th>Donor</th>
                    <th>Date</th>
                    <th></th>
                    <!-- <th></th> -->

                </tr>
            <thead>
            <?php if($rows!=NULL) {
             foreach($rows as $row):?>
                <div class="trows">
                <tr>
                    <td><?=$row->name ?></td>
                    <td><?=$row->donname ?></td>
                    <td><?=$row->date ?></td>
                    <td><a href="<?=ROOT?>/reportui3?id=<?php echo $row->defect_id; ?>"><button class="btn">View</button>
                    <?php if($_SESSION['USER']->role=='Doctor' && $row->doctor_id==NULL ){ ?>
                        <a href="<?=ROOT?>/removedefect?id=<?php echo $row->defect_id; ?>"><button class="btn">Remove</button></td>

                    <?php } else if($row->doctor_id!=NULL) {
                        echo "Removed...";
                    }?>

                </tr>
                </div>
            <?php endforeach; } ?>
        </table>
        </div>
    </div>

    <?php if($rows!=NULL) {?>

    <div class="pagination">
            <div class="pagin">
                <a href="<?=ROOT?>/defectblood?page=1"><button class="pagebtn">First</button></a>
            </div>
            <div class="pagin">
                <a href="<?=ROOT?>/defectblood?page=<?php 
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
                <a href="<?=ROOT?>/defectblood?page=<?=$i?>"><button class="pagebtn"><?=$i?></button></a>
            </div>
            
       <?php } ?> 
            <div class="pagin">
                <a href="<?=ROOT?>/defectblood?page=<?php
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
                <a href="<?=ROOT?>/defectblood?page=<?=$ess['noofpgs']?>"><button class="pagebtn">Last</button></a>
            </div>
    
    </div><?php } ?>

</div>

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
                var str="<table><thead><tr><th>Lab</th><th>Donor</th><th>Date</th><th>BloodBankID</th><th</th></tr><thead>";
                for (var i=obj.length-1;i>=0;i--){
                    console.log(obj[i].name);
                    str+=  "<tr class='hov'><td>" + obj[i].name + "</td> <td>" + obj[i].donname + "</td> <td>" +  obj[i].date + "</td> <td>" + obj[i].blood_bank_id + `</td> <td> <a href='http://localhost/Bloood%20Link%202/public/reportui3?id=${obj[i].defect_id}'><button class='btn'>View</button></td> </tr>`;      

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

