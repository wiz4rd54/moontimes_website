var new_id = 0;

function todelete( _elementId ) {
    let todelete = document.getElementById(_elementId).tagName;
    document.getElementById(_elementId).remove(todelete);
    new_id --;
};

function chkTask( _taskID ) {
    document.getElementById(_taskID).style.textDecorationLine= "line-through";
    document.getElementById(_taskID).style.opacity= 0.6;
};

document.addEventListener('DOMContentLoaded', function() {
    // by default, submit buttton is disabled

    document.querySelector('#submit').disabled = true;

    document.querySelector('#newtask').onkeyup = () => {
        if (document.querySelector('#newtask').value.length > 0) {
            document.querySelector('#submit').disabled = false;
            document.querySelector('#submit').style.border = "2px solid coral";
            document.querySelector('#submit').style.cursor = "pointer";
        }
        else {
            document.querySelector('#submit').disabled = true;
            document.querySelector('#submit').style.border = "none";
            document.querySelector('#submit').style.cursor = "default";
        }
    };

    document.querySelector('form').onsubmit = () => {
        const task = document.querySelector('#newtask').value;
        
        const li = document.createElement('li');
        li.id = new_id;
        li.innerHTML = ` ${task} <i class="far fa-check-circle" onclick="chkTask(${new_id})"></i><i class="far fa-times-circle" onclick="todelete(${new_id})")"></i> `;
        console.log(new_id);
        document.querySelector('#todo').appendChild(li);
        new_id = new_id +1;
        document.querySelector('#newtask').value = '';
        document.querySelector('#submit').disabled = true;
        document.querySelector('#submit').style.border = "none";
        document.querySelector('#submit').style.cursor = "default";
        // Stop form from submitting
        return false;
    };

});