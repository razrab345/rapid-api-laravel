@extends('layout')

@section('content')



                    <div class="game__result">

                    	<h2 class="title">{{$title_l}}</h2>
                    	

                    	
                    	<p class="league-title">Последнии матчи</p>
                    	@foreach ($match_event['true'] as $match)

                    		<div class="match__item">
                    			<a href="/mathes/{{ $match['IDs'][0]['ID'] }}">
	                    			<span class="team" id="team_1">{{ $match['T1'][0]['Nm'] }}</span>
	                    			<span class="match__result">{{ $match['Tr1'] }} - {{ $match['Tr2'] }}</span>
	                    			<span class="team" id="team_2">{{ $match['T2'][0]['Nm'] }}</span>
	                    			<span class="date">{{ $match['Esd'] }}</span>
                    			</a>
                    		</div>

                    	@endforeach

                    	<p class="league-title">Расписание</p>


                    	@foreach ($match_event['wait'] as $match)

                    		<div class="match__item">
                    			<a href="/mathes/{{ $match['IDs'][0]['ID'] }}">
	                    			<span class="team" id="team_1">{{ $match['T1'][0]['Nm'] }}</span>
	                    			<span class="match__result">-</span>
	                    			<span class="team" id="team_2">{{ $match['T2'][0]['Nm'] }}</span>
	                    			<span class="date">{{ $match['Esd'] }}</span>
	                    		</a>
                    		</div>

                    	@endforeach


                    	@if($match_event['wait'] == null)
								  	
                    		@foreach ($match_event['false'] as $match)

                    		<div class="match__item">
                    			<a href="/mathes/{{ $match['IDs'][0]['ID'] }}">
	                    			<span class="team" id="team_1">{{ $match['T1'][0]['Nm'] }}</span>
	                    			<span class="match__result">-</span>
	                    			<span class="team" id="team_2">{{ $match['T2'][0]['Nm'] }}</span>
	                    			<span class="date">{{ $match['Esd'] }}</span>
	                    		</a>
                    		</div>

                    		@endforeach

						@endif

                    	
                    </div>
               
@endsection


