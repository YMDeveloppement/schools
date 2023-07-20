const ctxs = document.querySelector('#myChartPile');
// console.log(ctxs)

setTimeout(()=>{  
    // const ct x = document.getElementById('myChartPile');
    fetch('./pages/js/data.json')           //api for the get request
        .then(response => response.json())
        .then((dataJson) => {
            console.log(dataJson['label'])
            // ctxs.forEach(ctx => {
        
                Chart.defaults.font.size = 10;
                const data = {
                    labels:dataJson['label'],
                    datasets: [{
                        label: 'total of student',
                        data: dataJson['count'],
                        backgroundColor: ["#F72585", "#B5179E", "#7209B7", "#560BAD", "#480CA8", "#3A0CA3", "#3F37C9", "#4361EE", "#4895EF", "#4CC9F0", "#9B2226", "#F012BE", "#3D9970", "#111111", "#AAAAAA"],
                        hoverOffset: 4
                    }]
                    
                };
                
                const config = {
                    type: 'polarArea',
                    data: data,
                    options:{
                        
                    }
                    
                };
                
                new Chart(ctxs, config);
            // });
        });
        

    
},1000)
