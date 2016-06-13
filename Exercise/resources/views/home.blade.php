@extends('layouts.app')

@section('content')
  <div class="container">
      <div class="row">
        <div class="col s10 offset-l1">
          <div class="card-panel">
              <div class="row">
                  <div class="col s12">
                    <h2>Products</h2>
                  </div>
              </div>
              <div class="divider"></div>
              <div class="row">
                <div class="col s12">
                  @foreach($products as $product)

                    <div class="col s4">
                        <div class="card medium">
                       <div class="card-image waves-effect waves-block waves-light">
                         <img class="activator" src="http://placehold.it/500x500">
                       </div>
                       <div class="card-content">
                         <span class="card-title activator grey-text text-darken-4">{{$product->name}}<i class="material-icons right">more_vert</i></span>
                         <p><a href="#">This is a link</a></p>
                       </div>
                       <div class="card-reveal">
                         <span class="card-title grey-text text-darken-4">{{$product->name}}<i class="material-icons right">close</i></span>
                         <div class="row">
                           <div class="col s12">
                             Breed: {{$product->breed}}
                           </div>
                           <div class="col s12">
                             Type: {{$product->type}}
                           </div>
                           {!!Form::open(['route'=>'deleteProduct','class'=>'col s12', 'method'=>'DELETE'])!!}
                              <input type="hidden" name="id" value="{{$product->id}}">
                              <button href="#!" class="btn waves-effect waves-light secondary-content deleteButton">Delete<i class="material-icons">delete</i></button>
                           {!!Form::close()!!}
                         </div>
                       </div>
                     </div>
                   </div>

                  @endforeach
                </div>
              </div>
              <div class="row">
                <div class="col s12 offset-s10">
                  <a class="modal-trigger waves-effect waves-light btn" href="#modal1"><i class="material-icons left">add</i>Add</a>
                </div>
              </div>
         </div>
      </div>
    </div>
  </div>
  <!-- Modal Structure -->
  <div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Product Information</h4>
        <div class="row">
          {!!Form::open(['route'=>'addProduct','class'=>'col s12'])!!}
            <div class="row">
              <div class="input-field col s8">
                <input name="name" id="name" type="text" class="validate">
                <label for="name">Name</label>
              </div>
            </div>

            <div class="row">
              <div class="input-field col s8">
                <input name="type" id="type" type="text" class="validate">
                <label for="type">Type</label>
              </div>
            </div>

            <div class="row">
              <div class="input-field col s8">
                <input name="breed" id="breed" type="text" class="validate">
                <label for="breed">Breed</label>
              </div>
            </div>
            <div class="modal-footer">
              <button id="add" class="btn waves-effect waves-light" type="submit" name="action">Submit<i class="material-icons right">add</i></button>
            </div>
            {!!Form::close()!!}

        </div>
      </div>

  </div>
@endsection
