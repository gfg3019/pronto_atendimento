function arrastar(ev){
    ev.dataTransfer.setData("text/plain",ev.target.id);
    ev.dropEffect = "move";
}
function arrastAquiMouse(ev){
    ev.preventDefault();
    ev.dataTransfer.dropEffect = "move";
}
function receberBlue(ev){
    ev.preventDefault();
    var data = ev.dataTransfer.getData("text");
    ev.target.appendChild(document.getElementById(data));
    alert("paciente encaminhado para ala azul.");
}
function receberYellow(ev){
    ev.preventDefault();
    var data = ev.dataTransfer.getData("text");
    ev.target.appendChild(document.getElementById(data));
    alert("paciente encaminhado para ala amarela.");
}
function receberRed(ev){
    ev.preventDefault();
    var data = ev.dataTransfer.getData("text");
    ev.target.appendChild(document.getElementById(data));
    alert("paciente encaminhado para ala vermelho.");
}
