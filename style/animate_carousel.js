var panels;

function initCarousel() {

    panels = new Array();
    panels[0] = document.getElementById('c_1');
    panels[1] = document.getElementById('c_2');
    panels[2] = document.getElementById('c_3');
    panels[3] = document.getElementById('c_4');
}

function c_suiv() {
    
    var state = getState();
    
    panels[0].innerHTML = state[1];
    panels[1].innerHTML = state[2];
    panels[2].innerHTML = state[3];
    panels[3].innerHTML = state[0];
}

function c_prec(){ 
    
    var state = getState();
    
    panels[0].innerHTML = state[3];
    panels[1].innerHTML = state[0];
    panels[2].innerHTML = state[1];
    panels[3].innerHTML = state[2];
}

function getState() {
    
    var state = new Array();
    state[0] = panels[0].innerHTML;
    state[1] = panels[1].innerHTML;
    state[2] = panels[2].innerHTML;
    state[3] = panels[3].innerHTML;
    
    return state;
}