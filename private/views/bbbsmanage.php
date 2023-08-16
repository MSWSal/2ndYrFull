        <?php $this->view('pageinit'); ?>
        <?php $this->view('nav'); ?>
        <?php $this->view('navup'); ?>
        <title>Blood Stock Manage</title>

        <script src="<?=ROOT?>/js/ajscriptbbbs.js"></script>

        <style>
            input{
                position: relative;
                width: 15rem;
                height: 2rem;
                border-radius: 0.5rem;
                font-family:Poppins, FontAwesome;
                padding-left: 1rem;
            }
            form{
                width: 90%;
                display: flex;
                gap: 1rem;
                flex-direction: row;
                justify-content: right;
            }

            button.reset{
                font-family: "Poppins" !important;
                height: 2.3rem;
                width: 3rem;
                border-radius: 0.5rem;
                /* margin-right: 1rem; */
                border: none;
                background-color: #ff4d4d;
                color: #ffffff;
            }

            div.search{
                padding-bottom:2rem;
                display: flex;
                flex-direction: row;
                gap: 1rem;
            }

            div.bblist{
                position:absolute;
                margin-top:3rem ;
                width: 13.8%;
                background-color: #ffffff;
                min-height: 0rem;
                box-shadow:  8px 0px 8px grey;
                display: flex;
                flex-direction: column;
                align-items: center;
            }

            
        </style>

        <link rel="stylesheet" href="<?=ROOT?>/css/bbbsmanagestyle.css">

        

        <div class="section">           <!--main section except sidebar & navbar-->
           
            <div class="namearea">
                <div class="nmandreq">
                    <div class="nm"><b>Blood Stock</b></div>
                    <?php if ($_SESSION['USER']->role=="Doctor"){ ?>
                        <div class="reqbt">
                        <a href="<?=ROOT?>/bldrequestform"><button class="reqbt"><b>Request Blood</b></button></a>
                        </div>
                    <?php }?>
                    
                </div>
            </div>
            <div class="search">
                <form>
                    <input type="text" placeholder="&#xf002; Search Blood Banks..." class="jssearch" oninput=get_data()>

                </form>
                <a href="<?=ROOT?>/bbbsmanage"><button class="reset">Reset</button></a>
                <div class="bblist jsdiv">
                   

                </div>

            </div>
            <div class="chrtarea">
                <div class="canarea">
                    <canvas id="chart" ></canvas>
                </div>
            </div>
            
           <div class="rwppbox">
            <div class="boxupper">

                <a href="<?=ROOT?>/rbcdetails"><div class="rbcbox">
                    <div class="btname">RBC</div>
                    <div class="btamount"><?=$rows['rbc']?></div>
                </div></a>

                <a href="<?=ROOT?>/wbcdetails"><div class="wbcbox">
                    <div class="btname">WBC</div>
                    <div class="btamount"><?=$rows['wbc']?></div>

                </div></a>
                <a href="<?=ROOT?>/pltdetails"><div class="pltbox">
                    <div class="btname">Platelettes</div>
                    <div class="btamount"><?=$rows['plt']?></div>

                </div></a>

                <a href="<?=ROOT?>/plsmdetails"><div class="plsmbox">
                    <div class="btname">Plasma</div>
                    <div class="btamount"><?=$rows['plsm']?></div>

                </div></a>

            </div>
           
           </div>

           <a href="<?=ROOT?>/reportui2"><button class="addb">View Report</button></a>
           

            
        </div>
        <?php $this->view('footer'); ?>


<script>
        function get_data(){
        var text = document.querySelector(".jssearch").value;
         var form = new FormData();

        form.append('text', text);
        var ajax = new XMLHttpRequest();
        ajax.addEventListener('readystatechange', (e) => {
            if (ajax.readyState == 4 && ajax.status == 200) {
               
                var obj=JSON.parse(ajax.responseText);
                console.log(obj);
                var resultdiv=document.querySelector(".jsdiv");
                var str="";
                for (var i=obj.length-1;i>=0;i--){
                    console.log(obj[i].name);
                    str+=  `<a href='http://localhost/Bloood%20Link%202/public/bbbsmanage/index3?id=${obj[i].blood_bank_id}'><div class='c'>` + obj[i].name + "</div>" ;      

                }

                resultdiv.innerHTML = str;
            }
        })
        ajax.open('post', 'http://localhost/Bloood%20Link%202/public/bbbsmanage/index2', true);
        ajax.send(form);
    }
</script>

  
</body>
</html>