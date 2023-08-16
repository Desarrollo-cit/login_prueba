import { validarFormulario, Toast } from "../funciones";

const formLogin = document.querySelector('form')


const login = async e => {
    e.preventDefault();
   
    if(!validarFormulario(formLogin)){
        Toast.fire({
            icon: 'info',
            title: 'Debe llenar todos los campos'
        })
        return
    }

    try {
        const url = '/login_prueba/API/login'

        const body = new FormData(formLogin);
        
        const headers = new Headers();
        headers.append("X-Requested-With", "fetch");

        const config = {
            method: 'POST',
            headers,
            body
        }

        const respuesta = await fetch(url, config);
        const data = await respuesta.json();
        console.log(data);
        

    } catch (error) {
        console.log(error);
    }

    
}

formLogin.addEventListener('submit', login );
