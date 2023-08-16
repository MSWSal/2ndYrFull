<?php $this->view('pageinit'); ?>

    <?php $this->view('navup'); ?>
    <link rel="stylesheet" href="<?=ROOT?>/css/onetimeformstyle.css">
    <div class="heading">Add Donation</div>
    
    <div class="exnav">
        <form method="post">
            <div class="row">
                <div class="q">
                    Name
                </div>
                <div class="colon">:</div>
                <input type="text" id="name" name="name" readonly value="Name"></input>
            </div>

            <div class="rows">
                <div class="rowshort">
                    <div class="q">
                        Age
                    </div>
                    <div class="colon">:</div>
                    <input type="text" id="age" name="age"readonly value="Name"></input>

                </div>

                <div class="rowshort">
                    <div class="q">
                        BloodBank
                    </div>
                    <div class="colon">:</div>
                    <input type="text" id="bb" name="bb"readonly value="Name"></input>

                </div>

            </div>
            <div class="row">
                <div class="q">
                    Address
                </div>
                <div class="colon">:</div>
                <input type="text" id="loc" name="loc"readonly value="Name"></input>

            </div>

            <div class="rows">
                <div class="rowshort">
                    <div class="q">
                        Weight
                    </div>
                    <div class="colon">:</div>
                    <input type="text" id="weight" name="weight" value="Name"></input>

                </div>

                <div class="rowshort">
                    <div class="q">
                        NIC
                    </div>
                    <div class="colon">:</div>
                    <input type="text" id="nic" name="nic" readonly value="Name"></input>

                </div>

            </div>

            <div class="rows">
                <div class="rowshort">
                    <div class="q">
                        Email
                    </div>
                    <div class="colon">:</div>
                    <input type="text" id="email" name="email" readonly value="Name"></input>

                </div>

                <div class="rowshort">
                    <div class="q">
                        Telephone
                    </div>
                    <div class="colon">:</div>
                    <input type="text" id="tel" name="tel" readonly value="Name"></input>

                </div>

            </div>

            <div class="rows">
                <div class="rowshort">
                    <div class="q">
                        ID
                    </div>
                    <div class="colon">:</div>
                    <input type="text" id="id" name="id" readonly value="id"></input>

                </div>

                <div class="rowshort">
                    <div class="q">
                        Defected
                    </div>
                    <div class="colon">:</div>
                    <input type="text" id="def" name="def" readonly value="0 or 1"></input>

                </div>

            </div>

            <div class="button">
                <button type="submit">Add</button>
            </div>

            
            
        </form>
    </div>
