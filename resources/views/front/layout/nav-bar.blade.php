<nav class="navbar navbar-expand-lg navbar-light bg-info p-0 container">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto d-flex flex-row">
          <li class="nav-item navigation__item py-1 px-2 shadow border-right border-left">
            <a class="nav-link text-uppercase navigation__item__category text-center text-white px-0 text-nowrap" href="{{ route('home') }}">Trang Chủ</a>
          </li>
            @foreach($categories as $category)
	            <li class="nav-item navigation__item py-1 px-2 border-right">
                  <a class="nav-link text-uppercase navigation__item__category text-center text-white px-0 text-nowrap" href="#">{{ $category->name }}</a>
                  <ul class="bg-info p-0 shadow-sm w-100 my-1">
                    @foreach ($category->brands as $brand)
                      <li class="nav-item w-100 ">
                          <a href="#" class="nav-link text-uppercase text-white text-center">
                            {{$brand->name}}
                          </a>
                      </li>
                    @endforeach
                  </ul>
	            </li>
            @endforeach
            <li class="nav-item navigation__item py-1 px-2 border-right">
              <a class ="nav-link text-uppercase navigation__item__category text-center text-white px-0 text-nowrap" href="{{ route('home') }}">về chúng tôi</a>
            </li>
            <li class="nav-item navigation__item py-1 px-2 border-right">
              <a class ="nav-link text-uppercase navigation__item__category text-center text-white px-0 text-nowrap" href="{{ route('home') }}">liên hệ</a>
            </li>

        </ul>
    </div>
</nav>
