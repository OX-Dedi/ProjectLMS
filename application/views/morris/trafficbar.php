<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
    <meta charset="utf-8">
    <title> Welcome to Grafik</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="card">
              <div class="card-header">
                <h3 class="card-title">Statistics LMS</h3>
                <div class="card-tools">
                  </button>
                </div>
              </div>
              <div class="card-body p-0">
                <ul class="products-list product-list-in-card pl-3 pr-3">
                  <li class="item">

    <div class="container">
        <div class="row mt-4">
            <div  class="col-12"></div>
            <canvas id="line" height="100"></canvas>
</div>
<div class="row mt-2">
    <div class="col-8">
    <canvas id="bar"></canvas>
    </div>
    <div class="col-4">
    <canvas id="pie"></canvas>
</div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous">   
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>
<script>

    const baseUrl = "<?php echo base_url();?>"
    const myChart = (chartType) => {
        $.ajax({
        url: baseUrl+'Dashboard/chart_data',
        dataType: 'json',
        method: 'get',
        success: data=>{
            let chartX = []
            let chartY = []
            data.map( data =>{
                chartX.push(data.Menu)
                chartY.push(data.Feb)
            })
            const chartData = {
                labels: chartX,
                datasets: [
                    {
                        label: 'Feb',
                        data: chartY,
                        backgroundColor: ['lightcoral'],
                        borderColor: ['lightcoral'],
                        borderWidth: 4
                    }
                ]
            }
            const ctx = document.getElementById(chartType).getContext('2d')
            const config = {
                type: chartType,
                data: chartData
            }
            switch(chartType){
                case 'pie':
                    const pieColor = ['salmon','red','green','blue','aliceblue','pink','gold','plum','darkcyan','wheat','silver','orange','black','magenta','white']
                    chartData.datasets[0].backgroundColor = pieColor
                    chartData.datasets[0].borderColor = pieColor
                    break;
                case 'bar' :
                    chartData.datasets[0].backgroundColor = ['skyblue']
                    chartData.datasets[0].borderColor = ['skyblue']
                    break;
                case 'line' :
                    chartData.datasets[0].backgroundColor = ['red']
                    chartData.datasets[0].borderColor = ['red']
                    break;
                default :
                config.options = {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            }
            const chart = new Chart(ctx, config)
        }
    })
    }
    myChart('pie')
    myChart('bar')
    myChart('line')    
</script>

</body>
</div>
</div>
</div>
</html>