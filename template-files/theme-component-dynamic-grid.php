
  <!-- DYNAMIC GRID COMPONENT-->
  <div class="component-dynamic-grid">
    <div class="container">
      <div class="row controls">
        <div class="col-xs-12">
          <h2>BC TODAY | </h2>
          <label>Filter:</label>
          
          <button class="filter" data-filter="all">All</button>
          <button class="filter" data-filter=".category-1">Category 1</button>
          <button class="filter" data-filter=".category-2">Category 2</button>
          
          <label>Sort:</label>
          
          <button class="sort" data-sort="myorder:asc">Asc</button>
          <button class="sort" data-sort="myorder:desc">Desc</button>
          
          <label>Change Layout:</label>
          
          <button id="ChangeLayout">list</button>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12">
          <div id="Container" class="container">
            <div class="mix category-1" data-myorder="1"></div>
            <div class="mix category-1" data-myorder="2"></div>
            <div class="mix category-1" data-myorder="3"></div>
            <div class="mix category-2" data-myorder="4"></div>
            <div class="mix category-1" data-myorder="5"></div>
            <div class="mix category-1" data-myorder="6"></div>
            <div class="mix category-2" data-myorder="7"></div>
            <div class="mix category-2" data-myorder="8"></div>
            <div class="gap"></div>
            <div class="gap"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- DYNAMIC GRID COMPONENT -->
