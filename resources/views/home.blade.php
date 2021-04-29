<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
</head>

<body>
    <form action="./inputTag" method="GET">
    @csrf
        <select name="tag_name">
            @foreach ($tags as $tag)
            <option value="{{$tag['tag_name']}}">{{$tag['tag_name']}}</option>
            @endforeach
        </select>   
        <input type="submit" />
    </form>
    
</body>

</html>