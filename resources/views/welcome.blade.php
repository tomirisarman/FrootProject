<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <style media="screen">
      body{
        background: #e9ecef;
        margin: 2vw;
      }
      .box{
        border: 2px solid #e5e5e5;
        background: white;
        border-radius: 10px;
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        grid-column-gap: 1vw;
      }
      .grafa{

        height: 100px;
        border: 2px solid #e5e5e5;
        margin: 10px;
        padding-top: 2vw;
        text-align: center;
      }
      .zag{
        height: 50px;
        margin: 10px;
        background: #e5e5e5;
        text-align: center;
      }
    </style>
  </head>
  <body>
    <div style="background: white; padding: 1vw; border: 2px solid #e5e5e5; border-radius: 10px;">
      <h1>Actions</h1>
      <a href="{{route('add_new')}}"><button class="btn btn-primary" type="button" name="button">Add new invoice</button></a>
    </div>
    <h1>Invoices</h1>
    <div class="box">
      <div class="zag">
        Create
      </div>
      <div class="zag">
        No
      </div>
      <div class="zag">
        Supply
      </div>
      <div class="zag">
        Comment
      </div>
      @foreach($invoices as $el)
      <div class="grafa">
        {{$el->create_date}}
      </div>
      <div class="grafa">
        {{$el->no}}
      </div>
      <div class="grafa">
        {{$el->supply_date}}
      </div>
      <div class="grafa">
        {{$el->comment}}
      </div>
      @endforeach
    </div>
    </table>
  </body>
</html>
