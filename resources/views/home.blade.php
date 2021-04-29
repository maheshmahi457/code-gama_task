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
    <!-- <form action="./insertData" method="POST">
        @csrf
        <select name="tags_id" id="cars">
            @foreach ($tags as $tag)
            <option value="{{$tag['tag_name']}}">{{$tag['tag_name']}}</option>
            @endforeach
        </select>
        <input type="text" placeholder="Question" name="questions" />
        <input type="text" placeholder="Answers" name="answers" />
        <input type="text" placeholder="Accepted Questions" name="que_accepted" />
        <input type="text" placeholder="Voted Questions" name="que_voted" />
        <input type="text" placeholder="Voted Answers" name="ans_voted" />
        <input type="text" placeholder="Questions viewed" name="que_viewed" />
        <input type="text" placeholder="Comments" name="comments" />
        <br>
        <input type="submit" />
    </form>

    <form action="./insertTag" method="POST">
        @csrf
        <input type="text" placeholder="Tag" name="tag_name" />
        <input type="submit" />
    </form> -->
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