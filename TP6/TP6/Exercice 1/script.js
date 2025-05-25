// Créer une div
const div = document.createElement("div");
div.id = "maDiv";

// Créer un paragraphe à l'intérieur de la div
const p = document.createElement("p");
p.textContent = "Ceci est un paragraphe";
div.appendChild(p);

// Modifier le texte du paragraphe
p.textContent = "Le texte a été modifié";

// Ajouter la div à la page
document.body.appendChild(div);

// Ajouter un événement au clic
div.addEventListener("click", () => {
    p.textContent = "Un clic a été détecté";
});
