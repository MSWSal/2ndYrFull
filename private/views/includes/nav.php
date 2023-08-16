
<link rel="stylesheet" href="<?=ROOT?>/css/mainstylenav.css">
<input class="chk" type="checkbox" id="check">

<label for="check">
                <i class="fas fa-bars" id="sidebar_btn"></i>
            </label>
    <div class="sidebar"> 

    <div class="box" id="box">
        <a href="<?=ROOT?>/bbbsmanage"><div class="bs">
            BloodStock
        </div></a>
        <a href="<?=ROOT?>/viewbldrequests"><div class="bs" onclick="toggle()">
            Requests
        </div></a>
    </div>
                 
    <div class="l1">
        <a href="<?=ROOT?>/dashboard"><div class="l11">
            <div class="l11img"><img src="<?=ROOT?>/img/dash.png" class="dasimg"></div>
            <div class="das">Dashboard</div>
        </div></a>
        <a href="<?=ROOT?>/campaignsdashboard"><div class="l12">
            <div class="l12img"><img src="<?=ROOT?>/img/userg.png" class="ugimg"></div>
            <div class="das">Campaigns</div>
        </div></a>
        <a href="<?=ROOT?>/viewdonations"><div class="l13">
            <div class="l13img"><img src="<?=ROOT?>/img/gluco.png" class="bdimg"></div>
            <div class="das">Donations</div>
        </div></a>
        <div class="l14" onclick="toggle()">
            <div class="l14img"><img src="<?=ROOT?>/img/bld.png" class="blimg"></div>
            <div class="das">Blood Stock Management</div>
        </div>
        <a href="<?=ROOT?>/defectblood"><div class="l14">
            <div class="l14img"><img src="<?=ROOT?>/img/remove.png" class="blimg"></div>
            <div class="das">Defect Blood</div>
        </div></a>
    </div>
    <div class="l2">
        <a href="<?=ROOT?>/docusers"><div class="l21">
            <div class="l21img"><img src="<?=ROOT?>/img/act.png" class="acimg"></div>
            <div class="das">System Users</div>
        </div></a>
    </div>
    </div>

    <div class="exsdbar">

    <script>
        let submenu=document.getElementById("box");
        function toggle(){
            submenu.classList.toggle("open");
        }
    </script>