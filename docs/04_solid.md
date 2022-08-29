1. Single-responsability o Principio de Responsabilidad Unica:
    * Si una clase tiene muchas responsabilidades, aumenta la posibilidad de errores porque hacer cambios en una de sus responsabilidades podría afectar a las otras sin que usted lo sepa.
    * "Una clase debe tener solo una razón para cambiar" Se eligió esta clase porque cumple con las características de este, es decir, la Clase User se encarga únicamente de recopilar la información de una persona como nombre, email, password.

    ![image](https://user-images.githubusercontent.com/38531618/187102312-d7325020-0e75-4edc-b064-45cc79059055.png)

    El principio de responsabilidad única busca que el código quede encapsulado y exista independencia entre las clases, sus funcionalidades. Al utilizar clases hemos procurado cumplir con este criterio, ya que encapsulamos la funcionalidad de cada una para que realicen una única función.

    ![image](https://user-images.githubusercontent.com/38531618/187102463-00755695-e1d4-43be-aa37-0567a84c2b07.png)

    Por ejemplo, en la imagen se ve que se han independizado las funciones, entre ellas editar la sesión, y otras. Esto también ayuda a la reutilización del código en caso de cambios o mantenimiento.

2. Segregación de la Interfaz:

    Según este principio es mejor tener una clase pequeña y especializada que una muy grande, para poder hacer un mejor objetivo hacia las necesidades del sistema. En nuestro trabajo, hemos procurado seguir esta norma al no sobrecargar las funcionalidades de las clases sin más de lo que se necesite. Por ejemplo en la captura se ve que cada función está dirigida a un único fin, aunque pertenezcan al mismo sistema, estan especializados.
    
    ![image](https://user-images.githubusercontent.com/38531618/187102463-00755695-e1d4-43be-aa37-0567a84c2b07.png)

3. Inversión de dependencia:
    El principio de inversión de dependencia busca reducir el acople entre sistemas de software. En nuestro caso, el sistema independiza la tecnología de bases de datos, ya que podríamos migrar con facilidad a otro sistema de bases de datos, pues utilizamos el framework Laravel, donde existe una abstracción que nos permite cambiar el tipo de BD utilizada mediante modificar algunos datos de forma sencilla. Esto nos brinda libertad para la implementación y cambiar de tecnología de BD afectando mínimamente las partes del sistema.

    ![image](https://user-images.githubusercontent.com/38531618/187102796-4e5bca87-32ff-4bb4-8677-2e689ff789e5.png)
1. Single-responsability o Principio de Responsabilidad Unica:
    * Si una clase tiene muchas responsabilidades, aumenta la posibilidad de errores porque hacer cambios en una de sus responsabilidades podría afectar a las otras sin que usted lo sepa.
    * "Una clase debe tener solo una razón para cambiar" Se eligió esta clase porque cumple con las características de este, es decir, la Clase User se encarga únicamente de recopilar la información de una persona como nombre, email, password.

    ![image](https://user-images.githubusercontent.com/38531618/187102312-d7325020-0e75-4edc-b064-45cc79059055.png)

    El principio de responsabilidad única busca que el código quede encapsulado y exista independencia entre las clases, sus funcionalidades. Al utilizar clases hemos procurado cumplir con este criterio, ya que encapsulamos la funcionalidad de cada una para que realicen una única función.

    ![image](https://user-images.githubusercontent.com/38531618/187102463-00755695-e1d4-43be-aa37-0567a84c2b07.png)

    Por ejemplo, en la imagen se ve que se han independizado las funciones, entre ellas editar la sesión, y otras. Esto también ayuda a la reutilización del código en caso de cambios o mantenimiento.

2. Segregación de la Interfaz:

    Según este principio es mejor tener una clase pequeña y especializada que una muy grande, para poder hacer un mejor objetivo hacia las necesidades del sistema. En nuestro trabajo, hemos procurado seguir esta norma al no sobrecargar las funcionalidades de las clases sin más de lo que se necesite. Por ejemplo en la captura se ve que cada función está dirigida a un único fin, aunque pertenezcan al mismo sistema, estan especializados.
    
    ![image](https://user-images.githubusercontent.com/38531618/187102463-00755695-e1d4-43be-aa37-0567a84c2b07.png)

3. Inversión de dependencia:
    El principio de inversión de dependencia busca reducir el acople entre sistemas de software. En nuestro caso, el sistema independiza la tecnología de bases de datos, ya que podríamos migrar con facilidad a otro sistema de bases de datos, pues utilizamos el framework Laravel, donde existe una abstracción que nos permite cambiar el tipo de BD utilizada mediante modificar algunos datos de forma sencilla. Esto nos brinda libertad para la implementación y cambiar de tecnología de BD afectando mínimamente las partes del sistema.

      ![image](https://user-images.githubusercontent.com/38531618/187102796-4e5bca87-32ff-4bb4-8677-2e689ff789e5.png)
