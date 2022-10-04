<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Practice </title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    
    <div class="flex-container">

        <div class="header">     
               <?php include 'logo.inc.php' ?>         
               <?php include 'menu.inc.php' ?>	   
        </div>       
     
        <div class="about_me">
         
          <h1>  <?php  echo $p  ?> </h1>

            <div class="data">
                <div class="myImg">
                    <?php  echo '<img src="/img/Ava.jpg">'; ?>                    
                </div>

                <div class="fullname">
                    <p> Меня зовут 
                    <?php echo $name, ' ', $patronymic, ' ',$surname . '<br>'; 
                          echo 'Город', ' ', $city; ?>                                      
                    </p> 
           
                    <p> Мне
                    <?php  echo $age;   ?>          
                    год. </p>
                    <p> Я научился создавать переменные, благодаря skillfactory и танцев с бубном. </p>
                    <p> Было не просто, но мы изучили простые операции с ними. </p>
                </div>
            </div>

            <div class="knowledge">
                                   
                    <?php  include 'knowledge.inc.php'; ?>
                    <?php   echo $a, ' ', $b, ' ', $c, ' ', $e; ?> <br>
                         <br>               
                    <?php
                        $a = 10;
                        $b = 6;
                        $c = $a + $b;
                        echo $c;
                    ?>   <br>  
                         <br>               
                     <?php
                        echo $d;
                    ?> 
                           
                    <?php
                    $foo = "0" - "2 шаманских бубна" + 2.7 / 3;
                        echo $foo;
                    ?> 

            </div>

            <div class="article">
                <p class="text">
                    P.s.: Было интересно.<br>
                    <br>
                    <br>
                    Не для меня придёт весна, <br>
                    Не для меня Дон разольётся, <br>
                    И сердце девичье забьётся <br>
                    В восторге чувств не для меня! <br>
                </p>
            </div>
        </div>
            <?php include 'footer.inc.php' ?>
    </div>
</body>
</html>