@extends('main')


@section('content')

  <div class="col-lg-4 col-lg-push-2">
            <div class="row">
                <h1 class="col-lg-12 text-center">voeg een plaatje toe</h1>
            </div>

                <form>
                  <div class="form-group">
                    <label for="imageIllustration">Kies de illustratie</label>
                    <input type="file" id="imageIllustration">
                    <p class="help-block">Example block-level help text here.</p>
                  </div>

                  <div class="form-group">
                    <label for="nameIllustrations">Naam v/d illustratie</label>
                    <input type="text" class="form-control" id="nameIllustrations" placeholder="naam van de illustratie">
                  </div>

                  <div class="form-group">
                    <label for="tagsIllustration">Geef de tags in</label>
                    <input type="text" class="form-control" id="tagsIllustration" placeholder="tags" data-role="tagsinput">
                  </div>

                  <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>


@stop