# Realización de una página web utilizando PHP
## UNIR Practica - Actividad 1
### Computación Cliente y Servidor (MEXINGWEB)

    /**
     *  Notas del Funcionamiento:
     *  Cuando el usuario manda el formulario, hacemos los siguientes pasos:
     *  1) Verificamos que no vengan campos vacios
     *  2) Despues procedemos a verificar campo por campo siguiendo reglas diferentes en cada campo
     *   a) Campos que solo tengas letras
     *   b) Si es campo numero que no contenga caracteres invalidos
     *   c) Si es correo que no falte ".com" para esta practica, en la vida real hay mas opciones.
     * 
     *  Todos los errores los vamos almacenando en un arreglo que nos servira para reportar el resultado,
     *  al mismo tiempo mangtenemos el resultado de la validacion en una variable de tipo boleana para
     *  poder controlar colores y elementos en la interfaz de usuario.
     */

![Pagina de Registro.png](src%2Frecursos%2Fimagenes%2FPagina%20de%20Registro.png)

![Validacion en HTML5.png](src%2Frecursos%2Fimagenes%2FValidacion%20en%20HTML5.png)

![Formulario Valido.png](src%2Frecursos%2Fimagenes%2FFormulario%20Valido.png)

![Resultado Valido.png](src%2Frecursos%2Fimagenes%2FResultado%20Valido.png)

![Formulario Invalido.png](src%2Frecursos%2Fimagenes%2FFormulario%20Invalido.png)

![Resultado Invalido.png](src%2Frecursos%2Fimagenes%2FResultado%20Invalido.png)