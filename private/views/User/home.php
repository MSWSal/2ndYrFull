<?php $this->view("includes/navbar", $data); ?>
<title>Home</title>
<link rel="stylesheet" href="<?= ROOT ?>/css/home.css">

<?php
// print_r($data);
?>


<div class="part1">
    <div class="sec1">
        <div class="sec1-1">
            <h2 class="heading-change-life">CHANGE THEIR LIFE</h2>
            <h1 class="cont-donate">Donate Blood To <br> Save Life</h1>

        </div>
        <!-- <div class="newscontainer">
            <h2 class="newshead">These people are looking for your help !</h3>
                <?php foreach ($data as $key): ?>
                    <a class="carda" href="<?= ROOT ?>/post_details?id=<?= $key->post_id ?>">
                        <div class="card">
                            <div class="head">
                                <h3><?= $key->title ?> </h3>
                            </div>
                            <div class="image">
                                <img class="imag" src="<?= ROOT ?>/<?= $key->image ?>" alt="">
                            </div>


                        </div>
                    </a>
                <?php endforeach; ?>

        </div> -->


    </div>

    <div class="sec2">

        <div class="sec2-1">
            <h1 class="sec2_h">Become a <br>Donor</h1>
            <p class="sec2_p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem tenetur eligendi deleniti
                sequi! Deserunt labore tempora sit fugit voluptates similique vel ipsa reprehenderit! Suscipit
                voluptatibus aut impedit asperiores architecto recusandae.</p>
            <a href="<?= ROOT ?>/becomeadonor"><button class="sec2_btn">Read More !</button></a>
        </div>
        <div class="sec2-1">
            <h1 class="sec2_h">Organize a blood donation camp?</h1>
            <p class="sec2_p">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veritatis aut autem quam
                obcaecati, impedit quae voluptates doloremque pariatur qui sint. Impedit, illum ducimus mollitia veniam
                ab tenetur libero nam excepturi?</p>
            <a href="<?= ROOT ?>/Viewcampreqstatus"> <button class="sec2_btn">Read More !</button></a>
        </div>
        <div class="sec2-1">
            <h1 class="sec2_h">Looking for a place to donate blood? </h1>
            <p class="sec2_p">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam ad tempora excepturi
                cupiditate nam labore veniam quam praesentium! Sit nesciunt quia fugiat nisi adipisci, est neque
                deserunt tenetur a beatae?</p>
            <a href="<?= ROOT ?>/campaigns"> <button class="sec2_btn">Read More !</button></a>
        </div>

    </div>
</div>
<div class="sec3">
    <div class="sec3_1">
        <div class="sec3_1_1"><img class="sec3img" src="<?= ROOT ?>/images/nurse.png" alt=""></div>
    </div>
    <div class="sec3_1">
        <div class="sec3_1_2">
            <h1>Welcome</h1>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem odio dignissimos praesentium,
                tempore incidunt dolorem repudiandae perspiciatis similique et ab tenetur, velit tempora illo? Labore
                esse libero qui deserunt quasi. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi quia hic
                assumenda non earum nihil quidem est necessitatibus a rerum, expedita explicabo natus exercitationem
                provident saepe fuga quasi facere voluptas! Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Dicta, quaerat veniam minus aliquid nulla voluptatem nisi id earum optio tenetur cum officiis cumque, ea
                mollitia suscipit nihil perferendis, omnis neque? Lorem ipsum dolor sit amet consectetur adipisicing
                elit. Architecto, facilis repellendus deserunt earum illo quo hic iusto non consequuntur nobis maiores.
                Similique laboriosam culpa cupiditate quae ipsam maxime suscipit repudiandae! Lorem ipsum dolor sit amet
                consectetur adipisicing elit. Aut quisquam facilis itaque eos tempora animi? Perspiciatis, veritatis
                itaque eveniet illo magnam recusandae, neque, assumenda reiciendis vero corrupti labore deleniti
                accusamus? </p>

        </div>
    </div>
</div>





</body>

</html>