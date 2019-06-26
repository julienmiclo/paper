<div class="module-container">
  <div class="module-head">
    <h2 class="module-title">Agenda</h2>
    <div class="module-actions">
      <a href="" class="button">add new event</a>
      <button class="item"><i class="material-icons">more_horiz</i></button>
    </div>
  </div>
  <div class="module-content">

    <div class="wrap-actions-agenda">
      <div class="select-user">
        <select class="select-select2" name="">
          <option value="">--</option>
          <option value="">Julien</option>
          <option value="">Louis</option>
          <option value="">Sophie</option>
        </select>
      </div>
    </div>

    <div class="wrap-agenda h100">
      <?php
      $date = new \DateTime();
      $date->setTime( 0, 0, 0 );
      $start = (clone $date)->modify('monday this week');
      $start->setTime( 0, 0, 0 );
      ?>
      <div class="header-agenda">
        <ul class="metas-dates">
          <?php for ($i=0; $i < 7; $i++):?>
            <?php $currentDay = (clone $start)->modify('+'.$i.' days'); ?>
            <li class="day <?php echo ( $date->diff($currentDay)->days === 0 )?'current':''; ?>">
              <span class="meta-date-name"><?php echo $currentDay->format('l'); ?></span>
              <span class="meta-date-number"><?php echo $currentDay->format('d.m'); ?></span>
            </li>
          <?php endfor;?>

        </ul>
      </div>
      <div class="body-agenda">
        <ul class="metas-columns">
          <li class="day current">
            <div class="event">
              <div class="content">
                <span class="meta-title">Zapier Platform</span>
                <span class="meta-hours">10:00 - 12:00</span>
                <span class="meta-message">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
              </div>
              <div class="handler"></div>
            </div>
            <div class="event">
              <div class="content">
                <span class="meta-title">Blog - Paper time</span>
                <span class="meta-hours">14:00 - 18:00</span>
              </div>
              <div class="handler"></div>
            </div>
          </li>
          <li class="day"></li>
          <li class="day"></li>
          <li class="day"></li>
          <li class="day"></li>
          <li class="day day-off">
            <div class="event">
              <div class="content">
                <span class="meta-title">Meeting</span>
                <span class="meta-hours">08:00 - 10:00</span>
                <span class="meta-place">@room</span>
              </div>
              <div class="handler"></div>
            </div>
          </li>
          <li class="day day-off"></li>
        </ul>
      </div>
    </div>

  </div>
</div>