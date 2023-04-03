<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./index.css">
 <title>Document</title>
</head>
<body>
    <?php $UserName="Hello Subscriber";
    if( $UserName=="Hello Admin"){
        ?> 
        <div class="first"> Hello Admin!</div>
        <div class="second"> Authorization matched.</div>
        <div class="box">
        <?php
        for($i=0;$i<5;$i++){
            if($i==0){
        ?>
<h5 class="third" > Access Granted as an ADMIN.</h5>
        <?php
        }
        elseif($i==1){
            ?>
            <h4 class="third" > Access Granted as an ADMIN.</h4>
            <?php
        }
        elseif($i==2){
            ?>
            <h3 class="third" > Access Granted as an ADMIN.</h3>
            <?php
        }
        elseif($i==3){
            ?>
            <h2 class="third" > Access Granted as an ADMIN.</h2>
            <?php
        }
        else{
            ?>
            <h1 class="third" > Access Granted as an ADMIN.</h1>
        </div>
        <?php
        }

    }
}
    elseif($UserName=="Hello Subscriber"){
        ?>
       <div class="first">Hello Subscriber!</div>
       <div class="second">Authorization matched.</div>
       <div class="box">
        <?php
        for($i=0;$i<5;$i++){
         if($i==0){
        ?>
<h5 class="third" > Access Granted as an SUBSCRIBER .</h5>
        <?php
        }
        elseif($i==1){
            ?>
            <h4 class="third" > Access Granted as an SUBSCRIBER.</h4>
            <?php
        }
        elseif($i==2){
            ?>
            <h3 class="third" > Access Granted as an SUBSCRIBER.</h3>
            <?php
        }
        elseif($i==3){
            ?>
            <h2 class="third" > Access Granted as an SUBSCRIBER.</h2>
            <?php
        }
        else{
            ?>
            <h1 class="third" > Access Granted as an SUBSCRIBER.</h1>
       </div>
        <?php
        }

        }
    }
    else{
        ?>
        <div class="first"> Hello user!</div>
        <div class="second">Authorization did not match.</div>
        <div class="box">
       <?php
        for($i=0;$i<5;$i++){
            if($i==0){
       ?>
        <h5 class="third">Enter your Credentials again.</h5>
       <?php
        }
        elseif($i==1){
            ?>
             <h4 class="third">Enter your Credentials again.</h4>
            <?php
             }
             elseif($i==2){
                ?>
                 <h3 class="third">Enter your Credentials again.</h3>
                <?php
                 }
                 elseif($i==3){
                    ?>
                     <h2 class="third">Enter your Credentials again.</h2>
                    <?php
                     }
                     else{
                        ?>
                         <h1 class="third">Enter your Credentials again.</h1>
        </div>
                        <?php
                         }
    }
}
    ?>
</body>
</html>