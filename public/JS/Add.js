const select_room = document.querySelector('#room');
const capacity = document.querySelector('#capacity');
const suite = document.querySelector('#suite');

suite.style.display = "none";

let person = document.querySelector('#Person');
person.style.display="none";
person.disabled  = true;
capacity.value = '1';
select_room.addEventListener('change',()=>{
    
    let select_room_value = document.querySelector('#room').value;
    if(select_room_value === "single"){
        person.disabled  = true;
        person.style.display="none";
        suite.style.display="none";
        capacity.value = '1';
        capacity.style.display='block';
    }
    if(select_room_value === "double"){
        person.style.display="none";
        person.disabled  = true;
        suite.style.display="none";
        capacity.value = '2';
        capacity.style.display='block';
    }
    if(select_room_value === "suite"){
        person.value = "3";
        person.style.display="block";
        person.disabled  = false;
        capacity.style.display='none';
        suite.style.display="block";
    }
})