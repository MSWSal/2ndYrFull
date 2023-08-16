    <?php $this->view('pageinit'); ?>
    <?php $this->view('navup'); ?>

    <?php $date=date('Y-m-d'); ?>
    <title>Add to Defect</title>
    
    <div class="heading">Add Defect</div>
    <link rel="stylesheet" href="<?=ROOT?>/css/addtodefectstyle.css">


    <div class="exnav">
        <form method="post" id="form">
        <div class="formcontrol">
            <div class="q"><label for="donid">Donor ID</label></div>
            <div class="colon">:</div>
            <div class="in"><input type="text" name="donid" id="donid" readonly value=<?=$rows->donor_id?> ></div>

        </div>

        <div class="formcontrol">
            <div class="q"><label for="donname">Donor Name</label></div>
            <div class="colon">:</div>
            <div class="in"><input type="text" name="donname" id="donname" readonly value=<?=$rows2->name?> ></div>

        </div>

        
        <div class="in"><input type="hidden" name="labid" id="labid" readonly value=<?=$_SESSION['USER']->id?> ></div>

        
        <div class="formcontrol">
            <div class="q"><label for="date">Date</label></div>
            <div class="colon">:</div>
            <div class="in"><input type="text" name="date" id="date" readonly value=<?=$date?> ></div>

        </div>

        <div class="formcontrol">
            <div class="q"><label for="type">Type</label></div>
            <div class="colon">:</div>
            <div class="in"><select name="type" id="type">
                    <option value="">---Select---</option>
                    <option value="HIV/AIDS">HIV/AIDS</option>
                    <option value="Thalasemea">Thalasemea</option>
                    <option value="Hemophilia">Hemophilia</option>
                    <option value="Dengue">Dengue </option>
                    <option value="Malaria">Malaria</option>
                    <option value="Other">Other</option>
                </select><div class="sma"><small>ss</small></div>
            </div>

        </div>

        <div class="formcontrol">
            <div class="q"><label for="reason">Reason</label></div>
            <div class="colon">:</div>
            <div class="in"><textarea type="text" name="reason" id="reason" autofocus></textarea><div class="sma"><small>ss</small></div></div>

        </div>

        <button type="submit">Add</button>
        </form>
    </div>

    <script>
        const form=document.getElementById('form');
        const reason=document.getElementById('reason');
        const type=document.getElementById('type');




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
            const reasonvalue=reason.value.trim();
            const typevalue=type.value.trim();





            if(reasonvalue== '') {
                seterrorfor(reason,'Reason cannot be blank');
            } else {
                setsuccessfor(reason);
            }

            if(typevalue== '') {
                seterrorfor(type,'Type cannot be blank');
            } else {
                setsuccessfor(type);
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
