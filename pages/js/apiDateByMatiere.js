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
      let newData = [];
      for(let i = 0 ; i< date.length ; i++){
        const line = {
          "x" : date[i],
          "y"  : matiere[i]
        };
        newData.push(line)
      }
      console.log(newData)

      const data= {
          datasets: [{
              label: 'eval_date',
              data: [
                {x: '2023-11-10', y: 'Activités orales'},
                {x: '2023-01-10', y: 'Activités orales'},
                {x: '2023-02-10', y: 'Activités orales'}
                ] ,
              backgroundColor: 'rgb(255, 99, 132)'
          }]
          
      };

      const config = {
        type: 'bubble',
        data: data,
        options: {
          scales: {
            x: {
              type: 'time',
              time:{
                unit:"day"
              }
            },
            y:{
              beginAtZero:true
            }
          }
        }
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





