<?php $this->view('includes/pageinit'); ?>
<?php $this->view('adminnavupDashBoard'); ?>
<title>Admin Public users</title>

<?php $i = 0 ?>

<link rel="stylesheet" href="<?= ROOT ?>/css/adminpublicusers.css">

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
                <p >Blood Bank</p>
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
            <div class="">
                <p  class="pp">Public Users</p>
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
            <h1 class="h1">Public Users</h1>
        </div>

        <div class="s_tag">

            <form>
                <input type="text" placeholder="&#xf002; Search Donor..." class="jssearch" oninput=get_data()>

            </form>
            <!-- <a href="<?= ROOT ?>/adminpublicusers"><button class="reset">Reset</button></a> -->

        </div>

        .
        <div class="table jstable">
            <table class="table1">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Age</th>
                        <th>User NIC</th>
                        <th>City</th>
                        <th>Tel Number</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>

                    <?php foreach ($rows as $value) : ?>
                        <tr>

                            <td><a href="<?= ROOT ?>/AdminPublicUsersProfile?id=<?= $value->id ?>"><?= $value->name ?></a></td>
                            <td><?= $value->email ?></td>
                            <td><?= $value->age ?></td>
                            <td><?= $value->nic ?></td>
                            <td><?= $value->city ?></td>
                            <td><?= $value->mobile ?></td>
                            <td>

                                <?php if (BDefect($value->is_defect) == 1) { ?>
                                    <div class="name1">


                                        <button id="editBtn<?= $value->id ?>" class="edit1" onclick="openForm(this.id)">Defect
                                        </button>

                                        <div class="city">

                                            <div id="myForm<?= $value->id ?>" class="form-popup myForm">
                                                <form method="post" class="form-container">

                                                    <!-- <h2>Enter Blood Bank</h2> -->

                                                    <div class="name1">
                                                        <label class="lable22" for="blood-bank-name">Reason for the Defect </label>
                                                        <p class="des">
                                                        <div class="box12">
                                                            <?= $value->reason ?>
                                                        </div>
                                                        </p>
                                                    </div>


                                                    <div class="but2">
                                                        <button id="closeBtn<?= $value->id ?>" type="button" class="add_bank1" onclick="closeForm(this.id)">Close</button>
                                                    </div>

                                                </form>
                                            </div>

                                        </div>


                                    </div>
                                <?php } ?>



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
    function openForm(id) {
        id = id.replace("editBtn", "");
        document.getElementById("myForm" + id).classList.add("show");
        document.querySelector(".overlay").style.display = "block";
    }

    function closeForm(id) {
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
                // console.log(ajax.responseText);..
                var obj = JSON.parse(ajax.responseText);
                console.log(obj);
                var resultdiv = document.querySelector(".jstable");
                if (resultdiv) { // check if the element exists
                    var str = "<table><thead><tr><th>Name</th><th>Email</th><th>Age</th><th>User NIC</th><th>City</th><th>Tel Number</th><th></th></tr></thead>";
                    for (var i = obj.length - 1; i >= 0; i--) {
                        console.log(obj[i].name);
                        str += "<tr class='hov'><td>" + obj[i].name +
                            "</td> <td>" + obj[i].email +
                            "</td> <td>" + obj[i].age +
                            "</td> <td>" + obj[i].nic +
                            "</td> <td>" + obj[i].city +
                            "</td> <td>" + obj[i].mobile +
                            // "</td> <td>" + $if (obj[i].is_defect == 1) ;
                            //                     `<div class="name1">

                            //                         <button id="editBtn<?= $value->id ?>" class="edit1" onclick="openForm(this.id)">Defect
                            //                         </button>

                            //                         <div class="city">

                            //                             <div id="myForm<?= $value->id ?>" class="form-popup myForm">
                            //                                 <form method="post" class="form-container">

                            //                                     <!-- <h2>Enter Blood Bank</h2> -->

                            //                                     <div class="name1">
                            //                                         <label class="lable22" for="blood-bank-name">Reason for the Defect </label>
                            //                                         <p class="des">
                            //                                         <div class="box12">
                            //                                             <?= $value->reason ?>
                            //                                         </div>
                            //                                         </p>
                            //                                     </div>


                            //                                     <div class="but2">
                            //                                         <button id="closeBtn<?= $value->id ?>" type="button" class="add_bank1" onclick="closeForm(this.id)">Close</button>
                            //                                     </div>

                            //                                 </form>
                            //                             </div>

                            //                         </div>

                            //                     </div>
                            //                 ` + 
                            "</td></tr>";
                    }
                    resultdiv.innerHTML = str;
                    // console.log('Hello');
                }
            }
        })
        ajax.open('post', '<?= ROOT ?>/adminpublicusers/index1', true);
        ajax.send(form);
    }
</script>