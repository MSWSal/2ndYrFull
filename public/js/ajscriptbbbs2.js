
var res;
window.addEventListener("load", ()=>{
    var ajax = new XMLHttpRequest();
    ajax.open('POST', 'http://localhost/Bloood%20Link%202/public/bbbsmanage/index3', true);
  
    ajax.send();
  
    ajax.onreadystatechange = function() {
      if (this.readyState === 4 && this.status === 200) {
        res =JSON.parse(this.responseText);
  
        console.log(res);

        var canvas = document.getElementById("chart");
                var config = {
                type: "bar",
                data: {labels: ["A+","A-","B+","B-","AB+","AB-","O+","O-"],
                        datasets: [{label:"RBC", 
                                    data: [res.rbc.Ap,res.rbc.An,res.rbc.Bp,res.rbc.Bn,res.rbc.ABp,res.rbc.ABn,res.rbc.Op,res.rbc.On],
                                    backgroundColor: [
                                        'rgba(5, 19, 103, 1)'
                                        
                                    ]
                                    },{label:"WBC", 
                                        data: [res.wbc.Ap,res.wbc.An,res.wbc.Bp,res.wbc.Bn,res.wbc.ABp,res.wbc.ABn,res.wbc.Op,res.wbc.On],
                                        backgroundColor: [
                                        'rgba(45, 49, 250, 1)'
                                    ]
                                    },{label:"Plasma", 
                                    data: [res.plsm.Ap,res.plsm.An,res.plsm.Bp,res.plsm.Bn,res.plsm.ABp,res.plsm.ABn,res.plsm.Op,res.plsm.On],
                                    backgroundColor: [
                                        'rgba(93, 139, 244, 1)'
                                    ]
                                    },{label:"Platelettes", 
                                    data: [res.plt.Ap,res.plt.An,res.plt.Bp,res.plt.Bn,res.plt.ABp,res.plt.ABn,res.plt.Op,res.plt.On],
                                    backgroundColor: [
                                        'rgba(144, 224, 255, 1)'
                                    ]
                                    }
                                ]
                        },
                        options: {
                            plugins:{
                                legend:{
                                    position:'bottom',
                                    labels: {
                                        font: {
                                            size: 17
                                        }
                                    }
                                    
                                }
                            // scales: {
                            // xAxes: [{
                            //     ticks: {
                            //     fontSize: 16,
                            //     fontWeight: 'bold'
                            //     }
                            // }]
                            // }
                        }
                        }}


                var barchart= new Chart(canvas, config)


                

                 

                  


  
      }
    };
  })

  