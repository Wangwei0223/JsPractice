<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>JS Exercise</title>
    <link rel="stylesheet" type="text/css" href="./static/css/bootstrap.min.css">
    <script type="text/javascript" src="./static/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" defer src="./static/js/index.js"></script>
</head>

<style type="text/css">
    body{
         background-color: gray;
    }
</style>

<body>

<button class="btn btn-warning" id="btn1">Test</button>
<button class="btn btn-warning" id="btn2">Test Paramter</button>

</body>
</html>
<script type="text/javascript">
   function usestrict(){
        "use strict";
        var x = 10;
        alert(x);
   }

   function test(){
    message = 'hi';  //global variable
    var message2 = 'hi2'; //local variable
    string_var = 'abc';
    num_var = 10;
    boolean_var = true;
    null_var = null; //if the varibale is object or null  --- alert object
    // alert(typeof(variable)) if varibale is not defined, then it will alert 'undefined'
   }

   $('#btn1').click(function(){
    test();
    var undefined_var;  //declear with var without initializtion
    alert(typeof undefined_var); //global variable without var
   });


</script>

<!-- Object & Function -->
<script>
   var func1 = function(obj){
        if(typeof arguments[0].name == "string"){
            alert(arguments[0].age);
        }
   }

   var person = new Object();
   person.name = "Wei Wang";

   var person1 = {
        name : "Chen Mang",
        age: 23 
   }

   var text = "mom and dad and baby";
   parttern = /mom( and dad( and baby)?)?/gi;
   $('#btn2').click(function(){
    //func1({name: "Xiao Lin"});
    var num = 100;
    //alert(num.toPrecision(4)); //100.0
    //alert(num.toExponential(1)); //1.0e+2
    var mathch = parttern.exec(text);
    alert(mathch[0]);  //不匹配的都是undefined
   });

</script>