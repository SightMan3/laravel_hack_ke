<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>hack</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
      
        <link rel="stylesheet" href="{{ URL::asset('css\app.css') }}">

      
        
        
    </head>
    <body >
		<div class="main">
            
            <div class="inputs">

                
                <form action="{{ route('save_item_route') }}" method="post">
                    {{ csrf_field() }}
                    
                    <label for="list_item">New Todo Item</label> <br>
                    
                    <input type="text" name='list_title'> <br>
                    <input type="text" name='list_body'> <br>
                    <input type="text" name='list_footer'> <br>
                    <button type='submit'>save item</button>
                </form>
            </div>
                

            <div class="items">

                @foreach ($list_items as $li)
                    <div class="item">    
                        <div class="title">  {{ $li->name }} </div>
                        
                        <form action="{{ route('mark_complete') }}" method="post" class='item_form'>
                            {{ csrf_field() }}
                            <button type='submit' class='btn'>complete</button>
                            <button type='submit' class='btn'>delete</button>
                        </form>
                    </div>
                
                @endforeach
            </div>


           
			
        </div>
    </body>
</html>
