
let nombre1 = parseFloat(prompt("Entrez le premier nombre :"));
let nombre2 = parseFloat(prompt("Entrez le deuxième nombre :"));

if (nombre1 === 0 || nombre2 === 0) {
  alert("Le produit est nul.");
}
else if ((nombre1 < 0 && nombre2 > 0) || (nombre1 > 0 && nombre2 < 0)) {
  alert("Le produit est négatif.");
}
else {
  alert("Le produit est positif.");
}
