@extends('layouts.app')

@section('content')

<!--
<div class="flex justify-center">
    <div class="w-8/12 bg-white p-6 rouded-lg">
        <form action="{{route('posts')}}" method="POST">
            @csrf
            <div class="mb-4">
            <label for="body" class="sr-only">Body</label>
            <label for="body" class="sr-only">Body</label>
            <textarea name="body" id="body" rows="4" cols="30"class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('body') border-red-500 @enderror" placeholder="Post something" ></textarea>

            @error('body')
            <div class="text-red-500 mt-2 text-sm">
                {{$message}}
            </div>
            @enderror
            </div>

            <div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">Post</button>
            </div>
        </form>
    </div>
</div>
-->


<?php

session_start();


$popust = rand(5,100);

$danOd = rand(1,28);
$danDo = rand(1,28);

$mjesec = rand(1, 12);


$n = 10;
function getRandomString($n)
{
  $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
  $randomString = '';

  for ($i = 0; $i < $n; $i++) {
    $index = rand(0, strlen($characters) - 1);
    $randomString .= $characters[$index];
  }

  return $randomString;
}

if (!isset($_SESSION['counter'])) {
    $_SESSION['counter'] = 0;
}

$_SESSION['counter']++;

echo "Brojač: " . $_SESSION['counter'];

function maxPopust(){
    if($_SESSION['counter'] > 2){
        echo $popust = 0;
    }
    else{
    echo $popust = rand(5,100);
        
    }
}

function datum(){
    if($_SESSION['counter'] > 2){
         $danOd = 0;
         $danDo = 0;
         $mjesec = 0;
        print $danOd . "." . $mjesec . "." . "-" . $danDo . "." . $mjesec . ".";


    }
    else{
         $danOd = rand(1,28);
         $danDo = rand(1,28);
         $danDo = $mjesec = rand(1, 12);
        print $danOd . "." . $mjesec . "." . "-" . $danDo . "." . $mjesec . ".";
        
    }
}

function kod($n){
    if($_SESSION['counter'] > 2){
        echo " ";
    }
    else{
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = '';
      
        for ($i = 0; $i < $n; $i++) {
          $index = rand(0, strlen($characters) - 1);
          $randomString .= $characters[$index];
        }
      
        return $randomString;
        echo getRandomString($n);
        
    }
}

function naslov(){
    if($_SESSION['counter'] > 2){
        echo '<h1 class="font-sans text-4xl font-medium text-center  pb-[4.5rem]">Ostvari si <span class="text-blue-400">maksimalan</span> broj <span class="text-blue-400">popusta</span> </h1>';

    }
    else{
        echo '<h1 class="font-sans text-4xl font-medium text-center  pb-[4.5rem]">Ostvari <span class="text-blue-400">popust</span></h1>';
    }
}


session_destroy();

?>



<div>
    <?php print naslov(); ?>
    <div class=" container mx-auto whitespace-normal">
        <p class="font-sans text-xl font-normal  text-center p-[0.2rem] whitespace-normal ">Hvala ti što si postao diom naše zajednice.</p>
        <p class="font-sans text-xl font-normal  text-center p-[0.2rem] whitespace-normal ">Kada kopiraš jednokratni kod, ostvaruješ popust od <?php print maxPopust();?>%  na ukupan iznos u našem restoranu.</p>
        <p class="font-sans text-xl font-normal  text-center p-[0.2rem] whitespace-normal ">Popust vrijedi <?php print datum(); ?></p>
        <p class="font-sans text-xl font-normal  text-center p-[0.2rem] whitespace-normal ">Imaš pravo dva puta dobiti popust</p>
</div>
<div class="select-all ...">
    <h2 class="font-sans text-2xl font-medium text-center text-blue-400 p-[2.5rem"> <?php print kod($n); ?> </h2>
</div>






@endsection

