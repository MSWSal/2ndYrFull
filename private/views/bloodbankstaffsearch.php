<link rel="stylesheet" href="<?= ROOT ?>/css/bloodbankstaffsearch.css">



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



<script>
var input = document.querySelector(".search_input");

input.addEventListener('input', () => {

    var text = document.querySelector(".search_input").value;
    text=text.trim();
    // console.log(text);
    var form = new FormData();
  

    form.append('text', text);
    var ajax = new XMLHttpRequest();

    ajax.addEventListener('readystatechange', (e) => {
        if (ajax.readyState == 4 && ajax.status == 200) {
            //results
            // console.log(ajax.responseText);
            let obj = JSON.parse(ajax.responseText);
            let result = document.querySelector('.results');
            let str = '';
            for (let i = 0; i < obj.length; i++) {

                str += `<a href='http://localhost/BloodLink/public/adminpublicusers?id=${obj[i].id}'><div>` + obj[i].id + " " + obj[i].name + "&nbsp;&nbsp;&nbsp;" + obj[i].city + "</div></a>";
            }
            if (text == "") {
                result.style.visibility = "hidden";
                result.innerHTML = '';

            }
            else {
                result.style.visibility = "visible";
                result.innerHTML = str;
            }

        }
    })
    ajax.open('post', 'http://localhost/BloodLink/public/Search?data', true);
    ajax.send(form);


})

function handle_results(result) {
console.log(result);
}

</script>




<!-- 

Add the jQuery library for easier AJAX requests
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<link rel="stylesheet" href="<?= ROOT ?>/css/bloodbankstaffsearch.css">

<div class="container">
    <div class="search12">
        <form class="form12" method="post" action="">
            <input class="search_input" placeholder="Search..." oninput="get_data(this.value)">
            <button type="submit"><i class="fa-solid fa-magnifying-glass fa-2x2"></i></button>
        </form>
    </div>
    <div class="results js-search"></div>
</div>

<script>
    function get_data(search_text) {
        // Send AJAX request to server to fetch search results
        $.ajax({
            url: "http://localhost/BloodLink/public/bloodbankstaffsearch?data",
            type: "POST",
            data: {
                text: search_text.trim()
            },
            success: function(response) {
                let obj = JSON.parse(response);
                let result = $('.results');
                let str = '';

                for (let i = 0; i < obj.length; i++) {
                    str += `<a href='http://localhost/BloodLink/public/adminpublicusers?id=${obj[i].id}'><div>${obj[i].id} ${obj[i].name} &nbsp;&nbsp;&nbsp; ${obj[i].city}</div></a>`;
                }

                // Update search results with new data
                result.html(str);

                // Show/hide results based on search query
                if (search_text == "") {
                    result.hide();
                } else {
                    result.show();
                }
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });
    }
</script> -->