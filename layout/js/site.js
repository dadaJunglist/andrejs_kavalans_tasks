//function to trigger alert note

//display or like echo
// document.write
// windows.alert
// document.getElementById

// let / Var / name = "" , Const

function hello()
{
    alert("Welcome to my website!");
}

function hello1()
{
    document.write("HEEEELLLOOOOO!!!");
}

function hello2()
{
    window.alert("1");
    window.alert("2");
}

//simple function to add two numbers

function add(){
    document.write(5+6);
}

function colorChange(where, newColor)
{
    if (where == "background")
        {
            document.body.style.backgroundColor = newColor;        }
}

function changeColor()
{
    var color = document.getElementById('background').value;
    document.body.style.backgroundColor = color;
}

function changefontColor()
{
    var color = document.getElementById('background2').value;
    document.body.style.color = color;
}

//crud

function crud()
{
    var fname=(document.form1.fname.value).trim();
    if (fname.length<5){
        alert("First Name must have at least 5 characters long");
        return false;
    }
}

function fname()
{
        var fname=(document.form1.fname.value).trim();
    if (fname.length<5){
        alert("First Name must have at least 5 characters long");
        return false;
}
}