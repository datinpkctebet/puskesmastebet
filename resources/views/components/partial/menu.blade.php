<nav class="navbar nav_bottom" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header nav_2">
      <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse"
        data-target="#bs-megadropdown-tabs">Menu
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"></a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->

    <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
      <ul class="nav navbar-nav nav_1" style="width: 100%">
        @foreach ($arrayMenu as $item)
          @php
            $isGroup = isset($item['group']);
            $classGroup = $isGroup ? 'dropdown' : '';

            if ($isGroup) {
              $parseUrl = explode("/", $item['group'][0]['url'])[1];
            } else {
              $parseUrl = explode("/", $item['url'])[1];
            }
            $classActive = (Request::segment(1) === $parseUrl) ? 'current_page' : '';
          @endphp

          <li class="{{ $classGroup }} {{ $classActive }}">
            <a
              @if($isGroup)
                href="#" class="dropdown-toggle" data-toggle="dropdown"
              @else
                href="{{ $item['url'] }}"
              @endif>
              {{ $item['name'] }}
              @if($isGroup) <span class="caret" /> @endif
            </a>

            @if($isGroup)
              <ul class="dropdown-menu drop_menu" role="menu">
                @foreach ($item['group'] as $subitem)
                  <li>
                    <a href="{{ $subitem['url'] }}">
                      {{ $subitem['name'] }}
                    </a>
                  </li>
                @endforeach
              </ul>
            @endif
          </li>
        @endforeach
      </ul>
    </div><!-- /.navbar-collapse -->
  </div>
</nav>
