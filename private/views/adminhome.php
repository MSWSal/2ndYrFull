<?php $this->view('includes/pageinit'); ?>
<?php $this->view('adminnavupDashBoard'); ?>
<title>Admin Home</title>

<script src="https://kit.fontawesome.com/1a2c8fa8df.js" crossorigin="anonymous"></script>
<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>





<?php $i = 0 ?>

<link rel="stylesheet" href="<?= ROOT ?>/css/adminhome.css">

<div class="overlay" id="overlay"></div>


<div class="main1">

    <div class="left">
        <div class="b12">
            <p></p>
        </div>

        <a class="a11" href="<?= ROOT ?>/AdminDashBoard">
            <div class="b11">
                <p class="">Dash Board</p>
            </div>
        </a>

        <a class="a11" href="<?= ROOT ?>/AdminHome">
            <div class="b11_1">
                <p class="pp">Blood Bank</p>
            </div>
        </a>


        <a class="a11" href="<?= ROOT ?>/AdminBloodStocks">
            <div class="b11">
                <p>View Blood Stocks</p>
            </div>
        </a>


        <a class="a11" href="<?= ROOT ?>/AdminDonationCamps">
            <div class="b11">
                <p>View Blood Donation <br> Camps</p>
            </div>
        </a>


        <a class="a11" href="<?= ROOT ?>/AdminStaffUsers">
            <div class="b11">
                <p>Staff Users</p>
            </div>
        </a>


        <a class="a11" href="<?= ROOT ?>/AdminPublicUsers">
            <div class="b11">
                <p>Public Users</p>
            </div>
        </a>



        <a class="a11" href="<?= ROOT ?>/AdminBugs">
            <div class="b11">
                <p>Feedbacks</p>
            </div>
        </a>


        <a class="a11" href="<?= ROOT ?>/AdminNews">
            <div class="b11">
                <p>News</p>
            </div>
        </a>

        <a class="a11" href="<?= ROOT ?>/Admin">
            <div class="b11">
                <p class="">Admin</p>
            </div>
        </a>

    </div>

    <div class="right">


        <h1 class="h1">Blood Bank</h1>
        <div class="heading">
            <a href="<?= ROOT ?>/adminaddbloodbank"><button class="add_bank">Add Blood Bank
                </button></a>
            <!-- <button class="add_bank">Add Blood Bank
            </button> -->

            <!-- <button class="add_bank" onclick="openForm()">Add Blood Bank
    </button> -->

            <div class="s_tag">

                <form>
                    <input type="text" placeholder="&#xf002; Search Blood Banks..." class="jssearch inp" oninput=get_data()>

                </form>
                <!-- <a href="<?= ROOT ?>/adminhome"><button class="reset">Reset</button></a> -->

            </div>

        </div>



        <div class="report">
            <h1 class="report2">Blood Bank Details</h1>
        </div>


        <div class="table jstable">
            <table class="table1">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>City</th>
                        <th>Street</th>
                        <th>House NO</th>
                        <th>Tel Number</th>
                        <th>District</th>
                        <th>Province</th>
                        <th></th>
                        <th></th>

                    </tr>
                </thead>
                <tbody>

                    <?php foreach ($rows3 as $value) : ?>
                        <tr>

                            <td><?= $value->name ?></a></td>
                            <td><?= $value->city ?></td>
                            <td><?= $value->street ?></td>
                            <td><?= $value->house_no ?></td>
                            <td><?= $value->telephone ?></td>
                            <td><?= $value->district ?></td>
                            <td><?= $value->province ?></td>
                            <td>


                                <div class="edit">
                                    <div class="city1">
                                        <button id="editBtn<?= $value->blood_bank_id ?>" class="edit1" onclick="openForm1(this.id)">Edit
                                        </button>

                                        <div id="myForm<?= $value->blood_bank_id ?>" class="form-popup myForm1">
                                            <form method="post" class="form-container" id="Add_BB1">

                                                <h2>Edit Blood Bank</h2>

                                                <div class="name1" type="hidden">
                                                    <!-- <label class="lable22" for="blood-bank-name" type="hidden">ID </label> -->
                                                    <input class="Bname" type="hidden" id="blood_bank_id" name="blood_bank_id" value="<?= $value->blood_bank_id ?>" readonly>
                                                </div>



                                                <div class="l2">
                                                    <div class="f">
                                                        <label class="lable22" for="blood-bank-name">Blood Bank Name </label>
                                                        <input class="input qw" type="text" placeholder="Full Name" name="name" id="name" value="<?= $value->name ?>">
                                                        <small>error message</small>
                                                    </div>
                                                </div>

                                                <div class="l2">

                                                    <div class="f">
                                                        <label class="lable22" for="street">Telephone No.</label>
                                                        <input class="input" type="text" placeholder="Telephone Number" name="telephone" id="telephone" value="<?= $value->telephone ?>">
                                                        <small>error message</small>
                                                    </div>

                                                    <div class="f">
                                                        <label class="lable22" for="city">House No. </label>
                                                        <input class="input" type="text" placeholder="House No" name="house_no" id="house_no" value="<?= $value->house_no ?>">
                                                        <small>error message</small>
                                                    </div>

                                                </div>

                                                <div class="l2">

                                                    <div class="f">
                                                        <label class="lable22" for="city">City</label>
                                                        <input class="input" type="text" placeholder="City" id="city" name="city" value="<?= $value->city ?>">
                                                        <small>error message</small>
                                                    </div>

                                                    <div class="f">
                                                        <label class="lable22" for="city">Street </label>
                                                        <input class="input" type="text" placeholder="Street" id="street" name="street" value="<?= $value->street ?>">
                                                        <small>error message</small>
                                                    </div>

                                                </div>





                                                <input name="editForm" value=1 type="hidden">

                                                <div class="but21">
                                                    <input type="submit" class="add_bank1">
                                                    <!-- <button name="update"><input id ="" type="submit" class="add_bank1" ></button> -->
                                                    <button type="button" id="closeBtn<?= $value->blood_bank_id ?>" class="add_bank1" onclick="closeForm1(this.id)">Close</button>
                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </td>

                            <td>
                                <div class="upc"><a class="bankname" a href="<?= ROOT ?>/AdminBloodbankHome?id=<?= $value->blood_bank_id  ?>"> View </div>
                            </td>

                        </tr>




                    <?php $i++;
                    endforeach; ?>
                </tbody>

            </table>




        </div>

    </div>


</div>






















<script>
    function openForm() {
        document.getElementById("myForm").classList.add("show");
        document.querySelector(".overlay").style.display = "block";
    }

    function closeForm() {
        document.getElementById("myForm").classList.remove("show");
        document.querySelector(".overlay").style.display = "none";
    }

    function openForm1(id) {
        id = id.replace("editBtn", "");
        document.getElementById("myForm" + id).classList.add("show");
        document.querySelector(".overlay").style.display = "block";
        document.getElementById("form").submit();
    }

    function closeForm1(id) {
        id = id.replace("closeBtn", "");
        document.getElementById("myForm" + id).classList.remove("show");
        document.querySelector(".overlay").style.display = "none";
    }

    function get_data() {
        var text = document.querySelector(".jssearch").value;
        var form = new FormData();

        form.append('text', text);
        var ajax = new XMLHttpRequest();
        ajax.addEventListener('readystatechange', (e) => {
            if (ajax.readyState == 4 && ajax.status == 200) {
                //res
                // console.log(ajax.responseText);
                var obj = JSON.parse(ajax.responseText);
                console.log(obj);
                var resultdiv = document.querySelector(".jstable");
                if (resultdiv) { // check if the element exists
                    var str = "<table><thead><tr><th>Name</th><th>City</th><th>Street</th><th>House NO</th><th>Tel Number</th><th></th><th></th></tr></thead>";
                    for (var i = obj.length - 1; i >= 0; i--) {
                        console.log(obj[i].name);
                        str += "<tr class='hov'><td>" + obj[i].name +
                            "</td> <td>" + obj[i].city +
                            "</td> <td>" + obj[i].street +
                            "</td> <td>" + obj[i].house_no +
                            "</td> <td>" + obj[i].telephone +
                            "</td> <td>" + `                        
                                            <div class="edit">
                                                <div class="city1">
                                                    <button id="editBtn${obj[i].blood_bank_id}" class="edit1" onclick="openForm1(this.id)">Edit
                                                    </button>

                                                    <div id="myForm${obj[i].blood_bank_id}" class="form-popup myForm1">
                                                        <form method="post" class="form-container" id="Add_BB1">

                                                            <h2>Edit Blood Bank</h2>

                                                                        
                                                            <div class="name1" type="hidden">
                                                                <!-- <label class="lable22" for="blood-bank-name" type="hidden">ID </label> -->
                                                                <input class="Bname" type="hidden" id="blood_bank_id" name="blood_bank_id" value="${obj[i].blood_bank_id}" readonly>
                                                            </div>

                                                            <div class="l2">
                                                            
                                                            <div class="f">
                                                                <label class="lable22" for="blood-bank-name">Blood Bank Name </label>
                                                                <input class="input qw" type="text" placeholder="Full Name" name="name" id="name" value="${obj[i].name}">
                                                                <small>error message</small>
                                                            </div>
                                                        </div>

                                                        <div class="l2">

                                                            <div class="f">
                                                                <label class="lable22" for="street">Telephone No.</label>
                                                                <input class="input" type="text" placeholder="Telephone Number" name="telephone" id="telephone" value="${obj[i].telephone}">
                                                                <small>error message</small>
                                                            </div>

                                                            <div class="f">
                                                                <label class="lable22" for="city">House No. </label>
                                                                <input class="input" type="text" placeholder="House No" name="house_no" id="house_no" value="${obj[i].house_no}">
                                                                <small>error message</small>
                                                            </div>

                                                        </div>

                                                        <div class="l2">

                                                            <div class="f">
                                                                <label class="lable22" for="city">City</label>
                                                                <input class="input" type="text" placeholder="City" id="city" name="city" value="${obj[i].city}">
                                                                <small>error message</small>
                                                            </div>

                                                            <div class="f">
                                                                <label class="lable22" for="city">Street </label>
                                                                <input class="input" type="text" placeholder="Street" id="street" name="street" value="${obj[i].street}">
                                                                <small>error message</small>
                                                            </div>

                                                        </div>



                                                            <input name="editForm" value=1 type="hidden">

                                                            <div class="but21">
                                                                <input type="submit" class="add_bank1">                                                    
                                                                <button type="button" id="closeBtn${obj[i].blood_bank_id}" class="add_bank1" onclick="closeForm1(this.id)">Close</button>
                                                            </div>

                                                        </form>
                                                    </div>
                                                </div>
                                            </div>` +
                            "</td> <td>" + `<div class="upc"><a class="bankname" a href="<?= ROOT ?>/AdminBloodbankHome?id=${obj[i].blood_bank_id}"> View </div>` +
                            "</td> </tr>";
                    }
                    resultdiv.innerHTML = str;
                    // console.log('Hello');
                }
            }
        })
        ajax.open('post', '<?= ROOT ?>/adminhome/index1', true);
        ajax.send(form);
    }
</script>



<script src="<?= ROOT ?>/js/AdminAddbloodbankEdit.js"></script>