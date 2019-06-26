<div class="module-container">
  <div class="module-head">
    <h2 class="module-title">Chart</h2>
    <div class="module-actions">
      <button class="item"><i class="material-icons">more_horiz</i></button>
    </div>
  </div>
  <div class="module-content">

    <div class="wrap-chart">
      <canvas class="blog-overview-users"></canvas>
    </div>

  </div>
</div>

<script type="text/javascript">
window.addEventListener('load', function(){
Chart.defaults.LineWithLine = Chart.defaults.line
Chart.controllers.LineWithLine = Chart.controllers.line.extend({
 draw: function (t) {
  if (Chart.controllers.line.prototype.draw.call(this, t), this.chart.tooltip._active && this.chart.tooltip._active.length) {
   var o = this.chart.tooltip._active[0],
   e = this.chart.ctx,
   i = o.tooltipPosition().x,
   n = this.chart.scales['y-axis-0'].top,
   r = this.chart.scales['y-axis-0'].bottom;
   e.save(),
   e.beginPath(),
   e.moveTo(i, n),
   e.lineTo(i, r),
   e.lineWidth = 0.5,
   e.strokeStyle = '#ddd',
   e.stroke(),
   e.restore()
  }
 }
})
var o = document.getElementsByClassName('blog-overview-users') [0],
a = {
  labels: Array.from(new Array(30), function (e, o) {
    return 0 === o ? 1 : o
  }),
  datasets: [
    {
      label: 'Current Month',
      fill: 'start',
      data: [
        500,
        800,
        320,
        180,
        240,
        320,
        230,
        650,
        590,
        1200,
        750,
        940,
        1420,
        1200,
        960,
        1450,
        1820,
        2800,
        2102,
        1920,
        3920,
        3202,
        3140,
        2800,
        3200,
        3200,
        3400,
        2910,
        3100,
        4250
      ],
      backgroundColor: 'rgba(0,123,255,0.1)',
      borderColor: 'rgba(0,123,255,1)',
      pointBackgroundColor: '#ffffff',
      pointHoverBackgroundColor: 'rgb(0,123,255)',
      borderWidth: 1.5,
      pointRadius: 0,
      pointHoverRadius: 3
    },
    {
      label: 'Past Month',
      fill: 'start',
      data: [
        380,
        430,
        120,
        230,
        410,
        740,
        472,
        219,
        391,
        229,
        400,
        203,
        301,
        380,
        291,
        620,
        700,
        300,
        630,
        402,
        320,
        380,
        289,
        410,
        300,
        530,
        630,
        720,
        780,
        1200
      ],
      backgroundColor: 'rgba(255,65,105,0.1)',
      borderColor: 'rgba(255,65,105,1)',
      pointBackgroundColor: '#ffffff',
      pointHoverBackgroundColor: 'rgba(255,65,105,1)',
      borderDash: [
        3,
        3
      ],
      borderWidth: 1,
      pointRadius: 0,
      pointHoverRadius: 2,
      pointBorderColor: 'rgba(255,65,105,1)'
    }
  ]
};
window.BlogOverviewUsers = new Chart(o, {
  type: 'LineWithLine',
  data: a,
  options: {
    responsive: !0,
    legend: {
      position: 'top'
    },
    elements: {
      line: {
        tension: 0.3
      },
      point: {
        radius: 0
      }
    },
    scales: {
      xAxes: [
        {
          gridLines: !1,
          ticks: {
            padding: 10,
            callback: function (e, o) {
              return o % 7 != 0 ? '' : e
            }
          }
        }
      ],
      yAxes: [
        {
          ticks: {
            suggestedMax: 45,
            callback: function (e, o, a) {
              return 0 === e ? e : e > 999 ? (e / 1000).toFixed(1) + 'K' : e
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