@extends('layout')

@section('content')



                    <div class="game__result">
                         
                         <h2 class="title">Обзор матча</h2>
                         

                                   <div class="match__info-result">
                                        <span class="team" id="team_1">{{ $match['T1'][0]['Nm'] }}</span>
                                        <div class="match__info-result-center">
                                             <span>{{ $match['Tr1'] }} - {{ $match['Tr2'] }}</span>
                                             <span>Завершен</span>
                                             <span>{{ $match['Esd']}}</span>
                                        </div>
                                        <span class="team" id="team_2">{{ $match['T2'][0]['Nm'] }}</span>
                                   </div>




                                   <p class="league-title">Информация о матче</p>

                                  

                                   <p>Судья: {{$match['Refs'][0]['Nm']}}, Стадион: {{ $match['Vnm']}}</p>
                                        
                                  <!--  @dump($match)


                                   <div class="match__info-obzor">
                                        <div class="match__info-obzor-item">
                                             <p>1 тайм</p>
                                             <div class="match__info-obzor-event">
                                                  
                                             </div>
                                        </div>
                                        <div class="match__info-obzor-item">
                                             <p>2 тайм</p>
                                             <div class="match__info-obzor-event">
                                                  
                                             </div>
                                        </div>
                                   </div> -->
                         

                         
                    </div>
               
@endsection


