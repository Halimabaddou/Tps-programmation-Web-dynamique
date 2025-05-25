const form = document.getElementById("form-todo");
const input = document.getElementById("task-input");
const list = document.getElementById("task-list");

form.addEventListener("submit", function(e) {
    e.preventDefault();

    const text = input.value.trim();
    if (text === "") return;

    const li = document.createElement("li");
    li.textContent = text;

    // Marquer comme accompli
    li.addEventListener("click", function() {
        li.classList.toggle("completed");
    });

    // Supprimer la tâche au double clic
    li.addEventListener("dblclick", function() {
        li.remove();
    });

    list.appendChild(li);
    input.value = "";
});
