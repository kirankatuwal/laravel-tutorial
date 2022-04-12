<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn - Dimagkharab</title>
</head>
<body>
    {{ $data['name'] }}

    @if($data['name']=="Kiiran")
    {{ 'Correct using Laravel'}}
    @else
    {{'Incorrect using laravel'}}
    @endif
    
<?php
if($data['name']=="Kirian"){
    echo "Correct Name";
}
else{
    echo "Incorrect Name";
}
?>

@for($i=0;$i<5;$i++)
{{$i}}
@endfor




</body>
</html>