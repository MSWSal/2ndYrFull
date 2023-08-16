<link rel="stylesheet" href="<?= ROOT ?>/css/bloodbanksearch.css">



<div class="container">
    <div class="search12">
        <form class="form12" method="post" action="">
            <input class="search_input"  placeholder="Search..." class="search_input" onfocus="show_results()" onblur="hide_results()" oninput="get_data(this.value)"></input>
            <a><button><i class="fa-solid fa-magnifying-glass fa-2x2"></i></button></a>

        </form>

    </div>
    <div class="results js-search">
        <!-- <div>harini</div>
        <div>harini</div> -->
    </div>
</div>

<script src="<?= ROOT ?>/js/search.js"></script>