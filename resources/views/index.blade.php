<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portada</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <x-header>
        <ul class="nav nav-pills">
            <li id="login" class="nav-item"><a href="/login" id="link" class="nav-link text-decoration-none mr-3" aria-current="page">Login</a></li>
            <span id="bar" class="mt-xl-2 mt-md-1"></span>
            <li id="register" class="nav-item"><a href="/register" id="link" class="nav-link me-5 text-decoration-none">Register</a></li>
        </ul>
    </x-header>
    <main>
        
        {{date('Y-m-d');}}

        
        
        <x-tabs-component />
        
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="nextEvents" role="tabpanel" aria-labelledby="nextEvents-tab">
                <div class="section-cards">
                  
                       @foreach ($events as $event)
                    <x-card-component :events="$event" :event="$event"/>  
                    @endforeach 
                   
                         
                   
                 
                </div>
            </div>
            <div class="tab-pane fade" id="pastEvents" role="tabpanel" aria-labelledby="pastEvents-tab">
                <div class="section-cards">
                    HOla
                </div>
            </div>
        </div> 
       
     
           
    </main>
    <x-footer/>
    <script src="../js/app.js"></script>
</body>
</html>




{{-- <tr>
            <td>{{$event->id_event}}</td>
            <td>{{$event->event_name}}</td>
            <td>{{$event->event_date}}</td>
            <td>{{$event->event_image}}</td>
            <td>{{$event->event_capacity}}</td>
  
              
        </tr> --}}




