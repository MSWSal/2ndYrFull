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
// <!-- <script src="<?= ROOT ?>/js/search.js"></script> -->