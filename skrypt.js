var litery = "AĄBCĆDEĘFGHIJKLŁMNŃOÓPQRSŚTUVWXYZŹŻ";
var hasla[4] = {"idzie burza", "dobre pomaranczowe", "testoweh haslo1", "testowe haslo2"};

var hasloo = "";
var niewidoczne_halso="";
var blad=0;

function ustaw(nrobrazka)
{
	$("#obrazek").html("<img src='.\\img\\s"+nrobrazka+".jpg' />");
}



function schow_pass() {
	var num_hasla = 0;

	num_hasla = Math.floor(Math.random() * 3);

	hasloo = hasla[num_hasla];

	hasloo = hasloo.toUpperCase();

	niewidoczne_halso="";

	var i=0;

	while(i<hasloo.length)
	{
		if(hasloo.charAt(i)==" ")
		{
			niewidoczne_halso = niewidoczne_halso + " ";
		}

		else
		{
			niewidoczne_halso = niewidoczne_halso + "-";
		}
		
		i++;
	}
	$("#haslo").html(niewidoczne_halso);
}

function click_litery(nrlitery)
{
	var nowe_haslo="";
	var przegladana_litera = 0;
	var isblad = true;

	while(przegladana_litera<hasloo.length)
	{
		if(niewidoczne_halso.charAt(przegladana_litera)=="-")
		{
			if(hasloo.charAt(przegladana_litera)==litery.charAt(nrlitery))
			{
				nowe_haslo = nowe_haslo+litery.charAt(nrlitery);
				isblad = false;
			}

			else
			{
				if(hasloo.charAt(przegladana_litera)==" ")
				{
					nowe_haslo = nowe_haslo+" ";
				}
				else
				{
					nowe_haslo = nowe_haslo + "-";
				}

			}
		}

		else
		{
			nowe_haslo = nowe_haslo+niewidoczne_halso.charAt(przegladana_litera);
		}


		przegladana_litera++;
	}

	if(isblad==true)
	{
		//blad 
		blad++;
		
		if(blad<10)
		{
			ustaw(blad);
			$('#lit_'+nrlitery).toggleClass('litera_blad');
			$('#lit_'+nrlitery).attr('onclick', ';');
		}
		else
		{
			$("#obrazek").html("Koniec gry!</br><span onclick='restart()'>Restart?</span>");
			endgame();
		}
	}

	else
	{
		//bez bledu
		$('#lit_'+nrlitery).toggleClass('litera_true');
		$('#lit_'+nrlitery).attr('onclick', ';');

		if (nowe_haslo==hasloo) {		
			$("#obrazek").html("Wygrana!</br><span onclick='restart()'>Restart?</span>");

			endgame();
		}
	}

		
		niewidoczne_halso = nowe_haslo;

		$("#haslo").html(niewidoczne_halso);

	
}


function endgame()
{
	var przegladana_litera = 0;


	while(przegladana_litera<35)
	{
		$('#lit_'+przegladana_litera).fadeOut(1000);
		przegladana_litera++;
	}
}

function restart()
{
	ustaw(0);
	schow_pass();
	blad=0;

	var przegladana_litera = 0;


	while(przegladana_litera<35)
	{
		$('#lit_'+przegladana_litera).fadeIn(1000);
		$('#lit_'+przegladana_litera).attr('class', 'litera');
		$('#lit_'+przegladana_litera).attr('onclick', 'click_litery('+przegladana_litera+')');
		przegladana_litera++;
	}
}

$(document).ready(function() {
	ustaw(0);
	schow_pass();

	var numer_litery = 0;
	var litery_html = "";
	while(numer_litery<35)
	{
		litery_html = litery_html+"<div class='litera' id='lit_"+numer_litery+"' onclick='click_litery("+numer_litery+")'>"+litery.charAt(numer_litery)+"</div>";
		
		numer_litery++;
	}

	$("#litery").html(litery_html);
});