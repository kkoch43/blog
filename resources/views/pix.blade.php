@extends('main')

@section('title', '|Homepage')
     @section('content')


<div class="row">
      <div class="col-md-4">

      <a href="pixcom"> {{ Html::image('switz.png', 'a picture', array('class' => 'img-rounded', 'width' => '304', 'height' => '236')) }} </a>

       
       </div>



      <div class="col-md-4">

    

      {{ Html::image('switz.png', 'a picture', array('class' => 'img-rounded', 'width' => '304', 'height' => '236')) }}
      <br>

       <a href="#" class="btn btn-primary">Read more</a>

      </div>

      <div class="col-md-4">

       {{ Html::image('switz.png', 'a picture', array('class' => 'img-rounded', 'width' => '304', 'height' => '236')) }}
       <br>

       <a href="#" class="btn btn-primary">View Image</a>

      </div>

      </div>

      <br>

      <div class="row">
      <div class="col-md-4">

       {{ Html::image('switz.png', 'a picture', array('class' => 'img-rounded', 'width' => '304', 'height' => '236')) }}
       <br>

       <a href="#" class="btn btn-primary">View Image</a>

      </div>

      <div class="col-md-4">

    

      {{ Html::image('switz.png', 'a picture', array('class' => 'img-rounded', 'width' => '304', 'height' => '236')) }}
      <br>

       <a href="#" class="btn btn-primary">View Image</a>

      </div>

      <div class="col-md-4">

       {{ Html::image('switz.png', 'a picture', array('class' => 'img-rounded', 'width' => '304', 'height' => '236')) }}
       <br>

       <a href="#" class="btn btn-primary">View Image</a>

      </div>

      </div>

      <br>

      <div class="row">
      <div class="col-md-4">

       {{ Html::image('switz.png', 'a picture', array('class' => 'img-rounded', 'width' => '304', 'height' => '236')) }}
       <br>

       <a href="#" class="btn btn-primary">Read more</a>

      </div>

      <div class="col-md-4">

    

      {{ Html::image('switz.png', 'a picture', array('class' => 'img-rounded', 'width' => '304', 'height' => '236')) }}
      <br>

       <a href="#" class="btn btn-primary">Read more</a>

      </div>

      <div class="col-md-4">

       {{ Html::image('switz.png', 'a picture', array('class' => 'img-rounded', 'width' => '304', 'height' => '236')) }}
       <br>

       <a href="#" class="btn btn-primary">Read more</a>

      </div>

      </div>

      <br>

      @endsection