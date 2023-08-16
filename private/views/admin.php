<?php $this->view('includes/pageinit'); ?>
<?php $this->view('adminnavupDashBoard'); ?>
<title>Admin</title>

<?php $i = 0 ?>

<link rel="stylesheet" href="<?= ROOT ?>/css/admin.css">

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
            <div class="b11">
                <p class="">Staff Users</p>
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
            <div class="">
                <p class="pp">Admin</p>
            </div>
        </a>

    </div>

    <div class="right">
        <div class="">
            <h1 class="h1">Admins</h1>
        </div>



        <div class="heading">

            <div class="add_bank13">
                <button class="add_bank12" onclick="openForm()">Add Admin
                </button>
            </div>

        </div>

        <div class="city">

            <div id="myForm" class="form-popup">
                <form method="post" class="form-container" id="Admin_Edit">

                    <h2>Add Admin</h2>

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
                            <input class="input" type="text" placeholder="Telephone Number" id="phone" name="phone">
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



        <div class="table jstable">
            <table class="table1">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>NIC</th>
                        <th>House NO</th>
                        <th>City</th>
                        <th>Street</th>
                        <th></th>
                        <th></th>

                    </tr>
                </thead>
                <tbody>

                    <?php foreach ($rows as $value) : ?>
                        <tr>

                            <td><?= $value->name ?></a></td>
                            <td><?= $value->email ?></td>
                            <td><?= $value->nic ?></td>
                            <td><?= $value->house_no ?></td>
                            <td><?= $value->city ?></td>
                            <td><?= $value->street ?></td>
                            <td></td>
                            <td>

                                <div class="edit">
                                    <div class="city1">
                                        <button id="editBtn<?= $value->id ?>" name="" class="edit1" onclick="openForm1(this.id)">Edit
                                        </button>



                                        <div id="myForm<?= $value->id ?>" class="form-popup myForm1">
                                            <form method="post" class="form-container">

                                                <h2>Edit Admin</h2>

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
                                                        <input class="input" type="text" placeholder="Telephone Number" id="phone" name="phone" value="<?= $value->phone ?>">
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
                                                        <input class="input" placeholder="Confirm Password" type="password" id="cpassword" name="cpassword" value="<?= $value->password ?>"><br>
                                                        <small>error message</small>
                                                    </div>

                                                </div>

                                                <input name="editForm" value=1 type="hidden">

                                                <div class="but2">
                                                    <input type="submit" class="add_bank1">
                                                    <button type="button" class="add_bank1" id="closeBtn<?= $value->id ?>" onclick="closeForm1(this.id)">Close</button>
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












    <script src="<?= ROOT ?>/js/Admin_Edit.js"></script>



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
    </script>