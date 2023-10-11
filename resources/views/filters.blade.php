<div class="dis-none panel-filter w-full p-t-10">
					<div class="wrap-filter flex-w bg6 w-full p-lr-40 p-t-27 p-lr-15-sm">
						<div class="filter-col1 p-b-27">
							<div class="mtext-102 cl2 p-b-15">
								Ordenar por
							</div>
							<ul>
								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04 filter-link-active" data-filter=".id">
										Todos
									</a>
								</li>
								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04" data-filter=".populares">
										Populares
									</a>
								</li>
								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04" data-filter=".sales">
										Más vendidos
									</a>
								</li>
								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04" data-filter=".new">
										Nuevos
									</a>
								</li>
								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04" data-filter=".price-asc">
										Price: Bajo a Alto
									</a>
								</li>
								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04" data-filter=".price-desc">
										Price: Alto a bajo
									</a>
								</li>
							</ul>
						</div>
						<!-- precio -->
						@if($web->useFilterPrices == 1)
						@php
								$priceRanges = json_decode($web->filtersPrices);
						@endphp
						<div class="filter-col2 p-b-27">
							<div class="mtext-102 cl2 p-b-15">
								Precio
							</div>
							<ul>
								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04 filter-link-active" data-filter="*">
										Todos
									</a>
								</li>
								@if(!empty($priceRanges) && is_array($priceRanges))
								@foreach($priceRanges as $priceRange)
								@php
									$cleanedPriceRange = str_replace(['$', ' '], '', $priceRange);
								@endphp
								<li class="p-b-6">
										<a href="#" class="filter-link stext-106 trans-04" data-filter="price-range-{{ $cleanedPriceRange }}">{{ $priceRange }}</a>
								</li>
								@endforeach
								@endif

							</ul>
						</div>
						@endif
						<!-- Talles -->
						@if($web->useFilterSizes == 1)
						@php
								$sizesRanges = json_decode($web->filtersSizes);
						@endphp
						<div class="filter-col3 p-b-27">
							<div class="mtext-102 cl2 p-b-15">
								Talles
							</div>
							<ul>
								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04 filter-link-active">
										Todos
									</a>
								</li>
								@if(!empty($sizesRanges) && is_array($sizesRanges))
								@foreach($sizesRanges as $sizeRange)
								<li class="p-b-6">
										<a href="#" class="filter-link stext-106 trans-04">
												{{ $sizeRange }}
										</a>
								</li>
								@endforeach
								@endif
							</ul>
						</div>
						@endif
						<!-- kilos -->
						@if($web->useFilterPrices == 1)
						@php
								$kilosRanges = json_decode($web->filtersKilos);
						@endphp
						<div class="filter-col3 p-b-27">
							<div class="mtext-102 cl2 p-b-15">
								Kilos
							</div>
							<ul>
								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04 filter-link-active">
										Todos
									</a>
								</li>
								@if(!empty($kilosRanges) && is_array($kilosRanges))
								@foreach($kilosRanges as $kiloRange)
								<li class="p-b-6">
										<a href="#" class="filter-link stext-106 trans-04">
												{{ $kiloRange }}
										</a>
								</li>
								@endforeach
								@endif
							</ul>
						</div>
						@endif
						<!-- color -->
						@if($web->useFilterColors == 1)
						@php
								$colorsRanges = json_decode($web->filtersColors);
								$colors = [
								'Negro' => '#000000',
								'Azul' => '#0000FF',
								'Gris' => '#808080',
								'Blanco' => '#FFFFFF',
								'Rojo' => '#FF0000',
								'Verde' => '#00FF00',
								'Amarillo' => '#FFFF00',
								'Naranja' => '#FFA500',
								'Rosa' => '#FFC0CB',
								'Marrón' => '#A52A2A',
								'Celeste' => '#00aae4',
								'Dorado' => '#FFD700',
								'Plateado' => '#C0C0C0',
								'Lila' => '#C8A2C8',
								'Violeta' => '#800080',
								'Turquesa' => '#5dc1b9',
								'Aguamarina' => '#008080',
								'Crema' => '#FFFDD0',
								'Fucsia' => '#e30052',
								'Oliva' => '#808000',
							];
						@endphp
						<div class="filter-col3 p-b-27">
							<div class="mtext-102 cl2 p-b-15">
								Color
							</div>
							<ul>
							@if(!empty($colorsRanges) && is_array($colorsRanges))
								@foreach($colorsRanges as $color)
								<li class="p-b-6">
									<span class="fs-15 lh-12 m-r-6" style="color: {{ isset($colors[$color]) ? $colors[$color] : 'silver' }}">
										<i class="zmdi zmdi-circle"></i>
									</span>
									<a href="#" class="filter-link stext-106 trans-04">
										{{ $color }}
									</a>
								</li>
								@endforeach
							@endif
							</ul>
						</div>
						@endif
						<!-- tags -->
						@if($web->useFilterTags == 1)
						@php
								$tagsRanges = json_decode($web->filtersTags);
						@endphp
						<div class="filter-col4 p-b-27">
							<div class="mtext-102 cl2 p-b-15">
								Tags
							</div>
							<div class="flex-w p-t-4 m-r--5">
								@if(!empty($tagsRanges) && is_array($tagsRanges))
									@foreach($tagsRanges as $tag)
									<a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
										{{$tag}}
									</a>
									@endforeach
								@endif
							</div>
						</div>
						@endif

						</div>
					</div>
				</div>