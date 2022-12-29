let input = document.querySelector('#invit');
let continv = document.querySelector('.container-invit');
input.addEventListener('input',()=>{
    continv.innerHTML= "";
    let number =  input.value;
    if(number > 0 ){
        let i = 1;
        while(i <= number){
            continv.innerHTML+=`

            <label for="">Full Name: ${i}</label>
            <input type="text" name="invf${i}" >
            <label for="">Date of birth:${i}</label>
            <input type="date" name="invb${i}" >

            `;
            i++;
        }
    }
})