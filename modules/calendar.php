<div class="module-container">
  <div class="module-head">
    <h2 class="module-title">Calendar</h2>
    <div class="module-actions">
      <button class="item"><i class="material-icons">more_horiz</i></button>
    </div>
  </div>
  <div class="module-content">
    <?php
    $date = new \DateTime();
    $date->setTime( 0, 0, 0 );
    $start = (clone $date)->modify('first day of this month');
    $start->setTime( 0, 0, 0 );
    $end = (clone $start)->modify('+1 month -1 day');
    $end->setTime( 0, 0, 0 );
    $week = intval((clone $start)->diff($end)->days / 7) + 1;
    $lastMonday = $start->modify('last monday');
    ?>
    <div class="wrap-calendar">
      <table class="calendar">
        <tr class="head">
          <?php for ($i=0; $i < 7; $i++):?>
            <th class="day"><?php echo (clone $start)->modify('+'.$i.' days')->format('D'); ?></th>
          <?php endfor;?>
        </tr>
        <?php for ($w=0; $w < $week; $w++):?>
          <tr class="week">
            <?php for ($i=0; $i < 7; $i++):?>
              <?php
                $day = (clone $lastMonday)->modify('+'.($i+($w*7)).' days');
                $diff = $date->diff($day)->days;
              ?>
              <td class="day <?php echo ($diff === 0)?'today':'';?> <?php echo ($day->format('N') >= 6)?'weekend':'' ?>">
                <div class="content">
                  <?php echo ($day->format('m') === $date->format('m'))?$day->format('d'):''; ?>
                </div>
              </td>
            <?php endfor;?>
          </tr>
        <?php endfor;?>
      </table>
    </div>
  </div>
</div>