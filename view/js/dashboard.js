let form = document.getElementById('formsDropdown');
let list = document.getElementById('dropdown');

function SidebardDropdown () {
    
    if(list.style.display === 'block') {
        list.style.display = 'none';
    } else {
        list.style.display = 'block';
    }
}

form.addEventListener('click', SidebardDropdown);
