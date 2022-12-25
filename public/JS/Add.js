const select_room = document.querySelector('#room');
const capacity = document.querySelector('#capacity');
const suite = document.querySelector('#suite');
const suiteselect = document.querySelector('#suite_select');
const bigPerson = document.querySelector('.bigPerson');
const bigCapacity = document.querySelector('.bigCapacity');
suite.style.display = "none";
suiteselect.setAttribute('name','another');
let person = document.querySelector('#Person');
person.setAttribute('name','anotherName');
bigPerson.style.display="none";
capacity.value = '1';
select_room.addEventListener('change',()=>{
    
    let select_room_value = document.querySelector('#room').value;
    if(select_room_value === "single"){
        person.setAttribute('name','anotherName');
        capacity.setAttribute('name','capacity');
        suiteselect.setAttribute('name','another');
        // bigPerson.style.display="none";
        suite.style.display="none";
        capacity.value = '1';
        bigCapacity.style.display='block';
        bigPerson.style.display="none";
    }
    if(select_room_value === "double"){
        person.style.display="none";
        person.setAttribute('name','anotherName');
        capacity.setAttribute('name','capacity');
        suiteselect.setAttribute('name','another');
        suite.style.display="none";
        capacity.value = '2';
        bigCapacity.style.display='block';
        bigPerson.style.display="none";
    }
    if(select_room_value === "suite"){
        person.value = "3";
        person.style.display="block";
        capacity.setAttribute('name','anotherName');
        suiteselect.setAttribute('name','suite');

        person.setAttribute('name','capacity');
        bigCapacity.style.display='none';
        suite.style.display="block";
        bigPerson.style.display="block";
    }

})

document.querySelector('#checkerbtn').addEventListener('click',()=>{
    console.log('name of Person',person.name);
    console.log('name of capacity',capacity.name);
})

