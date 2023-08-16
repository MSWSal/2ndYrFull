
var res;
window.addEventListener("load", ()=>{
    var ajax = new XMLHttpRequest();
    ajax.open('POST', 'http://localhost/Bloood%20Link%202/public/dashboard', true);
  
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

                var ctx = document.getElementById('chartpie').getContext('2d');
                var datapie = {
                    labels: ['Defect', 'Non-Defect'],
                    datasets: [{
                      data: [res.rejthismonth.rej, res.rejthismonth.nonrej],
                      backgroundColor: [
                        'rgba(45, 49, 250, 1)',
                        'rgba(93, 139, 244, 1)'
                        
                      ]
                    }]
                  };

                  var myPieChart = new Chart(ctx, {
                    type: 'doughnut',
                    data: datapie,
                    options: {
                        plugins:{
                            legend:{
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
                    }
                  });

                  var ctx2 = document.getElementById('chartpie2').getContext('2d');
                var datapie2 = {
                    labels: ['Rejects', 'Non-rejects'],
                    datasets: [{
                      data: [res.rejthisyear.rej, res.rejthisyear.nonrej],
                      backgroundColor: [
                        'rgba(5, 19, 103, 1)',
                        'rgba(93, 139, 244, 1)'
                        
                      ]
                    }]
                  };

                  var myPieChart2 = new Chart(ctx2, {
                    type: 'doughnut',
                    data: datapie2,
                    options: {
                        plugins:{
                            legend:{
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
                    }
                    
                  });

                  var canvas2 = document.getElementById("chart3");
                var config2 = {
                type: "bar",
                data: {labels: ["HIV/AIDS","Thalasemea","Hemophilia","Dengue","Malaria","Other"],
                        datasets: [{label:"Previous Year", 
                                    data: [res.predefect.HIV,res.predefect.Thalasemea,res.predefect.Hemophilia,res.predefect.Dengue,res.predefect.Malaria,res.predefect.other],
                                    backgroundColor: [
                                        'rgba(rgba(45, 49, 250, 1))'
                                        
                                    ]
                                    },
                                    {label:"This Year", 
                                    data: [res.defect.HIV,res.defect.Thalasemea,res.defect.Hemophilia,res.defect.Dengue,res.defect.Malaria,res.defect.other],
                                    backgroundColor: [
                                        'rgba(5, 19, 103, 1)'
                                        
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


                var barchart2= new Chart(canvas2, config2)



                var canvas4 = document.getElementById("chart4");
                var config4 = {
                type: "bar",
                data: {labels: ["HIV/AIDS","Thalasemea","Hemophilia","Dengue","Malaria","Other"],
                        datasets: [{label:"Previous Year", 
                                    data: [res.predefect.HIV,res.predefect.Thalasemea,res.predefect.Hemophilia,res.predefect.Dengue,res.predefect.Malaria,res.predefect.other],
                                    backgroundColor: [
                                        'rgba(rgba(45, 49, 250, 1))'
                                        
                                    ]
                                    },
                                    {label:"This Year", 
                                    data: [res.defect.HIV,res.defect.Thalasemea,res.defect.Hemophilia,res.defect.Dengue,res.defect.Malaria,res.defect.other],
                                    backgroundColor: [
                                        'rgba(5, 19, 103, 1)'
                                        
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


                var barchart2= new Chart(canvas4, config4)
  
      }
    };
  })

  