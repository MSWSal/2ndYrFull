<?php $this->view('includes/pageinit'); ?>
<?php $this->view('adminnavupDashBoard'); ?>

<title>Admin Lab User</title>


<?php $i = 0 ?>

<link rel="stylesheet" href="<?= ROOT ?>/css/adminstaffuserslabstaff.css">

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
            <div class="b11">
                <p>Blood Bank</p>
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
            <div class="">
                <p class="pp">Staff Users</p>
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


        <div class="">
            <h1 class="h1">Staff Users</h1>
        </div>


        <div class="heading">

            <div class="add_bank13">
                <button class="add_bank12" onclick="openForm()">Add User
                </button>
            </div>




            <div class="navlinks">

                <a class="a" href="<?= ROOT ?>/adminstaffusers">
                    <div class="tocheck ">
                        <div class="cont">Doctor</div>
                    </div>
                </a>

                <a class="a" href="<?= ROOT ?>/adminstaffuserslabstaff">
                    <div class="checked activenav">
                        <div class="cont">Lab Staff</div>

                    </div>
                </a>

                <a class="a" href="<?= ROOT ?>/adminstaffusersphi">
                    <div class="rejected">
                        <div class="cont">PHI</div>

                    </div>
                </a>

            </div>


            <div class="s_tag">
                <form>
                    <input type="text" placeholder="&#xf002; Search Lab Staff..." class="jssearch inp" oninput=get_data()>

                </form>
                <!-- <a href="<?= ROOT ?>/adminstaffuserslabstaff"><button class="reset">Reset</button></a> -->

            </div>



        </div>



        <div class="city">

            <div id="myForm" class="form-popup">
                <form method="post" class="form-container" id="Add_Lab_Staff">

                    <h2>Add Lab Staff</h2>

                    <div class="l2">
                        <div class="f">
                            <label class="lable22" for="blood-bank-name">Name </label>
                            <input class="input qw" placeholder="Full Name" type="text" id="name" name="name"><br>
                            <small>error message</small>
                        </div>
                    </div>

                    <div class="l2">

                        <div class="f">
                            <label class="lable22" for="no">Email </label>
                            <input class="input" placeholder="Email" type="text" id="email" name="email"><br>
                            <small>error message</small>
                        </div>

                        <div class="f">
                            <label class="lable22" for="no">NIC </label>
                            <input class="input" placeholder="Your NIC" type="text" id="nic" name="nic"><br>
                            <small>error message</small>
                        </div>

                    </div>

                    <div class="l2">
                        <div class="f">
                            <label class="lable22" for="">Street </label>
                            <input class="input qw" placeholder="Street" type="text" id="street" name="street"><br>
                            <small>error message</small>
                        </div>
                    </div>

                    <div class="l2">

                        <div class="f">
                            <label class="lable22" for="">House No. </label>
                            <input class="input" placeholder="House No" type="text" id="house_no" name="house_no"><br>
                            <small>error message</small>
                        </div>

                        <div class="f">
                            <label class="lable22" for="">City </label>
                            <input class="input" placeholder="City" type="text" id="city" name="city"><br>
                            <small>error message</small>
                        </div>

                    </div>

                    <div class="l2">

                        <div class="f">
                            <label class="lable22" for="street">Telephone No.</label>
                            <input class="input" type="text" placeholder="Telephone Number" id="telephone" name="telephone">
                            <small>error message</small>
                        </div>

                        <div class="f">
                            <label class="lable22" for="street">Medical ID</label>
                            <input class="input" placeholder="Medical ID" type="text" id="medical_id" name="medical_id"><br>
                            <small>error message</small>
                        </div>

                    </div>

                    <div class="l2">

                        <div class="f">
                            <label class="lable22" for="street">Blood Bank ID</label>
                            <input class="input" placeholder="Blood Bank ID" type="text" id="blood_bank_id" name="blood_bank_id"><br>
                            <small>error message</small>
                        </div>

                        <div class="f">
                            <label class="lable22" for="city">Admin ID</label>
                            <input class="input" placeholder="Admin ID" type="text" id="admin_id" name="admin_id"><br>
                            <small>error message</small>
                        </div>

                    </div>

                    <div class="l2">

                        <div class="f">
                            <label class="lable22" for="city">Password </label>
                            <input class="input" placeholder="Password" type="password" id="password" name="password"><br>
                            <small>error message</small>
                        </div>

                        <div class="f">
                            <label class="lable22" for="city">Confirm Password </label>
                            <input class="input" placeholder="Confirm Password" type="password" id="cpassword" name="cpassword"><br>
                            <small>error message</small>
                        </div>

                    </div>



                    <div class="but2">
                        <input type="submit" class="add_bank1" name="addtocart">
                        <button type="button" class="add_bank1" onclick="closeForm()">Close</button>
                    </div>

                </form>
            </div>

        </div>

        <!-- 

<div class="row_1">

    <div class="navlinks">

        <a class="a" href="<?= ROOT ?>/adminstaffusers">
            <div class="tocheck">
                <div class="cont">Doctor</div>
            </div>
        </a>

        <a class="a" href="<?= ROOT ?>/adminstaffuserslabstaff">
            <div class="checked activenav">
                <div class="cont">Lab Staff</div>

            </div>
        </a>

        <a class="a" href="<?= ROOT ?>/adminstaffusersphi">
            <div class="rejected">
                <div class="cont">PHI</div>

            </div>
        </a>

    </div>
</div> -->

        <div class="table jstable">
            <table class="table1">
                <thead>
                    <tr>

                        <th>Name</th>
                        <th>User NIC</th>
                        <th>Blood Bank</th>
                        <th>Tel Number</th>
                        <th>Home Town</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th></th>

                    </tr>
                </thead>
                <tbody>

                    <?php foreach ($data[0] as $value) : ?>
                        <tr>

                            <td><?= $value->name ?></td>
                            <td><?= $value->nic ?></td>
                            <td><?= $value->blood_bank_name ?></td>
                            <td><?= $value->telephone ?></td>
                            <td><?= $value->city ?></td>
                            <td><?= $value->email ?></td>
                            <td>
                                <select name="status" class="status" data-id="<?php echo $value->id; ?>">
                                    <option value=1 <?php if ($value->status == 1) echo "selected" ?>>Active</option>
                                    <option value=0 <?php if ($value->status == 0) echo "selected" ?>>Deactive</option>
                                </select>
                            </td>
                            <td>

                                <div class="edit">
                                    <div class="city1">
                                        <button id="editBtn<?= $value->id ?>" name="edit" class="edit1" onclick="openForm1(this.id)">Edit
                                        </button>


                                        <div id="myForm<?= $value->id ?>" class="form-popup myForm1">
                                            <form method="post" class="form-container">

                                                <h2>Edit Lab Staff</h2>

                                                <div class="name1" hidden>
                                                    <label class="lable22" for="blood-bank-name">ID </label>
                                                    <input class="Bname" type="text" id="id" name="id" value="<?= $value->id ?>" readonly><br>
                                                </div>



                                                <div class="l2">
                                                    <div class="f">
                                                        <label class="lable22" for="blood-bank-name">Name </label>
                                                        <input class="input qw" placeholder="Full Name" type="text" id="name" name="name" value="<?= $value->name ?>"><br>
                                                        <small>error message</small>
                                                    </div>
                                                </div>

                                                <div class="l2">

                                                    <div class="f">
                                                        <label class="lable22" for="no">Email </label>
                                                        <input class="input" placeholder="Email" type="text" id="email" name="email" value="<?= $value->email ?>"><br>
                                                        <small>error message</small>
                                                    </div>

                                                    <div class="f">
                                                        <label class="lable22" for="no">NIC </label>
                                                        <input class="input" placeholder="Your NIC" type="text" id="nic" name="nic" value="<?= $value->nic ?>"><br>
                                                        <small>error message</small>
                                                    </div>

                                                </div>

                                                <div class="l2">
                                                    <div class="f">
                                                        <label class="lable22" for="">Street </label>
                                                        <input class="input qw" placeholder="Street" type="text" id="street" name="street" value="<?= $value->street ?>"><br>
                                                        <small>error message</small>
                                                    </div>
                                                </div>

                                                <div class="l2">

                                                    <div class="f">
                                                        <label class="lable22" for="">House No. </label>
                                                        <input class="input" placeholder="House No" type="text" id="house_no" name="house_no" value="<?= $value->house_no ?>"><br>
                                                        <small>error message</small>
                                                    </div>

                                                    <div class="f">
                                                        <label class="lable22" for="">City </label>
                                                        <input class="input" placeholder="City" type="text" id="city" name="city" value="<?= $value->city ?>"><br>
                                                        <small>error message</small>
                                                    </div>

                                                </div>

                                                <div class="l2">

                                                    <div class="f">
                                                        <label class="lable22" for="street">Telephone No.</label>
                                                        <input class="input" type="text" placeholder="Telephone Number" id="telephone" name="telephone" value="<?= $value->telephone ?>">
                                                        <small>error message</small>
                                                    </div>

                                                    <div class="f">
                                                        <label class="lable22" for="street">Blood Bank ID</label>
                                                        <input class="input" placeholder="Blood Bank ID" type="text" id="blood_bank_id" name="blood_bank_id" value="<?= $value->blood_bank_id ?>"><br>
                                                        <small>error message</small>
                                                    </div>

                                                </div>



                                                <div class="l2">

                                                    <div class="f">
                                                        <label class="lable22" for="city">Password </label>
                                                        <input class="input" placeholder="Password" type="password" id="password" name="password" value="<?= $value->password ?>"><br>
                                                        <small>error message</small>
                                                    </div>

                                                    <div class="f">
                                                        <label class="lable22" for="city">Confirm Password </label>
                                                        <input class="input" placeholder="Confirm Password" type="password" id="password" name="password" value="<?= $value->password ?>"><br>
                                                        <small>error message</small>
                                                    </div>

                                                </div>

                                                <input name="editForm" value=1 type="hidden">

                                                <div class="but2">
                                                    <input type="submit" class="add_bank1">
                                                    <button id="closeBtn<?= $value->id ?>" type="button" class="add_bank1" onclick="closeForm1(this.id)">Close</button>
                                                </div>

                                            </form>
                                        </div>

                                    </div>
                                </div>

                            </td>
                        </tr>

                    <?php $i++;
                    endforeach; ?>
                </tbody>
            </table>

        </div>




    </div>


</div>








<script src="<?= ROOT ?>/js/Admin_Add_Lab_Staff.js"></script>


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
                    var str = "<table><thead><tr><th>Medical ID</th><th>Name</th><th>User NIC</th><th>Blood Bank</th><th>Telephone</th><th>Email</th><th></th></tr><thead>";
                    for (var i = obj.length - 1; i >= 0; i--) {
                        console.log(obj[i].name);
                        str += "<tr class='hov'><td>" + obj[i].name +
                            "</td> <td>" + obj[i].nic +
                            "</td> <td>" + obj[i].blood_bank_name +
                            "</td> <td>" + obj[i].telephone +
                            "</td> <td>" + obj[i].city +
                            "</td> <td>" + obj[i].email +
                            "</td> <td>" + `<div class="edit">
                            <div class="city1">
                                <button id="editBtn${obj[i].id}" name="" class="edit1" onclick="openForm1(this.id)">Edit
                                </button>



                                <div id="myForm${obj[i].id}" class="form-popup myForm1">
                                    <form method="post" class="form-container">


                                        <h2>Edit Lab Staff</h2>

                                        <div class="name1" hidden>
                                                    <label class="lable22" for="blood-bank-name">ID </label>
                                                    <input class="Bname" type="text" id="id" name="id" value="${obj[i].id}" readonly><br>
                                                </div>



                                                <div class="l2">
                                                    <div class="f">
                                                        <label class="lable22" for="blood-bank-name">Name </label>
                                                        <input class="input qw" placeholder="Full Name" type="text" id="name" name="name" value="${obj[i].name}"><br>
                                                        <small>error message</small>
                                                    </div>
                                                </div>

                                                <div class="l2">

                                                    <div class="f">
                                                        <label class="lable22" for="no">Email </label>
                                                        <input class="input" placeholder="Email" type="text" id="email" name="email" value="${obj[i].email}"><br>
                                                        <small>error message</small>
                                                    </div>

                                                    <div class="f">
                                                        <label class="lable22" for="no">NIC </label>
                                                        <input class="input" placeholder="Your NIC" type="text" id="nic" name="nic" value="${obj[i].nic}"><br>
                                                        <small>error message</small>
                                                    </div>

                                                </div>

                                                <div class="l2">
                                                    <div class="f">
                                                        <label class="lable22" for="">Street </label>
                                                        <input class="input qw" placeholder="Street" type="text" id="street" name="street" value="${obj[i].street}"><br>
                                                        <small>error message</small>
                                                    </div>
                                                </div>

                                                <div class="l2">

                                                    <div class="f">
                                                        <label class="lable22" for="">House No. </label>
                                                        <input class="input" placeholder="House No" type="text" id="house_no" name="house_no" value="${obj[i].house_no}" ><br>
                                                        <small>error message</small>
                                                    </div>

                                                    <div class="f">
                                                        <label class="lable22" for="">City </label>
                                                        <input class="input" placeholder="City" type="text" id="city" name="city" value="${obj[i].city}"><br>
                                                        <small>error message</small>
                                                    </div>

                                                </div>

                                                <div class="l2">

                                                    <div class="f">
                                                        <label class="lable22" for="street">Telephone No.</label>
                                                        <input class="input" type="text" placeholder="Telephone Number" id="telephone" name="telephone" value="${obj[i].telephone}" >
                                                        <small>error message</small>
                                                    </div>

                                                    <div class="f">
                                                        <label class="lable22" for="street">Blood Bank ID</label>
                                                        <input class="input" placeholder="Blood Bank ID" type="text" id="blood_bank_id" name="blood_bank_id" value="${obj[i].blood_bank_id}" ><br>
                                                        <small>error message</small>
                                                    </div>

                                                </div>



                                                <div class="l2">

                                                    <div class="f">
                                                        <label class="lable22" for="city">Password </label>
                                                        <input class="input" placeholder="Password" type="password" id="password" name="password" value="${obj[i].password}"><br>
                                                        <small>error message</small>
                                                    </div>

                                                    <div class="f">
                                                        <label class="lable22" for="city">Confirm Password </label>
                                                        <input class="input" placeholder="Confirm Password" type="password" id="password" name="password" value="${obj[i].password}"><br>
                                                        <small>error message</small>
                                                    </div>

                                                </div>

                                        <input name="editForm" value=1 type="hidden">

                                        <div class="but2">
                                            <input type="submit" class="add_bank1" >
                                            <button type="button" class="add_bank1" id="closeBtn${obj[i].id}" onclick="closeForm1(this.id)">Close</button>
                                        </div>

                                    </form>
                                </div>

                            </div>
                        </div>` +
                            "</td> </tr>";
                    }
                    resultdiv.innerHTML = str;
                    // console.log('Hello');
                }
            }
        })
        ajax.open('post', '<?= ROOT ?>/adminstaffuserslabstaff/index2', true);
        ajax.send(form);
    }




    const statuses = document.querySelectorAll('.status');

    statuses.forEach(function(status) {
        status.addEventListener('change', function() {
            const userId = status.getAttribute("data-id");
            sendSelectedOption(status.value, userId);
        });
    });

    function sendSelectedOption(status, id) {
        console.log(id);
        console.log(status);
        const url = `http://localhost/GP/BloodLink/public/adminstaffuserslabstaff/updateAccStatus/${id}`;
        const data = {
            status: status
        };

        $.ajax({
            type: "POST",
            url: url,
            data: data,
            responseType: "JSON",
            success: function(data) {
                console.log(data);
            },
            error: function(err) {
                console.log(err);
            }
        });

    }


</script>