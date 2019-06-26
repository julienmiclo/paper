<div class="module-container">
  <div class="module-head">
    <h2 class="module-title">Chart 2</h2>
    <div class="module-actions">
      <button class="item"><i class="material-icons">more_horiz</i></button>
    </div>
  </div>
  <div class="module-content">

    <div class="wrap-chart">
      <canvas class="blog-overview-users-2"></canvas>
    </div>

  </div>
</div>

<script type="text/javascript">
window.addEventListener('load', function(){
var o = document.getElementsByClassName('blog-overview-users-2') [0],
a = {
  labels: ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday','Sunday'],
  datasets: [
    {
      label: '404',
      data: [
        30,
        30,
        10,
        30,
        35,
        20,
        20
      ],
      backgroundColor: 'rgb(239, 132, 61)'
    },
    {
      label: '500',
      data: [
        10,
        30,
        10,
        25,
        10,
        40,
        15
      ],
      backgroundColor: 'rgb(139, 187, 255)'
    },
    {
      label: '301',
      data: [
        30,
        20,
        40,
        25,
        30,
        20,
        10
      ],
      backgroundColor: 'rgb(53, 89, 200)'
    }
  ]
};
window.BlogOverviewUsers = new Chart(o, {
  type: 'bar',
  data: a,
  options: {
    responsive: !0,
    legend: {
      position: 'top'
    },
    scales: {
      xAxes: [
        {
          stacked: true,
          gridLines: !1,
          barThickness : 20,
          ticks: {
            padding: 10
          }
        }
      ],
      yAxes: [
        {
          stacked: true,
          ticks: {
            suggestedMax: 100,
            callback: function (e, o) {
              console.log(e, o % 2)
              return o % 2 != 0 ? '' : e
            }
          }
        }
      ]
    },
    hover: {
      mode: 'nearest',
      intersect: !1
    },
    tooltips: {
      custom: !1,
      mode: 'nearest',
      intersect: !1
    }
  }
});
var r = BlogOverviewUsers.getDatasetMeta(0);
    r.data[0]._model.radius = 0,
    r.data[a.datasets[0].data.length - 1]._model.radius = 0,
    window.BlogOverviewUsers.render();
  });
</script>