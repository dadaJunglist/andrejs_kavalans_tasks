//function to trigger alert note

//display or like echo
// document.write
// windows.alert
// document.getElementById

// let / Var / name = "" , Const

function hello()
{
    alert("Welcome to my website");
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

function colorChange(where,newColor)
{
    if (where == "background")
        {
            document.body.style.backgroundColor = newColor;        }
}