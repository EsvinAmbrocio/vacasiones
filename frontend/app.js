const URL_API = 'http://localhost:7000/'

document.addEventListener('DOMContentLoaded', (e) => {

  const vacationRequestInput = document.querySelector('#vacation-request')
  if(!(vacationRequestInput instanceof HTMLFormElement)){
    throw new Error('No existe el formulario')
  }

  vacationRequestInput.addEventListener('submit', (e)=> {
    e.preventDefault()
    const form = new FormData(vacationRequestInput)
  })

  const nameInput = vacationRequestInput.querySelector('#name')
  if(!(nameInput instanceof HTMLInputElement)){
    throw new Error('No existe el input de nombre')
  }
  nameInput.addEventListener('keyup', (e)=> {
    if(!Boolean(nameInput.value)){
      return;
    }
    fetch(URL_API, {
      method: 'PUT'
    }).then((response)=> {
      console.log(response)
    }).catch((e) => {
      console.log(e)
    })
  })
})
