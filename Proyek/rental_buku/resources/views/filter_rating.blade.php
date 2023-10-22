@extends('filter')

@section('filter_rating')

<style>
@import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

.center {
    position: absolute;
    top: 45%;
    left: 50%;
    transform: translate(-50%, -50%);
}

.center .stars {
    height: 150px;
    width: 500px;
    text-align: center;
}

.stars input {
    display: none;
}

.stars label {
    float: right;
    font-size: 100px;
    color: lightgrey;
    margin: 0 5px;
    text-shadow: 1px 1px #bbb;
}

.stars label:before {
    content: '★';
}

.stars input:checked~label {
    color: gold;
    text-shadow: 1px 1px #c60;
}

.stars:not(:checked)>label:hover,
.stars:not(:checked)>label:hover~label {
    color: gold;
}

.stars input:checked>label:hover,
.stars input:checked>label:hover~label {
    color: gold;
    text-shadow: 1px 1px goldenrod;
}

.stars .result:before {
    position: absolute;
    content: "";
    width: 100%;
    left: 50%;
    transform: translateX(-47%);
    bottom: -30px;
    font-size: 30px;
    font-weight: 500;
    color: gold;
    font-family: 'Poppins', sans-serif;
    display: none;
}

.stars input:checked~.result:before {
    display: block;
}

.stars #five:checked~.result:before {
    content: "5 dari 5";
}

.stars #four:checked~.result:before {
    content: "4 dari 5 ";
}

.stars #three:checked~.result:before {
    content: "3 dari 5 ";
}

.stars #two:checked~.result:before {
    content: "2 dari 5 ";
}

.stars #one:checked~.result:before {
    content: "1 dari 5 ";
}
</style>


<div class="center">
    <div class="stars">
        <input type="radio" id="five" name="rate" value="5">
        <label for="five"></label>
        <input type="radio" id="four" name="rate" value="4">
        <label for="four"></label>
        <input type="radio" id="three" name="rate" value="3">
        <label for="three"></label>
        <input type="radio" id="two" name="rate" value="2">
        <label for="two"></label>
        <input type="radio" id="one" name="rate" value="1">
        <label for="one"></label>
        <span class="result"></span>
    </div>
</div>
@endsection