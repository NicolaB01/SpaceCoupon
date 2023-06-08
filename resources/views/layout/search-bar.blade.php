<form class="search-bar-form" action="{{route($redirect)}}" method="GET">
  <section class="serch-div"> 
      <div>
          <input type="search" name="search" class="search-bar" placeholder="Search" value="{{request()->search}}" required>
          <button class="search-button">
          <i class="fa fa-magnifying-glass" style="scale: 1.5; margin-left: 10px;"></i>
          </button>
      </div>
  </section>
</form>
