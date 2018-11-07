//'use strict';

var width = 10;
var height = 10;
var bombNumber = 25;
var tab = new Array();
var win = false;
var emptyCase = width * height - bombNumber;

// Codes des touches souris
const TOUCHE_GAUCHE = 0;
const TOUCHE_MILIEU = 1;


function createGrid(width, height, bombNumber) {

	for (var i = 0; i < height; i++) {
		for (var j = 0; j < width; j++) {
			tab.push(false);
		}
	}
	var k = 0;

	while (k < bombNumber) {
		var random = Math.round(Math.random() * (tab.length - 1));
		while (tab[random] == true) {
			random = Math.round(Math.random() * (tab.length - 1));
		}
		tab[random] = true;
		k++;
	}
}

function getBombNumber(grid, indice, larg, long) {

	var i = 0;
	if (indice > 0) {
		indice--;
	}

	/* Droite */
	if (grid[indice + 1] == true) {
		i++;
	}
	/* Gauche */
	if (grid[indice - 1] == true) {
		i++;
	}
	/* Bas */
	if (grid[indice + larg] == true) {
		i++;
	}
	/* Haut */
	if (grid[indice - larg] == true) {
		i++;
	}

	/* Bas-Droite */
	if (grid[indice - larg + 1] == true) {
		i++;
	}

	/* Bas-Gauche */
	if (grid[indice - larg - 1] == true) {
		i++;
	}

	/* Haut-Droite */
	if (grid[indice + larg + 1] == true) {
		i++;
	}

	/* Haut-Gauche */
	if (grid[indice + larg - 1] == true) {
		i++;
	}

	/* Bordure Droite */
	if ((indice + 1) % larg == 0) {

		if (grid[indice + 1] == true) {
			i--;
		}
		if (grid[indice + larg + 1] == true) {
			i--;
		}
		if (grid[indice - larg + 1] == true) {
			i--;
		}
	}

	/* Bordure Gauche */
	if ((indice + 1) % larg == 1) {

		if (grid[indice - 1] == true) {
			i--;
		}
		if (grid[indice + larg - 1] == true) {
			i--;
		}
		if (grid[indice - larg - 1] == true) {
			i--;
		}
	}

	return i;
}


function view(grid, width, height) {

	var k = 0;
	document.write("<table>");

	for (var i = 0; i < height; i++) {
		document.write("<tr>");
		for (var j = 0; j < width; j++) {

			nbBomb = getBombNumber(tab, k + 1, width, height);
			if (grid[k] == true) {

				document.write("<td class='bomb'><button></button></td>");
			}
			else {

				document.write("<td style='color: green;'><button></button><p class='visibility'>" + nbBomb + "</p></td>");
			}
			k++;
		}
		document.write("</tr>");
	}
	document.write("</table>");
}


function partyEnd() {

	if (win == true) {
		if (emptyCase == 0) {
			alert("Bravo ! Vous avez gagné !");
		}
		else {
			alert("Désolé, vous avez perdu :(")
		}
	}
}


function leftClick(space) {

	space.classList.add("visibility");
	if (space.parentElement.querySelector("p") != null) {
		space.parentElement.querySelector("p").classList.remove("visibility");
	}
	else {
		win = true;
	}
	partyEnd();
}


function centerClick(space) {

	space.classList.toggle("flag");
}


function onClick(event) {

	var touch = event.button;

	if (touch == TOUCHE_GAUCHE) {

		leftClick(this);
	}
	else if (touch == TOUCHE_MILIEU) {

		centerClick(this);
	}
	console.log(touch);
}

createGrid(width, height, bombNumber);
view(tab, width, height);

var tiles = document.querySelectorAll("button");
for (var i = 0; i < tiles.length; i++) {
	tiles[i].addEventListener("mouseup", onClick);
}

