@include('inc.header')
  <div class="container">
    <div class="row">

      <div class="col-md-6">
      
      <!-- Method na kung unsay mahitabo if masubmit na ang form which is i post nimo -->
      <form class="form-horizontal" method="POST" action="{{ url('/edit', array($articles->id)) }}"><br>
              {{csrf_field()}}

                <fieldset>
                  <!-- <legend>Book Form</legend> -->

                  @if(count($errors) >0)

                    @foreach($errors->all() as $error)
                      <div class="alert alert-danger">
                      
                        {{$error}}

                      </div>
                    @endforeach

                  @endif

                  <br><div class="form-group">
                    <label for="inputBookTitle" class="col-lg-3 control-label">Book Title</label>
                    <div class="col-lg-10">
                      <input type="text" name="title" class="form-control" id="inputTitle" value="<?php echo $articles->title; ?>" placeholder="Title">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputDescription" class="col-lg-2 control-label">Description</label>
                    <div class="col-lg-10">
                      
                      <textarea name="description" class="form-control" placeholder="Description"><?php echo $articles->description; ?></textarea>
                      
                  

                  <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2"><br><br>
                      
                      <button type="submit" class="btn btn-primary">Update</button>
                     
                      <a href="{{ url('/') }}" class="btn btn-warning">Back</a>
                    </div>
                  </div>
                </fieldset>
      </form>



      </div>
    
    </div>
  </div>
@include('inc.footer')