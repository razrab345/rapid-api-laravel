


                <div class="col-xl-2 col-lg-2 col-md-3 col-sm-6">
                    <aside class="content-sidebar">
                        <h3>Leagues </h3>
                        <ul class="leagues__sidebar">
                        	@foreach ($t1 as $l)
								  <li><a href="/league/{{ $l['value'] }}" class="country-data" value="{{ $l['value'] }}"><img src="frontEnd\assets\images\icons\leagues\2.png" alt="">{{ $l['name'] }}</a>
								  	
								  	@if($l['clv'] !== 0)
								  	@php ($i = 0)
								  	<i class="fa fa-caret-down" aria-hidden="true"></i>
								  	<ul class="sub_leagues">
								  		@foreach ($l['clv'] as $clv_item)
								  			<a href="/league/{{ $l['value'] }}/{{ $i }}">{{ $clv_item['lv']['Sdn'] }}</a>
								  			@php ($i = $i + 1)
								  		@endforeach
								  	</ul>
								  	@endif
								  </li>
							@endforeach
                        </ul>
                    </aside>
                    <aside class="content-sidebar">
                        <h3>Countries</h3>
                        <ul>
                            <li><a class="country-data" value="england"><img src="frontEnd\assets\images\icons\country\1.png" alt=""> England</a></li>
                            <li><a class="country-data" value="spain"><img src="frontEnd\assets\images\icons\country\2.png" alt=""> Spain</a></li>
                            <li><a class="country-data" value="germany"><img src="frontEnd\assets\images\icons\country\3.png" alt=""> Germany</a></li>
                            <li><a class="country-data" value="italy"><img src="frontEnd\assets\images\icons\country\4.png" alt=""> Italy</a></li>
                            <li><a class="country-data" value="france"><img src="frontEnd\assets\images\icons\country\5.png" alt=""> France</a></li>
                            <li><a class="country-data" value="netherlands"><img src="frontEnd\assets\images\icons\country\6.png" alt=""> Netherlands</a></li>
                        </ul>
                    </aside>
                </div>




                <script type="text/javascript">
                	$(".content-sidebar i").click(function(){
        $(this).siblings(".sub_leagues").toggleClass("sub-active");
    })
                </script>