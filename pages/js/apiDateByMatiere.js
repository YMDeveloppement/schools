//get the list of evaluation for a specific date
const ctx_eval = document.querySelector('#eval_date');
$.ajax({
  url:"Controllers/evaluations.php",    //the page containing php script
  type: "GET",    //request type,
  dataType: 'json',
  data: {"func": "apiDateByMatiere"},
  success:function(result){
      let date = result.date
      let matiere = result.matiere
      // let newData = [];
      // for(let i = 0 ; i< date.length ; i++){
      //   const line = {
      //     "x" : date[i],
      //     "y"  : matiere[i]
      //   };
      //   newData.push(line)
      // }
      console.log(result)

      const data= {
        labels:date,
          datasets: [{
              label: 'eval_date',
              data: matiere,  
              backgroundColor: 'rgb(255, 99, 132)'
          }]
          
      };

      const config = {
        type: 'bubble',
        data: data,
        options: {
          responsive: true,
          plugins: {
            scales: {
              x: {
                type: 'time',
                time:{
                  unit:'day',
                  parser:'yyyy-mm-dd'
                }
              },
              y:{}  
            }
          }
        },
      };
      // const config = {
      //   type: 'scatter',
      //   data: data,
      //   options: {
      //     scales: {
      //       x: {
      //         type: 'time',
      //         time:{
      //           unit:'day',
      //           parser:'yyyy-mm-dd'
      //         }
      //       },
      //       y:{}  
      //     }
      //   }
      // };

      new Chart(ctx_eval, config);
  } 
});





