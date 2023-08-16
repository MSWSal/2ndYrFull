
var res;
window.addEventListener("load", ()=>{
    var ajax = new XMLHttpRequest();
    ajax.open('POST', 'http://localhost/Bloood%20Link%202/public/reportui4', true);
  
    ajax.send();
  
    ajax.onreadystatechange = function() {
      if (this.readyState === 4 && this.status === 200) {
        res =JSON.parse(this.responseText);
  
        console.log(res);

        var canvas = document.getElementById("chart");
                var config = {
                type: "bar",
                data: {labels: ["HIV/AIDS","Thalasemea","Hemophilia","Dengue","Malaria","Other"],
                        datasets: [{label:"Previous Year", 
                                    data: [res.predefect.HIV,res.predefect.Thalasemea,res.predefect.Hemophilia,res.predefect.Dengue,res.predefect.Malaria,res.predefect.other],
                                    backgroundColor: [
                                        'rgba(45, 49, 250, 1)'
                                        
                                    ]
                                    },
                                    {label:"This Year", 
                                    data: [res.defect.HIV,res.defect.Thalasemea,res.defect.Hemophilia,res.defect.Dengue,res.defect.Malaria,res.defect.other],
                                    backgroundColor: [
                                        'rgba(5, 19, 103, 1)'
                                        
                                    ]
                                    }
                                ]
                        }
                        
                        }


                var barchart= new Chart(canvas, config)


                

                 

                  


  
      }
    };
  })

  