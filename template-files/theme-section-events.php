  
  <!-- EVENT SECTION -->
    <section class="section-events">
      <div class="container">
        <div class="row">
          <div class="col-xs-4"></div>
          <div class="col-xs-4 text-center">
            <h2>EVENTS</h2>
          </div>
          <div class="col-xs-4 event-location-input text-right">
            <span class="glyphicon glyphicon-map-marker"></span><input type="text" class="form-control" id="eventLocation" placeholder="Boston (edit)">
          </div>
        </div>
        <div class="row">
          <div class="col-xs-4"></div>
          <div class="col-xs-4 text-center event-date-dropdown">
            <span class="glyphicon glyphicon-menu-down pull-right"></span>
            <select class="form-control">
              <option>March 2015</option>
              <option>April 2015</option>
              <option>May 2015</option>
              <option>June 2015</option>
              <option>July 2015</option>
            </select>
          </div>
          <div class="col-xs-4"></div>
        </div>
        <?php include( 'template-files/theme-component-events.php' ); ?>
      </div>
    </section>
  <!-- EVENT SECTION END -->