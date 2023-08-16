
    <?php $this->view('pageinit'); ?>

    <?php $this->view('navup'); ?>
    <title>Segment Blood</title>


    <link rel="stylesheet" href="<?=ROOT?>/css/brkbldstyle.css">
   

    <div class="heading">Partition Blood</div>

    <div class="exnav">
        <form method="post" id="form">

            <div class="upper">
                <div class="left">
                    <div class="formcontrol">
                            <div class="q"><label for="BloodCode">BloodCode:</label></div>
                            <div class="in"><input type="text" name="BloodCode" id="BloodCode" readonly value=<?= $dat['id']."F" ?> ><i class="fa-solid fa-circle-check" ></i><i class="fa-solid fa-circle-exclamation"></i></div>
                            <div class="sma"><small>ss</small></div>

                    </div>
                    
                </div>

                <div class="right">
                    <div class="formcontrol">
                                <div class="q"><label for="BloodGroup">BloodGroup:</label></div>
                                <div class="in"><select name="BloodGroup" id="BloodGroup">
                                    <option class="bbopt1" value=""></option>
                                    <option class="bbopt" value="A+">A+</option>
                                    <option class="bbopt" value="A-">A-</option>
                                    <option class="bbopt" value="B+">B+</option>
                                    <option class="bbopt" value="B-">B-</option>
                                    <option class="bbopt" value="AB+">AB+</option>
                                    <option class="bbopt" value="AB-">AB-</option>
                                    <option class="bbopt" value="O+">O+</option>
                                    <option class="bbopt" value="O-">O-</option>
                                    </select>
                                    <i class="fa-solid fa-circle-check"></i><i class="fa-solid fa-circle-exclamation"></i>
                                </div>
                                <div class="sma"><small>ss</small></div>

                    </div>  
                </div>

            </div>

            <div class="dashline">
                
            </div>

            <div class="lower">
                <div class="formcontrol">
                                <div class="q"><label for="RBCamount">RBC:</label></div>
                                <div class="in"><input type="number" name="RBCamount" id="RBCamount"><i class="fa-solid fa-circle-check"></i><i class="fa-solid fa-circle-exclamation"></i></div>
                                <div class="sma"><small>ss</small></div>

                </div>
                <div class="formcontrol">
                                <div class="q"><label for="WBCamount">WBC:</label></div>
                                <div class="in"><input type="number" name="WBCamount" id="WBCamount"><i class="fa-solid fa-circle-check"></i><i class="fa-solid fa-circle-exclamation"></i></div>
                                <div class="sma"><small>ss</small></div>

                </div>
                <div class="formcontrol">
                                <div class="q"><label for="PLTamount">Platelettes:</label></div>
                                <div class="in"><input type="number" name="PLTamount" id="PLTamount"><i class="fa-solid fa-circle-check"></i><i class="fa-solid fa-circle-exclamation"></i></div>
                                <div class="sma"><small>ss</small></div>

                </div>
                <div class="formcontrol">
                                <div class="q"><label for="PLSMamount">Plasma:</label></div>
                                <div class="in"><input type="number" name="PLSMamount" id="PLSMamount"><i class="fa-solid fa-circle-check"></i><i class="fa-solid fa-circle-exclamation"></i></div>
                                <div class="sma"><small>ss</small></div>

                </div>

                <button type="submit">Submit</button>

            </div>

        </form>
        
        
    </div>

    <script>
        const form=document.getElementById('form');
        const BloodCode=document.getElementById('BloodCode');
        const BloodGroup=document.getElementById('BloodGroup');
        const RBCamount=document.getElementById('RBCamount');
        const WBCamount=document.getElementById('WBCamount');
        const PLTamount=document.getElementById('PLTamount');
        const PLSMamount=document.getElementById('PLSMamount');
        



        var valid=true;


        form.addEventListener('submit',(e)=>{
            valid=true;

            e.preventDefault();
            checkinputs();
            if(valid===true) {
                form.submit();
            }
        })

        async function checkinputs() {
            const BloodCodevalue=BloodCode.value.trim();
            const BloodGroupvalue=BloodGroup.value.trim();
            const RBCamountvalue=RBCamount.value.trim();
            const WBCamountvalue=WBCamount.value.trim();
            const PLTamountvalue=PLTamount.value.trim();
            const PLSMamountvalue=PLSMamount.value.trim();
            // const emailvalue=email.value.trim();
            // const pnovalue=pno.value.trim();

            // var todaysDate = new Date();
            const rbcint=parseInt(RBCamountvalue);
            const wbcint=parseInt(WBCamountvalue);
            const pltint=parseInt(PLTamountvalue);
            const plsmint=parseInt(PLSMamountvalue);







            if(BloodCodevalue== '') {
                seterrorfor(BloodCode,'BloodCode cannot be blank');
            } else {
                setsuccessfor(BloodCode);
            }

            

            if(BloodGroupvalue== '') {
                seterrorfor(BloodGroup,'BloodGroup cannot be blank');
            } else {
                setsuccessfor(BloodGroup);
            }

            if(RBCamountvalue== '') {
                seterrorfor(RBCamount,'RBC amount cannot be blank');
            } else {
                setsuccessfor(RBCamount);
            }

            if(WBCamountvalue== '') {
                seterrorfor(WBCamount,'WBC amount cannot be blank');
            } else {
                setsuccessfor(WBCamount);
            }

            if(PLTamountvalue== '') {
                seterrorfor(PLTamount,'Platelettes amount cannot be blank');
            } else {
                setsuccessfor(PLTamount);
            }

            if(PLSMamountvalue== '') {
                seterrorfor(PLSMamount,'Plasma amount cannot be blank');
            } else {
                setsuccessfor(PLSMamount);
            }

            if((rbcint+wbcint+pltint+plsmint)>450) {
                seterrorfor(PLSMamount,'cant exceed 450');
                seterrorfor(PLTamount,'cant exceed 450');
                seterrorfor(WBCamount,'cant exceed 450');
                seterrorfor(RBCamount,'cant exceed 450');


            }



           

        }

        function seterrorfor(input,message) {
            const formcontrol=input.parentElement.parentElement;
            const small=formcontrol.querySelector('small');

            small.innerText=message;

            formcontrol.className= 'formcontrol error';

            valid=false;

        }

        function setsuccessfor(input) {
            const formcontrol=input.parentElement.parentElement;
            formcontrol.className= 'formcontrol success'

        }

        

    </script>
    
</body>
</html>