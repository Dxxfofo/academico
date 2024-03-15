function calcmedia(n1,n2)
{
    var m = (n1+n2)/2;
    return m;
}

function resultado(form){
    var media = calcmedia(parseFloat(form.nota1.value), parseFloat(form.nota2.value));

    if(media>7)
    alert("Aprovado!");
    else
    alert("Recuperação.")
}

function calcmedia(n1,n2,n3,n4)
{
    var m = (n1+n2+n3+n4)/4;
    return m;
}

function resultado(form){
    var media = calcmedia(parseFloat(form.nota1.value), parseFloat(form.nota2.value),  parseFloat(form.nota3.value), parseFloat(form.nota4.value));

    if(media>7){
        alert("Aprovado!  " + media + " na média");
        }
    else{
        alert("Recuperação.  " + media + " na média")
        }
}


function justificafalta(form)
{
    var jf = confirm("Justificar Falta de " +form.nomealuno.value + "?");

    if (jf == true)
    var textojf = prompt("Digite a justificativa apresentada");

    else
        alert("Falta não justicada");
}

function testaform()
{
    var n=document.forms["formalunos"] ["nomealuno"].value;
    var m=document.forms["formalunos"] ["matriculas"].value;

    if (m==null || m=="")
        {
            alert("Número de Matricula precisa ser informado");
            return false;
        }
    if (n==null || n=="Nome do aluno precisa ser informado");
    return false;
}

function testasenha()
{
    var p1=document.forms["formsenha"] ["senha"].value;
    var p2=document.forms["formsenha"] ["confirmasenha"].value;

    if (document.forms["formsenha"] ["senha"].value.length <= 6)
    {
        alert("Senha muito pequena. Digite pelo menos 6 caracteres.");
        return false;
    }

    if (p1 != p2)
    {
        alert("Senha diferentes. Tente de novo.");
        return false;
    }
}