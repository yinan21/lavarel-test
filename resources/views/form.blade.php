<!DOCTYPE html>
<html lang="en">
<head>
  <title>Test 1</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script>
    $("document").ready(function(){
        $form = $('#myform');
        $response = $('#response');

        $form.submit(function(e){
            e.preventDefault();

            $.ajax({
                type: "POST",
                url : $form.attr('action'), 
                data : $form.serialize(), 
                dataType : "json",
                success : function(data){
                    $response.html(data['num']); 
                }
            }).fail(function(data){
                var errors = data.responseJSON;
                alert('an error occured, check the console (f12)');
                console.log(errors);
            });
        });

    });
  </script>
</head>
<body>
  <div class="container">
  <h1>Test 1</h1> 
  {!! Form::open(['url' => 'ajax', 'id' => 'myform']) !!}
  <div class="form-group">
    <label for="mynumber">Please input a integer from 1 to 100</label>
    <input type="number" min="1" max="100" step="1" class=" w-25" name="mynumber" required="true">
  </div>
  
  <button type="submit" class="btn btn-default">Submit</button>
  {!! Form::close() !!}
  <div id="response"></div>
  </div>
</body>

