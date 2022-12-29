const btn = document.querySelector('.bknow');
const out = document.querySelector('.dateout');
const inn = document.querySelector('#date');
const input = document.querySelector('#guests');


let today = new Date().toISOString().split('T')[0];
inn.setAttribute('min',today);
out.setAttribute('min',today);




document.querySelector('#children').style.display="none";
document.querySelector('#suite').style.display="none";
// document.querySelector('.book').style.width="620px";
btn.addEventListener('click',()=>{
    // document.querySelector('.book').style.width="620px";
    document.querySelector('#children').style.display="none";
})

// const X = chambre.options[0];


let select = document.querySelector('#chambre');
select.addEventListener('change',()=>{
    const chambre = document.querySelector('#chambre').value;
    if(chambre === "suite"){
        document.querySelector('#children').style.display="flex";
        document.querySelector('#suite').style.display="flex";
        // document.querySelector('.book').style.margin="900px";
    }
    if(chambre === "single" || chambre === "double"){
        document.querySelector('#children').style.display="none";
        document.querySelector('#suite').style.display="none";
        // document.querySelector('.book').style.width="620px";

    }
})


