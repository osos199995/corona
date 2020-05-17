@extends('index')
@section('styles')
    <style>

    </style>
@stop



@section('content')
    @if ($question->id <= 19)
        {!! Form::open(['method'=>'post','action'=>['QuestionsController@Answers',$question->id],'files'=>true])  !!}
        <div class="list-group col-md-12 "  style="float: left; margin-left:30%; margin-top: 10%; width:40%; text-align: right;} ">

            <a  href="#" class="list-group-item active" > {{$question->question}} <span style="float: left">(السؤال:{{$question->id}})</span>  </a>

            <div class="row" style="width: 20%; float:right; margin-right:10%; margin-top: 10%; border-width: thick; border-color: blue; " >
                  @if ($question->answer1)
                    <a href="#"  style="margin-bottom: 10px; margin-top: -30%; border-color: blue; border-width:medium;" class="list-group-item"><input type="radio" name="answer" value="{{$question->answer1}}" > {{$question->answer1}} </a>

                  @endif
               @if ($question->answer2)
                   <a href="#" style="border-color: blue;border-width:medium;" class="list-group-item"> {{$question->answer2}} <input  type="radio"  name="answer" value="{{$question->answer2}}"></a>

               @endif

            </div>
            <div class="row" style="width: 20%; float:right; margin-right:30%; margin-bottom: 10%;  margin-top: 10%; ">
              @if ($question->answer3)
                    <a href="#" style="margin-bottom:10px; margin-top: -30%; border-color: blue; border-width:medium;"  class="list-group-item"> {{$question->answer3}} <input type="radio" name="answer" value="{{$question->answer3}}"></a>

                @endif
              @if ($question->answer4)
             <a href="#" style="border-color: blue; border-width:medium; " class="list-group-item"> {{$question->answer4}} <input type="radio" name="answer" value="{{$question->answer4}}"></a>

                  @endif
                  <div class="row col-md-12 col-md-offset-0  ">
                      <button class="btn btn-primary" style="width:50%; margin-left: 60%; margin-top: 70%; position: absolute; " type="submit">التالى</button>
                  </div>
            </div>


        </div>
        {!!  form::close() !!}
    @endif
    @if ($question->id > 19)


    @if ($state->count >=10 )

            <div class="container  win" style="overflow-x: hidden; align-content: center;">
                <div class="row col-md-12 col-md-push-5">
                    <img style="margin-top: 2%;
                width: 20%;
                margin-right: 30%;" class="next"  src="{{asset('front_assets/win_text_1.png')}}" alt=""></a>
                    <h2 style="margin-left: 8%; color: blue;">{{\Illuminate\Support\Facades\Session::get('user_name')}}</h2>
                </div>
                <div class="row col-md-12 col-md-push-5">
                    <a href="{{route('questions2',[$question->id])}}">
                        <img style="margin-top: 2%;
                width: 20%;
                margin-right: 30%;" class="next"  src="{{asset('front_assets/win_text_2.png')}}" alt=""></a>

                </div>

                <div class="row col-md-12 col-md-push-6" style="background: cyan; width: 8%; margin-top: 4%; ">
                    <h2 style="color: yellow";>درجتك</h2>
                    <span style=" font-size: 30px;">   {{$state->count}}</span>
                    <button class="btn btn-primary" style="width:20%; margin-right: 30%; margin-top: 20%; " type="submit">خروج</button>

                </div>
                {!! Form::open(['method'=>'get','action'=>['QuestionsController@End'],'files'=>true])  !!}
                <button class="btn btn-primary" style="width:20%; margin-left: 35%; margin-top: 15%; " type="submit">خروج</button>
                {!!  form::close() !!}
            </div>

    @elseif (  $state->count <= 10 )

        <div class="container  los" style="overflow-x: hidden;">
            <div class="row col-md-12 col-md-push-5">
                <img style="margin-top: 2%;
                width: 20%;
                margin-right: 30%;" class="next"  src="{{asset('front_assets/lose_text1.png')}}" alt=""></a>
                <h2 style="margin-left: 6%; color: blue;">{{\Illuminate\Support\Facades\Session::get('user_name')}}</h2>
            </div>
            <div class="row col-md-12 col-md-push-5">
                <a href="{{route('questions2',[$question->id])}}">
                    <img style="margin-top: 2%;
                width: 20%;
                margin-right: 30%;" class="next"  src="{{asset('front_assets/lose_text2.png')}}" alt=""></a>

            </div>

            <div class="row col-md-12 col-md-push-6" style="background: cyan; width: 8%; margin-top: 4%;">
                <h2 style="color: yellow";>درجتك</h2>
                <span style=" font-size: 30px; margin-left: 40%;">   {{$state->count}}</span>


            </div>
            {!! Form::open(['method'=>'get','action'=>['QuestionsController@End'],'files'=>true])  !!}
            <button class="btn btn-primary" style="width:20%; margin-left: 35%; margin-top: 15%; " type="submit">خروج</button>
            {!!  form::close() !!}
        </div>

    @endif

    @endif
@stop



@section('script')
    <script>
        if ( window.history.replaceState ) {
            window.history.replaceState( null, null, window.location.href );
        }
    </script>
@stop
