<?php $this->view('pageinit'); ?>

<?php $this->view('nav'); ?>
<?php $this->view('navup'); ?>
<title>PHI</title>


<link rel="stylesheet" href="<?=ROOT?>/css/sysusersstyle.css">


<div class="section">           <!--main section except sidebar & navbar-->
    <div class="camptitle">
        <div class="campaign">System Users</div>
        <?php if($_SESSION['USER']->role=="Admin"){ ?>
        <div class="newbtn"><a href="<?=ROOT?>/addusrform"><button class="btn" >New</button></a></div>

        <?php }?>
    </div>

    <div class="navlinks">
    <a href="<?=ROOT?>/docusers"><div class="tocheck">
        <div class="cont">Doctor</div>
    </div></a>

    <a href="<?=ROOT?>/labusers"><div class="checked">
    <div class="cont">Lab</div>

    </div></a>

    <a href="<?=ROOT?>/phiusers"><div class="rejected activenav">
    <div class="cont">PHI</div>

    </div></a>
</div>

<div class="search">
    <form>
        <input type="text" placeholder="&#xf002; Search Lab..." class="jssearch" oninput=get_data()>

    </form>
    <a href="<?=ROOT?>/phiusers"><button class="reset">Reset</button></a>

</div>

    <div class="tbl jstable">
    <table>
        <thead>
            <tr>
                
                <th>Name</th>
                <th>Email</th>
                <th>NIC</th>
                <th>Medical ID</th>
                <th>Tel No</th>
                
                

            </tr>
        <thead>
        <?php foreach($rows as $row):?>
            <tr class="hov">
                
               
                <td><?=$row->name ?></td>
                <td>
                    <?=$row->email ?>
                </td>
                <td><?=$row->nic ?></td>
                <td><?=$row->medical_id?></td>
                <td>
                <?=$row->telephone ?>
                </td>
                


            
            </tr>
        <?php endforeach; ?>
    </table>
    </div>
    <?php if($rows!=NULL) {?>

    <div class="pagination">
        <div class="pagin">
            <a href="<?=ROOT?>/phiusers?page=1"><button class="pagebtn">First</button></a>
        </div>
        <div class="pagin">
            <a href="<?=ROOT?>/phiusers?page=<?php 
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
            <a href="<?=ROOT?>/phiusers?page=<?=$i?>"><button class="pagebtn"><?=$i?></button></a>
        </div>
        
   <?php } ?> 
        <div class="pagin">
            <a href="<?=ROOT?>/phiusers?page=<?php
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
            <a href="<?=ROOT?>/phiusers?page=<?=$ess['noofpgs']?>"><button class="pagebtn">Last</button></a>
        </div>

</div><?php } ?>

</div>

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
                var str="<table><thead><tr><th>Name</th><th>Email</th><th>NIC</th><th>Medical ID</th><th>Tel No</th></tr><thead>";
                for (var i=obj.length-1;i>=0;i--){
                    console.log(obj[i].name);
                    str+=  "<tr class='hov'><td>" + obj[i].name + "</td> <td>" + obj[i].email + "</td> <td>" +  obj[i].nic + "</td> <td>" + obj[i].medical_id + "</td> <td>" + obj[i].telephone + "</td> </tr>";      

                }

                resultdiv.innerHTML = str;
            }
        })
        ajax.open('post', 'http://localhost/Bloood%20Link%202/public/phiusers/index2', true);
        ajax.send(form);
    }
</script>
</body>
</html>