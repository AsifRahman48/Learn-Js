<!DOCTYPE html>
<html>
<body>

<h2>What Can JavaScript Do?</h2>

<p id="demo">JavaScript can change HTML content.</p>

<p id="p"></p>

<p id="str"></p>

<p id="arr"></p>

<p id="date"></p>

<button type="button" onclick='hello()'>Click Me!</button>

</body>
</html>

<script>
    //string
/*
    let text = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    document.getElementById("str").innerHTML = text.length;*//*

    let text = "Apple, Banana, Kiwi";
    document.getElementById("str").innerHTML = text.substring(7,20);*/
/*
    let text =  "Please visit Microsoft!";
    document.getElementById("str").innerHTML = text.replace("Microsoft", "W3Schools");*/

    /*let text = "Please locate where 'locate' occurs!";
    document.getElementById("str").innerHTML = text.indexOf("Please");*/

    /*let text = "Please locate where 'locate' occurs!";
    document.getElementById("str").innerHTML = text.lastIndexOf("locate");*/

    /*let text = "Please locate where 'locate' occurs!";
    document.getElementById("str").innerHTML = text.search("locate");*/

    let text = "Please locate where 'locate' occurs!";
    document.getElementById("str").innerHTML = text.match("where");

    let str = new String("John");  // x is an object
    let str2 = new String("John");  // y is an object
    document.getElementById("p").innerHTML = (str===str2);

    /*const cars1 = ["Saab", "Volvo", "BMW"];
    document.getElementById("arr").innerHTML = cars1.length;*/
/*
    const cars1 = ["Saab", "Volvo", "BMW"];
    document.getElementById("arr").innerHTML = cars1.toString();*/

    const cars1 = ["Saab", "Volvo", "BMW"];
    document.getElementById("arr").innerHTML = cars1.reverse();/*
    document.getElementById("arr").innerHTML = cars1.sort();*//*
    document.getElementById("arr").innerHTML = delete cars1[0];*/

    const person = [];
    person[0] = "John";
    person[1] = "Doe";
    person[2] = 46;

    console.log(person[0]);
    console.log(Array.isArray(person));

    const date=new Date(1999,01,04,20,20,12);
    const strdate=new Date('Oct 13 ,2020 10:00:00');
    /*document.getElementById("date").innerHTML = date.getFullYear();*/

    const d = new Date();
    d.setDate(12);/*
    d.setFullYear(2020, 11, 3);*/
    document.getElementById("date").innerHTML = strdate;
</script>
<script>

    function fun(name,time){
        console.log(name+" is sleeping from "+time)
        return 'success';
    }
    let s = fun('asif','9AM');
    fun('Atik','7AM');
    console.log(s);

    //object

    const car={
        name:"BMW",
        model:900,
        weight:'1000kg',
        price:'1Cr',
        start: function (){
            console.log('Car has started')
        }
    }

    console.log(car.name);
    console.log(car.model);
    console.log(car.weight);
    car.start();

    //working
    name1="asif";
    var name1;
    console.log(name1);

    //not work
    name2="asif";
    let name2;
    console.log(name2);

    function example() {
        var p = 1;
        if (p > 0) {
            var p = 2; // Same variable as above
            let q = 3; // Block-scoped variable
            console.log(p); // Output: 2
            console.log(q); // Output: 3
        }
        console.log(p); // Output: 2
        console.log(q); // Error: q is not defined
    }

    let name = "asif";
    document.write(name + " Rahman");

    let x = 5, y = 10, z;
    z = x + y;

    var a,b,c;
    a="asif";
    b="Rahman";


    window.alert(a+b);
    document.write(z);
    console.log(z);


    function hello() {
        document.getElementById("demo").innerHTML = "Hello JavaScript!";
      /*  document.getElementById("demo").style.color = 'red';
        document.getElementById("demo").style.display = 'none';
        document.write('asif');
        alert('asif');
        window.print();*/
    }
        //data type
if(true) {
// Numbers:
    let length = 16;
    let weight = 7.5;

// Strings:
    let color = "Yellow";
    let lastName = "Johnson";

// Booleans
    let x = true;
    let y = false;

// Object:
    const person = {firstName: "John", lastName: "Doe"};

// Array object:
    const cars = ["Saab", "Volvo", "BMW"];

// Date object:
    const date = new Date("2022-03-25");

//NUll
    const a = "";

//bigInt
    const big = BigInt(103923928928829729);

//Undefined
    let undef;
}

//array


</script>
