@extends('main')

@section('title', '|Homepage')
     @section('content')

<div class="row">
      <div class="col-md-6">
      	{{ Html::image('switz.png', 'a picture', array('class' => 'img-rounded', 'width' => '400', 'height' => '300')) }}

		</div>

		<div class="col-md-6">
		<form>

		 <div class="media">
                        <a class="pull-left" href="#">
                            <img class="media-object" alt="pic" src="avatar.png" width="40" height="40">
                            <h4 class="media-heading"><a href="#">Duncan</a></h4>

                            </a>
                            <br>
                        </div>
            
           
            <div class="form-group">
              
              <textarea id="message" name="message" class="form-control">Type your location here...</textarea>
            </div>

            <input type="submit" value="Comment" class="btn btn-success">

            <div>
            <label name="message">Mbugua: Kiambu</label>
            <hr>
            </div>

            <div>
            <label name="message">Juma: Kwale</label>
            <hr>
            </div>

            <div>
            <label name="message">Jane: Likoni</label>
            <hr>
            </div>

            <div>
            <label name="message">Kalumu: Msambweni</label>
            <hr>
            </div>

            <div>
            <label name="message">Marion: Watamu</label>
            <hr>
            </div>

            <div>
            <label name="message">Tipis: Turkana</label>
            <hr>
            </div>
           


          </form>
		</div>
</div>

@endsection