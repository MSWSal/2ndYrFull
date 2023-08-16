<?php $this->view('includes/pageinit'); ?>
<?php $this->view('adminnavupDashBoard'); ?>

<?php $i = 0 ?>
<title>Admin Donation Camps</title>


<link rel="stylesheet" href="<?= ROOT ?>/css/admindonationcamps.css">

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
                <p class="">Blood Bank</p>
            </div>
        </a>


        <a class="a11" href="<?= ROOT ?>/AdminBloodStocks">
            <div class="b11">
                <p>View Blood Stocks</p>
            </div>
        </a>


        <a class="a11" href="<?= ROOT ?>/AdminDonationCamps">
            <div class="">
                <p class="pp">View Blood Donation <br> Camps</p>
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
        

<div class="">
    <h1 class="h1">Blood Donation Camps</h1>
</div>


<div class="s_tag">
    <div class="s_tag1">
        <!-- <p hidden> HEllo </p> -->

    </div>


    <div class="s_tag">
        <form>
            <input type="text" placeholder="&#xf002; Search Camps..." class="jssearch" oninput=get_data()>

        </form>
        <!-- <a href="<?= ROOT ?>/admindonationcamps"><button class="reset">Reset</button></a> -->

    </div>

</div>

<div class="table jstable">
    <table class="table1">
        <thead>
            <tr>
                
                <th>Name</th>                
                <th>Date</th>
                <th>Street</th>
                <th>City</th>
                <th>Assigned Blood Bank</th>
                <th>Status</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($rows as $value) : ?>
                <tr>
                
                    <td><?= $value->camp_name ?></td>
                    <td><?= $value->date ?></td>
                    <td><?= $value->street ?></td>
                    <td><?= $value->city ?></td>
                    <td><?= $value->blood_bank_name ?></td>
                    
                    <td>
                        <?php
                        $cdate = date("y-m-d");

                        if ((strtotime($cdate) < (strtotime($value->date)))) { ?>
                            <div class="upc"><?php echo "Upcoming"; ?></div>
                        <?php }
                        if ((strtotime($cdate) == (strtotime($value->date)))) { ?>
                            <div class="ong"><?php echo "Ongoing"; ?></div>
                        <?php }
                        if ((strtotime($cdate) > (strtotime($value->date)))) { ?>
                            <div class="clo"><?php echo "Closed"; ?></div>
                        <?php }
                        ?>
                    </td>
                    <td>
                        <div class="city">

                            <div class="add_bank">
                                <button class="upc1" id="editBtn<?= $value->camp_id ?>" onclick="openForm(this.id)">View </button>

                            </div>
                            <div id="myForm<?= $value->camp_id ?>" class="form-popup myForm">
                                <form method="post" class="form-container">

                                    <h2><?= $value->camp_name ?></h2>


                                    <div class="map">
                                        <label class="lable22" class="loc" for="map">Description</label>
                                        <p class="des">
                                        <div class="box12">
                                            <?= $value->description ?>
                                        </div>
                                        </p>
                                    </div>



                                    <?php
                                    $cdate = date("y-m-d");

                                    if ((strtotime($cdate) == (strtotime($value->date))) || (strtotime($cdate) < (strtotime($value->date)))) { ?>
                                        <div class="name1">
                                            <label class="lable22" for="blood-bank-name">Start Time </label>

                                            <p class="des">
                                            <div class="box12">
                                                <?= $value->start_time ?>
                                            </div>
                                            </p>
                                        </div>
                                    <?php }
                                    if ((strtotime($cdate) > (strtotime($value->date)))) { ?>
                                        <div class="name1">
                                            <label class="lable22" for="blood-bank-name">Rating </label>

                                            <p class="des">
                                            <div class="box12">
                                                <?= $value->rating ?>
                                            </div>
                                            </p>
                                        </div>
                                    <?php }
                                    ?>



                                    <div class="name1">
                                        <label class="lable22" for="blood-bank-name">Assigned Blood Bank</label>
                                        <input class="Bname" type="text" id="name" name="name" value="<?= $value->blood_bank_id ?>"><br>
                                    </div>

                                    <div class="but2">
                                        <button type="button" id="closeBtn<?= $value->camp_id ?>" class="add_bank1" onclick="closeForm(this.id)">Close</button>
                                    </div>

                                </form>
                            </div>

                        </div>
                    </td>
                </tr>

                <?php $i++; ?>
            <?php endforeach; ?>
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
                // console.log(ajax.responseText);
                var obj = JSON.parse(ajax.responseText);
                console.log(obj);
                var resultdiv = document.querySelector(".jstable");
                if (resultdiv) { // check if the element exists
                    var str = "<table><thead><tr><th>Name</th><th>Address</th><th>Date</th><th>Status</th><th></th></tr><thead>";
                    for (var i = obj.length - 1; i >= 0; i--) {
                        console.log(obj[i].name);

                        // Determine the status based on the date
                        var status = "";
                        var status1 = "";
                        var today = new Date();
                        var campDate = new Date(obj[i].date);
                        if (campDate > today) {
                            status = "<div class='upc'>Upcoming</div>";
                        } else if (campDate < today) {
                            status = "<div class='clo'>Closed</div>";
                        } else {
                            status = "<div class='ong'>Ongoing</div>";
                        }

                        if (campDate >= today) {
                            status1 = `<div class='name1'>
                                            <label class='lable22' for='blood-bank-name'>Start Time </label>
                                            <p class='des'>
                                                <div class='box12'>${obj[i].start_time}</div>
                                            </p>
                                        </div>`;
                        } else if (campDate < today) {
                            status1 = `<div class='name1'>
                                            <label class='lable22' for='blood-bank-name'>Rating </label>
                                            <p class='des'>
                                                <div class='box12'>${obj[i].rating}</div>
                                            </p>
                                       </div>`;
                        }

                        // Add the row to the table
                        str += "<tr class='hov'><td>" + obj[i].camp_name +                            
                            "</td> <td>" + obj[i].address +
                            "</td> <td>" + obj[i].date +
                            "</td> <td>" + status +
                            "</td> <td>" + `<div class="add_bank">
                                            <button class="upc1" id="editBtn${obj[i].camp_id}" onclick="openForm(this.id)">View </button>
                                            </div>
                                            <div id="myForm${obj[i].camp_id}" class="form-popup myForm">
                                            <form method="post" class="form-container">

                                                <h2>${obj[i].camp_name}</h2>


                                                <div class="map">
                                                    <label class="lable22" class="loc" for="map">Description</label>
                                                    <p class="des">
                                                    <div class="box12">
                                                        ${obj[i].description}
                                                    </div>
                                                    </p>
                                                </div>

                                                ${status1}

                                                

                                                <div class="name1">
                                                    <label class="lable22" for="blood-bank-name">Assigned Blood Bank</label>
                                                    <input class="Bname" type="text" id="name" name="name" value="${obj[i].blood_bank_id}"><br>
                                                </div>

                                                <div class="but2">
                                                    <button type="button" id="closeBtn${obj[i].camp_id}" class="add_bank1" onclick="closeForm(this.id)">Close</button>
                                                </div>

                                            </form>
                            </div>` +
                            "</td>  </tr>";
                    }
                    resultdiv.innerHTML = str;
                    // console.log('Hello');
                }
            }
        })
        ajax.open('post', '<?= ROOT ?>/admindonationcamps/index2', true);
        ajax.send(form);
    }
    
</script>