<ul class="nav navbar-nav" style="padding-left: 100px;">
	@if($public_menu)
		@foreach($public_menu as $menu)
		<li class="menu-item @if($menu['child']) dropdown @endif">
			<a href="{{ $menu['link'] }}" title="" class="dropdown-toggle">{{ $menu['label'] }} @if($menu['child']) <span class="caret"></span> @endif</a>
			@if( $menu['child'] )
			<ul class="sub-nav submenu dropdown-menu">
				@foreach( $menu['child'] as $child )
					<li class="menu-item "><a href="{{ $child['link'] }}" title="" class="dropdown-toggle">{{ $child['label'] }}</a></li>
				@endforeach
			</ul><!-- /.sub-menu -->
			@endif
		</li>
		@endforeach
	@endif
</ul>
				