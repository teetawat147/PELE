<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" type="text/css" media="screen" href="main.css" /> -->
    <script>
        //var text = 'osccUsers?filter={"where":{"and":[{"cmName":"{$this." ".$state." ".$login_userid}"},{"typeperson":"ผู้ปฏิบัติงาน"} ] } } ';
        
        //var text = 'oscc?filter={"where":{"and":[{"cmName":"${this.state.login_userid}"},{"typeperson":"ssssss"}]}}';
        
        //var textTemp = text;
        var textPart = [];
        while (textTemp!=""){
            var posDolla = textTemp.indexOf("$");
            if (posDolla>=0){
                var text1 = textTemp.substring(0,posDolla);
                textPart.push(text1);
                var text2 = textTemp.substring(posDolla);
                var posClose = text2.indexOf("}");
                var textVar = text2.substring(0,posClose+1);
                textPart.push(textVar);
                textTemp=text2.substring(posClose+1);

            }else{
                
                var text3=textTemp;
                textPart.push(text3);
                textTemp="";
            }
        }
        console.log(textPart);





        // var text = 'osccUsers?filter={"where":{"and":{"cmName":"{$this} " } } } <br>';
        // var text2 = 'osccUsers?filter={"where":{"and":{"cmName":"${state} " } } } <br>';
        // var text3 = 'osccUsers?filter={"where":{"and":{"cmName":"${login_userid}",{"typeperson":"ผู้ปฏิบัติงาน" } } } } <br>';
        
        // $v = text ;
        // var T_test = text + text2 + text3 ;
        // $a = T_test;
        // console.log($a);
        // //document.write(T_test);

    </script>
</head>
<body>
    test </br>
    <?php
         echo "234"."<br>" ;
        if($a != ''){
            echo "1" ;
        }else{
            echo "0" ;
        }
        ?>
</body>
</html>
